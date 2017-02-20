<?php

require 'PHPMailerAutoload.php';

try {

	$email_to = "btrescordoba@gmail.com";
	$email_subject = "Contacto desde el sitio web";
	$contact_Email = $_POST['contact_Email'];

	$mail = new PHPMailer(true); //Nueva instancia, con las excepciones habilitadas

	$body = "Detalles del formulario de contacto:\n\n";
	$body .= "Nombre: " . $_POST['contact_Name'] . "\n";
	$body .= "E-mail: " . $_POST['contact_Email'] . "\n";
	$body .= "Comentarios: " . $_POST['contact_Comment'] . "\n\n";

	$mail->IsSMTP();                           // Usamos el metodo SMTP de la clase PHPMailer
	$mail->SMTPAuth   = true;                  // habilitado SMTP autentificación
	$mail->Port       = 587;                    // puerto del server SMTP
	$mail->Host       = "smtp.gmail.com"; // SMTP server
	
	$mail->Username   = "btrescordoba@gmail.com";     // SMTP server Usuario
	$mail->Password   = "3peluquero2017";            // SMTP server password
	$mail->From       = "noreply@ualasince1990.com"; //Remitente de Correo
	$mail->FromName   = "Uala"; //Nombre del remitente
	$mail->AddAddress($email_to);
	$mail->Subject  = "Contacto desde sitio web"; //Asunto del correo
	$mail->MsgHTML($body);
	$mail->IsHTML(true); // Enviar como HTML
	$mail->Send();//Enviar
	

	header('Location: /gatete/index.php');
	
	
}catch (phpmailerException $e) {
	echo $e->errorMessage();//Mensaje de error si se produciera.
}


?>