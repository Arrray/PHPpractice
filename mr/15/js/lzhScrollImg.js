/**
 * Í¼Æ¬ÇÐ»»¹ã¸æjs¶Ë 
 */

var imgSrcCount = imgSrc.length;
var trans = new Array;
trans[0] = "progid:DXImageTransform.Microsoft.Fade(duration=1)";
trans[1] = "progid:DXImageTransform.Microsoft.Blinds(Duration=1,bands=20)";
trans[2] = "progid:DXImageTransform.Microsoft.Checkerboard(Duration=1,squaresX=20,squaresY=20)";
trans[3] = "progid:DXImageTransform.Microsoft.Strips(Duration=1,motion=rightdown)";
trans[4] = "progid:DXImageTransform.Microsoft.Barn(Duration=1,orientation=vertical)";
trans[5] = "progid:DXImageTransform.Microsoft.GradientWipe(duration=1)";
trans[6] = "progid:DXImageTransform.Microsoft.Iris(Duration=1,motion=out)";
trans[7] = "progid:DXImageTransform.Microsoft.Wheel(Duration=1,spokes=12)";
trans[8] = "progid:DXImageTransform.Microsoft.Pixelate(maxSquare=10,duration=1)";
trans[9] = "progid:DXImageTransform.Microsoft.RadialWipe(Duration=1,wipeStyle=clock)";
trans[10] = "progid:DXImageTransform.Microsoft.RandomBars(Duration=1,orientation=vertical)";
trans[11] = "progid:DXImageTransform.Microsoft.Slide(Duration=1,slideStyle=push)";
trans[12] = "progid:DXImageTransform.Microsoft.RandomDissolve(Duration=1,orientation=vertical)";
trans[13] = "progid:DXImageTransform.Microsoft.Spiral(Duration=1,gridSizeX=40,gridSizeY=40)";
trans[14] = "progid:DXImageTransform.Microsoft.Stretch(Duration=1,stretchStyle=push)";
trans[15] = "special case";
var transCount = trans.length - 1;
function showImg(ind) {
	var index = Math.floor(Math.random() * transCount);
	document.images.im.style.filter = trans[index];
	document.images.im.filters[0].apply();
	document.images.im.src = imgSrc[ind - 1];
	document.all.aim.href = imgLink[ind - 1];
	document.all.aim.title = imgLinkTitle[ind - 1];
	document.images.im.filters[0].play();
}
function imgDh() {
	var linkStr = "";
	for (var i = 1; i <= imgSrcCount; i++) {
		linkStr += "<li style='width:15px; height:15px; display:inline; font-size:12px; text-align:center; float:left; cursor:hand;  color:#123456; border:1px solid #0A5D6F; color:#C33009; background-color:#CDEEF5' onmouseover='this.style.backgroundColor=\"#F2D1B0\"; this.style.width=16; this.style.height=16' onmouseout='this.style.backgroundColor=\"#CDEEF5\"; this.style.width=15; this.style.height=15' onclick='showImg(" + i + ")'>" + i + "</li><li style='width:10px; display:inline; float:left'></li>";
	}
	return linkStr;
}
document.write("<div style='width:" + w + "; height:" + h + "; background-color:" + bg + "; font-size:0px'><div style='font-size:0px'><a name='aim' id='aim' href='" + imgLink[0] + "' target='_blank' title='" + imgLinkTitle[0] + "'><img name='im' id='im' width=" + w + " height=" + h + " src='" + imgSrc[0] + "' border='0'></a></div><div style='width:100px; height:15px; margin-top:-20px; float:right'>" + imgDh() + "</div></div>");
var imgIndex = 0;
function play() {
	var index = Math.floor(Math.random() * transCount);
	document.images.im.style.filter = trans[index];
	document.images.im.filters[0].apply();
	document.images.im.src = imgSrc[imgIndex];
	document.all.aim.href = imgLink[imgIndex];
	document.all.aim.title = imgLinkTitle[imgIndex];
	imgIndex++;
	if (imgIndex > imgSrcCount - 1) {
		imgIndex = 0;
	}
	document.images.im.filters[0].play();
	setTimeout("play()", 2800);
}
play();

