<?php
// APPEL DE LA PAGE CONNEXION.PHP
    include 'pages/connexion.php';
// DECLARATION D'UNE VARIABLE bdd POUR RECUPERER LA FONCTION Connexion
    $bdd = Connexion();

// TOUS LES ETATS DONT LA LETTRE COMMENCE PAR N
    $requete_etats = $bdd -> query("SELECT first_name, last_name, country_code FROM information WHERE country_code LIKE 'N%'");
    echo '<h2>AFFICHAGE DE TOUS LES ETATS DONT LA LETTRE COMMENCE PAR N</h2>';
    echo '<table>';
    echo '<tr>';
    echo '<td>Prénom </td>';
    echo '<td>Nom </td>';
    echo '<td>Code pays</td>';
    echo '</tr>';
    echo '<br>';
    while($data = $requete_etats->fetch())
    {   
        echo '<table>';
        echo '<tr>';
        echo '<td>'.$data['first_name'].'</td>';
        echo '<td>'.$data['last_name'].'</td>';
        echo '<td>'.$data['country_code'].'</td>';
        echo '</tr>';
    }
    echo '<br>';
?>