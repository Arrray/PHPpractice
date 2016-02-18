<?php
	include_once 'conn/conn.php';
	for($i=0;$i<4;$i++){
		$num .= dechex(rand(0,15));
	}
?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<div style=" position:relative; width:209px; height:206px; background-image: url(images/lg.gif); background-position: top; background-repeat:no-repeat;">
  <div style=" position:absolute; top:66px; left:81px; width:90px;"><input name="text" type="text" id="lgname" style=" width:90px; border: 1px #817158 solid; height:16px;" /></div>
  <div style=" position:absolute; top:90px; left:80px; width:90px;"><input name="text" type="password" id="lgpwd" style=" width:90px; border: 1px #817158 solid; height:16px;" /></div>
  <div style=" position:absolute; top:115px; left:80px;">
    <input name="text" type="txt" id="lgchk" style=" width:30px; border: 1px #817158 solid; height:12px;" maxlength="4" />
  <img id='chkid' src="login/valcode.php?num=<?php echo $num; ?>" width="40" height="18" />
  <a id="changea" style="cursor:hand;">看不清</a>
  </div>
<div style="position:absolute;top:153px; left:42px;">
<input id="chknm" name="chknm" type="hidden" value="<?php echo $num; ?>"  />
	<button id="lgbtn" style=" position:absolute; width:50px; height:20px; background-image: url(images/lgbtn.gif); background-position:center; background-repeat:no-repeat;"></button>
	<button id="reg" style=" position:absolute; top: 0px; left:70px; width:50px; height:20px; background-image: url(images/cancelbtn.gif); background-position:center; background-repeat:no-repeat;"></button>
</div>
</div>