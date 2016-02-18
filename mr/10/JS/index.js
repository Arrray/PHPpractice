var Layer='';
document.onmouseup=moveEnd;
document.onmousemove=moveStart;
var b;
var c;
function Move(Object,event){
	Layer=Object.id;
	if(document.all){
		document.getElementById(Layer).setCapture();
		b=event.x-document.getElementById(Layer).style.pixelLeft;
		c=event.y-document.getElementById(Layer).style.pixelTop;
	}else if(window.captureEvents){
		window.captureEvents(Event.MOUSEMOVE|Event.MOUSEUP);
		b=event.layerX;
		c=event.layerY;
	}
	/**实现鼠标单击字条时，字条置上**/
		document.getElementById(Layer).style.zIndex=iLayerMaxNum;
		iLayerMaxNum=iLayerMaxNum+1;
	/********************************/
}
function moveStart(d){
	if(Layer!=''){
		if(document.all){
			document.getElementById(Layer).style.left=event.x-b;
			document.getElementById(Layer).style.top=event.y-c;
		}else if(window.captureEvents){
			document.getElementById(Layer).style.left=(d.clientX-b)+"px";
			document.getElementById(Layer).style.top=(d.clientY-c)+"px";
		}
	}
}
function moveEnd(d){
	if(Layer!=''){
		if(document.all){
			document.getElementById(Layer).releaseCapture();
			Layer='';
		}else if(window.captureEvents){
			window.captureEvents(Event.MOUSEMOVE|Event.MOUSEUP);
			Layer='';
		}
	}
}

//关闭许愿纸条
function myClose(n){
	document.getElementById(n).style.display='none';
}

//查询许愿纸条并设置纸条显示特效
 function searchScrip(id,divName){
	if(document.getElementById(id)){
	document.getElementById(id).style.zIndex =iLayerMaxNum;
	document.getElementById(divName).style.display = "block";
	document.getElementById(divName).style.zIndex = iLayerMaxNum;
	var size1 = getPageSize1();
	document.getElementById(divName).style.width = size1[0];
	document.getElementById(divName).style.height = size1[1];	
	}
}
//设置纸条显示的区域
function getPageSize1(){
	var width =document.body.clientWidth;
	var high= document.body.clientHeight;
	arrayPageSize = new Array(width,high); 
	return arrayPageSize;
}

//纸条显示特效
function Show(n,divName){
	document.getElementById(n).style.zIndex =iLayerMaxNum+1;
	document.getElementById(divName).style.display = "block";
	document.getElementById(divName).style.zIndex = iLayerMaxNum;
	var size = getPageSize();
	document.getElementById(divName).style.width = size[0];
	document.getElementById(divName).style.height = size[1];	
}	

//隐藏纸条
function Hide(){
	document.getElementById("shadeDiv").style.display = "none";
	iLayerMaxNum=iLayerMaxNum+2;
}

//设置纸条显示的区域
function getPageSize(){
	var w =document.body.clientWidth;
	var h= document.body.clientHeight;
	arrayPageSize = new Array(w,h); 
	return arrayPageSize;
}

/***************************************添加许愿祝福人气*****************************************************************/
function holdout(id,hits){
	if(id>0){
		var loader=new net.AjaxRequest("hit.php?id="+id+"&hits="+hits+"&nocache="+new Date().getTime(),deal,onerror,"GET");
	}
}
function onerror(){
	alert("出错了，请重新打开！");
	window.location.href="index.php";
}
function deal(){
	fq_id=this.req.responseText;
	var hitsId="fq_id"+fq_id.substr(0,fq_id.indexOf("#"));
	hitsId=hitsId.replace(/\s/g,"");	//去除字符串中的Unicode空白符
	var hitsNum=fq_id.substr(fq_id.indexOf("#")+1,fq_id.length-fq_id.indexOf("#")-1);	
	document.getElementById(hitsId).innerHTML=hitsNum;
}
/*******************************************************************************************************************/

function deal_s(){
	/***获取字条编号*/
	var h=this.req.responseText;
	h=h.replace(/\s/g,"");	//去除字符串中的Unicode空白符
	var id=h.substr(h.indexOf("[")+1,h.indexOf("]")-h.indexOf("[")-1);
	/****************/
	if(h!="很报谦，您的字条发送失败！"){
		createNewScrip(id);		//显示该字条
		Show(id,'shadeDiv');	//设置新添加的字条突出显示
	}
	initialization();	//初始化添加字条窗口
	document.getElementById("scrip_add").style.display="none";
	document.getElementById("notClickDiv").style.display ="none";
}

