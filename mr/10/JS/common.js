/*******˫����һЩЧ��,����Ϊ������js********/
function checkUrl()
{
	var url=window.location.href;
	var result = false;
	var i = 0;
	var len = url.length;
	
	if(url.indexOf("lovewall/?")!=-1)
	{
		result=true;
	}
	else
	{
		while ((i = url.indexOf("/")) != -1)
		{
			url = url.substring(i + 1, len);
			len = url.length;
		}
		//����ѭ�����ˣ�url�������һ��'/'�����������
		if (url != "")
		{
			if(url.indexOf("index.php")!=-1)
			{
				result=true;
			}
		}
		else
		{
			result=true;
		}
	}
	return result;
}
function createxmlhttprequest()
{
        var xmlhttp=false;
        try
        {
            xmlhttp=new ActiveXObject('Msxm12.XMLHTTP');
        }
        catch(e)
        {
            try
            {
                xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');
            }
            catch(e)
            {
                try
                {
                    xmlhttp=new XmlHttpRequest();
                }
                catch(e)
                {
                }
            }
         }
        return xmlhttp;
}
function FindLove(){
	var noStr = document.getElementById("keyword").value;
	var no = parseInt(noStr);
	if(isNaN(no)){
		alert("[��ǽ��]���������ְ�");
		return;
	}else if(no < 1){
		alert("[��ǽ��]������������");
		return;
	}else{
		
		if(checkUrl())
		{
			var div=document.getElementsByTagName("div");
			var e='Layer'+no;
			var flag=false;
			for (var i=0;i<div.length;i++)
			{
			if(e==div[i].id)
			{
				flag=true;
				break;
			}
		}
		if(flag){Show(no);}
		else
		{
			var xmlhttp=createxmlhttprequest();
			xmlhttp.open("get","findLove.php?id="+no,true);
			xmlhttp.onreadystatechange=function(){
				if(xmlhttp.readyState==4)
				{
					if(xmlhttp.status==200)
					{
						var rs=xmlhttp.responseText;
						if(rs!="null")
						{
						document.getElementById("main").innerHTML+=rs;
						Show(no);
						}
						else
						{
							alert('���޴���Ը��');
						}
					}
				}
			}
			xmlhttp.send(null);
			delete(xmlhttp);
		}
		}
		else
		{
			location.href="index.php?id="+no;
		}
	}
}
