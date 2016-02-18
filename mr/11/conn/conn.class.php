<?php
header("Content-type:text/html;charset=gb2312");
Class connDb{
private $db_type;                                                          //定义私有变量
private $db_host;
private $db_user;
private $db_psw;
private $db_name;
private $newsql;
   public function __construct($dbtype,$dbhost,$dbuser,$dbpsw,$dbname){    //构造函数
   $this->db_type=$dbtype;
   $this->db_host=$dbhost;
   $this->db_user=$dbuser;
   $this->db_psw=$dbpsw;
   $this->db_name=$dbname;
   }
   
   public function connid(){                                               //连接数据库函数
   //echo $this->db_type                                                   //连接数据库
   try{
     $dsn="$this->db_type:host=$this->db_host;dbname=$this->db_name";                                           //
     $pdo= new PDO($dsn,$this->db_user,$this->db_psw);
     $pdo->query("SET NAMES gb2312"); 
     return $pdo;
     }catch(PDOException $e){
	   echo "连接数据库失败：".$e->getMessage();
	   }
   }

   public function getRows($str,$conn){                                     //数据查询函数
   $array=$conn->prepare($str);                                             //遍历返回数组的结果集
   $array->execute();
   $row=$array->fetchAll(PDO::FETCH_ASSOC);
   return $row;
  
   }
   public function login($str,$conn){                                       //数据检测函数
   $array=$conn->query($str);                                               //检测数据库中是否存在相应数据
   $i=0;
   foreach($array as $num){
   $i++;
   }
   if($i==0)
   return false;
   else if($i!=0)
   return true;
   }
   
   public function chkinfo($str,$conn){                                      //信息检测函数
   $myrow=$conn->query($str);                                                //将获得的数据压入新数组返回
   $array=array();
   foreach($myrow as $newmyrow){
      array_push($array,$newmyrow);
     }
	 return $array;
   }
   public function indeup($str,$conn){                                       //数据库插入、删除、更新函数
   $affCount=$conn->exec($str);                                              //执行数据库插入、删除、更新
   if($affCount>0) 
   $succ=true;
   else if($affCount<=0)
   $succ=false;
   return $succ;
   }
   
   public function selectLimit($str,$count,$start,$conn){                    //带有limit限制的MySQL语句组合函数
   $this->newsql=$str." limit ".$start.",".$count;                           //将Mysql的Select命令语句添加Limit限制返回
   return $this->newsql;
   
   }
}


$result=new connDb('mysql','localhost','root','111','db_video');             //实例化一个类，初始化数据库(数据库类型/主机名/用户名/用户密码/数据库名）
$conn=$result->connid();

?>