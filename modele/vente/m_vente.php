<?php 
session_start();


function get_idmembre($mail){
	$bdd = new PDO('mysql:host=localhost;dbname=site internet;charset=utf8', 'root', '');
	$reponse = $bdd->prepare('SELECT idmembre FROM member where email=?');
	$reponse->execute(array($mail));
	$id = $reponse->fetch();
	$idmembre = $id['idmembre'];
	return $idmembre;
}


	function insertfruit($quantite, $poids, $description, $prix, $date, $buyorchange, $idmembre, $idcategorie){
		$bdd = new PDO('mysql:host=localhost;dbname=site internet;charset=utf8', 'root', '');
		$bdd->exec("INSERT into fruitveg VALUES('', 
											'$quantite', 
											'$poids', 
											'$description', 
											'', 
											'$prix',
											'$date',
											'1', 
											'$buyorchange', 
											'$idmembre', 
											'$idcategorie')");
	}
?>