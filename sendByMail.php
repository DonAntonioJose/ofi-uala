<?php


$email_to = "afgfrias@gmail.com";
$email_subject = "Contacto desde el sitio web";
$contact_Email = $_POST['contact_Email'];


if(!isset($_POST['contact_Name']) ||
!isset($_POST['contact_Email']) ||
!isset($_POST['contact_Comment'])) {

	echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
	echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
	die();
}else {

	$email_message = "Detalles del formulario de contacto:\n\n";
	$email_message .= "Nombre: " . $_POST['contact_Name'] . "\n";
	$email_message .= "E-mail: " . $_POST['contact_Email'] . "\n";
	$email_message .= "Comentarios: " . $_POST['contact_Comment'] . "\n\n";


	// Ahora se envía el e-mail usando la función mail() de PHP
	$headers = 'From: noreply@btrescordoba.com'."\r\n".
	'X-Mailer: PHP/' . phpversion();

	@mail($email_to, $email_subject, $email_message, $headers);

	header('Location: /ofi-uala/index.php');
}
?>