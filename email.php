<?php
$subject = 'You Got Message'; // Asunto del correo electrónico
$to = 'maximilianoguyotcofano3415@gmail.com';  // Correo electrónico del destinatario
$emailTo = $_REQUEST['email'];

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$msg = $_REQUEST['message'];

$email_from = $name.'<'.$email.'>';

$headers = "MIME-Version: 1.1";
$headers .= "Content-type: text/html; charset=iso-8859-1";
$headers .= "From: ".$name.'<'.$email.'>'."\r\n"; // Correo del remitente
$headers .= "Return-Path:"."From:" . $email;

$message .= 'Name : ' . $name . "\n";
$message .= 'Email : ' . $email . "\n";
$message .= 'Phone : ' . $phone . "\n";
$message .= 'Message : ' . $msg;

if (@mail($to, $subject, $message, $email_from))
{
	// Transfiere el valor 'sent' a la función AJAX para mostrar el mensaje de éxito.
	echo 'sent';
}
else
{
	// Transfiere el valor 'failed' a la función AJAX para mostrar el mensaje de error.
	echo 'failed';
}
?>