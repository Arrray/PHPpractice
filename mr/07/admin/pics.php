<?php
	session_start();
	include_once 'conn/conn.php';
	include_once 'inc/func.php';
	include_once 'inc/admin.php';
?>
<link rel="stylesheet" href="css/style.css" />
<script language="javascript" src="js/member.js"></script>
<script language="javascript" src="js/xmlhttprequest.js"></script>
<script>
function chktypepwd(tid){
	pwdobj = document.getElementById('typepwdtxt');
	if(pwdobj.value == ''){
		alert('����������!!');
		pwdobj.focus();
		return false;
	}
	url = 'chkpwd.php?tid='+tid+'&typepwd='+pwdobj.value+'&rnd='+Math.random();
	xmlhttp.open('get',url,true);
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readystate == 4 && xmlhttp.status == 200){
			if(xmlhttp.responseText == 1){
				location.reload();
			}else{
				alert('�����������!!');
			}
		}
	}
	xmlhttp.send(null);
}
</script>
<?php
	$smallact = $_GET['smallact'];
	/*$typesql = "select id,typename from tb_type";
	$typearr = $conne->getRowsArray($typesql);
	$conne->close_rst();*/
	if( !empty($_GET['smallact']) and !is_null($_GET['smallact'])){
		$levelarr = $conne->getRowsRst('select level,typepwd from tb_type where id = '.$smallact,0);
		$conne->close_rst();
		if($levelarr['level'] != 0){
			if($_SESSION['typepwd'] != $levelarr['typepwd']){
?>
		<div align="center">���������룺<input id="typepwdtxt" name="typepwdtxt" type="password" class="txt"  />&nbsp;<button onclick="chktypepwd(<?php echo $smallact; ?>)" class="btn">����</button></div>
<?php
			exit();
			}
		}
	
		$picsql = "select id,picname,picpath,bewrite from tb_photo where typename = ".$smallact;
		$picarr = $conne->getRowsArray($picsql);
		$conne->close_rst();
		if($picarr != ''){
?>
<div id="contain">
<?Php
	include 'top.html';
?>
<div style=" width:809px; height:80px; background-image:url(../images/showalb.gif); background-position: center; vertical-align:middle; background-repeat:no-repeat;"></div>
<table border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td width="5">&nbsp;</td>
<td height="50" width="15"><button id="rightfly" style=" height:60; width:15px; border:1px #000000 solid; background-color:#f0f0f0;">&lt;</button></td>
<td width="5">&nbsp;</td>
<td>
<div id="outdiv" style="overflow:hidden;width:<?php echo (count($picarr) < 10?(57*count($picarr)):'566'); ?>;">
  <table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="50"  id="indiv">
	  	<table border="0"  cellspacing="2" cellpadding="2" >
			<tr align="center">
	<?php
			foreach($picarr as $key => $picvalue){
	?>         
	
		   <td valign="middle" bgcolor="#FFFFFF"><div align="center"><img id="img<?php echo $key; ?>" src="<?php echo '../uppics/breviary/'.$picvalue['picpath']; ?>" width="50px" height="50px" border="0" onclick="changeimg(<?php echo $key; ?>)" style="cursor:hand;"/></div></td>
	<?php
			}
	?>
			</tr>
		</table>
	  </td>
    </tr>
  </table>
</div>
</td>
<td width="5">&nbsp;</td>
<td><button id="leftfly" style=" height:60; width:15px; border:1px #000000 solid; background-color:#f0f0f0;">&gt;</button></td>
</tr>

</table>
<table  border="1" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<td align="center" valign="middle"><div id="showpic"><img src="<?php echo '../uppics/'.$picarr[0]['picpath']; ?>" name="bigimg" width="<?php echo getWidth('../uppics/'.$picarr[0]['picpath'],640,480); ?>" height="<?php echo getHeight('../uppics/'.$picarr[0]['picpath'],640,480); ?>" id = "bigimg" style="cursor:hand;" onclick="lookpic()" />
		  <div align="center" style=" line-height:25px;">ͼƬ��ʽ��<?php echo getWidth('../uppics/'.$picarr[0]['picpath']); ?> * <?php echo getHeight('../uppics/'.$picarr[0]['picpath']); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo '<a href=mod.php?smallact='.$smallact.'&picpath=../uppics/'.$picarr[0]['picpath'].' target=_blank>�޸�</a> | <a onclick="javascript:if(!confirm(\'�Ƿ�ɾ��?\')){}else{ location=\'del.php?smallact='.$smallact.'&picpath=../uppics/'.$picarr[0]['picpath'].'\';}" style=" cursor: hand;">ɾ��</a>'; ?>&nbsp;&nbsp;&nbsp;<a style="cursor:hand;" onclick="setindexpic(<?php echo $smallact; ?>)">��Ϊ����</a></div></div></td>
	</tr>
	<tr>
		<td height="25" align="center" valign="middle"><a onclick="javascript:open('makealbum.php?act=makealbum&typename=<?php echo $smallact; ?>','_blank','',false)" style=" cursor: hand;">����Ӱ��</a>&nbsp;<a onclick="javascript:open('try.php?typename=<?php echo $smallact; ?>','see','',false)" style="cursor: hand;">Ӱ������</a>&nbsp;<a id="autopage" style="cursor:hand;">�Զ���ҳ</a>&nbsp;���<input type="text" id="secondtxt" size="3" value="3" />��</td>
	</tr>
</table>
</div>
<script language="javascript">
$('img0').style.border = '2px #0000FF solid';
var idnum = '0';
var totalnum = <?php echo count($picarr); ?>;
var uid = '<?php echo $_GET['uid']; ?>';

function lookpic(){
open($('bigimg').src,'_blank','',false);
}
function changeimg(key){
		$('img'+idnum).style.border = '';
		$('img'+(key)).style.border=" 2px #0000FF solid";
		if(key < idnum){
			if(indiv.offsetWidth-outdiv.scrollLeft<=0)
				outdiv.scrollLeft-=indiv.offsetWidth;
			else{
				outdiv.scrollLeft -= (56 * (idnum - key));
			}
		}else if(key > idnum){
			if(indiv.offsetWidth-outdiv.scrollRight<=0)
				outdiv.scrollLeft-=indiv.offsetWidth;
			else{
				outdiv.scrollLeft += (56 * (key - idnum));
			}
		}
		imgpath = '../uppics'+$('img'+key).src.substr($('img'+key).src.lastIndexOf('/'));
		//tb1.alter.href=
		//showpic.alter.href=url;
		url = "showpic.php?smallact=<?php echo $smallact; ?>&picpath="+imgpath+"&uid="+uid;
		
		xmlhttp.open('get',url,true);
		xmlhttp.onreadystatechange = changepic;
		xmlhttp.send(null);
		idnum = key;
}
function LeftMarqueez(){
	if(idnum < (totalnum - 1)){
		$('img'+idnum).style.border = '';
		$('img'+(++idnum)).style.border=" 2px #0000FF solid";
	}
	if(indiv.offsetWidth-outdiv.scrollLeft<=0)
		outdiv.scrollLeft-=indiv.offsetWidth;
	else{
		outdiv.scrollLeft += 56;
	}
	imgpath = '../uppics'+$('img'+idnum).src.substr($('img'+idnum).src.lastIndexOf('/'));
		url = "showpic.php?smallact=<?php echo $smallact; ?>&picpath="+imgpath;
		xmlhttp.open('get',url,true);
		xmlhttp.onreadystatechange = changepic;
		xmlhttp.send(null);
}
function RightMarqueez(){
	if(idnum > 0){
		$('img'+idnum).style.border = '';
		$('img'+(--idnum)).style.border=" 2px #0000FF solid";
	}
	if(indiv.offsetWidth-outdiv.scrollRight<=0)
		outdiv.scrollLeft-=indiv.offsetWidth;
	else{
		outdiv.scrollLeft -= 56;
	}
	imgpath = '../uppics'+$('img'+idnum).src.substr($('img'+idnum).src.lastIndexOf('/'));
	url = "showpic.php?smallact=<?php echo $smallact; ?>&picpath="+imgpath;
	xmlhttp.open('get',url,true);
	xmlhttp.onreadystatechange = changepic;
	xmlhttp.send(null);
}
function startautopage(){
	if(idnum < (totalnum - 1)){
		$('img'+idnum).style.border = '';
		$('img'+(++idnum)).style.border=" 2px #0000FF solid";
		if(indiv.offsetWidth-outdiv.scrollLeft<=0){
			outdiv.scrollLeft-=indiv.offsetWidth;
		}else{
			outdiv.scrollLeft += 56;
		}
		imgpath = '../uppics'+$('img'+idnum).src.substr($('img'+idnum).src.lastIndexOf('/'));
		url = "showpic.php?smallact=<?php echo $smallact; ?>&picpath="+imgpath;
		xmlhttp.open('get',url,true);
		xmlhttp.onreadystatechange = changepic;
		xmlhttp.send(null);
	}else{
		alert('���Ž���');
		clearInterval(timer);
		return false;
	}
}
function changepic(){
	if(xmlhttp.readystate == 4 && xmlhttp.status == 200){
		$('showpic').innerHTML = xmlhttp.responseText;
	}
}

$('rightfly').onclick = RightMarqueez;
$('leftfly').onclick = LeftMarqueez;
$('autopage').onclick = function(){
	if($('autopage').innerText == '�Զ���ҳ'){
		if($('secondtxt').value == ''){
			alert('������������!');
			$('secondtxt').focus();
			return false;
		}
		$('autopage').innerHTML = 'ֹͣ��ҳ';
		timer = setInterval("startautopage()",($('secondtxt').value*1000));
	}else if($('autopage').innerText == 'ֹͣ��ҳ'){
		alert('ֹͣ�Զ�����');
		$('autopage').innerHTML = '�Զ���ҳ';
		clearInterval(timer);
	}
}
function setindexpic(tid){
	indexpic = $('bigimg').src.substr($('bigimg').src.lastIndexOf('/')+1);
	url = 'setindexpic.php?tid='+tid+'&indexpic='+indexpic;
	xmlhttp.open('get',url,true);
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readystate == 4 && xmlhttp.status == 200){
			msg = xmlhttp.responseText;
			if(msg == '1'){
				alert('���óɹ�');
			}else if(msg == '2'){
				alert('����ͼƬ�Ѿ�����ҳ');
			}else{
				alert(msg);
			}
		}
	}
	xmlhttp.send(null);
}
</script>
<?php
	}
}
?>