 <?php 
include('connexion.php');
$bdd=Connexion();
$requete=" DELETE FROM membre_acs WHERE id_membre=:id_membre";
$prepare=$bdd->prepare($requete);
$prepare->bindParam('id_membre',$_GET['id_membre']);
$prepare->execute();
header('location:accueil.php');
?>
