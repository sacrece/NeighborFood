<?php 

 $mdp=$_POST['mdp'];
 $mail=$_POST['mail'];
 require "../../modele/connexion/m_connexion.php";
 
 if(password_verify($mdp, get_password($mail))){
	 $name=get_namefirstname($mail);
	 session_start();
		$_SESSION['nom']=$name['name'];
		$_SESSION['prenom']=$name['first_name'];
		$_SESSION['mail']=$mail;
		$_SESSION['mdp']=$mdp;
		$_SESSION['connecte']=True;
	header('Location: http://localhost/NeighborFood/controler/accueil/c_accueil.php');
 }else{ header('Location: http://localhost/NeighborFood/controler/accueil/c_accueil.php');}
 
 ?>