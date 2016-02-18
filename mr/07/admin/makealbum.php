<?php
	session_start();
	header('Content-Type:text/html;charset=gb2312');
	include_once 'conn/conn.php';
	include_once 'inc/admin.php';
	include_once 'inc/func.php';
	$typename = $_GET['typename'];
	$step = $_GET['step'];
?>
<link rel="stylesheet" href="css/style.css" />
<script>
function $(id){
	return document.getElementById(id);
}
</script>
<div id="contain">
<?Php
	include 'top.html';
	include 'nav.html';
?>
<div style=" width:809px; height:80px; background-image:url(../images/alb1.gif); background-position: center; vertical-align:middle; background-repeat:no-repeat;">&nbsp;</div>
<?php
	if($step == ''){
		$sql = "select id,picname,picpath from tb_photo where typename = ".$typename;
		$picarr = $conne->getRowsArray($sql);
		$conne->close_rst();
?>
<script type="text/javascript">
//关联多选列表
function activeList(headStream,endStream)
{
     var valueList = new Array();
     var textList = new Array();
     var valueTmpText = new Array();
     var index = 0;
     for(var i=0; i<headStream.options.length; i++)
     {
         if(headStream.options[i].selected)
         {
             valueList[index] = headStream.options[i].value;
             textList[index] = headStream.options[i].text;
             valueTmpText[valueList[index]] = headStream.options[i];
             index++;
         }
     }
     for(var i=0; i<textList.length; i++)  
     {
         var foption = document.createElement("option");
         foption.text = textList[i];
         foption.value = valueList[i];
         endStream.add(foption);
         headStream.removeChild(valueTmpText[valueList[i]]);
     }
 }
 //验证步骤1，添加滚动图片
 function glist(){
 	if($('albumname').value == ''){
		alert('请填写动感影集名称');
		$('albumname').focus();
		return false	
	}
	var len = $('right').length;
	if(len == 0){
		alert('请添加图片');
		return false;
	}
	var list = $('right')[0].value;
	for(var i = 1; i < len; i++){
		list += ','+$('right')[i].value;
	}
	$('g_list').value = list;
 }
 /**************************************************************/

</script>
<table width="765" border="0" cellpadding="0" cellspacing="0" align="center">
<tr><td align="center" valign="top">
<form id="addpic" name="addpic" method="post" action="makealbum.php?typename=<?php echo $typename; ?>&amp;step=1">
<table width="450" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="25" colspan="4" align="center" valign="middle" scope="col">影集名称：
	  <input type="text" id="albumname" name="albumname" />		</td>
    </tr>
  <tr>
    <td width="189" align="center" valign="middle">
	<SELECT id="left" name="left" size="10" multiple style="width:100px; ">
     <?php
	 	foreach($picarr as $picvalue){
	?>
		<option value="<?php echo $picvalue['picpath']; ?>"><?php echo $picvalue['picname']; ?></option>		
	<?php
		}
	 ?>
   </SELECT>   </td>
    <td width="96" align="center" valign="middle">
   <a href="#" onClick="activeList(document.addpic.left,document.addpic.right)">添加相片&gt;&gt;</a><br>
   <br>
    <a href="#" onClick="activeList(document.addpic.right,document.addpic.left)">&lt;&lt;删除相片</a></td>
    <td colspan="2" align="center" valign="middle"><select id="right" name="right" size="10" multiple style="width:100px; ">
   </select></td>
  </tr>
  <tr>
    <td height="30" colspan="4" align="center" valign="middle">
	  <input type="hidden" name="g_list" />
	  <input type="submit" value="" onclick="return glist()" style=" background-image:url(../images/next.gif); background-position:center; background-repeat:no-repeat; width:50px; height:25px;" /></td>
  </tr>
</table>
</form>
</td></tr></table>
<?php
	}else if($step == '1'){
		$typename = $_GET['typename'];			//相册类别
		$albumname = $_POST['albumname'];		//影集名称
		$albummember = $_POST['g_list'];		//包含图片的路径
		$sql = "select * from tb_album where typename = ".$typename;
		if($conne->getRowsNum($sql) == ''){	
			$chsql = "insert into tb_album(typename,alname,piclist) values(".$typename.",'".$albumname."','".$albummember."')";
		}else{
			$chsql = "update tb_album set alname = '".$albumname."',piclist = '".$albummember."' where typename = ".$typename;
		}
		$num = $conne->uidRst($chsql);
		if($num != 1){
			echo "<script>history.go(-1);</script>";
			exit();
		}
		//$tmparr = explode(',',$albummember);	
?>
<div align="center">
	<div id="outdiv" style=" border:1px #000000 solid; overflow:hidden; width:640px; height:100px;" align="center">
	<div id="indiv" align="center" style=" width:1400; font-size:12px; "></div>
	</div>
	<div id="writeword">输入滚动文字：<input id="flyword" type="text" value="输入滚动文字" /></div>
&nbsp;<button id="leftbtn" style=" background-image:url(../images/lftorg.gif); background-position:center; background-repeat:no-repeat; width: 68px; height:20px;">&nbsp;</button>
?<button id="rightbtn" style="background-image:url(../images/rgtolf.gif); background-position:center; background-repeat:no-repeat; width: 68px; height:20px;">&nbsp;</button>&nbsp;<select id="bigfont">
<?php for($i=12;$i<46;$i+=2){
?>
<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
<?php
} ?>
</select>&nbsp;<select id="color">
	<option value="000000">黑色</option>
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
</select>&nbsp;</div>
<input type="hidden" id="way" value="left" />
<div align="center"><button id="try" onclick="showme()" style="background-image:url(../images/purp.gif); background-position:center; background-repeat:no-repeat; width: 68px; height:20px;"></button>&nbsp;<button id="next" style = "background-image:url(../images/finishbtn.gif); background-position:center; background-repeat:no-repeat; width: 50px; height:20px;">&nbsp;</button></div>
<script>
function fromrighttoleft(){
	if($('outdiv').scrollLeft+$('outdiv').offsetWidth > $('indiv').offsetWidth){
		$('outdiv').scrollLeft = 10;
	}else{
		$('outdiv').scrollLeft++;
	}
}
function fromlefttoright(){
	if($('outdiv').scrollLeft == 0){
		$('outdiv').scrollLeft = $('indiv').offsetWidth - $('outdiv').offsetWidth;
	}else{
		$('outdiv').scrollLeft--;
	}
}
$('indiv').innerHTML = $('flyword').value;
timer = setInterval(fromlefttoright,30);
$('leftbtn').onclick = function(){
	clearInterval(timer);
	$('way').value = 'right';
	timer = setInterval(fromlefttoright,30);
}
$('rightbtn').onclick = function(){
	clearInterval(timer);
	$('way').value = 'left';
	timer = setInterval(fromrighttoleft,30);
}
$('bigfont').onchange = function(){
	$('indiv').style.fontSize = $('bigfont').value+'px';
}
$('color').onchange = function(){
	$('indiv').style.color = '#'+$('color').value;
}
$('flyword').onkeyup = function(){
	$('indiv').innerHTML = $('flyword').value;
}
$('try').onclick = function(){
	 open('try.php?step=2&uid=<?php echo $_GET['uid']; ?>&typename=<?php echo $_GET['typename']; ?>&flyword='+$('flyword').value+'&way='+$('way').value+'&wordfont='+$('bigfont').value+'&color='+$('color').value,'_blank','',false);
}
$('next').onclick = function(){
	 location = '?step=2&uid=<?php echo $_GET['uid']; ?>&typename=<?php echo $_GET['typename']; ?>&flyword='+$('flyword').value+'&way='+$('way').value+'&wordfont='+$('bigfont').value+'&color='+$('color').value;
}
</script>
<?php
	}else if($step == '2'){
		$flyword = $_GET['flyword'];
		$way = $_GET['way'];
		$wordfont = $_GET['wordfont'];
		$color = $_GET['color'];
		$tmpstr = '<span><font size='.$wordfont.'; color=#'.$color.';">'.$flyword.'</font></span>';
		$upsql = "update tb_album set flyword = '".$tmpstr."',way = '".$way."' where typename = ".$typename;
		if($conne->uidRst($upsql) != 1){
			echo "<script>history.go(-1);</script>";
			exit();
		}else{
			echo "<script>alert('制作完成！');top.opener.location.reload();window.close();</script>";
		}
?> 
<?php
	}
?>
<p />
<div><?php include '../bottom.html'; ?></div>
</div>
