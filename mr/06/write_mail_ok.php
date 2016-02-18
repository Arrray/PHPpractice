<?php session_start(); include("conn/conn.php");
$tb_receiving_person=$_POST["receiving_person"];
$tb_mail_subject=$_POST["mail_subject"];
$tb_mail_content=$_POST["mail_content"];
$tb_mail_sender=$_POST["mail_sender"];
$tb_mail_date=date("Y-m-d");

$querys=mysql_query("select * from tb_forum_user where tb_forum_user='$tb_receiving_person'");
if(mysql_num_rows($querys)>0){
$query=mysql_query("insert into tb_mail_box(tb_receiving_person,tb_mail_subject,tb_mail_content,tb_mail_sender,tb_mail_date,yanzheng)values('$tb_receiving_person','$tb_mail_subject','$tb_mail_content','$tb_mail_sender','$tb_mail_date',2)");
if($query==true){
	echo "<meta http-equiv=\"refresh\" content=\"0; url=send_mail.php?sender=".$tb_mail_sender."\" />";
	echo "<script>alert('发送成功')</script>";
}

}else{
	echo "<script>alert('对不起，不存在该用户!');history.back();</script>";


}
?>
