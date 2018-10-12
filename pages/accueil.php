<?php 
include ('connexion.php');
$bdd= Connexion();
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
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<style>
		.nouveau_membre
		{
			width: 100%;
		}
	</style>
</head>
<body>

<div class="container-fluid">
	<div class="container text-center">
		<section>
					<!-- AFFICHAGE DE TOUS LES APPRENANTS DE ACS -->
			<h3>Liste des apprenants de Access Code School DAKAR Promo Kéloumak</h3>
		    <table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">id_membre</th>
						<th scope="col">Prenom</th>
						<th scope="col">Nom</th>
						<th scope="col">Numéro département</th>
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
						<td><a  data-target="tooltip" title="Modifier cette enregistrement" href="../pages/Modifier.php?id_membre=<?= $data['id_membre']?>"><img src="../images/modifier.png" width="30px" height="30px"></a></td>
						<td><a data-target="tooltip" title="Supprimer cette enregistrement" href="../pages/Supprimer.php?id_membre=<?= $data['id_membre']?>"><img src="../images/supprime.png" width="30px" height="30px"></a></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</section>
	</div>
</div>
<hr class="hr">

	<!-- AJOUTER UN NOUVEAU MEMBRE -->
	<div class="container-fluid" >
		<div class="container">
			<section>
					<form action="ajout.php" class="text-center">
						<div class="nouveau_membre form-group text-center">
							<h3>Ajouter un membre dans Access Code School</h3>
							<div class="row">
								<div class="row">
									<div class="col">
										<input type="text" class="form-control" name="Prenom" placeholder="Veuillez saisir le prénom" value="">
									</div>
								</div><br>

								<div class="row">
									<div class="col">
								<input type="text" class="form-control" name="Nom" placeholder="Veuillez saisir le nom" value="">
									</div>
								</div><br>

								<div class="row">
									<div class="col">
								<input type="text" class="form-control" name="num_departement" placeholder="Veuillez saisir le numéro du département (1 à 11 départements)" value="">
									</div>
								</div><br>

								<div class="col">
									<input  class="btn btn-success" type="submit" name="ajout_membre" value="Valider">
									<input  class="btn btn-danger" type="reset" name="annuler" value="Annuler">
								</div>
							</div>
						</div>
					</form>
			</section>
		</div>
	</div>		
	<hr class="hr">


		<!-- FORMULAIRE POUR EXECUTER DES REQUETES SUR LA TABLE MOCK_DATA-->
<div class="container-fluid">
	<div class="container">
		<section>
				<form action="" class="text-center" >
					<div class="form-group">
						<h3>Quelques requêtes sur la table Mock_data</h3>
						<select class="form-control" name="requete_sql" id="">
							<option value="">Sélectionner</option>
							<option value="requete_1"><a href = "../pages/1.php">AFFICHAGE DE TOUS LES GENS DONT LE NOM EST PALMER</a></option>
							<option value="requete_2">AFFICHAGE DE TOUTE LES FEMMES</option>
							<option value="requete_3">TOUS LES ETATS DONT LA LETTRE COMMENCE PAR N</option>
							<option value="requete_4">AFFICHAGE DE TOUS LES EMAILS QUI CONTIENNENT GOOGLE</option>
							<option value="requete_5">REPARTITION PAR ETAT ET LE NOMBRE D\'ENREGISTREMENT PAR ETAT PAR ORDRE CROISSANT</option>
							<option value="requete_6">NOMBRE DE FEMMES ET D'HOMMES</option>
							<option value="requete_7">AGE DE CHAQUE PERSONNE</option>
							<option value="requete_8">LISTE DES APPRENANTS DE ACCESS CODE SCHOOL DAKAR</option>
						</select>
					</div>
					<div class="row">
						<div class="col">
							<input  class="btn btn-primary" type="submit" value="Ouvrir">
							<input  class="btn btn-danger" type="reset" value="Annuler">
						</div>
					</div>
				</form>
		</section>
	</div>
</div>


</body>
</html>