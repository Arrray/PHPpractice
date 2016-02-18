<?php
	session_start();
	include "conn/conn.php";
	$type1=$_POST[selecttype2];
	switch ($_POST[selecttype1]){
		case "Name":
		$name0=$_POST[dataname];
		$name2=$_POST[areaname];
		$name4=$_POST[publishername];
		$name5=$_POST[language];		
			$sql="select id,style,name,actor,remark,address from tb_video where name like '%".$name0."%' and froms like '%".$name2."%' and publisher like '%".$name4."%' and languages like '%".$name5."%'";
		
		//$_SESSION[sql]=$sql;
		break;	
		case "Actor":
		$name1=$_POST[actor];
		$name2=$_POST[director];
		$name3=$_POST[marker];
			$sql="select id,style,name,actor,remark,address from tb_video where actor like '%".$name1."%' and ci like '%".$name2."%' and qu like '%".$name3."%'";
			
		//$_SESSION["sql"]=$sql;
		break;
	}
?>

<script>
top.opener.location="index.php?lmbs=ËÑË÷&&action=high&&type=<?php echo $type1; ?>&&direction=<?php echo urlencode($sql);  ?>";
window.close();
</script>