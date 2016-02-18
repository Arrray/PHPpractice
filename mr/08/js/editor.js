var IMAGE_PATH;
var ICON_PATH;
var IMAGE_ATTACH_PATH;
var IMAGE_UPLOAD_CGI;
var MENU_BORDER_COLOR;
var MENU_BG_COLOR;
var MENU_TEXT_COLOR;
var MENU_SELECTED_COLOR;
var TOOLBAR_BORDER_COLOR;
var TOOLBAR_BG_COLOR;
var FORM_BORDER_COLOR;
var FORM_BG_COLOR;
var BUTTON_COLOR;
var OBJ_NAME;
var SELECTION;
var RANGE;
var RANGE_TEXT;
var EDITFORM_DOCUMENT;
var IMAGE_DOCUMENT;
var FLASH_DOCUMENT;
var LINK_DOCUMENT;
var BROWSER;
var TOOLBAR_ICON;
var EDITOR_TYPE;
var SAFE_MODE;

var MSG_INPUT_URL = "请输入正确的URL地址。";
var MSG_SELECT_IMAGE = "请选择图片。";
var MSG_INVALID_IMAGE = "只能选择GIF,JPG,PNG,BMP格式的图片，请重新选择。";
var MSG_INVALID_FLASH = "只能选择SWF格式的文件，请重新选择。";
var MSG_INVALID_FLV = "只能选择FLV格式的文件，请重新选择。";
var MSG_INVALID_MEDIA = "只能选择MP3,WAV,WMA,WMV,MID,AVI,MPG,ASF格式的文件，请重新选择。";
var MSG_INVALID_REAL = "只能选择RM,RMVB格式的文件，请重新选择。";
var MSG_INVALID_WIDTH = "宽度不是数字，请重新输入。";
var MSG_INVALID_HEIGHT = "高度不是数字，请重新输入。";
var MSG_INVALID_BORDER = "边框不是数字，请重新输入。";
var MSG_INVALID_HSPACE = "横隔不是数字，请重新输入。";
var MSG_INVALID_VSPACE = "竖隔不是数字，请重新输入。";
var STR_TITLE = "描述";
var STR_WIDTH = "宽";
var STR_HEIGHT = "高";
var STR_BORDER = "边";
var STR_ALIGN = "对齐方式";
var STR_HSPACE = "横隔";
var STR_VSPACE = "竖隔";
var STR_BUTTON_CONFIRM = "确定";
var STR_BUTTON_CANCEL = "取消";
var STR_BUTTON_PREVIEW = "预览";
var STR_IMAGE_LOCAL = "本地";
var STR_IMAGE_REMOTE = "地址";
var STR_LINK_BLANK = "新窗口";
var STR_LINK_NOBLANK = "当前窗口";
var STR_LINK_TARGET = "目标";
var STR_INPUT_CONTENT = "请输入内容";

var EDITOR_FONT_FAMILY = "SimSun";

var FONT_NAME = Array(
					Array('SimSun', '宋体'), 
					Array('SimHei', '黑体'), 
					Array('FangSong_GB2312', '仿宋体'), 
					Array('KaiTi_GB2312', '楷体'), 
					Array('NSimSun', '新宋体'), 
					Array('Arial', 'Arial'), 
					Array('Arial Black', 'Arial Black'), 
					Array('Times New Roman', 'Times New Roman'), 
					Array('Courier New', 'Courier New'), 
					Array('Tahoma', 'Tahoma'), 
					Array('Verdana', 'Verdana'), 
					Array('GulimChe', 'GulimChe'), 
					Array('MS Gothic', 'MS Gothic') 
					);
var ZOOM_TABLE = Array('250%', '200%', '150%', '120%', '100%', '80%', '50%');
var TITLE_TABLE = Array(
					Array('H1', '标题 1'), 
					Array('H2', '标题 2'), 
					Array('H3', '标题 3'), 
					Array('H4', '标题 4'), 
					Array('H5', '标题 5'), 
					Array('H6', '标题 6')
					);
var FONT_SIZE = Array(
					Array(1,'8pt'), 
					Array(2,'10pt'), 
					Array(3,'12pt'), 
					Array(4,'14pt'), 
					Array(5,'16pt'), 
					Array(6,'24pt'), 
					Array(7,'36pt')
				);
var SPECIAL_CHARACTER = Array('§','№','☆','★','○','●','◎','◇','◆','□','℃','‰','■','△','▲','※',
							'→','←','↑','↓','〓','¤','°','＃','＆','＠','＼','︿','＿','￣','─','α',
							'β','γ','δ','ε','ζ','η','θ','ι','κ','λ','μ','ν','ξ','ο','π','ρ',
							'σ','τ','υ','φ','χ','ψ','ω','≈','≡','≠','＝','≤','≥','＜','＞','≮',
							'≯','∷','±','＋','－','×','÷','／','∫','∮','∝','∞','∧','∨','∑','∏',
							'∪','∩','∈','∵','∴','⊥','‖','∠','⌒','⊙','≌','∽','〖','〗','【','】','（','）','〔','〕');
var TOP_TOOLBAR_ICON = Array(
						Array('Ft_UNDO', 'undo.gif', '回退'),
						Array('Ft_REDO', 'redo.gif', '前进'),
						Array('Ft_CUT', 'cut.gif', '剪切'),
						Array('Ft_COPY', 'copy.gif', '复制'),
						Array('Ft_PASTE', 'paste.gif', '粘贴'),
						Array('Ft_SELECTALL', 'selectall.gif', '全选'),
						Array('Ft_JUSTIFYLEFT', 'justifyleft.gif', '左对齐'),
						Array('Ft_JUSTIFYCENTER', 'justifycenter.gif', '居中'),
						Array('Ft_JUSTIFYRIGHT', 'justifyright.gif', '右对齐'),
						Array('Ft_JUSTIFYFULL', 'justifyfull.gif', '两端对齐'),
						Array('Ft_NUMBEREDLIST', 'numberedlist.gif', '编号'),
						Array('Ft_UNORDERLIST', 'unorderedlist.gif', '项目符号'),
						Array('Ft_SUBSCRIPT', 'subscript.gif', '下标'),
						Array('Ft_SUPERSCRIPT', 'superscript.gif', '上标'),
						Array('Ft_DATE', 'date.gif', '日期'),
						Array('Ft_TIME', 'time.gif', '时间'),
						Array('Ft_SOURCE', 'source.gif', '视图转换')
				  );
var BOTTOM_TOOLBAR_ICON = Array(
						Array('Ft_FONTNAME', 'font.gif', '字体'),
						Array('Ft_FONTSIZE', 'fontsize.gif', '文字大小'),
						Array('Ft_TEXTCOLOR', 'textcolor.gif', '文字颜色'),
						Array('Ft_BGCOLOR', 'bgcolor.gif', '文字背景'),
						Array('Ft_BOLD', 'bold.gif', '粗体'),
						Array('Ft_ITALIC', 'italic.gif', '斜体'),
						Array('Ft_UNDERLINE', 'underline.gif', '下划线'),
						Array('Ft_STRIKE', 'strikethrough.gif', '删除线'),
						Array('Ft_REMOVE', 'removeformat.gif', '删除格式'),
						Array('Ft_TABLE', 'table.gif', '插入表格'),
						Array('Ft_HR', 'hr.gif', '插入横线'),
						Array('Ft_LINK', 'link.gif', '创建超级连接'),
						Array('Ft_UNLINK', 'unlink.gif', '删除超级连接'),
						Array('Ft_IMAGE', 'image.gif', '插入图片'),
						Array('Ft_FLASH', 'flash.gif', '插入Flash')
				  );
var SIMPLE_TOOLBAR_ICON = Array(
						Array('Ft_FONTNAME', 'font.gif', '字体'),
						Array('Ft_FONTSIZE', 'fontsize.gif', '文字大小'),
						Array('Ft_TEXTCOLOR', 'textcolor.gif', '文字颜色'),
						Array('Ft_BGCOLOR', 'bgcolor.gif', '文字背景'),
						Array('Ft_BOLD', 'bold.gif', '粗体'),
						Array('Ft_ITALIC', 'italic.gif', '斜体'),
						Array('Ft_UNDERLINE', 'underline.gif', '下划线'),
						Array('Ft_JUSTIFYLEFT', 'justifyleft.gif', '左对齐'),
						Array('Ft_JUSTIFYCENTER', 'justifycenter.gif', '居中'),
						Array('Ft_JUSTIFYRIGHT', 'justifyright.gif', '右对齐'),
						Array('Ft_IMAGE', 'image.gif', '插入图片'),
						Array('Ft_HR', 'hr.gif', '插入横线'),
						Array('Ft_LINK', 'link.gif', '创建超级连接'),
						Array('Ft_UNLINK', 'unlink.gif', '删除超级连接')
				  );
var POPUP_MENU_TABLE = Array("Ft_ZOOM", "Ft_TITLE", "Ft_FONTNAME", "Ft_FONTSIZE", "Ft_TEXTCOLOR", "Ft_BGCOLOR", 
							"Ft_LAYER", "Ft_TABLE", "Ft_HR", "Ft_SPECIALCHAR", "Ft_IMAGE", "Ft_FLASH", "Ft_LINK");
var COLOR_TABLE = Array(
						"#FF0000", "#FFFF00", "#00FF00", "#00FFFF", "#0000FF", "#FF00FF", "#FFFFFF", "#F5F5F5", "#DCDCDC", "#FFFAFA",
						"#D3D3D3", "#C0C0C0", "#A9A9A9", "#808080", "#696969", "#000000", "#2F4F4F", "#708090", "#778899", "#4682B4",
						"#4169E1", "#6495ED", "#B0C4DE", "#7B68EE", "#6A5ACD", "#483D8B", "#161670", "#000080", "#00008B", "#0000CD",
						"#1E90FF", "#00BFFF", "#87CEFA", "#87CEEB", "#ADD8E6", "#B0E0E6", "#F0FFFF", "#E0FFFF", "#AFEEEE", "#00CED1",
						"#5F9EA0", "#48D1CC", "#00FFFF", "#40E0D0", "#20B2AA", "#008B8B", "#008080", "#7FFFD4", "#66CDAA", "#8FBC8F",
						"#3CB371", "#2E8B57", "#006400", "#008000", "#228B22", "#32CD32", "#00FF00", "#7FFF00", "#7CFC00", "#ADFF2F",
						"#98FB98", "#90EE90", "#00FF7F", "#00FA9A", "#556B2F", "#6B8E23", "#808000", "#BDB76B", "#B8860B", "#DAA520",
						"#FFD700", "#F0E68C", "#EEE8AA", "#FFEBCD", "#FFE4B5", "#F5DEB3", "#FFDEAD", "#DEB887", "#D2B48C", "#BC8F8F",
						"#A0522D", "#8B4513", "#D2691E", "#CD853F", "#F4A460", "#8B0000", "#800000", "#A52A2A", "#B22222", "#CD5C5C",
						"#F08080", "#FA8072", "#E9967A", "#FFA07A", "#FF7F50", "#FF6347", "#FF8C00", "#FFA500", "#FF4500", "#DC143C",
						"#FF0000", "#FF1493", "#FF00FF", "#FF69B4", "#FFB6C1", "#FFC0CB", "#DB7093", "#C71585", "#800080", "#8B008B",
						"#9370DB", "#8A2BE2", "#4B0082", "#9400D3", "#9932CC", "#BA55D3", "#DA70D6", "#EE82EE", "#DDA0DD", "#D8BFD8",
						"#E6E6FA", "#F8F8FF", "#F0F8FF", "#F5FFFA", "#F0FFF0", "#FAFAD2", "#FFFACD", "#FFF8DC", "#FFFFE0", "#FFFFF0",
						"#FFFAF0", "#FAF0E6", "#FDF5E6", "#FAEBD7", "#FFE4C4", "#FFDAB9", "#FFEFD5", "#FFF5EE", "#FFF0F5", "#FFE4E1"
					);
var IMAGE_ALIGN_TABLE = new Array("baseline", "top", "middle", "bottom", "texttop", "absmiddle", "absbottom", "left", "right");

function FtGetBrowser()
{
	var browser = '';
	var agentInfo = navigator.userAgent.toLowerCase();
	if (agentInfo.indexOf("msie") > -1) {
		var re = new RegExp("msie\\s?([\\d\\.]+)","ig");
		var arr = re.exec(agentInfo);
		if (parseInt(RegExp.$1) >= 5.5) {
			browser = 'IE';
		}
	} else if (agentInfo.indexOf("firefox") > -1) {
		browser = 'FF';
	} else if (agentInfo.indexOf("netscape") > -1) {
		var temp1 = agentInfo.split(' ');
		var temp2 = temp1[temp1.length-1].split('/');
		if (parseInt(temp2[1]) >= 7) {
			browser = 'NS';
		}
	} else if (agentInfo.indexOf("gecko") > -1) {
		browser = 'ML';
	} else if (agentInfo.indexOf("opera") > -1) {
		var temp1 = agentInfo.split(' ');
		var temp2 = temp1[0].split('/');
		if (parseInt(temp2[1]) >= 9) {
			browser = 'OPERA';
		}
	}
	return browser;
}
function FtGetFileName(file, separator)
{
	var temp = file.split(separator);
	var len = temp.length;
	var fileName = temp[len-1];
	return fileName;
}
function FtGetFileExt(fileName)
{
	var temp = fileName.split(".");
	var len = temp.length;
	var fileExt = temp[len-1].toLowerCase();
	return fileExt;
}
function FtCheckImageFileType(file, separator)
{
	if (separator == "/" && file.match(/http:\/\/.{3,}/) == null) {
		alert(MSG_INPUT_URL);
		return false;
	}
	var fileName = FtGetFileName(file, separator);
	var fileExt = FtGetFileExt(fileName);
	if (fileExt != 'gif' && fileExt != 'jpg' && fileExt != 'png' && fileExt != 'bmp') {
		alert(MSG_INVALID_IMAGE);
		return false;
	}
	return true;
}
function FtCheckFlashFileType(file, separator)
{
	if (file.match(/http:\/\/.{3,}/) == null) {
		alert(MSG_INPUT_URL);
		return false;
	}
	var fileName = FtGetFileName(file, "/");
	var fileExt = FtGetFileExt(fileName);
	if (fileExt != 'swf') {
		alert(MSG_INVALID_FLASH);
		return false;
	}
	return true;
}
function FtCheckFlvFileType(file, separator)
{
	if (file.match(/http:\/\/.{3,}/) == null) {
		alert(MSG_INPUT_URL);
		return false;
	}
	var fileName = FtGetFileName(file, "/");
	var fileExt = FtGetFileExt(fileName);
    if (fileExt != 'flv'){
	    alert(MSG_INVALID_FLV);
		return false;
	}
	return true;
}
function FtCheckMediaFileType(cmd, file, separator)
{
	if (file.match(/http:\/\/.{3,}/) == null) {
		alert(MSG_INPUT_URL);
		return false;
	}
	var fileName = FtGetFileName(file, "/");
	var fileExt = FtGetFileExt(fileName);
	if (cmd == 'Ft_REAL') {
		if (fileExt != 'rm' && fileExt != 'rmvb') {
			alert(MSG_INVALID_REAL);
			return false;
		}
	} else {
		if (fileExt != 'mp3' && fileExt != 'wav' && fileExt != 'wma' && fileExt != 'wmv' && fileExt != 'mid' && fileExt != 'avi' && fileExt != 'mpg' && fileExt != 'asf') {
			alert(MSG_INVALID_MEDIA);
			return false;
		}
	}
	return true;
}
function FtHtmlToXhtml(str) 
{
	str = str.replace(/<p(.*?>)/gi, "<div$1");
	str = str.replace(/<\/p>/gi, "</div>");
	str = str.replace(/<br.*?>/gi, "<br />");
	str = str.replace(/(<hr[^>]*[^\/])(>)/gi, "$1 />");
	str = str.replace(/(<img[^>]*[^\/])(>)/gi, "$1 />");
	str = str.replace(/(<\w+)(.*?>)/gi, function ($0,$1,$2) {
						return($1.toLowerCase() + FtConvertAttribute($2));
					}
				);
	str = str.replace(/(<\/\w+>)/gi, function ($0,$1) {
						return($1.toLowerCase());
					}
				);
	str = FtTrim(str);
	return str;
}
function htmltoubb(str) {
 str = str.replace(/\r/g,"");
 str = str.replace(/on(load|click|dbclick|mouseover|mousedown|mouseup)="[^"]+"/ig,"");
 str = str.replace(/<script[^>]*?>([\w\W]*?)<\/script>/ig,""); 
 str = str.replace(/<a[^>]+href="([^"]+)"[^>]*>(.*?)<\/a>/ig,"\n[url=$1]$2[/url]\n"); 
 str = str.replace(/<font[^>]+color=([^ >]+)[^>]*>(.*?)<\/font>/ig,"\n[color=$1]$2[/color]\n");
 str = str.replace(/<img[^>]+src="([^"]+)"[^>]*>/ig,"\n[img]$1[/img]\n");
 str = str.replace(/<([\/]?)b>/ig,"[$1b]");
 str = str.replace(/<([\/]?)strong>/ig,"[$1b]");
 str = str.replace(/<([\/]?)u>/ig,"[$1u]");
 str = str.replace(/<([\/]?)i>/ig,"[$1i]");
 
 str = str.replace(/&nbsp;/g," ");
 str = str.replace(/&amp;/g,"&");
 str = str.replace(/&quot;/g,"\"");
 str = str.replace(/&lt;/g,"<");
 str = str.replace(/&gt;/g,">");
 
 str = str.replace(/<br>/ig,"\n");
 str = str.replace(/<br.*?>/ig,"\n");
 str = str.replace(/<[^>]*?>/g,"");
 str = str.replace(/\[url=([^\]]+)\]\n(\[img\]\1\[\/img\])\n\[\/url\]/g,"$2");
 str = str.replace(/\n+/g,"\n");
 return str;
}
function nohtml(str) {
 str=str.replace(/<\/?[^>]+>/g,"");
 str=str.replace(/[ | ]*\n/g,'\n');;
 str=str.replace(/\n[\s| | ]*\r/g,'\n');
 return str;
}
function FtConvertAttribute(str)
{
	str = FtConvertAttributeChild(str, 'style', '[^\"\'>]+');
	str = FtConvertAttributeChild(str, 'src', '[^\"\'\\s>]+');
	str = FtConvertAttributeChild(str, 'href', '[^\"\'\\s>]+');
	str = FtConvertAttributeChild(str, 'color', '[^\"\'\\s>]+');
	str = FtConvertAttributeChild(str, 'alt', '[^\"\'\\s>]+');
	str = FtConvertAttributeChild(str, 'title', '[^\"\'\\s>]+');
	str = FtConvertAttributeChild(str, 'type', '[^\"\'\\s>]+');
	str = FtConvertAttributeChild(str, 'face', '[^\"\'\\s>]+');
	str = FtConvertAttributeChild(str, 'id', '\\w+');
	str = FtConvertAttributeChild(str, 'name', '\\w+');
	str = FtConvertAttributeChild(str, 'dir', '\\w+');
	str = FtConvertAttributeChild(str, 'target', '\\w+');
	str = FtConvertAttributeChild(str, 'align', '\\w+');
	str = FtConvertAttributeChild(str, 'width', '[\\w%]+');
	str = FtConvertAttributeChild(str, 'height', '[\\w%]+');
	str = FtConvertAttributeChild(str, 'border', '[\\w%]+');
	str = FtConvertAttributeChild(str, 'hspace', '[\\w%]+');
	str = FtConvertAttributeChild(str, 'vspace', '[\\w%]+');
	str = FtConvertAttributeChild(str, 'size', '[\\w%]+');
	str = FtConvertAttributeChild(str, 'cellspacing', '\\d+');
	str = FtConvertAttributeChild(str, 'cellpadding', '\\d+');
	if (SAFE_MODE == true) {
		str = FtClearAttributeScriptTag(str);
	}
	return str;
}
function FtConvertAttributeChild(str, attName, regStr)
{
	var re = new RegExp("("+attName+"=)[\"']?("+regStr+")[\"']?", "ig");
	var reUrl = new RegExp("http://(/.*)", "i");
	str = str.replace(re, function ($0,$1,$2) {
						var val = $2;
						if (val.match(reUrl) != null) {
							val = val.replace(reUrl, "$1");
						}
						if (BROWSER == 'IE' && attName.match(/style/i) != null) {
							return($1.toLowerCase() + "\"" + val.toLowerCase() + "\"");
						} else {
							return($1.toLowerCase() + "\"" + val + "\"");
						}
					}
				);
	return str;
}
function FtClearAttributeScriptTag(str)
{
	var re = new RegExp("(\\son[a-z]+=)[\"']?[^>]*?[^\\\\\>][\"']?([\\s>])","ig");
	str = str.replace(re, function ($0,$1,$2) {
						return($1.toLowerCase() + "\"\"" + $2);
					}
				);
	return str;
}
function FtClearScriptTag(str)
{
	if (SAFE_MODE == false) {
		return str;
	}
	str = str.replace(/<(script.*?)>/gi, "[$1]");
	str = str.replace(/<\/script>/gi, "[/script]");
	return str;
}
function FtTrim(str)
{
	str = str.replace(/^\s+|\s+$/g, "");
	str = str.replace(/[\r\n]+/g, "\r\n");
	return str;
}
function FtHtmlentities(str)
{
	str = str.replace(/&/g,'&amp;');
	str = str.replace(/</g,'&lt;');
	str = str.replace(/>/g,'&gt;');
	str = str.replace(/"/g,'&quot;');
	return str;
}
function FtHtmlentitiesDecode(str)
{
	str = str.replace(/&lt;/g,'<');
	str = str.replace(/&gt;/g,'>');
	str = str.replace(/&quot;/g,'"');
	str = str.replace(/&amp;/g,'&');
	return str;
}
function FtGetTop(id)
{
	var top = 28;
	var tmp = '';
	var obj = document.getElementById(id);
	while (eval("obj" + tmp).tagName != "BODY") {
		tmp += ".offsetParent";
		top += eval("obj" + tmp).offsetTop;
	}
	return top;
}
function FtGetLeft(id)
{
	var left = 2;
	var tmp = '';
	var obj = document.getElementById(id);
	while (eval("obj" + tmp).tagName != "BODY") {
		tmp += ".offsetParent";
		left += eval("obj" + tmp).offsetLeft;
	}
	return left;
}
function FtDisplayMenu(cmd)
{
	FtEditorForm.focus();
	FtSelection();
	FtDisableMenu();
	var top, left;
	top = FtGetTop(cmd);
	left = FtGetLeft(cmd);
    if (cmd == 'Ft_LINK') {
		left -= 220;
	}else if (cmd == 'Ft_IMAGE' || cmd == 'Ft_FLASH') {
	    left -= 230;
	}
	document.getElementById('POPUP_'+cmd).style.top =  top.toString(10) + 'px';
	document.getElementById('POPUP_'+cmd).style.left = left.toString(10) + 'px';
	document.getElementById('POPUP_'+cmd).style.display = 'block';
}
function FtDisableMenu()
{
	for (i = 0; i < POPUP_MENU_TABLE.length; i++) {
		document.getElementById('POPUP_'+POPUP_MENU_TABLE[i]).style.display = 'none';
	}
}
function FtReloadIframe()
{
	var str = '';
	str += FtPopupMenu('Ft_IMAGE');
	str += FtPopupMenu('Ft_FLASH');
	//document.getElementById('InsertIframe').innerHTML = str;
	FtDrawIframe('Ft_IMAGE');
	FtDrawIframe('Ft_FLASH');
}
function FtGetMenuCommonStyle()
{
	var str = 'position:absolute;top:1px;left:1px;font-size:12px;color:'+MENU_TEXT_COLOR+
			';background-color:'+MENU_BG_COLOR+';border:solid 1px '+MENU_BORDER_COLOR+';z-index:1;display:none;';
	return str;
}
function FtGetCommonMenu(cmd, content)
{
	var str = '';
	str += '<div id="POPUP_'+cmd+'" style="'+FtGetMenuCommonStyle()+'">';
	str += content;
	str += '</div>';
	return str;
}
function FtCreateColorTable(cmd, eventStr)
{
	var str = '';
	str += '<table cellpadding="0" cellspacing="2" border="0">';
	for (i = 0; i < COLOR_TABLE.length; i++) {
		if (i == 0 || (i >= 10 && i%10 == 0)) {
			str += '<tr>';
		}
		str += '<td style="width:12px;height:12px;border:1px solid #CAD9EA;font-size:1px;cursor:pointer;background-color:' +
		COLOR_TABLE[i] + ';" onmouseover="javascript:this.style.borderColor=\'#000000\';' + ((eventStr) ? eventStr : '') + '" ' +
		'onmouseout="javascript:this.style.borderColor=\'#CAD9EA\';" ' + 
		'onclick="javascript:FtExecute(\''+cmd+'_END\', \'' + COLOR_TABLE[i] + '\');">&nbsp;</td>';
		if (i >= 9 && i%(i-1) == 0) {
			str += '</tr>';
		}
	}
	str += '</table>';
	return str;
}
function FtDrawColorTable(cmd)
{
	var str = '';
	str += '<div id="POPUP_'+cmd+'" style="width:160px;padding:2px;'+FtGetMenuCommonStyle()+'">';
	str += FtCreateColorTable(cmd);
	str += '</div>';
	return str;
}
//media iframe
function FtDrawMedia(cmd)
{
	var str = '';
	str += '<table cellpadding="0" cellspacing="0" style="width:100%">' + 
		'<tr><td colspan="2" align="left" style="padding:5px;">'+STR_IMAGE_REMOTE+' <input type="text" id="'+cmd+'link" value="http://" style="width:160px;border:1px solid #CAD9EA;" /></td></tr>' +
		'<tr><td colspan="2" align="left" style="padding:5px;">宽度 <input type="text" id="'+cmd+'w" size="3" value="500" style="border:1px solid #CAD9EA;"/> 高度 <input type="text" size="3" value="400" id="'+cmd+'h" style="border:1px solid #CAD9EA;"/>'+
		' <select name="auto" id="'+cmd+'auto"><option value="0" selected="selected">手动</option><option value="1">自动</option></td></tr>'+
		'<tr><td colspan="2" style="margin:5px;padding-bottom:5px;" align="center">' +
		'<input type="submit" name="button" id="'+cmd+'submitButton" value="'+STR_BUTTON_CONFIRM+'" onclick="javascript:parent.FtDrawMediaEnd(\''+cmd+'\');" style="border:1px solid #CAD9EA;background-color:'+BUTTON_COLOR+';" /> ' +
		'<input type="button" name="button" value="'+STR_BUTTON_CANCEL+'" onclick="javascript:parent.FtDisableMenu();" style="border:1px solid #CAD9EA;background-color:'+BUTTON_COLOR+';" /></td></tr>' + 
		'</table>';
	return str;
}
function FtPopupMenu(cmd)
{
	switch (cmd)
	{
		case 'Ft_ZOOM':
			var str = '';
			for (i = 0; i < ZOOM_TABLE.length; i++) {
				str += '<div style="padding:2px;width:120px;cursor:pointer;" ' + 
				'onclick="javascript:FtExecute(\'Ft_ZOOM_END\', \'' + ZOOM_TABLE[i] + '\');" ' + 
				'onmouseover="javascript:this.style.backgroundColor=\''+MENU_SELECTED_COLOR+'\';" ' +
				'onmouseout="javascript:this.style.backgroundColor=\''+MENU_BG_COLOR+'\';">' + 
				ZOOM_TABLE[i] + '</div>';
			}
			str = FtGetCommonMenu('Ft_ZOOM', str);
			return str;
			break;
		case 'Ft_TITLE':
			var str = '';
			for (i = 0; i < TITLE_TABLE.length; i++) {
				str += '<div style="width:140px;cursor:pointer;" ' + 
				'onclick="javascript:FtExecute(\'Ft_TITLE_END\', \'' + TITLE_TABLE[i][0] + '\');" ' + 
				'onmouseover="javascript:this.style.backgroundColor=\''+MENU_SELECTED_COLOR+'\';" ' +
				'onmouseout="javascript:this.style.backgroundColor=\''+MENU_BG_COLOR+'\';"><' + TITLE_TABLE[i][0] + ' style="margin:2px;">' + 
				TITLE_TABLE[i][1] + '</' + TITLE_TABLE[i][0] + '></div>';
			}
			str = FtGetCommonMenu('Ft_TITLE', str);
			return str;
			break;
		case 'Ft_FONTNAME':
			var str = '';
			for (i = 0; i < FONT_NAME.length; i++) {
				str += '<div style="font-family:' + FONT_NAME[i][0] + 
				';padding:2px;width:160px;cursor:pointer;" ' + 
				'onclick="javascript:FtExecute(\'Ft_FONTNAME_END\', \'' + FONT_NAME[i][0] + '\');" ' + 
				'onmouseover="javascript:this.style.backgroundColor=\''+MENU_SELECTED_COLOR+'\';" ' +
				'onmouseout="javascript:this.style.backgroundColor=\''+MENU_BG_COLOR+'\';">' + 
				FONT_NAME[i][1] + '</div>';
			}
			str = FtGetCommonMenu('Ft_FONTNAME', str);
			return str;
			break;
		case 'Ft_FONTSIZE':
			var str = '';
			for (i = 0; i < FONT_SIZE.length; i++) {
				str += '<div style="font-size:' + FONT_SIZE[i][1] + 
				';padding:2px;width:120px;cursor:pointer;" ' + 
				'onclick="javascript:FtExecute(\'Ft_FONTSIZE_END\', \'' + FONT_SIZE[i][0] + '\');" ' + 
				'onmouseover="javascript:this.style.backgroundColor=\''+MENU_SELECTED_COLOR+'\';" ' +
				'onmouseout="javascript:this.style.backgroundColor=\''+MENU_BG_COLOR+'\';">' + 
				FONT_SIZE[i][1] + '</div>';
			}
			str = FtGetCommonMenu('Ft_FONTSIZE', str);
			return str;
			break;
		case 'Ft_TEXTCOLOR':
			var str = '';
			str = FtDrawColorTable('Ft_TEXTCOLOR');
			return str;
			break;
		case 'Ft_BGCOLOR':
			var str = '';
			str = FtDrawColorTable('Ft_BGCOLOR');
			return str;
			break;
		case 'Ft_HR':
			var str = '';
			str += '<div id="POPUP_'+cmd+'" style="width:160px;'+FtGetMenuCommonStyle()+'">';
			str += '<div id="hrPreview" style="margin:10px 2px 10px 2px;height:1px;border:0;font-size:0;background-color:#FFFFFF;"></div>';
			str += FtCreateColorTable(cmd, 'document.getElementById(\'hrPreview\').style.backgroundColor = this.style.backgroundColor;');
			str += '</div>';
			return str;
			break;
		case 'Ft_LAYER':
			var str = '';
			str += '<div id="POPUP_'+cmd+'" style="width:160px;'+FtGetMenuCommonStyle()+'">';
			str += '<div id="divPreview" style="margin:5px 2px 5px 2px;height:20px;border:1px solid #CAD9EA;font-size:1px;background-color:#FFFFFF;"></div>';
			str += FtCreateColorTable(cmd, 'document.getElementById(\'divPreview\').style.backgroundColor = this.style.backgroundColor;');
			str += '</div>';
			return str;
			break;
		case 'Ft_SPECIALCHAR':
			var str = '';
			str += '<table id="POPUP_'+cmd+'" cellpadding="0" cellspacing="2" style="'+FtGetMenuCommonStyle()+'">';
			for (i = 0; i < SPECIAL_CHARACTER.length; i++) {
				if (i == 0 || (i >= 10 && i%10 == 0)) {
					str += '<tr>';
				}
				str += '<td style="padding:2px;border:1px solid #CAD9EA;cursor:pointer;" ' + 
				'onclick="javascript:FtExecute(\'Ft_SPECIALCHAR_END\', \'' + SPECIAL_CHARACTER[i] + '\');" ' +
				'onmouseover="javascript:this.style.borderColor=\'#000000\';" ' +
				'onmouseout="javascript:this.style.borderColor=\'#CAD9EA\';">' + SPECIAL_CHARACTER[i] + '</td>';
				if (i >= 9 && i%(i-1) == 0) {
					str += '</tr>';
				}
			}
			str += '</table>';
			return str;
			break;
		case 'Ft_TABLE':
			var str = '';
			var num = 10;
			str += '<table id="POPUP_'+cmd+'" cellpadding="0" cellspacing="0" style="'+FtGetMenuCommonStyle()+'">';
			for (i = 1; i <= num; i++) {
				str += '<tr>';
				for (j = 1; j <= num; j++) {
					var value = i.toString(10) + ',' + j.toString(10);
					str += '<td id="FtTableTd' + i.toString(10) + '_' + j.toString(10) + 
					'" style="width:15px;height:15px;background-color:#FFFFFF;border:1px solid #DDDDDD;cursor:pointer;" ' + 
					'onclick="javascript:FtExecute(\'Ft_TABLE_END\', \'' + value + '\');" ' +
					'onmouseover="javascript:FtDrawTableSelected(\''+i.toString(10)+'\', \''+j.toString(10)+'\');" ' + 
					'onmouseout="javascript:;">&nbsp;</td>';
				}
				str += '</tr>';
			}
			str += '<tr><td colspan="10" id="tableLocation" style="text-align:center;height:20px;"></td></tr>';
			str += '</table>';
			return str;
			break;
		case 'Ft_IMAGE':
			var str = '';
			str += '<div id="POPUP_'+cmd+'" style="width:250px;'+FtGetMenuCommonStyle()+'">';
			str += '<iframe name="FtImageIframe" id="FtImageIframe" frameborder="0" style="width:250px;height:390px;padding:0;margin:0;border:0;">';
			str += '</iframe></div>';
			return str;
			break;
		case 'Ft_FLASH':
			var str = '';
			str += '<div id="POPUP_'+cmd+'" style="width:250px;'+FtGetMenuCommonStyle()+'">';
			str += '<iframe name="FtFlashIframe" id="FtFlashIframe" frameborder="0" style="width:250px;height:100px;padding:0;margin:0;border:0;">';
			str += '</iframe></div>';
			return str;
			break;
		case 'Ft_FLV':
			var str = '';
			str += '<div id="POPUP_'+cmd+'" style="width:250px;'+FtGetMenuCommonStyle()+'">';
			str += '<iframe name="FtFlvIframe" id="FtFlvIframe" frameborder="0" style="width:250px;height:100px;padding:0;margin:0;border:0;">';
			str += '</iframe></div>';
			return str;
			break;
		case 'Ft_LINK':
			var str = '';
			str += '<div id="POPUP_'+cmd+'" style="width:250px;'+FtGetMenuCommonStyle()+'">';
			str += '<iframe name="FtLinkIframe" id="FtLinkIframe" frameborder="0" style="width:250px;height:85px;padding:0;margin:0;border:0;">';
			str += '</iframe></div>';
			return str;
			break;
		default: 
			break;
	}
}
function FtDrawIframe(cmd)
{
	if (BROWSER == 'IE') {
		IMAGE_DOCUMENT = document.frames("FtImageIframe").document;
		FLASH_DOCUMENT = document.frames("FtFlashIframe").document;
		LINK_DOCUMENT = document.frames("FtLinkIframe").document;
	} else {
		IMAGE_DOCUMENT = document.getElementById('FtImageIframe').contentDocument;
		FLASH_DOCUMENT = document.getElementById('FtFlashIframe').contentDocument;
		LINK_DOCUMENT = document.getElementById('FtLinkIframe').contentDocument;
	}
	switch (cmd)
	{
		case 'Ft_IMAGE':
			var str = '';
			str += '<div align="left">' +
				'<form name="uploadForm" style="margin:0;padding:0;" method="post" enctype="multipart/form-data" ' +
				'action="' + IMAGE_UPLOAD_CGI + '" onsubmit="javascript:if(parent.FtDrawImageEnd()==false){return false;};">' +
				'<input type="hidden" name="fileName" id="fileName" value="" />' + 
				'<table cellpadding="0" cellspacing="0" style="width:100%;font-size:12px;">' + 
				'<tr><td colspan="2"><table border="0" style="margin-bottom:3px;"><tr><td id="imgPreview" style="width:240px;height:240px;border:1px solid #CAD9EA;background-color:#FFFFFF;" align="center" valign="middle">&nbsp;</td></tr></table></td></tr>' +  	
				'<tr><td style="width:50px;padding-left:5px;">';
				str += STR_IMAGE_REMOTE;
			    str += '</td><td style="width:200px;padding-bottom:3px;">';
				str += '<input type="text" id="imgLink" value="http://" maxlength="255" style="width:95%;border:1px solid #CAD9EA;" />' +
				'<input type="hidden" name="imageType" id="imageType" value="2"><input type="hidden" name="fileData" id="imgFile" value="" />';
			    str += '</td></tr><tr><td colspan="2" style="padding-bottom:3px;">' +
				'<table border="0" style="width:100%;font-size:12px;"><tr>' +
				'<td width="16%" style="padding:2px 2px 2px 5px;">'+STR_TITLE+'</td><td width="82%"><input type="text" name="imgTitle" id="imgTitle" value="" maxlength="100" style="width:95%;border:1px solid #CAD9EA;" /></td></tr></table>' +	
				'<table border="0" style="width:100%;font-size:12px;"><tr>' +
				'<td width="10%" style="padding:2px 2px 2px 5px;">'+STR_WIDTH+'</td><td width="23%"><input type="text" name="imgWidth" id="imgWidth" value="0" maxlength="4" style="width:40px;border:1px solid #CAD9EA;" /></td>' +
				'<td width="10%" style="padding:2px;">'+STR_HEIGHT+'</td><td width="23%"><input type="text" name="imgHeight" id="imgHeight" value="0" maxlength="4" style="width:40px;border:1px solid #CAD9EA;" /></td>' +
				'<td width="10%" style="padding:2px;">'+STR_BORDER+'</td><td width="23%"><input type="text" name="imgBorder" id="imgBorder" value="0" maxlength="1" style="width:20px;border:1px solid #CAD9EA;" /></td></tr></table>' +
				'<table border="0" style="width:100%;font-size:12px;"><tr>' +
				'<td width="39%" style="padding:2px 2px 2px 5px;"><select id="imgAlign" name="imgAlign"><option value="">'+STR_ALIGN+'</option>';
			for (var i = 0; i < IMAGE_ALIGN_TABLE.length; i++) {
				str += '<option value="' + IMAGE_ALIGN_TABLE[i] + '">' + IMAGE_ALIGN_TABLE[i] + '</option>';
			}
			str += '</select></td>' +
				'<td width="15%" style="padding:2px;">'+STR_HSPACE+'</td><td width="15%"><input type="text" name="imgHspace" id="imgHspace" value="0" maxlength="1" style="width:20px;border:1px solid #CAD9EA;" /></td>' +
				'<td width="15%" style="padding:2px;">'+STR_VSPACE+'</td><td width="15%"><input type="text" name="imgVspace" id="imgVspace" value="0" maxlength="1" style="width:20px;border:1px solid #CAD9EA;" /></td></tr></table>' +
				'</td></tr><tr><td colspan="2" style="margin:5px;padding-bottom:5px;" align="center">' +
				'<input type="button" name="button" value="'+STR_BUTTON_PREVIEW+'" onclick="javascript:parent.FtImagePreview();" style="border:1px solid #CAD9EA;background-color:'+BUTTON_COLOR+';" /> ' +
				'<input type="submit" name="button" id="'+cmd+'submitButton" value="'+STR_BUTTON_CONFIRM+'" style="border:1px solid #CAD9EA;background-color:'+BUTTON_COLOR+';" /> ' +
				'<input type="button" name="button" value="'+STR_BUTTON_CANCEL+'" onclick="javascript:parent.FtDisableMenu();" style="border:1px solid #CAD9EA;background-color:'+BUTTON_COLOR+';" /></td></tr>' + 
				'</table></form></div>';
			FtWriteFullHtml(IMAGE_DOCUMENT, str);
			IMAGE_DOCUMENT.body.style.color = MENU_TEXT_COLOR;
			IMAGE_DOCUMENT.body.style.backgroundColor = MENU_BG_COLOR;
			IMAGE_DOCUMENT.body.style.margin = 0;
			IMAGE_DOCUMENT.body.scroll = 'no';
			break;
		case 'Ft_FLASH':
			var str = '';
			str += '<table cellpadding="0" cellspacing="0" style="width:100%;">' + 
			'<tr><td style="padding:8px;">地址 <input type="text" id="flashLink" value="http://" style="width:165px;border:1px solid #CAD9EA;" /></td></tr>' +
			'<tr><td style="padding-left:8px;padding-bottom:8px;">宽度 <input name="w" type="text" id="w" size="8" style="border:1px solid #CAD9EA;" /> 高度 <input name="h" type="text" id="h" size="8" style="border:1px solid #CAD9EA;"/></td></tr>' +
			'<tr><td colspan="2" align="center">' +
			'<input type="submit" name="button" id="'+cmd+'submitButton" value="'+STR_BUTTON_CONFIRM+'" onclick="javascript:parent.FtDrawFlashEnd();" style="border:1px solid #CAD9EA;background-color:'+BUTTON_COLOR+';" /> ' +
			'<input type="button" name="button" value="'+STR_BUTTON_CANCEL+'" onclick="javascript:parent.FtDisableMenu();" style="border:1px solid #CAD9EA;background-color:'+BUTTON_COLOR+';" /></td></tr>' + 
			'</table>';
			FtWriteFullHtml(FLASH_DOCUMENT, str);
			FLASH_DOCUMENT.body.style.color = MENU_TEXT_COLOR;
			FLASH_DOCUMENT.body.style.backgroundColor = MENU_BG_COLOR;
			FLASH_DOCUMENT.body.style.margin = 0;
			FLASH_DOCUMENT.body.scroll = 'no';
			break;
	
		case 'Ft_LINK':
			var str = '';
			str += '<table cellpadding="0" cellspacing="0" style="width:100%">' + 
				'<tr><td style="width:50px;padding:5px;">URL</td>' +
				'<td style="width:200px;padding-top:5px;padding-bottom:5px;"><input type="text" id="hyperLink" value="http://" style="width:160px;border:1px solid #CAD9EA;background-color:#FFFFFF;"></td>' +
				'<tr><td style="padding:5px;">'+STR_LINK_TARGET+'</td>' +
				'<td style="padding-bottom:5px;"><select id="hyperLinkTarget"><option value="_blank" selected="selected">'+STR_LINK_BLANK+'</option><option value="">'+STR_LINK_NOBLANK+'</option></select></td></tr>' + 
				'<tr><td colspan="2" style="padding-bottom:5px;" align="center">' +
				'<input type="submit" name="button" id="'+cmd+'submitButton" value="'+STR_BUTTON_CONFIRM+'" onclick="javascript:parent.FtDrawLinkEnd();" style="border:1px solid #CAD9EA;background-color:'+BUTTON_COLOR+';" /> ' +
				'<input type="button" name="button" value="'+STR_BUTTON_CANCEL+'" onclick="javascript:parent.FtDisableMenu();" style="border:1px solid #CAD9EA;background-color:'+BUTTON_COLOR+';" /></td></tr>';
			str += '</table>';
			FtWriteFullHtml(LINK_DOCUMENT, str);
			LINK_DOCUMENT.body.style.color = MENU_TEXT_COLOR;
			LINK_DOCUMENT.body.style.backgroundColor = MENU_BG_COLOR;
			LINK_DOCUMENT.body.style.margin = 0;
			LINK_DOCUMENT.body.scroll = 'no';
			break;
		default:
			break;
	}
}
function FtDrawTableSelected(i, j)
{
	var text = i.toString(10) + ' by ' + j.toString(10) + ' Table';
	document.getElementById('tableLocation').innerHTML = text;
	var num = 10;
	for (m = 1; m <= num; m++) {
		for (n = 1; n <= num; n++) {
			var obj = document.getElementById('FtTableTd' + m.toString(10) + '_' + n.toString(10) + '');
			if (m <= i && n <= j) {
				obj.style.backgroundColor = MENU_SELECTED_COLOR;
			} else {
				obj.style.backgroundColor = '#FFFFFF';
			}
		}
	}
}
function FtImageType(type)
{
	if (type == 1) {
		IMAGE_DOCUMENT.getElementById('imgFile').style.display = 'block';
		IMAGE_DOCUMENT.getElementById('imgLink').style.display = 'none';
		IMAGE_DOCUMENT.getElementById('imgLink').value = 'http://';
	} else {
		IMAGE_DOCUMENT.getElementById('imgFile').style.display = 'none';
		IMAGE_DOCUMENT.getElementById('imgLink').style.display = 'block';
	}
	IMAGE_DOCUMENT.getElementById('imgPreview').innerHTML = "&nbsp;";
	IMAGE_DOCUMENT.getElementById('imgWidth').value = 0;
	IMAGE_DOCUMENT.getElementById('imgHeight').value = 0;
}
function FtImagePreview()
{
	var type = IMAGE_DOCUMENT.getElementById('imageType').value;
	var url = IMAGE_DOCUMENT.getElementById('imgLink').value;
	var file = IMAGE_DOCUMENT.getElementById('imgFile').value;
	if (type == 1) {
		if (BROWSER != 'IE') {
			return false;
		}
		if (file == '') {
			alert(MSG_SELECT_IMAGE);
			return false;
		}
		url = 'file:///' + file;
		if (FtCheckImageFileType(url, "\\") == false) {
			return false;
		}
	} else {
		if (FtCheckImageFileType(url, "/") == false) {
			return false;
		}
	}
	var imgObj = IMAGE_DOCUMENT.createElement("IMG");
	imgObj.src = url;
	var width = parseInt(imgObj.width);
	var height = parseInt(imgObj.height);
	IMAGE_DOCUMENT.getElementById('imgWidth').value = width;
	IMAGE_DOCUMENT.getElementById('imgHeight').value = height;
	var rate = parseInt(width/height);
	if (width >230 && height <= 230) {
		width = 230;
		height = parseInt(width/rate);
	} else if (width <=230 && height > 230) {
		height = 230;
		width = parseInt(height*rate);
	} else if (width >230 && height > 230) {
		if (width >= height) {
			width = 230;
			height = parseInt(width/rate);
		} else {
			height = 230;
			width = parseInt(height*rate);
		}
	}
	imgObj.style.width = width;
	imgObj.style.height = height;
	var el = IMAGE_DOCUMENT.getElementById('imgPreview');
	if (el.hasChildNodes()) {
		el.removeChild(el.childNodes[0]);
	}
	el.appendChild(imgObj);
	return imgObj;
}
function FtDrawImageEnd()
{
	var type = IMAGE_DOCUMENT.getElementById('imageType').value;
	var url = IMAGE_DOCUMENT.getElementById('imgLink').value;
	var file = IMAGE_DOCUMENT.getElementById('imgFile').value;
	var width = IMAGE_DOCUMENT.getElementById('imgWidth').value;
	var height = IMAGE_DOCUMENT.getElementById('imgHeight').value;
	var border = IMAGE_DOCUMENT.getElementById('imgBorder').value;
	var title = IMAGE_DOCUMENT.getElementById('imgTitle').value;
	var align = IMAGE_DOCUMENT.getElementById('imgAlign').value;
	var hspace = IMAGE_DOCUMENT.getElementById('imgHspace').value;
	var vspace = IMAGE_DOCUMENT.getElementById('imgVspace').value;
	if (type == 1) {
		if (file == '') {
			alert(MSG_SELECT_IMAGE);
			return false;
		}
		if (FtCheckImageFileType(file, "\\") == false) {
			return false;
		}
	} else {
		if (FtCheckImageFileType(url, "/") == false) {
			return false;
		}
	}
	if (width.match(/^\d+$/) == null) {
		alert(MSG_INVALID_WIDTH);
		return false;
	}
	if (height.match(/^\d+$/) == null) {
		alert(MSG_INVALID_HEIGHT);
		return false;
	}
	if (border.match(/^\d+$/) == null) {
		alert(MSG_INVALID_BORDER);
		return false;
	}
	if (hspace.match(/^\d+$/) == null) {
		alert(MSG_INVALID_HSPACE);
		return false;
	}
	if (vspace.match(/^\d+$/) == null) {
		alert(MSG_INVALID_VSPACE);
		return false;
	}
	var fileName;
	FtEditorForm.focus();
	if (type == 1) {
		fileName = FtGetFileName(file, "\\");
		var fileExt = FtGetFileExt(fileName);
		var dateObj = new Date();
		var year = dateObj.getFullYear().toString(10);
		var month = (dateObj.getMonth() + 1).toString(10);
		month = month.length < 2 ? '0' + month : month;
		var day = dateObj.getDate().toString(10);
		day = day.length < 2 ? '0' + day : day;
		var ymd = year + month + day;
		fileName = ymd + dateObj.getTime().toString(10) + '.' + fileExt;
		IMAGE_DOCUMENT.getElementById('fileName').value = fileName;
	} else {
		FtInsertImage(url, width, height, border, title, align, hspace, vspace);
	}
}
//插入图片
function FtInsertImage(url, width, height, border, title, align, hspace, vspace)
{
	var element = document.createElement("img");
	element.src = url;
	if (width > 0) {
		element.style.width = width;
	}
	if (height > 0) {
		element.style.height = height;
	}
	if (align != "") {
		element.align = align;
	}
	if (hspace > 0) {
		element.hspace = hspace;
	}
	if (vspace > 0) {
		element.vspace = vspace;
	}
	element.border = border;
	element.alt = FtHtmlentities(title);
	FtSelect();
	FtInsertItem(element);
	FtDisableMenu();
	FtReloadIframe();
}
//得到子窗口代码并插入编辑器中
function FtDrawFlashEnd()
{
	var url = FLASH_DOCUMENT.getElementById('flashLink').value;
	var w = FLASH_DOCUMENT.getElementById('w').value;
	var h = FLASH_DOCUMENT.getElementById('h').value;
	if (FtCheckFlashFileType(url, "/") == false) {
		return false;
	}
	if (w.match(/^\d+$/) == null) {
		alert(MSG_INVALID_WIDTH);
		return false;
	}
	if (h.match(/^\d+$/) == null) {
		alert(MSG_INVALID_HEIGHT);
		return false;
	}
	FtEditorForm.focus();
	FtSelect();
	str = '[flash='+w+','+h+']'+url+'[/flash]';
	
	var element = document.createElement("span");
	element.appendChild(document.createTextNode(str));
	FtInsertItem(element);
	FtDisableMenu();
}
//插入media rm ubb码

//插入链接
function FtDrawLinkEnd()
{
	var range;
	var url = LINK_DOCUMENT.getElementById('hyperLink').value;
	var target = LINK_DOCUMENT.getElementById('hyperLinkTarget').value;
	if (url.match(/http:\/\/.{3,}/) == null) {
		alert(MSG_INPUT_URL);
		return false;
	}
	FtEditorForm.focus();
	FtSelect();
	var element;
    if (BROWSER == 'IE') {
		if (SELECTION.type.toLowerCase() == 'control') {
			var el = document.createElement("a");
			el.href = url;
			if (target) {
				el.target = target;
			}
			RANGE.item(0).applyElement(el);
		} else if (SELECTION.type.toLowerCase() == 'text') {
			FtExecuteValue('CreateLink', url);
			element = RANGE.parentElement();
			if (target) {
				element.target = target;
			}
		}
	} else {
		FtExecuteValue('CreateLink', url);
		element = RANGE.startContainer.previousSibling;
		element.target = target;
		if (target) {
			element.target = target;
		}
    }
	FtDisableMenu();
}
//选择编辑器中的内容
function FtSelection()
{
	if (BROWSER == 'IE') {
	    document.frames("FtEditorForm").focus();
		SELECTION = EDITFORM_DOCUMENT.selection;
		RANGE = SELECTION.createRange();
		RANGE_TEXT = RANGE.text;
	} else {
	    document.getElementById("FtEditorForm").contentWindow.focus();
		SELECTION = document.getElementById("FtEditorForm").contentWindow.getSelection();
        RANGE = SELECTION.getRangeAt(0);
		RANGE_TEXT = RANGE.toString();
	}
}
function FtSelect()
{
	if (BROWSER == 'IE') {
		RANGE.select();
	}
}
//往编辑器中插入代码
function FtInsertItem(insertNode)
{
	if (BROWSER == 'IE') {
		if (SELECTION.type.toLowerCase() == 'control') {
			RANGE.item(0).outerHTML = insertNode.outerHTML;
		} else {
			RANGE.pasteHTML(insertNode.outerHTML);
		}
	} else {
        SELECTION.removeAllRanges();
		RANGE.deleteContents();
        var startRangeNode = RANGE.startContainer;
        var startRangeOffset = RANGE.startOffset;
        var newRange = document.createRange();
		if (startRangeNode.nodeType == 3 && insertNode.nodeType == 3) {
            startRangeNode.insertData(startRangeOffset, insertNode.nodeValue);
            newRange.setEnd(startRangeNode, startRangeOffset + insertNode.length);
            newRange.setStart(startRangeNode, startRangeOffset + insertNode.length);
        } else {
            var afterNode;
            if (startRangeNode.nodeType == 3) {
                var textNode = startRangeNode;
                startRangeNode = textNode.parentNode;
                var text = textNode.nodeValue;
                var textBefore = text.substr(0, startRangeOffset);
                var textAfter = text.substr(startRangeOffset);
                var beforeNode = document.createTextNode(textBefore);
                var afterNode = document.createTextNode(textAfter);
                startRangeNode.insertBefore(afterNode, textNode);
                startRangeNode.insertBefore(insertNode, afterNode);
                startRangeNode.insertBefore(beforeNode, insertNode);
                startRangeNode.removeChild(textNode);
            } else {
				if (startRangeNode.tagName.toLowerCase() == 'html') {
					startRangeNode = startRangeNode.childNodes[0].nextSibling;
					afterNode = startRangeNode.childNodes[0];
				} else {
					afterNode = startRangeNode.childNodes[startRangeOffset];
				}
				startRangeNode.insertBefore(insertNode, afterNode);
            }
            newRange.setEnd(afterNode, 0);
            newRange.setStart(afterNode, 0);
        }
        SELECTION.addRange(newRange);
	}
}
function FtExecuteValue(cmd, value)
{
	EDITFORM_DOCUMENT.execCommand(cmd, false, value);
}
function FtSimpleExecute(cmd)
{
	FtEditorForm.focus();
	EDITFORM_DOCUMENT.execCommand(cmd, false, null);
	FtDisableMenu();
}
//debugger;
function FtExecute(cmd, value)
{
	switch (cmd)
	{
		case 'Ft_SOURCE':
			var length = document.getElementById(TOP_TOOLBAR_ICON[16][0]).src.length - 10;
			var image = document.getElementById(TOP_TOOLBAR_ICON[16][0]).src.substr(length,10);
			if (image == 'source.gif') {
				document.getElementById("FtCodeForm").value = FtHtmlToXhtml(EDITFORM_DOCUMENT.body.innerHTML);
				document.getElementById("FtEditorIframe").style.display = 'none';
				document.getElementById("FtEditTextarea").style.display = 'block';
				FtDisableToolbar(true);
			} else {
				EDITFORM_DOCUMENT.body.innerHTML = FtClearScriptTag(document.getElementById("FtCodeForm").value);
				document.getElementById("FtEditTextarea").style.display = 'none';
				document.getElementById("FtEditorIframe").style.display = 'block';
				FtDisableToolbar(false);
			}
			FtDisableMenu();
			break;
		case 'Ft_UNDO':
			FtSimpleExecute('undo');
			break;
		case 'Ft_REDO':
			FtSimpleExecute('redo');
			break;
		case 'Ft_CUT':
			FtSimpleExecute('cut');
			break;
		case 'Ft_COPY':
			FtSimpleExecute('copy');
			break;
		case 'Ft_PASTE':
			FtSimpleExecute('paste');
			break;
		case 'Ft_SELECTALL':
			FtSimpleExecute('selectall');
			break;
		case 'Ft_SUBSCRIPT':
			FtSimpleExecute('subscript');
			break;
		case 'Ft_SUPERSCRIPT':
			FtSimpleExecute('superscript');
			break;
		case 'Ft_BOLD':
			FtSimpleExecute('bold');
			break;
		case 'Ft_ITALIC':
			FtSimpleExecute('italic');
			break;
		case 'Ft_UNDERLINE':
			FtSimpleExecute('underline');
			break;
		case 'Ft_STRIKE':
			FtSimpleExecute('strikethrough');
			break;
		case 'Ft_JUSTIFYLEFT':
			FtSimpleExecute('justifyleft');
			break;
		case 'Ft_JUSTIFYCENTER':
			FtSimpleExecute('justifycenter');
			break;
		case 'Ft_JUSTIFYRIGHT':
			FtSimpleExecute('justifyright');
			break;
		case 'Ft_JUSTIFYFULL':
			FtSimpleExecute('justifyfull');
			break;
		case 'Ft_NUMBEREDLIST':
			FtSimpleExecute('insertorderedlist');
			break;
		case 'Ft_UNORDERLIST':
			FtSimpleExecute('insertunorderedlist');
			break;
		case 'Ft_REMOVE':
			FtSimpleExecute('removeformat');
			break;
		case 'Ft_ZOOM':
			FtDisplayMenu(cmd);
			break;
		case 'Ft_ZOOM_END':
			FtEditorForm.focus();
			EDITFORM_DOCUMENT.body.style.zoom = value;
			FtDisableMenu();
			break;
		case 'Ft_TITLE':
			FtDisplayMenu(cmd);
			break;
		case 'Ft_TITLE_END':
			FtEditorForm.focus();
			value = '<' + value + '>';
			FtSelect();
			FtExecuteValue('FormatBlock', value);
			FtDisableMenu();
			break;
		case 'Ft_FONTNAME':
			FtDisplayMenu(cmd);
			break;
		case 'Ft_FONTNAME_END':
			FtEditorForm.focus();
			FtSelect();
			FtExecuteValue('fontname', value);
			FtDisableMenu();
			break;
		case 'Ft_FONTSIZE':
			FtDisplayMenu(cmd);
			break;
		case 'Ft_FONTSIZE_END':
			FtEditorForm.focus();
			value = value.substr(0, 1);
			FtSelect();
			FtExecuteValue('fontsize', value);
			FtDisableMenu();
			break;
		case 'Ft_TEXTCOLOR':
			FtDisplayMenu(cmd);
			break;
		case 'Ft_TEXTCOLOR_END':
			FtEditorForm.focus();
			FtSelect();
			FtExecuteValue('ForeColor', value);
			FtDisableMenu();
			break;
		case 'Ft_BGCOLOR':
			FtDisplayMenu(cmd);
			break;
		case 'Ft_BGCOLOR_END':
			FtEditorForm.focus();
			if (BROWSER == 'IE') {
				FtSelect();
				FtExecuteValue('BackColor', value);
			} else {
				var startRangeNode = RANGE.startContainer;
				if (startRangeNode.nodeType == 3) {
					var parent = startRangeNode.parentNode;
					var element = document.createElement("font");
					element.style.backgroundColor = value;
					element.appendChild(RANGE.extractContents());
					var startRangeOffset = RANGE.startOffset;
					var newRange = document.createRange();
					var afterNode;
					var textNode = startRangeNode;
					startRangeNode = textNode.parentNode;
					var text = textNode.nodeValue;
					var textBefore = text.substr(0, startRangeOffset);
					var textAfter = text.substr(startRangeOffset);
					var beforeNode = document.createTextNode(textBefore);
					var afterNode = document.createTextNode(textAfter);
					startRangeNode.insertBefore(afterNode, textNode);
					startRangeNode.insertBefore(element, afterNode);
					startRangeNode.insertBefore(beforeNode, element);
					startRangeNode.removeChild(textNode);
					newRange.setEnd(afterNode, 0);
					newRange.setStart(afterNode, 0);
					SELECTION.addRange(newRange);
				}
			}
			FtDisableMenu();
			break;
		case 'Ft_ICON_END':
			FtEditorForm.focus();
			var element = document.createElement("img");
			element.src = value;
			element.border = 0;
			element.alt = "";
			FtSelect();
			FtInsertItem(element);
			FtDisableMenu();
			break;
		case 'Ft_IMAGE':
			FtDisplayMenu(cmd);
			FtImageIframe.focus();
			IMAGE_DOCUMENT.getElementById(cmd+'submitButton').focus();
			break;
		case 'Ft_FLASH':
			FtDisplayMenu(cmd);
			FtFlashIframe.focus();
			FLASH_DOCUMENT.getElementById(cmd+'submitButton').focus();
			break;
		case 'Ft_LINK':
			FtDisplayMenu(cmd);
			FtLinkIframe.focus();
			LINK_DOCUMENT.getElementById(cmd+'submitButton').focus();
			break;
		case 'Ft_UNLINK':
			FtSimpleExecute('unlink');
			break;
		case 'Ft_SPECIALCHAR':
			FtDisplayMenu(cmd);
			break;
		case 'Ft_SPECIALCHAR_END':
			FtEditorForm.focus();
			FtSelect();
			var element = document.createElement("span");
			element.appendChild(document.createTextNode(value));
			FtInsertItem(element);
			FtDisableMenu();
			break;
		case 'Ft_LAYER':
			FtDisplayMenu(cmd);
			break;
		case 'Ft_LAYER_END':
			FtEditorForm.focus();
			var element = document.createElement("div");
			element.style.padding = "5px";
			element.style.border = "1px solid #CAD9EA";
			element.style.backgroundColor = value;
			var childElement = document.createElement("div");
			childElement.innerHTML = STR_INPUT_CONTENT;
			element.appendChild(childElement);
			FtSelect();
			FtInsertItem(element);
			FtDisableMenu();
			break;
		case 'Ft_TABLE':
			FtDisplayMenu(cmd);
			break;
		case 'Ft_TABLE_END':
			FtEditorForm.focus();
			var location = value.split(',');
			var element = document.createElement("table");
			element.cellPadding = 0;
			element.cellSpacing = 0;
			element.border = 1;
			element.style.width = "100px";
			element.style.height = "100px";
			for (var i = 0; i < location[0]; i++) {
				var rowElement = element.insertRow(i);
				for (var j = 0; j < location[1]; j++) {
					var cellElement = rowElement.insertCell(j);
					cellElement.innerHTML = "&nbsp;";
				}
			}
			FtSelect();
			FtInsertItem(element);
			FtDisableMenu();
			break;
		case 'Ft_HR':
			FtDisplayMenu(cmd);
			break;
		case 'Ft_HR_END':
			FtEditorForm.focus();
			var element = document.createElement("hr");
			element.width = "100%";
			element.color = value;
			element.size = 1;
			FtSelect();
			FtInsertItem(element);
			FtDisableMenu();
			break;
		case 'Ft_DATE':
			FtEditorForm.focus();
			FtSelection();
			var date = new Date();
			var year = date.getFullYear().toString(10);
			var month = (date.getMonth() + 1).toString(10);
			month = month.length < 2 ? '0' + month : month;
			var day = date.getDate().toString(10);
			day = day.length < 2 ? '0' + day : day;
			var value = year + '-' + month + '-' + day;
			var element = document.createElement("span");
			element.appendChild(document.createTextNode(value));
			FtInsertItem(element);
			FtDisableMenu();
			break;
		case 'Ft_TIME':
			FtEditorForm.focus();
			FtSelection();
			var date = new Date();
			var hour = date.getHours().toString(10);
			hour = hour.length < 2 ? '0' + hour : hour;
			var minute = date.getMinutes().toString(10);
			minute = minute.length < 2 ? '0' + minute : minute;
			var second = date.getSeconds().toString(10);
			second = second.length < 2 ? '0' + second : second;
			var value = hour + ':' + minute + ':' + second;
			var element = document.createElement("span");
			element.appendChild(document.createTextNode(value));
			FtInsertItem(element);
			FtDisableMenu();
			break;
		case 'Ft_PREVIEW':
			eval(OBJ_NAME).data();
			var newWin = window.open('', 'FtPreview','width=500,height=400,left=30,top=30,resizable=yes,scrollbars=yes');
			FtWriteFullHtml(newWin.document, document.getElementsByName(eval(OBJ_NAME).hiddenName)[0].value);
			FtDisableMenu();
			break;
		default: 
			break;
	}
}
function FtDisableToolbar(flag)
{
	if (flag == true) {
		document.getElementById(TOP_TOOLBAR_ICON[16][0]).src = IMAGE_PATH + 'design.gif';
		for (i = 0; i < TOOLBAR_ICON.length; i++) {
			var el = document.getElementById(TOOLBAR_ICON[i][0]);
			if (TOOLBAR_ICON[i][0] == 'Ft_DATE' || TOOLBAR_ICON[i][0] == 'Ft_TIME'||TOOLBAR_ICON[i][0] == 'Ft_HR' || TOOLBAR_ICON[i][0] == 'Ft_LINK'|| TOOLBAR_ICON[i][0] == 'Ft_TABLE'|| TOOLBAR_ICON[i][0] == 'Ft_UNLINK'|| TOOLBAR_ICON[i][0] == 'Ft_IMAGE'|| TOOLBAR_ICON[i][0] == 'Ft_FLASH') {
			    el.style.visibility = 'hidden';
				//continue;
			}
			//el.style.visibility = 'hidden';
		}
	} else {
		document.getElementById(TOP_TOOLBAR_ICON[16][0]).src = IMAGE_PATH + 'source.gif';
		for (i = 0; i < TOOLBAR_ICON.length; i++) {
			var el = document.getElementById(TOOLBAR_ICON[i][0]);
			el.style.visibility = 'visible';
			EDITFORM_DOCUMENT.designMode = 'On';
		}
	}
}
function FtCreateIcon(icon)
{
	var str = '<img id="'+ icon[0] +'" src="' + IMAGE_PATH + icon[1] + '" alt="' + icon[2] + '" title="' + icon[2] + 
			'" align="absmiddle" style="border:1px solid '+ICON_BORDER_COLOR+';cursor:pointer;height:20px;';
	str += '" onclick="javascript:FtExecute(\''+ icon[0] +'\');" '+
			'onmouseover="javascript:this.style.border=\'1px solid ' + MENU_BORDER_COLOR + '\';" ' +
			'onmouseout="javascript:this.style.border=\'1px solid ' + ICON_BORDER_COLOR + '\';" ';
	str += '>';
	return str;
}
function FtCreateToolbar()
{
	var htmlData = '<table cellpadding="0" cellspacing="0" border="0" height="26"><tr>';
	if (EDITOR_TYPE == 'full') {
		for (i = 0; i < TOP_TOOLBAR_ICON.length; i++) {
			htmlData += '<td style="padding-right:3px;">' + FtCreateIcon(TOP_TOOLBAR_ICON[i]) + '</td>';
		}
		htmlData += '</tr></table><table cellpadding="0" cellspacing="0" border="0" height="26"><tr>';
		for (i = 0; i < BOTTOM_TOOLBAR_ICON.length; i++) {
			htmlData += '<td style="padding-right:3px;">' + FtCreateIcon(BOTTOM_TOOLBAR_ICON[i]) + '</td>';
		}
	} else {
		for (i = 0; i < SIMPLE_TOOLBAR_ICON.length; i++) {
			htmlData += '<td style="padding-right:3px;">' + FtCreateIcon(SIMPLE_TOOLBAR_ICON[i]) + '</td>';
		}
	}
	htmlData += '</tr></table>';
	return htmlData;
}
function FtWriteFullHtml(documentObj, content)
{
	var editHtmlData = '<html>\r\n<head>\r\n<title>在线编辑器</title>\r\n<style type="text/css">\r\np {margin:0;}\r\n</style>\r\n</head>\r\n';
	editHtmlData += '<body style="font-size:12px;font-family:'+EDITOR_FONT_FAMILY+';margin:2px;background-color:' + ICON_BORDER_COLOR + '">\r\n';
	editHtmlData += content;
	editHtmlData += '\r\n</body>\r\n</html>\r\n';
	documentObj.open();
	documentObj.write(editHtmlData);
	documentObj.close();
}
function FtEditor(objName) 
{
	this.objName = objName;
	this.hiddenName = objName;
	//this.siteDomain = "";
	this.editorType = "full"; //full or simple
	this.safeMode = false; // true or false
	this.uploadMode = false; // true or false
	this.editorWidth = "700px";
	this.editorHeight = "400px";//"400px";
	this.skinPath = './images/skins/';
	this.menuBorderColor = '#CAD9EA';//'#CAD9EA';
	this.menuBgColor = '#FFFFFF';//'#EFEFEF';//菜单背景色
	this.menuTextColor = '#222222'; //菜单字体色
	this.menuSelectedColor = '#E8F3FD';
	this.toolbarBorderColor = '#CAD9EA';
	this.toolbarBgColor = '';//'#EFEFEF';//工具栏背景色
	this.IconBorderColor = '#fff';//图标边框
	this.formBorderColor = '#CAD9EA';//'#DDDDDD';
	this.formBgColor = '#FFFFFF';
	this.buttonColor = '#ffffff';//'#CAD9EA';
	this.init = function()
	{
		EDITOR_TYPE = this.editorType.toLowerCase();
		SAFE_MODE = this.safeMode;
		IMAGE_PATH = this.skinPath;
		MENU_BORDER_COLOR = this.menuBorderColor;
		MENU_BG_COLOR = this.menuBgColor;
		MENU_TEXT_COLOR = this.menuTextColor;
		MENU_SELECTED_COLOR = this.menuSelectedColor;
		TOOLBAR_BORDER_COLOR = this.toolbarBorderColor;
		TOOLBAR_BG_COLOR = this.toolbarBgColor;
		ICON_BORDER_COLOR = this.IconBorderColor;
		FORM_BORDER_COLOR = this.formBorderColor;
		FORM_BG_COLOR = this.formBgColor;
		BUTTON_COLOR = this.buttonColor;
		OBJ_NAME = this.objName;
		BROWSER = FtGetBrowser();
		TOOLBAR_ICON = Array();
		for (var i = 0; i < TOP_TOOLBAR_ICON.length; i++) {
			TOOLBAR_ICON.push(TOP_TOOLBAR_ICON[i]);
		}
		for (var i = 0; i < BOTTOM_TOOLBAR_ICON.length; i++) {
			TOOLBAR_ICON.push(BOTTOM_TOOLBAR_ICON[i]);
		}
	}
	this.show = function()
	{
		this.init();
		var widthStyle = 'width:' + this.editorWidth + ';';
		var widthArr = this.editorWidth.match(/(\d+)([px%]{1,2})/);
		var iframeWidthStyle = 'width:' + (parseInt(widthArr[1]) - 0).toString(10) + widthArr[2] + ';';
		var heightStyle = 'height:' + this.editorHeight + ';';
		var heightArr = this.editorHeight.match(/(\d+)([px%]{1,2})/);
		var iframeHeightStyle = 'height:' + (parseInt(heightArr[1]) - 3).toString(10) + heightArr[2] + ';';
		if (BROWSER == '') {
			var htmlData = '<div id="FtEditTextarea" style="' + widthStyle + heightStyle + '">' +
			'<textarea name="FtCodeForm" id="FtCodeForm" style="' + widthStyle + heightStyle + 
			'padding:0;margin:0;border:1px solid '+ FORM_BORDER_COLOR + 
			';font-size:12px;line-height:16px;font-family:'+EDITOR_FONT_FAMILY+';background-color:'+ 
			FORM_BG_COLOR +';">' + document.getElementsByName(this.hiddenName)[0].value + '</textarea></div>';
			document.open();
			document.write(htmlData);
			document.close();
			return;
		}
		var htmlData = '<div style="font-family:'+EDITOR_FONT_FAMILY+';">';
		htmlData += '<div style="'+widthStyle+';border-bottom:1px solid ' + TOOLBAR_BORDER_COLOR + ';background-color:'+ TOOLBAR_BG_COLOR +'">';
		htmlData += FtCreateToolbar();
		htmlData += '</div><div id="FtEditorIframe" style="' + widthStyle + heightStyle + 
			'border:1px solid '+ FORM_BORDER_COLOR +';border-top:0;">' +
			'<iframe name="FtEditorForm" id="FtEditorForm" frameborder="0" style="' + iframeWidthStyle + iframeHeightStyle + 
			'padding:0;margin:0;border:0;"></iframe></div>';
		if (EDITOR_TYPE == 'full') {
			htmlData += '<div id="FtEditTextarea" style="' + widthStyle + heightStyle + 
				'border:1px solid '+ FORM_BORDER_COLOR +';background-color:'+ 
				FORM_BG_COLOR +';border-top:0;display:none;">' +
				'<textarea name="FtCodeForm" id="FtCodeForm" style="' + iframeWidthStyle + iframeHeightStyle + 
				'padding:0;margin:0;border:0;font-size:12px;line-height:16px;font-family:'+EDITOR_FONT_FAMILY+';background-color:'+ 
				FORM_BG_COLOR +';" onclick="javascirit:FtDisableMenu();"></textarea></div>';
		}
		htmlData += '</div>';
		for (var i = 0; i < POPUP_MENU_TABLE.length; i++) {
			if (POPUP_MENU_TABLE[i] == 'Ft_IMAGE') {
				htmlData += '<span id="InsertIframe">';
			}
			htmlData += FtPopupMenu(POPUP_MENU_TABLE[i]);
			if (POPUP_MENU_TABLE[i] == 'Ft_REAL') {
				htmlData += '</span>';
			}
		}
		document.open();
		document.write(htmlData);
		document.close();
		if (BROWSER == 'IE') {
			EDITFORM_DOCUMENT = document.frames("FtEditorForm").document;
		} else {
			EDITFORM_DOCUMENT = document.getElementById('FtEditorForm').contentDocument;
		}
		FtDrawIframe('Ft_IMAGE');
		FtDrawIframe('Ft_FLASH');
		FtDrawIframe('Ft_LINK');
		EDITFORM_DOCUMENT.designMode = 'On';
		FtWriteFullHtml(EDITFORM_DOCUMENT, document.getElementsByName(eval(OBJ_NAME).hiddenName)[0].value);
		var el = EDITFORM_DOCUMENT.body;
		if (el.addEventListener){
			el.addEventListener('click', FtDisableMenu, false);
			el.addEventListener('keypress', ctlent, true); 
		} else if (el.attachEvent){
			el.attachEvent('onclick', FtDisableMenu);
			el.attachEvent('onkeypress', ctlent);
		}
	}
	this.data = function()
	{
		var htmlResult;
		if (BROWSER == '') {
			htmlResult = document.getElementById("FtCodeForm").value;
		} else {
			if (EDITOR_TYPE == 'full') {
				var length = document.getElementById(TOP_TOOLBAR_ICON[16][0]).src.length - 10;
				var image = document.getElementById(TOP_TOOLBAR_ICON[16][0]).src.substr(length,10);
				if (image == 'source.gif') {
					htmlResult = EDITFORM_DOCUMENT.body.innerHTML;
				} else {
					htmlResult = document.getElementById("FtCodeForm").value;
				}
			} else {
				htmlResult = EDITFORM_DOCUMENT.body.innerHTML;
			}
		}
		FtDisableMenu();
		if (BROWSER == 'FF') {
		//EDITFORM_DOCUMENT.SelectAll();
		//EDITFORM_DOCUMENT.execCommand('Copy'); 
		//FtExecuteValue('copy', htmlResult);
		}
		else{
		copyText(nohtml(htmlResult));//把内容复制到剪贴板中
		}
		htmlResult = FtHtmlToXhtml(htmlResult);
		htmlResult = FtClearScriptTag(htmlResult);
		document.getElementsByName(this.hiddenName)[0].value = htmlResult;
		return htmlResult;
	}
}
function copyText(obj) {
	clipboardData.setData('Text',obj);
}
//ctrl+enter提交
function ctlent(event){
	if((event.ctrlKey && (event.keyCode==13 || event.keyCode==10)) || (event.altKey && event.keyCode == 83)){
		document.myform.submit1.click();;
	}
}
//去除html标答,前后空格,nbsp;后的长度
/*function CheckBody(str){
  //str=nohtml(str);
  str=str.toLowerCase();
  str=str.replace(/\<br \/\>/g,"");
  str=str.replace(/\<br>/g,"");
  str=str.replace(/\<div>/g,"");
  str=str.replace(/\<\/div>/g,"");
  str=str.replace(/\&nbsp;/g,"");
  str=str.replace(/(^\s*)|(\s*$)/g,"");
  str=str.length;
  return str;
}*/
//*验证主题贴表单
//回贴编辑
 function chkinput(form){
  /*  if(form.formuser.value==""){
	  alert("请输入发件人地址!");
	  form.formuser.select();
	  return(false);
	}
	var i=form.formuser.value.indexOf("@");
	var j=form.formuser.value.indexOf(".");
	if((i<0)||(i-j>0)||(j<0))
	 {
       alert("请输入正确的发件人E-mail地址!");
	   form.formuser.select();
	   return(false);
	 }
	 
	 if(form.touser.value==""){
	  alert("请输入收件人地址!");
	  form.touser.select();
	  return(false);
	}
	var i=form.touser.value.indexOf("@");
	var j=form.touser.value.indexOf(".");
	if((i<0)||(i-j>0)||(j<0))
	 {
       alert("请输入正确的收件人E-mail地址!");
	   form.touser.select();
	   return(false);
	 }
	if(form.subject.value==""){
	  alert("请输入邮件主题!");
	   form.subject.select();
	   return(false);
	} */
	editor.data();//提交
 	//nl=document.form2.mailbody.value;
 // 	if (nl<=0){alert('请输入邮件内容!');return false;}
 // 	document.form2.submit.disabled = true;


/*
	if(form.upfile.value!=""){
   var fso,f;
   fso=new ActiveXObject("Scripting.FileSystemObject");
   f=fso.GetFile(form.upfile.value);
    if(f.size>2000000){
	  alert("对不起,您上传的文件超过了规定的大小!");
	  return(false);
	}
	}*/
//  return(true);
 }