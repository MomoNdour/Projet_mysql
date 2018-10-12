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
</head>
<body>
<form method="post" action="Remod.php">
	<table>
		<tr>
			<input type="hidden" name="id_membre" value="<?php echo($membre->id_membre);?>">
			<input type="text" name="Prenom" value="<?php echo($membre->Prenom);?>">
			<input type="text" name="Nom" value="<?php echo($membre->Nom);?>">
			<input type="text" name="num_departement" value="<?php echo($membre->num_departement);?>">
			<input type="submit" name="Ajouter">
			<input type="reset" name="Annuler">
		</tr>
	</table>
</form>
</body>
</html>