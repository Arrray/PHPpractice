<?php
	session_start();
 if($_GET[pid]!=""){ $_SESSION["pid"]=$_GET[pid]; }
	include_once("conn/conn.class.php");
	?>
	<script language="javascript">
  
 function selectcity(x){
   if(x!="��ѡ��"){
      window.location.href='trans.php?&pid='+x;
	 }
 }
</script>
<link href="css/trans.css" type="text/css" rel="stylesheet" />
<table width="500" height="480" border="0" align="center" cellpadding="0" cellspacing="0">
                     
						<form action="trans_chk.php" method="post" enctype="multipart/form-data" name="list">
					
                        <tr>
                          <td height="20" align="right" valign="top">ͼƬ��Ϣ��</td>
                          <td height="20" valign="top">
						      <div align="left">
						        <input name="picture" type="file" size="20">
						        <br />
					          <font color="red">(�ϴ�ͼƬ��С���ܳ���700K)</font></div></td>
                        </tr>
                        <tr>
                          <td height="20" align="right" valign="top">�ϴ����ݣ�</td>
                          <td height="20" valign="top">						 
						      <div align="left">
						        <input name="address" type="file" size="20">
						        <br />
					          <font color="red">(��Ƶ�ļ����ܳ���10M)</font></div></td>
                        </tr>
			
            <tr>
              <td height="20"><div align="right">�ϴ���ʣ�</div></td>
              <td height="20"><div align="left">
                <input name="lyric" type="file" size="20" />
                �����Ϊ.lrc��ʽ��</div></td>
            </tr>
            <tr>
                          <td width="83" height="20">
                  <div align="right">�������ƣ�</div>                            </td>
                          <td width="338" height="20">
                            <div align="left">
              <input name="names" type="text"  id="names" size="25">
            *�������������� </div></td>
                        </tr>
                        <tr>
                          <td height="20"><div align="right">�ݳ��ߣ�</div></td>
                          <td height="20">
                            <div align="left">
              <input name="actor" type="text"  id="actor" size="25">
            *</div></td>
                        </tr>
                        <tr>
                          <td height="20"><div align="right" >�ݳ������ͣ�</div></td>
                          <td height="20">
                            
                            <div align="left">
                      <input type="radio" name="actortype" value="����" checked>
                    ����
                    <input type="radio" name="actortype" value="���">
���
<input type="radio" name="actortype" value="�ֶ�">
�ֶ�                    *</div></td>
                        </tr>
                        <tr>
                          <td height="20"><div align="right">���ʣ�</div></td>
                          <td height="20">
                            <div align="left">
                              <input name="ci" type="text" size="25" >
                          *                          </div></td>
                        </tr>
                        <tr>
                          <td height="20"><div align="right">������</div></td>
                          <td height="20">
                            <div align="left">
                              <input name="qu" type="text" size="25" >
                          *                          </div></td>
                        </tr>
                        <tr>
                          <td height="20"><div align="right">�����̣�</div></td>
                          <td height="20">
                            <div align="left">
              <input name="publisher" type="text"  id="publisher" size="25">
            *</div></td>
                        </tr>
                        <tr>
                          <td height="20"><div align="right">���ԣ�</div></td>
                          <td height="20">
                          
                            <div align="left">
                        <input type="radio" name="language" value="����" checked> 
                      ����
                      <input type="radio" name="language" value="Ӣ��">
                      Ӣ��
                      <input type="radio" name="language" value="����"> 
                      ����
                      <br>
                      <input type="radio" name="language" value="����"> 
                      ����
                      <input type="radio" name="language" value="����">
                      ����
                      <input type="radio" name="language" value="����"> 
                      ���� *</div></td>
                        </tr>
                        <tr>
                              <td height="20"><div align="right">һ�����ࣺ</div></td>
                          <td height="20">
                            <div align="left">
  <select name="type_1"  id="type_1"  onChange="selectcity(this.value);" >
    <option  value="��ѡ��"> ��ѡ��</option>	
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
                

     <td height="20"><div align="right">�������ࣺ</div></td>
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
                          <td height="20"><div align="right">���й��ң�</div></td>
                          <td height="20">
                            <div align="left">
                              <input name="from" type="text"  id="from" size="25" />            
                          *</div></td>
                        </tr>
                        <tr>
                          <td height="20"><div align="right">����ʱ�䣺</div></td>
                          <td height="20">
                            <div align="left">
              <input name="publishtime" type="text"  id="publishtime" size="25">
            *</div></td>
                        </tr>

                        <tr>
                          <td height="20"><div align="right">��Ҫ���ܣ�</div></td>
                          <td height="20">
                            <div align="left">
              <textarea name="remark" cols="35" rows="3"  id="remark"></textarea>
				
            *</div></td>
                        </tr>
                        <tr>
                          <td height="30" colspan="2" align="center">
                              <input name="Submit" type="submit"  value="  ��  ��">
                              ��*Ϊ�����
                          <input name="Submit2" type="button"  value="��  ��  " onClick="javascript:top.window.close()"></td>
                        </tr>
			  </form>
</table>
