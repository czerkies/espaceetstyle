</head>
	<body>
		<div class="logo">
			<a href="<?= RACINE; ?>">
				<div class="logo_wait">
					<img src="<?= RACINE; ?>Ban1440jpg.jpg" alt="Espace et Style - Spécialisés dans l’agencement d’espace">
				</div>
				<?php
				if(isset($menu) && $menu === 'accueil') {
					echo '<p class="signature_acc">Agencement - Décoration - Rénovation</p>';
				} else {
					echo '<p class="signature">Agencer votre espace, le faire vivre pour révéler votre potentiel...</p>';
				}
				?>
			</a>
		</div>
		<div class="coor">
			<div class="coor_align">
				<a href="mailto:contact@espaceetstyle.fr">contact@espaceetstyle.fr</a>
				<a href="tel:0175920943">+331 75 92 09 43</a>
			</div>
		</div>
		<nav class="menu">
			<ul>
				<li<?php if(isset($menu) && $menu === 'accueil') echo ' class="ac"'; ?>><a href="<?= RACINE; ?>">Accueil</a></li>
				<li<?php if(isset($menu) && $menu === 'quisommesnous') echo ' class="ac"'; ?>><a href="<?= RACINE; ?>qui-sommes-nous/">Qui sommes nous ?</a></li>
				<li><a <?php if(isset($menu) && $menu === 'votreprojet') echo ' class="ac"'; ?> href="<?= RACINE; ?>votre-projet/">Votre projet</a>
				<ul>
					<li><a <?php if(isset($s_menu) && $s_menu === 'nouveaux-locaux') echo ' class="ac"'; ?> href="<?= RACINE; ?>votre-projet/nouveaux-locaux/">Emménagement dans vos nouveaux locaux</a></li>
					<li><a <?php if(isset($s_menu) && $s_menu === 'point-de-vente') echo ' class="ac"'; ?> href="<?= RACINE; ?>votre-projet/point-de-vente/">Agrandissement de votre point de vente</a></li>
					<li><a <?php if(isset($s_menu) && $s_menu === 'charte-graphite') echo ' class="ac"'; ?> href="<?= RACINE; ?>votre-projet/charte-graphite/">Évolution de votre charte graphite</a></li>
					<li><a <?php if(isset($s_menu) && $s_menu === 'espace-de-vente') echo ' class="ac"'; ?> href="<?= RACINE; ?>votre-projet/espace-de-vente/">Moderniser votre espace de vente</a></li>
				</ul>
				</li>
				<li<?php if(isset($menu) && $menu === 'notre-demarche') echo ' class="ac"'; ?>><a href="<?= RACINE; ?>notre-demarche/">Notre démarche</a></li>
				<li<?php if(isset($menu) && $menu === 'nosrealisations') echo ' class="ac"'; ?>><a href="<?= RACINE; ?>nos-realisations/jegado.php">Nos réalisations</a></li>
				<li<?php if(isset($menu) && $menu === 'contact') echo ' class="ac"'; ?>><a href="<?= RACINE; ?>contact-devis/">Contact</a></li>
				<li<?php if(isset($menu) && $menu === 'faq') echo ' class="ac"'; ?>><a href="<?= RACINE; ?>faq/">FAQ</a></li>
			</ul>
		</nav>
		<div class="prin">
