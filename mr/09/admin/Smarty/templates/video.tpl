<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<table width="450" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="10" colspan="5" align="center" valign="middle">音 频 数 据 管 理</td>
              </tr>
              <tr>
                <td height="10" colspan="5" align="right" valign="middle"><a href="#" onclick="javacript:Wopen=open('trans.php','添加视频','height=550,width=425,scrollbars=no');">数据添加</a></td>
              </tr>
              <tr>
                <td width="22" height="30" align="center" valign="middle">ID</td>
                <td width="123" height="30" align="center" valign="middle">名称</td>
                <td width="78" height="30" align="center" valign="middle">类别</td>
                <td width="78" height="30" align="center" valign="middle">歌手</td>
                <td width="117" height="30" align="center" valign="middle">操作</td>
              </tr>
              {if $record==N}
			  <tr><td colspan="5" align="center">当前没有任何记录！</td></tr>
			  {else}
			  {section name=sec2 loop=$video_list}
              <tr>
                <td height="18" align="center" valign="middle">{$record}{$video_list[sec2].id}</td>
                <td height="18" align="center" valign="middle"><a href="listens.php?id={$video_list[sec2].address}" target="_blank">{$video_list[sec2].name}</a></td>
				<td height="18" align="center" valign="middle">{$video_list[sec2].type}</td>
                <td height="18" align="center" valign="middle">{$video_list[sec2].actor}</td>
				 <td height="18" align="center" valign="middle"><a href="del_video_chk.php?id={$video_list[sec2].id}" onclick="return del_chk();">删除</a></td> 
			  </tr>
              {/section}
			  {/if}
          </table>
</body>
</html>
