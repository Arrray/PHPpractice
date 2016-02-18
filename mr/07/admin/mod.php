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
	//设置文字
	$('flyword').onkeyup = function(){
		$('exam').innerHTML = $('flyword').value;
	}
	//设置字体大小
	$('bigfont').onchange = function(){
		$('exam').style.fontSize = $('bigfont').value+'pt';
	}
	//字体样式
	$('fontstyle').onchange = function(){
		$('exam').style.fontFamily = $('fontstyle').value ;
	}
	//字体颜色
	$('fontcolor').onchange = function(){
		$('exam').style.color = $('fontcolor').value;
	}
	//提交
	$('modbtn').onclick = function(){
		url = "mod_chk.php?smallact=<?php echo $_GET['smallact']; ?>&picpath=<?php echo $picpath; ?>&flyword="+$('flyword').value+"&fontstyle="+$('fontstyle').value+"&fontcolor="+$('fontcolor').value+"&bigfont="+$('bigfont').value+"&left="+($('exam').offsetLeft - $('contain').offsetLeft - 25)+"&top="+($('exam').offsetTop - $('contain').offsetTop)+"&width="+$('exam').offsetWidth+"&height="+$('exam').offsetHeight;
		location = url;
	}
	
}
</script>
<center>
<div style=" width:800px;" align="center" >输入文字：<input id="flyword" type="text" value="请输入要显示的文字" />&nbsp; 设置字体大小<select id="bigfont">
<?php for($i=12;$i<46;$i+=2){
?>
<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
<?php
} ?>
</select> 设置字体样式<select id="fontstyle"><option value="SIMLI">楷书</option><option value="simhei">黑体</option><option value="STXINWEI">华云新魏</option></select> 设置字体颜色<select id="fontcolor">
	<option value="000000">黑色</option>
	<option style="color:#FFFFFF" value="FFFFFF">白色</option>
	<option style="color:#FF0000" value="FF0000">红色</option>
	<option style="color:#0000FF" value="0000ff">蓝色</option>
	<option style="color:#ff00ff" value="ff00ff">桃色</option>
	<option style="color:#009900" value="009900">绿色</option>
	<option style="color:#009999" value="009999">青色</option>
	<option style="color:#990099" value="990099">紫色</option>
	<option style="color:#990000" value="990000">暗红色</option>
	<option style="color:#000099" value="000099">深蓝色</option>
	<option style="color:#999900" value="999900">暗黄色</option>
	<option style="color:#ff9900" value="ff9900">橘黄色</option>
	<option style="color:#0099ff" value="0099ff">浅蓝色</option>
	<option style="color:#9900ff" value="9900ff">蓝紫色</option>
	<option style="color:#ff0099" value="ff0099">暗红色</option>
	<option style="color:#006600" value="006600">墨绿色</option>
	<option style="color:#999999" value="999999">浅灰色</option>
</select> &nbsp;  <button id="modbtn">提交</button></div>

<div id="contain" style=" width:800px; height:600px; border: 15px #f0f0f0 ridge;" align="center"><img id="picpath" src="<?php echo $picpath; ?>" width="<?php echo getWidth($picpath); ?>" height="<?php echo getHeight($picpath); ?>" border="0" />
</div>
<div id="exam" style="font-size:12pt; font-family:'楷书'; position:absolute; background-color: #FFFFCC; top: 624px;">请输入要显示的文字</div>
</center>