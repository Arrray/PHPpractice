<?php require("global.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>������Ը��Ըǽ_��ǽ�б�</title>
<link href="CSS/index.css" rel="stylesheet"/>
</head>
<?php
$sql="select * from tb_washingwall";

if($_GET){
	//�õ�Ҫ��ȡ��ҳ��
	$page_num = $_GET['page_num']? $_GET['page_num']: 1;
}
else{
	//�״ν���ʱ,ҳ��Ϊ1
	$page_num = 1;
}
	//�õ��ܼ�¼��
	$DB->query($sql);
	$row_count_sum = $DB->get_rows();
	//ÿҳ��¼��,����ʹ��Ĭ��ֵ����ֱ��ָ��ֵ
	$row_per_page = 10;
	//��ҳ��
	$page_count = ceil($row_count_sum/$row_per_page);
	//�ж��Ƿ�Ϊ��һҳ�������һҳ
	$is_first = (1 == $page_num) ? 1 : 0;
	$is_last = ($page_num == $page_count) ? 1 : 0;
	//��ѯ��ʼ��λ��
	$start_row = ($page_num-1) * $row_per_page;
	//ΪSQL������limit�Ӿ�
	$sql .= " limit $start_row,$row_per_page";
	//ִ�в�ѯ
	$DB->query($sql);
	$res = $DB->get_rows_array();
	//���������
	$rows_count=count($res);
?>

?>
<body>
<div id="header"></div>
<div id="navigation"><a href="scrip.do?action=scripQuery">������ҳ</a></div>
<!--��ʼ��ʾ��ǽ��Ϣ-->
<div id="main" style="padding-top:5px;">
	<table width="98%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#000000">
      <tr>
        <td height="27" align="center" bgcolor="#7CC842">�������</td>
        <td align="center" bgcolor="#7CC842">ף������</td>
        <td align="center" bgcolor="#7CC842">ף����</td>
        <td align="center" bgcolor="#7CC842">��������</td>
        <td align="center" bgcolor="#7CC842">����ʱ��</td>
        <td align="center" bgcolor="#7CC842">����</td>
      </tr>
	<logic:iterate id="scrip" name="scripList1" type="com.model.ScripForm" scope="request" indexId="ind">
      <tr>
        <td height="27" bgcolor="#FFFFCC">&nbsp;
        <?php echo $info->id;?></td>
        <td bgcolor="#FFFFCC">&nbsp;
        <?php echo $info->wishMan;?>
		</td>
        <td bgcolor="#FFFFCC">&nbsp;
        <?php echo $info->wellWisher;?>
		</td>
        <td bgcolor="#FFFFCC">&nbsp;
        <?php echo $info->content;?>
		</td>
        <td bgcolor="#FFFFCC">&nbsp;
        <?php echo $info->sendTime;?>
		</td>
        <td bgcolor="#FFFFCC">&nbsp;
        <?php echo $info->hits;?>
		</td>
      </tr>
	</logic:iterate>
  </table>
  <%=pagination.printCtrl(Integer.parseInt(request.getAttribute("Page").toString()))%>
</div>
<!--��ʾ������Ϣ����-->
<?php require_once("copyright.php");?>
</body>
</html>