<?php
require("global.php");
require("function.php");
$sql1 = "select * from tb_wishes order by id desc limit 10";
$DB->query($sql1);
$res1 = $DB->get_rows_array();
header('Content-type: text/html;charset=GB2312');		//指定发送数据的编码格式为GB2312
//结果集行数
$rows_count=count($res1);
for($i=0;$i<$rows_count;$i++){
		$id=$res1[$i]['id'];				//许愿编号
		$Picker = $res1[$i]['Picker'];		//祝福对象
		$author=$res1[$i]['author']; 		//许愿人姓名
		$content=$res1[$i]['content'];		//许愿内容
?>
<a href='index.php?tid=<?php echo $id;?>'><strong><font color="#333366"><?php echo $author;?></font></strong><font color="#FF3366"> 祝福 </font>
<strong><font color="#333366"><?php if($Picker!=""){echo $Picker.":";} ?></font></strong><?php echo msubstr($content,0,30);?></a>
<?php
}
?> 
