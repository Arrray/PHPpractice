<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>������Ը��Ըǽ</title>
<link href="CSS/index.css" rel="stylesheet"/>
<style type="text/css">
<!--
.STYLE4 {color: #43873E}
-->
</style>
</head>
<?php 
require("global.php");
$nsql="select *  from tb_wishes";
$DB->query($nsql); 
$nres=$DB->get_rows_array($nsql);			//���ɶ�ά����
$nrows_count=count($nres);
?>
<script language="javascript">
var iLayerMaxNum=<?php echo $nrows_count+100 ;?>;
</script>
<script language="javascript" src="JS/AjaxRequest.js"></script>
<script language="javascript" src="JS/index.js"></script>
<script language="javascript" src="JS/common.js"></script>
<body>
<!--����һ�����ص�DIV-->
<div style="display:none;" id="shadeDiv" onclick="Hide();"></div>
<?php require("top.php");?>
<?php
$sql = "select * from tb_wishes order by id desc ";
if($_GET){
	//�õ�Ҫ��ȡ��ҳ��
	$page_num = $_GET['page_num']? $_GET['page_num']: 1;
}
else{
	//�״ν���ʱ,ҳ��Ϊ1
	$page_num = 1;
}
	//�õ��ܼ�¼��
	$DB->query($sql);
	$row_count_sum = $DB->get_rows();
	//ÿҳ��¼��,����ʹ��Ĭ��ֵ����ֱ��ָ��ֵ
	$row_per_page =15 ;
	//��ҳ��
	$page_count = ceil($row_count_sum/$row_per_page);
	//��ѯ��ʼ��λ��
	$start_row = ($page_num-1) * $row_per_page;
	//ΪSQL������limit�Ӿ�
	$sql .= " limit $start_row,$row_per_page";
	//ִ�в�ѯ
	$DB->query($sql);
	$res = $DB->get_rows_array();
	//���������
	$rows_count=count($res);
	?>
<table width="1003"  border="0" cellpadding="0" cellspacing="0" class="bubg">
  <tr>
    <td width="10" height="26" align="center" valign="top">&nbsp;</td>
    <td width="993" align="center" valign="middle"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="51%" height="27" align="center" valign="top" ><table width="100%"  border="0" cellspacing="0" cellpadding="0"style="margin-top:3px">
          <tr>
            <td width="72%" align="center" valign="middle"> 
                <?php
			if ($ljjl=="") {$ljjl=0;};
				$next=$ljjl*10;				//ÿ10�׽���һ�η�ҳ
				$n=$ljjl-1;					//��10��
				$m=$ljjl+1;					//��10��
                $prev_page=$page_num-10;	//ǰ��10��ʱ���Զ���10
					if ($ljjl==0){				
                   		 echo "<a href='index.php?vv=0&ljjl=0&page_num=1'><img src='images/first.gif' width='67' height='15' border=0></a>";			
					}else{
                    	 echo "<a href='index.php?vv=0&ljjl=0&page_num=1'><img src='images/first.gif' width='67' height='15' border=0></a>";
						 $ccc=$vv-10;
                    	 echo "<a href='index.php?vv=$ccc&ljjl=$n&page_num=$prev_page'><img src='images/up.gif' width='67' height='15' border=0 ></a>";
					}
				?>
                <?php	
 		        for ($j=1;$j<=$page_count;$j++) {
				       $pnext=$next+$j;
				       if ($mm==10){
					       break;
					   }
						if ($mm>$page_count){
							break;
						}
						if ($page_count-$vv<10){
	  						if ($mm>=$page_count-$vv){
								break;
							}									
						}
						$mi="m";
                        echo "<a href='index.php?vv=$vv&ljjl=$ljjl&page_num=$pnext'><font color='666666'><strong> $pnext$mi </strong></font></a>";											
              	        $mm=$mm+1;						
	     	     }
				 ?>	
				<?php
				$vv=$vv+$mm;
				if($page_count-$vv>10){
				 	echo "<a href='index.php?vv=$vv&ljjl=$m&page_num=$pnext'><img  src='images/down.gif' width='67' height='15' border=0></a>";		
				}elseif (($page_count-$vv<=10) &&($page_count-$vv>0)){
					$sf=ceil($row_count_sum/($row_per_page*10))-1;
	                echo "<a  href='index.php?vv=$vv&ljjl=$sf&page_num=$page_count'><img src='images/last.gif' width='67' height='15' border=0 ></a>";
				}else{
	               	echo "";
				}
				?>			    </td>
          </tr>
        </table></td>
       <td width="49%" align="left" valign="top">
			<table border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td width="188" height="25" nowrap style="color:#FF3992;line-height:20px"><span class="STYLE4">����</span> <span class="STYLE2" style="font-weight:bold;"><?php echo $row_count_sum; ?></span> <span class="STYLE4">��Ը�� ��</span>&nbsp;<strong><?php echo $page_count;?></strong>&nbsp;<span class="STYLE4">��</span> </td>
					<td width="218" align="right">
					  <table width="100%"  border="0" cellspacing="0" cellpadding="0">
					   <form name="form1" method="post" action="index.php?tid=" >
						<tr align="left">
						  <td height="25"  align="center" valign="top" style="padding-right:5px;"><img src="images/text_search.gif" width="63" height="15" style="margin-top:3px" /></td>
						  <td width="39%" valign="top"><input name="keyword" id="keyword" type="text" size="12" height="20" class="input1" value=" �����밮ǽ�� "  onfocus="javascript:this.form.keyword.value=''">&nbsp;</td>
						  <td width="34%" valign="top"><input type="image" src="images/btn_search.gif" width="61" height="17" border="0" style="margin-top:4px">
						  </td>
						</tr></form>
					  </table>
				  </td>
				</tr>
			</table>
		</td>
      </tr>
    </table></td>
  </tr>
</table>
<!--��ʼ��ʾ������Ϣ-->
<div id="main">
<?php
	for($i=0;$i<$rows_count;$i++){
		$id=$res[$i]['id'];					//��Ը���
		$Picker = $res[$i]['Picker'];		//ף������
		$author=$res[$i]['author']; 		//��Ը������
		$QQ= $res[$i]['QQ'];				//��Ը��QQ
		$content=$res[$i]['content'];		//��Ը����
		$pagecolor = $res[$i]['pagecolor'];	//��Ը��ѡ���ǽֽ
		$face = $res[$i]['face'];			//��Ը��ѡ���ͷ��
		$sendtime = $res[$i]['sendTime'];	//����ʱ��
		$hits=$res[$i]['hits'];				//��Ը����ֵ
		$T=rand(320,520);
		$L=rand(5,790);	
		$Z=$page_count;
		$Z = $Z - 3;	
		if($QQ==0){
			$QQ="��";
		}
echo "<DIV class='".$pagecolor."'style='left:".$L."px;top:".$T."px;z-index:".$Z."' id='".$id."' onmousedown='Move(this,event)' ondblclick=Show(".$id.",'shadeDiv')><TABLE cellSpacing=0 cellPadding=0 border=0><TBODY><TR><TD>
 <DIV class=shead>&nbsp;&nbsp;<span class='Num' >��ǽ���:".$id."&nbsp;&nbsp;&nbsp;".$sendtime."&nbsp;<a onclick='myClose(".$id.")'>��</span></DIV></TD></TR><TR><TD>
 <DIV class=sbody><img src='".$face."' id='IconImg' style='float:left'>&nbsp;<span id='PickerSample'>".$Picker."</span><br>&nbsp;&nbsp;&nbsp;&nbsp;<span id='ContentSample'>$content</span></DIV>
 <DIV class=sbody ><H2><span id='authorSample'>".$author."</span></H2></DIV>
<DIV class=sbot align='right'><br><a href='#' onclick='holdout(".$id.",".$hits.")''>[ף����]</a>&nbsp;����:<span id='fq_id".$id."'>".$hits."</span> <span id='QQSample'>QQ��<a href='http://wpa.qq.com/msgrd?uin=".$QQ."&Site=1&Menu=yes' title='��������/����̸' target='_blank'>".$QQ."</a></span></DIV></TD></TR></TBODY></TABLE></DIV>";
}

/**************��ѯ��Ը************/
if($_POST[keyword]!=""){
$newid=$_POST[keyword];
$newsql="select * from tb_wishes where id='".$newid."'";
$DB->query($newsql);
$newinfo=$DB->fetch_one_array($newsql);
$newPicker = $newinfo['Picker'];		//ף������
$newauthor=$newinfo['author']; 			//��Ը������
$newQQ= $newinfo['QQ'];					//��Ը��QQ
$newcontent=$newinfo['content'];	//��Ը����
$newpagecolor = $newinfo['pagecolor'];	//��Ը��ѡ���ǽֽ
$newface = $newinfo['face'];			//��Ը��ѡ���ͷ��
$newsendtime = $newinfo['sendTime'];	//����ʱ��
$newhits=$newinfo['hits'];				//��Ը����ֵ
if($newinfo){
	$flag=0;
	for($i=0;$i<$rows_count;$i++){
		if($_POST[keyword]==$res[$i]['id'])
			$flag=1;
	}
if($flag==1){
	echo "<script>searchScrip($newid,'shadeDiv');</script>";
}else{
	echo "<DIV class='".$newpagecolor."'style='left:".$L."px;top:".$T."px;z-index:".$Z."' id='".$newid."' onmousedown='Move(this,event)' ondblclick=Show(".$newid.",'shadeDiv')><TABLE cellSpacing=0 cellPadding=0 border=0><TBODY><TR><TD>
		 <DIV class=shead>&nbsp;&nbsp;<span class='Num' >��ǽ���:".$newid."&nbsp;&nbsp;&nbsp;".$newsendtime."&nbsp;<a onclick='myClose(".$newid.")'>��</span></DIV></TD></TR><TR><TD>
		 <DIV class=sbody><img src='".$newface."' id='IconImg' style='float:left'>&nbsp;<span id='PickerSample'>".$newPicker."</span><br>&nbsp;&nbsp;&nbsp;&nbsp;<span id='ContentSample'>".$newcontent."</span></DIV>
		 <DIV class=sbody ><H2><span id='authorSample'>".$newauthor."</span></H2></DIV>
		<DIV class=sbot align='right'><br><a href='#' onclick='holdout(".$newid.",".$newhits.")''>[ף����]</a>&nbsp;����:<span id='fq_id".$newid."'>".$newhits."</span> <span id='QQSample'>QQ��<a href='http://wpa.qq.com/msgrd?uin=".$newQQ."&Site=1&Menu=yes' title='��������/����̸' target='_blank'>".$newQQ."</a></span></DIV></TD></TR></TBODY></TABLE></DIV>";
		echo "<script>searchScrip($newid,'shadeDiv')</script>";	
	}
}else{
	echo"<script>alert('û�м�����������Ըֽ����');</script>";
	}
}
/******************�����Ը��ǰ��Ը����**********************/
if(isset($_GET[big_id])){
?>
<script language="javascript">searchScrip(<?php echo $big_id; ?>,'shadeDiv');</script>
<?php
}
/*************************************************************/
?>
<?php
/******************����������Ը��ǰ��Ը����**********************/
/*Ϊ�����Ե�����10����Ը�����ѯ����Ըֽ���ظ�����ˣ���Ҫ���ύ��ʱ����tid����ֵ��Ϊ��*/
if($_GET[tid]){
	$tid=$_GET[tid];
?>
<script language="javascript">searchScrip(<?php echo $tid; ?>,'shadeDiv');</script>
<?php
}
/*************************************************************/
?>

</div>
<?php require("copyright.php");?>
</body>
</html>
<!-- style='LEFT: 630px; TOP: 250px'-->