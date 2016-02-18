<?php
	$num =10;								//每页显示记录数
	$curpage = $_GET['curpage'];			//当前页
	$sql = "select * from tb_upfile where ispub = 1";
	$totnum = $conne->getRowsNum($sql);		//记录数
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
		<li style=" width: 50px; background-color:#F8E7A5; ">编号</li>
		<li style=" width: 300px; background-color:#F8E7A5; ">文件名</li>
		<li style=" width: 50px; background-color:#F8E7A5; ">文件类型</li>
		<li style=" width: 150px; background-color:#F8E7A5;">上传时间</li>
	</ul>
<?php
	$infoline = 0;
	foreach($filearray as $key => $value){
?>
	<ul>
		<li style=" width: 50px; background-color:<?php echo ($infoline %2 ==0?'#FFFFFF':'#f0f0f0'); ?>;"><?php echo $key; ?></li>
		<li style=" width: 300px; background-color:<?php echo ($infoline %2 ==0?'#FFFFFF':'#f0f0f0'); ?>;">&nbsp;<a href="download.php?id=<?php echo $value['id']; ?>"><?php echo $value['filename']; ?></a></li>
		<li style=" width: 50px; background-color:  <?php echo ($infoline %2 ==0?'#FFFFFF':'#f0f0f0'); ?>;">&nbsp;<?php echo $value['filetype']; ?></li>
		<li style=" width: 150px; background-color: <?php echo ($infoline %2 ==0?'#FFFFFF':'#f0f0f0'); ?>;">&nbsp;<?php echo $value['uptime']; ?></li>
	</ul>
<?php
		$infoline = ($infoline+1)%2;
	}
?>
	<ul>
	<li style=" line-height: 16px;">
	
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
