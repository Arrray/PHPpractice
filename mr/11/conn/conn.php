<?php
//以下是利用ADODB连接数据库操作
//include "adodb/adodb.inc.php";								//载入adodb
//$conn = &ADONewConnection('mysql');							//建立mysql连接
//$conn->PConnect("localhost","root","111","db_video");		//连接"db_music"数据库
//$conn->execute("set names gb2312");


/*class myConnect{                                                    //创建连接的类
  private $dsn;
  private $user_name;
  private $user_psw;
  public  $pdo;
 public function __construct($user,$pass,$host,$dbname){               //创建连接的构造函数
          $this->dsn="mysql:dbname=".$dbname.";host=".$host."";        //指定DSN数据源、数据库名和主机名
          $this->user_name=$user;
          $this->user_psw=$pass; 
		  $pdo= new PDO($this->dsn,$this->user_name,$this->user_psw);
	      $pdo->query("SET NAMES gb2312"); 
		 }

  }
//以下是利用PDO连接数据库操作  
$result=new myConnect(root,111,localhost,db_video);   */   
$dsn= "mysql:dbname=db_video;host=localhost";
$user_name='root';
$user_psw='111';
$pdo=new PDO($dsn,$user_name,$user_psw);
$pdo->query("SET NAMES gb2312"); 

?>