<?php
require("global.php");
require("function.php");
$sql1 = "select * from tb_wishes order by id desc limit 10";
$DB->query($sql1);
$res1 = $DB->get_rows_array();
header('Content-type: text/html;charset=GB2312');		//ָ���������ݵı����ʽΪGB2312
//���������
$rows_count=count($res1);
for($i=0;$i<$rows_count;$i++){
		$id=$res1[$i]['id'];				//��Ը���
		$Picker = $res1[$i]['Picker'];		//ף������
		$author=$res1[$i]['author']; 		//��Ը������
		$content=$res1[$i]['content'];		//��Ը����
?>
<a href='index.php?tid=<?php echo $id;?>'><strong><font color="#333366"><?php echo $author;?></font></strong><font color="#FF3366"> ף�� </font>
<strong><font color="#333366"><?php if($Picker!=""){echo $Picker.":";} ?></font></strong><?php echo msubstr($content,0,30);?></a>
<?php
}
?> 
