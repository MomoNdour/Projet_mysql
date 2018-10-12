<?php
// APPEL DE LA PAGE CONNEXION.PHP
include 'connexion.php';
// DECLARATION D'UNE VARIABLE bdd POUR RECUPERER LA FONCTION Connexion
    $bdd = Connexion();
// AFFICHAGE DU NOM DE CHAQUE APPRENANT AVEC SON DEPARTEMENT DE RESIDENCE
$requete_join = $bdd->query("SELECT * from membre_acs INNER JOIN departement ON (num_departement=numero_departement)");

// echo '<h3>LISTE DES APPRENANTS DE ACCESS CODE SCHOOL DAKAR</h3><br>';
// while($data = $requete_join->fetch())
// {
//     echo '<p>'.$data['id_membre'].'&nbsp'.$data['Prenom'].'&nbsp'.$data['Nom'].'&nbsp'.'&nbsp'.$data['Nom_departement'].'</p><br>';
// }
// $requete_join->closeCursor();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AFFICHAGE DE TOUS LES APPRENANTS DE ACS</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
	<div class="container tyext-center">
		<!-- AFFICHAGE DE TOUS LES APPRENANTS DE ACS -->
			<h3>Liste des apprenants de Access Code School DAKAR Promo Kéloumak</h3>
		    <table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">id_membre</th>
						<th scope="col">Prenom</th>
						<th scope="col">Nom</th>
						<th scope="col">Num departement</th>
					</tr>
				</thead>
				<tbody>
					<?php
					while($data = $requete_join->fetch())
					{ ?>
					<tr>
						<th scope="row"><?= $data['id_membre']?></td>
						<td><?= $data['Prenom']?></td>
						<td><?= $data['Nom']?></td>
						<td><?= $data['num_departement']?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
	</div>
</div>
</body>
</html>