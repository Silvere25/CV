<?php
session_start();
$_SESSION['active_page']="expe_info.php";
include("includes/com.php");
?>
<!DOCTYPE html>
<html>
	<head>
        <?php include("includes/head.php"); ?>
		<title>Mes expériences AMOA</title>
	</head>

	<body>
        <section class="page">
            <nav>
                <?php include("includes/nav.php"); ?>
		    </nav>
            
        <section class="contenu">
		<header>
            <h1 title="A vous de jouer !">Mes expériences AMOA</h1>
                <p class="center">MOA outils mobiles, DB Admin, formateur, assistance utilisateur, expert référent métier,...</p>
                <p class="intro">Au coeur des solutions informatiques depuis 15 ans !</p>
		</header>
			
        <section class="corps-col">
        <article class="colonne">
        <h2>Page en cours de construction</h2>
            <p>La dure vie d'étudiant me m'a pas encore laissée le temps de vous faire partager ces projets.</p>
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