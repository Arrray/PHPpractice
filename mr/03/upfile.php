<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>上传前台</title>
<style type="text/css">
.long{ border:1px solid #CCCCCC; width:240px; height:20px; line-height:18px;}
.button{width:60px; border:1px solid #FFFFFF; background:#FFCCFF;}
</style>
<!*************************!>
</head>
<body>

<script type="text/javascript">
function insertRow(){
	var rowIndex1 = document.all("addordel").length;
	if(rowIndex1 >= 5){
		alert('一次最多能上传5个文件');
		return false;
	}
	var obj=document.getElementsByName("addordel")[0].cloneNode(true);
	document.all("change").appendChild(obj);
}
function delRow(){
	var rowIndex = document.all("addordel").length;
	if(rowIndex >= 2){
		event.srcElement.parentNode.removeNode(true);
	}
}
function chkfile(){
	obj = document.getElementsByName('upname[]');
	num = obj.length;
	for(i=0;i<num;i++){
		if(obj[i].value == 0){
			alert('请添加上传文件');
			return false;
		}
	}
}
</script>
<div><img src="image/title.jpg" /></div>
<form method="post" enctype="multipart/form-data" action="?act=upfile">
<ul id="change">                     
  <li id="addordel">                                    <!这两个id用于JS 删除后JS失效!>
<input class="long"id="upname[]" name="upname[]" type="file" />&nbsp;  
  <select id="foundtype[]" name="foundtype[]">
    <?php
	$typesql = "select genrename from tb_uptype";   //操作数据库 查看"上传种类"信息并返回通过foreach()函数循环输出
	$typearr = $conne->getRowsArray($typesql);
	$conne->close_rst();
	foreach($typearr as $value){ 
    ?>
	<option value="<?php echo $value['genrename']; ?>"><?php echo $value['genrename']; ?></option>
         //通过循环输出"上传种类"
    <?php
	}
    ?>
  </select>&nbsp;

  <select id="ispub[]" name="ispub[]">
	   <option value="0" selected="selected">不公开</option>
	   <option value="1">公开</option>
  </select>
  &nbsp;
  
  
  

  <!--<button onClick="delRow()">Delete</button>!&nbsp;<button onClick="insertRow()" >Add</button>&nbsp;!-->
  <!--批量上传功能暂时屏蔽--></li>
</ul>
<input class="button" id="upbtn" name="upbtn" type="submit" value="上传" onClick="return chkfile()" />
</form>

</body>
</html>