<?php

// Scan du repertoire
$listeRealisations = scandir('../nos-realisations/');

// Création du tableau avec uniquement les fichiers en .php
$listePHP = [];
foreach ($listeRealisations as $key => $value) if(strpos($value, '.php')) $listePHP[] = $value;

// On cherche la position de notre fichier actuel
$currentRealisation = array_search(substr(strrchr($_SERVER["REQUEST_URI"], '/'), 1), $listePHP);

// Stockage du nombre de valeur dans le tableau
$nbValues = count($listePHP)-1;

$precedent = ($currentRealisation-1 < 0) ? $listePHP[$nbValues] : $listePHP[$currentRealisation-1];
$suivant = ($currentRealisation+1 > $nbValues) ? $listePHP[0] : $listePHP[$currentRealisation+1];
$nomSeul = substr(strrchr($_SERVER["REQUEST_URI"], '/'), 1, -4);

// include du template
include 'template/template_realisation.php';
