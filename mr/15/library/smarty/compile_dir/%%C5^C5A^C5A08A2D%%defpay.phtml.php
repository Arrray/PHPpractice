<?php /* Smarty version 2.6.19, created on 2009-06-04 00:34:17
         compiled from defpay.phtml */ ?>

<div style="width:950px; background-color:#FFFFFF">
    <div style="width:930px; height:20px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/title4.gif); border-top:1px solid #CCCCCC; padding-top:3px; padding-left:20px; font-size:13px; text-align:left">
               ����ǰ��λ�ã������������&nbsp;>>&nbsp;ȷ��֧��
    </div>
    <br />
    <div>
        <img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/gulc5.gif" usemap="#Map" border="0"/>
        <map name="Map" id="Map">
        <area shape="rect" coords="190,45,296,80" href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/cart.html" />
        <area shape="rect" coords="312,23,446,60" href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/getbuyuserinfo.html" />
        <area shape="rect" coords="462,40,598,70" href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/deforder.html" />
        <area shape="rect" coords="612,23,746,60" href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/selectpaytype.html" />
        </map>        
    </div>
    <br />
    <div style="width:930px; height:120px; border-top:1px dotted #333333">
       <div style="width:68%; height:120px; float:left; text-align:left; font-size:14px; padding-top:10px; padding-left:50px; line-height:22px">
           <li style="display:inline; width:100%; height:25px; float:left">�����ţ�<strong><?php echo $_SESSION['recuserinfo']['orderNo']; ?>
</strong>&nbsp;&nbsp;��*&nbsp;���μǶ����ţ�</li><br>
           <li style="display:inline; width:48%; height:25px; float:left">֧����ʽ��<strong><?php echo $_SESSION['recuserinfo']['paytype']; ?>
</strong></li>
           <li style="display:inline; width:48%; height:25px; float:left">֧���ܽ�<strong><?php echo $this->_reg_objects['util'][0]->moneyFormat($_SESSION['recuserinfo']['recpayall']);?>
</strong>&nbsp;Ԫ&nbsp;&nbsp;��*&nbsp;�����˷ѣ�</li>
   <li style="display:inline; width:100%; height:25px; float:left">      
  ע�⣺<br />
&nbsp;&nbsp;&nbsp;��1�����μǶ����ţ��Ա��Ժ��ѯ����״̬<br />
&nbsp;&nbsp;&nbsp;��2���뼰ʱ����ѡ���֧����ʽ����֧���������48Сʱ��û��֧������ö�������ɾ��<br />
&nbsp;&nbsp;&nbsp;��3�����������Ϣ���������Ҳ�ȷ�϶�����ť<br /><br />
 </li>          
       </div>
       <div style="width:30%; height:120px; float:right; padding-top:50px; padding-right:30px">

    <form name="form_zfb" method="post" action="http://221.8.65.77/zfb/index.php" target="_blank">
    <input type="hidden" name="ddno" value="<?php echo $this->_tpl_vars['orderid']; ?>
">
    <input type="hidden" name="ydType" value="<?php echo $this->_tpl_vars['ydType']; ?>
">
    <input type="hidden" name="ydPrice" value="<?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['ydPrice']);?>
">
    <input type="hidden" name="price" value="<?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['bookPrice']);?>
">
    </form>

    <form name="toicbc" method="post" action="http://221.8.65.75/icbc/toicbc.php" target="_blank">
    <input name="orderid" type="hidden" value="<?php echo $this->_tpl_vars['orderid']; ?>
"/>
    <input name="amount" type="hidden" value="<?php echo $this->_tpl_vars['amount']; ?>
"/>
    <input name="merID" type="hidden" value="<?php echo $this->_tpl_vars['merID']; ?>
"/>
    <input name="merAcct" type="hidden" value="<?php echo $this->_tpl_vars['merAcct']; ?>
"/>
    <input name="merURL" type="hidden" value="<?php echo $this->_tpl_vars['merURL']; ?>
"/>
    <input name="orderDate" type="hidden" value="<?php echo $this->_tpl_vars['orderDate']; ?>
"/>
    <input name="src" type="hidden" value="<?php echo $this->_tpl_vars['src']; ?>
"/>  
    </form>       
       
       
       
       
       <a <?php if ($this->_tpl_vars['alertType'] == '0'): ?>
              href="javascript:alert('���Ķ�����Ϣ�Ѿ�����,�뵽ָ�����л��!');"
         <?php elseif ($this->_tpl_vars['alertType'] == '1'): ?>
              href="javascript:alert('���Ķ�����Ϣ�Ѿ�����,�뵽�ʾ��ʿ�!');"
         <?php elseif ($this->_tpl_vars['alertType'] == '2'): ?>
              href="javascript:form_zfb.submit();"
         <?php elseif ($this->_tpl_vars['alertType'] == '3'): ?>
              href="javascript:toicbc.submit();"
         <?php endif; ?>
        ><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_defpay.gif" border="0" /></a>
        <br />
        [<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/qxorder.html" class="a1">ȡ������</a>]&nbsp;[<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/logout.html" class="a1">�˳���¼</a>]
        <br /><br />
        
       </div>
    </div>
       
</div>
       