(function(){
	function shift(){
		// y = document.all[Math.floor(Math.random()*document.all.length)];		//all
		y = document.getElementsByTagName("IMG")[Math.floor(Math.random()*document.getElementsByTagName("IMG").length)];		//images

		y.style.transition = y.style.webkitTransition = "-webkit-transform 1s ease-out";
		y.style.MozTransition = "-moz-transform 1s ease-out";
		y.style.transform = y.style.MozTransform = y.style.webkitTransform = "scale("+((Math.random())*2.0+.5)+")";

		if (Math.random()>0.9){
			document.body.style.webkitTransition = document.body.style.MozTransition = document.body.style.transition = "background-color 2s ease-out";
			document.body.style.backgroundColor = "rgb("+Math.floor(Math.random()*255)+","+Math.floor(Math.random()*255)+","+Math.floor(Math.random()*255)+")";
		}
		if (Math.random()>0.9){
			cover.style.opacity = Math.random()*.3;
		}
	}
	var cover = document.createElement("div")
	cover.style.position = "fixed";
	cover.style.width = "100%";
	cover.style.height = "100%";
	cover.style.top = "0";
	cover.style.opacity = 0;
	cover.style.zIndex = "100";
	cover.style.backgroundColor = "yellow";
	cover.style.transition = cover.style.webkitTransition = "opacity 1s ease-out";
	cover.style.MozTransition = "opacity 1s ease-out";
	document.body.appendChild(cover);
	(function go(){
	shift()
	console.log(1)
	setTimeout(function(){go()},20);
	})()
})();