 <?php
	session_start();
	
	require_once "../../view/header/v_header.php";
	if(isset($_SESSION['connecte'])){		
		require "../../view/menu/v_menuconnecte.php";
		require "../connexion/c_connecte.php";
	}else{
		 require "../../view/menu/v_menunonconnecte.php";
		 require "../connexion/c_non_connecte.php";
	}
	require_once "../../modele/achat/m_achat.php";
	
	$func = get_fruit();
	while($donnees = $func->fetch()){
	
		$quantite = $donnees['quantity'];
		$weight = $donnees['weight'];
		$description = $donnees['description'];
		$price = $donnees['price'];
		$name = $donnees['name'];
		$first_name = $donnees['first_name'];
		$categories = $donnees['categories'];
		require "../../view/achat/v_achat_gabarit.php";
	
	}
	require_once "../../view/footer/v_footer.php";
	
?>;