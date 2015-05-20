<?php


if(isset($_GET['idmembre'])) {
    $idmembre = $_GET['idmembre'];

    $bdd = new PDO('mysql:host=localhost;dbname=site internet;charset=utf8', 'root', '');

    $reponse = $bdd->query("SELECT *
                 FROM panier
                 WHERE member_idmembre='".$idmembre."'")or die(print_r($bdd->errorInfo()));
    $donnee = $reponse->fetch();
    if($donnee) {

        $bdd->exec("DELETE FROM panier
                       WHERE member_idmembre='" . $idmembre . "'") or die(print_r($bdd->errorInfo()));

        $bdd->exec("DELETE FROM member
                  WHERE idmembre='" . $idmembre . "'") or die(print_r($bdd->errorInfo()));
    }else{
        $bdd->exec("DELETE FROM member
                  WHERE idmembre='" . $idmembre . "'") or die(print_r($bdd->errorInfo()));
    }
}

?>