<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="js/chk.js" language="javascript"></script>
<script language="javascript" src="js/checkbox.js"></script>
<link href="css/listen_music.css" type="text/css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>

{if $showmusic_false==F}
��ǰû���κμ�¼
{else}
<table width="500" border="0" cellspacing="0" cellpadding="0" class="right_table">
			<tr>
			  	<td width="50" height="25" align="center" valign="middle">����</td>
				<td width="150" align="center" valign="middle">��������</td>
				<td width="150" align="center" valign="middle">����</td>
				<td width="50" align="center" valign="middle">��������</td>
				<td width="50" align="center" valign="middle">����</td>
				<td width="50" align="center" valign="middle">����</td> 
			</tr>
	<form name="form1" method="post" action="realplay.php" id="form1">	
	{section name=sec2 loop=$music}
	<tr onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''">
	<td><input type="checkbox" name="checkbox[]" value="{$music[sec2].id}">	</td>
	<td>
	{$music[sec2].name}	</td>
	<td>
	{$music[sec2].actor}	</td>
	<td><img src="images/��ҳ_24.jpg" alt="���߲���" width="28" height="23" border="0" onclick="MM_openBrWindow('listens.php?id={$music[sec2].id}','','width=1004,height=720')"></td>
	<td><a href="download.php?id={$music[sec2].id}&action=video"><img src=images/��ҳ_26.jpg width=28 height=23 border=0 alt=����/></a></td>
	<td>
	<a href="#" onclick="javascript:Wopen=open('v_intro.php?id={$music[sec2].id}','','height=720,width=1004,scrollbars=no');"><img src="images/��ҳ_28.jpg" width="28" height="23" border="0" alt="����"></a></td>
	</tr>
	{/section}
	<tr onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''">
			  <td height="25" colspan="6" align="center" valign="middle" >
<input name="button" type=button class="buttoncss" onClick="checkAll(form1,status)" value="ȫѡ">
<input type=button value="��ѡ" class="buttoncss" onClick="switchAll(form1,status)">
<input type=button value="��ѡ" class="buttoncss" onClick="uncheckAll(form1,status)"></td>
</tr>
<tr>
<td colspan="6">
 <center>
   {if $page1 == 1}��ҳ&nbsp;��һҳ
   {else}<a href="index.php?pages=1">��ҳ</a>&nbsp;<a href="index.php?pages={$page1-1}" >��һҳ</a> 
   {/if}
   &nbsp;
   {if $page1 == $pagecount1 }��һҳ&nbsp;βҳ
   {else}<a href="index.php?pages={$page1+1}">��һҳ</a>&nbsp;<a href="index.php?pages={$pagecount1}">βҳ</a>
   {/if}
 </center>
</td>
</tr>
<tr>
<td colspan="6">

    <div align="right">
  <input  class="ls_msc" type="submit" name="Submit3" value="��ӵ������б�" />
  &nbsp;&nbsp;&nbsp;&nbsp;
  <input   class="ls_msc" type="submit" name="Submit" value="��������">
  &nbsp;&nbsp;&nbsp;&nbsp;
  <input class="ls_msc" type="submit" name="Submit2" value="ѭ������" />
      <a href="music_list.php" target="_blank" >�鿴�����б�</a> &nbsp;&nbsp;&nbsp;</div>
</tr>
</form>
</table>
<span class="right_table">
�ܼ�������{$total1}�ס���ǰ�ǵ�{$page1}ҳ&nbsp;ÿҳ��ʾ{$pagesize1}����¼&nbsp;һ����{$pagecount1}ҳ
</span>
{/if}


{if $loginyon ==Y}
  {if $mymusicnum ==0}
  <p>��ǰû�м�¼</p>
  {else}
  
  <table>
    <tr onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''">
       <td></td>
	</tr>
	<tr>
	   <td width="150" align="center" valign="middle">��������</td>
	   <td width="200" align="center" valign="middle">����</td>
	   <td width="150" align="center" valign="middle">��������</td>
	</tr>
   {section name=sec1 loop=$mymusic}
  <tr>
      <td>{$mymusic[sec1].tb_song_name}</td>
	  <td>{$mymusic[sec1].tb_singer_name}</td>
	  <td><img src="images/��ҳ_24.jpg" alt="���߲���" width="28" height="23" border="0" onclick="MM_openBrWindow('{$mymusic[sec1].tb_internet_address}','','width=1004,height=720')"></td>
  </tr>
  {/section}
  {/if}  

</table>
�ܼ��м�¼{$mymusicnum}����¼&nbsp;

{/if}
</body>
</html>
