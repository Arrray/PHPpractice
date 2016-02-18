function startMarquee(lineHeight, speed, delay, id) {
	var t;
	var p = false;
	var object = document.getElementById(id);
	object.innerHTML += object.innerHTML;
	object.onmouseover = function() {
		p = true
	};
	object.onmouseout = function() {
		p = false
	};
	object.scrollTop = 0;
	function start() {
		t = setInterval(scrolling, speed);
		if (!p) {
			object.scrollTop += 2;
		}
	}
	function scrolling() {
		if (object.scrollTop % lineHeight != 0) {
			object.scrollTop += 2;
			if (object.scrollTop >= object.scrollHeight / 2) {
				object.scrollTop = 0;
			}
		} else {
			clearInterval(t);
			setTimeout(start, delay);
		}
	}
	setTimeout(start, delay);
}
/*******************************************************************************
 * 调用方法 <div id="marqueebox" style="overflow: hidden; width: 500px; height:
 * 26px; line-height: 26px; font-size: 14px;"> 第一行<br />
 * 第二行<br />
 * 第n行<br />
 * </div> 注意：下面的js代码要放在所调用的div之下 <script> startMarquee(26, 50, 3000,
 * "marqueebox"); </script>
 ******************************************************************************/
