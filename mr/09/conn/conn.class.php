<?php
Class connDb{
private $db_type;
private $db_host;
private $db_user;
private $db_psw;
private $db_name;
private $newsql;
   public function __construct($dbtype,$dbhost,$dbuser,$dbpsw,$dbname){    //���캯��
   $this->db_type=$dbtype;
   $this->db_host=$dbhost;
   $this->db_user=$dbuser;
   $this->db_psw=$dbpsw;
   $this->db_name=$dbname;
   }
   
   public function connid(){                                               //�������ݿ⺯��
   //echo $this->db_type
   try{
     $dsn="$this->db_type:host=$this->db_host;dbname=$this->db_name";                                           //
     $pdo= new PDO($dsn,$this->db_user,$this->db_psw);
     $pdo->query("SET NAMES gb2312"); 
     return $pdo;
     }catch(PDOException $e){
	   echo "�������ݿ�ʧ�ܣ�".$e->getMessage();
	   }
   }

   public function getRows($str,$conn){                                    //������������Ľ����
   $array=$conn->prepare($str);
   $array->execute();
   $row=$array->fetchAll(PDO::FETCH_ASSOC);
   return $row;
  
   }
   
   public function singleRow($str,$conn){                                  //���ص�����¼����
   $array=$conn->prepare($str);
   $array->execute();
   $row=$array->fetch(PDO::FETCH_ASSOC);
   return $row;
   }
   
   public function login($str,$conn){
   $array=$conn->query($str);
   $i=0;
   foreach($array as $num){
   $i++;
   }
   if($i==0)
   return false;
   else if($i!=0)
   return true;
   }
   
   public function chkinfo($str,$conn){
   $myrow=$conn->query($str);
   $array=array();
   foreach($myrow as $newmyrow){
      array_push($array,$newmyrow);
     }
	 return $array;
   }
   public function indeup($str,$conn){
   $affCount=$conn->exec($str);
   echo $affcount;
   if($affCount>0)
   $succ=true;
   else if($affCount<=0)
   $succ=false;
   return $succ;
   }
   
   public function selectLimit($str,$count,$start,$conn){
   $this->newsql=$str." limit ".$start.",".$count;
   return $this->newsql;
    }
  
}



$result=new connDb(mysql,localhost,root,111,db_music);
$conn=$result->connid();

?>