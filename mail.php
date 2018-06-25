<?php
if (!empty($_POST['email']) && isset($_POST['email'])&&!empty($_POST['message']) && isset($_POST['message']))
{
	$surname = utf8_decode($_POST['surname']);
	$name = utf8_decode($_POST['name']);
	$email = utf8_decode($_POST['email']);
	$phone = utf8_decode($_POST['phone']);
	$message = utf8_decode($_POST['message']);
	$formcontent= utf8_decode(" De: $name $surname \n Téléphone: $phone \n Message: $message");
	$recipient = utf8_decode("flavien.panunzio@gmail.com");
	$subject = utf8_decode("Formulaire de contact panun.tk");
	$mailheader = utf8_decode("From: $email \r\n");
	$accuse = utf8_decode("Votre message est bien reçu, je vous réponds au plus vite,\nBonne journée\nPANUNZIO Flavien \n\n*****\n*****\n*****\n\n Message envoyé:\n$message");
	mail($recipient, $subject, $formcontent, $mailheader) or die("Erreur!");
	mail($email, "Accusé de récéption Flavien Panuzio", $accuse) or die("Erreur!");
	echo '<script>alert("Votre message est bien envoyé.");</script>';
}
elseif (isset($_POST['submit'])) {
	echo '<script>alert("Veuillez remplir tout les champs demandés.");</script>';
}
?>