<?php
	$num =10;								//ÿҳ��ʾ��¼��
	$curpage = $_GET['curpage'];			//��ǰҳ
	$sql = "select * from tb_upfile where ispub = 1";
	$totnum = $conne->getRowsNum($sql);		//��¼��
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
		<li style=" width: 50px; background-color:#F8E7A5; ">���</li>
		<li style=" width: 300px; background-color:#F8E7A5; ">�ļ���</li>
		<li style=" width: 50px; background-color:#F8E7A5; ">�ļ�����</li>
		<li style=" width: 150px; background-color:#F8E7A5;">�ϴ�ʱ��</li>
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
