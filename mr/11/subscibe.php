<?php  $u=$_SERVER['HTTP_HOST'];
$url="http://"."$u";

$date_time=date("Y-m-d H:i:s");  //��ȡʱ��

$fopen = fopen ("subscibe/$_SESSION[id].xml","w");      //ʹ�����ģʽ���ļ�,�ļ�ָ��ָ�ڱ�β
$title='<?xml version="1.0" encoding="gb2312"?>
<rss xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:taxo="http://purl.org/rss/1.0/modules/taxonomy/" version="2.0">
  <channel>
    <title>���տƼ�</title>
    <link>http://www.mingrisoft.com</link>
    <description>$_SESSION['name']</description>
    <dc:creator>http://www.mingrisoft.com</dc:creator>';
fwrite($fopen,$title);			//д��ͷ�ļ�
include_once("conn/conn.class.php");		//�������ݿ�
$sql="select tb_video_id,tb_video_name,tb_video_picture,tb_video_explain,tb_video_play,tb_video_date from tb_video where tb_video_author='".$_SESSION['name']."'";
$i_rst = $result->getRows($sql,$conn);

$filepath=__FILE__;
$array=explode("\\",$filepath);
$i=count($array);
$filelen=strlen($array[$i-1]);  //�ļ����Ƴ���
$servpath=$_SERVER['DOCUMENT_ROOT']."/";
$start=strlen($servpath); //������Ŀ¼����
$totallen=strlen($filepath);
$sublen=$totallen-$start-$filelen;
$pathtmp=substr($filepath,$start,$sublen);
$newpath="/".str_replace("\\","/",$pathtmp);


for($i=0;$i<count($i_rst);$i++){

//while(!$i_rst -> EOF){	
$item="
	<item>
		<title>".$i_rst[$i][tb_video_name]."</title>
		<link>".$url.$newpath."look.php?video_id=".$i_rst[$i][tb_video_id]."&amp;video_name=".$i_rst[$i][tb_video_name]."</link>			
��		<description>

&lt;a href='".$url.$newpath."look.php?video_id=".$i_rst[$i][tb_video_id]."&amp;video_name=".$i_rst[$i][tb_video_name]."' target='_blank'&gt;&lt;img name=news src=".$i_rst[$i][tb_video_picture]." alt='".$i_rst[$i][tb_video_explain]."' width=130 height=150 border=3 style=border-color:#CCCCCC; margin-top:15px; margin-left:15px; margin-bottom:15px; margin-right:15px;/&gt;&lt;/a&gt;&lt;br/&gt;&lt;br/&gt;


</description>
��		<pubDate>".$i_rst[$i][tb_video_date]."</pubDate>����
	</item>";
if (!fwrite($fopen,$item)){               //�����ݿ��е�����д�뵽�ļ���
	echo "д������ʧ�ܣ�" ;
    exit ; 
	}
    //$i_rst->movenext();
}
fwrite($fopen,"</channel></rss>");               //��xml�ļ��Ľ�����д�뵽�ļ���
fclose($fopen);
echo "<meta http-equiv=\"Refresh\" content=\"0;url=subscibe/$_SESSION[id].xml\">";

?>