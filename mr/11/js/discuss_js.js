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
function process(){
	if(form1_discuss.tb_discuss_content.value==""){
		alert("�������������ݣ�");
		form1_discuss.tb_discuss_content.select();
		return(false);
		}
	
	//��xmlHttp����æʱ���д���
	if(xmlHttp.readyState==4 || xmlHttp.readyState==0){
	//��ȡ�û����߱������������	

user = document.getElementById("tb_discuss_user").value;
	
	 content= document.getElementById("tb_discuss_content").value;
	dates = document.getElementById("tb_discuss_date").value;
	ids = document.getElementById("tb_video_id").value;
	//�ڷ�������ִ��quickstart.php
	xmlHttp.open("GET","discuss_ok.php?discuss_user="+user+"& discuss_content="+content+"& discuss_date="+dates+"& video_id="+ids,true);
	//�����ȡ����������Ӧ�ķ���
	xmlHttp.onreadystatechange=handleServerResponse;
	//���������������
	xmlHttp.send(null); return false;
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
if(xmlResponse!=2){
alert('�ɹ�');
document.getElementById("discuss_id").innerHTML=xmlResponse;
}else{
alert('ʧ��');
}

			//document.getElementById("discuss_id").innerHTML='<i>'+helloMessage+'</i>';
			//���¿�ʼ
		}else{
			//���HTTP��״̬����200��ʾ��������
        	alert("There was a problem accessing the server:"+xmlHttp.statusText);
		}
	}
}


function artpagination(url){
	xmlHttp.open('get',url,true);
	xmlHttp.onreadystatechange = function(){
		if(xmlHttp.readystate == 4 && xmlHttp.status == 200){
			document.getElementById("discuss_id").innerHTML = xmlHttp.responseText;
		}
	}
	xmlHttp.send(null);
}


function SetFull(){
	if(!document.rp1.CanStop()){
		alert("��Ƶδ��ʼ�����޷��л�Ϊȫ��ģʽ");
	}else{
		alert("����ȫ�����Ű�ť����ȫ������ģʽ����ESC���˳�");
		document.rp1.SetFullScreen();
}

}
