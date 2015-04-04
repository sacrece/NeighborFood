<form  name="modifier_info" method="post" action="/NeighborFood/controler/monCompte/c_monCompte.php">

	<table>
			<tr><td><label for="nom">Nom</label> : <input type="text" name="nom" id="nom" value="<?php echo $nom; ?>" /></tr></td>
			<tr><td><label for="prenom">Prénom</label> : <input type="text" name="prenom" id="prenom" value="<?php echo $prenom; ?>"/></tr></td>
			<tr><td><label for="mail">Adresse mail</label> : <input type="mail" name="mail" id="mail" value="<?php echo $email; ?>"/></tr></td>
			<tr><td><label for="telephone">Telephone</label> : <input type="text" name="telephone" id="telephone" value="<?php echo $telephone; ?>"/></tr></td>
			<tr><td><label for="adresse">Adresse</label> : <input type="tel" name="adresse" id="adresse" value="<?php echo $adresse; ?>"/></tr></td>
			<tr><td><label for="mdp">Mot de Passe</label> : <input type="password" name="mdp" id="mdp" /></tr></td>
			
	</table>
			<input type="reset" name="stop" value="Annuler" class="bouton"/>
			<input type="submit" name="valider" value="Valider" class="bouton"/>
		
		
</form>
		