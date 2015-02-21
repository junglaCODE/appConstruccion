<?php
require_once __DIR__."/correos/cartero.class.php";
$CC = 'webmaster@junglacode.org;[webmaster]'/* array correo;name */;
$TO = 'webmaster@junglacode.org;[webmaster]'/* array correo;name */;
$subject = 'Posible interesado en el proyecto'/* string */;
$messenge = $_POST['informacion']/* string */;
$correo = new Envio_Mails();
$correo->__configuracionCorreo('El webmaster [ @monolinux ]');
$correo->__envioGmail(explode(';', $CC), explode(';', $TO),$subject,$messenge,null);
