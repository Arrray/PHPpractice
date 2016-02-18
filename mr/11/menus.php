<?php 
header("Content-type: text/xml");
if($_GET["menu"]==1)
	$menuitems=array('Ham','Turkey','Beef');
if($_GET["menu"]==2)
	$menuitems=array('Tomato','Cucumber','Rice');
echo '<?xml version="1.0" ?>';
echo '<menu>';
foreach($menuitems as $value){
echo '<menuitem>';
echo $value;
echo '</menuitem>';
}
echo '</menu>';
?>