<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��Ȩ����</title>
</head>
<body>
<table width="750" height="174" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="35" align="center">&nbsp;</td>
    <td width="680" height="27" align="center"><strong>��Ȩ����</strong></td>
    <td width="35" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="middle">&nbsp;</td>
    <td height="90" align="left" valign="middle"><table width="100%" height="52" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td bgcolor="#FFFFFF">
<?php   

  if($page){
	 $counter=file_get_contents("file/file.txt");//��ȡ�ı��ļ��е����ݣ�����һ���ַ���
     $length=strlen(unhtml($counter));//�����ַ����ĳ��ȣ��滻�����ַ�
     $page_count=ceil($length/1050);//���ַ������з�ҳ����
 
     $c=msubstr($counter,0,($page-1)*1050);//ͨ���Զ��庯����ȡ��һҳ�е�����
     $c1=msubstr($counter,0,$page*1050);//ͨ���Զ��庯����ȡ��ǰҳ�е�����
		echo substr($c1,strlen($c),strlen($c1)-strlen($c)); //��ȡ����ǰҳ��Ҫ���������
  }
  ?>
    </td>
      </tr>
    </table></td>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
</table>
<table width="680" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="42%" align="center" valign="middle" bgcolor="#FFFFFF"><span class="STYLE1">&nbsp;&nbsp;ҳ�Σ�<?php echo $page;?> / <?php echo $page_count;?> ҳ </span></td>
    <td width="58%" height="28" align="left" valign="middle" bgcolor="#FFFFFF"><span class="STYLE1"> &nbsp;��ҳ��
             <?php
	  		  if($page!=1){   
				     echo  "<a href=index.php?lmbs=���հ�Ȩ����&page=1>��ҳ</a>&nbsp;";
					 echo "<a href=index.php?lmbs=���հ�Ȩ����&page=".($page-1).">��һҳ</a>&nbsp;";
				   }
				  if($page<$page_count){
				        echo "<a href=index.php?lmbs=���հ�Ȩ����&page=".($page+1).">��һҳ</a>&nbsp;";
				        echo  "<a href=index.php?lmbs=���հ�Ȩ����&page=".$page_count.">βҳ</a>";				
				   }				   
			  ?>     
    </span> </td>
  </tr>
</table>
</body>
</html>
