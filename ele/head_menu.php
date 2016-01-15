</head>
	<body>
		<a href="/">
		<div class="logo">
			<img src="<?= RACINE; ?>Ban1440jpg.jpg" alt="Espace et Style - Spécialisés dans l’agencement d’espace">
			<?php
			if ($menu === 'accueil') {
				echo '<h1 class="signature_acc">Agencement - Décoration - Rénovation</h1>';
			} else {
				echo '<p class="signature">Agencer votre espace, le faire vivre pour révéler votre potentiel...</p>';
			}
			?>
		</div>
		</a>
		<div class="coor">
			<span>
				<a href="mailto:contact@espaceetstyle.fr">contact@espaceetstyle.fr</a> • <a href="tel:0175920943">+331 75 92 09 43</a>
			</span>
		</div>
		<nav class="menu">
			<ul>
				<li<?php if($menu === 'accueil') {echo ' class="ac"';} ?>><a href="<?= RACINE; ?>">Accueil</a></li>
				<li<?php if($menu === 'quisommesnous') {echo ' class="ac"';} ?>><a href="<?= RACINE; ?>qui-sommes-nous/">Qui sommes nous ?</a></li>
				<li<?php if($menu === 'votreprojet') {echo ' class="ac"';} ?>><a href="<?= RACINE; ?>votre-projet/">Votre projet</a></li>
				<li><a <?php if($menu === 'notre-demarche') {echo ' class="ac"';} ?> href="<?= RACINE; ?>notre-demarche/">Notre démarche</a>
					<ul>
						<li<?php if($menu === 'nouveaux-locaux') {echo ' class="ac"';} ?>><a href="<?= RACINE; ?>nouveaux-locaux/">Emménagement dans vos nouveaux locaux</a></li>
						<li<?php if($menu === 'point-de-vente') {echo ' class="ac"';} ?>><a href="<?= RACINE; ?>point-de-vente/">Agrandissement de votre point de vente</a></li>
						<li<?php if($menu === 'charte-graphite') {echo ' class="ac"';} ?>><a href="<?= RACINE; ?>charte-graphite/">Évolution de votre charte graphite</a></li>
						<li<?php if($menu === 'espace-de-vente') {echo ' class="ac"';} ?>><a href="<?= RACINE; ?>espace-de-vente/">Moderniser votre espace de vente</a></li>
					</ul>
				</li>
				<li<?php if($menu === 'nosrealisations') {echo ' class="ac"';} ?>><a href="<?= RACINE; ?>nos-realisations/">Nos réalisations</a></li>
				<li<?php if($menu === 'contact') {echo ' class="ac"';} ?>><a href="<?= RACINE; ?>contact-devis/">Contact</a></li>
			</ul>
		</nav>
		<div class="prin">
