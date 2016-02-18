<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
include_once("system/system.inc.php");
$ddnumber=$_GET['fid'];
$sql = "select * from tb_form where formid='".$_GET['fid']."'";
$formarr = $admindb->ExecSQL($sql,$conn);
$commname = explode(',',$formarr[0]['commo_name']);
$commnumber = explode(',',$formarr[0]['commo_num']);
$commagoprice = explode(',',$formarr[0]['agoprice']);
$commfold = explode(',',$formarr[0]['fold']);
$smarty->assign('formarr',$formarr[0]);
$smarty->assign('commname',$commname);
$smarty->assign('commnumber',$commnumber);
$smarty->assign('commagoprice',$commagoprice);
$smarty->assign('commfold',$commfold);
if($formarr[0]["del_method"]=="平邮"){
	$yprice="200";
}else{
	$yprice="300";
}

/*require_once("alipay_service.php");
require_once("alipay_config.php");
$parameter = array(
"service" => "trade_create_by_buyer", //交易类型，必填实物交易＝trade_create_by_buyer（需要填写物流）
"partner" =>$partner,                                               //合作商户号
"return_url" =>$return_url,  //同步返回
"notify_url" =>$notify_url,  //异步返回
"_input_charset" => $_input_charset,                                //字符集，默认为GBK
"subject" =>$formarr[0]["commo_name"],                                                //商品名称，必填
"body" => $formarr[0]["commo_num"],                                           //商品描述，必填
"out_trade_no" => $ddnumber,                      //商品外部交易号，订单号，必填,每次测试都须修改
"logistics_fee"=>$yprice,                       //物流配送费用
"logistics_payment"=>'BUYER_PAY',               //物流配送费用付款方式：BUYER_PAY(买家支付)
"logistics_type"=>'EXPRESS',                    // 物流配送方式：POST(平邮)、EMS(EMS)、EXPRESS(其他快递)
"price" => $formarr[0]["total"],                                 //商品单价，必填
"payment_type"=>"1",                               // 默认为1,不需要修改
"quantity" => "1",                                 //商品数量，必填
"show_url" => $show_url,            //商品相关网站
"seller_email" => $seller_email                //卖家邮箱，必填
);
$alipay = new alipay_service($parameter,$security_code,$sign_type);
$link=$alipay->create_url();
$smarty->assign("link",$link);

*/

$smarty->assign('title','订单提交成功');
$smarty->display('forminfo.tpl');	
?>