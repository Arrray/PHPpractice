<?php	session_start();
$tb_validate=trim($_POST[tb_validate]);
class check_user{
   var $tb_user;
   var $tb_pass;
   var $tb_validate;
  function check_user($x,$y,$m){
    $this->tb_user=$x;
    $this->tb_pass=$y;
	$this->tb_validate=$m;
   }
   function check_input(){
     if(strval($this->tb_validate)!=$_SESSION["validate1"]){
        echo "<script>alert('验证码输入错误!');history.go(-1);</script>";
        exit;
      }
     include_once("conn/conn.php");
	 $sql=mysql_query("select tb_forum_user from tb_forum_user where tb_forum_type=2 and tb_forum_user='".$this->tb_user."'",$conn);
	 $info=mysql_fetch_array($sql);
	 if($info==false){
	    echo "<script>alert('对不起，不存在该用户!');history.back();</script>";
	    exit;
	  }else{ 
	    $sql=mysql_query("select tb_forum_user from tb_forum_user where tb_forum_type=2 and tb_forum_user='".$this->tb_user."' and tb_forum_pass='".$this->tb_pass."'",$conn);
	    $info=mysql_fetch_array($sql);
	    if($info==false){
		   echo "<script>alert('对不起，密码输入错误!');history.back();</script>";
		   exit;
		 }else{ 
             if($_SESSION["admin_user"]!=""){
			  session_unregister("admin_user");
			 }   
             session_register("admin_user");
			 
             $_SESSION["admin_user"]=$this->tb_user; 
		     echo "<script>alert('登录成功!');window.location.href='index.php';</script>";
		 } 
	   } 
       mysql_close($conn);   
   } 
 }
 $chk=new check_user($_POST[tb_user],md5($_POST[tb_pass]),$tb_validate);
 $chk->check_input();
?>
