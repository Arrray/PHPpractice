<?php 
$len=strlen($_SERVER['PHP_SELF']);
$filepath=__FILE__;
$doclen=strlen($_SERVER['PHP_SELF']);
$tmp="\\";
$array=explode($tmp,$filepath);
$num=count($array);
$namelen=strlen($array[$num-1]);
$new_path="/".$array[$num-4]."/".$array[$num-3]."/".$array[$num-2]."/";
$newlen=$doclen-$namelen;
$newpath=substr($_SERVER['PHP_SELF'],0,$newlen);
define('PATH',$_SERVER['DOCUMENT_ROOT']);						//服务器目录
	define('ROOT',$new_path);						    //论坛根目录
	define('ADMIN','rebadmin/');								//后台目录
	define('BAK','badmin/sqlbak/');							    //备份目录
	define('MYSQLPATH','c:\\AppServ\\MySQL\\bin\\');            //mysql执行文件路径(请根据MySQL实际位置设置路径）
	define('MYSQLDATA','db_forum');								//mysql数据库
	define('MYSQLHOST','localhost');							//mysql服务器ip
	define('MYSQLUSER','root');									//mysql账号
	define('MYSQLPWD','111');									//mysql密码
?>