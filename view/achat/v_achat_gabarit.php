<div id="produit" >


	    quantité = <?= $quantite ?><br/>
	    poids = <?= $weight ?> kg<br/>
	   <div id="description">
	     description : <?= $description ?><br/>
           <?php $GLOBALS[''.$n.$pageCourrante.'1'.'']=$idfruit;
                    $GLOBALS[''.$n.$pageCourrante.'2'.'']=$idcategorie;
                    ;?>
           <form method="post" action="/NeighborFood/controler/achat/c_achat.php?p=<?=$pageCourrante?>">
           <input type="submit" name="<?=$n?>" value="Ajouter au panier" id="acheter">
           </form>
           
           <p><a href="/NeighborFood/controler/messagerie/ecrire.php">Envoyer un message</a></p>
       </div>
	    Prix = <?= $price ?> euros<br/>
        Vendeur : <?=$first_name?> <?= $name?><br/>
        catégorie : <?= $categories ?><br/>
<div id="image">
    <img src="<?= $photo ?>" alt="arobas" style="width:230px;" />
</div>

</div>