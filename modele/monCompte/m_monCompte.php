<?php 
function get_info($mail){
	$bdd = new PDO('mysql:host=localhost;dbname=site internet;charset=utf8', 'root', '');
	$reponse = $bdd->prepare('SELECT name, first_name, email, phone, adresse, password
								FROM member
								WHERE email = ?')or die(print_r($bdd->errorInfo()));
	$reponse->execute(array($mail));
	$info = $reponse->fetch();
	return $info;
}


function update($nom, $prenom, $mail, $telephone, $adresse, $password, $ancmail){
	$bdd = new PDO('mysql:host=localhost;dbname=site internet;charset=utf8', 'root', '');

	$bdd->exec("UPDATE member SET name='".$nom."',
								  first_name='".$prenom."',
								  email='".$mail."',
								  phone='".$telephone."',
								  adresse='".$adresse."',
								  password='".$password."'
							  WHERE email = '".$ancmail."'")or die(print_r($bdd->errorInfo()));
}

?>
