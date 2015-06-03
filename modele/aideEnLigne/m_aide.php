<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=site internet;charset=utf8', 'root', '',  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}




    $bdd = new PDO('mysql:host=localhost;dbname=site internet;charset=utf8', 'root', '');

    $req = $bdd->prepare('SELECT * FROM `faq`');
    while($données=$req->fetch()){
        echo $données["questions"],"<br/>",$données["reponses"];
    }

