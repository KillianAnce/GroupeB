<?php
session_start();
include('init.php');

?>
<script type="text/javascript" src="codejs.js"></script>
<?php

		
		// Récuperation des variables du formulaire dans de nouvelles variables PHP
		$num_arb = $_SESSION['choix'];
		$nom = $_POST['nomarb'];
		$prenom = $_POST['prenomarb'];
		$adresse = $_POST['adressearb'];
		$ville = $_POST['villearb'];
		$pays = $_POST['paysarb'];
		$tel = $_POST['telarb'];
		$email = $_POST['emailarb'];
		$dn = $_POST['dnarb'];
		
	
	// On test de savoir si les variables dans le formulaire sont différents de null pour exécuter la requête de modification.
	
	if (!empty($_POST['nomarb']) && !empty($_POST['prenomarb']) && !empty($_POST['adressearb']) && !empty($_POST['villearb']) && !empty($_POST['paysarb']) && !empty($_POST['telarb']) && !empty($_POST['emailarb']) && !empty($_POST['dnarb']))
	
		
		{

			$req = "UPDATE arbitre 
			SET ARBI_NOM = '".$nom."', ARBI_PRENOM = '".$prenom."', ARBI_ADRESSE ='".$adresse."', ARBI_VILLE = '".$ville."' , ARBI_PAYS = '".$pays."', ARBI_TELEPHONE = '".$tel."', ARBI_COURRIEL = '".$email."', ARBI_DATENAISSANCE = '".$dn."' WHERE ARBI_NOLICENCE = '".$num_arb."'";

		    // Prepare statement
		    $Mod = $bdd->prepare($req);

		    // execute the query
		    $Mod->execute();
				/* Renvoie vers la page principale*/ 
				sleep(2);
				header('Location: index.php');
			 
		}
/* Si il y a au moins un champs vide alors*/
	else
		{					
			sleep(1);
			 header('Location: index.php#modifier');				
		}
		
		

		
			
			
?>