<?php
	
		session_start();
	
?>	
<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8" />
	<link rel="stylesheet" />
        <title>VENTE</title>
    </head>
	
	<body>
	<?php 
	if(isset($_SESSION['connecte'])){
		require "require/connecte.php";
	}else{require "require/non_connecte.php";}
?>
	
	<form name="vente" method="post" action="http://localhost/test/php/vente_post.php">
	<table>
	
		<tr><td><label for="quantity">Quantité</label> : <input type="number" name="quantite" id="quantity"/></tr></td>
		<tr><td><label for="weight">Poids</label> : <input type="number" name='poids' id="weight"/></tr></td>
		<tr><td><label for="description">Description du produit</label><br />
			<textarea name="description" id="description"></textarea></tr></td>
		<tr><td><label for="price">Prix</label> : <input type="number" name="prix" id="prix"/></tr></td>
		<tr><td>Voulez-vous vendre ou échanger votre produit ?<br/>
			<input type="radio" name="buyorchange" value="buy" id="buy" /> <label for="buy">A vendre</label><br />
			<input type="radio" name="buyorchange" value="change" id="change" /> <label for="change">A échanger</label></tr></td>
		
		<tr><td><label for="categorie">Choisissez votre catégorie</label><br />
			<select name="categorie" id="categorie">
		<?php
			$bdd = new PDO('mysql:host=localhost;dbname=site internet;charset=utf8', 'root', '');
			$reponse = $bdd->query('SELECT categories, idfruitvegcategorie FROM fruitvegcategory');			
			
			while ($donnees = $reponse->fetch()){
			$categorie = $donnees['categories'];
			$idcategorie = $donnees['idfruitvegcategorie'];
			
				echo '<option value="' .$idcategorie .'"">' .$categorie .'</option>';				
			}
			$reponse->closeCursor();
		?>
		</select></tr></td>
	
	</table>
		<input type="reset" name="stop" value="Annuler" class="bouton"/>
		<input type="submit" name="valider" value="Valider" class="bouton"/>
	</form>
	</body>
</html>