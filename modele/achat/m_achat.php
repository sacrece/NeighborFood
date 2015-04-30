<?php 

function get_fruit(){
	$bdd = new PDO('mysql:host=localhost;dbname=site internet;charset=utf8', 'root', '');
	$reponse = $bdd->query('SELECT DISTINCT fruitveg.quantity, 
											fruitveg.weight,
											fruitveg.description,
											fruitveg.price, 
											fruitveg.member_idmembre,
											fruitveg.idcategorie,
											member.name,
											member.first_name,
											fruitvegcategory.categories
							FROM fruitveg INNER JOIN member ON fruitveg.member_idmembre = member.idmembre 
											INNER JOIN fruitvegcategory ON fruitveg.idcategorie = fruitvegcategory.idfruitvegcategorie
							ORDER BY idfruit DESC LIMIT 0,3
							')
	or die(print_r($bdd->errorInfo()));
																
	return $reponse;
	

}


function get_fruit_categorie($idcateg){
	$bdd = new PDO('mysql:host=localhost;dbname=site internet;charset=utf8', 'root', '');
	$reponse = $bdd->query('SELECT DISTINCT fruitveg.quantity, 
											fruitveg.weight,
											fruitveg.description,
											fruitveg.price, 
											fruitveg.member_idmembre,
											fruitveg.idcategorie,
											fruitveg.photo,
											member.name,
											member.first_name,
											fruitvegcategory.categories
							FROM fruitveg INNER JOIN member ON fruitveg.member_idmembre = member.idmembre 
											INNER JOIN fruitvegcategory ON fruitveg.idcategorie = fruitvegcategory.idfruitvegcategorie
							WHERE fruitvegcategory.idfruitvegcategorie = "'.$idcateg.'"
							ORDER BY idfruit DESC LIMIT 0,4
							')
	or die(print_r($bdd->errorInfo()));
																
	return $reponse;
	

}

?>