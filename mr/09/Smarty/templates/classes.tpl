<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/classes.css" type="text/css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<div class="div1">
<table>
 <tr>
{php}$numtotal=0;{/php}
{section name=classes_id loop=$classes}
  

 {php}$numtotal++;{/php}
<td class="tdc"><a href="index.php?lmbs=分类输出&music_type={$classes[classes_id].name}">{$classes[classes_id].name}</a></td>
 {php}if($numtotal%2==0){{/php}
 <tr></tr>
 {php}}{/php}
 
 
 
{/section}
 </tr>
 
</table>
</div>
</body>
</html>
