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
define('PATH',$_SERVER['DOCUMENT_ROOT']);						//������Ŀ¼
	define('ROOT',$new_path);						    //��̳��Ŀ¼
	define('ADMIN','rebadmin/');								//��̨Ŀ¼
	define('BAK','badmin/sqlbak/');							    //����Ŀ¼
	define('MYSQLPATH','c:\\AppServ\\MySQL\\bin\\');            //mysqlִ���ļ�·��(�����MySQLʵ��λ������·����
	define('MYSQLDATA','db_forum');								//mysql���ݿ�
	define('MYSQLHOST','localhost');							//mysql������ip
	define('MYSQLUSER','root');									//mysql�˺�
	define('MYSQLPWD','111');									//mysql����
?>