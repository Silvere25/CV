<?php
session_start();
$_SESSION['active_page']="etat_civil.php";
include("includes/com.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include("includes/head.php"); ?>
		<title>CV Silvère Camponovo - état civil</title>
	</head>
	
	<body>
		
		<section class="page">
        <nav>
            <?php include("includes/nav.php"); ?>
		
            <div id="menu_contenu_page">
            <h4 id="contenupage">contenu de la page</h4>
                <p><a href="#etat_civil">Mon état civil</a></p>
                <p><a href="#carte">Où me trouver</a></p>
                <p><a href="#portrait">Liens réseaux pro</a></p>
            </div>
		</nav>
		
		<section class="contenu">
		<header>
		<h1 title="qui suis-je ?">Qui suis-je ?</h1>
			<p class="intro" >Comtois, rends-toi ! Nenni ma foi !
				
			</p>
		</header>
		
		<section class="corps-col">
		<article class="colonne">
		<h2 id="etat_civil">Etat civil</h2>
			<ul>
				<li>marié, 2 enfants de 12 et 8 ans.</li>
				<li>français, né le 18/03/1978 à Meaux(77).</li>
				<li>réside à Vercel Villedieu-le-Camp (25).</li>
				<li>coordonnées :
					<ul>
						<li>silvere.camponovo@me.com</li>
						<li>07 68 01 29 29</li>
					</ul></li>
				<li>titulaire du permis B depuis 1996.</li>
			</ul>
		</article>
		
		<article class="colonne">
		<h2>Où me trouver</h2>
		<figure id="carte">
			<iframe frameborder="0" scrolling="no" marginheight="5" marginwidth="5" width="600" height="400" src="https://maps.google.com/maps?hl=fr&q=2 rue des noyers, Vercel Villedieu-le-Camp&ie=UTF8&t=m&z=9&iwloc=B&output=embed"></iframe>
			<figcaption>Ma chère Comté</figcaption>
		</figure>
		</article>
		</section>
		</section>
		</section>
		
		<?php include("includes/footer.php"); ?>
		
	</body>
</html>