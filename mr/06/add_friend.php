<?php
include("conn/conn.php");
$tb_friend=$_POST["tb_friend"];
$tb_my=$_POST["tb_my"];
$tb_mail_id=$_POST["tb_mail_id"];
$tb_date=date("Y-m-d");
$querys=mysql_query("select * from tb_forum_user where tb_forum_user.tb_forum_user='$tb_friend'");
if(mysql_num_rows($querys)>0)
{
      $queryss=mysql_query("update tb_mail_box set yanzheng = 3 where tb_mail_id =$tb_mail_id");  //通过验证后字段改为3
      $tb_mail_subject=$tb_my."已经通过好友申请验证";
	  $tb_mail_content=$tb_my."已经通过了您的好友申请!";
      $querys=mysql_query("insert into tb_my_friend(tb_my,tb_friend,tb_date)values('$tb_my','$tb_friend','$tb_date')");
      $query=mysql_query("insert into tb_mail_box(tb_receiving_person,tb_mail_subject,tb_mail_content,tb_mail_sender,tb_mail_date,yanzheng )values('$tb_friend','$tb_mail_subject','$tb_mail_content','系统信息','$tb_date',0)");
           if($query==true){
	           echo "<script>alert('验证通过!已将对方加为好友');history.back();</script>";
             }
      }else{
	echo "<script>alert('对不起，不存在该用户!');history.back();</script>";
    }
	
?>