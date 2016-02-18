<?php session_start(); include("conn/conn.php");

$Submit=$_POST['Submit'];
$mails=$_GET['mails'];
     
if($Submit==" 清除信息 "){
     while(list($name,$value)=each($_POST)){ 
         $array[]=$name;                            //将获得的元素添加到数组中
		 }
		 if(count($array)-1>0){                     //如果获得的总数-1大于0则说明有选中的删除元素 因为Submit也获得了所以需要-1            
		     for($i=1;$i<count($array);$i++){       //循环删除选中的信息
		         $result=mysql_query("delete from tb_mail_box where tb_mail_id='".$array[$i]."'");
		         }
		   echo "<script>alert('删除成功!'); window.location.href='send_mail.php?sender=$_GET[sender]&&mails=$mails';</script>";
	     }else{
		    echo "<script>alert('请先选择要删除的信件!');history.back();</script>";   //如果没有选择删除的文件则给出一个提示
		 }
}
?>