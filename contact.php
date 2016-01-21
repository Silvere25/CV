<?php
session_start();
$_SESSION['active_page']="contact.php";
include("includes/com.php");
?>
<!DOCTYPE html>
<html>
	<head>
        <?php include("includes/head.php"); ?>
		<title>Accusé Réception</title>
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
			
        <section class="corps-col">
        <article class="colonne">
        <h2>Votre accusé réception</h2>
        <p>
            <?php
            if (isset($_POST['sexe']) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['prenom']))
            {
                $coord_valid=true;
                $headers = 'From: ' . htmlspecialchars($_POST['email']);
                $message = 'Message de '. $_POST['sexe'] . ' ' . htmlspecialchars($_POST['prenom']) . ' ' . htmlspecialchars($_POST['nom']) . "\n";
                $message .= 'Envoyé le ' . date('d/m/Y') . ' à ' . date('H:i:s') . "\n\n";
            }
            else
            {
                $coord_valid=false;
                echo 'Vous avez omis de remplir un champ de vos coordonnées.<br/>';
            }    
            
            if (isset($_POST['objet']) && isset($_POST['contenu_message']))
            {
                $message_valid=true;
                $objet = htmlspecialchars($_POST['objet']);
                $message .= htmlspecialchars($_POST['contenu_message']) . "\n\n";
            }
            else
            {
                $message_valid=false;
                echo 'Vous avez omis de remplir des éléments de votre message.<br/>';
            }        
                
            if ($coord_valid && $message_valid)
            {
                $to = 'silvere.camponovo@me.com';
                $rapport = 'Votre demande a bien été transmise.<br/>';
                mail($to, $objet, $message, $headers);
                echo $rapport;
            }
            else
            {
                echo 'Votre demande de contact n\'a pas été transmise.<br/>Merci de corriger les éléments avant renvoi.<br/>';    
            }
            ?>
        </p>
        </article>
        
        <article class="colonne">
            <h2> </h2>
            <p style="text-align:center">Revenir au formulaire :</p>
            <form method="POST" action="form_contact.php" style="text-align:center">
                <button type="submit"><p>retour</p></button>
            </form>
        </article>
        
        </section>
        </section>
        </section>
        <?php include("includes/footer.php"); ?>
    </body>
</html>