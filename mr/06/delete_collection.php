<?php session_start(); include("conn/conn.php");
$Submit=$_POST['Submit'];

/*
if($Submit==" ɾ����ǩ "){

    while(list($name,$value)=each($_POST)){    
         $result=mysql_query("delete from tb_my_collection where tb_collection_id='".$name."'");          
  if($result==true){
	    echo "<script>alert('ɾ���ɹ�!'); history.back();</script>";
	}
	else{
	    echo "<script>alert('ɾ��ʧ��!'); history.back();</script>";
		 }
		 
	}
}
*/
if($Submit==" ɾ����ǩ "){
     while(list($name,$value)=each($_POST)){ 
         $array[]=$name;                            //����õ�Ԫ����ӵ�������
		 }
		 if(count($array)-1>0){                     //�����õ�����-1����0��˵����ѡ�е�ɾ��Ԫ�� ��ΪSubmitҲ�����������Ҫ-1             
		     for($i=0;$i<count($array)-1;$i++){       //ѭ��ɾ��ѡ�е���Ϣ
			
		       $result=mysql_query("delete from tb_my_collection where tb_collection_id=".$array[$i]."");
		        }
		   echo "<script>alert('ɾ���ɹ�!'); history.back();</script>";
	     }else{
		    echo "<script>alert('����ѡ��Ҫɾ�����ղ�!');history.back();</script>";   //���û��ѡ��ɾ�����ļ������һ����ʾ
		 }
}


?>