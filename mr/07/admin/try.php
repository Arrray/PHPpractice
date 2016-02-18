<?php
	session_start();
	include_once 'inc/func.php';
	include_once 'inc/admin.php';
	$typename= $_GET['typename'];
	if($typename == ''){
		$member = $_GET['member'];
		$flyword = $_GET['flyword'];
		$way = $_GET['way'];
		$wordfont = $_GET['wordfont'];
		$color = $_GET['color'];
		$tmpstr = '<span style=" font-size:'.$wordfont.'px; color=#'.$color.';">'.$flyword.'</span>';
		$tmparr = explode(',',$member);	
	}else{
		include_once 'conn/conn.php';
		$sql = "select * from tb_album where typename = ".$typename;
		$tmp = $conne->getRowsRst($sql);
		$way = $tmp['way'];
		$tmpstr = $tmp['flyword'];
		$tmparr = explode(',',$tmp['piclist']);
	}
?>
<style>
body {
 position:absolute; top:-25px; left:-5px;
}
</style>
<script>
function $(id){
	return document.getElementById(id);
}
var example = false;
i = 0;
rnd = 1;
total = <?php echo count($tmparr); ?>;
way = '<?php echo $way; ?>';
function initjs(){
	example = document.all('zero');
}
function playjs(){
if(example == false){
	initjs();
}
  switch(rnd){
    case 1:
		example.style.filter = 'RevealTrans(duration=2,transition=23)';
		break;
	case 2:
		example.style.filter = 'progid:DXImageTransform.Microsoft.Barn ( enabled=Enabled ,  duration=0.5,motion=in,orientation=vertical )';
		break;
	case 3:
		example.style.filter = 'BlendTrans(enabled=Enabled,duration=2)';
		break;
	case 4:
		example.style.filter = 'progid:DXImageTransform.Microsoft.Blinds ( enabled=Enabled , duration=2 , bands=50 , Direction=up ) ';
		break;
	case 5:
		example.style.filter = 'progid:DXImageTransform.Microsoft.Wheel ( enabled=Enabled , duration=2 , spokes=8 )';
		break;
	case 6:
		example.style.filter = 'progid:DXImageTransform.Microsoft.Stretch ( enabled=Enabled , duration=2) ';
		break;
	case 7:
		example.style.filter = 'progid:DXImageTransform.Microsoft.Slide ( enabled=Enabled , duration=2 , bands=10) ';
		break;
	case 8:
		example.style.filter = 'progid:DXImageTransform.Microsoft.RandomDissolve ( enabled=Enabled , duration=2 )';
		break;
  }
	with(example){
	  if(i == 0){
		filters[0].Apply();
		children[total-1].style.visibility = 'hidden';
		children[i].style.visibility = 'visible';
		filters[0].play();
	  }else if(i == (total-1)){
	  	children[i-1].style.visibility = 'hidden';
		filters[0].Apply();
		children[i].style.visibility = 'visible';
		filters[0].play();
		i = -1;
	  }else{
	  	filters[0].Apply();
	  	children[i-1].style.visibility = 'hidden';
		children[i].style.visibility = 'visible';
		filters[0].play();
	  }
	}
	i++;
	rnd = Math.round(Math.random() * 7) + 1;
	setTimeout(playjs,3000);
}
window.onload = function(e){
	//alert('按ESC键可以退出观看!');
	window.moveTo(0, 0);
	var t = window.screenTop;
	var l = window.screenLeft;
	window.moveTo(-l, -t);
	window.resizeTo(screen.width + l +20, window.screen.Height + t + 20);
	playjs();
}
document.onkeydown = function(){
 	if(event.keyCode == 27){
		window.close();
	}
 }
</script>
<div id="outdiv" align="center" style=" width:850px; overflow:hidden;">
<div id="indiv" style=" width:1700px;" align="center">&nbsp;<?php echo $tmpstr; ?></div>
</div>
<script>
function fromrighttoleft(){
	if($('outdiv').scrollLeft+$('outdiv').offsetWidth >= $('indiv').offsetWidth){
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
if(way == 'right'){
	setInterval(fromlefttoright,30);
}else if(way == 'left'){
	setInterval(fromrighttoleft,30);
}
</script>
<table border="0" cellpadding="0" cellspacing="0" align="center">
<tr>
	<td height="600">&nbsp;</td>
	<td style="width:800px;"><div id="zero" style="width:800px; height:600px; top:100px; position:absolute;">
<?php
	foreach($tmparr as $key => $value){
?>
<div id="num<?php echo $key; ?>" style="position:absolute; vertical-align:middle; visibility:hidden; top:0px;"><img src="../uppics/<?php echo $value; ?>" width="<?php echo getWidth('../uppics/'.$value,800,600); ?>" height="<?php echo getHeight('../uppics/'.$value,800,600); ?>" border="0" /></div>
<?php
	}
?>
</div></td>
	<td>&nbsp;</td>
</tr>
</table>