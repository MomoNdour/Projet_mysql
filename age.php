<?php
// APPEL DE LA PAGE CONNEXION.PHP
include 'connexion.php';
// DECLARATION D'UNE VARIABLE bdd POUR RECUPERER LA FONCTION Connexion
    $bdd = Connexion();
// Age de chaque personne 
$requete_age = $bdd->query("SELECT first_name, last_name, DATEDIFF(CURRENT_DATE, birth_date)/365 as age from information");
while($data = $requete_age->fetch())
{
    echo '<p>'.$data['first_name'].'&nbsp'.$data['last_name'].':&nbspAge '.intval($data['age']).'</p><br>';
}
?>