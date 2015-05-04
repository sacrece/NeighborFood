<?php
	
		echo ' <div id="connecte"> '.$_SESSION['nom'].'<br/>'.$_SESSION['prenom'].' </div>';
		echo' <form name="deconnexion" id="connecte" method="post" action="http://localhost/NeighborFood/controler/connexion/c_deconnexion.php">
			<input type="submit" name="deco" id="connecte" value="Se deconnecter" class="bouton"/>
			</form>';
	
?>	