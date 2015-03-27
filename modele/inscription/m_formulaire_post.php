<?php
// Connexion à la base de données




function test_mail($mail){
	$bdd = new PDO('mysql:host=localhost;dbname=site internet;charset=utf8', 'root', '');

	$reponse = $bdd->prepare('SELECT email FROM member where email=?');
	$reponse->execute(array($mail));
	$reponse1 = $reponse->fetch();
	return $reponse1;
}

function insert($nom, $prenom, $mail, $telephone, $adresse, $password){
	$bdd = new PDO('mysql:host=localhost;dbname=site internet;charset=utf8', 'root', '');

		$bdd->exec("INSERT INTO member VALUES( '', '$nom', '$prenom', '$mail', '$telephone', '$adresse', '$password', '', '')");
}
		
		


?>