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
function channel_check(names){
		//��xmlHttp����æʱ���д���
	if(xmlHttp.readyState==4 || xmlHttp.readyState==0){
	//��ȡ�û����߱������������	
		xmlHttp.open("GET","delete_m3u.php?channel_name="+names,true);

	//�����ȡ����������Ӧ�ķ���
	xmlHttp.onreadystatechange=handleServerResponse;
	//���������������
	xmlHttp.send(null);
return false;
	}else
	//���������æ,1�������
	setTimeout('channel_check()',1000);
}
//���յ��������˵���Ϣʱ�Զ�ִ��
function handleServerResponse(){
	//�ڴ������ʱ������һ��
	if(xmlHttp.readystate==4){
		//״̬Ϊ200��ʾ����ɹ�����
		if(xmlHttp.status==200){
			//��ȡ�������˷�����XML��Ϣ
			xmlResponse=xmlHttp.responseText;
			//��ȡXML�е��ĵ�����(������)
			//ʹ�ôӷ������˷�������Ϣ���¿ͻ�����ʾ������
	//		document.getElementById("channel_check").innerHTML=xmlResponse;
			//���¿�ʼ
			//setTimeout('channel_check()',1000);

		}else{
			//���HTTP��״̬����200��ʾ��������
        	alert("There was a problem accessing the server:"+xmlHttp.statusText);
		}
	}
}