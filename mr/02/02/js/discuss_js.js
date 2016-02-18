//定义XMLHttpRrequest对象
var xmlHttp=createXmlHttpRequestObject();

//获取XMLHttpRrequest对象
function createXmlHttpRequestObject(){
	//用来存储将要使用的XMLHttpRrequest对象
	var xmlHttp;
	//如果在internet Explorer下运行
	if(window.ActiveXObject){
		try{
			xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		}catch(e){
			xmlHttp=false;
		}

	}else{
	//如果在Mozilla或其他的浏览器下运行
		try{
			xmlHttp=new XMLHttpRequest();
		}catch(e){
			xmlHttp=false;
		}
	}
	 //返回创建的对象或显示错误信息
	if(!xmlHttp)
		alert("返回创建的对象或显示错误信息");
		else
		return xmlHttp;
}
//使用XMLHttpRequest对象创建异步HTTP请求
function artpagination(url){			//创建自定义函数，获取传递的参数
	xmlHttp.open('get',url,true);		//根据传递的参数，通过get方法，执行另外一个实现分页功能的文件
	xmlHttp.onreadystatechange = function(){
		if(xmlHttp.readyState == 4 && xmlHttp.status == 200){	//将结果返回到div标签synopsis中
			document.getElementById("synopsis").innerHTML = xmlHttp.responseText;
		}
	}
	xmlHttp.send(null);
}



