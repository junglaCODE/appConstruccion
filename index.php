<?php
date_default_timezone_set('America/Mexico_City');
$d = date('d');
$d = 28-$d; //un mes para que pueda terminar el proyecto
?>

<!DOCTYPE html>
<html lang="es-ES">

<head>

		<meta charset="utf-8" />
		<title>Página::Construcción</title>
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
			<script src="js/jquery.min.js"></script>
			<script src="js/modernizr.custom.js"></script>
			<!-- Countdown timer and other animations -->
			<script src="js/jquery.countdown.js"></script>
			<script src="js/script.js"></script>
</head>
<body onload="<?php echo "juicioFinal($d*100*60*60*1000);" ?>">

	<header>
			<h1>{Logotipo}</h1>
			<p>{Información}</p>
	</header>

	<section id="principal">
	    <article>
				{Nota}
			</article>

			<aside id="cronometro">
			<!-- Aqui es donde se pone el contador y es desde el archivo script.js -->
			</aside>

			<form action="" method="get">
				<input type="text" class="email" placeholder="Escriba su e-mail en este campo" required />
				<input type="submit" class="submit" value="Enviar" />
			</form>

			<footer>
				<ul>
					<li>{Redes sociales}</li>
				</ul>
			</footer>
		</section>
	</body>

	</html>
