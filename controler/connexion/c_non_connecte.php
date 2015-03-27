<?php
echo'
		<form name="connexion" method="post" action="http://localhost/NeighborFood/controler/connexion/c_connexion.php">
			<table>		
				<tr><td><label for="mail">Mail</label> : <input type="text" name="mail" id="mail" /></tr></td>
				<tr><td><label for="mdp">Mot de passe</label> : <input type="password" name="mdp" id="mdp" /></tr></td>
			</table>
				<input type="submit" name="valider" value="Se connecter" class="bouton"/>
		</form>';
?>