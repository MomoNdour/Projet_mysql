 <?php 
include('connexion.php');
$bdd=Connexion();
$requete = "UPDATE membre_acs set Prenom=:Prenom,Nom=:Nom,num_departement=:num_departement WHERE id_membre=:id_membre";
$prepare=$bdd->prepare($requete);
$prepare->bindParam("Prenom",$_POST['Prenom']);
$prepare->bindParam("Nom",$_POST['Nom']);
$prepare->bindParam("num_departement",$_POST['num_departement']);
$prepare->bindParam("id_membre",$_POST['id_membre']);
$prepare->execute();
header('location:accueil.php');
?>
