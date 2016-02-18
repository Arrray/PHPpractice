/*******双击后一些效果,以下为新增的js********/
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
		//上面循环到此，url就是最后一个'/'后面的内容了
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
		alert("[爱墙号]必须是数字啊");
		return;
	}else if(no < 1){
		alert("[爱墙号]必须是整数啊");
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
							alert('查无此许愿！');
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
