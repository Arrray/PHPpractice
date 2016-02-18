<?php /* Smarty version 2.6.19, created on 2009-06-10 06:22:35
         compiled from bookinfo.phtml */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'bookinfo.phtml', 128, false),)), $this); ?>
<div style="width:950px; height:1000px; background-color:#FFFFFF">
    <div style="width:930px">
        <div style="width:200px; height:300px; float:left">
            <div style="width:200px; height:30px">
                <div style="width:6px; height:30px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/dg_left.gif); float:left"></div>
                <div style="width:188px; height:30px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/dg_center.gif); float:left; padding-top:5px">
                    <div style="width:45px; height:25px; float:left; padding-top:5px; <?php if ($this->_tpl_vars['cctype'] == 1): ?>background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/dg_button_bg.gif)<?php endif; ?>"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/bookinfo-1-<?php echo $this->_tpl_vars['bid']; ?>
.html" class="<?php if ($this->_tpl_vars['cctype'] == 1): ?>a2<?php else: ?>a1<?php endif; ?>"><strong>全部</strong></a></div>
                    
                    <div style="width:45px; height:25px;  float:left; padding-top:5px; <?php if ($this->_tpl_vars['cctype'] == 2): ?>background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/dg_button_bg.gif)<?php endif; ?>"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/bookinfo-2-<?php echo $this->_tpl_vars['bid']; ?>
.html" class="<?php if ($this->_tpl_vars['cctype'] == 2): ?>a2<?php else: ?>a1<?php endif; ?>"><strong>初级</strong></a></div>
                
                    <div style="width:45px; height:25px;  float:left; padding-top:5px; <?php if ($this->_tpl_vars['cctype'] == 3): ?>background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/dg_button_bg.gif)<?php endif; ?>"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/bookinfo-3-<?php echo $this->_tpl_vars['bid']; ?>
.html" class="<?php if ($this->_tpl_vars['cctype'] == 3): ?>a2<?php else: ?>a1<?php endif; ?>"><strong>中级</strong></a></div>
                    
                    <div style="width:45px; height:25px;  float:left; padding-top:5px; <?php if ($this->_tpl_vars['cctype'] == 4): ?>background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/dg_button_bg.gif)<?php endif; ?>"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/bookinfo-4-<?php echo $this->_tpl_vars['bid']; ?>
.html" class="<?php if ($this->_tpl_vars['cctype'] == 4): ?>a2<?php else: ?>a1<?php endif; ?>"><strong>高级</strong></a></div>
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

            <div style="width:200px;border:1px solid #FF6700">
                <div style="width:198px; height:25px; background-color:#F5F8FC; padding-top:6px; padding-left:20px; text-align:left; font-size:13px; border:1px solid #FFFFFF">
                    <strong>您所浏览过的图书</strong>
                </div>   
                
                <div style="width:50px; height:10px; font-size:0px"></div>
               <?php unset($this->_sections['bbID']);
$this->_sections['bbID']['name'] = 'bbID';
$this->_sections['bbID']['loop'] = is_array($_loop=$this->_tpl_vars['arrayBrowserBooks']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['bbID']['show'] = true;
$this->_sections['bbID']['max'] = $this->_sections['bbID']['loop'];
$this->_sections['bbID']['step'] = 1;
$this->_sections['bbID']['start'] = $this->_sections['bbID']['step'] > 0 ? 0 : $this->_sections['bbID']['loop']-1;
if ($this->_sections['bbID']['show']) {
    $this->_sections['bbID']['total'] = $this->_sections['bbID']['loop'];
    if ($this->_sections['bbID']['total'] == 0)
        $this->_sections['bbID']['show'] = false;
} else
    $this->_sections['bbID']['total'] = 0;
if ($this->_sections['bbID']['show']):

            for ($this->_sections['bbID']['index'] = $this->_sections['bbID']['start'], $this->_sections['bbID']['iteration'] = 1;
                 $this->_sections['bbID']['iteration'] <= $this->_sections['bbID']['total'];
                 $this->_sections['bbID']['index'] += $this->_sections['bbID']['step'], $this->_sections['bbID']['iteration']++):
$this->_sections['bbID']['rownum'] = $this->_sections['bbID']['iteration'];
$this->_sections['bbID']['index_prev'] = $this->_sections['bbID']['index'] - $this->_sections['bbID']['step'];
$this->_sections['bbID']['index_next'] = $this->_sections['bbID']['index'] + $this->_sections['bbID']['step'];
$this->_sections['bbID']['first']      = ($this->_sections['bbID']['iteration'] == 1);
$this->_sections['bbID']['last']       = ($this->_sections['bbID']['iteration'] == $this->_sections['bbID']['total']);
?>
                <div style="width:98%; height:60px; border-top:1px dotted #CCCCCC">
                    <div style="width:30%; height:60px; float:left; padding-top:3px"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/bookinfo-<?php echo $this->_tpl_vars['arrayBrowserBooks'][$this->_sections['bbID']['index']]['0']['id']; ?>
.html"><img src="<?php echo $this->_tpl_vars['system'][0]['bookimgurl']; ?>
/<?php echo $this->_tpl_vars['arrayBrowserBooks'][$this->_sections['bbID']['index']]['0']['bookimg']; ?>
" width="36" height="48" style="border: 1px solid #123456"/></a></div> 
                    <div style="width:68%; height:60px; float:right; text-align:left; padding-top:15px"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/bookinfo-<?php echo $this->_tpl_vars['arrayBrowserBooks'][$this->_sections['bbID']['index']]['0']['id']; ?>
.html" class="a1"><strong><?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['arrayBrowserBooks'][$this->_sections['bbID']['index']]['0']['bookname']);?>
</strong></a></div>    
                </div>   
               <?php endfor; endif; ?> 
             </div>
            
            
            
        </div>
        <!-- 中间 -->
        
        <div style="width:700px; height:100%; float:right">
            <div style="width: 100%; height:30px; text-align:left; padding-top:5px; border-bottom:1px solid #CCCCCC">
                                         当前位置：明日网上书店&nbsp;>>&nbsp;图书详细信息&nbsp;>>&nbsp;<?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['bookinfo'][0]['bookname']);?>

            </div>  
            
            <div style="width:100%">
                <div style="width:220px; height:100%; float:left">
                    <br>
                    <img src="<?php echo $this->_tpl_vars['system'][0]['bookimgurl']; ?>
/<?php echo $this->_tpl_vars['bookinfo'][0]['bookimg']; ?>
" width="115" height="160" style="border:1px solid #123456" />
                    <br><br>
                    <li style="display:inline; width:17px; height:15px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/mark_lookbigimg.gif); font-size:0px"></li>
                    <li style="display:inline">&nbsp;&nbsp;点击查看大图</li>
                </div>
                
                <div style="width:480px; height:100%; float:left; text-align:left; font-size:13px; line-height:28px">
                    <br>
                    <strong><font color="#003399">书名：<?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['bookinfo'][0]['bookname']);?>
</font></strong>
                    <br>
                    <li style="display:inline; width:48%"><font color="#003399">出版社：</font><?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['bookinfo'][0]['pubname']);?>
</li>
                    <li style="display:inline; width:48%"><font color="#003399">页数：</font><?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['bookinfo'][0]['page']);?>
（页）</li>
                    <li style="display:inline; width:48%"><font color="#003399">ISBN：</font><?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['bookinfo'][0]['isbn']);?>
</li>
                    <li style="display:inline; width:48%"><font color="#003399">字数：</font><?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['bookinfo'][0]['zs']);?>
（千字）</li>
                    <li style="display:inline; width:48%"><font color="#003399">出版时间：</font><?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['bookinfo'][0]['pubtime']);?>
</li>
                    <li style="display:inline; width:48%"><font color="#003399">印刷版次：</font><?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['bookinfo'][0]['bc']);?>
</li>
                    <li style="display:inline; width:48%"><font color="#003399">作者：</font><?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['bookinfo'][0]['writer']);?>
</li>
                    <li style="display:inline; width:48%"><font color="#003399">图书类别：</font><?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['bookinfo'][0]['typename']);?>
</li>
                    <li style="display:inline; width:100%"><font color="#003399">图书层次：</font><?php if ($this->_tpl_vars['bookinfo'][0]['bookcc'] == 1): ?>初级入门<?php elseif ($this->_tpl_vars['bookinfo'][0]['bookcc'] == 2): ?>提高必备<?php elseif ($this->_tpl_vars['bookinfo'][0]['bookcc'] == 3): ?>高级导向<?php endif; ?></li>
              
                    <div style="padding-left:6px; padding-top:10px; font-size:14px"><strong>·市场价：<img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/mark_green.gif" />&nbsp;<s><?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['bookinfo'][0]['oldprice']);?>
</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <font color="#FF0000">·会员价：<img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/mark_red.gif" />&nbsp;<?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['bookinfo'][0]['newprice']);?>
</font>   </strong>       
                    </div> 
                    <div style="width:100%; padding-top:10px"><a href="cart-<?php echo $this->_tpl_vars['bookinfo'][0]['bid']; ?>
-add.html"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_incart.gif" border="0" /></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php if ($this->_tpl_vars['isRead'] == 'T'): ?><?php echo $this->_tpl_vars['system'][0]['readurl']; ?>
/download.php?rid=<?php echo $this->_tpl_vars['sdinfo'][0]['id']; ?>
&filename=<?php echo $this->_tpl_vars['sdinfo'][0]['filename']; ?>
<?php else: ?>javascript:alert('该书暂未提供试读！');<?php endif; ?>"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_readdown.gif" border="0" /></a></div>
                </div>
                <hr style="width:95%; height:1px; border:1px dotted #CCCCCC"/>
                <div style="width:93%; height:33px">
                    <div id="tab_bg" style="width:350px; height:33px; float:left; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/n_bg1.gif)">
                        <div id="b_about" style="width:155px; height:30px; float:left; padding-top:13px; color:#003399" onmouseover="changeTab1(about, directory, b_directory, b_about, '<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/n_bg1.gif')">内容简介</div>
                        <div id="b_directory" style="width:155px; height:30px; float:left; padding-top:13px; color:#333333"  onmouseover="changeTab1(directory, about, b_about, b_directory, '<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/n_bg2.gif')">图书目录</div>
                    </div>
                </div>
                <div id="about" style="display:; width:90%; height:220px; text-align:left; line-height:18px; padding-top:10px; font-size:13px; overflow-y:auto">
                    <?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['bookinfo'][0]['about']);?>

                </div>
                <div id="directory" style="display:none ;width:90%; height:220px; text-align:left; line-height:18px; padding-top:10px; font-size:13px; overflow-y:auto;" ondblclick="">
                    <?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['bookinfo'][0]['directory']);?>

                </div>               
                <hr style="width:95%; height:1px; border:1px dotted #CCCCCC"/>
                
                <div style="width:95%; height:25px; text-align:left">
                    <strong>·推荐组合购买</strong>
                </div>
                
                <div style="width:95%; height:150px">
                    <div style="width:150px; height:100%; float:left; padding-top:7px">
                        <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/bookinfo-<?php echo $this->_tpl_vars['bookinfo'][0]['bid']; ?>
.html"><img src="<?php echo $this->_tpl_vars['system'][0]['bookimgurl']; ?>
/<?php echo $this->_tpl_vars['bookinfo'][0]['bookimg']; ?>
" width="90" height="110" style="border:1px solid #333333" /></a><br /><br />
                        <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/bookinfo-<?php echo $this->_tpl_vars['bookinfo'][0]['bid']; ?>
.html" class="a1" title="<?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['bookinfo'][0]['bookname']);?>
"><?php echo $this->_reg_objects['util'][0]->unHtml(((is_array($_tmp=$this->_tpl_vars['bookinfo'][0]['bookname'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 22, "..", false) : smarty_modifier_truncate($_tmp, 22, "..", false)));?>
</a>
                    </div> 
                    <div style="width:20px; height:100%; float:left; padding-top:60px; padding-right:30px">
                        <img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/mark_jia.gif" width="14" height="14"  />
                    </div>                      
                    <?php unset($this->_sections['zhbID']);
$this->_sections['zhbID']['name'] = 'zhbID';
$this->_sections['zhbID']['loop'] = is_array($_loop=$this->_tpl_vars['arrayZhBooks']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['zhbID']['show'] = true;
$this->_sections['zhbID']['max'] = $this->_sections['zhbID']['loop'];
$this->_sections['zhbID']['step'] = 1;
$this->_sections['zhbID']['start'] = $this->_sections['zhbID']['step'] > 0 ? 0 : $this->_sections['zhbID']['loop']-1;
if ($this->_sections['zhbID']['show']) {
    $this->_sections['zhbID']['total'] = $this->_sections['zhbID']['loop'];
    if ($this->_sections['zhbID']['total'] == 0)
        $this->_sections['zhbID']['show'] = false;
} else
    $this->_sections['zhbID']['total'] = 0;
if ($this->_sections['zhbID']['show']):

            for ($this->_sections['zhbID']['index'] = $this->_sections['zhbID']['start'], $this->_sections['zhbID']['iteration'] = 1;
                 $this->_sections['zhbID']['iteration'] <= $this->_sections['zhbID']['total'];
                 $this->_sections['zhbID']['index'] += $this->_sections['zhbID']['step'], $this->_sections['zhbID']['iteration']++):
$this->_sections['zhbID']['rownum'] = $this->_sections['zhbID']['iteration'];
$this->_sections['zhbID']['index_prev'] = $this->_sections['zhbID']['index'] - $this->_sections['zhbID']['step'];
$this->_sections['zhbID']['index_next'] = $this->_sections['zhbID']['index'] + $this->_sections['zhbID']['step'];
$this->_sections['zhbID']['first']      = ($this->_sections['zhbID']['iteration'] == 1);
$this->_sections['zhbID']['last']       = ($this->_sections['zhbID']['iteration'] == $this->_sections['zhbID']['total']);
?>
                    <div style="width:150px; height:100%; float:left; background-color:#F5F8FC; padding-top:7px">
                        <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/bookinfo-<?php echo $this->_tpl_vars['arrayZhBooks'][$this->_sections['zhbID']['index']]['0']['id']; ?>
.html"><img src="<?php echo $this->_tpl_vars['system'][0]['bookimgurl']; ?>
/<?php echo $this->_tpl_vars['arrayZhBooks'][$this->_sections['zhbID']['index']]['0']['bookimg']; ?>
" width="90" height="110" style="border:1px solid #333333" /></a><br /><br />
                        <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/bookinfo-<?php echo $this->_tpl_vars['arrayZhBooks'][$this->_sections['zhbID']['index']]['0']['id']; ?>
.html" class="a1" title="<?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['arrayZhBooks'][$this->_sections['zhbID']['index']]['0']['bookname']);?>
"><?php echo $this->_reg_objects['util'][0]->unHtml(((is_array($_tmp=$this->_tpl_vars['arrayZhBooks'][$this->_sections['zhbID']['index']]['0']['bookname'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "..", false) : smarty_modifier_truncate($_tmp, 20, "..", false)));?>
</a>
                    </div>
                    <?php endfor; endif; ?>
                </div> 
                
                <div style="width:95%; height:25px; text-align:left; text-align:right; padding-top:6px; padding-right:20px">
                    <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/cart-<?php echo $this->_tpl_vars['zhIDs']; ?>
-gAdd.html"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_incargrp.gif" border="0" /></a>
                </div>
                                 
                <hr style="width:95%; height:1px; border:1px dotted #CCCCCC"/>
                <div style="width:95%; height:25px; text-align:left">
                    <li style="display:inline; float:left"><strong>·用户评论</strong></li>
                    <li style="display:inline; float:right; padding-right:20px">共有评论&nbsp;<?php echo $this->_tpl_vars['totalpl']; ?>
&nbsp;条</li>
                </div>
                <?php unset($this->_sections['bpID']);
$this->_sections['bpID']['name'] = 'bpID';
$this->_sections['bpID']['loop'] = is_array($_loop=$this->_tpl_vars['pls']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['bpID']['show'] = true;
$this->_sections['bpID']['max'] = $this->_sections['bpID']['loop'];
$this->_sections['bpID']['step'] = 1;
$this->_sections['bpID']['start'] = $this->_sections['bpID']['step'] > 0 ? 0 : $this->_sections['bpID']['loop']-1;
if ($this->_sections['bpID']['show']) {
    $this->_sections['bpID']['total'] = $this->_sections['bpID']['loop'];
    if ($this->_sections['bpID']['total'] == 0)
        $this->_sections['bpID']['show'] = false;
} else
    $this->_sections['bpID']['total'] = 0;
if ($this->_sections['bpID']['show']):

            for ($this->_sections['bpID']['index'] = $this->_sections['bpID']['start'], $this->_sections['bpID']['iteration'] = 1;
                 $this->_sections['bpID']['iteration'] <= $this->_sections['bpID']['total'];
                 $this->_sections['bpID']['index'] += $this->_sections['bpID']['step'], $this->_sections['bpID']['iteration']++):
$this->_sections['bpID']['rownum'] = $this->_sections['bpID']['iteration'];
$this->_sections['bpID']['index_prev'] = $this->_sections['bpID']['index'] - $this->_sections['bpID']['step'];
$this->_sections['bpID']['index_next'] = $this->_sections['bpID']['index'] + $this->_sections['bpID']['step'];
$this->_sections['bpID']['first']      = ($this->_sections['bpID']['iteration'] == 1);
$this->_sections['bpID']['last']       = ($this->_sections['bpID']['iteration'] == $this->_sections['bpID']['total']);
?>
                <div style="width:95%; height:22px; text-align:left; border-top:1px solid #CCCCCC; background-color:#EFF3F7; padding-top:4px; padding-left:15px">
                    <li style="display: inline; width:40%"><font color="#0328C1">作者：<?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['pls'][$this->_sections['bpID']['index']]['usernc']);?>
</font></li>
                    <li style="display: inline; width:35%"><font color="#0328C1">发表时间：<?php echo $this->_tpl_vars['pls'][$this->_sections['bpID']['index']]['addtime']; ?>
</font></li>
                    <li style="display: inline; width:20%"><font color="#0328C1"><font color="#0328C1">IP：<?php echo $this->_tpl_vars['pls'][$this->_sections['bpID']['index']]['ip']; ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if ($this->_tpl_vars['isAdmin'] == 'T'): ?>[<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/bookinfo-<?php echo $this->_tpl_vars['cctype']; ?>
-<?php echo $this->_tpl_vars['bid']; ?>
-<?php echo $this->_tpl_vars['pls'][$this->_sections['bpID']['index']]['id']; ?>
.html" class="a1">删除</a>]<?php endif; ?></font></li>
                </div> 
                <div style="width:95%; height:40px; text-align:left; line-height:22px; padding:10px">
                    <?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['pls'][$this->_sections['bpID']['index']]['content']);?>
                               
                </div> 
                <?php endfor; endif; ?>
                <br />                 
                 <form name="form_pl" method="post" action="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/bookinfo.html" onsubmit="return chkinputpl(this)">              
                <div style="width:95%; height:50px; text-align:left">
                <font color="#990000"> 评论内容：</font><br/><br/>
                <textarea name="content" cols="80" rows="6" class="input2"></textarea><br/><br/>
                <input type="submit" value="提交" />&nbsp;&nbsp;<input type="reset" value="重置" />
                <br/><br/>                                  
                </div> 
                <input type="hidden" name="bid" value="<?php echo $this->_tpl_vars['bid']; ?>
" /><input type="hidden" name="cctype" value="<?php echo $this->_tpl_vars['cctype']; ?>
" />                                
                </form>
                             
                
            </div>
            
            
            
        </div>             
    </div>
</div>