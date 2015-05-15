<?php

function getuser(){
    $bdd = new PDO('mysql:host=localhost;dbname=site internet;charset=utf8', 'root', '');
    $reponse = $bdd ->query( 'SELECT idmembre,name,first_name,email FROM member WHERE idmembre != "13" ');
    return $reponse;




}