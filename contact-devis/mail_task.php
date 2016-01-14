<?php

if(isset($_POST['nom'])) $nom = $_POST['nom'];
if(isset($_POST['prenom'])) $prenom = $_POST['prenom'];
if(isset($_POST['societe'])) $societe = $_POST['societe'];
if(isset($_POST['tel'])) $tel = $_POST['tel'];
if(isset($_POST['mail'])) $mail = $_POST['mail'];
if(isset($_POST['message'])) $message = $_POST['message'];

if(!empty($mail) && filter_var($mail,FILTER_VALIDATE_EMAIL)===FALSE)
{
	$valid = false;
}

$mail_to = "contact@espaceetstyle.fr,{$mail}";

$objet = "Espace et Style : Demande de devis ou renseignements.";

$headers = 'Content-Type: text/html; charset=\"UTF-8\";' . "\r\n";
$headers .= 'FROM: Espace et Style <contact@espaceetstyle.fr>' . "\r\n";
$headers .= 'Bcc: ' . "\r\n";

$message = "
Bonjour Madame / Monsieur {$nom}.<br><br>
Vous venez de contacter la société Espace et Style, nous vous contacterons dans les plus bref délais.<br><br>
Merci de votre confiance, Cordialement.<br>
<b>Espace et Style</b>.<br><br>
<b>Votre nom :</b> {$nom}<br><br>
<b>Prénom :</b> {$prenom}<br><br>
<b>société :</b> {$societe}<br><br>
<b>Téléphone :</b> {$tel}<br><br>
<b>Mail :</b> {$mail}<br><br>
<b>Votre message :</b><br>{$message}<br>";

$OK = mail ($mail_to, $objet, $message, $headers);

if ($OK)
{
	echo("<head><meta http-equiv=\"refresh\" content=\"2; URL=http://espaceetstyle.fr/contact-devis/\"></head><p style=\"font-family:arial;text-align:center;font-size:15px;\">Message envoy&eacute;.");
} 
else
{
	echo("<p style=\"font-family:arial;text-align:center;font-size:15px;\">Message non envoy&eacute;, l'adresse mail saisie est incorrect. <input style=\"width:50px;\" type=submit value=Ok onclick=self.location.href='http://espaceetstyle.fr/contact-devis/'></p>");
}

?>