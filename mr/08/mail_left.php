<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
a:link {
	color: #4B4B4B;
	text-decoration: none;
}
a:visited {
	color: #4B4B4B;
	text-decoration: none;
}
a:hover {
	color: #4B4B4B;
	text-decoration: none;
}
a:active {
	color: #4B4B4B;
	text-decoration: none;
}
.left_STYLE3 {font-size: 12px; color: #4B4B4B; }
-->
</style>
<script type="text/javascript" src="js/xmlHttpRequest.js"></script>

<script type="text/javascript">
	timer = window.setInterval("look_mail()",1000); 
	function look_mail(){
		xmlHttp.open("post","look_mail.php", true);
		xmlHttp.onreadystatechange = function(){
			if(xmlHttp.readyState == 4){
				tet = xmlHttp.responseText;
				document.getElementById("look").innerHTML = tet;
			}
		}
		xmlHttp.send(null);
	}
</script>  
   
<table width="180" height="365" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="180" height="345" valign="top" background="images/��ҳ(2)_4.jpg">
		<table width="180" height="260" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="65" height="48">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td height="35">&nbsp;</td>
    <td colspan="2"><span class="left_STYLE3"><a href="index.php?lmbs=������">������</a></span></td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td width="50"><span class="left_STYLE3">δ���ʼ�</span></td>
    <td width="65">&nbsp;</td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td><span class="left_STYLE3"><a href="index.php?lmbs=�ռ���">�ռ���</a></span></td>
    <td><div id="look"></div></td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td colspan="2"><span class="left_STYLE3">�����ʼ�</span></td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td colspan="2"><span class="left_STYLE3">���ͼ�¼</span></td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td colspan="2"><span class="left_STYLE3"><a href="javascript:location.reload()">ˢ��</a></span></td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td colspan="2"><span class="left_STYLE3"><a href="index.php?lmbs=�˳�">�˳�</a></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>

	</td>
  </tr>
  <tr>
    <td background="images/��ҳ(2)_20.jpg"></td>
  </tr>
</table>