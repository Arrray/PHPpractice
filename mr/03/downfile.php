<?php
	$del = $_GET['del'];
	$num =10;								//ÿҳ��ʾ��¼��
	$curpage = $_GET['curpage'];			//��ǰҳ
	$sql = "select * from tb_upfile where upauthor = '".$_SESSION['name']."'";
	$totnum = $conne->getRowsNum($sql);		//��¼��
	if($del == 'del'){
		$rd = $_GET['rd'];
		$delsql = "delete from tb_upfile where id = -1 ";
		$deltotal = "select sum(filesize) as total from tb_upfile where id = -1 ";  //ȡ��ѡ���ļ����ܴ�С
		//-----------------------------------------------------------------------
		$content="select * from tb_member where name ='".$_SESSION['name']."'";
		$contarr = $conne->getRowsRst($content); 
		//echo $contarr['content'];//�鿴�����ļ���С ��λ���ֽ���          
		//-----------------------------------------------------------------------
		if(!empty($rd)){
			$delarr = explode(',',$rd);
			foreach($delarr as $value)
			 {
			 //����Ϊ�¼����� ��ɾ���ļ���ͬʱҲ����ɾ��Ӳ���ļ����ϵ��ļ���
			    $sql= "select * from tb_upfile where id = ".$value." ";    //ѡȡɾ���ļ���IDֵ
	            $delsql .= " or id = ".$value." ";
				$deltotal .= " or id = ".$value." ";
			    $sqlarr = $conne->getRowsRst($sql);                        //����SQL����
				$delpath=$sqlarr['filepath'];                              //���ɾ���ļ�·��
				unlink($delpath);                                          //ɾ��ָ��·�����ļ�
			 }
			 $deltotalnum=$conne->getRowsRst($deltotal);
			 
			 //echo  $deltotalnum['total']; //ɾ���ļ����ܴ�С
			 $newdata = $contarr['content']-$deltotalnum['total'];
			 //echo $newdata; //ɾ���ļ���ռ�õ��ܴ�С
			 $newsql="update tb_member set content = $newdata where name = '".$_SESSION['name']."'";
			 $conne->uidRst($newsql);      //��ɾ���ļ�����ܴ�С���µ����ݿ�
			 $delnum = $conne->uidRst($delsql);
			echo "<meta http-equiv=\"refresh\" content=\"1;url=index.php?act=down\">";
			echo "<p></p>";
			echo "ɾ���ɹ���";
			 }
			
	}
	$totpage = ceil($totnum / $num);		//ҳ��
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
		<li style=" width: 200px; background-color:#F8E7A5; ">�ļ���</li>
		<li style=" width: 50px; background-color:#F8E7A5; ">�ļ�����</li>
		<li style=" width: 100px; background-color:#F8E7A5;">������</li>
		<li style=" width: 150px; background-color:#F8E7A5;">�ϴ�ʱ��</li>
		<li style=" width: 50px; background: #F8E7A5; ">����״̬</li>
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
		<li style=" width: 50px; background-color:  <?php echo ($infoline %2 ==0?'#FFFFFF':'#f0f0f0'); ?>;">&nbsp;<?php echo '<a onclick=" changepub(\''.$_SERVER['REQUEST_URI'].'\','.$value['id'].','.$value['ispub'].')">'.($value['ispub']==0?'������':'����').'</a>'; ?>&nbsp;</li>
	</ul>
<?php
		$infoline = ($infoline+1)%2;
	}
?>
	<ul>
	<li style=" line-height: 16px;">
	<a href="#" onclick="return alldel('<?php echo count($filearray); ?>')">ȫѡ</a>
	<a href="#" onclick="return overdel('<?php echo count($filearray) ?>')">��ѡ</a>
	<a href="#" id="delbtn" name="delbtn"onclick="return del('?act=down','<?php echo count($filearray); ?>',<?php echo $curpage; ?>)">ɾ��ѡ��</a>
	
	
	 <font color="#000000"><?php echo ($curpage == 1)?"��ҳ":"<a  onclick='return pagination(\"?act=down\",1)'>��ҳ</a>"; ?>&nbsp;<?php echo ($curpage==1)?"��һҳ":"<a onclick='return pagination(\"?act=down\",".($curpage-1).")'>��һҳ</a>"; ?>&nbsp;<?php echo ($curpage == $totpage)?'��һҳ':"<a onclick='return pagination(\"?act=down\",".($curpage+1).")'>��һҳ</a>"; ?> <?php echo ($curpage==$totpage)?"βҳ":"<a onclick='return pagination(\"?act=down\",".($totpage).")'>βҳ</a>"; ?> ��ǰ�ǵ�<?php echo $curpage; ?>ҳ/��<?php echo $totpage; ?>ҳ<?php echo $totnum; ?>����¼</font>
	 <select id="jump" name="jump" onchange="return jumpmem('?act=down')">
	
			<?php
				for($i=1;$i<=$totpage;$i++){
					if($i == $curpage)
						echo "<option value=".$i." selected>".$i."</option>";
					else
						echo "<option value=".$i.">".$i."</option>";
				}
			?>
	  </select> ҳ
	 </li>
	</ul>
<?php
	}else{
		echo '��ʱû���ϴ��ļ���';
	}
?>	
</div>
