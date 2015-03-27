<?php
// Connexion à la base de données

$bdd = new PDO('mysql:host=localhost;dbname=site internet;charset=utf8', 'root', '');


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$telephone = $_POST['telephone'];
$adresse = $_POST['adresse'];
$mdp = $_POST['mdp'];
if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
	$reponse = $bdd->prepare('SELECT email FROM member where email=?');
	$reponse->execute(array($mail));
	$reponse1 = $reponse->fetch();
	if(empty($reponse1)){
		if(empty($nom) || empty($prenom) || empty($mail) || empty($telephone) || empty($adresse) || empty($mdp)){
		header('Location: http://localhost/test/html/formulaire.php');
		}
		else{		
		$password=password_hash($mdp, PASSWORD_DEFAULT);	
		$bdd->exec("INSERT INTO member VALUES( '', '$nom', '$prenom', '$mail', '$telephone', '$adresse', '$password', '', '')");
		header('Location: http://localhost/test/html/site.php');
		}
	}else{echo 'mail deja utilisé';}
}else{header('Location: http://localhost/test/html/formulaire.php');}

?>