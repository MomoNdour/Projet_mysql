<?php 
include ('pages/connexion.php');
$bdd=Connexion();
$requete="select * From membre_acs";
$stmt=$bdd->prepare($requete);
$stmt->execute();
$membre=$stmt->fetchAll();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Projet Mock_data</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<h1>Liste des apprenants de Access Code School DAKAR Promo Kéloumak</h1>
    <table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col">id_membre</th>
				<th scope="col">Prenom</th>
				<th scope="col">Nom</th>
				<th scope="col">num_departement</th>
				<th scope="col">Modifier</th>
				<th scope="col">Supprimer</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($membre as $data)
			{ ?>
			<tr>
				<th scope="row"><?= $data['id_membre']?></td>
				<td><?= $data['Prenom']?></td>
				<td><?= $data['Nom']?></td>
				<td><?= $data['num_departement']?></td>
				<td><a href="pages/Modifier.php?id_membre=<?= $data['id_membre']?>">Modifier</a></td>
				<td><a href="pages/Supprimer.php?id_membre=<?= $data['id_membre']?>">Supprimer</a></td>
			</tr>
			<?php } ?>
		</tbody>
</table>
</body>
</html>