<?php
include('init.php');
?>
<script type="text/javascript" src="codejs.js"></script>
<?php

		// Récuperation des variables du formulaire dans de nouvelles variables PHP
		
		$nom = $_POST['nomarb'];
		$prenom = $_POST['prenomarb'];
		$adresse = $_POST['adressearb'];
		$ville = $_POST['villearb'];
		$pays = $_POST['paysarb'];
		$tel = $_POST['telarb'];
		$email = $_POST['emailarb'];
		$dn = $_POST['dnarb'];
	
	// On test de savoir si les variables dans le formulaire sont différents de null pour exécuter la requête d'ajout.
	
	if (!empty($_POST['nomarb']) && !empty($_POST['prenomarb']) && !empty($_POST['adressearb']) && !empty($_POST['villearb']) && !empty($_POST['paysarb']) && !empty($_POST['telarb']) && !empty($_POST['emailarb']) && !empty($_POST['dnarb']))
	
		
		{
				
			/* Requête préparé d'ajout d'un arbitre */
			 $req = $bdd -> prepare('INSERT INTO arbitre VALUES (NULL, :ARBI_NOM, :ARBI_PRENOM, :ARBI_ADRESSE, :ARBI_VILLE, :ARBI_PAYS, :ARBI_TELEPHONE, :ARBI_COURRIEL, :ARBI_DATENAISSANCE, 1)');
						 
				/* On doit lié les paramètres avec un nom de variable spécifique*/					
				$req -> bindParam(':ARBI_NOM', $nom);
				$req -> bindParam(':ARBI_PRENOM', $prenom);
				$req -> bindParam(':ARBI_ADRESSE', $adresse);
				$req -> bindParam(':ARBI_VILLE', $ville);
				$req -> bindParam(':ARBI_PAYS', $pays);
				$req -> bindParam(':ARBI_TELEPHONE', $tel);
				$req -> bindParam(':ARBI_COURRIEL', $email);
				$req -> bindParam(':ARBI_DATENAISSANCE', $dn);
		
				/*On exécute la requête prépare*/
				$req -> execute();
				
				/* On ferme la requête préparé*/
			    $req -> CloseCursor();
				/* Renvoie vers la page principale*/ 
				sleep(2);
				header('Location: index.php');
			 
		}
/* Si il y a au moins un champs vide alors*/
	else
		{					
			sleep(1);
			header('Location: index.php#ajouter');				
		}
		
		

		
			
			
?>