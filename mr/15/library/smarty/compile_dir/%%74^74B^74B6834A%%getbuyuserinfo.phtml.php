<?php /* Smarty version 2.6.19, created on 2009-06-03 09:10:34
         compiled from getbuyuserinfo.phtml */ ?>

<div style="width:950px; background-color:#FFFFFF">
    <div style="width:930px; height:20px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/title4.gif); border-top:1px solid #CCCCCC; padding-top:3px; padding-left:20px; font-size:13px; text-align:left">
               ����ǰ��λ�ã������������&nbsp;>>&nbsp;��д�ջ�����Ϣ
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
         <div style="width: 70px; height:22px; float:left; background-color:#7C7C7C; color:#FFFFFF; padding-left:5px">�ջ�����Ϣ</div>
     </div>
     <br>   
     <form name="form_getbuyuserinfo" method="post" action="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/getbuyuserinfo.html" onsubmit="return chkinputbuyuserinfo(this, 'all')">    
            �����û��ǳƣ�<?php echo $_SESSION['unc']; ?>
<br><br>
            �ջ���������&nbsp;&nbsp;<input type="text" name="username" size="30" class="input" onBlur="chkinputbuyuserinfo(form_getbuyuserinfo, '0')"  value="<?php echo $_SESSION['recuserinfo']['username']; ?>
"/>&nbsp;&nbsp;��*����д�ջ�����ʵ������
            <br>
            <div id="chkusername" style="display:none; background-color:#FDFBED; border:1px solid #FF6700; width:50%; color:#003399"/></div>
            <br>
            �Ա�&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="sex" onBlur="chkinputbuyuserinfo(form_getbuyuserinfo, '1')">
            <option value="">��ѡ��</option>
            <option value="��" <?php if ($_SESSION['recuserinfo']['sex'] == '��'): ?>selected<?php endif; ?>>��</option>
            <option value="Ů" <?php if ($_SESSION['recuserinfo']['sex'] == 'Ů'): ?>selected<?php endif; ?>>Ů</option>
        </select>&nbsp;&nbsp;��*��ѡ���ջ����Ա�
        <br>
        <div id="chksex" style="display:none; background-color:#FDFBED; border:1px solid #FF6700; width:50%; color:#003399"/></div>
        <br>
            ��ϸ��ַ��&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="address" size="50" class="input" onBlur="chkinputbuyuserinfo(form_getbuyuserinfo, '2')" value="<?php echo $_SESSION['recuserinfo']['address']; ?>
"/>&nbsp;&nbsp;��*�������д�ջ��˵�ַ��
            <br>
            <div id="chkaddress" style="display:none; background-color:#FDFBED; border:1px solid #FF6700; width:50%; color:#003399"/></div>
            <br>
            �������룺&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="yb" size="30" class="input" onBlur="chkinputbuyuserinfo(form_getbuyuserinfo, '3')" value="<?php echo $_SESSION['recuserinfo']['yb']; ?>
"/>&nbsp;&nbsp;��*�ʱ���6λ������ɣ�����130000��
            <br>
            <div id="chkyb" style="display:none; background-color:#FDFBED; border:1px solid #FF6700; width:50%; color:#003399"/></div>
            <br>
            ��ϵ�绰��&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="tel" size="30" class="input" onBlur="chkinputbuyuserinfo(form_getbuyuserinfo, '4')" value="<?php echo $_SESSION['recuserinfo']['tel']; ?>
"/>&nbsp;&nbsp;��*�̶����ƶ��绰���ɣ��̶��绰������ţ�
            <br>
            <div id="chktel" style="display:none; background-color:#FDFBED; border:1px solid #FF6700; width:50%; color:#003399"/></div>
            <br>
            ��ע��&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="bz" cols="50" rows="4" class="input"><?php echo $_SESSION['recuserinfo']['bz']; ?>
</textarea>&nbsp;&nbsp;������ѡ�<br><br>
     <div style="width:90%; height:22px; border-bottom:1px dotted #333333">
         <div style="width: 70px; height:22px; float:left; background-color:#7C7C7C; color:#FFFFFF; padding-left:10px">�ջ���ʽ</div>
     </div>
     <br>     
     <input type="radio" name="rectype" value="0" <?php if ($_SESSION['recuserinfo']['rectype'] == '0'): ?>checked<?php endif; ?>/>&nbsp;&nbsp;�ͻ����ţ����޳���������<br>  
     <input type="radio" name="rectype" value="1" <?php if ($_SESSION['recuserinfo']['rectype'] == '1'): ?>checked<?php endif; ?>/>&nbsp;&nbsp;����ȥ��<br>
     <input type="radio" name="rectype" value="2" <?php if ($_SESSION['recuserinfo']['rectype'] == '2'): ?>checked<?php endif; ?>/>&nbsp;&nbsp;ƽ�� ������8Ԫ��֧�ֹ��ڰ����� <br>
     <input type="radio" name="rectype" value="3" <?php if ($_SESSION['recuserinfo']['rectype'] == '3'): ?>checked<?php endif; ?>/>&nbsp;&nbsp;��ͨ��� ������20Ԫ������ʱ��ԼΪ2-4�죬֧�ֹ���һ�������У� <br>
     <input type="radio" name="rectype" value="4" <?php if ($_SESSION['recuserinfo']['rectype'] == '' || $_SESSION['recuserinfo']['rectype'] == '4'): ?>checked<?php endif; ?>/>&nbsp;&nbsp;EMS��� ������30Ԫ��֧�ֹ��ڣ� 
     <br>
     <br>
 
     <input name="but_showtt" type="checkbox"  onclick="isShowtt(form_getbuyuserinfo)" <?php if ($_SESSION['recuserinfo']['tt'] != ''): ?>checked<?php endif; ?>/>&nbsp;&nbsp;��Ҫ��Ʊ����ѡ�����<br><br>
     <div id="showtt" style="<?php if ($_SESSION['recuserinfo']['tt'] == ''): ?>display:none<?php endif; ?>">��Ʊ̧ͷ��<input type="text" name="tt" size="30" class="input" onBlur="chkinputbuyuserinfo(form_getbuyuserinfo, '5')" value="<?php echo $_SESSION['recuserinfo']['tt']; ?>
"/>&nbsp;&nbsp;��*����ϸ��д�����ǽ�������������Ϣ��������Ʊ��<br>
     <div id="chktt" style="display:none; background-color:#FDFBED; border:1px solid #FF6700; width:50%; color:#003399"/></div>
     <br></div>
     
     <input type="image" src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_scdd.gif" />
    </form>
    </div>
    <br>
 
</div>
       