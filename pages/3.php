<?php
// APPEL DE LA PAGE CONNEXION.PHP
    include 'connexion.php';
// DECLARATION D'UNE VARIABLE bdd POUR RECUPERER LA FONCTION Connexion
    $bdd = Connexion();

// TOUS LES ETATS DONT LA LETTRE COMMENCE PAR N
    $requete_etats = $bdd -> query("SELECT first_name, last_name, country_code FROM information WHERE country_code LIKE 'N%'");
//     echo '<h2>AFFICHAGE DE TOUS LES ETATS DONT LA LETTRE COMMENCE PAR N</h2>';
//     echo '<table>';
//     echo '<tr>';
//     echo '<td>Prénom </td>';
//     echo '<td>Nom </td>';
//     echo '<td>Code pays</td>';
//     echo '</tr>';
//     echo '<br>';
//     while($data = $requete_etats->fetch())
//     {   
//         echo '<table>';
//         echo '<tr>';
//         echo '<td>'.$data['first_name'].'</td>';
//         echo '<td>'.$data['last_name'].'</td>';
//         echo '<td>'.$data['country_code'].'</td>';
//         echo '</tr>';
//     }
//     echo '<br>';
// ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AFFICHAGE DE TOUS LES ETATS DONT LA LETTRE COMMENCE PAR N</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
	<div class="container text-center">
		<!-- AFFICHAGE Age de chaque personne  -->
			<h3>AFFICHAGE DE TOUS LES ETATS DONT LA LETTRE COMMENCE PAR N</h3>
		    <table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">Prenom</th>
						<th scope="col">Nom</th>
						<th scope="col">Code pays</th>
					</tr>
				</thead>
				<tbody>
					<?php
					while($data = $requete_etats->fetch())
					{ ?>
					<tr>
						<td><?= $data['first_name']?></td>
						<td><?= $data['last_name']?></td>
						<td><?= $data['country_code']?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
</div>
</body>
</html>