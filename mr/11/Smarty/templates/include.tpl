<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��Ƶ</title>
</head>
<body>
<table width="1004" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3"><img src="images/��ҳ_02.gif" width="1004" height="40"></td>
  </tr>
  <tr>
    <td width="39" background="images/��ҳ_03.gif">&nbsp;</td>
    <td width="908"><table width="900" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="36"><table width="880" height="36" border="0" cellpadding="0" cellspacing="0" background="images/��ҳ_08.gif">
          <tr>
            <td width="65">&nbsp;</td>
            <td width="815"><span class="stpe_STYLE1">{section name=video_type_id loop=$video_type}
                    {if $video_type[video_type_id].tb_type_id==$video_types}
                    {$video_type[video_type_id].tb_type_name}
                    {/if} 
                    {/section}</span></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td>
<table width="100%" height="49%" border="0" align="center" cellpadding="0" cellspacing="0">
   {if $discuss_false=="F"}
  <tr>
    <td align="center">û�и�����Ƶ��</td>
  </tr>
{else}


 <tr>
        <td height="10"></td>



      {php}$number=0;{/php}
  {section name=video_id loop=$video}
      {php}if(($number % 3) == 0){ {/php}
</tr>      
<tr> {php}
}{/php}
        <td>


<table width="300" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="135" height="160" align="center" valign="top"><a href="look.php?video_id={$video[video_id].tb_video_id}" target="_blank"><img name="news" src="{$video[video_id].tb_video_picture}" width="130" height="150" alt="���߹ۿ���" border="0"/></a></td>
            <td width="199" align="center" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="25" colspan="2" align="center">{$video[video_id].tb_video_name}</td>
              </tr>
              <tr>
                <td width="30%" height="25" align="right" valign="middle">���ͣ�</td>
                <td width="70%"><div> {section name=type_ids loop=$video_type}
                  {if $video_type[type_ids].tb_type_id==$video[video_id].tb_video_type}
                  {$video_type[type_ids].tb_type_name}
                  {/if} 
                {/section} </div></td>
              </tr>
              <tr>
                <td height="25" align="right" valign="middle">��飺</td>
                <td><div style=" width:50px; height:12px; ">{$video[video_id].tb_video_explain}</div></td>
              </tr>
              <tr>
                <td height="25" align="right" valign="middle">ʱ�䣺</td>
                <td>{$video[video_id].tb_video_date}</td>
              </tr>
              <tr>
                <td height="25" align="right" valign="middle">���ͣ�</td>
                <td>{$video[video_id].tb_video_author}</td>
              </tr>
              <tr>
                <td height="25" colspan="2" align="center" valign="middle"><a href="look.php?video_id={$video[video_id].tb_video_id}" target="_blank">����</a> <a href="download.php?id={$video[video_id].tb_video_id}">����</a> &nbsp;<a href="#" onClick="javascript:Wopen=open('intro.php?id={$video[video_id].tb_video_id}','','height=700,width=665,scrollbars=no');">���</a></td>
              </tr>
            </table></td>
          </tr>
        </table>
</td>
        {php}if(($number %3) != 0){{/php} 
      {php}

}
      $number++;
      {/php}
      {/section}
  </tr> 

</table>

</td>
      </tr>

<tr><td>

<table width="100%" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="531"><div align="left">&nbsp;&nbsp;��Ƶ&nbsp;{$total1}&nbsp;��&nbsp;ÿҳ��ʾ&nbsp;{$pagesize1}&nbsp;��&nbsp;��&nbsp;{$page1}&nbsp;ҳ/��&nbsp;{$pagecount1}&nbsp;ҳ</div></td>
              <td width="317"><div align="right">

{if $page1 == 1 }��ҳ&nbsp;��һҳ{else}<a href="include.php?video_type={$video_types}&video_id={$video[video_id].tb_video_id}&&pages=1">��ҳ</a>&nbsp;<a href="include.php?video_type={$video_types}&video_id={$video[video_id].tb_video_id}&&pages={$page1-1}" >��һҳ</a>{/if} &nbsp;{if $page1 == $pagecount1 }��һҳ&nbsp;βҳ{else}<a href="include.php?video_type={$video_types}&video_id={$video[video_id].tb_video_id}&&pages={$page1+1}">��һҳ</a>&nbsp;<a href="include.php?video_type={$video_types}&video_id={$video[video_id].tb_video_id}&&pages={$pagecount1}">βҳ</a>{/if}

</div></td>            </tr>
</table>

</td></tr>
{/if}
    </table>
</td>
    <td width="57" background="images/��ҳ_05.gif">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><img src="images/��ҳ_12.gif" width="1004" height="35"></td>
  </tr>
</table>
<img src="images/��¼��_11.gif" width="1004" height="85">
</body>
</html>
