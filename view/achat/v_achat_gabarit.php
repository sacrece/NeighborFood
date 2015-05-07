<div id="produit" >


	    quantité = <?= $quantite ?><br/>
	    poids = <?= $weight ?> kg<br/>
	   <div id="description">
	     description : <?= $description ?><br/>
           <?php $GLOBALS[''.$n.'1'.'']=$idfruit;
                    $GLOBALS[''.$n.'2'.'']=$idcategorie;?>
           <form method="post" action="/NeighborFood/controler/achat/c_achat.php">
           <input type="submit" name="<?=$n?>" value="acheter" id="acheter">
           </form>
       </div>
	    Prix = <?= $price ?> euros<br/>
        Vendeur : <?=$first_name?> <?= $name?><br/>
        catégorie : <?= $categories ?><br/>
<div id="image">
    <img src="<?= $photo ?>" alt="arobas" style="width:230px;" />
</div>

</div>