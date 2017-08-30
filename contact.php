<?php
// Check for empty fields
if(empty($_POST['nom'])  		||
(empty($_POST['prenom'])  		||
empty($_POST['email']) 		||
empty($_POST['objet']) 		||
empty($_POST['message'])	    ||
!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
{
    echo "No arguments Provided!";
    return false;
}

$nom = strip_tags(htmlspecialchars($_POST['nom']));
$prenom = strip_tags(htmlspecialchars($_POST['prenom']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$objet = strip_tags(htmlspecialchars($_POST['objet']));
$message = strip_tags(htmlspecialchars($_POST['message']));


// Create the email and send the message
$to = 'ohamzi45@gmail.com'; // Add your email address in between the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = " De la part de :  $nom";
$email_body = "Vous avez reçu un message  \n\n"."Voici les details :\n\nNom: $nom\n\nEmail: $email_address\n\nPrenom: $prenom\n\nMessage:\n$message";
$headers = "From: omarhamzi40@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
