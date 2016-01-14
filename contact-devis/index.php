<?php 
$menu = 'contact';
include('../ele/doc.php');
?>
		<title>Prix agencement magasin | Contact et Devis Espace et Style</title>
		<meta name="description" content="Contacter Espace et Style pour toutes demandes de renseignements ou devis.">
	<?php include('../ele/head_menu.php'); ?>
			<div class="formu car">
				<form method="post" action="mail_task.php">
					<input type="text" name="nom" placeholder="Nom" title="Nom" required>
					<input type="text" name="prenom" placeholder="Prénom" title="Prénom" required>
					<input type="text" name="societe" placeholder="Société" title="Société">
					<input type="tel" name="tel" placeholder="Téléphone" title="Téléphone">
					<input type="email" name="mail" placeholder="Mail" title="Mail" required>
					<textarea type="text" name="message" placeholder="Descriptif de vos besoins" title="Descriptif de vos besoins" required></textarea>
					<input type="submit" value="Envoyer">
				</form>
				<img src="bureau.jpg" alt="Espace et Style - Contact Bureau">
			</div>
			<div class="bloc_0 contact">
				<a href="tel:0175920943">
					<div class="bloc_1">
						<img class="icon_contact" src="tel.jpg">
						<p>01 75 92 09 43</p>
					</div>
				</a>
				<a href="mailto:contact@espaceetstyle.fr">
					<div class="bloc_1">
						<img class="icon_contact" src="mail.jpg">
						<p>contact@espaceetstyle.fr</p>
					</div>
				</a>
				<a target="_blank" href="https://www.google.fr/maps/place/36+Rue+du+Faubourg+Valmorin,+28210+Nogent-le-Roi/@48.6511556,1.5253007,440m/data=!3m1!1e3!4m2!3m1!1s0x47e40314802bed59:0x1deca07c1ed51afc!6m1!1e1">
					<div class="bloc_1">
						<img class="icon_contact" src="adress.jpg">
						<p>Siège Social<br>36 rue du faubourg Valmorin<br>28 210 NOGENT LE ROI</p>
					</div>
				</a>
			</div>
		<?php include('../ele/foo.php'); ?>