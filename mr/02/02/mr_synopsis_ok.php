<?php 
header('content-type:text/html;charset=gb2312');
if(isset($_GET['page'])){
	$page=$_GET['page'];
}else{
	$page=1;
}
include("function.php");
?>
<table width="425" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="20">&nbsp;</td>
      </tr>
      <tr>
        <td><?php 
  if($page){
	 $counter=file_get_contents("file/mr_synopsis.txt");
     $length=strlen($counter);
     $page_count=ceil($length/950);
     $c=msubstr($counter,0,($page-1)*950);
     $c1=msubstr($counter,0,$page*950);
		echo substr($c1,strlen($c),strlen($c1)-strlen($c)); 
  }?>    </td>
      </tr>
      <tr>
        <td><table border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="42%" align="center" valign="middle" bgcolor="#FFFFFF"><span class="STYLE1">&nbsp;&nbsp;页次：<?php echo $page;?> / <?php echo $page_count;?> 页 </span></td>
    <td width="58%" height="28" align="left" valign="middle" bgcolor="#FFFFFF"><span class="STYLE1"> &nbsp;分页：
              <?php
	  		  if($page!=1){  
?> 
<a href="#" onclick='return artpagination("mr_synopsis_ok.php?page=1")'>首页</a>&nbsp;

<a href="#" onclick='return artpagination("mr_synopsis_ok.php?&page=<?php echo $page-1;?>")'>上一页</a>&nbsp;
				 <?php  }
				  if($page<$page_count){
?>
<a href="#" onclick='return artpagination("mr_synopsis_ok.php?page=<?php echo $page+1;?>")'>下一页</a>&nbsp;
				        <a href="#" onclick='return artpagination("mr_synopsis_ok.php?page=<?php echo $page_count;?>")'>尾页</a>				
<?php
		
		   }				   
			  ?>     
    </span> </td>
  </tr>
</table></td>
      </tr>
</table>
