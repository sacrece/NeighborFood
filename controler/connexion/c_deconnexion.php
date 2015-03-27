<?php

	session_start();
	session_unset();
	session_destroy();
	header('Location: http://localhost/NeighborFood/controler/accueil/c_accueil.php');
?>