<?php
$menu = 'votreprojet';
include('../ele/doc.php');
?>
<title>Agencer sa boutique - Décorer son magasin | Espace et Style</title>
<meta name="description" content="Étude de faisabilité de votre projet, sa conception et les travaux clés en mains.">
<?php include('../ele/head_menu.php'); ?>
<div class="votreprojet">
	<div class="img_votreprojet">
		<img src="boutique_chaussure.jpg" alt="Espace et Style - Projet">
	</div>
	<div class="menu_votreprojet">
		<h2>Votre projet</h2>
		<ul>
			<li><a href="<?= RACINE; ?>votre-projet/nouveaux-locaux/">Emménagement dans vos nouveaux locaux</a></li>
			<li><a href="<?= RACINE; ?>votre-projet/point-de-vente/">Agrandissement de votre point de vente</a></li>
			<li><a href="<?= RACINE; ?>votre-projet/charte-graphite/">Évolution de votre charte graphite</a></li>
			<li><a href="<?= RACINE; ?>votre-projet/espace-de-vente/">Moderniser votre espace de vente</a></li>
		</ul>
	</div>
</div>
<?php include('../ele/foo.php'); ?>
