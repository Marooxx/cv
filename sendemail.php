<?php
$nom       = @trim(stripslashes($_POST['nom']));
$prenom      = @trim(stripslashes($_POST['prenom']));
$from       = @trim(stripslashes($_POST['email']));
$objet    = @trim(stripslashes($_POST['objet']));
$message    = @trim(stripslashes($_POST['message']));
$to   		= 'omarhamzi40@gmail.com';//replace with your email

$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$headers[] = "From: {$nom} {$prenom} <{$from}>";
$headers[] = "Reply-To: <{$from}>";
$headers[] = "Subject: {$subject}";
$headers[] = "X-Mailer: PHP/".phpversion();

mail($nom,$prenom,$to, $objet, $message, $headers);

die;
