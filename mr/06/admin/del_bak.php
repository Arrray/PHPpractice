<?php
	session_start();
	include 'config.php';
	include 'func.php';
	$f_name = show_file(PATH.ROOT.ADMIN.BAK);
	if(count($f_name)>=3){
	for($num = 2;$num < count($f_name);$num++){
		unlink(PATH.ROOT.ADMIN.BAK.$f_name[$num]);
	}
	echo "<script>alert('ɾ���ɹ���');location='index.php?title=���ݺͻָ�'</script>";
}else{

	echo "<script>alert('û�б����ļ���');location='index.php?title=���ݺͻָ�'</script>";
}

?>