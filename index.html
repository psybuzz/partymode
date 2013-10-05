
<!doctype html>
<html lang="en">
	<head>
		<title>Water 2</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
		<!--<link rel="stylesheet" type="text/css" href="../css/style_no_stats.css">-->
		<style type="text/css">
			body {
				background:#000000;
				margin:0;
			}
		</style>
	</head>

	<body>

		<div id="container"></div>

		<div id="title" style="position:absolute; color:white; width:100%; text-align:center;
			top:32%; font-size:50px; font-family:Helvetica;">
			Deokgeun | Park
			<br>
			<span style="font-size:30px">the original artgineer</span>
		</div>

		<script src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
		<script src="three.min.js"></script>

		<script src="ShaderUtils.js"></script>
		<script src="navigation.js"></script>
	
		<script>

			var container;

			var camera, scene, renderer;
			var cameraCube, sceneCube;

			var has_gl = false;

			var delta;
			var time;
			var oldTime;

			var planeMesh;
			var uniforms;

			init();
			animate();

			function init() {

				container = $( '#container' );
				//document.body.appendChild( container );

				scene = new THREE.Scene();

				camera = new THREE.PerspectiveCamera( 65, window.innerWidth / window.innerHeight, 1, 10000 );
				camera.position.z = 200;
				camera.position.y = 50;
				camera.lookAt(scene.position);
				scene.add( camera );

				//var controls = new THREE.FirstPersonControls( camera );

				cameraCube = new THREE.PerspectiveCamera( 65, window.innerWidth / window.innerHeight, 1, 10000 );
				sceneCube = new THREE.Scene();

				// LIGHTS

				spotLight = new THREE.SpotLight( 0xffb574, 2.5 );
				spotLight.position.set( -1000, 500, -1000 );
				scene.add( spotLight );

				directionalLight2 = new THREE.DirectionalLight( 0xffb574, 0.5 );
				directionalLight2.position.set( -1, 1, -1 ).normalize();
				scene.add( directionalLight2 );


				// normal map shader
				var ambient = 0x1b2434, diffuse = 0x778bad, specular = 0xcecece, shininess = 20;
				var map = THREE.ImageUtils.loadTexture( "940-normal.jpg" );

				var shader = THREE.ShaderUtils.lib[ "normal" ];
				uniforms = THREE.UniformsUtils.clone( shader.uniforms );

				uniforms[ "uRepeat" ].value = new THREE.Vector2( 1, 10 );

				//uniforms[ "enableAO" ].value = true;
				uniforms[ "enableReflection" ].value = false;

				uniforms[ "tNormal0" ].value = map;
				uniforms[ "tNormal1" ].value = map;
				
				uniforms[ "tNormal0" ].value.wrapS = THREE.MirroredRepeatWrapping;
				uniforms[ "tNormal0" ].value.wrapT = THREE.MirroredRepeatWrapping;
				uniforms[ "tNormal1" ].value.wrapS = THREE.MirroredRepeatWrapping;
				uniforms[ "tNormal1" ].value.wrapT = THREE.MirroredRepeatWrapping;

				//heightiness --- important!
				uniforms[ "uNormalScale" ].value.y = 0;

				uniforms[ "uDiffuseColor" ].value.setHex( diffuse );
				uniforms[ "uSpecularColor" ].value.setHex( specular );
				//uniforms[ "uAmbientColor" ].value.setHex( ambient );

				uniforms[ "uShininess" ].value = 20;
				uniforms[ "uDiffuseColor" ].value.convertGammaToLinear();		//disable to achieve sunset
				//uniforms[ "uSpecularColor" ].value.convertGammaToLinear();
				//uniforms[ "uAmbientColor" ].value.convertGammaToLinear();


				var parameters = { fragmentShader: shader.fragmentShader, vertexShader: shader.vertexShader, uniforms: uniforms, lights: true, fog: true, transparent: false };
				var material = new THREE.ShaderMaterial( parameters );


				var planeGeometry = new THREE.PlaneGeometry(2048,2048,30,30);
				planeGeometry.computeFaceNormals();
				planeGeometry.computeVertexNormals();
				planeGeometry.computeTangents();

				planeMesh = new THREE.Mesh( planeGeometry, material );
				planeMesh.position.y = -10;
				planeMesh.rotation.x = -Math.PI/2;
				
				scene.add(planeMesh);


				try {
					// renderer
					renderer = new THREE.WebGLRenderer({antialias: true});
					renderer.setSize( window.innerWidth, window.innerHeight );
					renderer.autoClear = false;

					container.append( renderer.domElement );
					has_gl = true;

					window.addEventListener( 'resize', onWindowResize, false );
				}
				catch (e) {
					// need webgl
					alert("sorry, webgl is not available")
					return;
				}

			}

			function onWindowResize() {

				windowHalfX = window.innerWidth / 2;
				windowHalfY = window.innerHeight / 2;

				camera.aspect = window.innerWidth / window.innerHeight;
				camera.updateProjectionMatrix();

				cameraCube.aspect = window.innerWidth / window.innerHeight;
				cameraCube.updateProjectionMatrix();

				renderer.setSize( window.innerWidth, window.innerHeight );

			}

			function animate() {
				requestAnimationFrame( animate );
				render();
			}

			function render() {

				time = new Date().getTime();
				delta = time - oldTime;
				oldTime = time;

				if (isNaN(delta) || delta > 1000 || delta == 0 ) {
					delta = 1000/60;
				}

				uniforms.uTime.value += delta*0.005;
				
				camera.lookAt(scene.position);

				if (has_gl) {
					renderer.clear();
					renderer.render( sceneCube, cameraCube );
					renderer.render( scene, camera );
				}

			}

		</script>
	</body>
</html>
