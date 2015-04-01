
<form name="achat" method="post" action="/NeighborFood/controler/achat/c_achat.php">
	<table>
	
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
	<input type="submit" name="valider" value="Valider" class="bouton"/>
	</form>