<?php
// APPEL DE LA PAGE CONNEXION.PHP
include 'connexion.php';
// DECLARATION D'UNE VARIABLE bdd POUR RECUPERER LA FONCTION Connexion
    $bdd = Connexion();
// REPARTITION PAR ETAT ET LE NOMBRE D'ENREGISTREMENT PAR ETAT (CROISSANT)
    $requete_repartition = $bdd -> query("SELECT country_code, COUNT(*) as nbr FROM information GROUP BY country_code ORDER BY nbr asc");
    // echo '<h2>REPARTITION PAR ETAT ET LE NOMBRE D\'ENREGISTREMENT PAR ETAT PAR ORDRE CROISSANT</h2>';
    // while($data = $requete_repartition->fetch())
    // {
    //     echo '<p>'.$data['country_code'].'&nbsp&nbsp nombre >>>'.$data['nbr'].'</p><br>';
    // }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REPARTITION PAR ETAT ET LE NOMBRE D'ENREGISTREMENT PAR ETAT PAR ORDRE CROISSANT</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
	<div class="container text-center">
		<!--REPARTITION PAR ETAT ET LE NOMBRE D\'ENREGISTREMENT PAR ETAT PAR ORDRE CROISSANT-->
			<h3>REPARTITION PAR ETAT ET LE NOMBRE D'ENREGISTREMENT PAR ETAT PAR ORDRE CROISSANT</h3>
		    <table class="table">
				<thead class="thead-dark">
					<tr>
                        <th scope="col">Code pays</th>
                        <th scope="col">Nombre d'enregistrement</th>
					</tr>
				</thead>
				<tbody>
					<?php
					while($data = $requete_repartition->fetch())
					{ ?>
					<tr>
                        <td><?= $data['country_code']?></td>
                        <td><?= $data['nbr']?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
</div>
</body>
</html>