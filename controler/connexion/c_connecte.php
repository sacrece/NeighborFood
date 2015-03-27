<?php
	
		echo $_SESSION['nom'].'<br/>'.$_SESSION['prenom'];	
		echo' <form name="deconnexion" method="post" action="http://localhost/NeighborFood/controler/connexion/c_deconnexion.php">
			<input type="submit" name="deco" value="Se deconnecter" class="bouton"/>
			</form>';
	
?>	