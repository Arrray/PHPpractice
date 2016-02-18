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
       
       setcookie("videoid","$videoid",time()+60*60);       //设置Cookie保存播放影片id
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
echo "您播放的视频未通过审核，不能播放，对不起！";
}else{
	//更新播放次数
	$update="update tb_video set tb_video_play=tb_video_play+1 where tb_video_id='".$_GET['video_id']."'";
	//$c_rst = $conn->execute($update);
	$c_rst=$result->indeup($update,$conn);
	//查询指定要播放的视频文件
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
//获取更多相关视频
require("splitword.php");			//进行分词处理
require("common/function.php");		//过滤标点
if(isset($_GET["video_name"])){
$keyword=urldecode($_GET['video_name']);			//获取内容
}
$yuan=trim($keyword);
$tt= $yuan;
$str=gl($tt);
$sp = new SplitWord();
$sp->SplitRMM($str);
$tt=$sp->SplitRMM($str);
//$sp->Clear();
$str=array(" ","");				//定义一个数组
	$cc=str_replace($str,"",$tt);	//去掉字符串中的空格
	if(substr($cc,0,2)=="、"){
		$cc= substr($cc,2);			//去掉前面的“、”符号
	}
	if(substr($cc,-2,2)=="、"){
		$cc= substr($cc,0,-2);		//去掉后面的“、”符号
	}
	
	if(substr($cc,0,2)=="、" && substr($cc,-2,2)=="、"){
		$a= substr($cc,2);			//去掉前面的“、”符号
		$cc= substr($a,0,-2);		//去掉后面的“、”符号
	}
		$newstr = explode("、",$cc);			//应用explode()函数将字符串转换成数组
		
		if(count($newstr)==1){					//如果数组的元素个数为1个，则按单个条件进行查询
	$ls_sqlstr="select * from tb_video where tb_video_name like '%".$newstr[0]."%' limit 5";
	$arrayll=$result->getRows($ls_sqlstr,$conn);
	$smarty->assign("videos",$arrayll);
		}else{

		for($j=0;$j<count($newstr);$j++){
			$sql1.=" tb_video_name like '%".trim($newstr[$j])."%'"." or";	
		}
		$sql1=substr($sql1,0,-3);				//去掉最后一个“or”		
		$ls_sqlstr="select * from tb_video where".$sql1." limit 5";

	$arrayll=$result->getRows($ls_sqlstr,$conn);
	$smarty->assign("videos",$arrayll);
}
	$smarty->assign("tb_video_date",date("Y-m-d H:i:s"));	//获取当前时间
    //判断当前回复者为未登录游客
	$ip=$_SERVER['REMOTE_ADDR'];             //获取游客IP地址
	$newarray=explode(".",$ip,4);            //将IP以"."作为分隔符分隔
	$newarray[3]="*";                        //最后一位IP地址用"*"代替
	$newip=$newarray[0].".".$newarray[1].".".$newarray[2].".".$newarray[3];
	$noname=$newip." 游客";
	if(isset($_SESSION['name']) and $_SESSION['name']==""){					//判断是否是会员登录
		$smarty->assign("name","F");
		$smarty->assign("name1",$noname);
	}else{
		$smarty->assign("name2",$_SESSION['name']);
	}
	//获取有关该视频的评论信息
	$p_sqlstr="select * from tb_video_discuss where tb_video_id=".$_GET['video_id']."";
	$arrays=$result->getRows($p_sqlstr,$conn);
	$total1=count($arrays);			//统计评论的次数
	//实现评论的分页输出
	if(empty($_GET["pages"])==true || is_numeric($_GET["pages"])==false){
		$page1=1;
	}else{
		$page1=intval($_GET["pages"]);
	}
	if($total1==0){		//判断数据是否为空
		$smarty->assign("discuss_false","F");
	}else{ 
		$pagesize1=5;	//每页显示5条数据
	if($total1<$pagesize1){
		$pagecount1=1;
	}else{
		if($total1%$pagesize1==0){
			$pagecount1=intval($total1/$pagesize1);
		}else{
			$pagecount1=intval($total1/$pagesize1)+1;
		} 
	}
	$smarty->assign("total1",$total1);			//通过assign方法将数组$array中的数据写入到total1中      
	$smarty->assign("pagesize1",$pagesize1);	//通过assign方法将数组$array中的数据写入到pagesize1中      
	$smarty->assign("page1",$page1);			//通过assign方法将数组$array中的数据写入到page1中      
	$smarty->assign("pagecount1",$pagecount1);	//通过assign方法将数组$array中的数据写入到pagecount1中      
	}
	//读取评论数据表中的数据
	$d_sqlstr="select * from tb_video_discuss where tb_video_id=".$_GET['video_id']." order by tb_discuss_id desc";
	$d_rst = $result->SelectLimit($d_sqlstr,$pagesize1,($page1-1)*$pagesize1,$conn);
	$arrayes=$result->getRows($d_rst,$conn);
	$smarty->assign("discuss",$arrayes);
	$smarty->display("look.tpl");	
}
?>