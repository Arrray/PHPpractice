<?php /* Smarty version 2.6.19, created on 2009-06-09 00:47:00
         compiled from admin-read.phtml */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'admin-read.phtml', 37, false),)), $this); ?>
  <script src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/js/jquery.js"></script>  
<script language="javascript" >
$(document).ready(
	    function(){
	    	$("#bigtypeid").change(function(){
	            $.get("<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/getstype.php?stid="+$("#bigtypeid").val(), null, function(data){
	            	$("#smalltypeid").empty();
	            	$("#smalltypeid").append(data);
	          });
	        }); 
	        
		    $("#smalltypeid").change(function(){
	            $.get("<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/getbook.php?bid="+$("#smalltypeid").val(), null, function(data){
	            	$("#bookid").empty();
	            	$("#bookid").append(data);
	          });
	       }); 	
	    }
	);

</script> 
  
    
    
    <div style="width:98%; height:25px; text-align:left"><input type="button" value="���ͼ���Զ���Ϣ"  onclick="window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-read.php'" />&nbsp;&nbsp;<input type="button" value="���ͼ���Զ���Ϣ" onclick="window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listread.php'"/></div>    
    <div style="width:98%;  border:1px solid #006D84">
        <div style="width:100%; height:25px; border:1px solid #FFFFFF; background-color:#4995A8; text-align:left; padding-top:5px; padding-left:20px; color:#FFFFFF">
            <li style="display:inline; float:left"><strong>���ͼ���Զ���Ϣ</strong></li>
        </div>
        
        <div style="width:100%; text-align:left; padding-top:5px; padding-left:20px; padding-left:70px">
         
          <form name="form_read" method="post" action="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-read.php" onsubmit="return chkInputRead(this)">
            <div style="width:100%; text-align:left; padding-top:5px; padding-left:50px">
              ���&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select id="bigtypeid" name="bigtypeid">
             <option value='' selected>-��ѡ��-</option>
             <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrayBtypeOption']), $this);?>
      
       </select>  
&nbsp;<select name="smalltypeid" id="smalltypeid">
             <option value='' selected>-��ѡ��-</option> 
       </select> <br /><br />
      ͼ�����ƣ�&nbsp;&nbsp;<select name="bookid" id="bookid">
             <option value='' selected>-��ѡ��-</option> 
       </select> <br /><br />     
            
            
                  �Զ��ļ�����<input type="text" name="filename" size="30" class="input"/><br /><br /> 
                <input type="submit" value="���" />&nbsp;&nbsp;<input type="reset" value="����" />
            </div> 
            </form>  
        
    
        </div>    
    </div>