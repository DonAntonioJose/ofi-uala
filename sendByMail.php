<?php


require 'PHPMailerAutoload.php';

try {
	

	$email_to = "btrescordoba@gmail.com";
	$email_subject = "Contacto desde el sitio web";
	$contact_Email = $_POST['contact_Email'];

	$mail = new PHPMailer(true); //Nueva instancia, con las excepciones habilitadas

	$body = "<b>Detalles del formulario de contacto:<br><br></b>";
	$body .= "<b>Nombre: </b>" . $_POST['contact_Name'] . "<br>";
	$body .= "<b>E-mail: </b>" . $_POST['contact_Email'] . "<br>";
	$body .= "<b>Comentarios: </b>" . $_POST['contact_Comment'] . "<br><br>";

	$mail->IsSMTP();                           // Usamos el metodo SMTP de la clase PHPMailer
	$mail->SMTPAuth   = true;                  // habilitado SMTP autentificación
	$mail->Port       = 587;                    // puerto del server SMTP
	$mail->Mailer 	  = "smtp"; 
	//smtp.ualasince1990.com
	$mail->Host       = "smtp.gmail.com"; // SMTP server
	$mail->Username   = "ualasince1990@gmail.com";     // SMTP server Usuario
	$mail->Password   = "No-reply2017";            // SMTP server password
	$mail->From       = "ualasince1990@gmail.com"; //Remitente de Correo
	$mail->FromName   = "Uala"; //Nombre del remitente
	$mail->AddAddress($email_to);
	$mail->Subject  = "Contacto desde sitio web"; //Asunto del correo
	$mail->MsgHTML($body);
	$mail->IsHTML(true); // Enviar como HTML
	$mail->Send();//Enviar
	
	

	header('Location: /gatete/contacto.php?sent=ok');
	
	
}catch (phpmailerException $e) {
	echo $e->errorMessage();//Mensaje de error si se produciera.
}


// error_reporting( E_ALL & ~( E_NOTICE | E_STRICT | E_DEPRECATED ) );
// require_once "Mail.php";

// $to       = 'btrescordoba@gmail.com';
// $from     = 'no-reply@ualasince1990.com';
// $body     = 'Mensaje de POA';
// $host     = 'smtp.ualasince1990.com';
// $username = 'no-reply@ualasince1990.com';
// $password = 'No-reply2017';
// $subject  = 'Mensaje de prueba desde POA';


// $headers = array ('From' => $from,
   // 'To' => $to,
   // 'Subject' => $subject);
 // $smtp = Mail::factory('smtp',
   // array ('host' => $host,
     // 'auth' => false,
     // 'username' => $username,
     // 'password' => $password));
 
 // $mail = $smtp->send($to, $headers, $body);

// if (PEAR::isError($mail)) {
   // echo("<p>" . $mail->getMessage() . "</p>");
  // } else {
   // echo "Mensaje enviado desde POA a ". $to ;
  // }

?>