 <?php
 
	require_once "../../view/header/v_header.php";
	
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