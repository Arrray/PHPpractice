helpstat = false;
basic = false;
function AddText(NewCode) {
	document.all("file").value+=NewCode
}
function showsize(size) {
	if (helpstat) {
		alert("���ִ�С���\n�������ִ�С.\n�ɱ䷶Χ 1 - 6.\n 1 Ϊ��С 6 Ϊ���.\n�÷�: <size="+size+">���� "+size+" ����</size>");
	} else if (basic) {
		AddTxt="<font size="+size+"></font>";
		AddText(AddTxt);
	} else {                       
		txt=prompt("��С "+size,"����"); 
		if (txt!=null) {             
			AddTxt="<font size="+size+">"+txt;
			AddText(AddTxt);
			AddTxt="</font>";
			AddText(AddTxt);
		}        
	}
}

function bold() {
	if (helpstat) {
		alert("�Ӵֱ��\nʹ�ı��Ӵ�.\n�÷�: <b>���ǼӴֵ�����</b>");
	} else if (basic) {
		AddTxt="<b></b>";
		AddText(AddTxt);
	} else {  
		txt=prompt("���ֽ������.","������������Ҫ�Ӵֵ����֣�");     
		if (txt!=null) {           
			AddTxt="<b>"+txt;
			AddText(AddTxt);
			AddTxt="</b>";
			AddText(AddTxt);
		}       
	}
}

function italicize() {
	if (helpstat) {
		alert("б����\nʹ�ı������Ϊб��.\n�÷�: <i>����б����</i>");
	} else if (basic) {
		AddTxt="<i></i>";
		AddText(AddTxt);
	} else {   
		txt=prompt("���ֽ���б��","������������Ҫ��б�����֣�");     
		if (txt!=null) {           
			AddTxt="<i>"+txt;
			AddText(AddTxt);
			AddTxt="</i>";
			AddText(AddTxt);
		}	        
	}
}

function showcolor(color) {
	if (helpstat) {
		alert("��ɫ���\n�����ı���ɫ.  �κ���ɫ�������Ա�ʹ��.\n�÷�: <color="+color+">��ɫҪ�ı�Ϊ"+color+"������</color>");
	} else if (basic) {
		AddTxt="<font color="+color+"></font>";
		AddText(AddTxt);
	} else {  
     	txt=prompt("ѡ�����ɫ��: "+color,"������������Ҫ�ı���ɫ�����֣�");
		if(txt!=null) {
			AddTxt="<font color="+color+">"+txt;
			AddText(AddTxt);        
			AddTxt="</font>";
			AddText(AddTxt);
		} 
	}
}
function img() {
	if (helpstat) {
		alert("���ͼƬ\nʹ�þ���·��.\n�÷�: <img src=http://>���ͼƬ");
	} else if (basic) {
		AddTxt="<img src=http://>";
		AddText(AddTxt);
	} else {  
		txt=prompt("���ͼƬ.","������������ͼƬ�ľ���·��");     
		if (txt!=null) {           
			AddTxt="<img src="+txt;
			AddText(AddTxt);
			AddTxt=">";
			AddText(AddTxt);
		}       
	}
}

function showfont(font) {
 	if (helpstat){
		alert("������\n��������������.\n�÷�: <font="+font+">�ı���������Ϊ"+font+"</font>");
	} else if (basic) {
		AddTxt="<font face="+font+"></font>";
		AddText(AddTxt);
	} else {                  
		txt=prompt("Ҫ�������������"+font,"������������Ҫ�ı���������֣�");
		if (txt!=null) {             
			AddTxt="<font face="+font+">"+txt;
			AddText(AddTxt);
			AddTxt="</font>";
			AddText(AddTxt);
		}        
	}  
}

function underline() {
  	if (helpstat) {
		alert("�»��߱��\n�����ּ��»���.\n�÷�: <u>Ҫ���»��ߵ�����</u>");
	} else if (basic) {
		AddTxt="<u></u>";
		AddText(AddTxt);
	} else {  
		txt=prompt("�»�������.","����");     
		if (txt!=null) {           
			AddTxt="<u>"+txt;
			AddText(AddTxt);
			AddTxt="</u>";
			AddText(AddTxt);
		}	        
	}
}