<?php

require 'PHPMailerAutoload.php';

try {
	
	$email_to = "no-reply@ualasince1990.com";
	$email_subject = "Contacto desde el sitio web";
	$contact_Email = $_POST['contact_Email'];
	$mail = new PHPMailer(true); //Nueva instancia, con las excepciones habilitadas

	$body = "<b>Detalles del formulario de contacto:<br><br></b>";
	$body .= "<b>Nombre: </b>" . $_POST['contact_Name'] . "<br>";
	$body .= "<b>E-mail: </b>" . $_POST['contact_Email'] . "<br>";
	$body .= "<b>Comentarios: </b>" . $_POST['contact_Comment'] . "<br><br>";

	$mail->IsSMTP();                           // Usamos el metodo SMTP de la clase PHPMailer
	$mail->SMTPAuth   = true;                  // habilitado SMTP autentificación
	$mail->Port       = 25;                    // puerto del server SMTP
	$mail->Mailer 	  = "smtp"; 
	$mail->Host       = "smtp.ualasince1990.com"; // SMTP server
	$mail->Username   = "no-reply@ualasince1990.com";     // SMTP server Usuario
	$mail->Password   = "No-reply2017";            // SMTP server password
	$mail->From       = "no-reply@ualasince1990.com"; //Remitente de Correo
	$mail->FromName   = "Uala"; //Nombre del remitente
	$mail->AddCC($contact_Email, ' ');
	$mail->AddAddress($email_to);
	$mail->Subject  = "Contacto desde sitio web"; //Asunto del correo
	$mail->MsgHTML($body);
	$mail->IsHTML(true); // Enviar como HTML
	$mail->Send();//Enviar
	
	header('Location: /contacto.php?sent=ok');
	
}catch (phpmailerException $e) {
	echo $e->errorMessage();//Mensaje de error si se produciera.
}

?>