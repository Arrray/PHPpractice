<?php /* Smarty version 2.6.19, created on 2009-02-21 07:26:21
         compiled from showbbs.phtml */ ?>
帖子：
<br><br>
<?php echo $this->_reg_objects['util'][0]->editorUnHtml($this->_tpl_vars['bbs'][0]['content']);?>

<br><br>
回复：
<br><br>
<?php unset($this->_sections['replyId']);
$this->_sections['replyId']['name'] = 'replyId';
$this->_sections['replyId']['loop'] = is_array($_loop=$this->_tpl_vars['replys']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['replyId']['show'] = true;
$this->_sections['replyId']['max'] = $this->_sections['replyId']['loop'];
$this->_sections['replyId']['step'] = 1;
$this->_sections['replyId']['start'] = $this->_sections['replyId']['step'] > 0 ? 0 : $this->_sections['replyId']['loop']-1;
if ($this->_sections['replyId']['show']) {
    $this->_sections['replyId']['total'] = $this->_sections['replyId']['loop'];
    if ($this->_sections['replyId']['total'] == 0)
        $this->_sections['replyId']['show'] = false;
} else
    $this->_sections['replyId']['total'] = 0;
if ($this->_sections['replyId']['show']):

            for ($this->_sections['replyId']['index'] = $this->_sections['replyId']['start'], $this->_sections['replyId']['iteration'] = 1;
                 $this->_sections['replyId']['iteration'] <= $this->_sections['replyId']['total'];
                 $this->_sections['replyId']['index'] += $this->_sections['replyId']['step'], $this->_sections['replyId']['iteration']++):
$this->_sections['replyId']['rownum'] = $this->_sections['replyId']['iteration'];
$this->_sections['replyId']['index_prev'] = $this->_sections['replyId']['index'] - $this->_sections['replyId']['step'];
$this->_sections['replyId']['index_next'] = $this->_sections['replyId']['index'] + $this->_sections['replyId']['step'];
$this->_sections['replyId']['first']      = ($this->_sections['replyId']['iteration'] == 1);
$this->_sections['replyId']['last']       = ($this->_sections['replyId']['iteration'] == $this->_sections['replyId']['total']);
?>
  <?php echo $this->_reg_objects['util'][0]->editorUnHtml($this->_tpl_vars['replys'][$this->_sections['replyId']['index']]['content']);?>

  <br>
<?php endfor; endif; ?>


<form name="form1" method="post" action="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/savereply.php">

<?php echo $this->_reg_objects['util'][0]->editor('content','');?>
<br>
<input type="hidden"  name="bbsId" value="<?php echo $this->_tpl_vars['bbs'][0]['id']; ?>
">
<input type="submit" value="提交">


</form>