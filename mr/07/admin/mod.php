<?php
	session_start();
	header('Content-Type:text/html; charset=gb2312');
	include_once 'conn/conn.php';
	include_once 'inc/func.php';
	include_once 'inc/admin.php';
	$picpath = $_GET['picpath'];
?>
<style>
body {
	margin:0px;
	font-size: 12px;
}
</style>
<script language="javascript">
window.onload = function(){	
	var bool = false;
	function $(id){
		return document.getElementById(id);
	}
	$('exam').style.top = '100px';
	$('exam').style.left = '200px';
	$('exam').onmousedown = function(){
		$('exam').style.border = ' 2px #ff0000 solid';
		bool = true;
		tmp1 = $('exam').style.pixelLeft;
		tmp2 = $('exam').style.pixelTop;
		x = event.clientX;
		y = event.clientY;
		document.onmousemove = move;
	}
	function move(){
		if(event.button == 1 && bool){
			if($('exam').style.pixelLeft < ($('contain').offsetLeft + 25)){
				bool = false;
				$('exam').style.pixelLeft = $('contain').offsetLeft + 25;
			}else if($('exam').style.pixelTop < ($('contain').offsetTop + 25)){
				bool = false;
				$('exam').style.pixelTop = $('contain').offsetTop + 25;
			}else if($('exam').style.pixelLeft > ($('contain').offsetLeft + $('contain').offsetWidth - $('exam').offsetWidth-50)){
				bool = false;
				$('exam').style.pixelLeft = $('contain').offsetLeft + $('contain').offsetWidth - $('exam').offsetWidth-50;
			}else if($('exam').style.pixelTop > ($('contain').offsetTop + $('contain').offsetHeight - $('exam').offsetHeight - 50)){
				bool = false;
				$('exam').style.pixelTop = $('contain').offsetTop + $('contain').offsetHeight - $('exam').offsetHeight - 50;
			}else{
				$('exam').style.pixelLeft = tmp1+event.clientX-x;
				$('exam').style.pixelTop = tmp2+event.clientY-y;
			}
			return false;
		}
	}
	document.onmouseup = function(){
		bool = false;
		$('exam').style.border = '';
		$('exam').style.cursor = '';
		
	}
	$('exam').onmouseover = function(){
		$('exam').style.cursor = 'move';
		$('exam').style.border = ' 2px #f0f0f0 solid';
	}
	$('exam').onmouseout = function(){
		$('exam').style.border = '';
	}
	//��������
	$('flyword').onkeyup = function(){
		$('exam').innerHTML = $('flyword').value;
	}
	//���������С
	$('bigfont').onchange = function(){
		$('exam').style.fontSize = $('bigfont').value+'pt';
	}
	//������ʽ
	$('fontstyle').onchange = function(){
		$('exam').style.fontFamily = $('fontstyle').value ;
	}
	//������ɫ
	$('fontcolor').onchange = function(){
		$('exam').style.color = $('fontcolor').value;
	}
	//�ύ
	$('modbtn').onclick = function(){
		url = "mod_chk.php?smallact=<?php echo $_GET['smallact']; ?>&picpath=<?php echo $picpath; ?>&flyword="+$('flyword').value+"&fontstyle="+$('fontstyle').value+"&fontcolor="+$('fontcolor').value+"&bigfont="+$('bigfont').value+"&left="+($('exam').offsetLeft - $('contain').offsetLeft - 25)+"&top="+($('exam').offsetTop - $('contain').offsetTop)+"&width="+$('exam').offsetWidth+"&height="+$('exam').offsetHeight;
		location = url;
	}
	
}
</script>
<center>
<div style=" width:800px;" align="center" >�������֣�<input id="flyword" type="text" value="������Ҫ��ʾ������" />&nbsp; ���������С<select id="bigfont">
<?php for($i=12;$i<46;$i+=2){
?>
<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
<?php
} ?>
</select> ����������ʽ<select id="fontstyle"><option value="SIMLI">����</option><option value="simhei">����</option><option value="STXINWEI">������κ</option></select> ����������ɫ<select id="fontcolor">
	<option value="000000">��ɫ</option>
	<option style="color:#FFFFFF" value="FFFFFF">��ɫ</option>
	<option style="color:#FF0000" value="FF0000">��ɫ</option>
	<option style="color:#0000FF" value="0000ff">��ɫ</option>
	<option style="color:#ff00ff" value="ff00ff">��ɫ</option>
	<option style="color:#009900" value="009900">��ɫ</option>
	<option style="color:#009999" value="009999">��ɫ</option>
	<option style="color:#990099" value="990099">��ɫ</option>
	<option style="color:#990000" value="990000">����ɫ</option>
	<option style="color:#000099" value="000099">����ɫ</option>
	<option style="color:#999900" value="999900">����ɫ</option>
	<option style="color:#ff9900" value="ff9900">�ٻ�ɫ</option>
	<option style="color:#0099ff" value="0099ff">ǳ��ɫ</option>
	<option style="color:#9900ff" value="9900ff">����ɫ</option>
	<option style="color:#ff0099" value="ff0099">����ɫ</option>
	<option style="color:#006600" value="006600">ī��ɫ</option>
	<option style="color:#999999" value="999999">ǳ��ɫ</option>
</select> &nbsp;  <button id="modbtn">�ύ</button></div>

<div id="contain" style=" width:800px; height:600px; border: 15px #f0f0f0 ridge;" align="center"><img id="picpath" src="<?php echo $picpath; ?>" width="<?php echo getWidth($picpath); ?>" height="<?php echo getHeight($picpath); ?>" border="0" />
</div>
<div id="exam" style="font-size:12pt; font-family:'����'; position:absolute; background-color: #FFFFCC; top: 624px;">������Ҫ��ʾ������</div>
</center>