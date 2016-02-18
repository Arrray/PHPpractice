<?php session_start(); include("conn/conn.php");
$tb_my=$_POST["my"];
$tb_friend=$_POST["friend"];
$tb_date=date("Y-m-d");

$tb_receiving_person=$_POST["receiving_person"];
$tb_mail_subject=$_POST["mail_subject"];
$tb_mail_content=$_POST["mail_content"];
$tb_mail_sender=$_POST["mail_sender"];
$tb_mail_date=date("Y-m-d");
$tb_friend_tmp=$tb_my;             //重新赋值
$tb_my_tmp=$tb_friend;
//echo $tb_my;
//echo $tb_my_tmp;
if($tb_my==$tb_friend){                                       //判断添加的对象是否为自己
  echo "<script>alert('你想自己加自己吗？');history.back();</script>";
  }else{
   $querychkk=mysql_query("select tb_friend from tb_my_friend where tb_my='$tb_my_tmp'");
   $jcount=0;                                                 //判断对方好友列表中是否存在自己名称
   while($myrow=mysql_fetch_array($querychkk)){              
        if($myrow['tb_friend']==$tb_my)                       
            $jcount++;
        }
   $kcount=0;                                                 //判断自己好友列表中是否存在对方名称
   $querychk=mysql_query("select tb_friend from tb_my_friend where tb_my='$tb_my'");
  while($myrow2=mysql_fetch_array($querychk)){
        if($myrow2['tb_friend']==$tb_friend)
            $kcount++;
        }
  if($kcount>0)                                               
    {
      if($jcount>0)                                           //如果双方好友列表中存在对方名称
	       echo "<script>alert('你们已经是好友了，不必再进行添加了');history.back();</script>";
	  else if($jcount==0)                                     //如果对方好友列表不存在自己名称
	      echo "<script>alert('好友验证已发送，请耐心等待对方确认');history.back();</script>";
     }else{                                                   //如果双方好友列表中都不存在对方名称则进行添加好友操作。
      $querys=mysql_query("select * from tb_forum_user where tb_forum_user='$tb_receiving_person'");
      if(mysql_num_rows($querys)>0){
	      $num=1;
          $querys=mysql_query("insert into tb_my_friend(tb_my,tb_friend,tb_date)values('$tb_my','$tb_friend','$tb_date')");
          $query=mysql_query("insert into tb_mail_box(tb_receiving_person,tb_mail_subject,tb_mail_content,tb_mail_sender,tb_mail_date,yanzheng )values('$tb_receiving_person','$tb_mail_subject','$tb_mail_content','$tb_mail_sender','$tb_mail_date',1)");
           if($query==true){
	           echo "<script>alert('短息发送成功!');history.back();</script>";
             }
      }else{
	echo "<script>alert('对不起，不存在该用户!');history.back();</script>";
     }
  }
}
?>