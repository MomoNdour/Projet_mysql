<?php
if (isset($_POST['connexion'])){
    if ($_POST['username']=='admin'&& $_POST['password']=='admin')
    {
     header("location: pages/accueil.php");
    }
    else
    {
        echo'<font color="red"><b><center>Login ou mot de passe incorrect</center></b></font>';
    }
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Authentification</title>
    <link rel="stylesheet" href="css/css.css">
</head>
<body>
    <div class="title"><h3>Bienvenue dans la base de données ! Veuillez vous identifier svp !</h3></div>
    <div class="container">
        <div class="left"></div>
        <div class="right">
            <div class="formBox">
                <form action="" method="post">
                    <!-- <p>Identifiant</p> -->
                    <input type="text" name="username" placeholder="Identifiant">
                    <!-- <p>Mot de passe</p> -->
                    <input type="password" name=password placeholder="Mot de passe">
                    <input type="submit" name="connexion" id="connexion" value="Se Connecter">
                </form>
            </div>
        </div>
    </div>
</body>
</html>