<?php
session_start();
if(isset($_GET["video_id"])){
	$videoid=$_GET["video_id"];
}else{
	$videoid="";
}
if(isset($_COOKIE["videoid"])){
		$videoid1=$_COOKIE["videoid"];
	   setcookie("videoid","$videoid",time()+60*3);
	   $videoid2=$_COOKIE["videoid1"];
	   setcookie("videoid1","$videoid1",time()+60*3) ;
	   $videoid3=$_COOKIE["videoid2"];
	   setcookie("videoid2","$videoid2",time()+60*3) ;
	   setcookie("videoid3","$videoid3",time()+60*3) ;
}else{
      setcookie("videoid","$videoid",time()+60*60);
}	   
	   
	   /* 
       
       setcookie("videoid","$videoid",time()+60*60);       //����Cookie���沥��ӰƬid
	   $videoid1=$_COOKIE["videoid"];
	   setcookie("videoid1","$videoid",time()+60*60);
      
       setcookie("videoid","$videoid",time()+60*60);
       $videid2=$_COOKIE["videoid1"];
	   setcookie("videoid1","$videoid1",time()+60*60) ;
	   $videoid3=$_COOKIE["videoid2"];
	   setcookie("videoid2","$videoid2",time()+60*60) ;
	   setcookie("videoid3","$videoid3",time()+60*60) ;  
	   */
include_once("conn/conn.class.php");
include_once("config.php");
include_once("top.php");
	$ll_sqlstr="select * from tb_video where tb_video_id=".$_GET['video_id']."";
	$array=$result->getRows($ll_sqlstr,$conn);
if($array[0]['tb_video_auditing']==0){
echo "�����ŵ���Ƶδͨ����ˣ����ܲ��ţ��Բ���";
}else{
	//���²��Ŵ���
	$update="update tb_video set tb_video_play=tb_video_play+1 where tb_video_id='".$_GET['video_id']."'";
	//$c_rst = $conn->execute($update);
	$c_rst=$result->indeup($update,$conn);
	//��ѯָ��Ҫ���ŵ���Ƶ�ļ�
	$l_sqlstr="select * from tb_video where tb_video_id=".$_GET["video_id"]."";
	$array=$result->getRows($l_sqlstr,$conn);
	$smarty->assign("video",$array);
	$video_id1=$_GET["video_id"]-1;
	$l1_sqlstr="select * from tb_video where tb_video_id='$video_id1'";
	$array1=$result->getRows($l1_sqlstr,$conn);
	$smarty->assign("video1",$array1);
	$video_id2=$_GET["video_id"]+1;
	$l2_sqlstr="select * from tb_video where tb_video_id='$video_id2'";
	$array2=$result->getRows($l2_sqlstr,$conn);
	$smarty->assign("video2",$array2);
	$i_sqlstr="select * from tb_video_type ";
	$arraysi=$result->getRows($i_sqlstr,$conn);
	$smarty->assign("video_type",$arraysi);
//��ȡ���������Ƶ
require("splitword.php");			//���зִʴ���
require("common/function.php");		//���˱��
if(isset($_GET["video_name"])){
$keyword=urldecode($_GET['video_name']);			//��ȡ����
}
$yuan=trim($keyword);
$tt= $yuan;
$str=gl($tt);
$sp = new SplitWord();
$sp->SplitRMM($str);
$tt=$sp->SplitRMM($str);
//$sp->Clear();
$str=array(" ","");				//����һ������
	$cc=str_replace($str,"",$tt);	//ȥ���ַ����еĿո�
	if(substr($cc,0,2)=="��"){
		$cc= substr($cc,2);			//ȥ��ǰ��ġ���������
	}
	if(substr($cc,-2,2)=="��"){
		$cc= substr($cc,0,-2);		//ȥ������ġ���������
	}
	
	if(substr($cc,0,2)=="��" && substr($cc,-2,2)=="��"){
		$a= substr($cc,2);			//ȥ��ǰ��ġ���������
		$cc= substr($a,0,-2);		//ȥ������ġ���������
	}
		$newstr = explode("��",$cc);			//Ӧ��explode()�������ַ���ת��������
		
		if(count($newstr)==1){					//��������Ԫ�ظ���Ϊ1�����򰴵����������в�ѯ
	$ls_sqlstr="select * from tb_video where tb_video_name like '%".$newstr[0]."%' limit 5";
	$arrayll=$result->getRows($ls_sqlstr,$conn);
	$smarty->assign("videos",$arrayll);
		}else{

		for($j=0;$j<count($newstr);$j++){
			$sql1.=" tb_video_name like '%".trim($newstr[$j])."%'"." or";	
		}
		$sql1=substr($sql1,0,-3);				//ȥ�����һ����or��		
		$ls_sqlstr="select * from tb_video where".$sql1." limit 5";

	$arrayll=$result->getRows($ls_sqlstr,$conn);
	$smarty->assign("videos",$arrayll);
}
	$smarty->assign("tb_video_date",date("Y-m-d H:i:s"));	//��ȡ��ǰʱ��
    //�жϵ�ǰ�ظ���Ϊδ��¼�ο�
	$ip=$_SERVER['REMOTE_ADDR'];             //��ȡ�ο�IP��ַ
	$newarray=explode(".",$ip,4);            //��IP��"."��Ϊ�ָ����ָ�
	$newarray[3]="*";                        //���һλIP��ַ��"*"����
	$newip=$newarray[0].".".$newarray[1].".".$newarray[2].".".$newarray[3];
	$noname=$newip." �ο�";
	if(isset($_SESSION['name']) and $_SESSION['name']==""){					//�ж��Ƿ��ǻ�Ա��¼
		$smarty->assign("name","F");
		$smarty->assign("name1",$noname);
	}else{
		$smarty->assign("name2",$_SESSION['name']);
	}
	//��ȡ�йظ���Ƶ��������Ϣ
	$p_sqlstr="select * from tb_video_discuss where tb_video_id=".$_GET['video_id']."";
	$arrays=$result->getRows($p_sqlstr,$conn);
	$total1=count($arrays);			//ͳ�����۵Ĵ���
	//ʵ�����۵ķ�ҳ���
	if(empty($_GET["pages"])==true || is_numeric($_GET["pages"])==false){
		$page1=1;
	}else{
		$page1=intval($_GET["pages"]);
	}
	if($total1==0){		//�ж������Ƿ�Ϊ��
		$smarty->assign("discuss_false","F");
	}else{ 
		$pagesize1=5;	//ÿҳ��ʾ5������
	if($total1<$pagesize1){
		$pagecount1=1;
	}else{
		if($total1%$pagesize1==0){
			$pagecount1=intval($total1/$pagesize1);
		}else{
			$pagecount1=intval($total1/$pagesize1)+1;
		} 
	}
	$smarty->assign("total1",$total1);			//ͨ��assign����������$array�е�����д�뵽total1��      
	$smarty->assign("pagesize1",$pagesize1);	//ͨ��assign����������$array�е�����д�뵽pagesize1��      
	$smarty->assign("page1",$page1);			//ͨ��assign����������$array�е�����д�뵽page1��      
	$smarty->assign("pagecount1",$pagecount1);	//ͨ��assign����������$array�е�����д�뵽pagecount1��      
	}
	//��ȡ�������ݱ��е�����
	$d_sqlstr="select * from tb_video_discuss where tb_video_id=".$_GET['video_id']." order by tb_discuss_id desc";
	$d_rst = $result->SelectLimit($d_sqlstr,$pagesize1,($page1-1)*$pagesize1,$conn);
	$arrayes=$result->getRows($d_rst,$conn);
	$smarty->assign("discuss",$arrayes);
	$smarty->display("look.tpl");	
}
?>