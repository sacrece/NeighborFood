<?php


    if(!empty($_POST['recherche'])){
        session_start();
        require_once "../../view/header/v_header.php";
        if(isset($_SESSION['connecte'])){
            require "../../view/menu/v_menuconnecte.php";
            require "../connexion/c_connecte.php";
        }else{
            require "../../view/menu/v_menunonconnecte.php";
            require "../connexion/c_non_connecte.php";
        }?>
        <form name="rechercher" method="post" action="http://localhost/NeighborFood/controler/rechercher/c_rechercher.php">
			<table>
				<tr><td><label for="recherche">Recherche</label> : <input type="text" name="recherche" id="recherche" /></tr></td>
			</table>
				<input type="submit" name="valider_recherche" value="Rechercher" class="bouton"/>
		</form>
        <?php

        require_once "../../modele/rechercher/m_rechercher.php";
        $recherche = recherche($_POST['recherche']);

        while($info = $recherche->fetch()) {
            echo $info['name'] . '<br/>' . $info['first_name'] .'<br>'.$info['email']. '<br/><br/><br/>';
        }
        require_once "../../view/footer/v_footer.php";
    }else{
?>
        <form name="rechercher" method="post" action="http://localhost/NeighborFood/controler/rechercher/c_rechercher.php">
			<table>
				<tr><td><label for="recherche">Recherche</label> : <input type="text" name="recherche" id="recherche" /></tr></td>
			</table>
				<input type="submit" name="valider_recherche" value="Rechercher" class="bouton"/>
		</form>
<?php }
?>