<?php session_start(); include("conn/conn.php");
$tb_my=$_POST["my"];
$tb_friend=$_POST["friend"];
$tb_date=date("Y-m-d");

$tb_receiving_person=$_POST["receiving_person"];
$tb_mail_subject=$_POST["mail_subject"];
$tb_mail_content=$_POST["mail_content"];
$tb_mail_sender=$_POST["mail_sender"];
$tb_mail_date=date("Y-m-d");
$tb_friend_tmp=$tb_my;             //���¸�ֵ
$tb_my_tmp=$tb_friend;
//echo $tb_my;
//echo $tb_my_tmp;
if($tb_my==$tb_friend){                                       //�ж���ӵĶ����Ƿ�Ϊ�Լ�
  echo "<script>alert('�����Լ����Լ���');history.back();</script>";
  }else{
   $querychkk=mysql_query("select tb_friend from tb_my_friend where tb_my='$tb_my_tmp'");
   $jcount=0;                                                 //�ж϶Է������б����Ƿ�����Լ�����
   while($myrow=mysql_fetch_array($querychkk)){              
        if($myrow['tb_friend']==$tb_my)                       
            $jcount++;
        }
   $kcount=0;                                                 //�ж��Լ������б����Ƿ���ڶԷ�����
   $querychk=mysql_query("select tb_friend from tb_my_friend where tb_my='$tb_my'");
  while($myrow2=mysql_fetch_array($querychk)){
        if($myrow2['tb_friend']==$tb_friend)
            $kcount++;
        }
  if($kcount>0)                                               
    {
      if($jcount>0)                                           //���˫�������б��д��ڶԷ�����
	       echo "<script>alert('�����Ѿ��Ǻ����ˣ������ٽ��������');history.back();</script>";
	  else if($jcount==0)                                     //����Է������б������Լ�����
	      echo "<script>alert('������֤�ѷ��ͣ������ĵȴ��Է�ȷ��');history.back();</script>";
     }else{                                                   //���˫�������б��ж������ڶԷ������������Ӻ��Ѳ�����
      $querys=mysql_query("select * from tb_forum_user where tb_forum_user='$tb_receiving_person'");
      if(mysql_num_rows($querys)>0){
	      $num=1;
          $querys=mysql_query("insert into tb_my_friend(tb_my,tb_friend,tb_date)values('$tb_my','$tb_friend','$tb_date')");
          $query=mysql_query("insert into tb_mail_box(tb_receiving_person,tb_mail_subject,tb_mail_content,tb_mail_sender,tb_mail_date,yanzheng )values('$tb_receiving_person','$tb_mail_subject','$tb_mail_content','$tb_mail_sender','$tb_mail_date',1)");
           if($query==true){
	           echo "<script>alert('��Ϣ���ͳɹ�!');history.back();</script>";
             }
      }else{
	echo "<script>alert('�Բ��𣬲����ڸ��û�!');history.back();</script>";
     }
  }
}
?>