//����XMLHttpRrequest����
var xmlHttp=createXmlHttpRequestObject();

//��ȡXMLHttpRrequest����
function createXmlHttpRequestObject(){
	//�����洢��Ҫʹ�õ�XMLHttpRrequest����
	var xmlHttp;
	//�����internet Explorer������
	if(window.ActiveXObject){
		try{
			xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		}catch(e){
			xmlHttp=false;
		}

	}else{
	//�����Mozilla�������������������
		try{
			xmlHttp=new XMLHttpRequest();
		}catch(e){
			xmlHttp=false;
		}
	}
	 //���ش����Ķ������ʾ������Ϣ
	if(!xmlHttp)
		alert("���ش����Ķ������ʾ������Ϣ");
		else
		return xmlHttp;
}
//ʹ��XMLHttpRequest���󴴽��첽HTTP����
function artpagination(url){			//�����Զ��庯������ȡ���ݵĲ���
	xmlHttp.open('get',url,true);		//���ݴ��ݵĲ�����ͨ��get������ִ������һ��ʵ�ַ�ҳ���ܵ��ļ�
	xmlHttp.onreadystatechange = function(){
		if(xmlHttp.readyState == 4 && xmlHttp.status == 200){	//��������ص�div��ǩsynopsis��
			document.getElementById("synopsis").innerHTML = xmlHttp.responseText;
		}
	}
	xmlHttp.send(null);
}



