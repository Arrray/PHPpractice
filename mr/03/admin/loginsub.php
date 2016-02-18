<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>登陆跳转</title>
</head>
<?php 
	include_once 'conn/conn.php';
	$reback = '0';
	$name = $_POST['name'];
	$pwd = $_POST['password'];
	if(!empty($name) and !empty($pwd)){
		$sql = "select name from tb_admin where name = '".$name."'";
		$num = $conne->getRowsNum($sql);
		$conne->close_rst();
		if($num == '' or $num == 0){
			$reback = '2';
		}else{
			$sql .= " and password = '".$pwd."'";
			$num = $conne->getRowsNum($sql);
			echo "res:";
			if($num == 0 or $num == ''){
                                echo "<meta http-equiv=\"refresh\" content=\"2;url=index.php\" />";
				echo "Login Failed! please wait 2 seconds to return the login page!";
				$reback = 2;
			}else{
			    echo "<meta http-equiv=\"refresh\" content=\"2;url=admin.php\" />";
				echo "Login succees! please wait 2 seconds to into the manger page!";
				$reback = '1';
			}
		}
	}
	echo $reback;
	
	?>
<body>
</body>
</html>
