<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�ޱ����ĵ�</title>
</head>

<body>
<?php
$receiver=$_POST["receiver"];
$subject=$_POST["subject"];
?>
<form name="form1" method="post" action="write_mail_ok.php">
<table width="800" height="271" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="126">&nbsp;</td>
    <td width="674">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><strong>�ռ��ˣ�</strong></td>
    <td><input name="receiving_person" type="text" id="receiving_person" value="<?php  
	if(empty($_GET["receiving_person"]))
	echo "";
	else
	echo $_GET["receiving_person"];
	if(empty($receiver))
	echo "";
	else
	echo $receiver;
	?>" size="70">
    ע�⣺�ռ��˵�ע���û���</td>
  </tr>
  <tr>
    <td height="30" align="center"><strong>�������⣺</strong></td>
    <td><input name="mail_subject" type="text" id="mail_subject" value="<?php
	if(empty($subject))
	echo "";
	else
	echo "�ظ�����:[".$subject."]";
	?>" size="70"></td>
  </tr>
  <tr>
    <td height="150" align="center"><strong>�������ݣ�</strong></td>
    <td><textarea name="mail_content" cols="70" rows="10" id="mail_content"></textarea>
<input type="hidden" name="mail_sender" value="<?php echo $_GET["sender"];?>"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="����">
      <input type="reset" name="Submit2" value="ȡ��"></td>
  </tr>
</table>
</form>
</body>
</html>
