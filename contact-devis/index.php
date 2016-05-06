<?php
$menu = 'contact';
include('../ele/doc.php');
?>
		<title>Prix agencement magasin | Contact et Devis Espace et Style</title>
		<meta name="description" content="Contacter Espace et Style pour toutes demandes de renseignements ou devis.">
	<?php include('../ele/head_menu.php'); ?>
			<div class="formu car">
				<form method="post" action="">
					<label class="hidden_label" for="nom">Nom</label>
					<input type="text" name="nom" id="nom" placeholder="Nom" title="Nom" value="<?php if(isset($_POST['nom'])) echo $_POST['nom']; ?>" required>
					<label class="hidden_label" for="prenom">Prénom</label>
					<input type="text" name="prenom" id="prenom" placeholder="Prénom" title="Prénom" value="<?php if(isset($_POST['prenom'])) echo $_POST['prenom']; ?>">
					<label class="hidden_label" for="societe">Société</label>
					<input type="text" name="societe" id="societe" placeholder="Société" title="Société" value="<?php if(isset($_POST['societe'])) echo $_POST['societe']; ?>">
					<label class="hidden_label" for="tel">Téléphone</label>
					<input type="tel" name="tel" id="tel" placeholder="Téléphone" title="Téléphone" value="<?php if(isset($_POST['tel'])) echo $_POST['tel']; ?>">
					<label class="hidden_label" for="mail">Mail</label>
					<input type="email" name="mail" id="mail" placeholder="Mail" title="Mail" required value="<?php if(isset($_POST['mail'])) echo $_POST['mail']; ?>">
					<label class="hidden_label" for="message">Message</label>
					<textarea type="text" name="message" id="message" placeholder="Descriptif de vos besoins" title="Descriptif de vos besoins" required><?php if(isset($_POST['message'])) echo $_POST['message']; ?></textarea>
					<input class="rbt" type="text" name="rbt" value="<?php if(isset($_POST['rbt'])) echo $_POST['rbt']; ?>">
					<input type="submit" name="contact" value="Envoyer">
					<?php if(isset($msg)){
						echo '<div>'.$msg.'</div>';
					} ?>
					<div class="clear"></div>
				</form>
				<img class="background_contact" src="bureau.jpg" alt="Espace et Style - Contact Bureau">
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
