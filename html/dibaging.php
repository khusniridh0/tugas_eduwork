<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body{
			padding: 0px;
			margin: 0px;
		}

		video {
		    position: fixed;
		    top: 0%;
		    left: 0%;
		    width: 1095px;
		    z-index: 0;
		}

		.content{
			position: relative;
			z-index: 99;
		}

		.bg-gradient{
			height: 1092px;
			margin-top: -25px;		
			background: linear-gradient(to right, #7ee3ffcc, #00004663);
		}

		.bg-login{
			width: 50%;
			height: 1092px;
			background-color: pink;
		}
	</style>
	<title>Document</title>
</head>
<body>
	<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
  		<source src="../gambar/bg.mp4" type="video/mp4">
  	</video>
  	<div class="content">
  		<div class="bg-gradient">
  			<div class="bg-login">
  				
  			</div>
  		</div>

  	</div>
</body>
</body>
</html>

