 <?php 
include('connexion.php');
$bdd = Connexion();
$requete="INSERT INTO membre_acs (Prenom,Nom,num_departement) VALUES (:Prenom,:Nom,:num_departement)";
$prepare=$bdd->prepare($requete);
$prepare->bindParam("Prenom",$_POST['Prenom']);
$prepare->bindParam("Nom",$_POST['Nom']);
$prepare->bindParam("num_departement",$_POST['num_departement']);
$prepare->execute();
header('location:accueil.php');
?>
