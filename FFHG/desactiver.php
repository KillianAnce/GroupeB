<?php
session_start();

include('init.php');

		//$activer = $_SESSION['activer'];
		$numlicence = $_SESSION['choixactif'];
		// requête permettant de désactiver l'arbitre
		$req = "UPDATE arbitre 
			SET ARBI_ACTIF = 0 WHERE ARBI_NOLICENCE = '".$numlicence."'";
		
		    // Prepare statement
		    $desactiver = $bdd->prepare($req);

		    // execute the query
		    $desactiver->execute();
				/* Renvoie vers la page principale*/ 
				 sleep(1);
				 header('Location: index.php');
			 

?>