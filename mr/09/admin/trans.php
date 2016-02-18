<?php
	session_start();
 if($_GET[pid]!=""){ $_SESSION["pid"]=$_GET[pid]; }
	include_once("conn/conn.class.php");
	?>
	<script language="javascript">
  
 function selectcity(x){
   if(x!="请选择"){
      window.location.href='trans.php?&pid='+x;
	 }
 }
</script>
<link href="css/trans.css" type="text/css" rel="stylesheet" />
<table width="500" height="480" border="0" align="center" cellpadding="0" cellspacing="0">
                     
						<form action="trans_chk.php" method="post" enctype="multipart/form-data" name="list">
					
                        <tr>
                          <td height="20" align="right" valign="top">图片信息：</td>
                          <td height="20" valign="top">
						      <div align="left">
						        <input name="picture" type="file" size="20">
						        <br />
					          <font color="red">(上传图片大小不能超过700K)</font></div></td>
                        </tr>
                        <tr>
                          <td height="20" align="right" valign="top">上传数据：</td>
                          <td height="20" valign="top">						 
						      <div align="left">
						        <input name="address" type="file" size="20">
						        <br />
					          <font color="red">(音频文件不能超过10M)</font></div></td>
                        </tr>
			
            <tr>
              <td height="20"><div align="right">上传歌词：</div></td>
              <td height="20"><div align="left">
                <input name="lyric" type="file" size="20" />
                （歌词为.lrc格式）</div></td>
            </tr>
            <tr>
                          <td width="83" height="20">
                  <div align="right">歌曲名称：</div>                            </td>
                          <td width="338" height="20">
                            <div align="left">
              <input name="names" type="text"  id="names" size="25">
            *歌曲的完整名称 </div></td>
                        </tr>
                        <tr>
                          <td height="20"><div align="right">演唱者：</div></td>
                          <td height="20">
                            <div align="left">
              <input name="actor" type="text"  id="actor" size="25">
            *</div></td>
                        </tr>
                        <tr>
                          <td height="20"><div align="right" >演唱者类型：</div></td>
                          <td height="20">
                            
                            <div align="left">
                      <input type="radio" name="actortype" value="个人" checked>
                    个人
                    <input type="radio" name="actortype" value="组合">
组合
<input type="radio" name="actortype" value="乐队">
乐队                    *</div></td>
                        </tr>
                        <tr>
                          <td height="20"><div align="right">作词：</div></td>
                          <td height="20">
                            <div align="left">
                              <input name="ci" type="text" size="25" >
                          *                          </div></td>
                        </tr>
                        <tr>
                          <td height="20"><div align="right">作曲：</div></td>
                          <td height="20">
                            <div align="left">
                              <input name="qu" type="text" size="25" >
                          *                          </div></td>
                        </tr>
                        <tr>
                          <td height="20"><div align="right">发行商：</div></td>
                          <td height="20">
                            <div align="left">
              <input name="publisher" type="text"  id="publisher" size="25">
            *</div></td>
                        </tr>
                        <tr>
                          <td height="20"><div align="right">语言：</div></td>
                          <td height="20">
                          
                            <div align="left">
                        <input type="radio" name="language" value="中文" checked> 
                      中文
                      <input type="radio" name="language" value="英文">
                      英文
                      <input type="radio" name="language" value="韩语"> 
                      韩语
                      <br>
                      <input type="radio" name="language" value="日语"> 
                      日语
                      <input type="radio" name="language" value="德语">
                      德语
                      <input type="radio" name="language" value="法语"> 
                      法语 *</div></td>
                        </tr>
                        <tr>
                              <td height="20"><div align="right">一级分类：</div></td>
                          <td height="20">
                            <div align="left">
  <select name="type_1"  id="type_1"  onChange="selectcity(this.value);" >
    <option  value="请选择"> 请选择</option>	
      <?php $sql="select * from tb_videolist";
		$rst=$result->getRows($sql,$conn);
		for($i=0;$i<count($rst);$i++){
		//while(!$rst->EOF){
?>
    <option value="<?php  echo $rst[$i][father]; ?> "  <?php
	  if($_SESSION["pid"]!="") {
	     if($_SESSION["pid"]==$rst[$i][father]){
	      echo "selected=\"selected\""; 
	    }
	   }?>><? echo $rst[$i][father]; ?></option>
            <?php
		
		}
?>
  </select>
                          *</div></td> 
                        </tr>
						                        <tr>
                

     <td height="20"><div align="right">二级分类：</div></td>
                          <td height="20">
                            <div align="left">
  <select name="style"  id="style" >
    <?php $sql="select * from tb_videolist where grade='2' and father='".$_GET[pid]."'";
        
		$rsti=$result->getRows($sql,$conn);
		for($j=0;$j<count($rsti);$j++){
		//while(!$rst->EOF){
?>
    <option value="<?php echo $rsti[$j][name]; ?>"><? echo $rsti[$j][name]; ?></option>
            <?php
		//$rst->movenext();
		}
?>
  </select>
                              *</div></td>
                        </tr>
                        <tr>
                          <td height="20"><div align="right">发行国家：</div></td>
                          <td height="20">
                            <div align="left">
                              <input name="from" type="text"  id="from" size="25" />            
                          *</div></td>
                        </tr>
                        <tr>
                          <td height="20"><div align="right">发行时间：</div></td>
                          <td height="20">
                            <div align="left">
              <input name="publishtime" type="text"  id="publishtime" size="25">
            *</div></td>
                        </tr>

                        <tr>
                          <td height="20"><div align="right">简要介绍：</div></td>
                          <td height="20">
                            <div align="left">
              <textarea name="remark" cols="35" rows="3"  id="remark"></textarea>
				
            *</div></td>
                        </tr>
                        <tr>
                          <td height="30" colspan="2" align="center">
                              <input name="Submit" type="submit"  value="  添  加">
                              （*为必填项）
                          <input name="Submit2" type="button"  value="返  回  " onClick="javascript:top.window.close()"></td>
                        </tr>
			  </form>
</table>
