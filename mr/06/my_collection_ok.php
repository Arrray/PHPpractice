<?php include("conn/conn.php");
$tb_collection_subject=$_POST["collection_subject"];

$tb_collection_address=$_POST["collection_address"];

$tb_collection_label=$_POST["collection_label"];

$tb_collection_summary=$_POST["collection_summary"];

$tb_collection_user=$_POST["collection_user"];

$tb_collection_date=date("Y-m-d H:i:s");

$query=mysql_query("insert into tb_my_collection (tb_collection_subject,tb_collection_address,tb_collection_label,tb_collection_summary,tb_collection_user,tb_collection_date)values('$tb_collection_subject','$tb_collection_address','$tb_collection_label','$tb_collection_summary','$tb_collection_user','$tb_collection_date')");
if($query==true){
echo "<script>alert('Ìí¼Ó³É¹¦!');window.location.href='$tb_collection_address';</script>";
}
?>