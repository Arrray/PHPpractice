<?php /* Smarty version 2.6.19, created on 2010-05-11 02:57:49
         compiled from listsepbook.phtml */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'listsepbook.phtml', 32, false),)), $this); ?>

<div style="width:950px; background-color:#FFFFFF">
    <div style="width:930px; height:20px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/title4.gif); border-top:1px solid #CCCCCC; padding-top:3px; padding-left:20px; font-size:13px; text-align:left">
               您当前的位置：明日网上书店&nbsp;>>&nbsp;<?php echo $this->_tpl_vars['nowtype']; ?>

    </div>
    <div style="width:930px; height:25px; border-top:1px dotted #CCCCCC; padding-top:5px; text-align:left; padding-left:20px; background-color:#FFFBE5">
          <?php if ($this->_tpl_vars['bookinfos']['countRs'] > 0): ?>   
          <li style="display:inline; padding-left:20px"><?php echo $this->_tpl_vars['nowtype']; ?>
共&nbsp;<?php echo $this->_tpl_vars['bookinfos']['countRs']; ?>
&nbsp;本&nbsp;&nbsp;每页显示&nbsp;<?php echo $this->_tpl_vars['bookinfos']['pageSize']; ?>
&nbsp;本&nbsp;&nbsp;第&nbsp;<?php echo $this->_tpl_vars['bookinfos']['page']; ?>
&nbsp;页/共&nbsp;<?php echo $this->_tpl_vars['bookinfos']['countPage']; ?>
&nbsp;页&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listsepbook-<?php echo $this->_tpl_vars['bookinfos']['first']; ?>
-<?php echo $this->_tpl_vars['gt']; ?>
.html" class="a1">首页</a>&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listsepbook-<?php echo $this->_tpl_vars['bookinfos']['previous']; ?>
-<?php echo $this->_tpl_vars['gt']; ?>
.html" class="a1">上一页</a>&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listsepbook-<?php echo $this->_tpl_vars['bookinfos']['next']; ?>
-<?php echo $this->_tpl_vars['gt']; ?>
.html" class="a1">下一页</a>&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listsepbook-<?php echo $this->_tpl_vars['bookinfos']['last']; ?>
-<?php echo $this->_tpl_vars['gt']; ?>
.html" class="a1">尾页</a>
          </li>           
          <?php endif; ?>
    </div> 
<?php if ($this->_tpl_vars['bookinfos']['countRs'] > 0): ?> 
<?php unset($this->_sections['pbID']);
$this->_sections['pbID']['name'] = 'pbID';
$this->_sections['pbID']['loop'] = is_array($_loop=$this->_tpl_vars['bookinfos']['data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['pbID']['show'] = true;
$this->_sections['pbID']['max'] = $this->_sections['pbID']['loop'];
$this->_sections['pbID']['step'] = 1;
$this->_sections['pbID']['start'] = $this->_sections['pbID']['step'] > 0 ? 0 : $this->_sections['pbID']['loop']-1;
if ($this->_sections['pbID']['show']) {
    $this->_sections['pbID']['total'] = $this->_sections['pbID']['loop'];
    if ($this->_sections['pbID']['total'] == 0)
        $this->_sections['pbID']['show'] = false;
} else
    $this->_sections['pbID']['total'] = 0;
if ($this->_sections['pbID']['show']):

            for ($this->_sections['pbID']['index'] = $this->_sections['pbID']['start'], $this->_sections['pbID']['iteration'] = 1;
                 $this->_sections['pbID']['iteration'] <= $this->_sections['pbID']['total'];
                 $this->_sections['pbID']['index'] += $this->_sections['pbID']['step'], $this->_sections['pbID']['iteration']++):
$this->_sections['pbID']['rownum'] = $this->_sections['pbID']['iteration'];
$this->_sections['pbID']['index_prev'] = $this->_sections['pbID']['index'] - $this->_sections['pbID']['step'];
$this->_sections['pbID']['index_next'] = $this->_sections['pbID']['index'] + $this->_sections['pbID']['step'];
$this->_sections['pbID']['first']      = ($this->_sections['pbID']['iteration'] == 1);
$this->_sections['pbID']['last']       = ($this->_sections['pbID']['iteration'] == $this->_sections['pbID']['total']);
?>
<div style="width:930px">
    <br>
    <div style="width:100%; height:180px">
        <div style="width:20%; height:100%; float:left">
            <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/bookinfo-<?php echo $this->_tpl_vars['bookinfos']['data'][$this->_sections['pbID']['index']]['id']; ?>
.html"><img src="<?php echo $this->_tpl_vars['system'][0]['bookimgurl']; ?>
/<?php echo $this->_tpl_vars['bookinfos']['data'][$this->_sections['pbID']['index']]['bookimg']; ?>
" width="110" height="150" style="border:1px solid #123456" /></a>
        </div>
        
        <div style="width:78%; height:100%; float:right; text-align:left; font-size:13px">
            <li style="display:inline"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/bookinfo-<?php echo $this->_tpl_vars['bookinfos']['data'][$this->_sections['pbID']['index']]['id']; ?>
.html" class="a5"><strong><?php echo $this->_tpl_vars['bookinfos']['data'][$this->_sections['pbID']['index']]['bookname']; ?>
</strong></a></li>
            <br><br>
            <li style="display:inline">出版社：<?php echo $this->_tpl_vars['bookinfos']['data'][$this->_sections['pbID']['index']]['pubname']; ?>
</li>
            <br><br>
            <li style="display:inline">作者：<?php echo $this->_tpl_vars['bookinfos']['data'][$this->_sections['pbID']['index']]['writer']; ?>
</li>
            <br><br>
            <li style="display:inline">上架时间：<?php echo ((is_array($_tmp=$this->_tpl_vars['bookinfos']['data'][$this->_sections['pbID']['index']]['addtime'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 10, "") : smarty_modifier_truncate($_tmp, 10, "")); ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;出版时间：<?php echo ((is_array($_tmp=$this->_tpl_vars['bookinfos']['data'][$this->_sections['pbID']['index']]['pubtime'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 10, "") : smarty_modifier_truncate($_tmp, 10, "")); ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;浏览次数：<?php echo $this->_tpl_vars['bookinfos']['data'][$this->_sections['pbID']['index']]['browsertime']; ?>
&nbsp;次</li>
            <br><br>
            <li style="display:inline">市场价：<img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/mark_green.gif" />&nbsp;<s><?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['bookinfos']['data'][$this->_sections['pbID']['index']]['oldprice']);?>
</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <font color="#FF0000">会员价：<img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/mark_red.gif" />&nbsp;<?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['bookinfos']['data'][$this->_sections['pbID']['index']]['newprice']);?>
</font>          
             </li> 
             <br><br> 
             <li style="display:inline"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/cart-<?php echo $this->_tpl_vars['bookinfos']['data'][$this->_sections['pbID']['index']]['id']; ?>
-add.html"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_order.gif" border="0"/></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/bookinfo-<?php echo $this->_tpl_vars['bookinfos']['data'][$this->_sections['pbID']['index']]['id']; ?>
.html"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_info.gif" border="0"/></a></li>                            
        </div>
        
    </div>
    <div style="width:95%; height:50px; border:1px solid #CCCCCC; text-align:left; line-height:18px; color:#990000; padding:5px">
    <?php echo $this->_reg_objects['util'][0]->unHtml(((is_array($_tmp=$this->_tpl_vars['bookinfos']['data'][$this->_sections['pbID']['index']]['about'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 420, "...", false) : smarty_modifier_truncate($_tmp, 420, "...", false)));?>

    </div>
</div>
<?php endfor; endif; ?>  
<?php else: ?>
<div style="width:500px; height:80px; font-size:14px; color:#FF0000">
    <img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/mark_telllogin.gif"><br />
                <strong>对不起，暂无新书信息！</strong>
</div>
<?php endif; ?>
    
    <div style="width:50px; height:10px; font-size:0px"></div>
    <div style="width:930px; height:25px; border-top:1px dotted #CCCCCC; padding-top:5px; text-align:left; padding-left:20px; background-color:#FFFBE5">
          <?php if ($this->_tpl_vars['bookinfos']['countRs'] > 0): ?>   
          <li style="display:inline; padding-left:20px"><?php echo $this->_tpl_vars['nowtype']; ?>
共&nbsp;<?php echo $this->_tpl_vars['bookinfos']['countRs']; ?>
&nbsp;本&nbsp;&nbsp;每页显示&nbsp;<?php echo $this->_tpl_vars['bookinfos']['pageSize']; ?>
&nbsp;本&nbsp;&nbsp;第&nbsp;<?php echo $this->_tpl_vars['bookinfos']['page']; ?>
&nbsp;页/共&nbsp;<?php echo $this->_tpl_vars['bookinfos']['countPage']; ?>
&nbsp;页&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listsepbook-<?php echo $this->_tpl_vars['bookinfos']['first']; ?>
-<?php echo $this->_tpl_vars['gt']; ?>
.html" class="a1">首页</a>&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listsepbook-<?php echo $this->_tpl_vars['bookinfos']['previous']; ?>
-<?php echo $this->_tpl_vars['gt']; ?>
.html" class="a1">上一页</a>&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listsepbook-<?php echo $this->_tpl_vars['bookinfos']['next']; ?>
-<?php echo $this->_tpl_vars['gt']; ?>
.html" class="a1">下一页</a>&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listsepbook-<?php echo $this->_tpl_vars['bookinfos']['last']; ?>
-<?php echo $this->_tpl_vars['gt']; ?>
.html" class="a1">尾页</a>
          </li>             
          <?php endif; ?>
    </div>   
       
</div>
       