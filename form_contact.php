<?php
session_start();
$_SESSION['active_page']="form_contact.php";
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
		    </nav>
            
		<section class="contenu">
		<header>
            <h1 title="A vous de jouer !">Me contacter</h1>
		</header>
		
		<section class="corps-lig">
		<article class="ligne">
		<h2 id="etat_civil">Votre message</h2>
			<form method="post" action="contact.php" enctype="multipart/form-data">
				<fieldset>
					<legend>Vos coordonnées</legend>
					<p>
					<input type="radio" name="sexe" value="madame" id="madame" /> <label for="madame">Mme</label>
					<input type="radio" name="sexe" value="monsieur" id="monsieur" /> <label for="monsieur">Mr</label>
					</p>
					<p><label for="nom">Votre nom</label></p>
					<input type="text" name="nom" id="nom" size="80" required autofocus />
					<p><label for="prenom">Votre prénom</label></p>
					<input type="text" name="prenom" id="prenom" size="80" required />
					<p><label for="email">Votre adresse e-mail</label></p>
					<input type="email" name="email" id="email" size="80" required />			
				</fieldset>
				
				<fieldset>
					<legend>Votre message</legend>
					<p><label for="objet">Objet</label></p>
					<input type="text" name="objet" id="objet" size="80" required />				
					<p><label for="message">Votre message</label></p>
					<textarea name="contenu_message" id="message" rows="20" cols="80"></textarea>
				</fieldset>
				
				<p id="envoyer"><input type="submit" value="envoyer" class="bouton" title="envoyer votre message"/></p>
				
			</form>
		</article>
		
		</section>
		</section>
		</section>
		<?php include("includes/footer.php"); ?>
	</body>
</html>