<?php
session_start();

include('init.php');

		//$activer = $_SESSION['activer'];
		$numlicence = $_SESSION['choixactif'];
		//Requête de mise à jour de l'actif de l'arbitre sélectionné.
		$req = "UPDATE arbitre 
			SET ARBI_ACTIF = 1 WHERE ARBI_NOLICENCE = '".$numlicence."'";
		
		    // Prepare statement
		    $activer = $bdd->prepare($req);

		    // execute the query
		    $activer->execute();
				/* Renvoie vers la page principale*/ 
			 sleep(1);
			 header('Location: index.php');
			 

?>