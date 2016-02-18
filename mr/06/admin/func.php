<?php 
function show_file($f_name){
	$d_open = opendir($f_name);
	$num = 0;
	while($file = readdir($d_open)){
		$filename[$num] = $file;
		$num++; 
	}
	closedir($d_open);
	return $filename;
}
?>