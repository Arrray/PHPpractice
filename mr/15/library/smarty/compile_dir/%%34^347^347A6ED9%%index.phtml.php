<?php /* Smarty version 2.6.19, created on 2010-05-05 08:03:11
         compiled from index.phtml */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'index.phtml', 80, false),)), $this); ?>
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
/index-1.html" class="<?php if ($this->_tpl_vars['cctype'] == 1): ?>a2<?php else: ?>a1<?php endif; ?>"><strong>全部</strong></a></div>
                    
                    <div style="width:45px; height:25px;  float:left; padding-top:5px; <?php if ($this->_tpl_vars['cctype'] == 2): ?>background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/dg_button_bg.gif)<?php endif; ?>"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/index-2.html" class="<?php if ($this->_tpl_vars['cctype'] == 2): ?>a2<?php else: ?>a1<?php endif; ?>"><strong>初级</strong></a></div>
                
                    <div style="width:45px; height:25px;  float:left; padding-top:5px; <?php if ($this->_tpl_vars['cctype'] == 3): ?>background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/dg_button_bg.gif)<?php endif; ?>"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/index-3.html" class="<?php if ($this->_tpl_vars['cctype'] == 3): ?>a2<?php else: ?>a1<?php endif; ?>"><strong>中级</strong></a></div>
                    
                    <div style="width:45px; height:25px;  float:left; padding-top:5px; <?php if ($this->_tpl_vars['cctype'] == 4): ?>background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/dg_button_bg.gif)<?php endif; ?>"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/index-4.html" class="<?php if ($this->_tpl_vars['cctype'] == 4): ?>a2<?php else: ?>a1<?php endif; ?>"><strong>高级</strong></a></div>
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
            <div><a href="http://www.mrbccd.com" target="_blank"><img src="<?php echo $this->_tpl_vars['system'][0]['ggurl']; ?>
/gg_left.gif" width="200" height="88" border="0"/></a></div>
            <div style="width:50px; height:7px; font-size:0px"></div>
       
            <div style="width:200px;border:1px solid #FF6700">
                <div style="width:198px; height:25px; background-color:#F5F8FC; padding-top:6px; padding-left:20px; text-align:left; font-size:13px; border:1px solid #FFFFFF">
                    <strong>试读下载</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listreadbook.html" class="a5">more</a>
                </div>   
                
                <div style="width:50px; height:10px; font-size:0px"></div>
                <?php unset($this->_sections['rID']);
$this->_sections['rID']['name'] = 'rID';
$this->_sections['rID']['loop'] = is_array($_loop=$this->_tpl_vars['reads']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                <div style="width:198px; padding-bottom:7px">
                    <div style="width:100%; height:90px">
                        <div style="width:85px; height:100px; float:left">
                            <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/bookinfo-<?php echo $this->_tpl_vars['reads'][$this->_sections['rID']['index']]['bookid']; ?>
.html"><img src="<?php echo $this->_tpl_vars['system'][0]['bookimgurl']; ?>
/<?php echo $this->_tpl_vars['reads'][$this->_sections['rID']['index']]['bookimg']; ?>
" width="70" height="90"  style="border:1px solid #123456" /></a>
                        </div>
                        <div style="width:112px; height:100px; float:right; text-align:left">
                            <li style="display:inline; height:35px"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/bookinfo-<?php echo $this->_tpl_vars['reads'][$this->_sections['rID']['index']]['bookid']; ?>
.html" class="a6">·<?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['reads'][$this->_sections['rID']['index']]['bookname']);?>
</a></li>
                            <li style="display:inline; line-height:20px">
                                <br />                                             
                                                                                     市场价：&nbsp;<s><?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['reads'][$this->_sections['rID']['index']]['oldprice']);?>
&nbsp;元</s><br>
                                <font color="#FF0000">明日价：&nbsp;<?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['reads'][$this->_sections['rID']['index']]['newprice']);?>
&nbsp;元</font>
                                <br />
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['system'][0]['readurl']; ?>
/download.php?rid=<?php echo $this->_tpl_vars['reads'][$this->_sections['rID']['index']]['readid']; ?>
&filename=<?php echo $this->_tpl_vars['reads'][$this->_sections['rID']['index']]['filename']; ?>
" class="a3"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_sd.gif" border="0"></a>
                            </li>
                        </div>
                    </div>
                    <div style="width:100%; height:30px; text-align:left; padding:3px">
                        <?php echo $this->_reg_objects['util'][0]->unHtml(((is_array($_tmp=$this->_tpl_vars['reads'][$this->_sections['rID']['index']]['about'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 88, "...", false) : smarty_modifier_truncate($_tmp, 88, "...", false)));?>

                    </div>
                </div>
                <?php endfor; endif; ?>
             </div>

            <div style="width:50px; height:7px; font-size:0px"></div>        
       
            <div style="width:200px;border:1px solid #FF6700">
                <div style="width:198px; height:25px; background-color:#FDFBED; padding-top:6px; padding-left:20px; text-align:left; font-size:13px; border:1px solid #FFFFFF">
                    <strong>期书介绍</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listsepbook-term.html" class="a5">more</a>
                </div>   
                
                <div style="width:50px; height:10px; font-size:0px"></div>
                <?php unset($this->_sections['tID']);
$this->_sections['tID']['name'] = 'tID';
$this->_sections['tID']['loop'] = is_array($_loop=$this->_tpl_vars['terms']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                <div style="width:198px">
                    <div style="width:100%; height:90px">
                        <div style="width:85px; height:100px; float:left">
                            <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/bookinfo-<?php echo $this->_tpl_vars['terms'][$this->_sections['tID']['index']]['id']; ?>
.html" ><img src="<?php echo $this->_tpl_vars['system'][0]['bookimgurl']; ?>
/<?php echo $this->_tpl_vars['terms'][$this->_sections['tID']['index']]['bookimg']; ?>
" width="70" height="90" style="border:1px solid #123456" /></a>
                        </div>
                        <div style="width:112px; height:100px; float:right; text-align:left">
                            <li style="display:inline; height:35px"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/bookinfo-<?php echo $this->_tpl_vars['terms'][$this->_sections['tID']['index']]['id']; ?>
.html" class="a6">·<?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['terms'][$this->_sections['tID']['index']]['bookname']);?>
</a></li>
                            <li style="display:inline">·<?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['terms'][$this->_sections['tID']['index']]['pubname']);?>
出版</li>
                            <li style="display:inline; float:right; padding-right:10px"><br /><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/bookinfo-<?php echo $this->_tpl_vars['terms'][$this->_sections['tID']['index']]['id']; ?>
.html"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_xxinfo.gif" border="0"></a></li>
                        </div>
                    </div>
                    <div style="width:100%; height:30px; text-align:left; padding:3px">
                        <?php echo $this->_reg_objects['util'][0]->unHtml(((is_array($_tmp=$this->_tpl_vars['terms'][$this->_sections['tID']['index']]['about'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 88, "...", false) : smarty_modifier_truncate($_tmp, 88, "...", false)));?>

                    </div>
                    <br>
                </div>
                <?php endfor; endif; ?>
             </div> 
            
            
            
        </div>
        <!-- 中间 -->
        <div style="width:7px; height:100%; font-size:0px; float:left"></div>
        
        <div style="width:530px; height:500px; float:left">
            <div style="width:515; height:150px font-size:0px; text-align:center">        
                <!-- 页面代码 -->
                <script language="javascript">
                //广告宽度
                var w = "515px";
                //广告高度
                var h = "150px";
                //广告背景色
                var bg = "#99CCFF"; 
                //图片地址
                var imgSrc = new Array;
                imgSrc[0] = '<?php echo $this->_tpl_vars['system'][0]['ggurl']; ?>
/banner_0.jpg';
                imgSrc[1] = '<?php echo $this->_tpl_vars['system'][0]['ggurl']; ?>
/banner_1.jpg';
                imgSrc[2] = '<?php echo $this->_tpl_vars['system'][0]['ggurl']; ?>
/banner_2.jpg';
//                imgSrc[3] = '<?php echo $this->_tpl_vars['system'][0]['ggurl']; ?>
/banner_3.jpg';
//                imgSrc[3] = '<?php echo $this->_tpl_vars['system'][0]['ggurl']; ?>
/banner_4.jpg';
                //图片链接地址
                var imgLink = new Array;
                imgLink[0] = 'http://www.mrbooks.cn';
                imgLink[1] = 'http://www.mrbccd.com';
                imgLink[2] = 'http://www.mrbooks.cn/listsepbook-sepprice.html';
//                imgLink[3] = 'booksjs.php?stypeid=12';
//                imgLink[4] = 'booksjs.php?stypeid=12';
                //图片链接提示文字
                var imgLinkTitle = new Array;
                imgLinkTitle[0] = '明日电脑书城';
                imgLinkTitle[1] = '编程词典';
                imgLinkTitle[2] = '优惠购书';
//                imgLinkTitle[3] = '从人门到精通';
//                imgLinkTitle[4] = '从人门到精通';
                 </script>
                 <!-- 包含js端 -->
                <script language="javascript" src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/js/lzhScrollImg.js"></script>
            </div>
            
            <div style="width:50px; height:6px; font-size:0px"></div>
            <div style="width:515px; height:35"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/title1.gif" usemap="#Map1" border="0" />
                <map name="Map1" id="Map1">
                    <area shape="rect" coords="465,7,520,25" href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listsepbook-new.html" />
                </map>
            </div>
            <div style="width:50px; height:6px; font-size:0px"></div>
            <div style="width:515px">
            <?php unset($this->_sections['nbID']);
$this->_sections['nbID']['name'] = 'nbID';
$this->_sections['nbID']['loop'] = is_array($_loop=$this->_tpl_vars['newBookinfos']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['nbID']['show'] = true;
$this->_sections['nbID']['max'] = $this->_sections['nbID']['loop'];
$this->_sections['nbID']['step'] = 1;
$this->_sections['nbID']['start'] = $this->_sections['nbID']['step'] > 0 ? 0 : $this->_sections['nbID']['loop']-1;
if ($this->_sections['nbID']['show']) {
    $this->_sections['nbID']['total'] = $this->_sections['nbID']['loop'];
    if ($this->_sections['nbID']['total'] == 0)
        $this->_sections['nbID']['show'] = false;
} else
    $this->_sections['nbID']['total'] = 0;
if ($this->_sections['nbID']['show']):

            for ($this->_sections['nbID']['index'] = $this->_sections['nbID']['start'], $this->_sections['nbID']['iteration'] = 1;
                 $this->_sections['nbID']['iteration'] <= $this->_sections['nbID']['total'];
                 $this->_sections['nbID']['index'] += $this->_sections['nbID']['step'], $this->_sections['nbID']['iteration']++):
$this->_sections['nbID']['rownum'] = $this->_sections['nbID']['iteration'];
$this->_sections['nbID']['index_prev'] = $this->_sections['nbID']['index'] - $this->_sections['nbID']['step'];
$this->_sections['nbID']['index_next'] = $this->_sections['nbID']['index'] + $this->_sections['nbID']['step'];
$this->_sections['nbID']['first']      = ($this->_sections['nbID']['iteration'] == 1);
$this->_sections['nbID']['last']       = ($this->_sections['nbID']['iteration'] == $this->_sections['nbID']['total']);
?>
            <div style="width:33%; height:220px; float:left; line-height:25px">

                <li style="display:inline"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/bookinfo-<?php echo $this->_tpl_vars['newBookinfos'][$this->_sections['nbID']['index']]['id']; ?>
.html"><img src="<?php echo $this->_tpl_vars['system'][0]['bookimgurl']; ?>
/<?php echo $this->_tpl_vars['newBookinfos'][$this->_sections['nbID']['index']]['bookimg']; ?>
" width="100" height="125" style="border:1px solid #123456" /></a></li>
                <br>
                <li style="display:inline"><strong><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/bookinfo-<?php echo $this->_tpl_vars['newBookinfos'][$this->_sections['nbID']['index']]['id']; ?>
.html" class="a1" title="<?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['newBookinfos'][$this->_sections['nbID']['index']]['bookname']);?>
"><?php echo $this->_reg_objects['util'][0]->unHtml(((is_array($_tmp=$this->_tpl_vars['newBookinfos'][$this->_sections['nbID']['index']]['bookname'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "..", false) : smarty_modifier_truncate($_tmp, 20, "..", false)));?>
</a></strong></li>
                <br>               
                <li style="display:inline">
                                                 市场价：<img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/mark_green.gif" />&nbsp;<s><?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['newBookinfos'][$this->_sections['nbID']['index']]['oldprice']);?>
</s><br>
                <font color="#FF0000">明日价：<img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/mark_red.gif" />&nbsp;<?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['newBookinfos'][$this->_sections['nbID']['index']]['newprice']);?>
</font>
                
                </li>
                <br>
                <li style="display:inline"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/cart-<?php echo $this->_tpl_vars['newBookinfos'][$this->_sections['nbID']['index']]['id']; ?>
-add.html"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_order.gif" border="0"/></a>&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/bookinfo-<?php echo $this->_tpl_vars['newBookinfos'][$this->_sections['nbID']['index']]['id']; ?>
.html"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_info.gif" border="0"/></a></li>
            </div>
            <?php endfor; endif; ?>
            </div>
            
	        <div style="width:515px; height:37"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/title2.gif" usemap="#Map2" border="0"/>
                <map name="Map2" id="Map2">
                    <area shape="rect" coords="465,7,520,25" href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listsepbook-sepprice.html" />
                </map>	        
	        </div>
	        <div style="width:50px; height:6px; font-size:0px"></div>        
	        <div style="width:515px">
	            <?php unset($this->_sections['sepbID']);
$this->_sections['sepbID']['name'] = 'sepbID';
$this->_sections['sepbID']['loop'] = is_array($_loop=$this->_tpl_vars['sepBookinfos']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['sepbID']['show'] = true;
$this->_sections['sepbID']['max'] = $this->_sections['sepbID']['loop'];
$this->_sections['sepbID']['step'] = 1;
$this->_sections['sepbID']['start'] = $this->_sections['sepbID']['step'] > 0 ? 0 : $this->_sections['sepbID']['loop']-1;
if ($this->_sections['sepbID']['show']) {
    $this->_sections['sepbID']['total'] = $this->_sections['sepbID']['loop'];
    if ($this->_sections['sepbID']['total'] == 0)
        $this->_sections['sepbID']['show'] = false;
} else
    $this->_sections['sepbID']['total'] = 0;
if ($this->_sections['sepbID']['show']):

            for ($this->_sections['sepbID']['index'] = $this->_sections['sepbID']['start'], $this->_sections['sepbID']['iteration'] = 1;
                 $this->_sections['sepbID']['iteration'] <= $this->_sections['sepbID']['total'];
                 $this->_sections['sepbID']['index'] += $this->_sections['sepbID']['step'], $this->_sections['sepbID']['iteration']++):
$this->_sections['sepbID']['rownum'] = $this->_sections['sepbID']['iteration'];
$this->_sections['sepbID']['index_prev'] = $this->_sections['sepbID']['index'] - $this->_sections['sepbID']['step'];
$this->_sections['sepbID']['index_next'] = $this->_sections['sepbID']['index'] + $this->_sections['sepbID']['step'];
$this->_sections['sepbID']['first']      = ($this->_sections['sepbID']['iteration'] == 1);
$this->_sections['sepbID']['last']       = ($this->_sections['sepbID']['iteration'] == $this->_sections['sepbID']['total']);
?>
	            <div style="width:33%; height:220px; float:left; line-height:25px">
	
	                <li style="display:inline"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/bookinfo-<?php echo $this->_tpl_vars['sepBookinfos'][$this->_sections['sepbID']['index']]['id']; ?>
.html"><img src="<?php echo $this->_tpl_vars['system'][0]['bookimgurl']; ?>
/<?php echo $this->_tpl_vars['sepBookinfos'][$this->_sections['sepbID']['index']]['bookimg']; ?>
" width="100" height="125" style="border:1px solid #123456" /></a></li>
	                <br>
	                <li style="display:inline"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/bookinfo-<?php echo $this->_tpl_vars['sepBookinfos'][$this->_sections['sepbID']['index']]['id']; ?>
.html" class="a1" title="<?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['sepBookinfos'][$this->_sections['sepbID']['index']]['bookname']);?>
"><strong><?php echo $this->_reg_objects['util'][0]->unHtml(((is_array($_tmp=$this->_tpl_vars['sepBookinfos'][$this->_sections['sepbID']['index']]['bookname'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "..", false) : smarty_modifier_truncate($_tmp, 20, "..", false)));?>
</strong></a></li>
	                <br>               
	                <li style="display:inline">
	                                               市场价：<img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/mark_green.gif" />&nbsp;<s><?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['sepBookinfos'][$this->_sections['sepbID']['index']]['oldprice']);?>
</s><br>
	                  <font color="#FF0000">明日价：<img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/mark_red.gif" />&nbsp;<?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['sepBookinfos'][$this->_sections['sepbID']['index']]['newprice']);?>
</font>
	                    
	                </li>
	                <br>
	                <li style="display:inline"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/cart-<?php echo $this->_tpl_vars['sepBookinfos'][$this->_sections['sepbID']['index']]['id']; ?>
-add.html"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_order.gif" border="0"/></a>&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/bookinfo-<?php echo $this->_tpl_vars['sepBookinfos'][$this->_sections['sepbID']['index']]['id']; ?>
.html"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_info.gif" border="0"/></a></li>
	            </div>
	            <?php endfor; endif; ?>
	        </div>             

	        <div style="width:515px; height:35"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/title3.gif" usemap="#Map3" border="0"/>
                <map name="Map3" id="Map3">
                    <area shape="rect" coords="465,7,520,25" href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listsepbook-hotsell.html" />
                </map>	        
	        </div>
	        <div style="width:50px; height:6px; font-size:0px"></div>        
	        <div style="width:515px">
	            <?php unset($this->_sections['hotID']);
$this->_sections['hotID']['name'] = 'hotID';
$this->_sections['hotID']['loop'] = is_array($_loop=$this->_tpl_vars['hotSellBookinfos']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['hotID']['show'] = true;
$this->_sections['hotID']['max'] = $this->_sections['hotID']['loop'];
$this->_sections['hotID']['step'] = 1;
$this->_sections['hotID']['start'] = $this->_sections['hotID']['step'] > 0 ? 0 : $this->_sections['hotID']['loop']-1;
if ($this->_sections['hotID']['show']) {
    $this->_sections['hotID']['total'] = $this->_sections['hotID']['loop'];
    if ($this->_sections['hotID']['total'] == 0)
        $this->_sections['hotID']['show'] = false;
} else
    $this->_sections['hotID']['total'] = 0;
if ($this->_sections['hotID']['show']):

            for ($this->_sections['hotID']['index'] = $this->_sections['hotID']['start'], $this->_sections['hotID']['iteration'] = 1;
                 $this->_sections['hotID']['iteration'] <= $this->_sections['hotID']['total'];
                 $this->_sections['hotID']['index'] += $this->_sections['hotID']['step'], $this->_sections['hotID']['iteration']++):
$this->_sections['hotID']['rownum'] = $this->_sections['hotID']['iteration'];
$this->_sections['hotID']['index_prev'] = $this->_sections['hotID']['index'] - $this->_sections['hotID']['step'];
$this->_sections['hotID']['index_next'] = $this->_sections['hotID']['index'] + $this->_sections['hotID']['step'];
$this->_sections['hotID']['first']      = ($this->_sections['hotID']['iteration'] == 1);
$this->_sections['hotID']['last']       = ($this->_sections['hotID']['iteration'] == $this->_sections['hotID']['total']);
?>
	            <div style="width:33%; height:220px; float:left; line-height:25px">
	
	                <li style="display:inline"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/bookinfo-<?php echo $this->_tpl_vars['hotSellBookinfos'][$this->_sections['hotID']['index']]['id']; ?>
.html"><img src="<?php echo $this->_tpl_vars['system'][0]['bookimgurl']; ?>
/<?php echo $this->_tpl_vars['hotSellBookinfos'][$this->_sections['hotID']['index']]['bookimg']; ?>
" width="100" height="125" style="border:1px solid #123456" /></a></li>
	                <br>
	                <li style="display:inline"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/bookinfo-<?php echo $this->_tpl_vars['hotSellBookinfos'][$this->_sections['hotID']['index']]['id']; ?>
.html" class="a1" title="<?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['hotSellBookinfos'][$this->_sections['hotID']['index']]['bookname']);?>
"><strong><?php echo $this->_reg_objects['util'][0]->unHtml(((is_array($_tmp=$this->_tpl_vars['hotSellBookinfos'][$this->_sections['hotID']['index']]['bookname'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "..", false) : smarty_modifier_truncate($_tmp, 20, "..", false)));?>
</strong></a></li>
	                <br>               
	                <li style="display:inline">
	                                               市场价：<img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/mark_green.gif" />&nbsp;<s><?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['hotSellBookinfos'][$this->_sections['hotID']['index']]['oldprice']);?>
</s><br>
	                  <font color="#FF0000">明日价：<img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/mark_red.gif" />&nbsp;<?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['hotSellBookinfos'][$this->_sections['hotID']['index']]['newprice']);?>
</font>
	                    
	                </li>
	                <br>
	                <li style="display:inline"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/cart-<?php echo $this->_tpl_vars['hotSellBookinfos'][$this->_sections['hotID']['index']]['id']; ?>
-add.html"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_order.gif" border="0"/></a>&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/bookinfo-<?php echo $this->_tpl_vars['hotSellBookinfos'][$this->_sections['hotID']['index']]['id']; ?>
.html"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_info.gif" border="0"/></a></li>
	            </div>
	            <?php endfor; endif; ?>
	        </div>                
        </div>
        
        <div style="width:187px; border:1px solid #CCCCCC; float:right">
            <div style="width:50px; height:10px; font-size:0px"></div>
            <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/searchorder.html"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_search_order.gif" border="0"/></a>
            <div style="width:50px; height:5px; font-size:0px"></div>
            <a href="<?php if ($this->_tpl_vars['isLogin'] == 'T'): ?><?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/usercenter.html<?php else: ?><?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/telllogin.html<?php endif; ?>"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_usercenter.gif" border="0"/></a>
            <div style="width:50px; height:5px; font-size:0px"></div>
            <div style="width:100%; height:50px; background-color:#F7F7F7; border-top:1px solid #CCCCCC; padding-top:5px">
                [<img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/mark_login.gif" />&nbsp;<?php if ($this->_tpl_vars['isLogin'] == 'T'): ?><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/logout.html" class="a1">退出登录</a><?php else: ?><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/login.html" class="a1">用户登录</a><?php endif; ?>]&nbsp;[<img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/mark_reg.gif" />&nbsp;<?php if ($this->_tpl_vars['isLogin'] == 'T'): ?><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/userfeedback.html" class="a1">用户反馈</a><?php else: ?><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/register.html" class="a1">免费注册</a><?php endif; ?>]<br />
                [<img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/mark_qq.gif" />&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/" class="a1">在线咨询</a>]&nbsp;[<img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/mark_tel.gif" />&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/" class="a1">服务热线</a>]
            </div>
            
        </div>      
        
        <div style="width:50px; height:7px; font-size:0px"></div>
        <div style="width:187px; height:120px; border:1px solid #CCCCCC; float:right; padding-bottom:10px">
            <div style="width:100%; height:21px; border:1px solid #FFFFFF; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/title4.gif); text-align:left; color:#990000; padding-left:5px">
                <li style="display:inline; width:17px; height:17px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/mark_tell.gif); float:left"></li> <li style="float:left; padding:4px">新闻公告&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/tell.html" class="a5">more</a></li>
            </div>
            <?php unset($this->_sections['tID']);
$this->_sections['tID']['name'] = 'tID';
$this->_sections['tID']['loop'] = is_array($_loop=$this->_tpl_vars['tells']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <div style="width:90%; text-align:left; padding-top:10px">
                <font color="#990000">·</font>&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/tellinfo-<?php echo $this->_tpl_vars['tells'][$this->_sections['tID']['index']]['id']; ?>
.html" class="a1"><?php echo $this->_reg_objects['util'][0]->unHtml(((is_array($_tmp=$this->_tpl_vars['tells'][$this->_sections['tID']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 21, "..", false) : smarty_modifier_truncate($_tmp, 21, "..", false)));?>
</a>
            </div>
            <?php endfor; endif; ?>
        </div>          
        <div style="width:50px; height:7px; font-size:0px"></div>
        
        <div style="width: 187px; font-size:0px; float:right"><a href="http://www.mingribook.com/bbs/bbs_index.php" target="_blank"><img src="<?php echo $this->_tpl_vars['system'][0]['ggurl']; ?>
/gg_right.gif" width="187" border="0"/></a></div>
        
        <div style="width:50px; height:7px; font-size:0px"></div>
        <div style="width:187px; height:640px; border:1px solid #CCCCCC; float:right; padding-bottom:1px">
            <div style="width:100%; height:21px; border:1px solid #FFFFFF; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/title4.gif); text-align:left; padding-left:5px; color:#990000">
                <li style="display:inline; width:17px; height:17px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/mark_ph.gif); float:left"></li> <li style="float:left; padding:4px">明日图书推荐与排行</li> 
            </div>
            <div style="width:50px; height:7px; font-size:0px"></div>
            <?php unset($this->_sections['mbID']);
$this->_sections['mbID']['name'] = 'mbID';
$this->_sections['mbID']['loop'] = is_array($_loop=$this->_tpl_vars['mrbooktjs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['mbID']['show'] = true;
$this->_sections['mbID']['max'] = $this->_sections['mbID']['loop'];
$this->_sections['mbID']['step'] = 1;
$this->_sections['mbID']['start'] = $this->_sections['mbID']['step'] > 0 ? 0 : $this->_sections['mbID']['loop']-1;
if ($this->_sections['mbID']['show']) {
    $this->_sections['mbID']['total'] = $this->_sections['mbID']['loop'];
    if ($this->_sections['mbID']['total'] == 0)
        $this->_sections['mbID']['show'] = false;
} else
    $this->_sections['mbID']['total'] = 0;
if ($this->_sections['mbID']['show']):

            for ($this->_sections['mbID']['index'] = $this->_sections['mbID']['start'], $this->_sections['mbID']['iteration'] = 1;
                 $this->_sections['mbID']['iteration'] <= $this->_sections['mbID']['total'];
                 $this->_sections['mbID']['index'] += $this->_sections['mbID']['step'], $this->_sections['mbID']['iteration']++):
$this->_sections['mbID']['rownum'] = $this->_sections['mbID']['iteration'];
$this->_sections['mbID']['index_prev'] = $this->_sections['mbID']['index'] - $this->_sections['mbID']['step'];
$this->_sections['mbID']['index_next'] = $this->_sections['mbID']['index'] + $this->_sections['mbID']['step'];
$this->_sections['mbID']['first']      = ($this->_sections['mbID']['iteration'] == 1);
$this->_sections['mbID']['last']       = ($this->_sections['mbID']['iteration'] == $this->_sections['mbID']['total']);
?>  
            <div style="width:185px">
                <div style="width:100%; height:85px">
                    <div style="width:75px; height:100px; float:left; text-align:right">
                        <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/bookinfo-<?php echo $this->_tpl_vars['mrbooktjs'][$this->_sections['mbID']['index']]['id']; ?>
.html"><img src="<?php echo $this->_tpl_vars['system'][0]['bookimgurl']; ?>
/<?php echo $this->_tpl_vars['mrbooktjs'][$this->_sections['mbID']['index']]['bookimg']; ?>
" width="66" height="85" style="border:1px solid #123456"/></a>
                    </div>
                    <div style="width:100px; height:90px; float:right; text-align:left">
                        <li style="display:inline"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/bookinfo-<?php echo $this->_tpl_vars['mrbooktjs'][$this->_sections['mbID']['index']]['id']; ?>
.html" class="a6"><?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['mrbooktjs'][$this->_sections['mbID']['index']]['bookname']);?>
</a></li>
                        <li style="display:inline">
                            <br><br>                                             
                                                                            市场价：<img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/mark_green.gif" />&nbsp;<s><?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['mrbooktjs'][$this->_sections['mbID']['index']]['oldprice']);?>
</s><br>
                            <font color="#FF0000">明日价：<img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/mark_red.gif" />&nbsp;<?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['mrbooktjs'][$this->_sections['mbID']['index']]['newprice']);?>
</font>
                        </li>
                        <br/><br/>
                        <li style="display:inline; float:right; padding-right:10px"></li>
                    </div>
                </div>
                <div style="width:100%; height:25px; text-align:left; padding:2px">
                        <?php echo $this->_reg_objects['util'][0]->unHtml(((is_array($_tmp=$this->_tpl_vars['mrbooktjs'][$this->_sections['mbID']['index']]['about'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 55, "...", false) : smarty_modifier_truncate($_tmp, 55, "...", false)));?>

                </div>
                <div style="width:50px; height:5px; font-size:0px"></div>
            </div>
            <?php endfor; endif; ?>
            <div style="width:88%; text-align:right; border-bottom:1px solid #CCCCCC"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listsepbook-mrbook.html" class="a5">more</a></div>
            <?php unset($this->_sections['mbpID']);
$this->_sections['mbpID']['name'] = 'mbpID';
$this->_sections['mbpID']['loop'] = is_array($_loop=$this->_tpl_vars['mrbookph']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['mbpID']['show'] = true;
$this->_sections['mbpID']['max'] = $this->_sections['mbpID']['loop'];
$this->_sections['mbpID']['step'] = 1;
$this->_sections['mbpID']['start'] = $this->_sections['mbpID']['step'] > 0 ? 0 : $this->_sections['mbpID']['loop']-1;
if ($this->_sections['mbpID']['show']) {
    $this->_sections['mbpID']['total'] = $this->_sections['mbpID']['loop'];
    if ($this->_sections['mbpID']['total'] == 0)
        $this->_sections['mbpID']['show'] = false;
} else
    $this->_sections['mbpID']['total'] = 0;
if ($this->_sections['mbpID']['show']):

            for ($this->_sections['mbpID']['index'] = $this->_sections['mbpID']['start'], $this->_sections['mbpID']['iteration'] = 1;
                 $this->_sections['mbpID']['iteration'] <= $this->_sections['mbpID']['total'];
                 $this->_sections['mbpID']['index'] += $this->_sections['mbpID']['step'], $this->_sections['mbpID']['iteration']++):
$this->_sections['mbpID']['rownum'] = $this->_sections['mbpID']['iteration'];
$this->_sections['mbpID']['index_prev'] = $this->_sections['mbpID']['index'] - $this->_sections['mbpID']['step'];
$this->_sections['mbpID']['index_next'] = $this->_sections['mbpID']['index'] + $this->_sections['mbpID']['step'];
$this->_sections['mbpID']['first']      = ($this->_sections['mbpID']['iteration'] == 1);
$this->_sections['mbpID']['last']       = ($this->_sections['mbpID']['iteration'] == $this->_sections['mbpID']['total']);
?>
            <div style="width:90%; text-align:left; padding-top:10px">
                <font color="#990000">·</font>&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/mrbookphinfo-<?php echo $this->_tpl_vars['mrbookph'][$this->_sections['mbpID']['index']]['id']; ?>
.html" class="a1"><?php echo $this->_reg_objects['util'][0]->unHtml(((is_array($_tmp=$this->_tpl_vars['mrbookph'][$this->_sections['mbpID']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "..", false) : smarty_modifier_truncate($_tmp, 20, "..", false)));?>
</a>
            </div>
            <?php endfor; endif; ?>  
            <div style="width:50px; height:5px; font-size:0px"></div> 
            <div style="width:100%; text-align:right"><a href="mrbookph.html" class="a5">more</a>&nbsp;&nbsp;</div>
        </div>            
 
        <div style="width:50px; height:7px; font-size:0px"></div>
        <div style="width:187px; height:120px; border:1px solid #CCCCCC; float:right; padding-bottom:10px">
            <div style="width:100%; height:21px; border:1px solid #FFFFFF; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/title4.gif); text-align:left; padding-left:5px; color:#990000">
                <li style="display:inline; width:17px; height:17px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/mark_cxsx.gif); float:left"></li> <li style="float:left; padding:4px">网上畅销书询&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/cxsx.html" class="a5">more</a></li>            
            </div>
            <?php unset($this->_sections['cID']);
$this->_sections['cID']['name'] = 'cID';
$this->_sections['cID']['loop'] = is_array($_loop=$this->_tpl_vars['cxsxs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['cID']['show'] = true;
$this->_sections['cID']['max'] = $this->_sections['cID']['loop'];
$this->_sections['cID']['step'] = 1;
$this->_sections['cID']['start'] = $this->_sections['cID']['step'] > 0 ? 0 : $this->_sections['cID']['loop']-1;
if ($this->_sections['cID']['show']) {
    $this->_sections['cID']['total'] = $this->_sections['cID']['loop'];
    if ($this->_sections['cID']['total'] == 0)
        $this->_sections['cID']['show'] = false;
} else
    $this->_sections['cID']['total'] = 0;
if ($this->_sections['cID']['show']):

            for ($this->_sections['cID']['index'] = $this->_sections['cID']['start'], $this->_sections['cID']['iteration'] = 1;
                 $this->_sections['cID']['iteration'] <= $this->_sections['cID']['total'];
                 $this->_sections['cID']['index'] += $this->_sections['cID']['step'], $this->_sections['cID']['iteration']++):
$this->_sections['cID']['rownum'] = $this->_sections['cID']['iteration'];
$this->_sections['cID']['index_prev'] = $this->_sections['cID']['index'] - $this->_sections['cID']['step'];
$this->_sections['cID']['index_next'] = $this->_sections['cID']['index'] + $this->_sections['cID']['step'];
$this->_sections['cID']['first']      = ($this->_sections['cID']['iteration'] == 1);
$this->_sections['cID']['last']       = ($this->_sections['cID']['iteration'] == $this->_sections['cID']['total']);
?>
            <div style="width:90%; text-align:left; padding-top:10px">
                <font color="#990000">·</font>&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/cxsxinfo-<?php echo $this->_tpl_vars['cxsxs'][$this->_sections['cID']['index']]['id']; ?>
.html" class="a1"><?php echo $this->_reg_objects['util'][0]->unHtml(((is_array($_tmp=$this->_tpl_vars['cxsxs'][$this->_sections['cID']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "..", false) : smarty_modifier_truncate($_tmp, 20, "..", false)));?>
</a>
            </div>
            <?php endfor; endif; ?>
            
        </div>         
        <div style="width:50px; height:7px; font-size:0px"></div>
        <div style="width:187px; height:120px; border:1px solid #CCCCCC; float:right">
            <div style="width:100%; height:21px; border:1px solid #FFFFFF; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/title4.gif); text-align:left; padding-left:5px; color:#990000">
                <li style="display:inline; width:17px; height:17px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/mark_pub.gif); float:left"></li> <li style="float:left; padding:4px">按出版社分类&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/pub.html" class="a5">more</a></li>            
            </div>
            <?php $f=0 ; ?>
            <?php unset($this->_sections['pID']);
$this->_sections['pID']['name'] = 'pID';
$this->_sections['pID']['loop'] = is_array($_loop=$this->_tpl_vars['pubs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['pID']['show'] = true;
$this->_sections['pID']['max'] = $this->_sections['pID']['loop'];
$this->_sections['pID']['step'] = 1;
$this->_sections['pID']['start'] = $this->_sections['pID']['step'] > 0 ? 0 : $this->_sections['pID']['loop']-1;
if ($this->_sections['pID']['show']) {
    $this->_sections['pID']['total'] = $this->_sections['pID']['loop'];
    if ($this->_sections['pID']['total'] == 0)
        $this->_sections['pID']['show'] = false;
} else
    $this->_sections['pID']['total'] = 0;
if ($this->_sections['pID']['show']):

            for ($this->_sections['pID']['index'] = $this->_sections['pID']['start'], $this->_sections['pID']['iteration'] = 1;
                 $this->_sections['pID']['iteration'] <= $this->_sections['pID']['total'];
                 $this->_sections['pID']['index'] += $this->_sections['pID']['step'], $this->_sections['pID']['iteration']++):
$this->_sections['pID']['rownum'] = $this->_sections['pID']['iteration'];
$this->_sections['pID']['index_prev'] = $this->_sections['pID']['index'] - $this->_sections['pID']['step'];
$this->_sections['pID']['index_next'] = $this->_sections['pID']['index'] + $this->_sections['pID']['step'];
$this->_sections['pID']['first']      = ($this->_sections['pID']['iteration'] == 1);
$this->_sections['pID']['last']       = ($this->_sections['pID']['iteration'] == $this->_sections['pID']['total']);
?>
            <div style="width:90%; <?php if($f<5){ ?>border-bottom:1px dotted #CCCCCC<?php } ?>">
                <li style="display:inline; float:left; width:25%; padding-top:3px"><img src="<?php echo $this->_tpl_vars['system'][0]['bookimgurl']; ?>
/<?php echo $this->_tpl_vars['pubs'][$this->_sections['pID']['index']]['pubimg']; ?>
" width="26" height="24"/></li>
                <li style="display:inline; float:right; width:65%; text-align:left; padding-top:9px"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/pubbook-<?php echo $this->_tpl_vars['pubs'][$this->_sections['pID']['index']]['id']; ?>
.html" class="a1"><?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['pubs'][$this->_sections['pID']['index']]['pubname']);?>
</a></li>
            </div>
            <?php $f++; ?>
            <?php endfor; endif; ?>
        </div>         
        
        
        
        
        
    </div>
</div>