<?php
//����������ADODB�������ݿ����
//include "adodb/adodb.inc.php";								//����adodb
//$conn = &ADONewConnection('mysql');							//����mysql����
//$conn->PConnect("localhost","root","111","db_video");		//����"db_music"���ݿ�
//$conn->execute("set names gb2312");


/*class myConnect{                                                    //�������ӵ���
  private $dsn;
  private $user_name;
  private $user_psw;
  public  $pdo;
 public function __construct($user,$pass,$host,$dbname){               //�������ӵĹ��캯��
          $this->dsn="mysql:dbname=".$dbname.";host=".$host."";        //ָ��DSN����Դ�����ݿ�����������
          $this->user_name=$user;
          $this->user_psw=$pass; 
		  $pdo= new PDO($this->dsn,$this->user_name,$this->user_psw);
	      $pdo->query("SET NAMES gb2312"); 
		 }

  }
//����������PDO�������ݿ����  
$result=new myConnect(root,111,localhost,db_video);   */   
$dsn= "mysql:dbname=db_video;host=localhost";
$user_name='root';
$user_psw='111';
$pdo=new PDO($dsn,$user_name,$user_psw);
$pdo->query("SET NAMES gb2312"); 

?>