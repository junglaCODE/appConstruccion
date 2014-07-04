<!DOCTYPE html>

<html>

<head>

	<meta charset="utf-8" />

	<title>Página 'En construcción'</title>

	<!-- CSS -->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="fonts/stylesheet.css">
	<link rel="stylesheet" href="css/style.css">

	<!--[if lt IE 9]>
		<link rel="stylesheet" href="css/ie.css">
	<![endif]-->

	<!-- IE fix for HTML5 tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- jQuery and Modernizr-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="js/modernizr.custom.js"></script>

	<!-- Countdown timer and other animations -->
	<script src="js/jquery.countdown.js"></script>
	<script src="js/script.js"></script>

</head>
<body onload="<?php date_default_timezone_set('America/Mexico_City'); $d = date('d');  $d = 28-$d;   echo "contadordetetas($d*23*60*60*1000);" ?>">

	<header>
		<center><img src="images/logo.png" width="330px" height="250px"><br><br>
				<h1><a class="empresa" href="http://junglacode.org/blog/"> JunglaCode.org</a> Esta acargo de este proyecto </h1>
</center>
	</header>

		<div id="counter"></div>

		<footer>
			<ul>
				<li><a class="twitter" href=""></a></li>
				<li><a class="skype" href=""></a></li>
			</ul>
		</footer>
	</div>
	
	
</body>

</html>
