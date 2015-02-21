/*
implementacion de una funcion para que sea mas rapido implemetar los dias que falta
by JLGC @monolinux
jungla{CODE}
*/

function __juicioFinal__(fecha){


	/* ---- Cronometro ---- */

	$('#cronometro').countdown({
		timestamp : (new Date()).getTime() + fecha
	});


	/* ---- Animations ---- */

	$('#links a').hover(
		function(){ $(this).animate({ left: 3 }, 'fast'); },
		function(){ $(this).animate({ left: 0 }, 'fast'); }
	);

	$('footer a').hover(
		function(){ $(this).animate({ top: 3 }, 'fast'); },
		function(){ $(this).animate({ top: 0 }, 'fast'); }
	);


	/* ---- Usando Modernizr para verificar si los atributos "required" y "placeholder son soportados"  ---- */

	if (!Modernizr.input.placeholder) {
		$('.email').val('Ingresa tu direccion de e-mail aqui ...');
		$('.email').focus(function() {
			if($(this).val() == 'Ingresa tu direccion de e-mail aqui ...') {
				$(this).val('');
			}
		});
	}

	// for detecting if the browser is Safari
	var browser = navigator.userAgent.toLowerCase();

	if(!Modernizr.input.required || (browser.indexOf("safari") != -1 && browser.indexOf("chrome") == -1)) {
		$('form').submit(function() {
			$('.popup').remove();
			if(!$('.email').val() || $('.email').val() == 'Ingresa tu direccion de e-mail aqui...') {
				$('form').append('<p class="popup">Por favor completa el campo de e-mail</p>');
				$('.email').focus();
				return false;
			}
		});
		$('.email').keydown(function() {
			$('.popup').remove();
		});
		$('.email').blur(function() {
			$('.popup').remove();
		});
	}


}


function __envioCorreo__(){
__correo__ = $("input.informacion").val();
$.post('gear_index.php', {
		informacion: __correo__

})
				.done(function (request) {
 				 alert(request);
				});
}
