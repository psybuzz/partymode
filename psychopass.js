/**
 * Source for psycho-pass theme control.
 */

var circle=document.createElement('div');
circle.style.background='rgba(50,50,50,0.5)';
circle.style.color='lightblue';
circle.style.fontFamily='sans-serif';
circle.style.fontWeight='600';
circle.style.fontSize='24px';
circle.style.fontStyle='italic';
circle.style.width='120px';
circle.style.height='120px';
circle.style.borderRadius='50%';
circle.style.boxShadow='0px 0px 3px 2px rgba(255,255,255,0.8)';
circle.style.position='fixed';
circle.style.zIndex=1000;
circle.style.overflow='visible';
circle.style.display='block';
document.body.appendChild(circle);

var cursor=document.createElement('div');
cursor.style.border='3px solid pink';
cursor.style.width='20px';
cursor.style.height='20px';
cursor.style.position='fixed';
cursor.style.zIndex=1000;
cursor.style.display='block';
document.body.appendChild(cursor);

var oldMouseMove = document.oldMouseMove;
document.onmousemove = function (e) {
	// Preserve pre-existing callbacks.
	if (oldMouseMove) oldMouseMove(e);

	var el = e.toElement;
	var childCheck = false;
	for (var i=0; el && i<el.children.length; i++){
		if (el.children[i].nodeName === 'IMG'){
			childCheck = true;
		}
		// 2nd layer
		if (el.children[i].children && el.children[i].children.length > 0){
			for (var j=0; el && j<el.children.length; j++){
				if (el.children[i].children[j] && el.children[i].children[j].nodeName === 'IMG'){
					childCheck = true;
					break;
				}
			}
		}
		if (childCheck) break;
	}
	if (el && (el.nodeName === 'IMG' || childCheck)){
		if (circle.style.display!=='block'){
			circle.style.display='block';
		}
		var hue = Math.floor(Math.random()*6000)/10;
		circle.style.top = (e.clientY-90)+'px';
		circle.style.left = (e.clientX+40)+'px';
		var html = '<span style="font-size:14px; background:rgb(50,50,50); color:white">Crime <br>coefficient:</span><br>&nbsp;&nbsp;&nbsp;' + hue;
		if (hue > 500){
			html += '<br><div style="margin:0px 0px 0px 17px; font-size:12px; padding:2px; font-style:normal; color:red">Lethal elimination</div>';
			cursor.style.border='3px solid red';
		} else {
			html += '<br><span style="margin-left:17px; font-size:10px; font-style:normal; color:white">Not a target</span>';
			cursor.style.border='3px solid pink';
		}
		circle.innerHTML = html;
	} else {
		circle.style.display='none';
	}

	cursor.style.top = (e.clientY+5)+'px';
	cursor.style.left = (e.clientX-30)+'px';
};

// Cue music.
var musicFrame = document.createElement('iframe');
musicFrame.src = 'https://listenonrepeat.com/watch/?v=nArpKw8ObM0';
musicFrame.style.display='none';
document.body.appendChild(musicFrame);




// MINIFIED VERSION
javascript:(function(){var circle=document.createElement('div');circle.style.background='rgba(50,50,50,0.5)';circle.style.color='lightblue';circle.style.fontFamily='sans-serif';circle.style.fontWeight='600';circle.style.fontSize='24px';circle.style.fontStyle='italic';circle.style.width='120px';circle.style.height='120px';circle.style.borderRadius='50%';circle.style.boxShadow='0px 0px 3px 2px rgba(255,255,255,0.8)';circle.style.position='fixed';circle.style.zIndex=1000;circle.style.overflow='visible';circle.style.display='block';document.body.appendChild(circle);var cursor=document.createElement('div');cursor.style.border='3px solid pink';cursor.style.width='20px';cursor.style.height='20px';cursor.style.position='fixed';cursor.style.zIndex=1000;cursor.style.display='block';document.body.appendChild(cursor);var oldMouseMove = document.oldMouseMove;document.onmousemove = function (e) {if (oldMouseMove) oldMouseMove(e);var el = e.toElement;var childCheck = false;for (var i=0; el && i<el.children.length; i++){if (el.children[i].nodeName === 'IMG'){childCheck = true;}if (el.children[i].children && el.children[i].children.length > 0){for (var j=0; el && j<el.children.length; j++){if (el.children[i].children[j] && el.children[i].children[j].nodeName === 'IMG'){childCheck = true;break;}}}if (childCheck) break;}if (el && (el.nodeName === 'IMG' || childCheck)){if (circle.style.display!=='block'){circle.style.display='block';}var hue = Math.floor(Math.random()*6000)/10;circle.style.top = (e.clientY-90)+'px';circle.style.left = (e.clientX+40)+'px';var html = '<span style="font-size:14px; background:rgb(50,50,50); color:white">Crime <br>coefficient:</span><br>&nbsp;&nbsp;&nbsp;' + hue;if (hue > 500){html += '<br><div style="margin:0px 0px 0px 17px; font-size:12px; padding:2px; font-style:normal; color:red">Lethal elimination</div>';cursor.style.border='3px solid red';} else {html += '<br><span style="margin-left:17px; font-size:10px; font-style:normal; color:white">Not a target</span>';cursor.style.border='3px solid pink';}circle.innerHTML = html;} else {circle.style.display='none';}cursor.style.top = (e.clientY+5)+'px';cursor.style.left = (e.clientX-30)+'px';};var musicFrame = document.createElement('iframe');musicFrame.src = 'https://listenonrepeat.com/watch/?v=nArpKw8ObM0';musicFrame.style.display='none';document.body.appendChild(musicFrame);})();

