<?php /* Smarty version 2.6.19, created on 2009-06-08 05:16:08
         compiled from admin-pub.phtml */ ?>
    <div style="width:98%; height:25px; text-align:left"><input type="button" value="��ӳ����������Ϣ"  onclick="window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-pub.php'" />&nbsp;&nbsp;<input type="button" value="��������������Ϣ" onclick="window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listpub.php'"/></div>    
    <div style="width:98%;  border:1px solid #006D84">
        <div style="width:100%; height:25px; border:1px solid #FFFFFF; background-color:#4995A8; text-align:left; padding-top:5px; padding-left:20px; color:#FFFFFF">
            <li style="display:inline; float:left"><strong>��ӳ����������Ϣ</strong></li>
        </div>
        
        <div style="width:100%; text-align:left; padding-top:5px; padding-left:20px; padding-left:70px">
         
          <form name="form_pub" method="post" action="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-pub.php" onsubmit="return chkInputPub(this)" enctype="multipart/form-data">
            <div style="width:100%; text-align:left; padding-top:5px; padding-left:50px">
                  ���������ƣ�&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="pubname" size="30" class="input"/><br /><br /> 
       ������logoͼƬ��<input type="file" name="pubimg" size="30" class="input" /> <br /><br />     
                <input type="submit" value="���" />&nbsp;&nbsp;<input type="reset" value="����" />
            </div> 
            </form>  
        
    
        </div>    
    </div>