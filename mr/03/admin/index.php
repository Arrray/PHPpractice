<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css" >
*{margin:0; padding:0;}
body{font-size:12px; text-align:center;}
.main{ width:400px; text-align:center; border:1px solid #ccc; margin:20px;}
.midbox{margin:30px 5px 10px 5px; border:1px solid #0099FF; width:200px; height:150px;}
h1{border-bottom:1px solid #0099ff; background:#CCCCFF; font-size:16px;}
.input{border:1px solid #00FFFF; height:20px; width:100px; background:#66CCFF; margin:5px;}
#input2{border:1px solid  #CCCCCC; width:40px; height:18px;}
.introduce{ margin:5px; font-size:14px; color:#0033FF; line-height:20px;}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>后台登陆界面</title>
</head>

<body>
<div class="main">
<div class="midbox">
<h1>后台登录</h1>
<div>
<p>  
<form id="form1" name="form1" method="post" action="loginsub.php">
    帐号:<input  class="input"type="text" name="name" /><p></p>
	密码:<input class="input"type="password" name="password" />
	<p>
	  <input name="submit"type="submit" id="input2" value="登录" />
	  <div class="introduce">登录帐号&quot;mr&quot; 密码"mrsoft"</div>
</form>
</div>
</div>
</div>

</body>
</html>
