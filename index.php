<?php
session_start();
$_SESSION['active_page']="index.php";
include("includes/com.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include("includes/head.php"); ?>
		<title>CV Silvère Camponovo</title>
	</head>

	<body>
		<section class="page">
        <nav>    
            <?php include("includes/nav.php"); ?>
		
            <div id="menu_contenu_page">
            <h4 id="contenupage">contenu de la page</h4>
                <p><a href="#competences">Compétences</a></p>
                <p><a href="#experience">Expériences</a></p>
                <p><a href="#formation">Formations</a></p>
                <p><a href="#centreinteret">Centres d'intérêts</a></p>
                <p><a href="#portrait">Liens réseaux pro</a></p>
            </div>
		</nav>
		
		<section class="contenu">
		<header>
		<h1>Consultant AMOA<br />
		Chef de Projet Informatique</h1>
			<p title="une ambition" class="intro">Mon ambition : être un facilitateur pour énergiser vos équipes et booster de vos projets !</p>
				<ul>
					<li><a href="#experience">15 ans d'expériences</a>,</li>
					<li>un bagage d'<a href="#formation">ingénieur</a>,</li>
					<li>un profil <a href="#competences">couteaux-suisse</a>.</li>
				</ul>
			<p class="center">Je me lance en 2016 dans une mutation, une transition des métiers de l'industrie vers ceux du numérique.</p>
		</header>
		
		<section class="corps-col">	
		<article class="colonne">
		<h2 id="competences" title="des moyens">Compétences</h2>
			<h3>Technique</h3>
				<ul>
					<li>Ingénierie de l’environnement</li>
					<li>Hydraulique urbaine</li>
					<li>Modélisation mathématique</li>
					<li>Métrologie</li>
					<li>Pilotage process industriel</li>
				</ul>

			<h3>Informatique</h3>
				<ul>
					<li><em>Langages</em> C, C++, Java, PHP, Ruby, Javascript</li>
					<li><em>Frameworks</em> J2EE, Symfony, Rails, MEAN</li>
					<li><em>Bases de données</em> MySQL, Oracle, MongoDB, RDF, GraphDB</li>
					<li><em>Intégration et développement web</em> HTML5, CSS3, Bootstrap, JQuery</li>
				</ul>

			<h3>Commercial</h3>
				<ul>
					<li>Pilotage de centre de profit</li>
					<li>Gestion contractuelle en environnement industriel</li>
					<li>Marchés publics et délégations de services publics</li>
					<li>Etudes de marché</li>
				</ul>

			<h3>Management</h3>
				<ul>
					<li>Gestion d'équipes pluridisciplinaires</li>
					<li>Accompagnement du changement</li>
					<li>Formation</li>
					<li>Méthodes et bonnes pratiques</li>
					<li>Gestion de projet</li>
				</ul>
		</article>
		
		<article class="colonne">
		<h2 id="experience" title="du vécu"><a href="experiences.php">Expériences</a></h2>
			<p class="focus_info"><a href="expe_info.php" title="focus sur mes expériences autour des projets informatiques - page en cours de création"  class="disabled">Focus bagage informatique et AMOA</a></p>
		
			<h3><a href="experiences.php#rc">Responsable Relation Clients</a></h3>
				<p>Jura Filtration, Pontarlier (25) - Juillet 2014 à Décembre 2015</p>
		
			<h3><a href="experiences.php#mp">Responsable Service Méthodes et Planification</a></h3>
				<p>Veolia Eau, Centre Alsace Franche-Comté, Voujeaucourt (25) - Juillet 2012 à Juillet 2014</p>
			
			<h3><a href="experiences.php#sae">Responsable Aide à l'Exploitation</a></h3>
				<p>Veolia Eau, Centre Alsace Franche-Comté, Voujeaucourt (25) - Janvier 2012 à Juillet 2014</p>
			
			<h3><a href="experiences.php#ass">Responsable Réseaux Assainissement</a></h3>
				<p>Veolia Eau, Agence Pays de Montbéliard, Voujeaucourt (25) - Janvier 2008 à Décembre 2011</p>
			
			<h3><a href="experiences.php#er">Responsable Etudes et Réalisations</a></h3>
				<p>Veolia Eau, Agence Pays de Montbéliard, Voujeaucourt (25) - Janvier 2006 à Décembre 2011</p>
			
			<h3><a href="experiences.php#inge">Ingénieur Méthodes</a></h3>
				<p>Veolia Water, Direction Technique, Paris (75) - Octobre 2001 à Décembre 2005</p>
		</article>
		</section>
		
		<section class="corps-lig">
		<article class="ligne">	
		<h2 id="formation" title="des moyens">Formations</h2>
			<h3>Développeur Web</h3>
				<p>Certifié en 2016 par la <a href="http://www.coding-academy.fr/">Coding Academy</a> by <strong>EPITECH</strong> au Kremlin-Bicêtre (94).</p>
			
			<h3>Ingénieur en Génie Industriel de l'Environnement</h3>
				<p><a href="docs/EME.pdf" title="diplôme EME">Diplômé</a> en 2001 par l’Ecole des Métiers de l’Environnement à Rennes (35).</p>
				
			<h3>Certification TOEIC Listening and Reading</h3>
				<p><a href="docs/TOEIC.pdf" title="certificat TOEIC">Diplômé</a> en 2001 avec 795pts/1000. Niveau actuel testé en 2015 par Wall Street English : Intermediate 2.</p>
			
			<h3>Baccalauréat Série S - option Mathématiques</h3>
				<p><a href="docs/bac.pdf" title="diplôme BAC">Diplômé</a> en 1995 avec la mention bien par l’académie de Créteil (94).</p>	
			
			<h3>Sauveteur Secouriste du Travail</h3>
				<p>Depuis 2008, en cours de validité et renouvelé 2015.
		</article>
		
		<article class="ligne">
		<h2 id="centreinteret" title="et de la passion">Centres d'intérêts</h2>
			<ul>
				<li><em>sport</em> : course à pied sur route comme dans la nature et VTT.</li>
				<li><em>nature</em> : randonnées, photos.</li>
				<li><em>sciences</em> : veille sur les recherches et découvertes scientifiques, intérêt du moment pour la neurologie et les sciences cognitives.</li>
				<li><em>nouvelles technologies</em> : passion pour les mesures, les capteurs et pour les objets et services qui en découlent.</li>
			</ul>
		</article>
		</section>
		</section>
		</section>
		
		<?php include("includes/footer.php"); ?>
		
	</body>
</html>