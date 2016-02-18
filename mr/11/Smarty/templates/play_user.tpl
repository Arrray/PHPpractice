<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>播客</title>
</head>
<body>
<table width="1004" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3"><img src="images/子页_02.gif" width="1004" height="40"></td>
  </tr>
  <tr>
    <td width="39" background="images/子页_03.gif">&nbsp;</td>
    <td width="908"><table width="900" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td><img src="images/子页_11.gif" width="880" height="36"></td>
      </tr>
      <tr>
        <td>

<table width="100%" height="49%" border="0" align="center" cellpadding="0" cellspacing="0">
      {if $discuss_false=="F"}
      <tr>
        <td colspan="5" align="center">没有数据！</td>
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
<!--从数据库中读取出以二进制格式存储的图片-->
<img src="head_picture.php?recid={$video_user[video_id].tb_user_id}" width="120" height="135" border="0">
</a></td>
                  <td width="150" align="center" valign="middle"><table width="150" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td height="25" align="right">播客：</td>
                        <td height="25"><a href="individualism.php?user_id={$video_user[video_id].tb_user_id}&&video_user={$video_user[video_id].tb_video_user}" target="_blank">{$video_user[video_id].tb_video_user}</a></td>
                      </tr>
                      <tr>
                        <td width="50" height="25" align="right" valign="middle">QQ：</td>
                        <td width="100">{$video_user[video_id].tb_video_qq}</td>
                      </tr>
                      <tr>
                        <td height="25" align="right" valign="middle">E_mail：</td>
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
              <td><div align="left">&nbsp;&nbsp;播客&nbsp;{$total1}&nbsp;个&nbsp;每页显示&nbsp;{$pagesize1}&nbsp;个&nbsp;第&nbsp;{$page1}&nbsp;页/共&nbsp;{$pagecount1}&nbsp;页</div></td>
              <td><div align="right">

{if $page1 == 1 }首页&nbsp;上一页{else}<a href="play_user.php?video_id={$video[video_id].tb_video_id}&&pages=1">首页</a>&nbsp;<a href="play_user.php?video_id={$video[video_id].tb_video_id}&&pages={$page1-1}" >上一页</a>{/if} &nbsp;{if $page1 == $pagecount1 }下一页&nbsp;尾页{else}<a href="play_user.php?video_id={$video[video_id].tb_video_id}&&pages={$page1+1}">下一页</a>&nbsp;<a href="play_user.php?video_id={$video[video_id].tb_video_id}&&pages={$pagecount1}">尾页</a>{/if}

</div></td>            </tr>
</table></td>
      </tr>
{/if}
    </table></td>
    <td width="57" background="images/子页_05.gif">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><img src="images/子页_12.gif" width="1004" height="35"></td>
  </tr>
</table>






<img src="images/登录后_11.gif" width="1004" height="85">
</body>
</html>
