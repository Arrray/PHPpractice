<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>����</title>
<link rel="stylesheet" href="css/style.css"/>
</head>
<script type="text/javascript" src="js/discuss_js.js"></script>
<body>{section name=video_id loop=$video}
<table width="1004" height="450" border="0" cellpadding="0" cellspacing="0">
<tr><td colspan="2" width="10">&nbsp;</td></tr>

  <tr>
    <td width="491"><table width="480" height="450" border="0" align="center" cellpadding="0" cellspacing="0">
     <tr>
 
    <td colspan="2" align="center" bgcolor="#FFFFFF">
<!--����SetFull������ʵ�ִ��ڵ�ȫ��-->
      <input type="button" onClick="SetFull()" class="buttoncss" value="ȫ������">&nbsp;&nbsp;      
<!--�رղ������Ĵ���-->
<input name="button" type="button" class="buttoncss" onClick="javascript:window.close()" value="�ر��Ӵ�"></td>
    </tr>
  <tr>
    <td height="340" colspan="4" bgcolor="#ffffff"><div align="center"> 
<object onerror=alert("��Ļ�����û�а�װRealplayer�����������Ȱ�װ��") classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" name="rp1" width="475" height="375" id="rp1">
              <param name="_extentx" value="12000">
              <param name="_extenty" value="7500">
              <param name="shuffle" value="0">
              <param name="nolabels" value="0">
              <param name="autostart" value="-1">
              <param name="prefetch" value="0">
              <param name="controls" value="imagewindow">
              <param name="console" value="clip1">
              <param name="loop" value="0">
              <param name="numloop" value="0">
              <param name="center" value="0">
              <param name="maintainaspect" value="0">
              <param name="backgroundcolor" value="#000000">
              <param name="src" value="{$video[video_id].tb_video_address}">
            </object>
        </div></td>
      </tr>
      <tr>
        <td height="60" bgcolor="#000000"><div align="center">
            <object classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" name="rp2" width="475" height="60" id="rp2">
              <param name="_extentx" value="12000">
              <param name="_extenty" value="1500">
              <param name="shuffle" value="0">
              <param name="nolabels" value="0">
              <param name="autostart" value="-1">
              <param name="prefetch" value="0">
              <param name="controls" value="controlpanel,statusbar">
              <param name="console" value="clip1">
              <param name="loop" value="0">
              <param name="numloop" value="0">
              <param name="center" value="0">
              <param name="maintainaspect" value="0">
              <param name="backgroundcolor" value="#000000">
            </object>
        </div></td>
      </tr>
    </table></td>
    <td width="513" background="images/��Ƶ_4.jpg"><table width="513" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="14">&nbsp;</td>
        <td width="480" height="70">&nbsp;</td>
        <td width="19">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td height="175" align="center"><table width="475" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="175" height="175" align="right" valign="bottom"><img name="news" src="{$video[video_id].tb_video_picture}" width="160" height="170" alt="������Ƶ" border="0"/></td>
            <td width="300"><table width="200" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="25" align="right" valign="bottom">��Ƶ��</td>
                    <td height="25" align="left" valign="bottom">{$video[video_id].tb_video_name}</td>
                  </tr>
                  <tr>
                    <td width="100" height="20" align="right" valign="middle">���ͣ�</td>
                    <td width="200"><div>
{section name=type_ids loop=$video_type}
{if $video_type[type_ids].tb_type_id==$video[video_id].tb_video_type}
{$video_type[type_ids].tb_type_name}
{/if} 
{/section}
</div></td>
                  </tr>

                  <tr>
                    <td height="20" align="right" valign="middle">ʱ�䣺</td>
                    <td>{$video[video_id].tb_video_date}</td>
                  </tr>
                  <tr>
                    <td height="20" align="right" valign="middle">���ͣ�</td>
                    <td>{$video[video_id].tb_video_author}</td>
                  </tr>
                  <tr>
                    <td height="20" align="right" valign="middle">���ۣ�</td>
                    <td>{$video[video_id].tb_video_counts}</td>
                  </tr>
                  <tr>
                    <td height="20" align="right" valign="middle">���ţ�</td>
                    <td>{$video[video_id].tb_video_play}</td>
                  </tr>
                  <tr>
                    <td height="20" align="right" valign="middle">���أ�</td>
                    <td>{$video[video_id].tb_video_down}</td>
                  </tr>
                  <tr>
                    <td height="30" colspan="2" align="center" valign="middle"><a href="look.php?video_id={$video[video_id].tb_video_id}&video_name={$video[video_id].tb_video_name|escape:"url"}">����</a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="download.php?id={$video[video_id].tb_video_id}">����</a></td>
                  </tr>
                </table></td>
          </tr>
        </table></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td height="185" align="center"><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
          
                <tr>
                  <td width="50%" height="100%" align="left" valign="top">
<table width="240" height="100%" border="0" cellpadding="0" cellspacing="0">
{section name=video_id1 loop=$video1}     
                    <tr>
                      <td height="25" colspan="2" align="center"><a href="look.php?video_id={$video1[video_id1].tb_video_id}&video_name={$video1[video_id1].tb_video_name|escape:"url"}" target="_blank">��һ��Ŀ</a></td>
                    </tr>
                    <tr>
                      <td width="105" height="110" align="center"><div align="right"><img src="{$video1[video_id1].tb_video_picture}" alt="" name="news" width="100" height="106" hspace="0" vspace="0" border="0" align="middle" /></div></td>
                      <td width="135"><table width="130" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="45" align="right">���ͣ�</td>
                          <td width="90">
{section name=type_ids loop=$video_type}
{if $video_type[type_ids].tb_type_id==$video1[video_id1].tb_video_type}
{$video_type[type_ids].tb_type_name}
{/if} 
{/section}</td>
                        </tr>
                        <tr>
                          <td align="right">���ۣ�</td>
                          <td>{$video1[video_id1].tb_video_counts}</td>
                        </tr>
                        <tr>
                          <td align="right">���أ�</td>
                          <td>{$video1[video_id1].tb_video_down}</td>
                        </tr>
                        <tr>
                          <td align="right">���ţ�</td>
                          <td>{$video1[video_id1].tb_video_play}</td>
                        </tr>
                        <tr>
                          <td colspan="2" align="center" valign="bottom"><a href="look.php?video_id={$video1[video_id1].tb_video_id}&video_name={$video1[video_id1].tb_video_name|escape:"url"}">����</a>&nbsp;&nbsp;&nbsp;<a href="download.php?id={$video1[video_id1].tb_video_id}">����</a></td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center">��Ƶ��{$video1[video_id1].tb_video_name}</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center">���ͣ�{$video1[video_id1].tb_video_author}</td>
                    </tr>
{/section}
                  </table></td>
                  <td width="50%" align="left" valign="top"><table width="240" height="100%" border="0" cellpadding="0" cellspacing="0">
{section name=video_id2 loop=$video2}                 
    <tr>
      <td height="25" colspan="2" align="center"><a href="look.php?video_id={$video2[video_id2].tb_video_id}&video_name={$video2[video_id2].tb_video_name|escape:"url"}" target="_blank">��һ��Ŀ</a></td>
      </tr>
    <tr>
                      <td width="105" height="110" align="center"><div align="right"><img src="{$video[video_id].tb_video_picture}" alt="" name="news" width="100" height="106" hspace="0" vspace="0" border="0" align="middle" /></div></td>
                      <td width="135"><table width="130" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="45" align="right">���ͣ�</td>
                            <td width="90">
{section name=type_ids loop=$video_type}
{if $video_type[type_ids].tb_type_id==$video2[video_id2].tb_video_type}
{$video_type[type_ids].tb_type_name}
{/if} 
{/section}</td>
                          </tr>
                          <tr>
                            <td align="right">���ۣ�</td>
                            <td>{$video2[video_id2].tb_video_counts}</td>
                          </tr>
                          <tr>
                            <td align="right">���أ�</td>
                            <td>{$video2[video_id2].tb_video_down}</td>
                          </tr>
                          <tr>
                            <td align="right">���ţ�</td>
                            <td>{$video2[video_id2].tb_video_play}</td>
                          </tr>
                          <tr>
                            <td colspan="2" align="center" valign="bottom"><a href="look.php?video_id={$video2[video_id2].tb_video_id}&video_name={$video2[video_id2].tb_video_name|escape:"url"}">����</a>&nbsp;&nbsp;&nbsp;<a href="download.php?id={$video2[video_id2].tb_video_id}">����</a></td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center">��Ƶ��{$video2[video_id2].tb_video_name}</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center">���ͣ�{$video2[video_id2].tb_video_author}</td>
                    </tr>{/section}
                  </table></td>
                </tr>
          </table></td>
        <td>&nbsp;</td>
      </tr>
      
      <tr>
        <td>&nbsp;</td>
        <td height="20">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="1004" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="677" align="right" valign="top">
      <table width="673" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><div id="discuss_id">
<table width="100%" border="1" cellpadding="1" cellspacing="1" bordercolor="#EFEFF7" bgcolor="#FFFFFF">
{if $discuss_false=="F"}
  <tr height="35">
    <td  colspan="4"align="center">û�����ۣ�</td>
  </tr>
{else}
  <tr height="35">
    <td  colspan="4"align="center"><img src="images/��Ƶ_9.jpg" width="665" height="36"></td>
  </tr>
  <tr>
    <td colspan="3">
<table width="100%" height="25" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#EFEFF7">
            <tr>
              <td width="531"><div align="left">&nbsp;&nbsp;����&nbsp;{$total1}&nbsp;��&nbsp;ÿҳ��ʾ&nbsp;{$pagesize1}&nbsp;��&nbsp;��&nbsp;{$page1}&nbsp;ҳ/��&nbsp;{$pagecount1}&nbsp;ҳ</div></td>
              <td width="317"><div align="right">

{if $page1 == 1 }��ҳ&nbsp;��һҳ{else}<a href="#" 
onclick='return artpagination("discuss_update.php?video_id={$video[video_id].tb_video_id}&&pages=1")'>��ҳ</a>&nbsp;<a href="#"
onclick='return artpagination("discuss_update.php?video_id={$video[video_id].tb_video_id}&&pages={$page1-1}")'>��һҳ</a>{/if} &nbsp;{if $page1 == $pagecount1 }��һҳ&nbsp;βҳ{else}<a href="#"
onclick='return artpagination("discuss_update.php?video_id={$video[video_id].tb_video_id}&&pages={$page1+1}")'
>��һҳ</a>&nbsp;<a href="#"
onclick='return artpagination("discuss_update.php?video_id={$video[video_id].tb_video_id}&&pages={$pagecount1}")'>βҳ</a>{/if}

</div></td>            </tr>
</table>	</td>
    </tr>
{section name=discuss_id loop=$discuss}
  <tr>
    <td width="137" height="37" align="right">�����ˣ�</td>
    <td width="273" bgcolor="#FAFAFC">&nbsp;{$discuss[discuss_id].tb_discuss_user}</td>
    <td width="478">����ʱ�䣺{$discuss[discuss_id].tb_discuss_date}</td>
  </tr>
  <tr>
    <td height="35" colspan="3">&nbsp;{$discuss[discuss_id].tb_discuss_content}</td>
    </tr>
 
{/section}
{/if} 
</table>
</div><table width="100%" height="167" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#ECECF8">
      <form name="form1_discuss">
      <tr>
        <td width="15%" align="right" bgcolor="#FAFAFC">�������ݣ�</td>
        <td colspan="2" bgcolor="#FAFAFC"><textarea name="tb_discuss_content" cols="50" rows="8" id="tb_discuss_content"></textarea>
          <input type="hidden" name="tb_video_id" id="tb_video_id" value="{$video[video_id].tb_video_id}">
          <input type="hidden" name="tb_discuss_date" id="tb_discuss_date" value="{$tb_video_date}"></td>
        </tr>
      <tr>
        <td align="right" bgcolor="#FAFAFC">�����ˣ�</td>
        <td width="59%" bgcolor="#FAFAFC">{if $name=="F"}{$name1}{else}{$name2}{/if}
          <input type="hidden" name="tb_discuss_user" id="tb_discuss_user" value="{if $name==F}{$name1}{else}{$name2}{/if}"></td>
        <td width="26%" bgcolor="#FAFAFC">
          <input type="image" name="Submit" value="����" onClick="return process()" src="images/��Ƶ_13.jpg"></td>
      </tr>
</form>
    </table></td>
        </tr>
      </table></td>
    <td width="327" valign="top"><table width="327" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="3"><img src="images/��Ƶ_10_1.jpg" width="327" height="41"></td>
        </tr>
      <tr>
        <td width="15" background="images/��Ƶ_10_2.jpg">&nbsp;</td>
        <td width="289" height="150"><table width="285" height="160" border="0" cellpadding="0" cellspacing="0">
{section name=video_ids loop=$videos}
{if $videos[video_ids].tb_video_name!=$video[video_id].tb_video_name}
<tr>
    <td width="135" height="160" align="center" valign="middle"><img name="news" src="{$videos[video_ids].tb_video_picture}" width="130" height="150" alt="" border="0"/></td>
    <td width="150" align="center" valign="top"><table width="154" height="160" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="20" colspan="2" align="center">{$videos[video_ids].tb_video_name}</td>
      </tr>
      <tr>
        <td width="54" height="20" align="right" valign="middle">���ͣ�</td>
        <td width="96"><div>
{section name=type_ids loop=$video_type}
{if $video_type[type_ids].tb_type_id==$videos[video_ids].tb_video_type}
{$video_type[type_ids].tb_type_name}
{/if} 
{/section}
</div></td>
      </tr>
      <tr>
        <td height="20" align="right" valign="middle">ʱ�䣺</td>
        <td>{$videos[video_ids].tb_video_date}</td>
      </tr>
      <tr>
        <td height="20" align="right" valign="middle">���ͣ�</td>
        <td>{$videos[video_ids].tb_video_author}</td>
      </tr>
      <tr>
        <td height="20" align="right" valign="middle">���ۣ�</td>
        <td>{$videos[video_ids].tb_video_counts}</td>
      </tr>
      <tr>
        <td height="20" align="right" valign="middle">���ţ�</td>
        <td>{$videos[video_ids].tb_video_play}</td>
      </tr>
      <tr>
        <td height="20" colspan="2" align="center" valign="middle"><a href="look.php?video_id={$videos[video_ids].tb_video_id}&video_name={$videos[video_ids].tb_video_name|escape:"url"}">
����</a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="download.php?id={$videos[video_ids].tb_video_id}">����</a></td>
      </tr>
    </table></td>
  </tr>
{/if}
{/section}
</table></td>
        <td width="23" background="images/��Ƶ_10_4.jpg">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><img src="images/��Ƶ_10_6.jpg" width="327" height="35"></td>
        </tr>
    </table></td>
  </tr>
</table>{/section}
<img src="images/��¼��_11.gif" width="1004" height="85">
</body>
</html>
