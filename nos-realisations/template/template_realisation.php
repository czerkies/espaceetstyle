<?php
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
