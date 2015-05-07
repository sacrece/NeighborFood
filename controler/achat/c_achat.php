 <?php
	session_start();	
	
	
	require_once "../../view/header/v_header.php";
	if(isset($_SESSION['connecte'])){		
		require "../../view/menu/v_menuconnecte.php";
		require "../connexion/c_connecte.php";
	}else{
		 require "../../view/menu/v_menunonconnecte.php";
		 require "../connexion/c_non_connecte.php";
	}
	require_once "../../view/achat/v_achat.php";
	require_once "../../modele/achat/m_achat.php";
	if (isset($_POST['valider'])){
		htmlentities($idcateg = $_POST['categorie']);
		$func = get_fruit_categorie($idcateg);
		$n=1;
		while($donnees = $func->fetch()){

			$quantite = $donnees['quantity'];
			$weight = $donnees['weight'];
			$description = $donnees['description'];
			$price = $donnees['price'];
			$name = $donnees['name'];
			$first_name = $donnees['first_name'];
			$categories = $donnees['categories'];
            $photo = $donnees['photo'];
            $idfruit = $donnees['idfruit'];
            $idcategorie = $donnees['idfruitvegcategorie'];
			require "../../view/achat/v_achat_gabarit.php";
            $n=$n+1;
		}
	}else{	
		$func = get_fruit();
        $n=1;
		while($donnees = $func->fetch()){
	
			$quantite = $donnees['quantity'];
			$weight = $donnees['weight'];
			$description = $donnees['description'];
			$price = $donnees['price'];
			$name = $donnees['name'];
			$first_name = $donnees['first_name'];
			$categories = $donnees['categories'];
            $photo = $donnees['photo'];
            $idfruit = $donnees['idfruit'];
            $idcategorie = $donnees['idfruitvegcategorie'];
			require "../../view/achat/v_achat_gabarit.php";
            $n=$n+1;
	
		}
	}

    if(isset($_POST['1'])){
        $date = date("Y-m-d H:m:s");
        $idfruit = $GLOBALS['11'];
        $idcategorie = $GLOBALS['12'];
        $idmembre=$_SESSION['idmembre'];
        insert_panier($idfruit, $idmembre, $idcategorie, $date);
        $delai=1;
        $url="/NeighborFood/controler/achat/c_achat.php";
        header("Refresh: $delai;url=$url");

    }
     if(isset($_POST['2'])){
         $date = date("Y-m-d H:m:s");
         $idfruit = $GLOBALS['21'];
         $idcategorie = $GLOBALS['22'];
         $idmembre=$_SESSION['idmembre'];
         insert_panier($idfruit, $idmembre, $idcategorie, $date);
         $delai=1;
         $url="/NeighborFood/controler/achat/c_achat.php";
         header("Refresh: $delai;url=$url");
    }
    if(isset($_POST['3'])){
        $date = date("Y-m-d H:m:s");
        $idfruit = $GLOBALS['31'];
        $idcategorie = $GLOBALS['32'];
        $idmembre=$_SESSION['idmembre'];
        insert_panier($idfruit, $idmembre, $idcategorie, $date);
        $delai=1;
        $url="/NeighborFood/controler/achat/c_achat.php";
        header("Refresh: $delai;url=$url");
     }
	require_once "../../view/footer/v_footer.php";
	
?>