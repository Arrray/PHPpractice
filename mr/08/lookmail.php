<?php
include("check_mail.php");		//����Zend_Mail_Storage_Pop3����
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��ȡ�ʼ�</title>
<script language="javascript" src="js/checkbox.js"></script>
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
		<form action="delmail.php" method="post" name="form1" id="form1">
					  <table width="454" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td><table width="550" height="50" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#D4D4D4">
                            <tr bgcolor="#CCFF33">
                              <td width="44" height="25" align="center" bgcolor="#FFECB7" class="STYLE2"><div align="center" class="STYLE1">ѡ��</div></td>
                              <td width="115" height="25" bgcolor="#FFECB7" class="STYLE2"><div align="center" class="STYLE1 ">�ʼ�����</div></td>
                              <td width="127" bgcolor="#FFECB7" class="STYLE2"><div align="center" class="STYLE1 ">������</div></td>
                              <td width="54" align="center" bgcolor="#FFECB7" class="STYLE2"><div align="center" class="STYLE1 ">����ʱ��</div></td>
                            </tr>
                            <?php
							$sum=$mail->countMessages();		//ͳ���ʼ�����
							if($sum==0){
		  					?>
                            <tr>
                              <td height="25" colspan="5" align="center" bgcolor="#FFFFFF">�����ʼ�</td>
                            </tr>
                            <?php
		  }else{
	
		  $i=0;
		  foreach($mail as $message){		//�����ʼ�����
		  $i++; 
		  ?>
                            <tr>
                              <td height="25" bgcolor="#FFFFFF"><div align="center">
                                  <input name="del_id[]" type="checkbox" value="<?php echo $i;?>" >
                              </div></td>
                              <td height="25" bgcolor="#FFFFFF" class="STYLE1"><div align="left">&nbsp;<a href="index.php?lmbs=�鿴�ʼ�&id=<?php echo $i;?>" class="a1">
                                  <?php echo $message->subject; ?>
                              </a></div></td>
                              <td bgcolor="#FFFFFF" class="STYLE1"><div align="center"><?php echo $message->from;?></div></td>
                           
                              <td bgcolor="#FFFFFF" class="STYLE1"><div align="center">
                                  <?php
								  echo dateSwitch($message->date); 
									?>
                              </div></td>
                            </tr>
                            <?php
									  }
								  ?>
    <tr>
                              <td height="25" colspan="5" align="center" bgcolor="#FFFFFF"><input name="button" type=button class="buttoncss" onClick="checkAll(form1,status)" value="ȫѡ">
&nbsp;<input type=button value="��ѡ" class="buttoncss" onClick="switchAll(form1,status)">
&nbsp;<input type=button value="��ѡ" class="buttoncss" onClick="uncheckAll(form1,status)"></td>
                            </tr>
							<?php 
							}
							?>
                          </table>
                       <table width="550" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
                              <tr bgcolor="#EEEEEE">
                                <td width="50" align="center">
<input name="submit2" type="submit" class="buttoncss" value="ɾ��" />
</td>
                                <td width="374" class="STYLE1"><div align="left">�����ʼ�&nbsp;<?php echo $sum;?>&nbsp;��&nbsp;</div></td>
                                <td width="162" class="STYLE1">&nbsp;&nbsp;</td>
                              </tr>
                            </table></td>
                        </tr>
              </table>
            </form>
		</td>
      </tr>
    </table>
</body>
</html>
