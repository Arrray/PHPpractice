<?php /* Smarty version 2.6.19, created on 2009-06-09 01:40:27
         compiled from admin-listread.phtml */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'admin-listread.phtml', 79, false),)), $this); ?>
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

<div style="width:98%; height:25px; text-align:left"><input type="button" value="添加图书试读信息"  onclick="window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-read.php'" />&nbsp;&nbsp;<input type="button" value="浏览图书试读信息" onclick="window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listread.php'"/></div>    
    <div style="width:98%;  border:1px solid #006D84">
        <div style="width:100%; height:25px; border:1px solid #FFFFFF; background-color:#4995A8; text-align:left; padding-top:5px; padding-left:20px; color:#FFFFFF">
            <li style="display:inline; float:left"><strong>浏览图书试读信息</strong></li>
        </div>
        
        <div style="width:100%; background-color:#CCCCCC">
            <div style="width: 50%; height:16px; float:left; padding-top:3px; border-right:1px solid #FFFFFF">
               图书名称
            </div>            
            <div style="width: 20%; height:16px; float:left; padding-top:3px; border-right:1px solid #FFFFFF">
               试读文件名
            </div>       
             <div style="width:20%; height:16px; float:left; padding-top:3px; border-right:1px solid #FFFFFF">
               添加时间
            </div>  
                         
             <div style="width:10%; height:16px; float:left; padding-top:3px">
               操作
            </div>       
        </div>  
        <?php unset($this->_sections['rID']);
$this->_sections['rID']['name'] = 'rID';
$this->_sections['rID']['loop'] = is_array($_loop=$this->_tpl_vars['reads']['data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['rID']['show'] = true;
$this->_sections['rID']['max'] = $this->_sections['rID']['loop'];
$this->_sections['rID']['step'] = 1;
$this->_sections['rID']['start'] = $this->_sections['rID']['step'] > 0 ? 0 : $this->_sections['rID']['loop']-1;
if ($this->_sections['rID']['show']) {
    $this->_sections['rID']['total'] = $this->_sections['rID']['loop'];
    if ($this->_sections['rID']['total'] == 0)
        $this->_sections['rID']['show'] = false;
} else
    $this->_sections['rID']['total'] = 0;
if ($this->_sections['rID']['show']):

            for ($this->_sections['rID']['index'] = $this->_sections['rID']['start'], $this->_sections['rID']['iteration'] = 1;
                 $this->_sections['rID']['iteration'] <= $this->_sections['rID']['total'];
                 $this->_sections['rID']['index'] += $this->_sections['rID']['step'], $this->_sections['rID']['iteration']++):
$this->_sections['rID']['rownum'] = $this->_sections['rID']['iteration'];
$this->_sections['rID']['index_prev'] = $this->_sections['rID']['index'] - $this->_sections['rID']['step'];
$this->_sections['rID']['index_next'] = $this->_sections['rID']['index'] + $this->_sections['rID']['step'];
$this->_sections['rID']['first']      = ($this->_sections['rID']['iteration'] == 1);
$this->_sections['rID']['last']       = ($this->_sections['rID']['iteration'] == $this->_sections['rID']['total']);
?>
        <div style="width:100%; border-top:1px solid #006D84">
            <div style="width:50%; height:20px; float:left; padding-top:4px; border-right:1px solid #006D84; text-align:left; padding-left:20px">
               <?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['reads']['data'][$this->_sections['rID']['index']]['bookname']);?>

            </div>            

            <div style="width:20%; height:20px; float:left; padding-top:4px; border-right:1px solid #006D84; text-align:left; padding-left:20px">
               <?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['reads']['data'][$this->_sections['rID']['index']]['filename']);?>

            </div>    


            <div style="width:20%; height:20px; float:left; padding-top:4px; border-right:1px solid #006D84">
               <?php echo $this->_tpl_vars['reads']['data'][$this->_sections['rID']['index']]['addtime']; ?>

            </div>  
                         
            <div style="width:10%; height:20px; float:left; padding-top:2px">
                <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listread.php?f=edit&id=<?php echo $this->_tpl_vars['reads']['data'][$this->_sections['rID']['index']]['id']; ?>
"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/edit.gif" border="0"/></a>&nbsp;<a href="javascript:if(window.confirm('确定删除？')==true){window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listread.php?f=del&id=<?php echo $this->_tpl_vars['reads']['data'][$this->_sections['rID']['index']]['id']; ?>
';}"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/del.gif" border="0"/></a>
            </div>       
        </div>          
        <?php endfor; endif; ?>
    </div>

    <?php if ($this->_tpl_vars['isShow'] == 'T'): ?>
    <br/>
    <div style="width:98%;  border:1px solid #006D84">
        <div style="width:100%; height:25px; border:1px solid #FFFFFF; background-color:#4995A8; text-align:left; padding-top:5px; padding-left:20px; color:#FFFFFF">
            <li style="display:inline; float:left"><strong>更改图书试读信息</strong></li>
        </div>
        
        <div style="width:100%; text-align:left; padding-top:5px; padding-left:20px; padding-left:70px">
         
          <form name="form_read" method="post" action="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listread.php" onsubmit="return chkInputRead(this)">
            <div style="width:100%; text-align:left; padding-top:5px; padding-left:50px">
              类别：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select id="bigtypeid" name="bigtypeid">
             <option value='' selected>-请选择-</option>
             <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrayBtypeOption']), $this);?>
      
       </select>  
&nbsp;<select name="smalltypeid" id="smalltypeid">
             <option value='' selected>-请选择-</option> 
       </select> <br /><br />
      图书名称：&nbsp;&nbsp;<select name="bookid" id="bookid">
             <option value=''>-请选择-</option>
             <option value='<?php echo $this->_tpl_vars['read'][0]['id']; ?>
' selected><?php echo $this->_tpl_vars['read'][0]['bookname']; ?>
</option> 
       </select> <br /><br />     
            
            
                  试读文件名：<input type="text" name="filename" size="30" class="input" value="<?php echo $this->_tpl_vars['read'][0]['filename']; ?>
"/><br /><br /> 
                <input type="hidden" name="f" value="edit" />
                <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['read'][0]['id']; ?>
" />
                <input type="submit" value="更改" />&nbsp;&nbsp;<input type="reset" value="重置" />
            </div> 
            </form>  
        
    
        </div>    
    </div>
    <?php endif; ?>
    <br />
    <div style="width:98%; height:25px; border-top:1px dotted #CCCCCC; padding-top:5px; text-align:left; padding-left:20px; background-color:#FFFBE5">
          <?php if ($this->_tpl_vars['reads']['countRs'] > 0): ?>   
          <li style="display:inline; padding-left:20px"><?php echo $this->_tpl_vars['nowtype']; ?>
共&nbsp;<?php echo $this->_tpl_vars['reads']['countRs']; ?>
&nbsp;本&nbsp;&nbsp;每页显示&nbsp;<?php echo $this->_tpl_vars['reads']['pageSize']; ?>
&nbsp;本&nbsp;&nbsp;第&nbsp;<?php echo $this->_tpl_vars['reads']['page']; ?>
&nbsp;页/共&nbsp;<?php echo $this->_tpl_vars['reads']['countPage']; ?>
&nbsp;页&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listread.php?page=<?php echo $this->_tpl_vars['reads']['first']; ?>
" class="a1">首页</a>&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listread.php?page=<?php echo $this->_tpl_vars['reads']['previous']; ?>
" class="a1">上一页</a>&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listread.php?page=<?php echo $this->_tpl_vars['reads']['next']; ?>
" class="a1">下一页</a>&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listread.php?page=<?php echo $this->_tpl_vars['reads']['last']; ?>
" class="a1">尾页</a>
          </li>           
          <?php endif; ?>
    </div>      
    
    