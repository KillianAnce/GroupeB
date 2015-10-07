<?php
include('init.php');

	var_dump(isset($_POST['nomarb']) == "" && isset($_POST['prenomarb']) == "" && isset($_POST['adressearb']) == "" && isset($_POST['villearb']) == "" && isset($_POST['paysarb']) == "" && isset($_POST['telarb']) == "" && isset($_POST['emailarb']) == "" && isset($_POST['dnarb']) && 
	isset($_POST['actifarb']) == "" );

	if( (isset($_POST['nomarb'])) && (isset($_POST['prenomarb'])) && (isset($_POST['adressearb'])) && (isset($_POST['villearb'])) && (isset($_POST['paysarb'])) && (isset($_POST['telarb'])) && (isset($_POST['emailarb'])) && (isset($_POST['dnarb'])) && (isset($_POST['actifarb'])))
{
		
	
		
		 $nom = $_POST['nomarb'];
		 $prenom = $_POST['prenomarb'];
		 $adresse = $_POST['adressearb'];
		 $ville = $_POST['villearb'];
		 $pays = $_POST['paysarb'];
		 $tel = $_POST['telarb'];
		 $email = $_POST['emailarb'];
		 $dn = $_POST['dnarb'];
		$actifarb = $_POST['actifarb'];
		
		
		if ($_POST['actifarb'] == "On" )
			{
			(bool)$actif = 1;
			}
		else if($_POST['actifarb']== "Off" )
			{
			(bool)$actif = 0;
			}
		
	
		 $requeteajouter = ('INSERT INTO arbitre VALUES (NULL, '.$nom.', '.$prenom.', '.$adresse.', '.$ville.', '.$pays.', '.$tel.', '.$email.', '.$dn.', '.$actif.')');
					 
			// $req -> bindParam(':ARBI_NOM', $nom);
			// $req -> bindParam(':ARBI_PRENOM', $prenom);
			// $req -> bindParam(':ARBI_ADRESSE', $adresse);
			// $req -> bindParam(':ARBI_VILLE', $ville);
			// $req -> bindParam(':ARBI_PAYS', $pays);
			// $req -> bindParam(':ARBI_TELEPHONE', $tel);
			// $req -> bindParam(':ARBI_COURRIEL', $email);
			// $req -> bindParam(':ARBI_DATENAISSANCE', $dn);
			// $req -> bindParam(':ARBI_ACTIF', $actifarb);
		

	
		$req = $bdd -> query($requeteajouter);
		
		 $bdd -> exec($req);
		
		$req -> CloseCursor();
		
}



sleep(1);
header('Location: index.php');


?>