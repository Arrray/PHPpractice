<?php /* Smarty version 2.6.19, created on 2009-06-10 05:32:42
         compiled from advancedsearch.phtml */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'advancedsearch.phtml', 27, false),)), $this); ?>
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
	    }
	);

</script> 
 
<div style="width:950px; background-color:#FFFFFF">
    <div style="width:930px; height:20px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/title4.gif); border-top:1px solid #CCCCCC; padding-top:3px; padding-left:20px; font-size:13px; text-align:left">
               ����ǰ��λ�ã������������&nbsp;>>&nbsp;�߼�����
    </div>
    <form name="form_advSearch" method="post" action="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/search.html" onsubmit="return chkadvsearch(this)">
    <div style="width:700px; height:150px; text-align:left; padding-top:20px; font-size:13px">

    ��ѯ�ؼ��֣�<input type="text" name="keyWord" size="30" class="input" />&nbsp;&nbsp;<font color="#0000FF">(&nbsp;*&nbsp;��ͼ������ģ��ƥ�䣬����ؼ���֮����<font color="#FF0000">�ո�ָ�</font>)</font><br /><br />
    ���ߣ�&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="writer" size="30" class="input" />&nbsp;&nbsp;<font color="#0000FF">(&nbsp;*&nbsp;�������������ƹؼ��֣�����������ģ��ƥ��)</font><br /><br />  
   �����磺&nbsp;&nbsp;&nbsp;&nbsp;<select name="pubid">
             <option value='' selected>-��ѡ��-</option>
             <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrayPubOption']), $this);?>
  
         </select>  <br /><br />
  ���&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select id="bigtypeid" name="bigtypeid">
             <option value='' selected>-��ѡ��-</option>
             <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrayBtypeOption']), $this);?>
      
       </select>  
&nbsp;<select name="smalltypeid" id="smalltypeid">
             <option value='' selected>-��ѡ��-</option> 
       </select> <br /><br />
����ʱ�䣺&nbsp;&nbsp;<select name="fyear">
             <option value='' selected>-��ѡ��-</option> 
             <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrayYear']), $this);?>

       </select>&nbsp;��        
       <select name="fmonth">
             <option value='' selected>-��ѡ��-</option>
             <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrayMonth']), $this);?>
 
       </select>&nbsp;��&nbsp;-&nbsp;-&nbsp;��&nbsp;-&nbsp;-&nbsp;
       <select name="tyear">
             <option value='' selected>-��ѡ��-</option> 
             <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrayYear']), $this);?>

       </select>&nbsp;��        
       <select name="tmonth">
             <option value='' selected>-��ѡ��-</option>
             <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrayMonth']), $this);?>
  
       </select>&nbsp;��
       
       <br /><br />
       <input type="hidden" name="stype" value="adv" /> 
       <input type="submit" value="����">&nbsp;&nbsp;<input type="reset" value="����" />
       <br /><br /> 
       
    </div>
    </form>     
</div>
       