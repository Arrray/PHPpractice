<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>如我所愿许愿墙</title>
<link href="CSS/index.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="JS/add.js"></script>
<script type="text/javascript" src="JS/common.js"></script>
<script type="text/javascript" src="JS/AjaxRequest.js"></script>
<style type="text/css">
body{
background:url(images/wall.gif)
}
</style>
</head>
<body>
<?php require("top.php");?>
<table width="1004"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="top"><br>
      <table width="96%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="541" height="475" align="center" valign="top" class="nbg"><TABLE cellSpacing=0 cellPadding=0 width=541 align=center border=0>
              <TBODY>
                <TR>
                  <TD width="464" valign="top">
				  <form id="form1" name="form1" method="post" action="wishingadd_ok.php">
                      <table width="541" height="475" border=0 cellpadding=2 cellspacing=5 background="images/wish_bgt.gif">
                        <tbody>
                          <tr>
                            <td width="51%" height="413" align="center" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td width="20%">许愿类别：</td>
                                  <td width="80%" align="left"><select name="select">
                                      <option value="亲情">亲情</option>
                                      <option value="爱情" selected>爱情</option>
                                      <option value="友情">友情</option>
                                      <option value="自己">自己</option>
                                      <option value="奥运会">奥运会</option>
                                      <option value="汶川">汶川</option>
                                    </select>
                                  </td>
                                </tr>
                                <tr>
                                  <td width="20%">祝福对象：</td>
                                  <td width="80%" align="left"><input name="Picker" class="index1" id="Picker" onKeyUp="setPicker();"  onKeyDown="setPicker();"
                  size=16 maxlength=16></td>
                                </tr>
                                <tr>
                                  <td>许 愿 人：</td>
                                  <td align="left"><input name="author" class="index1" id="author" onKeyUp="setUserName();"  onKeyDown="setUserName();"
                  size=16 maxlength=16  value= 匿名>
                                    *</td>
                                </tr>
                                <tr>
                                  <td>您的QQ号：</td>
                                  <td align="left"><input name="QQ" type="text" id="QQ" onKeyUp="setQQ();if(/(^0+)/.test(value))value=value.replace(/^0*/, '')"  onKeyDown="setQQ();" onKeyPress="return event.keyCode>=48 && event.keyCode<=57;" size="16" maxlength="10" onpaste="var s=clipboardData.getData('text'); if(!/\D/.test(s))value=s.replace(/^0*/,''); return false;"/></td>
                                </tr>
                                <tr>
                                  <td height="44">墙纸颜色：
                                    <input id="paperColor" type=hidden value="paper2" name="paperColor"></td>
                                  <td align="left"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                      <tr>
                                        <td width=42><a href="javascript:setColor('paper1');">
                                          <div id=Div1  class="Div1"></div>
                                          </a></td>
                                        <td width=43><a href="javascript:setColor('paper2');">
                                          <div id=Div2 class="Div2"></div>
                                          </a></td>
                                        <td width=42><a href="javascript:setColor('paper3');">
                                          <div id=Div3 class="Div3"></div>
                                          </a></td>
                                        <td width=42><a href="javascript:setColor('paper4');">
                                          <div id=Div4 class="Div4"></div>
                                          </a></td>
                                        <td width=45><a href="javascript:setColor('paper5');">
                                          <div id=Div5 class="Div5"></div>
                                          </a></td>
                                        <td width=46><a href="javascript:setColor('paper6');">
                                          <div id=Div6 class="Div6"></div>
                                          </a></td>
                                        <td width=46><a href="javascript:setColor('paper7');">
                                          <div id=Div7 class="Div7" ></div>
                                          </a></td>
                                        <td width=116><a href="javascript:setColor('paper8');">
                                          <div id=Div8 class="Div8"></div>
                                          </a></td>
                                      </tr>
                                    </table></td>
                                </tr>
                                <tr>
                                  <td>选择心情：</td>
                                  <td align="left"><table width="400">
                                      <tr>
                                        <td align="left">心情图案类别：<a style="cursor:hand;" onClick="changeIconTeam(0)">爱之屋</a> <a style="cursor:hand;" onClick="changeIconTeam(1)">梦幻水晶</a> <a style="cursor:hand;" onClick="changeIconTeam(2)">小破孩</a></td>
                                      </tr>
                                      <tr>
                                        <td><div id="icon0" style="display:inline;">
                                            <?php for($i=0;$i<14;$i++){ ?>
                                            <img class="iconBox" src="images/icon/love/love_<?php echo $i;?>.gif" onClick="javascript:IconChange('love','<?php echo $i;?>.gif');" />
                                            <?php }?>
                                          </div>
                                          <div id="icon1" style="display:none;">
                                            <?php for($i=0;$i<14;$i++){?>
                                            <img class="iconBox" src="images/icon/like/like_<?php echo $i;?>.gif" onClick="javascript:IconChange('like','<?php echo $i;?>.gif');" />
                                            <?php } ?>
                                          </div>
                                          <div id="icon2" style="display:none;">
                                            <?php for($i=0;$i<14;$i++){ ?>
                                            <img class="iconBox" src="images/icon/boygirl/boygirl_<?php echo $i;?>.gif" onClick="javascript:IconChange('boygirl','<?php echo $i;?>.gif');" />
                                            <?php } ?>
                                          </div>
                                          <input type="hidden" value="images/icon/love/love_4.gif" name="face" id="face"/></td>
                                      </tr>
                                    </table></td>
                                </tr>
                                <tr>
                                  <td height="118" colspan="2"  align="left"><p style="margin-left:22px">输入你的祝福纸条内容 还能输入
                                      <INPUT style="BORDER-TOP-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-RIGHT-WIDTH: 0px" readOnly maxLength=3 size=3 value=150 name=freeLength>
                                      个字符 <BR>
                                      <textarea name="content" id="content" cols="66" rows="6" onkeydown="textCounter(this.form.content,this.form.freeLength,150)"  onkeyup="textCounter(this.form.content,this.form.freeLength,150)" style="background:url('images/mrbccd.gif')"></textarea>
                                    </p></td>
                                </tr>
                                <tr>
                                  <td height="31">验证码：</td>
                                  <td align="left"><input name="checkcode" type="text" id="checkcode" size="12" onBlur="return codecheck(this.value);" />
                                    <?php
									for($i=0;$i<4;$i++){
										$num .= dechex(rand(0,15));
									}
								?>
                                    <input type="hidden" name="txt_hyan" id="txt_hyan" value="<?php echo $num;?>">
                                    <a href="#"><img id="picsrc" src="getcode.php?num=<?php echo $num;?>" onClick="return piccode();"></a><img id="messageImg" src='images/tishi2.gif' width='16' height='16'> 单击图片重新获取验证码</td>
                                </tr>
                                <tr>
                                  <td height="31" colspan="2" align="center"><input type="image" name="imageField" src="images/btn_next.gif" onClick="return checkForm();" >
                                    <input class=index1 id=Button2 type=reset value="取消" name="Button2" >
                                    &nbsp;
                                    <input onClick='javascript:history.back(-1)' class=index1 id=fanhui type=reset value=返回>
                                  </td>
                                </tr>
                              </table></td>
                          </tr>
                        </tbody>
                      </table>
                    </form>
                    <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                    </TABLE></TD>
                </TR>
              </TBODY>
            </TABLE></td>
          <td width="364" align="center" valign="top"><table width="92%"  border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="2"></td>
              </tr>
            </table>
            <table width="284" height="253"  border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="284" height="253" align="center" class="wish_bg"><DIV class=paper7 style="LEFT: 630px; TOP: 250px" id="paper_Sample">
                    <TABLE cellSpacing=0 cellPadding=0 border=0>
                      <TBODY>
                        <TR>
                          <TD><!--显示字条-->
                            <DIV class=shead><span class="Num">&nbsp;&nbsp;字条预览：</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;　<A alt="关闭纸条">×</A></DIV></TD>
                        </TR>
                        <TR>
                          <TD><DIV class=sbody><img src="images/icon/love/love_0.gif" name="IconImg" width="56" height="56" id="IconImg" style="float:left">&nbsp;<span id="PickerSample"></span><br>
                              &nbsp;&nbsp;&nbsp;&nbsp;<span id="ContentSample">如我所愿许愿墙，属于拥有爱的人。</span></DIV>
                            <DIV class=sbot>
                              <H2>QQ：<span id="QQSample"></span>&nbsp;&nbsp;&nbsp;&nbsp;<span id="authorSample">匿名</span></H2>
                            </DIV></TD>
                        </TR>
                      </TBODY>
                    </TABLE>
                  </DIV>
              </tr>
            </table></td>
          <td width="59" align="center" valign="top">&nbsp;</td>
        </tr>
      </table></td>
  </tr>
</table>
<?php require("copyright.php");?>
</body>
</html>
