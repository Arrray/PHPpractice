<?php	
	session_start();
	include "conn/conn.class.php";
?>
<style>
#lrcollbox td, #lrcollbox font {font-size: 16px;}
#lrcoll td { color:#000000; }
.lrcbc { overflow:hidden; height:20; width:0; filter:alpha(opacity=100); }
.lrcbcdir{ text-align:center;}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
*{text-align:center;}
</style>
<script src="js/check_lyric.js" language="javascript"></script>
<script>
window.onunload=function(){
		clearTimeout(lrc0);
	}
</script>

<!--调用process函数，实现无刷新读取指定的歌词文件，并将内容输出到lrcContent中-->
<body onLoad="process('<?php echo substr($_GET[id],0,-4);?>')" >
<center> 
<span id="lrcContent" style="display:none;"><?php include("lyric.php");?></span>
<table width="1004" height="720" border="0" cellpadding="0" cellspacing="0" background="images/111.jpg">
  <tr>
    <td>&nbsp;</td>
    <td height="241" align="center" valign="bottom">试听歌曲：<?php 
//$sql=mysql_query("select name from tb_video where address='".$_GET[id]."'");
//$myrow=mysql_fetch_array($sql);
$sqlstriv="select name from tb_video where address='".$_GET[id]."'";
$myrow=$result->singleRow($sqlstriv,$conn);
echo $myrow[name];
?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="271">&nbsp;</td>
    <td width="440" height="357" align="center" valign="top"><br>


<object classid="clsid:6BF52A52-394A-11D3-B153-00C04F79FAA6" id="mediaPlayer" width="420" height="64">
<param name="url" value="upfiles/video/<?php echo $_GET[id];?>">
<param name="volume" value="100">
<param name="playcount" value="100">
<param name="enablecontextmenu" value="0">
<param name="enableerrordialogs" value="0">
</object>
<div id="lrcollbox" style="overflow:hidden; height:260; width:420;">
<table border="0" cellspacing="0" cellpadding="0" id="lrcoll" width="100%" style="position:relative; top:120px;">
<?php 

//$sql=mysql_query("select lyric from tb_video where address='".$_GET[id]."'");
//$myrow=mysql_fetch_array($sql);
$sql="select lyric from tb_video where address='".$_GET[id]."'";
$myrow=$result->singleRow($sql,$conn);
if($myrow['lyric']==true){
?> 
	<tr>
		<td nowrap height="20">
    		<table border="0" cellspacing="0" cellpadding="0">
      			<tr>
					<td nowrap height="20"><span id="lrcbox1" style="height:20; color:#FF0000">正在加载歌词……</span></td>
      			</tr>
      			<tr style="position:relative; top: -20px; z-index:6;">
        			<td nowrap height="20"><div id="lrcbc1" class="lrcbc"></div></td>
      			</tr>
    		</table>
  		</td>
	</tr>
<?php  
$lyric=file_get_contents("upfiles/lyric/$myrow[lyric].lrc");
$counts=preg_match_all("/\[.*?\]/",$lyric,$tmptime); //提取[]，判断该行有几个时间
for($i=0;$i<$counts;$i++){
?>
	<tr style="position:relative; top: <?php echo -20*$i;?>px;">
		<td nowrap height="20" align="left">
		   <div class="lrcbcdir">
			<table border="0" cellpadding="0" cellspacing="0">
 				<tr><td nowrap height="20"><span id="lrcbox<?php echo $i+2;?>" style="height:20"></span></td></tr>
      			<tr style="position:relative; top: -20px; z-index:6;"><td nowrap height="20"><div id="lrcbc<?php echo $i+2;?>" class="lrcbc"></div></td></tr>
			</table>
		   </div>
	  	</td>
	</tr>
<?php
}
}else{
?> 
	<tr>
		<td nowrap height="20" align="center">
    		<table border="0" cellspacing="0" cellpadding="0">
      			<tr>
					<td nowrap height="20"><span id="lrcbox1" style="height:20; color:#FF0000">很抱歉，该歌曲没有提供歌词！……</span></td>
      			</tr>
      			<tr style="position:relative; top: -20px; z-index:6;">
        			<td nowrap height="20"><div id="lrcbc1" class="lrcbc"></div></td>
      			</tr>
    		</table>
  		</td>
	</tr>
<?php }?>
</table>
</div>

</td>
    <td width="280">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="122">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<script language="JavaScript">
var getLrcContent=lrcContent.innerHTML.slice(4,-3);		//获取歌词内容
if(getLrcContent!=""){
	lrcobj = new lrcClass(getLrcContent);	//初始化lrcClass类的对象，参数为歌词内容
	var lrc0, lrc1;
	moveflag = false;
	movable = false;
	moven = false;
	var lrctop;
	predlt = 0;
	curdlt = 0;
	curpot = 0;

	function lrcClass(lyric){		//参数为歌词内容
		this.inr = [];
		this.oTime = 0;
		this.dts = -1;
		this.dte = -1;
		this.dlt = -1;
		this.ddh;
		this.fjh;
		if(/\[offset\:(\-?\d+)\]/i.test(lyric)) this.oTime = RegExp.$1/1000;//获取歌词中是否有时间补偿值，时间补偿值的单位为毫秒，正数表示整体提前，负数表示整体滞后
		lyric = lyric.replace(/\[\:\][^$\n]*(\n|$)/g,"$1");
		lyric = lyric.replace(/\[[^\[\]\:]*\]/g,"");
		lyric = lyric.replace(/\[[^\[\]]*[^\[\]\d]+[^\[\]]*\:[^\[\]]*\]/g,"");
		lyric = lyric.replace(/\[[^\[\]]*\:[^\[\]]*[^\[\]\d\.]+[^\[\]]*\]/g,"");
	
		while(/\[[^\[\]]+\:[^\[\]]+\]/.test(lyric)){
			lyric = lyric.replace(/((\[[^\[\]]+\:[^\[\]]+\])+[^\[\r\n]*)[^\[]*/,"\n");
			var zzzt = RegExp.$1;
			/^(.+\])([^\]]*)$/.exec(zzzt);
			var ltxt = RegExp.$2;
			var eft = RegExp.$1.slice(1,-1).split("][");
			for(var ii=0; ii<eft.length; ii++){
				var sf = eft[ii].split(":");
				var tse = parseInt(sf[0],10) * 60 + parseFloat(sf[1]);
				var sso = { t:[] , w:[] , n:ltxt }
				sso.t[0] = tse-this.oTime;
				this.inr[this.inr.length] = sso;
			}
		}
		this.inr = this.inr.sort( function(a,b){return a.t[0]-b.t[0];} );
		
		for(var ii=0; ii<this.inr.length; ii++){
			while(/<[^<>]+\:[^<>]+>/.test(this.inr[ii].n)){
				this.inr[ii].n = this.inr[ii].n.replace(/<(\d+)\:([\d\.]+)>/,"%=%");
				var tse = parseInt(RegExp.$1,10) * 60 + parseFloat(RegExp.$2);
				this.inr[ii].t[this.inr[ii].t.length] = tse-this.oTime;
			}
			lrcbc1.innerHTML = "<font>"+ this.inr[ii].n.replace(/&/g,"&").replace(/</g,"<").replace(/>/g,">").replace(/%=%/g,"</font><font>") +" </font>";
			var fall = lrcbc1.getElementsByTagName("font");
			for(var wi=0; wi<fall.length; wi++){
				this.inr[ii].w[this.inr[ii].w.length] = fall[wi].offsetWidth;
			}
			this.inr[ii].n = lrcbc1.innerText;
		}
		//定义一个方法，用于
		this.run = function(tme){
			if(tme<this.dts || tme>=this.dte){
				var ii;
				for(ii=this.inr.length-1; ii>=0 && this.inr[ii].t[0]>tme; ii--){
				}
				if(ii<0) return;
				this.ddh = this.inr[ii].t;
				this.fjh = this.inr[ii].w;
				this.dts = this.inr[ii].t[0];
				this.dte = (ii<this.inr.length-1)?this.inr[ii+1].t[0]:mediaPlayer.currentMedia.duration;
				
				if(!movable){
					lrctop = 140;
					lrcoll.style.pixelTop = 140;
					lowlight(lrcbox1);
					for(var wi=1; wi<=this.inr.length; wi++){
						eval("lrcbox"+wi).innerText = this.inr[wi-1].n;
						eval("lrcbc"+wi).innerText = this.inr[wi-1].n;
					}
					movable = true;
				}
				if(moven){
					moven = false;
				}else{
					if(this.dlt>0) lowcolor(eval("lrcbc"+this.dlt));
					if(this.dlt==ii-1){
						predlt = this.dlt+1;
						if(predlt>0){
							highcolor(0,this.dte-this.dts);
						}
						toposition(1,this.dte-this.dts);
					}
					if(ii-this.dlt>1 || ii-this.dlt<=-1){
						if(this.dlt==-1 || ii==0){
							jumpto(ii-this.dlt-1);
							toposition(1,this.dte-this.dts);
						}else{
							jumpto(ii-this.dlt);
						}
						if(this.dlt>=0) lowcolor(eval("lrcbc"+(this.dlt+1)));
					}
					if(this.dlt>=0) lowlight(eval("lrcbox"+(this.dlt+1)));
					highlight(eval("lrcbox"+(ii+1)));
				}
				this.dlt = ii;
				curdlt = ii;
				curpot = ii;
			}
		}
	}

	function lrcrun(){
		lrcobj.run(mediaPlayer.controls.currentPosition);
		if(arguments.length==0){
			lrc0 = setTimeout("lrcrun()",10);
		}
	}

	function jumpto(nline){
		lrctop -= 20*nline;
		lrcoll.style.top = lrctop;
	}

	function toposition(step,dur){
		if(moveflag) return;
		lrcoll.style.top = lrctop--;
		if(step<20){
			step++;
			setTimeout("toposition("+step+","+dur+");",dur*50);
		}
	}
	//设置演唱歌词的跟踪显示
	function highcolor(step,dur){
		if(moveflag) return;
		eval("lrcbc"+predlt).filters.alpha.opacity = 0;
		if(step<10){
			lrc1 = setTimeout("highcolor("+step+","+dur+");",dur*100);
		}	
	}

	function highlight(lid){
		lid.style.color = "#FF0000";		//设置将要演唱的歌词的颜色
	}

	function lowcolor(lid){
		clearTimeout(lrc1);
	}

	function lowlight(lid){
		lid.style.color = "#000000";		//设置演唱后的歌词的显示颜色
	}

	lrcrun();
	MakeMovable(lrcollbox);

	function MakeMovable(element){
		flagmove = false;
	}
}else{
	document.getElementById("lrcbox1").innerHTML="很抱歉，该歌曲没有提供歌词！";
}
</script>
</center>
</body>
