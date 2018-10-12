<?php
// APPEL DE LA PAGE CONNEXION.PHP
include ('connexion.php');
// DECLARATION D'UNE VARIABLE bdd POUR RECUPERER LA FONCTION Connexion
    $bdd = Connexion();
// Age de chaque personne 
$requete_age = $bdd->query("SELECT first_name, last_name, DATEDIFF(CURRENT_DATE, birth_date)/365 as age from information");
// while($data = $requete_age->fetch())
// {
//     echo '<p>'.$data['first_name'].'&nbsp'.$data['last_name'].':&nbspAge '.intval($data['age']).'</p><br>';
// }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>L'age de chaque personne</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
	<div class="container text-center">
		<!-- AFFICHAGE Age de chaque personne  -->
			<h3>Age de chaque personne </h3>
		    <table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">Prenom</th>
						<th scope="col">Nom</th>
						<th scope="col">Age</th>
					</tr>
				</thead>
				<tbody>
					<?php
					while($data = $requete_age->fetch())
					{ ?>
					<tr>
						<td><?= $data['first_name']?></td>
						<td><?= $data['last_name']?></td>
						<td><?= $data['age']?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
</div>
</body>
</html>