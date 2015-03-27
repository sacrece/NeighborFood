<?php

if(isset($_POST['valider'])){
	
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$mail = $_POST['mail'];
	$telephone = $_POST['telephone'];
	$adresse = $_POST['adresse'];
	$mdp = $_POST['mdp'];
	require_once "../../modele/inscription/m_formulaire_post.php";
	if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
		if(empty(test_mail($mail))){
			if(empty($nom) || empty($prenom) || empty($mail) || empty($telephone) || empty($adresse) || empty($mdp)){
		header('Location: http://localhost/NeighborFood/controler/inscription/c_inscription.php');
			}else{
				$password=password_hash($mdp, PASSWORD_DEFAULT);
				insert($nom, $prenom, $mail, $telephone, $adresse, $password);
				header('Location: http://localhost/NeighborFood/controler/accueil/c_accueil.php');
			}
		}else{ header('Location: http://localhost/NeighborFood/controler/inscription/c_inscription.php');}
	}else{header('Location: http://localhost/NeighborFood/controler/inscription/c_inscription.php');}
	
}else{
	require "../../view/header/v_header.php";
	if(isset($_SESSION['connecte'])){		
		require "../../view/menu/v_menuconnecte.php";
	}else{
		 require "../../view/menu/v_menunonconnecte.php";
	}
	require "../../view/inscription/v_formulaire.php";
	require "../../view/footer/v_footer.php";
}
?>