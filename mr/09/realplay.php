<?php
session_start();
include_once("config.php");
include_once("conn/conn.class.php");
$u=$_SERVER['HTTP_HOST'];
	$tmpurl="http://"."$u";
	$filepath=__FILE__;                            //�ļ�����·��
	$subnum=strlen($_SERVER['DOCUMENT_ROOT']);     //�������ļ�·��
	$total=strlen($filepath)."|";
	$startnum=$total-$subnum+1;
	$newchar=substr($filepath,$startnum);
	$filenum=strlen($newchar);
	$phpfilelen=strlen($_SERVER['PHP_SELF']);
	$start=$phpfilelen-$filenum;
	$newpath=substr($_SERVER['PHP_SELF'],0,$start);
	$url=$tmpurl.$newpath;
	
if($_POST[Submit3]=="��ӵ������б�"){
   
   if($_POST[checkbox]==""){
		echo "<script>alert('��û��ѡ��Ҫ��ӵ����֣�'); history.back();</script>";
   }else{
	  
	    foreach($_POST[checkbox] as $value){
		  if(empty($_SESSION["music_list"])){
		   $_SESSION["music_list"]=$value."@";
		    }else{
		     $array=explode("@",$_SESSION["music_list"]);
		   
		          if(in_array($value,$array)){
	   			     echo "<script>alert('�����б����Ѿ����ڴ����֣�');history.back();</script>";
	   			     exit;
				     }
				   }
		     $_SESSION["music_list"].=$value."@";
		 }
		 
		 echo "<script>window.location.href='music_list.php';</script>";
	 }
}else{
	if($_POST[checkbox]==""){
		echo "<script>alert('��û��ѡ��Ҫ���ŵ����֣�'); history.back();</script>";
	 }else{
		$date=date("His");
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��������</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 00px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>
<script type="text/javascript" src="js/delete_m3u.js"></script>
<body onUnload="channel_check('<?php echo "upfiles/video/".$date.".m3u"; ?>')">
<table width="1004" height="720" border="0" cellpadding="0" cellspacing="0" background="images/111.jpg">
  <tr>
    <td>&nbsp;</td>
    <td height="241" align="center" valign="bottom">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="271">&nbsp;</td>
    <td width="440" height="357" align="center" valign="top">
<center>
<?php
if(!$fopen = fopen ("upfiles/video/$date.m3u","w")){        //ʹ�����ģʽ���ļ�,�ļ�ָ��ָ�ڱ�β
	echo "��.m3u�ļ�ʧ�ܣ�" ;   
    exit ; 
}
foreach($_POST[checkbox] as $key=>$value){  //��book������ѭ�����������ֵ
	$l_sqlstr = "select id,style,name,actor,remark,address from tb_video where id='$value'order by id";
	$l_rst = $result->getRows($l_sqlstr,$conn);
    if(!fwrite ($fopen,"".$url."/upfiles/video/".$l_rst[0][address]."")){               
    	print "д������ʧ�ܣ�" ;
        exit ; 
	}
	if(!fwrite ($fopen,"\n\r")){               
		print "д������ʧ�ܣ�" ;
    	exit ; 
	}
}
?>
<embed src="upfiles/video/<?php echo $date;?>.m3u" width="300" height="70" loop="<?php if($_POST[Submit]=="��������"){echo "false";}elseif($_POST[Submit2]=="ѭ������"){echo "true";}?>" align="middle" ShowStatusBar=true></embed>
</center>
</td>
    <td width="280">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="122">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

</body>
</html>
<?php 
	}
}
?>
