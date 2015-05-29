<head>

    <link rel="stylesheet" href="/NeighborFood/view/css/admin/admincategorie.css" />

</head>

<?php
$bdd = new PDO('mysql:host=localhost;dbname=site internet;charset=utf8', 'root', '');
$reponse = $bdd->query('SELECT categories, idfruitvegcategorie FROM fruitvegcategory');
echo ('<h2>Catégories</h2>');
while ($donnees = $reponse->fetch()){
    $categorie = $donnees['categories'];
    $idcategorie = $donnees['idfruitvegcategorie'];

    echo '<option id="categorie" value="' .$idcategorie .'"">' .$categorie .'</option>';
}
$reponse->closeCursor();
?>

<a href="/NeighborFood/controler/admin/c_categorie_ajout.php">Ajouter une catégorie</a>