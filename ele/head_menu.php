</head>
	<body>
		<a href="/">
		<div class="logo">
			<img src="/Ban1440jpg.jpg" alt="Espace et Style - Spécialisés dans l’agencement d’espace">
			<?php
			if ($menu === 'accueil') {
				echo '<p class="signature_acc">Agencement - Décoration - Rénovation</p>';
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
				<li<?php if($menu === 'accueil') {echo ' class="ac"';} ?>><a href="/">Accueil</a></li>
				<li<?php if($menu === 'quisommesnous') {echo ' class="ac"';} ?>><a href="/qui-sommes-nous/">Qui sommes nous ?</a></li>
				<li><a <?php if($menu === 'votreprojet') {echo ' class="ac"';} ?> href="#">Votre projet</a>
				<ul>
					<li><a <?php if($s_menu === 'nouveaux-locaux') {echo ' class="ac"';} ?> href="/votre-projet/nouveaux-locaux/">Emménagement dans vos nouveaux locaux</a></li>
					<li><a <?php if($s_menu === 'point-de-vente') {echo ' class="ac"';} ?> href="/votre-projet/point-de-vente/">Agrandissement de votre point de vente</a></li>
					<li><a <?php if($s_menu === 'charte-graphite') {echo ' class="ac"';} ?> href="/votre-projet/charte-graphite/">Évolution de votre charte graphite</a></li>
					<li><a <?php if($s_menu === 'espace-de-vente') {echo ' class="ac"';} ?> href="/votre-projet/espace-de-vente/">Moderniser votre espace de vente</a></li>
					<li><a <?php if($s_menu === 'agencement-de-magasin') {echo ' class="ac"';} ?> href="/votre-projet/agencement-de-magasin/">Agencement de magasin</a></li>
					<li><a <?php if($s_menu === 'renovation-de-magasin') {echo ' class="ac"';} ?> href="/votre-projet/renovation-de-magasin/">Rénovation de magasin</a></li>
				</ul>
				</li>
				<li<?php if($menu === 'notre-demarche') {echo ' class="ac"';} ?>><a href="/notre-demarche/">Notre démarche</a></li>
				<li<?php if($menu === 'nosrealisations') {echo ' class="ac"';} ?>><a href="/nos-realisations/">Nos réalisations</a></li>
				<li<?php if($menu === 'contact') {echo ' class="ac"';} ?>><a href="/contact-devis/">Contact</a></li>
			</ul>
		</nav>
		<div class="prin">
