<?php

function recherche($recherche){
    $bdd = new PDO('mysql:host=localhost;dbname=site internet;charset=utf8', 'root', '');
    $reponse = $bdd->query ('SELECT name,
                                    first_name,
                                    email
                                FROM member
                                WHERE name LIKE "%'.$recherche.'%" OR first_name LIKE "%'.$recherche.'%"
                                ');
    return $reponse;

}
?>