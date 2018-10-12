<?php
// APPEL DE LA PAGE CONNEXION.PHP
include 'pages/connexion.php';
// DECLARATION D'UNE VARIABLE bdd POUR RECUPERER LA FONCTION Connexion
    $bdd = Connexion();
// AFFICHAGE DU NOM DE CHAQUE APPRENANT AVEC SON DEPARTEMENT DE RESIDENCE
$requete_join = $bdd->query("SELECT * from membre_acs INNER JOIN departement ON (num_departement=numero_departement)");

echo '<h3>LISTE DES APPRENANTS DE ACCESS CODE SCHOOL DAKAR</h3><br>';
while($data = $requete_join->fetch())
{
    echo '<p>'.$data['id_membre'].'&nbsp'.$data['Prenom'].'&nbsp'.$data['Nom'].'&nbsp'.'&nbsp'.$data['Nom_departement'].'</p><br>';
}
$requete_join->closeCursor();
?>