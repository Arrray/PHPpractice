<?php
require("global.php");
$big_id=$_GET["id"];
$sql="Select * from tb_wishes where id=$big_id";
$new_info=$DB->fetch_one_array($sql);
header('Content-type: text/xml;charset=GB2312');		//ָ���������ݵı����ʽΪGB2312
$b_Picker = $new_info['Picker'];		//ף������
$b_author=$new_info['author']; 		//��Ը������
$b_QQ= $new_info['QQ'];				//��Ը��QQ
$b_content=$new_info['content'];		//��Ը����
$b_pagecolor = $new_info['pagecolor'];	//��Ը��ѡ���ǽֽ
$b_face = $new_info['face'];			//��Ը��ѡ���ͷ��
$b_sendtime = $new_info['sendTime'];	//����ʱ��
$b_hits=$new_info['hits'];				//��Ը����ֵ
		$Rnd=rand(1,5);
		$Rnd=$Rnd/6;
		$T = 310*$Rnd+235;
		$L = 720*$Rnd+10;
		$Z = $Rnd+3;
		if($QQ==0){
			$QQ="��";
		}
	echo "<DIV class='".$b_pagecolor."'style='left:".$L."px;top:".$T."px;z-index:".$Z."' id='".$big_id."' onmousedown='Move(this,event)' ondblclick=Show(".$big_id.",'shadeDiv')><TABLE cellSpacing=0 cellPadding=0 border=0><TBODY><TR><TD>
 <DIV class=shead>&nbsp;&nbsp;<span class='Num' >��ǽ���:".$big_id."&nbsp;&nbsp;&nbsp;".$b_sendtime."&nbsp;<a onclick='myClose(".$big_id.")'>��</span></DIV></TD></TR><TR><TD>
 <DIV class=sbody><img src='".$b_face."' id='IconImg' style='float:left'>&nbsp;<span id='PickerSample'>".$Picker."</span><br>&nbsp;&nbsp;&nbsp;&nbsp;<span id='ContentSample'>".$b_content."</span></DIV>
 <DIV class=sbody ><H2><span id='authorSample'>".$b_author."</span></H2></DIV>
<DIV class=sbot align='right'><br><a href='#'>[ף����]</a>&nbsp;����:".$b_hits."<span id='QQSample'>QQ��<a href='http://wpa.qq.com/msgrd?uin=".$b_QQ."&Site=1&Menu=yes' title='��������/����̸' target='_blank'>".$b_QQ."</a></span></DIV></TD></TR></TBODY></TABLE></DIV>";


?>