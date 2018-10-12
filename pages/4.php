<?php
// APPEL DE LA PAGE CONNEXION.PHP
    include 'pages/connexion.php';
// DECLARATION D'UNE VARIABLE bdd POUR RECUPERER LA FONCTION Connexion
    $bdd = Connexion();

// TOUS LES EMAILS QUI CONTIENNENT GOOGLE
    $requete_email = $bdd -> query("SELECT * FROM information WHERE avatar_url LIKE '%google%'");
    echo '<h2>AFFICHAGE DE TOUS LES EMAILS QUI CONTIENNENT GOOGLE</h2>';
            echo '<table width="100%">';
            echo '<tr>';
            echo '<td>Prénom :</td>';
            echo '<td>Nom :</td>';
            echo '<td>Email :</td>';
            echo '<td>Sexe :</td>';
            echo '<td>Adresse IP :</td>';
            echo '<td>Date de naissance :</td>';
            echo '<td>Code pays :</td>';
            echo '<td>URL :</td>';
            echo '</tr>';
            echo '<br>';
        while($data = $requete_email->fetch())
        {   
            echo '<table width="100%">';
            echo '<tr>';
            echo '<td>'.$data['first_name'].'</td>';
            echo '<td>'.$data['last_name'].'</td>';
            echo '<td>'.$data['email'].'</td>';
            echo '<td>'.$data['gender'].'</td>';
            echo '<td>'.$data['ip_address'].'</td>';
            echo '<td>'.$data['birth_date'].'</td>';
            echo '<td>'.$data['country_code'].'</td>';
            echo '<td>'.$data['avatar_url'].'</td>';
            echo '</tr>';
        }
        echo '<br>';
?>