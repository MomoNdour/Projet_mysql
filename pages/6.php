<?php
// APPEL DE LA PAGE CONNEXION.PHP
include 'pages/connexion.php';
// DECLARATION D'UNE VARIABLE bdd POUR RECUPERER LA FONCTION Connexion
    $bdd = Connexion();
// NOMBRE DE FEMMES ET D'HOMMES
    $requete_Male = $bdd -> query("SELECT COUNT(*) FROM information WHERE gender='Male'");
    $requete_Female = $bdd -> query("SELECT  COUNT(*) FROM information WHERE gender='Female'");
    echo '<h2>NOMBRE DE FEMMES ET D\'HOMMES</h2>';
    while($data_Male = $requete_Male->fetch())
    {
        echo '<p> Le nombre d\'hommes est de: '.$data_Male['COUNT(*)'].'</p>';
    }

    while($data_Female = $requete_Female->fetch())
    {
        echo '<p> Le nombre de femmes est de: '.$data_Female['COUNT(*)'].'</p>';
    }
?>