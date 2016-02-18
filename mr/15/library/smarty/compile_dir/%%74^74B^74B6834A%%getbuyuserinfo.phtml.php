<?php /* Smarty version 2.6.19, created on 2009-06-03 09:10:34
         compiled from getbuyuserinfo.phtml */ ?>

<div style="width:950px; background-color:#FFFFFF">
    <div style="width:930px; height:20px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/title4.gif); border-top:1px solid #CCCCCC; padding-top:3px; padding-left:20px; font-size:13px; text-align:left">
               您当前的位置：明日网上书店&nbsp;>>&nbsp;填写收货人信息
    </div>
    <br />
    <div>
        <img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/gulc2.gif" border="0" usemap="#Map"/>
        <map name="Map" id="Map"><area shape="rect" coords="190,45,296,80" href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/cart.html" /></map>
    </div>
    <br />
    <div style="width:700px; text-align:left; padding-top:10px; line-height:22px">
     
     <div style="width:90%; height:22px; border-bottom:1px dotted #333333">
         <div style="width: 70px; height:22px; float:left; background-color:#7C7C7C; color:#FFFFFF; padding-left:5px">收货人信息</div>
     </div>
     <br>   
     <form name="form_getbuyuserinfo" method="post" action="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/getbuyuserinfo.html" onsubmit="return chkinputbuyuserinfo(this, 'all')">    
            订购用户昵称：<?php echo $_SESSION['unc']; ?>
<br><br>
            收货人姓名：&nbsp;&nbsp;<input type="text" name="username" size="30" class="input" onBlur="chkinputbuyuserinfo(form_getbuyuserinfo, '0')"  value="<?php echo $_SESSION['recuserinfo']['username']; ?>
"/>&nbsp;&nbsp;（*请填写收货人真实姓名）
            <br>
            <div id="chkusername" style="display:none; background-color:#FDFBED; border:1px solid #FF6700; width:50%; color:#003399"/></div>
            <br>
            性别：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="sex" onBlur="chkinputbuyuserinfo(form_getbuyuserinfo, '1')">
            <option value="">请选择</option>
            <option value="男" <?php if ($_SESSION['recuserinfo']['sex'] == '男'): ?>selected<?php endif; ?>>男</option>
            <option value="女" <?php if ($_SESSION['recuserinfo']['sex'] == '女'): ?>selected<?php endif; ?>>女</option>
        </select>&nbsp;&nbsp;（*请选择收货人性别）
        <br>
        <div id="chksex" style="display:none; background-color:#FDFBED; border:1px solid #FF6700; width:50%; color:#003399"/></div>
        <br>
            详细地址：&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="address" size="50" class="input" onBlur="chkinputbuyuserinfo(form_getbuyuserinfo, '2')" value="<?php echo $_SESSION['recuserinfo']['address']; ?>
"/>&nbsp;&nbsp;（*请务必填写收货人地址）
            <br>
            <div id="chkaddress" style="display:none; background-color:#FDFBED; border:1px solid #FF6700; width:50%; color:#003399"/></div>
            <br>
            邮政编码：&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="yb" size="30" class="input" onBlur="chkinputbuyuserinfo(form_getbuyuserinfo, '3')" value="<?php echo $_SESSION['recuserinfo']['yb']; ?>
"/>&nbsp;&nbsp;（*邮编由6位数字组成，例：130000）
            <br>
            <div id="chkyb" style="display:none; background-color:#FDFBED; border:1px solid #FF6700; width:50%; color:#003399"/></div>
            <br>
            联系电话：&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="tel" size="30" class="input" onBlur="chkinputbuyuserinfo(form_getbuyuserinfo, '4')" value="<?php echo $_SESSION['recuserinfo']['tel']; ?>
"/>&nbsp;&nbsp;（*固定或移动电话均可，固定电话需加区号）
            <br>
            <div id="chktel" style="display:none; background-color:#FDFBED; border:1px solid #FF6700; width:50%; color:#003399"/></div>
            <br>
            备注：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="bz" cols="50" rows="4" class="input"><?php echo $_SESSION['recuserinfo']['bz']; ?>
</textarea>&nbsp;&nbsp;（该项选填）<br><br>
     <div style="width:90%; height:22px; border-bottom:1px dotted #333333">
         <div style="width: 70px; height:22px; float:left; background-color:#7C7C7C; color:#FFFFFF; padding-left:10px">收货方式</div>
     </div>
     <br>     
     <input type="radio" name="rectype" value="0" <?php if ($_SESSION['recuserinfo']['rectype'] == '0'): ?>checked<?php endif; ?>/>&nbsp;&nbsp;送货上门（仅限长春市区）<br>  
     <input type="radio" name="rectype" value="1" <?php if ($_SESSION['recuserinfo']['rectype'] == '1'): ?>checked<?php endif; ?>/>&nbsp;&nbsp;自行去货<br>
     <input type="radio" name="rectype" value="2" <?php if ($_SESSION['recuserinfo']['rectype'] == '2'): ?>checked<?php endif; ?>/>&nbsp;&nbsp;平邮 （费用8元，支持国内包裹） <br>
     <input type="radio" name="rectype" value="3" <?php if ($_SESSION['recuserinfo']['rectype'] == '3'): ?>checked<?php endif; ?>/>&nbsp;&nbsp;普通快递 （费用20元，到货时间约为2-4天，支持国内一二级城市） <br>
     <input type="radio" name="rectype" value="4" <?php if ($_SESSION['recuserinfo']['rectype'] == '' || $_SESSION['recuserinfo']['rectype'] == '4'): ?>checked<?php endif; ?>/>&nbsp;&nbsp;EMS快递 （费用30元，支持国内） 
     <br>
     <br>
 
     <input name="but_showtt" type="checkbox"  onclick="isShowtt(form_getbuyuserinfo)" <?php if ($_SESSION['recuserinfo']['tt'] != ''): ?>checked<?php endif; ?>/>&nbsp;&nbsp;需要发票，请选择该项<br><br>
     <div id="showtt" style="<?php if ($_SESSION['recuserinfo']['tt'] == ''): ?>display:none<?php endif; ?>">发票抬头：<input type="text" name="tt" size="30" class="input" onBlur="chkinputbuyuserinfo(form_getbuyuserinfo, '5')" value="<?php echo $_SESSION['recuserinfo']['tt']; ?>
"/>&nbsp;&nbsp;（*请仔细填写，我们将根据您所填信息给您开发票）<br>
     <div id="chktt" style="display:none; background-color:#FDFBED; border:1px solid #FF6700; width:50%; color:#003399"/></div>
     <br></div>
     
     <input type="image" src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_scdd.gif" />
    </form>
    </div>
    <br>
 
</div>
       