<?php

if($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME'] == 'romanczerkies.fr'){

	// Racine site
	define('RACINE', '/espaceetstyle/');

	//Connexion PDO
  if($_SERVER['SERVER_NAME'] == 'localhost'){

    //PDO LOCAL

  } else {

    // PDO Serveur dev

  }

} else {

	// Racine site
	define('RACINE', '/');

	// Connexion PDO

}
