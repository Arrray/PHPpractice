<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�ޱ����ĵ�</title>
<style type="text/css">
<!--
.STYLE1 {color: #FF0000}
-->
</style>
</head>
<script language="javascript">
  function chk(){
    if(form1.page.value<=0 || parseInt(form1.page.value)>parseInt(form1.pages.value)){
	  alert("�������ҳ����Ч!!");
	  form1.page.focus();
	  return(false);
	}
	return(true);
  }
</script>
<body>
<table width="800" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#3E5D96">
 <tr>
    <td height="24" align="center" bgcolor="#d6e7f7">����</td>
    <td width="244" align="center" bgcolor="#d6e7f7">����ʱ��</td>
    <td width="187" align="center" bgcolor="#d6e7f7">������</td>
    <td width="249" align="center" bgcolor="#d6e7f7">�ظ�����</td>
  </tr>
<?php 
if($page){							//�жϵ�ǰҳ������ֵ�Ƿ����
	$page_size=5;						//����ÿҳ����ļ�¼��
    $query="select * from tb_forum_send "; 	//��д��ѯ��䣬Ӧ��countͳ���ܵļ�¼��
	$result=$conn->query($query);		//ִ�в�ѯ���
	$res=$result->fetchAll(PDO::FETCH_ASSOC);
	$message_count=count($res);
    $page_count=ceil($message_count/$page_size);	//������ܹ��м�ҳ
    $offset=($page-1)*$page_size;	//�����һҳ�����ļ�¼��
	$query_2=$conn->query("select * from tb_forum_send limit $offset, $page_size");
	foreach($query_2 as $value){		
?>
  <tr>
    <td width="35%" align="center" bgcolor="#FFFFFF">
		<a href="index_ok.php?send_id=<?php echo $value['tb_send_id'];?>" target="_blank"><?php echo $value['tb_send_subject'];?></a>
	</td>
    <td width="25%" align="center" bgcolor="#FFFFFF"><?php echo $value['tb_send_date'];?></td>
    <td width="25%" align="center" bgcolor="#FFFFFF"><?php echo $value['tb_send_user'];?></td>
	<td width="10%" align="center" bgcolor="#FFFFFF">
    	<?php  
			$query_s=$conn->query("select * from tb_forum_restore ");
			echo count($query_s);
		?>
	</td>
  </tr>
<?php 
  	}
}
?>
</table>
<form name="form1" method="post" action="index.php?lmbs=������̳" onSubmit="return chk()">
<table width="800" height="30" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#D0D0D0">
      <tr>
        <td height="22" align="center" bgcolor="#FFFFFF"><span class="STYLE2">����ͳ�ƣ�<?php echo $message_count;?> ��&nbsp; </span></td>
        <td align="center" bgcolor="#FFFFFF">ÿҳ��ʾ��<?php echo $page_size; ?>��</td>
        <td align="center" bgcolor="#FFFFFF">���У�<?php echo $page_count;?>ҳ</td>
        <td align="center" bgcolor="#FFFFFF">      <input type="submit" name="Submit" value="��ת">&nbsp;
<input name="page" type="text" size="3">
      <input type="hidden" name="pages" value="<?php echo $page_count;?>">
    ҳ</td>
<td align="center" bgcolor="#FFFFFF"><span class="STYLE2"> ��ҳ��
<?php
$next=$link_type*10;		//��10ҳΪһ����λ
$n=$link_type-1;			//��һ��10ҳ��ֵ
$m=$link_type+1;			//��һ��10ҳ��ֵ
$prev_page=$page-10;		//��ǰҳ����10ҳ��ֵ
$mm="";				
if($link_type==0){			//�жϱ�����ֵ�Ƿ����0���������0�������ҳͼ�꣬�޳�������
	echo "<img src=\"images/02.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"��ҳ\">";					
}else{		//����Ϊ��ҳͼ�����ó������ӣ����ӵ���ҳ����Ϊ��10ҳ��ͼ�����ó�������
	echo "<a href='index.php?lmbs=������̳&vv=0&link_type=0&page=1'><img src=\"images/02.jpg\" width=\"8\" border=\"0\" height=\"9\" border=\"0\" title=\"��ҳ\"></a>&nbsp;";
	$ccc=$vv-10;			//�������������$vv�ǵ�10ҳ����ʼλ�ã�$ccc����һ��10ҳ����ʼλ��
    echo "<a href='index.php?lmbs=������̳&vv=$ccc&link_type=$n&page=$prev_page'><img src=\"images/01.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"��ʮҳ\"></a>";
}
?>
<?php		
//ͨ��forѭ����䣬�����ǰҳ�е�10����������
for($j=1;$j<=$page_count;$j++) {		//����ͳ�Ƶ��ܵļ�¼��ѭ�����
	$pnext=$next+$j;			//���嵱ǰҳ�������ҳ��ֵ
	if($mm==10){				//�жϵ�$mm��ֵ����10ʱ����ѭ��
		break;
	}
	if($mm>$page_count){		//�жϵ�$mm��ֵ�����ܼ�¼ʱ����ѭ��
		break;
	}
	if($page_count-$vv<10){	
	  	if($mm>=$page_count-$vv){	//�жϵ�$mm��ֵ���ڵ����ܼ�¼��ȥ��ǰ10ҳ����ʼֵʱ����ѭ��
			break;
		}									
	}
	echo "<a href='index.php?lmbs=������̳&vv=$vv&link_type=$link_type&page=$pnext'>"; 
	if($page==$pnext){		//Ϊ��ǰ�����ҳ�����
		echo "<span class='STYLE1'> $pnext </span>";
	}else{
		echo " $pnext ";				//�����ǰ10ҳ���������е�����
	} 
	echo "</a>";											
    $mm=$mm+1;						
}
?>
</span><span class="STYLE2">
<?php
$vv=$vv+$mm;					//���������ֵ��������10ҳ����ʼλ��
if($page_count-$vv<=0){		//�жϵ��ܼ�¼��С�ڵ�����10ҳ����ʼλ��ʱ�����βҳ��ͼ��
	echo "<img src=\"images/03.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"βҳ\">";					
}else{							//���������10ҳ�ĳ�������
	echo "<a href='index.php?lmbs=������̳&vv=$vv&link_type=$m&page=$pnext'><img src=\"images/03.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"��ʮҳ\"></a>";														
}
if($message_count==0){			//�жϵ��ܼ�¼������0ʱ�����û�м�¼
	echo "û�м�¼!";
}
?>
        </span>		&nbsp;&nbsp;</td>
</tr>
</table>
</form>
</body>
</html>
