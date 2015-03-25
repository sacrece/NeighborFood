<?php
	$bdd = new PDO('mysql:host=localhost;dbname=site internet;charset=utf8', 'root', '');
	
	$mail = $_POST['mail'];
	$mdp = $_POST['mdp'];
	$reponse = $bdd->prepare('SELECT password FROM member WHERE email = ?');
	$reponse->execute(array($mail));
	$password = $reponse->fetch();	
	
	if(password_verify($mdp, $password['password'])){
		$reponse_nom = $bdd->prepare('SELECT name, first_name FROM member WHERE email = ?');
		$reponse_nom->execute(array($mail));
		$name = $reponse_nom->fetch();		
		session_start();
		$_SESSION['nom']=$name['name'];
		$_SESSION['prenom']=$name['first_name'];
		$_SESSION['mail']=$mail;
		$_SESSION['mdp']=$mdp;
		$_SESSION['connecte']=True;
		header('Location: http://localhost/test/html/site.php');
	}else{
		header('Location: http://localhost/test/html/site.php');
			
	}
	
?>