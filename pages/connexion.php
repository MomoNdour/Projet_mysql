<?php
//CONNEXION A LA BASE DE DONNEES
function Connexion(){
	$Connexion=NULL;
	try
	{
		$Connexion=new PDO('mysql:host=localhost;dbname=momo;charset=utf8','root','');
			$Connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			return $Connexion;
			}
			catch(PDOException $e)
			{
				retun -1;
			}
    }
?>