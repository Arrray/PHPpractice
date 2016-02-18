<?php session_start();
include_once("config.php");
include_once("conn/conn.class.php");

if($_POST["action"] == "mod"){

  if($_POST["password"] == $_POST["two_pwd"]){
    $m_sql = "update tb_music_user set tb_music_pass = '".$_POST[password]."' where tb_music_id = ".$_POST[id];
	$rst_ud=$result->indeup($m_sql,$conn);
	    if($rst_ud==true){
	   echo "<script>alert('恭喜,密码更改成功.请重新登录');window.close();</script>";
	    }else{
	    echo "<script>alert('密码更改失败！');window.close();</script>";
		}
	  }

}
if($_POST["action"] == "chk"){
  if(($_POST[username] != "") and ($_POST[question] != "") and ($_POST[answer] != "")){
  $f_sql = "select * from tb_music_user where tb_music_question = '$_POST[question]' and tb_music_answer = '$_POST[answer]' and tb_music_user='$_POST[username]'";
  $rst_r=$result->login($f_sql,$conn);
  $rst_ri=$result->getRows($f_sql,$conn);
     if($rst_r==true){
	 //如果密码保护答案帐号匹配，则进入密码更改页面
	 $smarty->assign("foundpsw","T");
	 $smarty->assign("username",$rst_ri[0][tb_music_user]);
	 $smarty->assign("userid",$rst_ri[0][tb_music_id]);
	 }else{
	 echo "<script>alert('密码提示问题或答案不正确，请重新输入');history.back();</script>";
				exit();
	 }
  }
}
else{
//否则只输出找回密码首页
$smarty->assign("foundpsw","F");
}
$smarty->display("found_pwd.tpl");
?>