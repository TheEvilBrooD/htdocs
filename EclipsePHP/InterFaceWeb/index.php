<!DOCTYPE html>
<html>
    <head>
<?php require("Style/Style-css.php"); ?>

        <title>Accueil : Portail de Dylan</title>
        <link rel="icon" type="image/png" href="favicon.png" />
        <meta charset="utf-8" />
        


    </head>
    <body>
    <div id="Wrapper">
<?php include("PannelInconnu.php"); ?>
<?php include("Entete.php"); ?>

    <script type="text/javascript" src="Fonction.js"></script>
<?php

    echo "Salut gamin ! Bienvenue sur mon site !<br />";
    $autorisation_entrer = "Shlag";
	echo "Avez-vous l'autorisation d'entrer ? La réponse est : $autorisation_entrer";
?>


    <div id="Annonce">
        <h1>Mon super site</h1>
        
        <p>Bienvenue sur mon super Acceuil Wohooo !<br />
            En fait c'est un entrainement, je developpe des trucs en PHP / HTML / CSS / JS</p>
    </div>

        <h2>Page de test / Avancement</h2>
        
        <p>Voici quelques petits tests :</p>
        <ul class="Progres">
        <li ><a href="TestsBDD.php">Base de donnée : FAIT</a></li>
        <li ><a href="Inscription.php">Mise en place d'un système de log : FAIT</a></li>
        <li >Acces au ftp</li>
        <li ><a href="Musique.php">Lecteur de musique : FAIT (Dédicasse a Larousse)</a></li>
        <li >Liens pratiques</li>
        <li ><a href="Proposition.php">Système de boite a idées : FAIT</a></li>
        <li >Lecteur vidéo</li>
        <li >Système de points réservé aux membres</li>
        <li >Mise en place</li>
        <li >Mise en place</li>
        <li >Mise en place</li>
        <li >Mise en place</li>
        <li >Mise en place</li>
        <li >Mise en place</li>
        <li >Mise en place</li>
        <li >Mise en place</li>
        <li >Mise en place</li>

        </ul>
        
        <?php include("Menu.php"); ?>


<?php


$ip = $_SERVER["REMOTE_ADDR"];
//echo "Votre adresse IP est $ip"; 


?>

        <p class="IP">Votre adresse IP est : <?php echo $ip; ?> </p>


<?php include("Pied_De_Page.php"); ?>
</div>
    </body>
</html>