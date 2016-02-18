<?php /* Smarty version 2.6.19, created on 2009-06-05 11:41:41
         compiled from cxsx.phtml */ ?>
<div style="width:950px; background-color:#FFFFFF">
    <div style="width:930px">
        <div style="width:200px; float:left">
            <div style="width:200px; height:30px">
                <div style="width:6px; height:30px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/dg_left.gif); float:left"></div>
                <div style="width:188px; height:30px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/dg_center.gif); float:left; padding-top:5px">
                    <div style="width:45px; height:25px; float:left; padding-top:5px; <?php if ($this->_tpl_vars['cctype'] == 1): ?>background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/dg_button_bg.gif)<?php endif; ?>"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/cxsx-1.html" class="<?php if ($this->_tpl_vars['cctype'] == 1): ?>a2<?php else: ?>a1<?php endif; ?>"><strong>全部</strong></a></div>
                    
                    <div style="width:45px; height:25px;  float:left; padding-top:5px; <?php if ($this->_tpl_vars['cctype'] == 2): ?>background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/dg_button_bg.gif)<?php endif; ?>"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/cxsx-2.html" class="<?php if ($this->_tpl_vars['cctype'] == 2): ?>a2<?php else: ?>a1<?php endif; ?>"><strong>初级</strong></a></div>
                
                    <div style="width:45px; height:25px;  float:left; padding-top:5px; <?php if ($this->_tpl_vars['cctype'] == 3): ?>background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/dg_button_bg.gif)<?php endif; ?>"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/cxsx-3.html" class="<?php if ($this->_tpl_vars['cctype'] == 3): ?>a2<?php else: ?>a1<?php endif; ?>"><strong>中级</strong></a></div>
                    
                    <div style="width:45px; height:25px;  float:left; padding-top:5px; <?php if ($this->_tpl_vars['cctype'] == 4): ?>background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/dg_button_bg.gif)<?php endif; ?>"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/cxsx-4.html" class="<?php if ($this->_tpl_vars['cctype'] == 4): ?>a2<?php else: ?>a1<?php endif; ?>"><strong>高级</strong></a></div>
                </div>    
                <div style="width:6px; height:30px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/dg_right.gif); float:right"></div>        
            </div>
            <div style="width:200px; background-color:#FDFBED; border-left:1px solid #FF6700; border-right:1px solid #FF6700; border-bottom:1px solid #FF6700">
                <div style="width:100%; height:22px; border-bottom:1px dotted #CCCCCC; background-color:#F7F7F7; padding-top:5px; text-align:left; padding-left:15px">
                                                     当前导航：
                    <?php if ($this->_tpl_vars['cctype'] == '1'): ?>
                                                                全部图书导航
                    <?php elseif ($this->_tpl_vars['cctype'] == '2'): ?>
                                                                  初级入门类图书
                    <?php elseif ($this->_tpl_vars['cctype'] == '3'): ?>
                                                                  提高必备类图书
                    <?php elseif ($this->_tpl_vars['cctype'] == '4'): ?>
                                                                  高级导向类图书
                    <?php endif; ?>
                </div>
                <div style="width:50px; height:10px; font-size:0px"></div>
                <?php unset($this->_sections['bID']);
$this->_sections['bID']['name'] = 'bID';
$this->_sections['bID']['loop'] = is_array($_loop=$this->_tpl_vars['bigtypes']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['bID']['show'] = true;
$this->_sections['bID']['max'] = $this->_sections['bID']['loop'];
$this->_sections['bID']['step'] = 1;
$this->_sections['bID']['start'] = $this->_sections['bID']['step'] > 0 ? 0 : $this->_sections['bID']['loop']-1;
if ($this->_sections['bID']['show']) {
    $this->_sections['bID']['total'] = $this->_sections['bID']['loop'];
    if ($this->_sections['bID']['total'] == 0)
        $this->_sections['bID']['show'] = false;
} else
    $this->_sections['bID']['total'] = 0;
if ($this->_sections['bID']['show']):

            for ($this->_sections['bID']['index'] = $this->_sections['bID']['start'], $this->_sections['bID']['iteration'] = 1;
                 $this->_sections['bID']['iteration'] <= $this->_sections['bID']['total'];
                 $this->_sections['bID']['index'] += $this->_sections['bID']['step'], $this->_sections['bID']['iteration']++):
$this->_sections['bID']['rownum'] = $this->_sections['bID']['iteration'];
$this->_sections['bID']['index_prev'] = $this->_sections['bID']['index'] - $this->_sections['bID']['step'];
$this->_sections['bID']['index_next'] = $this->_sections['bID']['index'] + $this->_sections['bID']['step'];
$this->_sections['bID']['first']      = ($this->_sections['bID']['iteration'] == 1);
$this->_sections['bID']['last']       = ($this->_sections['bID']['iteration'] == $this->_sections['bID']['total']);
?>
                <div style="width:195px">
                    <div style="width:100%; height:25px; text-align:left; padding-left:6px; padding-top:5px; color:#990000">
                        ·&nbsp;<?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['bigtypes'][$this->_sections['bID']['index']]['typename']);?>

                    </div>
                
                    <div style="width:100%">
                        <?php unset($this->_sections['sID']);
$this->_sections['sID']['name'] = 'sID';
$this->_sections['sID']['loop'] = is_array($_loop=$this->_tpl_vars['smalltypes']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['sID']['show'] = true;
$this->_sections['sID']['max'] = $this->_sections['sID']['loop'];
$this->_sections['sID']['step'] = 1;
$this->_sections['sID']['start'] = $this->_sections['sID']['step'] > 0 ? 0 : $this->_sections['sID']['loop']-1;
if ($this->_sections['sID']['show']) {
    $this->_sections['sID']['total'] = $this->_sections['sID']['loop'];
    if ($this->_sections['sID']['total'] == 0)
        $this->_sections['sID']['show'] = false;
} else
    $this->_sections['sID']['total'] = 0;
if ($this->_sections['sID']['show']):

            for ($this->_sections['sID']['index'] = $this->_sections['sID']['start'], $this->_sections['sID']['iteration'] = 1;
                 $this->_sections['sID']['iteration'] <= $this->_sections['sID']['total'];
                 $this->_sections['sID']['index'] += $this->_sections['sID']['step'], $this->_sections['sID']['iteration']++):
$this->_sections['sID']['rownum'] = $this->_sections['sID']['iteration'];
$this->_sections['sID']['index_prev'] = $this->_sections['sID']['index'] - $this->_sections['sID']['step'];
$this->_sections['sID']['index_next'] = $this->_sections['sID']['index'] + $this->_sections['sID']['step'];
$this->_sections['sID']['first']      = ($this->_sections['sID']['iteration'] == 1);
$this->_sections['sID']['last']       = ($this->_sections['sID']['iteration'] == $this->_sections['sID']['total']);
?>
                        <?php if ($this->_tpl_vars['bigtypes'][$this->_sections['bID']['index']]['id'] == $this->_tpl_vars['smalltypes'][$this->_sections['sID']['index']]['bigtypeid']): ?>
                        <div style="width:49%; height:18px; float:left; text-align:left; padding-left:12px">
                            ·&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listbook-<?php echo $this->_tpl_vars['smalltypes'][$this->_sections['sID']['index']]['id']; ?>
-<?php if ($this->_tpl_vars['cctype'] == 1): ?>1<?php elseif ($this->_tpl_vars['cctype'] == 2): ?>2<?php elseif ($this->_tpl_vars['cctype'] == 3): ?>3<?php elseif ($this->_tpl_vars['cctype'] == 4): ?>4<?php endif; ?>.html" class="a4"><?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['smalltypes'][$this->_sections['sID']['index']]['typename']);?>
</a>
                        </div>
                        <?php endif; ?>    
                        <?php endfor; endif; ?>   
                    </div>
                
                </div>
                <?php endfor; endif; ?>
                <div style="width:50px; height:10px; font-size:0px"></div>
            </div>
            
            <div style="width:50px; height:7px; font-size:0px"></div>        
      
        </div>
        <!-- 中间 -->
        
        <div style="width:700px; height:100%; float:right">
            <div style="width: 100%; height:30px; text-align:left; padding-top:6px; border-bottom:1px solid #CCCCCC">
                                         当前位置：明日网上书店&nbsp;>>&nbsp;网上畅销书询 
            </div>  
            <br />
            <?php unset($this->_sections['tID']);
$this->_sections['tID']['name'] = 'tID';
$this->_sections['tID']['loop'] = is_array($_loop=$this->_tpl_vars['cxsxs']['data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tID']['show'] = true;
$this->_sections['tID']['max'] = $this->_sections['tID']['loop'];
$this->_sections['tID']['step'] = 1;
$this->_sections['tID']['start'] = $this->_sections['tID']['step'] > 0 ? 0 : $this->_sections['tID']['loop']-1;
if ($this->_sections['tID']['show']) {
    $this->_sections['tID']['total'] = $this->_sections['tID']['loop'];
    if ($this->_sections['tID']['total'] == 0)
        $this->_sections['tID']['show'] = false;
} else
    $this->_sections['tID']['total'] = 0;
if ($this->_sections['tID']['show']):

            for ($this->_sections['tID']['index'] = $this->_sections['tID']['start'], $this->_sections['tID']['iteration'] = 1;
                 $this->_sections['tID']['iteration'] <= $this->_sections['tID']['total'];
                 $this->_sections['tID']['index'] += $this->_sections['tID']['step'], $this->_sections['tID']['iteration']++):
$this->_sections['tID']['rownum'] = $this->_sections['tID']['iteration'];
$this->_sections['tID']['index_prev'] = $this->_sections['tID']['index'] - $this->_sections['tID']['step'];
$this->_sections['tID']['index_next'] = $this->_sections['tID']['index'] + $this->_sections['tID']['step'];
$this->_sections['tID']['first']      = ($this->_sections['tID']['iteration'] == 1);
$this->_sections['tID']['last']       = ($this->_sections['tID']['iteration'] == $this->_sections['tID']['total']);
?>
            <div style="width:90%; height:25px; border-bottom:1px dotted #333333; padding-top:5px">
                <li style="display:inline; width:80%; float:left; text-align:left"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/cxsxinfo-<?php echo $this->_tpl_vars['cxsxs']['data'][$this->_sections['tID']['index']]['id']; ?>
.html" class="a1">·<?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['cxsxs']['data'][$this->_sections['tID']['index']]['title']);?>
</a></li>
                <li style="display:inline; width:20%; float:right; text-align:right"><?php echo $this->_reg_objects['util'][0]->msubstr($this->_tpl_vars['cxsxs']['data'][$this->_sections['tID']['index']]['addtime'],0,10);?>
</li>
            </div>
            <?php endfor; endif; ?>
            <br />
            
            <div style="width:88%; text-align:left">
                <li style="display:inline; padding-left:20px">共有明日图书排行信息&nbsp;<?php echo $this->_tpl_vars['cxsxs']['countRs']; ?>
&nbsp;条&nbsp;&nbsp;每页显示&nbsp;<?php echo $this->_tpl_vars['cxsxs']['pageSize']; ?>
&nbsp;条&nbsp;&nbsp;第&nbsp;<?php echo $this->_tpl_vars['cxsxs']['page']; ?>
&nbsp;页/共&nbsp;<?php echo $this->_tpl_vars['cxsxs']['countPage']; ?>
&nbsp;页&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/cxsx-<?php echo $this->_tpl_vars['cxsxs']['first']; ?>
-<?php echo $this->_tpl_vars['cctype']; ?>
.html" class="a1">首页</a>&nbsp;
                <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/cxsx-<?php echo $this->_tpl_vars['cxsxs']['previous']; ?>
-<?php echo $this->_tpl_vars['cctype']; ?>
.html" class="a1">上一页</a>&nbsp;
                <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/cxsx-<?php echo $this->_tpl_vars['cxsxs']['next']; ?>
-<?php echo $this->_tpl_vars['cctype']; ?>
.html" class="a1">下一页</a>&nbsp;
                <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/cxsx-<?php echo $this->_tpl_vars['cxsxs']['last']; ?>
-<?php echo $this->_tpl_vars['cctype']; ?>
.html" class="a1">尾页</a>
                </li>  
            </div>
            
            
        </div>             
    </div>
</div>