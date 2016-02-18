<?php
	session_start();
	include 'config.php';
	include 'func.php';
	$f_name = show_file(PATH.ROOT.ADMIN.BAK);
	if(count($f_name)>=3){
	for($num = 2;$num < count($f_name);$num++){
		unlink(PATH.ROOT.ADMIN.BAK.$f_name[$num]);
	}
	echo "<script>alert('删除成功！');location='index.php?title=备份和恢复'</script>";
}else{

	echo "<script>alert('没有备份文件！');location='index.php?title=备份和恢复'</script>";
}

?>