<?php session_start(); include("conn/conn.php");

$Submit=$_POST['Submit'];
$mails=$_GET['mails'];
     
if($Submit==" �����Ϣ "){
     while(list($name,$value)=each($_POST)){ 
         $array[]=$name;                            //����õ�Ԫ����ӵ�������
		 }
		 if(count($array)-1>0){                     //�����õ�����-1����0��˵����ѡ�е�ɾ��Ԫ�� ��ΪSubmitҲ�����������Ҫ-1            
		     for($i=1;$i<count($array);$i++){       //ѭ��ɾ��ѡ�е���Ϣ
		         $result=mysql_query("delete from tb_mail_box where tb_mail_id='".$array[$i]."'");
		         }
		   echo "<script>alert('ɾ���ɹ�!'); window.location.href='send_mail.php?sender=$_GET[sender]&&mails=$mails';</script>";
	     }else{
		    echo "<script>alert('����ѡ��Ҫɾ�����ż�!');history.back();</script>";   //���û��ѡ��ɾ�����ļ������һ����ʾ
		 }
}
?>