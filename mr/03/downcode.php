<?php
	$chkdown = trim($_GET['chkdown']);
	$downsql = "select * from tb_upfile where chkdownnum = '".$chkdown."'";
	$downarr = $conne->getRowsArray($downsql);
?>

<div id="filelist">
<?php
$infoline = 0;
if(!empty($downarr)){
?>
	<ul>
		<li style=" width: 30px; background-color: #F8E7A5;">&nbsp;</li>
		<li style=" width: 200px; background-color:#F8E7A5; ">文件名</li>
		<li style=" width: 50px; background-color:#F8E7A5; ">文件类型</li>
		<li style=" width: 100px; background-color:#F8E7A5;">下载码</li>
		<li style=" width: 150px; background-color:#F8E7A5;">上传时间</li>
	</ul>
<?php
	foreach($downarr as $key => $value){
?>
	<ul>
		<li style=" width: 30px;background-color: <?php echo ($infoline %2 ==0?'#FFFFFF':'#f0f0f0'); ?>;"><input id="chk[<?php echo $key; ?>]" type="checkbox" value="<?php echo $value['id']; ?>" style=" width:30px; height:20px; border: 0px;" /></li>
		<li style=" width: 200px; background-color:<?php echo ($infoline %2 ==0?'#FFFFFF':'#f0f0f0'); ?>;">&nbsp;<a href="download.php?id=<?php echo $value['id']; ?>"><?php echo $value['filename']; ?></a></li>
		<li style=" width: 50px; background-color:  <?php echo ($infoline %2 ==0?'#FFFFFF':'#f0f0f0'); ?>;">&nbsp;<?php echo $value['filetype']; ?></li>
		<li style=" width: 100px; background-color: <?php echo ($infoline %2 ==0?'#FFFFFF':'#f0f0f0'); ?>;">&nbsp;<?php echo $value['chkdownnum']; ?></li>
		<li style=" width: 150px; background-color: <?php echo ($infoline %2 ==0?'#FFFFFF':'#f0f0f0'); ?>;">&nbsp;<?php echo $value['uptime']; ?></li>
	</ul>
<?php
	$infoline = ($infoline+1)%2;
	}
}else{
	echo '没有可下载资源';
}
?>
</div>