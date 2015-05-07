<?php 

function get_fruit(){
	$bdd = new PDO('mysql:host=localhost;dbname=site internet;charset=utf8', 'root', '');
	$reponse = $bdd->query('SELECT DISTINCT fruitveg.quantity, 
											fruitveg.weight,
											fruitveg.description,
											fruitveg.price, 
											fruitveg.member_idmembre,
											fruitveg.idcategorie,
											fruitveg.idfruit,
											member.name,
											member.first_name,
											fruitvegcategory.categories,
											fruitvegcategory.photo,
											fruitvegcategory.idfruitvegcategorie
							FROM fruitveg INNER JOIN member ON fruitveg.member_idmembre = member.idmembre
											INNER JOIN fruitvegcategory ON fruitveg.idcategorie = fruitvegcategory.idfruitvegcategorie
                            WHERE fruitveg.sale_nosale = "1"
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
											fruitveg.idfruit,
											member.name,
											member.first_name,
											fruitvegcategory.categories,
											fruitvegcategory.photo,
											fruitvegcategory.idfruitvegcategorie
							FROM fruitveg INNER JOIN member ON fruitveg.member_idmembre = member.idmembre 
											INNER JOIN fruitvegcategory ON fruitveg.idcategorie = fruitvegcategory.idfruitvegcategorie
							WHERE fruitvegcategory.idfruitvegcategorie = "'.$idcateg.'"
							ORDER BY idfruit DESC LIMIT 0,4
							')
	or die(print_r($bdd->errorInfo()));
																
	return $reponse;
	

}

function insert_panier($idfruit, $idmembre, $idcategorie, $date){
    $bdd = new PDO('mysql:host=localhost;dbname=site internet;charset=utf8', 'root', '');
    $bdd->exec("INSERT into panier VALUES('',
                                          '$date',
                                          '$idmembre',
                                          '$idfruit',
                                          '',
                                          '$idcategorie')")or die(print_r($bdd->errorInfo()));
    $bdd->exec("UPDATE fruitveg
                SET sale_nosale = '0'
                WHERE idfruit='".$idfruit."'")or die(print_r($bdd->errorInfo()));

}

?>