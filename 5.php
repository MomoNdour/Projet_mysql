<?php
// APPEL DE LA PAGE CONNEXION.PHP
include 'connexion.php';
// DECLARATION D'UNE VARIABLE bdd POUR RECUPERER LA FONCTION Connexion
    $bdd = Connexion();
// REPARTITION PAR ETAT ET LE NOMBRE D'ENREGISTREMENT PAR ETAT (CROISSANT)
    $requete_repartition = $bdd -> query("SELECT country_code, COUNT(*) as nbr FROM information GROUP BY country_code ORDER BY nbr asc");
    echo '<h2>REPARTITION PAR ETAT ET LE NOMBRE D\'ENREGISTREMENT PAR ETAT PAR ORDRE CROISSANT</h2>';
    while($data = $requete_repartition->fetch())
    {
        echo '<p>'.$data['country_code'].'&nbsp&nbsp nombre >>>'.$data['nbr'].'</p><br>';
    }
?>
