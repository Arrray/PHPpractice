<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>����</title>
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
        <td><img src="images/��ҳ_11.gif" width="880" height="36"></td>
      </tr>
      <tr>
        <td>

<table width="100%" height="49%" border="0" align="center" cellpadding="0" cellspacing="0">
      {if $discuss_false=="F"}
      <tr>
        <td colspan="5" align="center">û�����ݣ�</td>
      </tr>
      {else}


 <tr>
        <td colspan="5" height="10"></td>



      {php}$number=0;{/php}
      {section name=video_id loop=$video_user}
      {php}if(($number % 3) == 0){ {/php}
</tr>      
<tr> {php}
}{/php}
        <td colspan="5"><table width="300" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="150" align="center" valign="middle"><a href="individualism.php?user_id={$video_user[video_id].tb_user_id}&&video_user={$video_user[video_id].tb_video_user}">
<!--�����ݿ��ж�ȡ���Զ����Ƹ�ʽ�洢��ͼƬ-->
<img src="head_picture.php?recid={$video_user[video_id].tb_user_id}" width="120" height="135" border="0">
</a></td>
                  <td width="150" align="center" valign="middle"><table width="150" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td height="25" align="right">���ͣ�</td>
                        <td height="25"><a href="individualism.php?user_id={$video_user[video_id].tb_user_id}&&video_user={$video_user[video_id].tb_video_user}" target="_blank">{$video_user[video_id].tb_video_user}</a></td>
                      </tr>
                      <tr>
                        <td width="50" height="25" align="right" valign="middle">QQ��</td>
                        <td width="100">{$video_user[video_id].tb_video_qq}</td>
                      </tr>
                      <tr>
                        <td height="25" align="right" valign="middle">E_mail��</td>
                        <td>{$video_user[video_id].tb_video_email}</td>
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
 <tr>
        <td colspan="5" align="center"><table width="100%" height="25" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
            <tr>
              <td><div align="left">&nbsp;&nbsp;����&nbsp;{$total1}&nbsp;��&nbsp;ÿҳ��ʾ&nbsp;{$pagesize1}&nbsp;��&nbsp;��&nbsp;{$page1}&nbsp;ҳ/��&nbsp;{$pagecount1}&nbsp;ҳ</div></td>
              <td><div align="right">

{if $page1 == 1 }��ҳ&nbsp;��һҳ{else}<a href="play_user.php?video_id={$video[video_id].tb_video_id}&&pages=1">��ҳ</a>&nbsp;<a href="play_user.php?video_id={$video[video_id].tb_video_id}&&pages={$page1-1}" >��һҳ</a>{/if} &nbsp;{if $page1 == $pagecount1 }��һҳ&nbsp;βҳ{else}<a href="play_user.php?video_id={$video[video_id].tb_video_id}&&pages={$page1+1}">��һҳ</a>&nbsp;<a href="play_user.php?video_id={$video[video_id].tb_video_id}&&pages={$pagecount1}">βҳ</a>{/if}

</div></td>            </tr>
</table></td>
      </tr>
{/if}
    </table></td>
    <td width="57" background="images/��ҳ_05.gif">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><img src="images/��ҳ_12.gif" width="1004" height="35"></td>
  </tr>
</table>






<img src="images/��¼��_11.gif" width="1004" height="85">
</body>
</html>
