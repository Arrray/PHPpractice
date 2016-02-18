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
               您当前的位置：明日网上书店&nbsp;>>&nbsp;高级搜索
    </div>
    <form name="form_advSearch" method="post" action="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/search.html" onsubmit="return chkadvsearch(this)">
    <div style="width:700px; height:150px; text-align:left; padding-top:20px; font-size:13px">

    查询关键字：<input type="text" name="keyWord" size="30" class="input" />&nbsp;&nbsp;<font color="#0000FF">(&nbsp;*&nbsp;按图书名称模糊匹配，多个关键字之间用<font color="#FF0000">空格分割</font>)</font><br /><br />
    作者：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="writer" size="30" class="input" />&nbsp;&nbsp;<font color="#0000FF">(&nbsp;*&nbsp;请输入作者名称关键字，按作者名称模糊匹配)</font><br /><br />  
   出版社：&nbsp;&nbsp;&nbsp;&nbsp;<select name="pubid">
             <option value='' selected>-请选择-</option>
             <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrayPubOption']), $this);?>
  
         </select>  <br /><br />
  类别：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select id="bigtypeid" name="bigtypeid">
             <option value='' selected>-请选择-</option>
             <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrayBtypeOption']), $this);?>
      
       </select>  
&nbsp;<select name="smalltypeid" id="smalltypeid">
             <option value='' selected>-请选择-</option> 
       </select> <br /><br />
出版时间：&nbsp;&nbsp;<select name="fyear">
             <option value='' selected>-请选择-</option> 
             <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrayYear']), $this);?>

       </select>&nbsp;年        
       <select name="fmonth">
             <option value='' selected>-请选择-</option>
             <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrayMonth']), $this);?>
 
       </select>&nbsp;月&nbsp;-&nbsp;-&nbsp;到&nbsp;-&nbsp;-&nbsp;
       <select name="tyear">
             <option value='' selected>-请选择-</option> 
             <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrayYear']), $this);?>

       </select>&nbsp;年        
       <select name="tmonth">
             <option value='' selected>-请选择-</option>
             <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrayMonth']), $this);?>
  
       </select>&nbsp;月
       
       <br /><br />
       <input type="hidden" name="stype" value="adv" /> 
       <input type="submit" value="查找">&nbsp;&nbsp;<input type="reset" value="重置" />
       <br /><br /> 
       
    </div>
    </form>     
</div>
       