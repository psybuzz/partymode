<html>
<head>
	<style>
		body{
			background-color: rgb(250, 250, 250);
		}
		.beta{
			color:red;
		}
		.bookmarklist{
			position: absolute;
			left: -180px;
			top: 70px;
			width: 70%;
		}
		.group{
			padding:20px 30px 0px 3px;
			margin-bottom:10px;
			overflow-y: hidden;
			height:50px;
			width: 90%;
			text-align:right;
			background-color: lightgray;
			transition: 0.4s ease height;
			transform: rotateZ(9deg);
		}
		.group:hover{
			height:90px;
		}
		.box{
			text-align: right;
			color:black;
			font-style:italic;
		}
		.b{
			color: rgb(0, 0, 110);
			font-family: Helvetica;
			font-size: 30px;
			position: absolute;
			right: 0px;
			left: 0px;
			top: 0px;
			padding: 20px 20px 0px 0px;
			/*box-shadow: 0px 0.5px 1px 1px grey;*/
		}
		.leftb:hover{
			background-color: lightblue;
		}
		.midb:hover{
			background-color: lightseagreen;
		}
		.rightb:hover{
			background-color: lightpink;
		}
		.coral:hover{
			background-color: lightcoral;
		}
		#description{
			position:absolute;
			font-family: Georgia;
			top:150px;
			right:80px;
			text-align: right;
		}
		p{
			width:100%;
			text-align: right;
			color:dimGray;
		}
	</style>
</head>
<body style='margin:0'>
	<ul class='bookmarklist'>
		<li>
			<div class='group leftb'>
				<a class='b' href="javascript:(function(){var b=document.body;var rad=2;b.style.webkitFilter=b.style.MozFilter=b.style.OFilter=b.style.MsFilter='blur('+rad+'px)';})()">VeryGlassy</a>
				<br>
				<p>works well on shorter pages</p>
				
				<div class='box'>How well can you see the web?  <a style='color:green;' href='http://www.who.int/mediacentre/factsheets/fs282/en/'>285 million people</a> have trouble.<br></div>
			</div>
		</li>
		<li>
			<div class='group midb'>
				<a class='b' href="javascript:document.onclick=function(e){(document.body.appendChild(style = document.createElement('style'))).type='text/css';style.innerHTML = '.pinpoint { position: fixed;z-index: 300;border-radius: 100%;border: 1280px solid black;opacity: 0.5; }';var p;document.body.appendChild(p = document.createElement('div'));p.className='pinpoint';p.style.height = p.style.width = window.innerWidth + 'px';p.style.left = '-'+(window.innerWidth/2 + window.innerWidth - e.clientX)+'px';p.style.top = '-'+(window.innerWidth-e.clientY+(window.innerWidth/2))+'px';p.style.borderWidth = window.innerWidth + 'px';sp = 10;(function pinpoint(){p.style.width = (parseInt(p.style.width)-sp) + 'px';p.style.height = (parseInt(p.style.height)-sp) + 'px';p.style.top = (parseFloat(p.style.top)-(sp/2)) + 'px';p.style.left = (parseFloat(p.style.left)-(sp/2)) + 'px';p.style.borderWidth = (parseInt(p.style.borderWidth)+sp) + 'px';if (parseInt(p.style.width) > sp){setTimeout(pinpoint, 1);}else{document.body.removeChild(p);}})();}">eyeClicker</a>
				<br>
				<p><span class='beta'>beta!</span> works well with James Bond music</p>
				
				<div class='box'>Click anywhere.  Click anyone.  Click anything.  But not too much...<br></div>
			</div>
		</li>
		<li>
			<div class='group rightb'>
				<a class='b' href="javascript:(function(){function e(){y=document.getElementsByTagName('IMG')[Math.floor(Math.random()*document.getElementsByTagName('IMG').length)]||document.body;y.style.transition=y.style.webkitTransition='-webkit-transform 1s ease-out';y.style.MozTransition='-moz-transform 1s ease-out';y.style.transform=y.style.MozTransform=y.style.webkitTransform='scale('+(Math.random()*2+.5)+')';if(Math.random()>.9){document.body.style.webkitTransition=document.body.style.MozTransition=document.body.style.transition='background-color 2s ease-out';document.body.style.backgroundColor='rgb('+Math.floor(Math.random()*255)+','+Math.floor(Math.random()*255)+','+Math.floor(Math.random()*255)+')'}if(Math.random()>.9){t.style.opacity=Math.random()*.3}}var t=document.createElement('div');t.style.position='fixed';t.style.width='100%';t.style.height='100%';t.style.top='0';t.style.opacity=0;t.style.zIndex='100';t.style.backgroundColor='yellow';t.style.transition=t.style.webkitTransition='opacity 1s ease-out';t.style.MozTransition='opacity 1s ease-out';document.body.appendChild(t);(function n(){e();console.log(1);setTimeout(function(){n()},15)})()})()">PartyMode</a>
				<br>
				<p>works well on pages with tons of images</p>
				
				<div class='box'>Dance to the web and enjoy the lights.  Just add music.<br></div>
			</div>
		</li>
		<li>
			<div class="group coral">
				<a class="b" href="javascript:(function(){var circle=document.createElement('div');circle.style.background='rgba(50,50,50,0.5)';circle.style.color='lightblue';circle.style.fontFamily='sans-serif';circle.style.fontWeight='600';circle.style.fontSize='24px';circle.style.fontStyle='italic';circle.style.width='120px';circle.style.height='120px';circle.style.borderRadius='50%';circle.style.boxShadow='0px 0px 3px 2px rgba(255,255,255,0.8)';circle.style.position='fixed';circle.style.zIndex=1000;circle.style.overflow='visible';circle.style.display='block';document.body.appendChild(circle);var cursor=document.createElement('div');cursor.style.border='3px solid pink';cursor.style.width='20px';cursor.style.height='20px';cursor.style.position='fixed';cursor.style.zIndex=1000;cursor.style.display='block';document.body.appendChild(cursor);var oldMouseMove = document.oldMouseMove;document.onmousemove = function (e) {if (oldMouseMove) oldMouseMove(e);var el = e.toElement;var childCheck = false;for (var i=0; el && i<el.children.length; i++){if (el.children[i].nodeName === 'IMG'){childCheck = true;}if (el.children[i].children && el.children[i].children.length > 0){for (var j=0; el && j<el.children.length; j++){if (el.children[i].children[j] && el.children[i].children[j].nodeName === 'IMG'){childCheck = true;break;}}}if (childCheck) break;}if (el && (el.nodeName === 'IMG' || childCheck)){if (circle.style.display!=='block'){circle.style.display='block';}var hue = Math.floor(Math.random()*6000)/10;circle.style.top = (e.clientY-90)+'px';circle.style.left = (e.clientX+40)+'px';var html = '<span style=&quot;font-size:14px; background:rgb(50,50,50); color:white&quot;>Crime <br>coefficient:</span><br>&nbsp;&nbsp;&nbsp;' + hue;if (hue > 500){html += '<br><div style=&quot;margin:0px 0px 0px 17px; font-size:12px; padding:2px; font-style:normal; color:red&quot;>Lethal elimination</div>';cursor.style.border='3px solid red';} else {html += '<br><span style=&quot;margin-left:17px; font-size:10px; font-style:normal; color:white&quot;>Not a target</span>';cursor.style.border='3px solid pink';}circle.innerHTML = html;} else {circle.style.display='none';}cursor.style.top = (e.clientY+5)+'px';cursor.style.left = (e.clientX-30)+'px';};var musicFrame = document.createElement('iframe');musicFrame.src = 'https://listenonrepeat.com/watch/?v=nArpKw8ObM0';musicFrame.style.display='none';document.body.appendChild(musicFrame);})();">PsychoPass</a>
				<br>
				<p>scan your way to a safe society</p>

				<div class='box'>Point your cursor at images to analyze hue.</div>
			</div>
		</li>
	</ul>
	
	
	
	
	<span id="description">drag these links to your bookmarks bar.<br><br>enjoy from any website.</span>
	<script></script>
</body>
</html>