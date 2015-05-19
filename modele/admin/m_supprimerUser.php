<?php


if(isset($_GET['idmembre'])) {
    $idmembre = $_GET['idmembre'];

    $bdd = new PDO('mysql:host=localhost;dbname=site internet;charset=utf8', 'root', '');
    $bdd->exec("DELETE FROM member
                  WHERE idmembre='".$idmembre."'")or die(print_r($bdd->errorInfo()));
}
?>