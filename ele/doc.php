<?php

// Racine site
if($_SERVER['SERVER_NAME'] == 'localhost'){
	define('RACINE', '/espaceetstyle/');
} else {
	define('RACINE', '/');
}

//Connexion SQL
?>
<!DOCTYPE html>
	<html lang="fr">
		<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="<?= RACINE; ?>style3.css">
