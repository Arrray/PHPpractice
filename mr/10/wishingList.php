<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>如我所愿许愿墙_爱墙列表</title>
<link href="CSS/index.css" rel="stylesheet"/>
</head>
<body>
<?php require("top.php");?>
<!--开始显示爱墙信息-->
<div id="main" style="padding-top:5px;">
<table width="1004" height="25" border="0" cellpadding="0" cellspacing="0">
     <form name="form" method="get" action=""> 
	  <tr>
        <td align="center" bgcolor="#339933">请输入查询条件：
          <input type="text" name="content1" size="30" class="inputs">&nbsp;
          <select name="select">
            <option value="奥运会">奥运会</option>
            <option value="汶川">汶川</option>
            <option value="爱情">爱情</option>
            <option value="亲情">亲情</option>
            <option value="友情">友情</option>
            <option value="自己">自己</option>
            <option value="全部" selected="selected">全部</option>
          </select>
          <input type="submit" name="submit" value="检索许愿" class="btn_search">
        &nbsp;(支持多条件查询，如：爱墙号、许愿人、许愿内容等)&nbsp;</td>
       </tr>
    </form>
 </table>
<?php
require("global.php");
$content1=$_GET["content1"];
$select=$_GET["select"];
if($content1!=""){
	$sql = "select * from tb_wishes where (id = '".$content1."' or Picker like '%".$content1."%' or author like '%".$content1."%' or QQ = '".$content1."' or cip like '%".$content1."%' or content like '%".$content1."%' or sendTime like '%".$content1."%')";
	if($select!="全部"){
		$sql.=" and (wishsort ='".$select."') order by id desc  ";
	}else{
		$sql.= " order by id desc";	
	}
}elseif($select!="全部" && $select!=""){
	$sql = "select * from tb_wishes where wishsort ='".$select."' order by id desc ";
}else{
	$sql ="select * from tb_wishes order by id desc";
}
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
	$row_per_page =8 ;
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

	<table width="1004" border="0" align="left" cellpadding="0" cellspacing="1" bgcolor="#000000">
      <tr>
        <td width="5%" height="27" align="center" bgcolor="#7CC842">爱墙号</td>
        <td width="35%" align="center" bgcolor="#7CC842">祝福内容</td>
        <td width="6%" align="center" bgcolor="#7CC842">祝福对象</td>
        <td width="6%" align="center" bgcolor="#7CC842">许愿人</td>
        <td width="4%" align="center" bgcolor="#7CC842">福气</td>
		<td width="5%" align="center" bgcolor="#7CC842">来自</td>
		<td width="5%" align="center" bgcolor="#7CC842">类别</td>
		<td width="8%" align="center" bgcolor="#7CC842">许愿人QQ号</td>
        <td width="30%" align="center" bgcolor="#7CC842">发送时间</td>
      </tr>
<?php
			$col1 = "#ffffff";			//设置记录行背景颜色为白色
			$col2 = "#F6FFDA";			//设置记录行背景颜色为灰色
			$col = $col2;
		for($i=0;$i<$rows_count;$i++){
			//记录行背景色交替
			if($col == $col1)
				$col = $col2;
			else
				$col = $col1;
				$id=$res[$i]['id'];					//许愿编号
				$Picker = $res[$i]['Picker'];		//祝福对象
				$author=$res[$i]['author']; 		//许愿人姓名
				$QQ= $res[$i]['QQ'];				//许愿人QQ
				$cip= $res[$i]['cip'];				//许愿人发布区域
				$content=$res[$i]['content'];		//许愿内容
				$pagecolor = $res[$i]['pagecolor'];	//许愿人选择的墙纸
				$face = $res[$i]['face'];			//许愿人选择的头像
				$wishsort = $res[$i]['wishsort'];	//许愿类别
				$sendtime = $res[$i]['sendTime'];	//发布时间
				$hits=$res[$i]['hits'];				//许愿人气值
				if($QQ==0){$QQ="无";}
?>
      <tr bgcolor="<?php echo $col;?>">
        <td height="27" class="ListID"><?php echo $id;?></td>
        <td class="ListContent">&nbsp;<?php echo $content;?></td>
        <td class="ListPicker"><?php echo $Picker;?></td>
        <td class="Listauthor"><?php echo $author;?></td>
        <td class="Listhits"><?php echo $hits;?></td>
        <td class="Listauthor"><?php echo $cip;?></td>
		<td class="Listauthor"><?php echo $wishsort;?></td>
        <td class="ListQQ"><a href='http://wpa.qq.com/msgrd?uin=<?php echo $QQ; ?>&Site=1&Menu=yes' title='单击与他/她交谈' target='_blank'><?php echo $QQ;?></a></td>
        <td class="Listsendtime"><?php echo $sendtime;?></td>
      </tr>
<?php }?>
<?php 
if($row_count_sum==0){
?>
<tr><td colspan="9" align="center" bgcolor="#FFFFCC">暂无相关许愿信息</td></tr>
<?php
}
?>

<tr>                  <td height="22" colspan="9" align="right" bgcolor="#EFEFEF">共[<strong><?php echo $row_count_sum;?></strong>]条&nbsp;每页[<strong><?php echo $row_per_page;?></strong>]条/共[<strong><?php echo $page_count;?></strong>]页&nbsp;当前第[<font color="#FF0000"><strong><?php echo $page_num;?></strong></font>]页
                    <!--  分页显示控制链接 -->
                    <?php
					if(!$is_first){
					?>
                    <a href="./wishingList.php?page_num=1&content1=<?php echo $content1;?>&select=<?php echo $select;?>"> 第一页</a> <a href="./wishingList.php?page_num=<?php echo ($page_num-1); ?>&content1=<?php echo $content1;?>&select=<?php echo $select;?>">上一页</a>
                    <?php
					}
					else{
					?>
					第一页&nbsp;&nbsp;上一页
					<?php
					}
					if(!$is_last){
					?>
                    <a href="./wishingList.php?page_num=<?php echo ($page_num+1); ?>&content1=<?php echo $content1;?>&select=<?php echo $select;?>">下一页</a> <a href="./wishingList.php?page_num=<?php echo $page_count; ?>&content1=<?php echo $content1;?>&select=<?php echo $select;?>">最后一页</a>
                    <?php
					}
					else{
					?>
                    下一页&nbsp;&nbsp;最后一页
                    <?php
					}
					?>&nbsp;&nbsp;</td>
</tr>
  </table>
    <br />
</div>
<!--显示字条信息结束-->
<?php require_once("copyright.php");?>
</body>
</html>