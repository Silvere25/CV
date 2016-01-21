<?php
session_start();
$_SESSION['active_page']="spots.php";
include("includes/com.php");
?>
<!DOCTYPE html>
<html>
	<head>
        <?php include("includes/head.php"); ?>
		<title>Mes spots</title>
	</head>

	<body>
        <section class="page">
            <nav>
                <?php include("includes/nav.php"); ?>
		    </nav>
            
        <section class="contenu">
		<header>
            <h1 title="A vous de jouer !">Mes meilleurs spots</h1>
                <p class="intro">de balades, randos, trails, VTT,...</p>
                <p class="center">en Franche-Comté bien-sûr !</p>
		</header>
			
        <section class="corps-col">
        <article class="colonne">
        <h2>Page en cours de construction</h2>
            <p>La dure vie d'étudiant me m'a pas encore laissée le temps de vous faire partager tous ces supers tracés.</p>
        </article>
        
        <article class="colonne">
            <h2> </h2>
            <p style="text-align:center">Revenir à l'accueil</p>
            <form method="POST" action="index.php" style="text-align:center">
                <button type="submit"><p>retour</p></button>
            </form>
        </article>
        
        </section>
        </section>
        </section>
        <?php include("includes/footer.php"); ?>
    </body>
</html>