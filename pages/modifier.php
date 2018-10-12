<?php
include('connexion.php');
$bdd=Connexion();
$requete="select * From membre_acs WHERE id_membre=:id_membre";
$stmt=$bdd->prepare($requete);
$stmt->bindParam('id_membre',$_GET['id_membre']);
$stmt->execute();
$membre=$stmt->fetchObject();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ajouter</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<style>
		.container
		{
			padding: 5%;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="container">
			<h3>Modification de l'enregistrement: <?php echo($membre->Prenom).'&nbsp'.($membre->Nom);?></h3>
			<form method="post" action="Remod.php">
							<div class="row">
								<div class="col">
									<input  class="form-control" type="hidden" name="id_membre" value="<?php echo($membre->id_membre);?>">
								</div>
							</div>

							<div class="row">
								<div class="col">
									<input type="text" class="form-control" name="Prenom" value="<?php echo($membre->Prenom);?>">
								</div>
							</div><br>

							<div class="row">
								<div class="col">
							<input type="text" class="form-control" name="Nom" value="<?php echo($membre->Nom);?>">
								</div>
							</div><br>

							<div class="row">
								<div class="col">
							<input type="text" class="form-control" name="num_departement" value="<?php echo($membre->num_departement);?>">
								</div>
							</div><br>

							<div >
								<input class="btn btn-primary" type="submit" name="Ajouter">
								<input class="btn btn-danger" type="reset" name="Annuler" >
							</div>

							<div>
								
							</div>
			</form>
		</div>
	</div>
</body>
</html>