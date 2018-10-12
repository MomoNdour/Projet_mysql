<?php
// APPEL DE LA PAGE CONNEXION.PHP
    include 'connexion.php';
// DECLARATION D'UNE VARIABLE bdd POUR RECUPERER LA FONCTION Connexion
    $bdd = Connexion();

// TOUS LES EMAILS QUI CONTIENNENT GOOGLE
    $requete_email = $bdd -> query("SELECT * FROM information WHERE avatar_url LIKE '%google%'");
    // echo '<h2>AFFICHAGE DE TOUS LES EMAILS QUI CONTIENNENT GOOGLE</h2>';
    //         echo '<table width="100%">';
    //         echo '<tr>';
    //         echo '<td>Prénom :</td>';
    //         echo '<td>Nom :</td>';
    //         echo '<td>Email :</td>';
    //         echo '<td>Sexe :</td>';
    //         echo '<td>Adresse IP :</td>';
    //         echo '<td>Date de naissance :</td>';
    //         echo '<td>Code pays :</td>';
    //         echo '<td>URL :</td>';
    //         echo '</tr>';
    //         echo '<br>';
    //     while($data = $requete_email->fetch())
    //     {   
    //         echo '<table width="100%">';
    //         echo '<tr>';
    //         echo '<td>'.$data['first_name'].'</td>';
    //         echo '<td>'.$data['last_name'].'</td>';
    //         echo '<td>'.$data['email'].'</td>';
    //         echo '<td>'.$data['gender'].'</td>';
    //         echo '<td>'.$data['ip_address'].'</td>';
    //         echo '<td>'.$data['birth_date'].'</td>';
    //         echo '<td>'.$data['country_code'].'</td>';
    //         echo '<td>'.$data['avatar_url'].'</td>';
    //         echo '</tr>';
    //     }
    //     echo '<br>';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AFFICHAGE DE TOUS LES EMAILS QUI CONTIENNENT GOOGLE</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
	<div class="container text-center">
		<!-- AFFICHAGE DE TOUTE LES FEMMES -->
			<h3>AFFICHAGE DE TOUS LES EMAILS QUI CONTIENNENT GOOGLE</h3>
		    <table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">Prenom</th>
						<th scope="col">Nom</th>
                        <th scope="col">Email</th>
                        <th scope="col">Sexe</th>
                        <th scope="col">Adresse IP</th>
                        <th scope="col">Date d'anniversaire</th>
                        <th scope="col">Code pays</th>
                        <th scope="col">URL</th>
					</tr>
				</thead>
				<tbody>
					<?php
					while($data = $requete_email->fetch())
					{ ?>
					<tr>
						<td><?= $data['first_name']?></td>
						<td><?= $data['last_name']?></td>
                        <td><?= $data['email']?></td>
                        <td><?= $data['gender']?></td>
                        <td><?= $data['ip_address']?></td>
                        <td><?= $data['birth_date']?></td>
                        <td><?= $data['country_code']?></td>
                        <td><?= $data['avatar_url']?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
</div>
</body>
</html>