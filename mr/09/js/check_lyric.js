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
function process(ids){
	
	//��xmlHttp����æʱ���д���
	if(xmlHttp.readyState==4 || xmlHttp.readyState==0){
	xmlHttp.open("GET","lyric.php?id="+ids,true);
	//�����ȡ����������Ӧ�ķ���
	xmlHttp.onreadystatechange=handleServerResponse;
	//���������������
	xmlHttp.send(null);
	}else
	//���������æ,1�������
	setTimeout('process()',1000);
}
//���յ��������˵���Ϣʱ�Զ�ִ��
function handleServerResponse(){
	//�ڴ������ʱ������һ��
	if(xmlHttp.readystate==4){
		//״̬Ϊ200��ʾ����ɹ�����
		if(xmlHttp.status==200){
			//��ȡ�������˷�����XML��Ϣ
			xmlResponse=xmlHttp.responseText;
			document.getElementById("lrcContent").innerHTML=xmlResponse;
		}else{
			//���HTTP��״̬����200��ʾ��������
        	alert("There was a problem accessing the server:"+xmlHttp.statusText);
		}
	}
}
