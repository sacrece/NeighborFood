<?php 

	session_start();

	require "../../view/header/v_header.php";
	if(isset($_SESSION['connecte'])){		
		require "../../view/menu/v_menuconnecte.php";
		require "../connexion/c_connecte.php";
	}else{
		 require "../../view/menu/v_menunonconnecte.php";
		 require "../connexion/c_non_connecte.php";
	}
    require"../rechercher/c_rechercher.php";
	require "../../view/accueil/v_accueil.php";
	require "../../view/footer/v_footer.php";
	
	
	
?>