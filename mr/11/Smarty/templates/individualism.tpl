<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>{$user}�ĸ�����ҳ</title>
</head>
<body>
<table width="1004" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="97">&nbsp;</td>
    <td width="811"><table width="810" height="35" border="0" align="center" cellpadding="0" cellspacing="0" background="images/��ҳ_03.gif">
  <tr>
   <td width="110" align="center"><a href="subscibe/{$user_id}.xml" class="white_STYLE3"><img src="images/2464.jpg" width="16" height="16" border="0"></a></td>
{if $name!=$names1 or $names!=T}
    <td width="113" align="center"><a href="individualism_video.php?user_id={$user_id}&&video_user={$user}" class="white_STYLE3">��Ƶ</a></td>
   

 <td width="110" align="center">
 
<a href="subscibe_program.php?user_id={$user_id}&&video_user={$user}" class="white_STYLE3">����({$subscibe_counts})</a></td> 
 {/if}
{if $user==$name}

 <td width="166" align="center"><a href="my_video_manage.php?video_user={$name}" class="white_STYLE3">���ϴ��Ľ�Ŀ</a></td>
 <td width="168" align="center"><a href="cancel_subscibe.php?video_user={$name}" class="white_STYLE3">�Ҷ��ĵĲ���</a></td> {/if} 
 <td width="283" align="center"><span class="white_STYLE3"> {if $names=="T"} </span>
   <div align="center" class="white_STYLE3"><a href="program.php?user_id={$user_id}&video_user={$user}&subscibe_user={$name}">���Ľ�Ŀ</a></div>
   <span class="white_STYLE3">{/if}</span></td>
 </tr>
</table></td>
    <td width="96">&nbsp;</td>
  </tr>
</table>

<table width="1004" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="318" height="394" background="images/������ҳ_02.gif">
	
	
	
	
	  <table width="318" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="114">&nbsp;</td>
          <td width="183" height="74">&nbsp;</td>
          <td width="21">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td height="281" valign="top"><table width="183" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="center" valign="middle">
<!--�����ݿ��ж�ȡ���Զ����Ƹ�ʽ�洢��ͼƬ-->
<img src="head_picture.php?recid={$user_id}" width="120" height="135" border="3" style=" border-color:#CCCCCC; margin-top:5px; margin-left:5px; margin-bottom:5px; margin-right:5px;" ></td>
                </tr>
                <tr>
                  <td align="center" valign="middle"><table width="183" border="0" cellspacing="0" cellpadding="0">
              
{section name=video_name loop=$video_user}
      <tr>
                      <td width="103" height="25" align="right">��ҳ�����</td>
                      <td width="80" height="25">&nbsp;{$video_user[video_name].tb_individualism_accessing }</td>
                    </tr>
                    <tr>
                      <td height="25" align="right" valign="middle">��������</td>
                      <td>&nbsp;{$video_plays}</td>
                    </tr>
                    
                    <tr>
                      <td height="32" align="right" valign="middle">���ģ�</td>
                      <td>{$subscibe_counts}</td>
                    </tr>
                    <tr>
                      <td height="25" align="right" valign="middle">���ͣ�</td>
                      <td>{$user}</td>
                    </tr>
{/section}
                  </table></td>
                </tr>
    </table></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td height="39">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
    <td width="686" valign="top" background="images/������ҳ_03.gif"><table width="686" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="26" height="67">&nbsp;</td>
	   
	    <td width="540"></td>
        <td width="120">&nbsp;</td>
      </tr>
      <tr>
        <td height="280">&nbsp;</td>
        <td valign="top"><table width="540" height="140" border="0" align="center" cellpadding="0" cellspacing="0">
   {if $discuss_false=="F"}
  <tr>
    <td colspan="2" align="center">û���ϴ���Ƶ��</td>
  </tr>
{else}
 <tr>

      {php}$number=0;{/php}
  {section name=video_id loop=$video1}
      {php}if(($number % 2) == 0){ {/php}</tr>      
<tr> {php}
}{/php}
        <td colspan="5"><table width="270" border="0" cellspacing="1" cellpadding="1">
		  	<tr>
				<td width="125" align="center" valign="middle"><a href="look.php?video_id={$video1[video_id].tb_video_id}&video_name={$video1[video_id].tb_video_name|escape:"url"}" target="_blank"><img name="news" src="{$video1[video_id].tb_video_picture}" width="120" height="120" alt="{$video1[video_id].tb_video_explain}" border="0" /></a></td>
				<td width="145" align="center" valign="middle"><table width="145" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="25" colspan="2" align="center">{$video1[video_id].tb_video_name}</td>
                  </tr>
                  <tr>
                    <td width="45" height="25" align="right" valign="middle">���ͣ�</td>
                    <td width="100"><div>

{section name=type_ids loop=$video_type1}
{if $video_type1[type_ids].tb_type_id==$video1[video_id].tb_video_type}
{$video_type1[type_ids].tb_type_name}
{/if} 
{/section}


</div></td>
                  </tr>
                  
                  <tr>
                    <td height="25" align="right" valign="middle">ʱ�䣺</td>
                    <td>{$video1[video_id].tb_video_date}</td>
                  </tr>
                  <tr>
                    <td height="25" align="right" valign="middle">���ͣ�</td>
                    <td>{$video1[video_id].tb_video_author}</td>
                  </tr>
                  <tr>
                    <td height="25" colspan="2" align="center" valign="middle"><a href="look.php?video_id={$video1[video_id].tb_video_id}&video_name={$video1[video_id].tb_video_name|escape:"url"}" target="_blank">����</a> &nbsp;&nbsp;<a href="download.php?id={$video1[video_id].tb_video_id}">����</a>
                        
                      &nbsp;&nbsp;<a href="#" onClick="javascript:Wopen=open('intro.php?id={$video1[video_id].tb_video_id}','','height=700,width=665,scrollbars=no');">����</a></td>
                  </tr>
              </table></td>
		  	</tr>
		  </table></td>
        {php}if(($number %2) != 0){{/php} 
      {php}

}
      $number++;
      {/php}
      {/section}  </tr> 

</table></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="47">&nbsp;</td>
        <td valign="bottom">
		<table width="540" height="25" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
            <tr>
              <td width="355"><div align="left">&nbsp;&nbsp;��Ƶ&nbsp;{$total1}&nbsp;��&nbsp;ÿҳ��ʾ&nbsp;{$pagesize1}&nbsp;��&nbsp;��&nbsp;{$page1}&nbsp;ҳ/��&nbsp;{$pagecount1}&nbsp;ҳ</div></td>
              <td width="285"><div align="right">

{if $page1 == 1 }��ҳ&nbsp;��һҳ{else}<a href="individualism.php?user_id={$user_id}&video_user={$user}&pages=1">��ҳ</a>&nbsp;<a href="individualism.php?user_id={$user_id}&video_user={$user}&pages={$page1-1}" >��һҳ</a>{/if} &nbsp;{if $page1 == $pagecount1 }��һҳ&nbsp;βҳ{else}<a href="individualism.php?user_id={$user_id}&video_user={$user}&pages={$page1+1}">��һҳ</a>&nbsp;<a href="individualism.php?user_id={$user_id}&video_user={$user}&pages={$pagecount1}">βҳ</a>{/if}

</div></td>            </tr>
{/if}
</table>		</td>
        <td>&nbsp;</td>
      </tr>

    </table></td>
  </tr>
</table>
<table width="1004" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><img src="images/��¼��_11.gif"></td>
  </tr>
</table>
</body>
</html>
