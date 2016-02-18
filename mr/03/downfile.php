<?php
	$del = $_GET['del'];
	$num =10;								//每页显示记录数
	$curpage = $_GET['curpage'];			//当前页
	$sql = "select * from tb_upfile where upauthor = '".$_SESSION['name']."'";
	$totnum = $conne->getRowsNum($sql);		//记录数
	if($del == 'del'){
		$rd = $_GET['rd'];
		$delsql = "delete from tb_upfile where id = -1 ";
		$deltotal = "select sum(filesize) as total from tb_upfile where id = -1 ";  //取得选择文件的总大小
		//-----------------------------------------------------------------------
		$content="select * from tb_member where name ='".$_SESSION['name']."'";
		$contarr = $conne->getRowsRst($content); 
		//echo $contarr['content'];//查看已用文件大小 单位是字节数          
		//-----------------------------------------------------------------------
		if(!empty($rd)){
			$delarr = explode(',',$rd);
			foreach($delarr as $value)
			 {
			 //以下为新加内容 在删除文件的同时也可以删除硬盘文件夹上的文件！
			    $sql= "select * from tb_upfile where id = ".$value." ";    //选取删除文件的ID值
	            $delsql .= " or id = ".$value." ";
				$deltotal .= " or id = ".$value." ";
			    $sqlarr = $conne->getRowsRst($sql);                        //调用SQL函数
				$delpath=$sqlarr['filepath'];                              //获得删除文件路径
				unlink($delpath);                                          //删除指定路径的文件
			 }
			 $deltotalnum=$conne->getRowsRst($deltotal);
			 
			 //echo  $deltotalnum['total']; //删除文件的总大小
			 $newdata = $contarr['content']-$deltotalnum['total'];
			 //echo $newdata; //删除文件后占用的总大小
			 $newsql="update tb_member set content = $newdata where name = '".$_SESSION['name']."'";
			 $conne->uidRst($newsql);      //把删除文件后的总大小更新到数据库
			 $delnum = $conne->uidRst($delsql);
			echo "<meta http-equiv=\"refresh\" content=\"1;url=index.php?act=down\">";
			echo "<p></p>";
			echo "删除成功！";
			 }
			
	}
	$totpage = ceil($totnum / $num);		//页数
	if(empty($curpage) or is_null($curpage)){
		$curpage = 1;
	}else if($curpage < 1){
		$curpage = 1;
	}else if($curpage > $totpage){
		$curpage = $totpage;
	}
	$sql = $sql." limit ".($num *($curpage-1)).",".$num;
	$filearray = $conne->getRowsArray($sql);
	$conne->close_rst();
?>
<div id="filelist">
<?php
if(!empty($filearray)){
?>
	<ul>
		<li style=" width: 30px; background-color: #F8E7A5;">&nbsp;</li>
		<li style=" width: 200px; background-color:#F8E7A5; ">文件名</li>
		<li style=" width: 50px; background-color:#F8E7A5; ">文件类型</li>
		<li style=" width: 100px; background-color:#F8E7A5;">下载码</li>
		<li style=" width: 150px; background-color:#F8E7A5;">上传时间</li>
		<li style=" width: 50px; background: #F8E7A5; ">更改状态</li>
    </ul>
<?php
	$infoline = 0;
	foreach($filearray as $key => $value){
?>
	<ul>
		<li style=" width: 30px;background-color: <?php echo ($infoline %2 ==0?'#FFFFFF':'#f0f0f0'); ?>;"><input id="chk[<?php echo $key; ?>]" type="checkbox" value="<?php echo $value['id']; ?>" style=" width:30px; height:20px; border: 0px;" /></li>
		<li style=" width: 200px; background-color:<?php echo ($infoline %2 ==0?'#FFFFFF':'#f0f0f0'); ?>;">&nbsp;<a href="download.php?id=<?php echo $value['id']; ?>"><?php echo $value['filename']; ?></a></li>
		<li style=" width: 50px; background-color:  <?php echo ($infoline %2 ==0?'#FFFFFF':'#f0f0f0'); ?>;">&nbsp;<?php echo $value['filetype']; ?></li>
		<li style=" width: 100px; background-color: <?php echo ($infoline %2 ==0?'#FFFFFF':'#f0f0f0'); ?>;">&nbsp;<?php echo $value['chkdownnum']; ?></li>
		<li style=" width: 150px; background-color: <?php echo ($infoline %2 ==0?'#FFFFFF':'#f0f0f0'); ?>;">&nbsp;<?php echo $value['uptime']; ?></li>
		<li style=" width: 50px; background-color:  <?php echo ($infoline %2 ==0?'#FFFFFF':'#f0f0f0'); ?>;">&nbsp;<?php echo '<a onclick=" changepub(\''.$_SERVER['REQUEST_URI'].'\','.$value['id'].','.$value['ispub'].')">'.($value['ispub']==0?'不公开':'公开').'</a>'; ?>&nbsp;</li>
	</ul>
<?php
		$infoline = ($infoline+1)%2;
	}
?>
	<ul>
	<li style=" line-height: 16px;">
	<a href="#" onclick="return alldel('<?php echo count($filearray); ?>')">全选</a>
	<a href="#" onclick="return overdel('<?php echo count($filearray) ?>')">反选</a>
	<a href="#" id="delbtn" name="delbtn"onclick="return del('?act=down','<?php echo count($filearray); ?>',<?php echo $curpage; ?>)">删除选择</a>
	
	
	 <font color="#000000"><?php echo ($curpage == 1)?"首页":"<a  onclick='return pagination(\"?act=down\",1)'>首页</a>"; ?>&nbsp;<?php echo ($curpage==1)?"上一页":"<a onclick='return pagination(\"?act=down\",".($curpage-1).")'>上一页</a>"; ?>&nbsp;<?php echo ($curpage == $totpage)?'下一页':"<a onclick='return pagination(\"?act=down\",".($curpage+1).")'>下一页</a>"; ?> <?php echo ($curpage==$totpage)?"尾页":"<a onclick='return pagination(\"?act=down\",".($totpage).")'>尾页</a>"; ?> 当前是第<?php echo $curpage; ?>页/共<?php echo $totpage; ?>页<?php echo $totnum; ?>条记录</font>
	 <select id="jump" name="jump" onchange="return jumpmem('?act=down')">
	
			<?php
				for($i=1;$i<=$totpage;$i++){
					if($i == $curpage)
						echo "<option value=".$i." selected>".$i."</option>";
					else
						echo "<option value=".$i.">".$i."</option>";
				}
			?>
	  </select> 页
	 </li>
	</ul>
<?php
	}else{
		echo '暂时没有上传文件。';
	}
?>	
</div>
