<?php session_start(); include("conn/conn.php");
$Submit=$_POST["Submit"];
if($Submit==" ɾ������ "){
    while(list($name,$value)=each($_POST)){    
       $array[]=$name;  
	   }                          //����õ�Ԫ����ӵ�������
		if(count($array)-1>0){                     //�����õ�����-1����0��˵����ѡ�е�ɾ��Ԫ�� ��ΪSubmitҲ�����������Ҫ-1            
		    for($i=1;$i<count($array);$i++){ 
			     $result=mysql_query("delete from tb_my_friend where tb_friend_id='".$array[$i]."'");    //ѭ��ɾ��ѡ�е���Ϣ
			 }
			   echo "<script>alert('ɾ���ɹ�!'); history.back();</script>";    
		 }else{
		  echo "<script>alert('����ѡ��Ҫɾ���ĺ���!');history.back();</script>";   //���û��ѡ��ɾ�����ļ������һ����ʾ
		 }	
}
?>