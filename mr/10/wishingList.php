<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>������Ը��Ըǽ_��ǽ�б�</title>
<link href="CSS/index.css" rel="stylesheet"/>
</head>
<body>
<?php require("top.php");?>
<!--��ʼ��ʾ��ǽ��Ϣ-->
<div id="main" style="padding-top:5px;">
<table width="1004" height="25" border="0" cellpadding="0" cellspacing="0">
     <form name="form" method="get" action=""> 
	  <tr>
        <td align="center" bgcolor="#339933">�������ѯ������
          <input type="text" name="content1" size="30" class="inputs">&nbsp;
          <select name="select">
            <option value="���˻�">���˻�</option>
            <option value="�봨">�봨</option>
            <option value="����">����</option>
            <option value="����">����</option>
            <option value="����">����</option>
            <option value="�Լ�">�Լ�</option>
            <option value="ȫ��" selected="selected">ȫ��</option>
          </select>
          <input type="submit" name="submit" value="������Ը" class="btn_search">
        &nbsp;(֧�ֶ�������ѯ���磺��ǽ�š���Ը�ˡ���Ը���ݵ�)&nbsp;</td>
       </tr>
    </form>
 </table>
<?php
require("global.php");
$content1=$_GET["content1"];
$select=$_GET["select"];
if($content1!=""){
	$sql = "select * from tb_wishes where (id = '".$content1."' or Picker like '%".$content1."%' or author like '%".$content1."%' or QQ = '".$content1."' or cip like '%".$content1."%' or content like '%".$content1."%' or sendTime like '%".$content1."%')";
	if($select!="ȫ��"){
		$sql.=" and (wishsort ='".$select."') order by id desc  ";
	}else{
		$sql.= " order by id desc";	
	}
}elseif($select!="ȫ��" && $select!=""){
	$sql = "select * from tb_wishes where wishsort ='".$select."' order by id desc ";
}else{
	$sql ="select * from tb_wishes order by id desc";
}
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
	$row_per_page =8 ;
	//��ҳ��
	$page_count = ceil($row_count_sum/$row_per_page);
	//�ж��Ƿ�Ϊ��һҳ�������һҳ
	$is_first = (1 == $page_num) ? 1 : 0;
	$is_last = ($page_num == $page_count) ? 1 : 0;
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

	<table width="1004" border="0" align="left" cellpadding="0" cellspacing="1" bgcolor="#000000">
      <tr>
        <td width="5%" height="27" align="center" bgcolor="#7CC842">��ǽ��</td>
        <td width="35%" align="center" bgcolor="#7CC842">ף������</td>
        <td width="6%" align="center" bgcolor="#7CC842">ף������</td>
        <td width="6%" align="center" bgcolor="#7CC842">��Ը��</td>
        <td width="4%" align="center" bgcolor="#7CC842">����</td>
		<td width="5%" align="center" bgcolor="#7CC842">����</td>
		<td width="5%" align="center" bgcolor="#7CC842">���</td>
		<td width="8%" align="center" bgcolor="#7CC842">��Ը��QQ��</td>
        <td width="30%" align="center" bgcolor="#7CC842">����ʱ��</td>
      </tr>
<?php
			$col1 = "#ffffff";			//���ü�¼�б�����ɫΪ��ɫ
			$col2 = "#F6FFDA";			//���ü�¼�б�����ɫΪ��ɫ
			$col = $col2;
		for($i=0;$i<$rows_count;$i++){
			//��¼�б���ɫ����
			if($col == $col1)
				$col = $col2;
			else
				$col = $col1;
				$id=$res[$i]['id'];					//��Ը���
				$Picker = $res[$i]['Picker'];		//ף������
				$author=$res[$i]['author']; 		//��Ը������
				$QQ= $res[$i]['QQ'];				//��Ը��QQ
				$cip= $res[$i]['cip'];				//��Ը�˷�������
				$content=$res[$i]['content'];		//��Ը����
				$pagecolor = $res[$i]['pagecolor'];	//��Ը��ѡ���ǽֽ
				$face = $res[$i]['face'];			//��Ը��ѡ���ͷ��
				$wishsort = $res[$i]['wishsort'];	//��Ը���
				$sendtime = $res[$i]['sendTime'];	//����ʱ��
				$hits=$res[$i]['hits'];				//��Ը����ֵ
				if($QQ==0){$QQ="��";}
?>
      <tr bgcolor="<?php echo $col;?>">
        <td height="27" class="ListID"><?php echo $id;?></td>
        <td class="ListContent">&nbsp;<?php echo $content;?></td>
        <td class="ListPicker"><?php echo $Picker;?></td>
        <td class="Listauthor"><?php echo $author;?></td>
        <td class="Listhits"><?php echo $hits;?></td>
        <td class="Listauthor"><?php echo $cip;?></td>
		<td class="Listauthor"><?php echo $wishsort;?></td>
        <td class="ListQQ"><a href='http://wpa.qq.com/msgrd?uin=<?php echo $QQ; ?>&Site=1&Menu=yes' title='��������/����̸' target='_blank'><?php echo $QQ;?></a></td>
        <td class="Listsendtime"><?php echo $sendtime;?></td>
      </tr>
<?php }?>
<?php 
if($row_count_sum==0){
?>
<tr><td colspan="9" align="center" bgcolor="#FFFFCC">���������Ը��Ϣ</td></tr>
<?php
}
?>

<tr>                  <td height="22" colspan="9" align="right" bgcolor="#EFEFEF">��[<strong><?php echo $row_count_sum;?></strong>]��&nbsp;ÿҳ[<strong><?php echo $row_per_page;?></strong>]��/��[<strong><?php echo $page_count;?></strong>]ҳ&nbsp;��ǰ��[<font color="#FF0000"><strong><?php echo $page_num;?></strong></font>]ҳ
                    <!--  ��ҳ��ʾ�������� -->
                    <?php
					if(!$is_first){
					?>
                    <a href="./wishingList.php?page_num=1&content1=<?php echo $content1;?>&select=<?php echo $select;?>"> ��һҳ</a> <a href="./wishingList.php?page_num=<?php echo ($page_num-1); ?>&content1=<?php echo $content1;?>&select=<?php echo $select;?>">��һҳ</a>
                    <?php
					}
					else{
					?>
					��һҳ&nbsp;&nbsp;��һҳ
					<?php
					}
					if(!$is_last){
					?>
                    <a href="./wishingList.php?page_num=<?php echo ($page_num+1); ?>&content1=<?php echo $content1;?>&select=<?php echo $select;?>">��һҳ</a> <a href="./wishingList.php?page_num=<?php echo $page_count; ?>&content1=<?php echo $content1;?>&select=<?php echo $select;?>">���һҳ</a>
                    <?php
					}
					else{
					?>
                    ��һҳ&nbsp;&nbsp;���һҳ
                    <?php
					}
					?>&nbsp;&nbsp;</td>
</tr>
  </table>
    <br />
</div>
<!--��ʾ������Ϣ����-->
<?php require_once("copyright.php");?>
</body>
</html>