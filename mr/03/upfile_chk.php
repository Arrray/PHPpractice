<?php
	include_once 'conn/conn.php';
	$filename = $_FILES['upname']['name'];			
	$filetype = $_POST['foundtype'];				
	$tmpname = $_FILES['upname']['tmp_name'];		
	$tmpsize = $_FILES['upname']['size'];			
	$tmppub = $_POST['ispub'];
    $dirname=$_SESSION['name'];					
	$file_path = "upfile/$dirname/";
	$max = 0;
	
	
	for($j=0;$j<count($_FILES['upname']['name']);$j++)       //�ж��ϴ����ļ��Ƿ���ԭ���ϴ��ļ�������� ���ز���ֵ
	{
	 $filearr=$_FILES['upname']['name'][$j];
	 $filenamei=$file_path.$filearr;
	 //echo "�ļ�·�����ļ����ƣ�";
	 //echo $filenamei;                                //��ʾ�ļ�·��������
	 if(file_exists($filenamei))
	 $construct=0;
	 else 
	 $construct=1;
	}
	       
if($construct!=1)
    {
	echo '<script>alert("�ļ����Ƴ�ͻ���������������ϴ���");location="'.$_SERVER['HTTP_REFERER'].'";</script>';
    }
else
   {
		
	$rightsql = "select * from tb_member where name = '".$_SESSION['name']."'";
	$rightarr = $conne->getRowsRst($rightsql);
	$conne->close_rst();
	
	switch($rightarr['right'])                      //�ж��û�Ȩ��
	{
		case '0':
			$conmax=2000000;      //��ʽ����ʱ������U�̴洢�� 0 Ϊ��ͨ�û� 1 Ϊ��Ա 2Ϊ�߼��û�
			break;
		case '1':
		    $conmax=3000000;
			break;
		case'2':
		    $conmax=5000000;
	}
	
	echo "�û��ļ����ʹ��Ȩ�ޣ�".$conmax/1000000;
	echo "MB";
	echo "<p>";
	
	
	if(!is_null($tmpsize)){
		foreach($tmpsize as $value){
			$max += $value;
		}
		if($max > 100000000 or $max <= 0){
			echo '<script>alert("�ϴ��ļ��ܴ�С����100M��������ѡ��1");location="'.$_SERVER['HTTP_REFERER'].'";</script>';
		}
	}else{
		/*var_dump($tmpsize);
		exit();*/
		echo '<script>alert("�ϴ��ļ����������¼�����");location="'.$_SERVER['HTTP_REFERER'].'";</script>';
	}
	echo "ʣ��������";                                 //�鿴U��ʣ������
	echo $conmax-$rightarr['content'];              
	//echo "<p>";
	$lesarr=$conmax-$rightarr['content'];              //ʣ��������ֵ��lesarr����
	//echo $lesarr-$max;  
	                               
	if($conmax-$rightarr['content'] <= 1000000)         //���Ȩ��������ʹ�������Ĳ��1M �����û��ռ䲻��
	{
	echo '<script>alert("��������U�̿ռ䲻�㣬��������ϴ��ļ�");location="'.$_SERVER['HTTP_REFERER'].'";</script>';
	}
	else if($lesarr-$max<=1000000)                      //�����ǰ������ļ��ܴ�С����ʣ��U�������Ļ������û��ռ䲻��
	        {
			echo '<script>alert("��������U�̿ռ䲻�㣬��������ϴ��ļ�");location="'.$_SERVER['HTTP_REFERER'].'";</script>';
			}
		  else{                                        
	$chkdownnum = '';
	for($i = 0; $i < 15; $i++)
	{
		$chkdownnum .= dechex(rand(0,15));
	}
	for ($i = 0; $i < count($filename); $i++)
	{		
		move_uploaded_file($tmpname[$i],$file_path.$filename[$i]);
		
		$insertsql = 'insert into tb_upfile (filename,filepath,filetype,upauthor,chkdownnum,ispub,filesize) values("'.trim($filename[$i]).'","'.$file_path.$filename[$i].'","'.$filetype[$i].'","'.$_SESSION['name'].'","'.trim($chkdownnum).'",'.$tmppub[$i].','.$tmpsize[$i].')';
		$conne->uidRst($insertsql);
	}
	
	$maxtotal=$rightarr['content']+$max;            //�����ݿ�õ����ϴ����� �������ϴ�������
	echo "<p>";
	// echo  $maxtotal;
	$csql="update tb_member set content = $maxtotal where name= '".$_SESSION['name']."'";
	$conne->uidRst($csql);
	echo '<div style=" padding-top: 30px;">�ļ��ϴ��ɹ�������ͨ�������룺<font color="#FF0000">'.$chkdownnum.'</font>&nbsp;���ļ��������ء�</div>';
	}
	echo "<p>��<a href=\"index.php?act=up\"><span style=\"color:red\">����</span></a>�����ϴ������ļ���</p>";
}	
?>
<span style="font-size:14px" 
