<?php	session_start();
include_once("conn/conn.class.php");
include_once("inc/chec.php");

//�ж��ϴ��ļ��ĸ�ʽ�Ƿ���ȷ
function f_postfix($f_type,$f_upfiles){
	$is_pass = false;
	$tmp_upfiles = split("\.",$f_upfiles);
	$tmp_num = count($tmp_upfiles);
	for($num = 0; $num < count($f_type);$num++){
		if(strtolower($tmp_upfiles[$tmp_num - 1]) == $f_type[$num])
			$is_pass = $f_type[$num];
	}
	return $is_pass;
}
//�ж��ϴ��������Ƿ����
$sqlstr="select name,actor from tb_video where name='".$_POST[names]."' and actor='".$_POST[actor]."'";
$rstcount=$result->login($sqlstr,$conn);
if($rstcount==true){
	echo "<script>alert('���ϴ��������Ѿ����ڣ�');history.go(-1);</script>";
}else{
	$p_type = array("jpg","jpeg","bmp","gif");					//�����ϴ�ͼƬ������
	$f_type = array("avi","rm","rmvb","wav","mp3","mpg");		//�����ϴ��ļ�������
	$video_path = "../upfiles//video";								//�����ļ��洢��λ��
	$lyric_path = "../upfiles//lyric";
	$picture_path ="";											//����ͼƬ������
	$file_path = "";
	/*  �ж��ϴ�ͼƬ���ͺ��ļ���С���ϴ�ͼƬ */
	if($_FILES[picture][size] > 0 and $_FILES[picture][size] < 700000){
		if(($postf = f_postfix($p_type,$_FILES[picture][name])) != false){
			$picture_path = time().".".$postf;
		
				if($_FILES[picture][tmp_name])
					move_uploaded_file($_FILES[picture][tmp_name],$video_path."\\".$picture_path);
				else{
					echo "<script>alert('�ϴ�ͼƬʧ�ܣ�');history.go(-1);</script>";
					exit();
				}
		
		}else{
			echo "<script>alert('�ϴ�ͼƬ��ʽ����');history.go(-1);</script>";
			exit();
		}
	}else if($_FILES[picture][size] > 700000){
			echo "<script>alert('�ϴ�ͼƬ��С������Χ��');history.go(-1);</script>";
			exit();
	}else{
		$picture = "";
	}

	/******************************/
	/*  �ж��ϴ��ļ��������С���ϴ��ļ�  */
	if($_FILES[address][size] > 0){
		
			if($_FILES[address][size] < 10000000){
				if(($postf = f_postfix($f_type,$_FILES[address][name])) != false){
					$file_path = time().".".$postf;
					if($_FILES[address][tmp_name])
						move_uploaded_file($_FILES[address][tmp_name],$video_path."\\".$file_path);
					else{
						echo "<script>alert('�ϴ��ļ�����');history.go(-1);</script>";
						exit();
					}
				}else{
					echo "<script>alert('�ϴ��ļ���ʽ����');history.back(-1);</script>";
					exit();
				}
			}else{
				echo "<script>alert('�ϴ��ļ���С����');history.go(-1);</script>";
				exit();
			}
		
	}else{
		echo "<script>alert('û���ϴ��ļ����ļ�����300M');history.go(-1);</script>";
		exit();
	}
	/*  ��ͬ����Ϣ  */
	$names = $_POST[names];					//��Ƶ����
	$grade = $_POST[grade];					//����
	$sizes = $_FILES[address][size];
	$publisher = $_POST[publisher];			
	$actor = $_POST[actor];
	$language = $_POST[language];
	$style = $_POST[style];
	$type_1 = $_POST[type_1];
	$froms = $_POST[from];
	$publishtime = $_POST[publishtime];
	$news = $_POST[news];
	$remark = $_POST[remark];
	
//�ж��Ƿ��ϴ��˸���ļ�
if($_FILES[lyric][size] > 0){
		if($_FILES[lyric][size] < 10000000){
			$name=$_FILES['lyric']['name']; 		//��ȡ�ͻ��˻���ԭ�ļ�������
			$type=strstr($name,"."); 				//��ȡ��"."�������ַ�
			if($type==".lrc"){
				$file_paths = time().$type;		//��ȡ�ϴ��ļ�������
				$file_pathes = time();				//��ȡ�ϴ��ļ����ƣ�����׺֮��
				if($_FILES[lyric][tmp_name])
					move_uploaded_file($_FILES[lyric][tmp_name],$lyric_path."\\".$file_paths);
					else{
						echo "<script>alert('�ϴ��ļ�����');history.go(-1);</script>";
						exit();
					}
				}else{
					echo "<script>alert('�ϴ��ļ���ʽ����');history.back(-1);</script>";
					exit();
				}
			}else{
				echo "<script>alert('�ϴ��ļ���С����');history.go(-1);</script>";
				exit();
			}

		//����·��
		$actortype = $_POST[actortype];
		$ci = $_POST[ci];
		$qu = $_POST[qu];
		$a_sqlstr = "insert into tb_video (name,picture,actor,ci,qu,actortype,type,style,publisher,froms,sizes,languages,publishTime,remark,property,address,userName,issueDate,lyric) values('$names','$picture_path','$actor','$ci','$qu','$actortype','$type_1','$style','$publisher','$froms','$sizes','$language','$publishtime','$remark','�û�','$file_path','$_SESSION[name]','".date("Y-m-d H:i:s")."','$file_pathes')";
	/*  �ϴ�ͼƬ���ļ� */
		
	/***************************/

	$a_rst = $result->indeup($a_sqlstr,$conn);
	if(!($a_rst == false)){
	echo "<script>top.opener.location.reload();alert('��ӳɹ�');window.close();</script>";
//echo "<meta http-equiv=\"Refresh\" content=\"3;url=main.php?action=video\">��ӳɹ���3����ת����ҳ,���Ե�......";	
		exit();
		
	}else{
		echo "<script>alert('���ʧ��');history.go(-1);</script>";
		exit();
	}

}else{
	/*****************/

		//����·��
		$actortype = $_POST[actortype];
		$ci = $_POST[ci];
		$qu = $_POST[qu];
		$a_sqlstr = "insert into tb_video (name,picture,actor,ci,qu,actortype,type,style,publisher,froms,sizes,languages,publishTime,remark,property,address,userName,issueDate) values('$names','$picture_path','$actor','$ci','$qu','$actortype','$type_1','$style','$publisher','$froms','$sizes','$language','$publishtime','$remark','�û�','$file_path','$_SESSION[name]','".date("Y-m-d H:i:s")."')";
	
	/*  �ϴ�ͼƬ���ļ� */
		
	/***************************/

	$a_rst = $result->indeup($a_sqlstr,$conn);
	if(!($a_rst == false)){
	echo "<script>top.opener.location.reload();alert('��ӳɹ�');window.close();</script>";
//echo "<meta http-equiv=\"Refresh\" content=\"3;url=main.php?action=video\">��ӳɹ���3����ת����ҳ,���Ե�......";
	
		exit();
	
	}else{
		echo "<script>alert('���ʧ��');history.go(-1);</script>";
		exit();
	}
}
}
?>