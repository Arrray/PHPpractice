<?php
	include_once("conn/conn.class.php");
?>
<html>
<head>
<style type="text/css">
*{font-size:12px;}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>无标题文档</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>
<body>
 
<script language="javascript">
function check_submit(){
	if(list1.dataname.value==""){
		alert("查询条件不允许为空！");list1.dataname.focus();return false;
	}
	list1.submit();
}
function check_submits(){
	if(list1.actor.value==""){
		alert("查询条件不允许为空！");list1.actor.focus();return false;
	}
	list1.submit();
}
</script>
 
<table width="1004" height="720" border="0" cellpadding="0" cellspacing="0" background="images/119.jpg">
  <tr>
    <td>&nbsp;</td>
    <td height="241" align="center" valign="bottom">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="271">&nbsp;</td>
    <td width="440" height="357" align="center" valign="top">

<table width="420" height="300" border="0" align="center" cellpadding="0" cellspacing="0">
                  <form name="list" method="post" action="">
				  <tr>
                   <td width="129" ><div align="right" >查询方式：</div></td>
                    <td width="251" ><span >
                      <select name="selecttype"  onchange="window.location='high.php?selecttype=' + this.value;">
                        <option value="Name" selected <?php if($_GET[selecttype]=="Name" or $_GET[selecttype]=="") echo "selected"; ?>>按名称</option>
                        <option value="Actor" <?php if($_GET[selecttype]=="Actor") echo "selected"; ?>>按人物</option>
                      </select>
                    </span></td>
                    </tr>
				  </form>
<!--判断执行那个脚本函数-->
				  <form name="list1" method="post" action="high_chk.php"
<?php  if($_GET[selecttype]=="Name" or $_GET[selecttype]==""){?> onSubmit="return check_submit();"<?php }else{?>onSubmit="return check_submits();"<?php }?>
>
                  <tr><input name="selecttype1" type="hidden" value="<?php  if($_GET[selecttype]=="") echo "Name"; else echo $_GET[selecttype]; ?>">
					 

                  </tr>         
<?php  
	$selecttype=$_GET[selecttype];
	
	switch ($selecttype){
		case "Name":
			names();

			break;
		case "Actor":
			Actor();
			break;
		default:
			names();
			break;
	}
	
?>	
                  <tr>
                    <td  colspan="2"><div align="center">
						<input type="hidden" name="aciton" value="high" />
                        <input name="Submit" type="submit"  value="  查  询  ">
                        <input name="Submit2" type="button"  value="  返  回  " onClick="javascript:top.window.close()">
                    </div></td>
                  </tr>
	    </form>
      </table>


</td>
    <td width="280">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="122">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

<?php 		
 function names(){

 ?>
                  <tr>
                    <td ><div align="right"><span >歌曲名称：</span></div></td>
                    <td ><div align="left"><span >
                    <input name="dataname" type="text"  size=35>
                    </select>
</span></div></td>
                  </tr>
                  <tr>
                    <td ><div align="right"><span >发行地区名称：</span></div></td>
                    <td ><div align="left"><span >
                    <input type="text" name="areaname" >
</span></div></td>
                  </tr>
                  <tr>
                    <td ><div align="right"><span >发行商名称：</span></div></td>
                    <td ><div align="left"><span >
                      <input name="publishername" type="text"  size=35>
                    </span></div></td>
                  </tr>				  				  				  				  
                  <tr>
                    <td ><div align="right"><span >语言名称：</span></div></td>
                    <td ><div align="left" >
                      <input type="radio" name="language" value="中文" checked> 
                      中文
                      <input type="radio" name="language" value="英文">
                      英文
                      <input type="radio" name="language" value="韩语"> 
                      韩语
                      <br>
                      <input type="radio" name="language" value="日语"> 
                      日语
                      <input type="radio" name="language" value="德语">
                      德语
                      <input type="radio" name="language" value="法语"> 
                      法语
                    </div></td>
                  </tr>
<?php
}	
function Actor(){
?>
     <tr>
                    <td ><div align="right"><span >歌手：</span></div></td>
                    <td ><div align="left"><span >
                      <input name="actor" type="text" >
</span></div></td>
</tr>
                  <tr>
                    <td ><div align="right"><span >作词：</span></div></td>
                    <td ><div align="left"><span >
                      <input name="director" type="text" >
</span></div></td>
                  </tr>
                  <tr>
                    <td ><div align="right"><span >作曲：</span></div></td>
                    <td ><div align="left"><span >
                      <input name="marker" type="text" >
                    </span></div></td>
                  </tr>
<?php
}
?>					  		  			 
</body>
</html>