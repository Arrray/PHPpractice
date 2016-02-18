<?php
	session_start();
	header('Content-Type:text/html; charset=gb2312');
	include_once 'conn/conn.php';
	include_once 'inc/admin.php';
	$act = $_GET['act'];
	$photoadminname = $_SESSION['name'];
?>
<script language="javascript" src="js/member.js"></script>
<link rel="stylesheet" href="css/style.css" />
<script language="javascript" src="js/member.js"></script>
<div id="contain">
<?Php
	include 'top.html';
	include 'nav.html';
?>
<div style=" width:805px; text-align:center;">
<?php
  switch($act){
  	case 'type':
		include_once 'pictype.php';
		break;
	case 'pic':
		include_once 'typelist.php';
		break;
	case 'upload':
		include_once 'upfile.php';
		break;
	case 'makealbum':
		include_once 'makealbum.php';
		break;
	case 'modpic':
		include_once 'mod.php';
		break;
	default:
		include_once 'typelist.php';
		break;
}
?>
</div>
<p />
<div><?php include '../bottom.html'; ?></div>
</div>

</div>