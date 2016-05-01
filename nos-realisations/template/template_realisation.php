<?php

// Création du tableau avec uniquement les fichiers du repertoire en .php
$listePHP = [];
foreach (scandir('../nos-realisations/') as $key => $value) if(strpos($value, '.php')) $listePHP[] = $value;

// On cherche la position de notre fichier actuel
$currentRealisation = array_search(substr(strrchr($_SERVER["REQUEST_URI"], '/'), 1), $listePHP);

// Stockage du nombre de valeur dans le tableau
$nbValues = count($listePHP)-1;

$precedent = ($currentRealisation-1 < 0) ? $listePHP[$nbValues] : $listePHP[$currentRealisation-1];
$suivant = ($currentRealisation+1 > $nbValues) ? $listePHP[0] : $listePHP[$currentRealisation+1];
$nomSeul = substr(strrchr($_SERVER["REQUEST_URI"], '/'), 1, -4);

include '../ele/doc.php';
$menu = 'nosrealisations';

?>
<title>Espace et Style - Nos réalisations - <?= $nomRealisation; ?></title>
<meta name="description" content="Nos réalisations : Spécialisés dans l’agencement d’espace, nous sommes à votre disposition pour étudier tout projet de rénovation, décoration ou agencement.">
<?php include('../ele/head_menu.php'); ?>
    <div class="rea">
      <div class="rea_img">
        <img class="rea_img_dim" src="img/<?= $nomSeul; ?>.jpg" alt="Rénovation de magasin - Décoration de boutique - <?= $nomRealisation; ?> - Espace et Style">
      <a href="<?= $precedent; ?>">
        <div class="flech_g">
          <img src="flech_g.png"<?php if($nomSeul == 'franchise-nicotech') echo ' style="margin:50% 0;"'; ?>>
        </div>
      </a>
      <a href="<?= $suivant; ?>">
        <div class="flech_d">
          <img src="flech_d.png"<?php if($nomSeul == 'franchise-nicotech') echo ' style="margin:50% 0;"'; ?>>
        </div>
      </a>
    </div>
    <div class="rea_descriptions">
      <div>
        <h2><?= $nomRealisation; ?></h2>
        <p><?= $descriptionRealisation; ?></p>
      </div>
    </div>
  </div>
<?php include('../ele/foo.php'); ?>
