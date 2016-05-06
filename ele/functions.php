<?php
/**
*
* Configuration site
*
**/
if($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME'] == 'romanczerkies.fr'){

	// Racine site
	define('RACINE', '/espaceetstyle/');

	// Email prin
	$emailConfig = 'roman.czerkies@gmail.com';

	//Connexion PDO
  if($_SERVER['SERVER_NAME'] == 'localhost'){

    //PDO LOCAL

  } else {

    // PDO Serveur dev

  }

} else {

	// Racine site
	define('RACINE', '/');

	// Email Prin
	$emailConfig = 'contact@espaceetstyle.fr';

	// Connexion PDO

}

/**
*
* Gestion du formulaire de contact
*
**/
if(isset($_POST['contact'])){

  $msg = '';

  if(isset($_POST['nom']) && isset($_POST['prenom'])
  && isset($_POST['societe']) && isset($_POST['tel'])
  && isset($_POST['mail']) && isset($_POST['message'])
  && isset($_POST['rbt']) && empty($_POST['rbt'])){

      if(empty($_POST['nom']) || strlen($_POST['nom']) <= 2){
        $msg .= '<label for="nom">Veuillez inscrire votre <b>Nom</b>.</label><br>';
      }
      if(empty($_POST['mail'])){
        $msg .= '<label for="mail">Veuillez inscrire un <b>E-mail</b>.</label><br>';
      } elseif(!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
				$msg .= '<label for="mail">Veuillez inscrire un <b>E-mail</b> valide.</label><br>';
			}
      if(empty($_POST['message']) || strlen($_POST['message']) <= 2){
        $msg .= '<label for="message">Veuillez saisir un <b>Message</b>.</label><br>';
      }

      if(empty($msg)){

				$nom = $_POST['nom'];
				$prenom = $_POST['prenom'];
				$societe = $_POST['societe'];
				$tel = $_POST['tel'];
				$mail = $_POST['mail'];
				$message = $_POST['message'];

				$mail_to = "{$emailConfig}, {$mail}";

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

      	mail($mail_to, $objet, $message, $headers);

      	$msg .= "Votre message a bien été envoyé.";

      }

  } else {

    $msg .= "Une erreur est survenue lors de votre demande.<br>";

  }

}
