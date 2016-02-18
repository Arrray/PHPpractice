<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>版权声明</title>
</head>
<body>
<table width="750" height="174" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="35" align="center">&nbsp;</td>
    <td width="680" height="27" align="center"><strong>版权声明</strong></td>
    <td width="35" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="middle">&nbsp;</td>
    <td height="90" align="left" valign="middle"><table width="100%" height="52" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td bgcolor="#FFFFFF">
<?php   

  if($page){
	 $counter=file_get_contents("file/file.txt");//读取文本文件中的数据，返回一个字符串
     $length=strlen(unhtml($counter));//计算字符串的长度，替换特殊字符
     $page_count=ceil($length/1050);//对字符串进行分页处理
 
     $c=msubstr($counter,0,($page-1)*1050);//通过自定义函数获取上一页中的数据
     $c1=msubstr($counter,0,$page*1050);//通过自定义函数获取当前页中的数据
		echo substr($c1,strlen($c),strlen($c1)-strlen($c)); //获取到当前页中要输出的数据
  }
  ?>
    </td>
      </tr>
    </table></td>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
</table>
<table width="680" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="42%" align="center" valign="middle" bgcolor="#FFFFFF"><span class="STYLE1">&nbsp;&nbsp;页次：<?php echo $page;?> / <?php echo $page_count;?> 页 </span></td>
    <td width="58%" height="28" align="left" valign="middle" bgcolor="#FFFFFF"><span class="STYLE1"> &nbsp;分页：
             <?php
	  		  if($page!=1){   
				     echo  "<a href=index.php?lmbs=明日版权声明&page=1>首页</a>&nbsp;";
					 echo "<a href=index.php?lmbs=明日版权声明&page=".($page-1).">上一页</a>&nbsp;";
				   }
				  if($page<$page_count){
				        echo "<a href=index.php?lmbs=明日版权声明&page=".($page+1).">下一页</a>&nbsp;";
				        echo  "<a href=index.php?lmbs=明日版权声明&page=".$page_count.">尾页</a>";				
				   }				   
			  ?>     
    </span> </td>
  </tr>
</table>
</body>
</html>
