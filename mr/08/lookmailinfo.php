<?php
include("check_mail.php");		//����Zend_Mail_Storage_Pop3����
$id=$_GET['id'];				//��ȡ�������Ӵ��ݵ�ID
$message=$mail->getMessage($id);	//��ȡָ���ʼ���¼����Ϣ

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�鿴�ʼ�����</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url(images/mrbg.gif);
}
-->
</style>
</head>
<body>
<table width="575" height="104" border="0" cellpadding="0" cellspacing="0" background="images/��ҳ(2)_5.jpg">
  <tr>
    <td width="82" height="60">&nbsp;</td>
    <td width="493">&nbsp;</td>
  </tr>
  <tr>
    <td height="32">&nbsp;</td>
    <td><span class="STYLE34"><?php echo $_GET['lmbs'];?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="550" height="421" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" valign="top">
<table width="550" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#C6C5CA">
                                      <tr>
                                        <td width="63" height="26" align="center" bgcolor="#FFFFFF">ʱ&nbsp;&nbsp;�䣺</td>
                                        <td align="left" bgcolor="#FFFFFF" class="STYLE1">&nbsp;&nbsp;
                                            <?php echo dateSwitch($message->date);?></td>
                                      </tr>
                                      <tr>
                                        <td height="26" align="center" bgcolor="#FFFFFF">�����ˣ�</td>
                                        <td height="24" align="left" bgcolor="#FFFFFF" class="STYLE1">&nbsp;&nbsp;&nbsp;<?php echo $message->from;?></td>
                                      </tr>
                                      <tr>
                                        <td height="26" align="center" bgcolor="#FFFFFF">�ռ��ˣ�</td>
                                        <td height="24" align="left" bgcolor="#FFFFFF" class="STYLE1">&nbsp;&nbsp;&nbsp;<?php echo $message->to;?></td>
                                      </tr>
                                      <tr>
                                        <td height="26" align="center" bgcolor="#FFFFFF">��&nbsp;&nbsp;�⣺</td>
                                        <td height="24" align="left" bgcolor="#FFFFFF" class="STYLE1">&nbsp;&nbsp;
                                           <?php echo $message->subject;?></td>
                                      </tr>
                   
                                      <tr>
                                        <td height="26" align="center" bgcolor="#FFFFFF">��&nbsp;&nbsp;����</td>
                                        <td height="24" align="left" bgcolor="#FFFFFF">
                                          zzzxc</td>
                                      </tr>
                                  
          </table>
								  <table width="550" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#C6C5CA">
                              <tr>
                                <td height="300" align="center" valign="top" bgcolor="#FFFFFF">

  <?php
 
 
   echo quoted_printable_decode($message->getContent());
   
   ?> </td>
                              </tr>
</table>
		</td>
      </tr>
    </table>
</body>
</html>
