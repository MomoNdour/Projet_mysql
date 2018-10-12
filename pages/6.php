<?php
// APPEL DE LA PAGE CONNEXION.PHP
include 'connexion.php';
// DECLARATION D'UNE VARIABLE bdd POUR RECUPERER LA FONCTION Connexion
    $bdd = Connexion();
// // NOMBRE DE FEMMES ET D'HOMMES
    $requete_Male = $bdd -> query("SELECT COUNT(*) FROM information WHERE gender='Male'");
    $requete_Female = $bdd -> query("SELECT  COUNT(*) FROM information WHERE gender='Female'");
//     echo '<h2>NOMBRE DE FEMMES ET D\'HOMMES</h2>';
//     while($data_Male = $requete_Male->fetch())
//     {
//         echo '<p> Le nombre d\'hommes est de: '.$data_Male['COUNT(*)'].'</p>';
//     }

//     while($data_Female = $requete_Female->fetch())
//     {
//         echo '<p> Le nombre de femmes est de: '.$data_Female['COUNT(*)'].'</p>';
//     }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NOMBRE DE FEMMES ET D'HOMMES</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
	<div class="container text-center">
		<!--REPARTITION PAR ETAT ET LE NOMBRE D\'ENREGISTREMENT PAR ETAT PAR ORDRE CROISSANT-->
			<h3>NOMBRE D'HOMMES</h3>
		    <table class="table">
				<thead class="thead-dark">
					<tr>
                        <th scope="col">Nombres d'hommes</th>
					</tr>
				</thead>
				<tbody>
					<?php
					while($data = $requete_Male->fetch())
					{ ?>
					<tr>
                        <td><?= $data['COUNT(*)']?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
</div>
	<div class="container text-center">
		<!--REPARTITION PAR ETAT ET LE NOMBRE D\'ENREGISTREMENT PAR ETAT PAR ORDRE CROISSANT-->
			<h3>NOMBRE DE FEMMES</h3>
		    <table class="table">
				<thead class="thead-dark">
					<tr>
                        <th scope="col">Nombres de femmes</th>
					</tr>
				</thead>
				<tbody>
					<?php
					while($data = $requete_Female->fetch())
					{ ?>
					<tr>
                        <td><?= $data['COUNT(*)']?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
</div>
</body>
</html>