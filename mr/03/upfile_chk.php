<?php
	include_once 'conn/conn.php';
	$filename = $_FILES['upname']['name'];			
	$filetype = $_POST['foundtype'];				
	$tmpname = $_FILES['upname']['tmp_name'];		
	$tmpsize = $_FILES['upname']['size'];			
	$tmppub = $_POST['ispub'];
    $dirname=$_SESSION['name'];					
	$file_path = "upfile/$dirname/";
	$max = 0;
	
	
	for($j=0;$j<count($_FILES['upname']['name']);$j++)       //判断上传的文件是否与原来上传文件重名情况 返回布耳值
	{
	 $filearr=$_FILES['upname']['name'][$j];
	 $filenamei=$file_path.$filearr;
	 //echo "文件路径及文件名称：";
	 //echo $filenamei;                                //显示文件路径及名称
	 if(file_exists($filenamei))
	 $construct=0;
	 else 
	 $construct=1;
	}
	       
if($construct!=1)
    {
	echo '<script>alert("文件名称冲突！请重新命名后上传！");location="'.$_SERVER['HTTP_REFERER'].'";</script>';
    }
else
   {
		
	$rightsql = "select * from tb_member where name = '".$_SESSION['name']."'";
	$rightarr = $conne->getRowsRst($rightsql);
	$conne->close_rst();
	
	switch($rightarr['right'])                      //判断用户权限
	{
		case '0':
			$conmax=2000000;      //正式开放时请扩大U盘存储量 0 为普通用户 1 为会员 2为高级用户
			break;
		case '1':
		    $conmax=3000000;
			break;
		case'2':
		    $conmax=5000000;
	}
	
	echo "用户文件最大使用权限：".$conmax/1000000;
	echo "MB";
	echo "<p>";
	
	
	if(!is_null($tmpsize)){
		foreach($tmpsize as $value){
			$max += $value;
		}
		if($max > 100000000 or $max <= 0){
			echo '<script>alert("上传文件总大小大于100M，请重新选择1");location="'.$_SERVER['HTTP_REFERER'].'";</script>';
		}
	}else{
		/*var_dump($tmpsize);
		exit();*/
		echo '<script>alert("上传文件错误，请重新检查程序");location="'.$_SERVER['HTTP_REFERER'].'";</script>';
	}
	echo "剩余容量：";                                 //查看U盘剩余容量
	echo $conmax-$rightarr['content'];              
	//echo "<p>";
	$lesarr=$conmax-$rightarr['content'];              //剩余容量赋值给lesarr变量
	//echo $lesarr-$max;  
	                               
	if($conmax-$rightarr['content'] <= 1000000)         //如果权限容量与使用容量的差不足1M 提醒用户空间不足
	{
	echo '<script>alert("您的网络U盘空间不足，请清理后上传文件");location="'.$_SERVER['HTTP_REFERER'].'";</script>';
	}
	else if($lesarr-$max<=1000000)                      //如果当前插入的文件总大小大于剩余U盘容量的话提醒用户空间不足
	        {
			echo '<script>alert("您的网络U盘空间不足，请整理后上传文件");location="'.$_SERVER['HTTP_REFERER'].'";</script>';
			}
		  else{                                        
	$chkdownnum = '';
	for($i = 0; $i < 15; $i++)
	{
		$chkdownnum .= dechex(rand(0,15));
	}
	for ($i = 0; $i < count($filename); $i++)
	{		
		move_uploaded_file($tmpname[$i],$file_path.$filename[$i]);
		
		$insertsql = 'insert into tb_upfile (filename,filepath,filetype,upauthor,chkdownnum,ispub,filesize) values("'.trim($filename[$i]).'","'.$file_path.$filename[$i].'","'.$filetype[$i].'","'.$_SESSION['name'].'","'.trim($chkdownnum).'",'.$tmppub[$i].','.$tmpsize[$i].')';
		$conne->uidRst($insertsql);
	}
	
	$maxtotal=$rightarr['content']+$max;            //从数据库得到的上传总数 加上新上传的总数
	echo "<p>";
	// echo  $maxtotal;
	$csql="update tb_member set content = $maxtotal where name= '".$_SESSION['name']."'";
	$conne->uidRst($csql);
	echo '<div style=" padding-top: 30px;">文件上传成功，可以通过下载码：<font color="#FF0000">'.$chkdownnum.'</font>&nbsp;对文件进行下载。</div>';
	}
	echo "<p>点<a href=\"index.php?act=up\"><span style=\"color:red\">这里</span></a>继续上传其他文件！</p>";
}	
?>
<span style="font-size:14px" 
