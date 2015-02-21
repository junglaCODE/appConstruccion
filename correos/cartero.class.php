<?php
/*
Clase que maneja la libreria de phpmailer con menos complejidad que la que se tiene
Creada: JLGC @monolinux
Empresa: jungla{CODE}
*/
header("Content-Type: text/html;charset=utf-8"); //encabezado para el tipo de codificación
date_default_timezone_set('Etc/UTC');
require __DIR__ . '/PHPMailerAutoload.php';

class Envio_Mails extends PHPMailer {

    private $__PARAMETROS = null /* Arreglo de valores para la configuracion del envio del correo */;
    private $__PGMAIL = array('smtp.gmail.com', 587, '*****@gmail.com', '***********', 'tls', true);
     /* config de correo para un gmail */

    public function __construct() {
        $parametros = $this->__PGMAIL;
        $this->__PARAMETROS = array('host' => $parametros[0], 'puerto' => $parametros[1], 'usuario' => $parametros[2],
            'password' => $parametros[3], 'secure' => $parametros[4], 'auth' => $parametros[5]);
    }

    public function __configuracionCorreo($usuario, $debug = 1 /* integer 0,1,2 */, $consola = 'html' /* string */) {
        parent::isSMTP();
        $this->SMTPDebug = $debug;
        $this->Debugoutput = $consola;
        $this->Host = $this->__PARAMETROS['host'];
        $this->Port = $this->__PARAMETROS['puerto'];
        $this->SMTPSecure = $this->__PARAMETROS['secure'];
        $this->SMTPAuth = $this->__PARAMETROS['auth'];
        $this->Username = $this->__PARAMETROS['usuario'];
        $this->Password = $this->__PARAMETROS['password'];
        $this->setFrom($this->__PARAMETROS['usuario'], $usuario);
    }

    public function __envioGmail($CC /* array name,correo */, $TO /* array name,correo */, $subject /* string */, $mensaje /* string */, $file /* string */) {
        if (!empty($CC)):
            parent::addReplyTo($CC[0], $CC[1]);
        endif;
        parent::addAddress($TO[0], $TO[1]);
        $this->Subject = $subject;
        parent::msgHTML($mensaje);
        $this->AltBody = 'Correo enviado desde la pagina de contrucción';
        if (!empty($file)):
            parent::addAttachment($file);
        endif;
        $this->validacionEmail__($this->send());
    }

    private function validacionEmail__($envio /* boolean */) {
        if ($envio) {
            return "Error al enviar el correo " . $this->ErrorInfo;
        } else {
            return true;
        }
    }

}
