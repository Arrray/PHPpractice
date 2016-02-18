<?php
//提示指定信息并跳转到指定页面
function warn($info,$url = ""){
	?>
	<script language="JavaScript">
	alert("<?=$info;?>");
	if("<?=$url;?>" != ""){
		window.location.href = "<?=$url;?>";
	}
	else history.back();
	</script>
    <?
	exit();
}

function redirect_once($url){
	echo "<meta http-equiv='refresh' content='0;url=$url'>";
}
function cip($w_ip){			//解析IP区域段
$tetr=explode(".",$w_ip);
	for($i=0;$i<4;$i++){
		$ip=$ip<<8;
		$ip+=$tetr[$i];
	}
	return $ip;
}
function msubstr($str,$start,$len) { 
    $strlen=$start+$len; 
    for($i=0;$i<$strlen;$i++) { 
        if(ord(substr($str,$i,1))>0xa0) { 
            $tmpstr.=substr($str,$i,2); 
            $i++; 
        } else 
            $tmpstr.=substr($str,$i,1); 
    } 
    return $tmpstr; 
}

?>