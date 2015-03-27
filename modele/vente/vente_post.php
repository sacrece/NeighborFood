<?php 
session_start();

	$bdd = new PDO('mysql:host=localhost;dbname=site internet;charset=utf8', 'root', '');
	
$quantite = $_POST['quantite'];
$poids = $_POST['poids'];
$description = $_POST['description'];
$prix = $_POST['prix'];
$buyorchange = $_POST['buyorchange'];
$mail = $_SESSION['mail'];
$idcategorie = $_POST['categorie'];

$date = date("Y-m-d H:m:s");

	$reponse = $bdd->prepare('SELECT idmembre FROM member where email=?');
	$reponse->execute(array($mail));
	$id = $reponse->fetch();
	$idmembre = $id['idmembre'];

if(empty($quantite)||empty($poids)||empty($description)||empty($prix)||empty($buyorchange)){
	header('Location : http://localhost/NeighboorFood/view/vente/vente.php');
}else{
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
	header('Location: http://localhost/NeighborFood/view/accueil/accueil.php');
}