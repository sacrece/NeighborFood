<?php 
session_start();
require_once '../../modele/forum/function.php';
require_once '../../modele/connexionBdd/m_connexionBdd.php';

$bdd = connexion_bdd();

if(isset($_GET['categorie'])) { 
			       
$_GET['categorie'] = htmlspecialchars($_GET['categorie']);
$sujets = getSujets($_GET['categorie']);

require_once '../../view/forum/VueCategorie.php';

}

else if(isset($_GET['sujet'])) { 

$_GET['sujet'] = htmlspecialchars($_GET['sujet']);
$posts = getPostSujet($_GET['sujet']);

require_once '../../view/forum/VueSujet.php';

}
else
{ 
	
$accueil = getAccueil();	
require_once '../../view/forum/VueAccueil.php';

}

if(isset($_SESSION['idmembre'])) {


}

?>
							
