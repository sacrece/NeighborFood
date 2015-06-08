<div id="produit" name="<?=$idfruit?>">


    quantité = <?= $quantite ?><br/>
    poids = <?= $weight ?> kg<br/>
    <div id="description">
        description : <?= $description ?><br/>
    </div>
    Prix = <?= $price ?> euros<br/>
    catégorie : <?= $categories ?><br/>
    <div id="image">
        <img src="<?= $photo ?>" class="photo" alt="arobas" style="width:230px;" />
    </div>
    <input type="button" id="delete" value="supprimer" onclick="supprimer(<?=$idfruit?>)">
    <input type="button" id="buy" value="Acheter" onclick="acheter(<?=$idfruit?>)">

</div>