<table width="636" align="center" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3" height="25" align="center" valign="middle" class="first">全部公告</td>
  </tr>
{section name=arr_id loop=$arr}
  <tr>
    <td width="21%" height="25" align="right" valign="middle" class="left">标题：</td>
    <td width="49%" align="left" valign="middle" class="left">&nbsp;<a href="#" onclick="return showme({$arr[arr_id].id},'showpub.php')">{$arr[arr_id].title}</a></td>
    <td width="30%" height="25" align="center" valign="middle" class="right">&nbsp;{$arr[arr_id].addtime}</td>
  </tr>
{/section}
</table>
