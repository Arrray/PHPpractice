<?php
header("Content-Type:text/html;charset=gb2312");
require_once("system/system.inc.php");  //����ָ�����ļ�
$arraybbstell=$admindb->ExecSQL("select * from tb_mr_book",$conn); 		//ִ��select��ѯ���
if(!$arraybbstell){		
	$smarty->assign("isbbstell","F");		//�ж����ִ��ʧ�������ģ�����isbbstell��ֵΪF 
}else{
	$smarty->assign("isbbstell","T");	//�ж����ִ�гɹ��������ģ�����isbbstell��ֵΪT��
    $smarty->assign("arraybbstell",$arraybbstell);	//����ģ�����arraybbstell��������ݿ�������
}
if(isset($_GET["page"])){
	$page=$_GET["page"];
}else{
	$page=1;
}      
$arraybbs=$seppage->ShowData("select * from tb_mr_book",$conn,1,$page);		//���÷�ҳ�࣬ʵ�ַ�ҳ����  
if(!$arraybbs){
    $smarty->assign("isbbs","F");
}else{
    $smarty->assign("isbbs","T");
	$smarty->assign("showpage",$seppage->ShowPage("","","","","")); //���������ҳ���ݵ�ģ�����showpage
    $smarty->assign("arraybbs",$arraybbs);
}
$smarty->display("index.tpl");		//ָ�����ӵ�ģ��ҳ
?>
