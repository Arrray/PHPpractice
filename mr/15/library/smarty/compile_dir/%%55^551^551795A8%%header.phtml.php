<?php /* Smarty version 2.6.19, created on 2010-04-02 05:21:50
         compiled from header.phtml */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'getSidByBid', 'header.phtml', 70, false),)), $this); ?>
<html>
    <head>
        <meta name="keywords" content="图书|图书网|编程词典|编程|买书|租书|计算机|电子图书|IT|科技|java|.net|c#|php|明日">
        <meta name="description" content="明日网上书店">
        <title><?php echo $this->_tpl_vars['title']; ?>
</title>
        <meta http-equiv="Content-Type" content="text/html; charset=gbk" />
        <link rel="shortcut icon" href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/icon.ico" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/css/style.css" />
    </head>
    <script language="javascript" src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/js/jquery.js"></script>
    <script language="javascript" src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/js/fun.js"></script>
    <body>
        <div style="width:950px; background-color:#FFFFFF">
            <div style="width:100%; height:22px; background-color:#EFF4F8; border-bottom:1px dotted #BAC8CA; padding:2px; padding-left:20px; padding-right:22px">
                <li style="display:inline; width:13px; height:12px; float:left; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/mark_home.gif); font-size:0px; margin-top:5px"></li>
                <li style="display:inline; float:left; padding-left:5px; margin-top:5px">设为首页</li>
                <li style="display:inline; float:left; padding-left:20px; padding-right:30px; margin-top:5px; width:340px">您好！欢迎来到明日网上书店&nbsp;&nbsp;<?php if ($this->_tpl_vars['isLogin'] == 'T'): ?><?php echo $this->_tpl_vars['unc']; ?>
&nbsp;&nbsp;[<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/logout.html" class="a1">退出登录</a>]<?php else: ?>[<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/login.html" class="a1">登录</a>]&nbsp;[<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/register.html" class="a1">免费注册</a>]<?php endif; ?></li>
                <li style="display:inline; width:12px; height:12px; float:left; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/mark_top.gif); font-size:0px; margin-top:5px"></li>
                <li style="display:inline; float:left; padding-left:10px; margin-top:5px"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/mrbookph.html" class="a1">明日图书排行</a>&nbsp;&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/cxsx.html" class="a1">网上畅销书询</a>&nbsp;&nbsp;<a href="http://www.mrbccd.com" class="a6" target="_blank">[编程词典]</a></li>
                <li style="display:inline; width:200px; height:20px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/tel.gif); float:right"></li>                               
                
           
            </div>
            <div style="width:100%">
                <div style="width:300px; float:left; padding-top:10px; font-size:0px">
                    <img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/logo.jpg" />
                </div>
                <div style="width:500px; float:left; padding-top:10px ">
                    <div style="width:100%; height:23px; padding-left:30px">
                        <div style="width:54px; height:23px; float:left; background:url(<?php if ($this->_tpl_vars['dh'] == 'index'): ?><?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_top_1.gif<?php else: ?><?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_top_2.gif<?php endif; ?>); padding-top:6px"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/index.html" class="<?php if ($this->_tpl_vars['dh'] == 'index'): ?>a2<?php else: ?>a1<?php endif; ?>"><strong>首页</strong></a></div>
                        <div style="width:6px; height:23px; float:left; font-size:0px"></div>
                        <div style="width:54px; height:23px; float:left;  background:url(<?php if ($this->_tpl_vars['dh'] == 'new'): ?><?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_top_1.gif<?php else: ?><?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_top_2.gif<?php endif; ?>); padding-top:6px"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listsepbook-new.html" class="<?php if ($this->_tpl_vars['dh'] == 'new'): ?>a2<?php else: ?>a1<?php endif; ?>"><strong>新书</strong></a></div>
                        <div style="width:6px; height:23px; float:left; font-size:0px"></div>
                        <div style="width:54px; height:23px; float:left;  background:url(<?php if ($this->_tpl_vars['dh'] == 'sepprice'): ?><?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_top_1.gif<?php else: ?><?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_top_2.gif<?php endif; ?>); padding-top:6px"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listsepbook-sepprice.html" class="<?php if ($this->_tpl_vars['dh'] == 'sepprice'): ?>a2<?php else: ?>a1<?php endif; ?>" ><strong>特价</strong></a></div>
                        <div style="width:6px; height:23px; float:left; font-size:0px"></div>
                        <div style="width:54px; height:23px; float:left;  background:url(<?php if ($this->_tpl_vars['dh'] == 'hotsell'): ?><?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_top_1.gif<?php else: ?><?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_top_2.gif<?php endif; ?>); padding-top:6px"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listsepbook-hotsell.html" class="<?php if ($this->_tpl_vars['dh'] == 'hotsell'): ?>a2<?php else: ?>a1<?php endif; ?>" ><strong>热卖</strong></a></div>
                        <div style="width:6px; height:23px; float:left; font-size:0px"></div>
                        <div style="width:54px; height:23px; float:left;  background:url(<?php if ($this->_tpl_vars['dh'] == 'term'): ?><?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_top_1.gif<?php else: ?><?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_top_2.gif<?php endif; ?>); padding-top:6px"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listsepbook-term.html" class="<?php if ($this->_tpl_vars['dh'] == 'term'): ?>a2<?php else: ?>a1<?php endif; ?>" ><strong>期书</strong></a></div>
                        <div style="width:6px; height:23px; float:left; font-size:0px"></div>
                        <div style="width:54px; height:23px; float:left;  background:url(<?php if ($this->_tpl_vars['dh'] == 'listread'): ?><?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_top_1.gif<?php else: ?><?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_top_2.gif<?php endif; ?>); padding-top:6px"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listreadbook.html" class="<?php if ($this->_tpl_vars['dh'] == 'listread'): ?>a2<?php else: ?>a1<?php endif; ?>" ><strong>试读</strong></a></div>
                    </div>
                    
                    <div style="width:500px; height:36px">
                    <form name="form_search" method="post" action="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/search.html" onSubmit="return chkinputSimpleSearch(this)">
                        <div style="width:8px; height:36px; float:left; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/top_search_left.gif)"></div> 
                        <div style="width:484px; height:36px; float:left; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/top_search_center.gif); text-align:left">
                            <li style="display:inline; height:35px; padding-top:5px"><input type="text" name="keyWord" size="40" class="input1" value="<?php if ($this->_tpl_vars['keytxt'] != ''): ?><?php echo $this->_tpl_vars['keytxt']; ?>
<?php else: ?>请输入要查询的图书名称<?php endif; ?>" onMouseOver="this.select()"/></li>
                            <li style="display:inline; height:35px; padding-top:5px; padding-left:8px"><input type="hidden" name="stype" value="simple" /><input type="image" src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_findbook.gif" /></li>
                        </div>
                        <div style="width:8px; height:36px; float:right; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/top_search_right.gif)"></div>   
                    </form>
                    </div>  
                    
                </div>
                <div style="width:150px; float:right; padding-top:23px; text-align:left; padding-left:30px; line-height:20px">
                    <li style="display:inline; width:23px; height:22px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/mark_search.gif); font-size:0px"></li>                    
                    <li style="display:inline; padding-left:15px"><a href="advancedsearch.html" class="a8">高级搜索</a></li><br />
                    <li style="display:inline; width:22px; height:15px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/mark_car1.gif); font-size:0px"></li>                               
                    <li style="display:inline; font-size:12px; padding-left:15px"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/cart.html" class="a8">我的购物车</a></li>         
                </div>                
            </div>
            
            <div style="width:50px; height:8px; font-size:0px"></div>
            
            <div style="width:930px; height:26px">
                <div style="width:10px; height:26px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/dh_left.gif); float:left"></div>
                <div style="width:910px; height:26px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/dh_center.gif); float:left; padding-top:6px">
                   <?php unset($this->_sections['bdhID']);
$this->_sections['bdhID']['name'] = 'bdhID';
$this->_sections['bdhID']['loop'] = is_array($_loop=$this->_tpl_vars['bigtypeDhs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['bdhID']['show'] = true;
$this->_sections['bdhID']['max'] = $this->_sections['bdhID']['loop'];
$this->_sections['bdhID']['step'] = 1;
$this->_sections['bdhID']['start'] = $this->_sections['bdhID']['step'] > 0 ? 0 : $this->_sections['bdhID']['loop']-1;
if ($this->_sections['bdhID']['show']) {
    $this->_sections['bdhID']['total'] = $this->_sections['bdhID']['loop'];
    if ($this->_sections['bdhID']['total'] == 0)
        $this->_sections['bdhID']['show'] = false;
} else
    $this->_sections['bdhID']['total'] = 0;
if ($this->_sections['bdhID']['show']):

            for ($this->_sections['bdhID']['index'] = $this->_sections['bdhID']['start'], $this->_sections['bdhID']['iteration'] = 1;
                 $this->_sections['bdhID']['iteration'] <= $this->_sections['bdhID']['total'];
                 $this->_sections['bdhID']['index'] += $this->_sections['bdhID']['step'], $this->_sections['bdhID']['iteration']++):
$this->_sections['bdhID']['rownum'] = $this->_sections['bdhID']['iteration'];
$this->_sections['bdhID']['index_prev'] = $this->_sections['bdhID']['index'] - $this->_sections['bdhID']['step'];
$this->_sections['bdhID']['index_next'] = $this->_sections['bdhID']['index'] + $this->_sections['bdhID']['step'];
$this->_sections['bdhID']['first']      = ($this->_sections['bdhID']['iteration'] == 1);
$this->_sections['bdhID']['last']       = ($this->_sections['bdhID']['iteration'] == $this->_sections['bdhID']['total']);
?>
                       <li style="display:inline; color:#FFFFFF">|</li>
                       <li style="display:inline"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listbook-<?php echo getSidByBid(array('bid' => $this->_tpl_vars['bigtypeDhs'][$this->_sections['bdhID']['index']]['id']), $this);?>
-1.html" class="a2"><strong><?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['bigtypeDhs'][$this->_sections['bdhID']['index']]['typename']);?>
</strong></a></li>
                   <?php endfor; endif; ?>
                   <li style="display:inline; color:#FFFFFF">|</li>
                </div>
                <div style="width:10px; height:26px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/dh_right.gif); float:right"></div>
            </div>
            <div style="width:50px; height:7px; font-size:0px"></div>
        </div>
        
        