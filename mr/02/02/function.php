<?php
function unhtml($content){								//�����Զ��庯��������
	$content=htmlspecialchars($content);                //ת���ı��е������ַ�
	   $content=str_replace(chr(13),"<br>",$content);		//�滻�ı��еĻ��з�
    $content=str_replace(chr(32),"&nbsp;",$content);		//�滻�ı��е�&nbsp;
    $content=str_replace("[_[","<",$content);			//�滻�ı��еĴ��ں�
    $content=str_replace(")_)",">",$content);			//�滻�ı��е�С�ں�
    $content=str_replace("|_|"," ",$content);				//�滻�ı��еĿո�
	return trim($content);								//ɾ���ı�����β�Ŀո�
}
//����һ�����ڽ�ȡһ���ַ����ĺ���msubstr()
function msubstr($str,$start,$len){    	//$strָ�����ַ���,$startָ�����ַ�������ʼλ�ã�$lenָ���ǳ��ȡ�
$tmpstr="";
$strlen=$start+$len;				//��$strlen�洢�ַ������ܳ��ȣ����ַ�������ʼλ�õ��ַ������ܳ��ȣ�
for($i=0;$i<$strlen;$i++){			//ͨ��forѭ�����,ѭ����ȡ�ַ���
	if(ord(substr($str,$i,1))>0xa0){   //����ַ������׸��ֽڵ�ASCII����ֵ����0xa0,���ʾΪ����
 	$tmpstr.=substr($str,$i,2);		//ÿ��ȡ����λ�ַ���������$tmpstr��������һ������
 	$i++;						//�����Լ�1
	}else{						//������Ǻ��֣���ÿ��ȡ��һλ�ַ���������$tmpstr
  		$tmpstr.=substr($str,$i,1);}
	}
return $tmpstr;						//����ַ���
}
?> 
