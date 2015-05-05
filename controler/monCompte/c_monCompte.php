<?php
	session_start();
	
	require_once "../../view/header/v_header.php";
	require "../../view/menu/v_menuconnecte.php";
	require "../connexion/c_connecte.php";
	require_once"../../modele/monCompte/m_monCompte.php";
	$mail = $_SESSION['mail'];
	$info = get_info($mail);
	$prenom = $info['first_name'];
	$nom = $info['name'];
	$email = $info['email'];
	$telephone = $info['phone'];
	$adresse = $info['adresse'];
    $old_password = $info['password'];
	if (isset($_POST['modifier'])){
		require_once"../../view/monCompte/v_monCompteModifier.php";
	}else{
	require_once"../../view/monCompte/v_monCompte.php";
	}
	require_once "../../view/footer/v_footer.php";
	if (isset($_POST['valider'])){
		$new_nom = $_POST['nom'];
		$new_prenom = $_POST['prenom'];
		$new_mail = $_POST['mail'];
		$new_telephone = $_POST['telephone'];
		$new_adresse = $_POST['adresse'];
		$mdp = $_POST['mdp'];
		if(filter_var($new_mail, FILTER_VALIDATE_EMAIL)){
		
			if(empty($new_nom) || empty($new_prenom) || empty($new_mail) || empty($new_telephone) || empty($new_adresse)){
		header('Location: http://localhost/NeighborFood/controler/accueil/c_monCompte.php');
			}else{
                if(!empty($mdp)) {
                    $new_password = password_hash($mdp, PASSWORD_DEFAULT);
                    update($new_nom, $new_prenom, $new_mail, $new_telephone, $new_adresse, $new_password, $mail);
                }else{
                    update($new_nom, $new_prenom, $new_mail, $new_telephone, $new_adresse,$old_password, $mail);
                }
				header('Location: http://localhost/NeighborFood/controler/monCompte/c_monCompte.php');
            }
		
	    }else{header('Location: http://localhost/NeighborFood/controler/monCompte/c_monCompte.php');}
	
	}
	
	
?>
