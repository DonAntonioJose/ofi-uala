<?php

require 'PHPMailerAutoload.php';
try {
	$mail = new PHPMailer(true); //Nueva instancia, con las excepciones habilitadas
	$body             = '<p>Este es un Mensaje de Prueba</p>';
	$body             = preg_replace('/\\\\/','', $body); //Escapar backslashes
	$mail->IsSMTP();                           // Usamos el metodo SMTP de la clase PHPMailer
	$mail->SMTPAuth   = true;                  // habilitado SMTP autentificación
	$mail->Port       = 587;                    // puerto del server SMTP
	$mail->Host       = "smtp.gmail.com"; // SMTP server
	$mail->Username   = "btrescordoba@gmail.com";     // SMTP server Usuario
	$mail->Password   = "3peluquero2017";            // SMTP server password
	$mail->From       = "noreply@ualasince1990.com"; //Remitente de Correo
	$mail->FromName   = "Contacto desde sitio web."; //Nombre del remitente
	$to = "btrescordoba@gmail.com"; //Para quien se le va enviar
	$mail->AddAddress($to);
	$mail->Subject  = "Contacto desde sitio web"; //Asunto del correo
	$mail->MsgHTML($body);
	$mail->IsHTML(true); // Enviar como HTML
	$mail->Send();//Enviar
	echo 'El Mensaje ha sido enviado.';
} catch (phpmailerException $e) {
	echo $e->errorMessage();//Mensaje de error si se produciera.
}
?>
