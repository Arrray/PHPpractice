<?php
	session_start();
	include_once 'conn/conn.php';
	for($i=0;$i<4;$i++){
		$num .= dechex(rand(0,15));
	}
?>
<script language="javascript" src="login/js/login.js"></script>
<script language="javascript" src="login/js/xmlhttprequest.js"></script>
<div style=" width: 190px; height:202px; text-align: center; vertical-align:middle;">
	<div id="lgsp" style="background-image:url(../images/lgsp.gif); width: 73px; height:14px; background-position:center; background-repeat:no-repeat; padding: 3px;">&nbsp;</div><hr style=" width: 80%; border: 1px #597ECB solid;" />
	<p><span>�û�����
    <input id="lgname" type="text" style=" width: 75px; height: 16px; border: 1px #999999 solid;" />
	  </span><br />
	  <span>��&nbsp;&nbsp;�룺
      <input id="lgpwd" type="password" style=" width:75px; height: 16px; border: 1px #999999 solid;" />
      </span><br />
	  <span>��֤�룺
      <input id="lgchk" type="text" style=" width: 75px; height: 16px; border: 1px #999999 solid;" />
	  </span><br /> 
  <span><img id='chkid' src="login/valcode.php?num=<?php echo $num; ?>" width="55" height="18" />&nbsp;<a id="changea" style="cursor:hand;">������</a></span></p>
	<div style=" background-color:#597ecf; height: 25px; line-height: 25px;"><input id="chknm" name="chknm" type="hidden" value="<?php echo $num; ?>"  />
	<a id="lgbtn" style=" color:#f0f0f0;">��¼</a>&nbsp;<a id="reg" style=" color:#f0f0f0;">ע��</a>&nbsp;<a id="foundbtn" style=" color:#f0f0f0;">�һ�����</a>
	</div>
</div>
