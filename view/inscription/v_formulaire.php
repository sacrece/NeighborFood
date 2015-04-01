       
	<head>
	   
        <link rel="stylesheet" href="/NeighborFood/view/css/inscription/inscription.css" /> <!-- associe cette page au page css stylessheet-->
        
    </head>
		<h2>INSCRIPTION</h2>
<aside class="profil">

</aside>
		

	
		<section>		
		<form name="formulaire" method="post" action="/NeighborFood/controler/inscription/c_inscription.php">
		
		<table>		
			<tr><td><label for="nom">Nom</label> : <input type="text" name="nom" id="nom" placeholder="Nom"/></tr></td>
			<tr><td><label for="prenom">Prénom</label> : <input type="text" name="prenom" id="prenom" placeholder="Prénom"/></tr></td>
			<tr><td><label for="mail">Adresse mail</label> : <input type="mail" name="mail" id="mail" placeholder="adresse@email.com"/></tr></td>
			<tr><td><label for="adresse">Telephone</label> : <input type="text" name="telephone" id="adresse" placeholder="07 77 77 77 77"/></tr></td>
			<tr><td><label for="postal">Adresse</label> : <input type="tel" name="adresse" id="postal" placeholder="35 rue du chateau 53600 trou-ville"/></tr></td>
			<tr><td><label for="mdp">Mot de passe</label> : <input type="password" name="mdp" id="mdp" placeholder="MotDePasse"/></tr></td>
			
		</table>
			<input type="reset" name="stop" value="Annuler" class="bouton"/>
			<input type="submit" name="valider" value="Inscription" class="bouton"/>
		
		
		</form>
		
