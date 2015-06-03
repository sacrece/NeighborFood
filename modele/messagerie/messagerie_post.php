
<?php

// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=site internet;charset=utf8' , 'root' , 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


// Effectuer ici la requête qui insère le message
//$req = $bdd->prepare('INSERT INTO mp (mp_receveur, mp_texte) VALUES(?,?)');
//$req->execute(array($_POST['mp_receveur'], $_POST['mp_texte']));


/*function insert($nom, $prenom, $mail, $telephone, $adresse, $password){
	$bdd = new PDO('mysql:host=localhost;dbname=site internet;charset=utf8', 'root', 'root');

		$bdd->exec("INSERT INTO member VALUES( '', '$nom', '$prenom', '$mail', '$telephone', '$adresse', '$password', '', '')");*/


function creer_conversation($message)
or die(mysql_error());
$id_conversation = mysql_insert_id();
{	mysql_query("
INSERT INTO conversation_messages(id_conversations,pseudo_exp,text_message,date_message)
VALUES ('{$id_conversation}','{$_SESSION['name']}', '{$mp_texte}',NOW())
")or die(mysql_error());

mysql_query("
INSERT INTO conversations_membre(id_conversations,pseudo_des)
VALUES ('{$id_conversation}','{$_GET['email']}')
");


}

// Puis rediriger vers ecrire.php 
header('Location: http://localhost:8888/NeighborFood/controler/messagerie/ecrire.php');


//Puis rediriger vers ecrire.php

//header( 'ecrire.php');

$reponse->closecursor();
?>


