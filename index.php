<html>
<head>
	<style>
		body{
			background-color: rgb(250, 250, 250);	
		}
		.left{
			position:absolute;
			right:55%;
		}
		.right{
			position:absolute;
			left:55%;
		}
		div{
			top:18%;
		}
		.group{
			padding:50px 0px 0px 3px;
			overflow-y: hidden;
			height:120px;
		}
		.group:hover{
			height:auto;
		}
		.box{
			text-align: center;
			color:black;
			 font-style:italic;
		}
		.b{

			background-color: lightgray;
			font-family: Helvetica;
			font-size: 30px;
			border-radius: 10px;
			padding:30px 90px;
			box-shadow: 0px 0.5px 1px 1px grey;
		}
		.leftb:hover{
			background-color: lightblue;
		}
		.rightb:hover{
			background-color: lightpink;
		}
		footer{
			position:absolute;
			font-family: Georgia;
			bottom:12%;
			width:100%;
			left:0px;
			text-align: center;	
		}
		p{
			width:100%;
			text-align: center;
			color:dimGray;
		}
	</style>
</head>
<body style='margin:0'>
	<div class='left group'>
		VeryGlassy
		<br>
		<a class='b leftb' href="javascript:(function(){var b=document.body;var rad=5;b.style.webkitFilter=b.style.MozFilter=b.style.OFilter=b.style.MsFilter='blur('+rad+'px)';})()">VeryGlassy</a>
		<br><br>
		<p>works well on shorter pages</p>
		<br><br>
		<div class='box'>How well can you see the web?<br><a style='color:green;' href='http://www.who.int/mediacentre/factsheets/fs282/en/'>285 million people</a> have trouble.<br></div>
	</div>
	<div class='right group'>
		PartyMode
		<br>
		<a class='b rightb' href="javascript:(function(){function e(){y=document.getElementsByTagName('IMG')[Math.floor(Math.random()*document.getElementsByTagName('IMG').length)]||document.body;y.style.transition=y.style.webkitTransition='-webkit-transform 1s ease-out';y.style.MozTransition='-moz-transform 1s ease-out';y.style.transform=y.style.MozTransform=y.style.webkitTransform='scale('+(Math.random()*2+.5)+')';if(Math.random()>.9){document.body.style.webkitTransition=document.body.style.MozTransition=document.body.style.transition='background-color 2s ease-out';document.body.style.backgroundColor='rgb('+Math.floor(Math.random()*255)+','+Math.floor(Math.random()*255)+','+Math.floor(Math.random()*255)+')'}if(Math.random()>.9){t.style.opacity=Math.random()*.3}}var t=document.createElement('div');t.style.position='fixed';t.style.width='100%';t.style.height='100%';t.style.top='0';t.style.opacity=0;t.style.zIndex='100';t.style.backgroundColor='yellow';t.style.transition=t.style.webkitTransition='opacity 1s ease-out';t.style.MozTransition='opacity 1s ease-out';document.body.appendChild(t);(function n(){e();console.log(1);setTimeout(function(){n()},15)})()})()">PartyMode</a>
		<br><br>
		<p>works well on pages with tons of images</p>
		<br><br>
		<div class='box'>Dance to the web and enjoy the lights.<br>Just add music.<br></div>
	</div>
	
	<footer>drag these links to your bookmarks bar.<br><br>enjoy from any website.</footer>
	<script></script>
</body>
</html>