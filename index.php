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
		<link rel='shortcut icon' type='image/png' href='images/monkey.png' />
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
<body onload="<?php echo "__juicioFinal__($d*100*60*60*1000);" ?>">
<a href='https://github.com/junglaCODE/appConstruccion' target='_blank'><img src="images/github.png" alt="" width='100px' class='fork' /></a>

	<header>
			<h1>{Logotipo}</h1>
			<p>{Información}</p>
	</header>

	<section id="principal">
	    <article>
				{Nota}
			</article>

			<aside id="cronometro">
			<!-- Aqui es donde se pone el contador y es dxesde el archivo script.js -->
			</aside>

			<article id="formulario">
				<input type="text"  class="informacion" placeholder="Escriba su e-mail en este campo" required />
				<button onclick='__envioCorreo__()' class="submit" >Enviar</button>
			</article>

			<footer>
				<ul>
					<li>{Redes sociales}</li>
				</ul>
				<section id="redessociales">
					<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://alux.junglacode.org/" data-text="[Punto de venta] ALUX" data-via="junglacode" data-size="large">Tweet</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			<script src="https://apis.google.com/js/platform.js" async defer>
				{lang: 'es'}
			</script>
			<div class="g-plusone" data-annotation="inline" data-width="50"></div>
			<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Falux.junglacode.org%2F&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowTransparency="true"></iframe>
				</section>
			</footer>
		</section>
	</body>

	</html>
