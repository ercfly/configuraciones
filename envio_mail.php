<?php

define("VALORES", "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i");
define("MAIL_TEST", array("info@mail.com", "Cc: con_copia@mail.com","Bcc: copia_oculta@mail.com", "From: ", "Reply-To: ", "Contact form submission from test_mail : "));
define("DETALLE", array("Has recibido un nuevo mensaje de Segurenta Informes. ","Aquí están los detalles: \n"," Nombre: ","\n Email: ","\n Tipo Cliente: ","\n Telefono : "));
define('DIV_ALERT', array('<div class="alert alert-danger alert-dismissible fade show" role="alert">','<div class="alert alert-success alert-success-modal alert-dismissible fade show" role="alert">'));
define("DIV_FIN", "</div>");
define("MS_NOT_SEND", "<h5>¡Lo siento, no se envio el mensaje!</h5>");
define("MS_SOLI", "<h6>Hemos recibido su solicitud, ¡muy pronto nos pondremos en contacto con usted!</h6>");
define("BUTTON_ALERT", '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
class Mailsend 
{
	
	function __construct()
	{
		
	}

	public function sendMail($username,$email_address,$telefono,$tip_clie){

			$to = MAIL_TEST[0];
			$email_subject = MAIL_TEST[5].$username;
			$email_body = DETALLE[0] . DETALLE[1]. DETALLE[2]. $username .DETALLE[3]. $email_address .DETALLE[4]. $tip_clie .DETALLE[5]. $telefono; 			
			$headers = MAIL_TEST[3] . $to ."\n"; 
			$headers .= MAIL_TEST[4] . $email_address;
			$headers .= MAIL_TEST[1] . "\r\n";
			$headers .= MAIL_TEST[2];
			
			mail($to,$email_subject,$email_body,$headers);
	}
}

?>