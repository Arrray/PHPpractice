<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>���ռ��</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 14px;
	color: #000000;
}
-->
</style></head>
<script type="text/javascript" src="js/discuss_js.js"></script>
<body>
<table width="800" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="360"><table width="350" height="300" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
 
    <td width="70" bgcolor="#C0C0C0"><div align="right">
      <input type="button" onClick="javascript:document.rp1.setfullscreen()" class="buttoncss" value="ȫ������"></div></td>
    <td width="70" bgcolor="#C0C0C0"><input name="button" type="button" class="buttoncss" onClick="javascript:window.close()" value="�ر��Ӵ�"></td>
    </tr>
  <tr>
    <td height="300" colspan="4" bgcolor="#ffffff"><div align="center"> 
<object onerror=alert("��Ļ�����û�а�װRealplayer�����������Ȱ�װ��") classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" name="rp1" width="350" height="300" id="rp1">
            <param name="_extentx" value="12000">
            <param name="_extenty" value="7500">
            <param name="shuffle" value="0">
            <param name="nolabels" value="0">
            <param name="autostart" value="-1">
            <param name="prefetch" value="0">
            <param name="controls" value="imagewindow">
            <param name="console" value="clip1">
            <param name="loop" value="0">
            <param name="numloop" value="0">
            <param name="center" value="0">
            <param name="maintainaspect" value="0">
            <param name="backgroundcolor" value="#000000">
            <param name="src" value="rtsp://192.168.1.59/SOFT/18/upfiles/video/1297751334.avi">
        </object>
        </div></td>
  </tr>
      <tr>
        <td height="60" colspan="2" bgcolor="#000000"><div align="center">
            <object classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" name="rp2" width="350" height="60" id="rp2">
              <param name="_extentx" value="12000">
              <param name="_extenty" value="1500">
              <param name="shuffle" value="0">
              <param name="nolabels" value="0">
              <param name="autostart" value="-1">
              <param name="prefetch" value="0">
              <param name="controls" value="controlpanel,statusbar">
              <param name="console" value="clip1">
              <param name="loop" value="0">
              <param name="numloop" value="0">
              <param name="center" value="0">
              <param name="maintainaspect" value="0">
              <param name="backgroundcolor" value="#000000">
            </object>
        </div></td>
      </tr>
</table></td>
    <td width="440" align="center" valign="top">

<div id="synopsis"><!--����div��ǩ�����ڻ�ȡjs�ļ��з��صķ�ҳ���-->
<table width="425" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="20">&nbsp;</td>
      </tr>
      <tr>
        <td>
<?php 			
//��ȡ�����ı��е����ݣ�ʵ�ֳ����ı������ݵķ�ҳ��ʾ
  if($page){
	 $counter=file_get_contents("file/mr_synopsis.txt");
     $length=strlen($counter);
     $page_count=ceil($length/950);
     $c=msubstr($counter,0,($page-1)*950);
     $c1=msubstr($counter,0,$page*950);
		echo substr($c1,strlen($c),strlen($c1)-strlen($c)); 
  }
?>    </td>
      </tr>
      <tr>
        <td>
<table border="0" align="center" cellpadding="0" cellspacing="0">
  <tr><!--���ó����ı���ҳ��ʾ�ĳ�������-->
    <td width="42%" align="center" valign="middle" bgcolor="#FFFFFF"><span class="STYLE1">&nbsp;&nbsp;ҳ�Σ�<?php echo $page;?> / <?php echo $page_count;?> ҳ </span></td>
    <td width="58%" height="28" align="left" valign="middle" bgcolor="#FFFFFF"><span class="STYLE1"> &nbsp;��ҳ��
              <?php
	  		  if($page!=1){  
?> 
<!--����artpagination������ʵ����ˢ�µķ�ҳ���-->
<a href="#" onclick='return artpagination("mr_synopsis_ok.php?page=1")'>��ҳ</a>&nbsp;

<a href="#" onclick='return artpagination("mr_synopsis_ok.php?&page=<?php echo $page-1;?>")'>��һҳ</a>&nbsp;
				 <?php  }
				  if($page<$page_count){
?>
<a href="#" onclick='return artpagination("mr_synopsis_ok.php?page=<?php echo $page+1;?>")'>��һҳ</a>&nbsp;
				        <a href="#" onclick='return artpagination("mr_synopsis_ok.php?page=<?php echo $page_count;?>")'>βҳ</a>				
<?php
		
		   }				   
			  ?>     
    </span> </td>
  </tr>
</table></td>
      </tr>
    </table>
</div>
</td>
  </tr>
</table>
</body>
</html>
