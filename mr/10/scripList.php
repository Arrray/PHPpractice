<?php require("global.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>如我所愿许愿墙_爱墙列表</title>
<link href="CSS/index.css" rel="stylesheet"/>
</head>
<?php
$sql="select * from tb_washingwall";

if($_GET){
	//得到要提取的页码
	$page_num = $_GET['page_num']? $_GET['page_num']: 1;
}
else{
	//首次进入时,页码为1
	$page_num = 1;
}
	//得到总记录数
	$DB->query($sql);
	$row_count_sum = $DB->get_rows();
	//每页记录数,可以使用默认值或者直接指定值
	$row_per_page = 10;
	//总页数
	$page_count = ceil($row_count_sum/$row_per_page);
	//判断是否为第一页或者最后一页
	$is_first = (1 == $page_num) ? 1 : 0;
	$is_last = ($page_num == $page_count) ? 1 : 0;
	//查询起始行位置
	$start_row = ($page_num-1) * $row_per_page;
	//为SQL语句添加limit子句
	$sql .= " limit $start_row,$row_per_page";
	//执行查询
	$DB->query($sql);
	$res = $DB->get_rows_array();
	//结果集行数
	$rows_count=count($res);
?>

?>
<body>
<div id="header"></div>
<div id="navigation"><a href="scrip.do?action=scripQuery">返回首页</a></div>
<!--开始显示爱墙信息-->
<div id="main" style="padding-top:5px;">
	<table width="98%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#000000">
      <tr>
        <td height="27" align="center" bgcolor="#7CC842">字条编号</td>
        <td align="center" bgcolor="#7CC842">祝福对象</td>
        <td align="center" bgcolor="#7CC842">祝福者</td>
        <td align="center" bgcolor="#7CC842">字条内容</td>
        <td align="center" bgcolor="#7CC842">发送时间</td>
        <td align="center" bgcolor="#7CC842">人气</td>
      </tr>
	<logic:iterate id="scrip" name="scripList1" type="com.model.ScripForm" scope="request" indexId="ind">
      <tr>
        <td height="27" bgcolor="#FFFFCC">&nbsp;
        <?php echo $info->id;?></td>
        <td bgcolor="#FFFFCC">&nbsp;
        <?php echo $info->wishMan;?>
		</td>
        <td bgcolor="#FFFFCC">&nbsp;
        <?php echo $info->wellWisher;?>
		</td>
        <td bgcolor="#FFFFCC">&nbsp;
        <?php echo $info->content;?>
		</td>
        <td bgcolor="#FFFFCC">&nbsp;
        <?php echo $info->sendTime;?>
		</td>
        <td bgcolor="#FFFFCC">&nbsp;
        <?php echo $info->hits;?>
		</td>
      </tr>
	</logic:iterate>
  </table>
  <%=pagination.printCtrl(Integer.parseInt(request.getAttribute("Page").toString()))%>
</div>
<!--显示字条信息结束-->
<?php require_once("copyright.php");?>
</body>
</html>