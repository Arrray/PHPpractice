<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>������Ը��Ըǽ_��ǽ����</title>
<link href="CSS/index.css" rel="stylesheet"/>
</head>
<body>
<?php require("top.php");?>
<!--��ʼ��ʾ��ǽ��Ϣ-->
<div id="main" style="padding-top:5px;">
<?php
require("global.php");
$sql = "select * from tb_wishes order by hits desc ";
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
	$row_per_page =10 ;
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
        <td height="27" align="center" bgcolor="#7CC842">��ǽ��</td>
        <td align="center" bgcolor="#7CC842">ף������</td>
        <td align="center" bgcolor="#7CC842">ף������</td>
        <td align="center" bgcolor="#7CC842">��Ը��</td>
        <td align="center" bgcolor="#7CC842">����</td>
		<td align="center" bgcolor="#7CC842">����</td>	
		<td align="center" bgcolor="#7CC842">��Ը��QQ��</td>
        <td align="center" bgcolor="#7CC842">����ʱ��</td>
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
				$cip=$res[$i]['cip'];				//��Ը�˷�������
				$content=$res[$i]['content'];		//��Ը����
				$pagecolor = $res[$i]['pagecolor'];	//��Ը��ѡ���ǽֽ
				$face = $res[$i]['face'];			//��Ը��ѡ���ͷ��
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
		<td class="Listhits"><?php echo $cip;?></td>
        <td class="ListQQ"><a href='http://wpa.qq.com/msgrd?uin=<?php echo $QQ; ?>&Site=1&Menu=yes' title='��������/����̸' target='_blank'><?php echo $QQ;?></a></td>
        <td class="Listsendtime"><?php echo $sendtime;?></td>
      </tr>
<?php }?>
<tr>                  <td height="22" colspan="8" align="right" bgcolor="#EFEFEF">��[<strong><?php echo $row_count_sum;?></strong>]��&nbsp;ÿҳ[<strong><?php echo $row_per_page;?></strong>]��/��[<strong><?php echo $page_count;?></strong>]ҳ&nbsp;
                    <!--  ��ҳ��ʾ�������� -->
                    <?php
					if(!$is_first){
					?>
                    <a href="./wishingSort.php?page_num=1"> ��һҳ</a> <a href="./wishingSort.php?page_num=	<?php echo ($page_num-1) ?>">��һҳ</a>
                    <?php
					}
					else{
					?>
					��һҳ&nbsp;&nbsp;��һҳ
					<?php
					}
					if(!$is_last){
					?>
                    <a href="./wishingSort.php?page_num=<?php echo ($page_num+1) ?>">��һҳ</a> <a href="./wishingSort.php?page_num=<?php echo $page_count ?>">���һҳ</a>
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