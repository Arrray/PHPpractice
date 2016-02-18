<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/v_intro.css" type="text/css"; rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>音乐介绍</title>
</head>

<body>
<div class="div_intro">
  <div class="div_in_main">
   <div class="separ_intro">
    <table width="404" height="90" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="402" align="center" valign="middle"><table width="400" border="0" align="center" cellpadding="0" cellspacing="0">         {section name=sec3 loop=$songinfo}
              <tr>
                <td width="131" height="20" align="right" valign="middle">名称：</td>
                <td width="269" height="20"><div align="left">{$songinfo[sec3].name}</div></td>
              </tr>
              <tr>
                <td height="20" align="right" valign="middle">发行商：</td>
                <td height="20"><div align="left">{$songinfo[sec3].publisher}</div></td>
              </tr>
              <tr>
                <td height="20" align="right" valign="middle">歌手：</td>
                <td height="20"><div align="left">{$songinfo[sec3].actor} </div></td>
              </tr>
              <tr>
                <td height="20" align="right" valign="middle">演唱形式：</td>
                <td height="20"><div align="left">{$songinfo[sec3].actortype}</div></td>
              </tr>
              <tr>
                <td height="20" align="right" valign="middle">作词：</td>
                <td height="20"><div align="left">{$songinfo[sec3].ci}</div></td>
              </tr>
              <tr>
                <td height="20" align="right" valign="middle">作曲：</td>
                <td height="20"><div align="left">{$songinfo[sec3].qu}</div></td>
              </tr>
              <tr>
                <td height="20" align="right" valign="middle">语言：</td>
                <td height="20"><div align="left">{$songinfo[sec3].languages}</div></td>
              </tr>
              <tr>
                <td height="20" align="right" valign="middle">音乐类型：</td>
                <td height="20"><div align="left">{$songinfo[sec3].type}</div></td>
              </tr>
              <tr>
                <td height="20" align="right" valign="middle">发行国家：</td>
                <td height="20"><div align="left">{$songinfo[sec3].froms}</div></td>
              </tr>
              <tr>
                <td height="20" align="right" valign="middle">发行时间：</td>
                <td height="20"><div align="left">{$songinfo[sec3].publishTime}</div></td>
              </tr>
              <tr>
                <td height="20" align="right" valign="middle">简要介绍：</td>
                <td height="20"><div align="left">
                  <textarea name="textarea" cols="40" rows="5" readonly="readonly">{$songinfo[sec3].remark}</textarea>
                </div></td>
              </tr>
              <tr>
			  <td height="30" colspan="2" align="center" valign="middle">
			  {if $loginyoni == Y}
                <input name="Submit" type="button" value="  播  放  " onclick="javascript:Wopen=open('listens.php?id={$songinfo[sec3].address}','','height=720,width=1004,scrollbars=no');" />
                 {/if}   
                <input name="Submit2" type="button" value="  返  回  " onclick="javascript:top.window.close();" /></td>
              </tr>
			  {/section}
            </table>
          </td>
        </tr>
      </table>
	</div>
  </div>
</div>
</body>
</html>
