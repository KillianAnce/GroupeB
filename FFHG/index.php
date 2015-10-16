<!DOCTYPE html>
<head>
	<title>
			Accueil
	</title>	
</head>
<script> type="text/javascript" src="codejs.js"</script>
<body>


<?php
include('init.php');
session_start();
?>
<!-- Permet la gestion des onglets avec l'ajout d'un tab lorsque l'on clique sur l'une des tabs -->
  <div class="row">
    <div class="col s12">
      <ul class="tabs">
	    <li class="tab col s3"><a href="#afficher" class="active">Afficher les arbitres</a></li>
        <li class="tab col s3"><a href="#ajouter">Ajouter un arbitre</a></li>
        <li class="tab col s3"><a href="#chercher">Chercher un arbitre</a></li>
        <li class="tab col s3"><a href="#modifier">Modifier un arbitre</a></li> 		
        <li class="tab col s3"><a href="#desactiver">Désactiver un arbitre</a></li>
      </ul>
    </div>

	<br />
	<br />
	<br />
<!-- Affichage de l'onglet afficher -->
<div id="afficher">
<?php
include('init.php');
// Requête utilisé pour récupérer les valeurs des champs à afficher.
$requeteaff = $bdd->query('SELECT ARBI_PRENOM,ARBI_NOM,ARBI_ADRESSE,ARBI_VILLE,ARBI_PAYS,ARBI_TELEPHONE,ARBI_COURRIEL,ARBI_DATENAISSANCE FROM arbitre');
?>
<!-- Création des entêtes du tableau -->
<table class="bordered centered">
					<thead>
						<tr>
							<th>Prénom</th>
							<th>Nom</th>
							<th>Adresse</th>
							<th>Ville</th>
							<th>Pays</th>
							<th>Téléphone</th>
							<th>Courriel</th>
							<th>Date de naissance</th>
						</tr>
					</thead>
	<tbody>
			
<?php
		//Boucle pour l'affichage des valeurs dans les champs correspondants
	 	while ($donnees = $requeteaff->fetch())
			{		
				echo '<tr>';
				echo '<td>' . $donnees['ARBI_PRENOM'] . '</td>';
				echo '<td>' . $donnees['ARBI_NOM'] . '</td>';
				echo '<td>' . $donnees['ARBI_ADRESSE'] . '</td>';
				echo '<td>' . $donnees['ARBI_VILLE'] . '</td>';
				echo '<td>' . $donnees['ARBI_PAYS'] . '</td>';
				echo '<td>' . $donnees['ARBI_TELEPHONE'] . '</td>';
				echo '<td>' . $donnees['ARBI_COURRIEL'] . '</td>';
				echo '<td>' . $donnees['ARBI_DATENAISSANCE'] . '</td>';
				echo '</tr>';
	 		}		
	 	 $requeteaff -> closeCursor();
?> 






</tbody>  
</table>
</div>

<!-- Affichage de l'onglet ajouter -->
<div id="ajouter">

	
	<!-- Création de tous les champs nécessaires à la saisie d'un arbitre -->
	<div class="row">
		<form class="col s6" method="POST" action="ajouter.php" name="formajouter">
			<div class="row">
				<div class="input-field col s6">
					<input name="nomarb" type="text" id="nomarb" class="validate">
					<label for="nomarb"><i class="material-icons left">account_circle</i>Nom de l'arbitre :</label>
				</div>
			</div>
			
			<div class="row">
				<div class="input-field col s6">
					<input name="prenomarb" type="text" id="prenomarb" class="validate">
					<label for="prenomarb"><i class="material-icons left">perm_identity</i>Prénom de l'arbitre :</label>
				</div>
			</div>
			
			<div class="row">
				<div class="input-field col s6">
					<input name="adressearb" type="text" id="adressearb" class="validate">
					<label for="adressearb"><i class="material-icons left">description</i>Adresse :</label>
				</div>
			</div>
			
			<div class="row">
				<div class="input-field col s6">
					<input name="villearb" type="text" id="villearb" class="validate">
					<label for="villearb"><i class="material-icons left">location_on</i>Ville :</label>
				</div>
			</div>
			
			<div class="row">
				<div class="input-field col s6">
					<input name="paysarb" type="text" id="paysarb" class="validate">
					<label for="paysarb"><i class="material-icons left">my_location</i>Pays :</label>
				</div>
			</div>
			
			<div class="row">
				<div class="input-field col s6">
					<input name="telarb" type="text" id="telarb" class="validate">
					<label for="telarb"><i class="material-icons left">call</i>Téléphone :</label>
				</div>
			</div>
			
			<div class="row">
				<div class="input-field col s6">
					<input name="emailarb" type="text" id="emailarb" class="validate">
					<label for="emailarb"><i class="material-icons left">email</i>Adresse e-mail :</label>
				</div>
			</div>
			
			<div class="row">
				<div class="input-field col s6">
					<input name="dnarb" type="text" id="dnarb" class="validate">
					<label for="dnarb"><i class="material-icons left">today</i>Date de naissance :</label>
				</div>
			</div>
			<!-- Bouton pour envoyer la requête INSERT INTO qui se trouve dans le fichier ajouter.php -->
			<button class="btn waves-effect waves-yellow red darken-3" id="bouton" type="submit" name="action" href="index.php">Ajouter
				<i class="material-icons large right">send</i>
			</button>
			
		</form>	
	</div>	

	
</div>

<br />
<!-- Onglet chercher  -->
<div id="chercher">
	<?php
		$chercher ='SELECT ARBI_NOLICENCE, ARBI_NOM, ARBI_PRENOM FROM ARBITRE ORDER BY ARBI_NOLICENCE';
	?>
<form method="POST" action="index.php#chercher">
	 <div class='input-field col s2'>
		<div class="row">
			<!-- Création de la liste déroulante pour sélectionner un arbitre -->
			<select id ="changement" class="browser-default" name="arbitrechoisi">
					<option value="" disabled selected>Choisir un arbitre:</option>
						<?php
							// Valeur affiché dans la liste déroulante
							foreach ($bdd->query($chercher) as $tuple)
							echo '<option value="'.$tuple['ARBI_NOLICENCE'].'">'.$tuple['ARBI_NOLICENCE']. ' ' .$tuple['ARBI_NOM'].' '.$tuple['ARBI_PRENOM'].'</option>';
							$requetechercher = $bdd->query('SELECT * FROM arbitre WHERE ARBI_NOLICENCE = '.$_POST['arbitrechoisi']);
						?>
			</select>	
		</div>

	 </div>
		
	<br />
	<br />
	<br />
	<br />
	
		<div class="left col">
		<button class="btn waves-effect waves-yellow red darken-3" type="submit" name="aaa">Chercher
				<i class="material-icons large right">send</i>
		</button>
		</div>
	<?php
		//Condition permettant de ne rien afficher lorsque l'on n'a pas choisi d'arbitre
			// Lorsque l'on a sélectionné un arbitre on va afficher une table avec les mêmes champs que sur l'onglet afficher
		if (empty($_POST['arbitrechoisi']))
		{
		
		
		
		}
		
		else
		{
	
		$infoarb =  $bdd -> query('SELECT * FROM arbitre WHERE ARBI_NOLICENCE = '.$_POST["arbitrechoisi"].'');
	?>

	
	<br />
	<br />
	<!-- Permet d'afficher les entêtes des champs -->
	<table class="bordered centered">
					<thead>
						<tr>
							<th>Numéro de licence</th>
							<th>Nom</th>
							<th>Prénom</th>							
							<th>Adresse</th>
							<th>Ville</th>
							<th>Pays</th>
							<th>Téléphone</th>
							<th>Courriel</th>
							<th>Date de naissance</th>
							<th>Actif?</th>
						</tr>
					</thead>
	<tbody>
			
<?php

				//On récupère les valeurs de ARBI_ACTIF 
				//Si la valeur est égale à 1 on va marquer "Oui" et "Non" dans l'autre cas
				$infos = $infoarb -> fetch();
				if ($infos['ARBI_ACTIF'] == 1)
				{
						$arbitreactif = "Oui";
				
				}
				else
				{
				
						$arbitreactif = "Non";
				}
				echo '<tr>';
				echo '<td>' . $infos['ARBI_NOLICENCE'] . '</td>';
				echo '<td>' . $infos['ARBI_NOM'] . '</td>';
				echo '<td>' . $infos['ARBI_PRENOM'] . '</td>';				
				echo '<td>' . $infos['ARBI_ADRESSE'] . '</td>';
				echo '<td>' . $infos['ARBI_VILLE'] . '</td>';
				echo '<td>' . $infos['ARBI_PAYS'] . '</td>';
				echo '<td>' . $infos['ARBI_TELEPHONE'] . '</td>';
				echo '<td>' . $infos['ARBI_COURRIEL'] . '</td>';
				echo '<td>' . $infos['ARBI_DATENAISSANCE'] . '</td>';
				echo '<td>' . $arbitreactif . '</td>';
				echo '</tr>';
			
		}
			?>
</tbody>
</table>

</form>
</div>

<!-- Onglet modifier -->

<div id="modifier">
	<?php
		$Modif ='SELECT ARBI_NOLICENCE, ARBI_NOM, ARBI_PRENOM FROM ARBITRE ORDER BY ARBI_NOLICENCE';
	?>

<form method="POST" action="index.php#modifier"> 
	 <div class='input-field col s2'>
		<div class="row">
			<!-- Liste déroulante pour choisir l'arbitre à modifier-->
			<select id ="changement" class="browser-default" name="ChoixModif">
					<option value="" disabled selected>Choisir un arbitre:</option>
						<?php	
							foreach ($bdd->query($Modif) as $tupl)
							echo '<option value="'.$tupl['ARBI_NOLICENCE'].'">'.$tupl['ARBI_NOLICENCE']. ' ' .$tupl['ARBI_NOM'].' '.$tupl['ARBI_PRENOM'].'</option>';
							$requetemodifier = $bdd->query('SELECT * FROM arbitre WHERE ARBI_NOLICENCE = '.$_POST['ChoixModif']);
						?>
			</select>
		</div>
	</div>
	
	<br />
	<br />
	<br />
	<br />
	
			<div class="left col">
				<button class="btn waves-effect waves-yellow red darken-3" type="submit" >Chercher
					<i class="material-icons large right">send</i>
			</button>
			</div>
</form>
	<?php
		// Condition permettant de ne rien afficher lorsque l'on n'a pas sélectionné d'onglet.	
		if (empty($_POST['ChoixModif']))
		{
		
		
		
		}
		
		else
		{
	
		$infomod =  $bdd -> query('SELECT * FROM arbitre WHERE ARBI_NOLICENCE = '.$_POST["ChoixModif"].'');
		$testdd = $infomod -> fetch();
		?>
		
		<!-- Même principe que dans l'onglet ajouter, on rajoute les champs nécessaires pour la modification. -->
		
		<form class="s3" method="POST" action="modifier.php">

			
				<br />
				<br />
				<br />
			<div class="row">
				<div class="input-field s4 col">
					<input name="nomarb" type="text" id="nomarb" class="validate" value="<?php echo $testdd['ARBI_NOM']; ?> ">
						<label for="nomarb"><i class="material-icons left">account_circle</i>Nom de l'arbitre :</label>
				</div>
			</div>
			
			<div class="row">
				<div class="input-field s4 col">
					<input name="prenomarb" type="text" id="prenomarb" class="validate" value="<?php echo $testdd['ARBI_PRENOM']; ?>">
					<label for="prenomarb"><i class="material-icons left">perm_identity</i>Prénom de l'arbitre :</label>
				</div>
			</div>
			
			<div class="row">
				<div class="input-field s4 col">
					<input name="adressearb" type="text" id="adressearb" class="validate" value="<?php echo $testdd['ARBI_ADRESSE']; ?>">
					<label for="adressearb"><i class="material-icons left">description</i>Adresse :</label>
				</div>
			</div>
			
			<div class="row">
				<div class="input-field s4 col">
					<input name="villearb" type="text" id="villearb" class="validate" value="<?php echo $testdd['ARBI_VILLE']; ?>">
					<label for="villearb"><i class="material-icons left">location_on</i>Ville :</label>
				</div>
			</div>
			
			<div class="row">			
				<div class="input-field s4 col">
					<input name="paysarb" type="text" id="paysarb" class="validate" value="<?php echo $testdd['ARBI_PAYS']; ?>">
					<label for="paysarb"><i class="material-icons left">my_location</i>Pays :</label>
				</div>
			</div>
				<div class="row">
				<div class="input-field s4 col">
					<input name="telarb" type="text" id="telarb" class="validate" value="<?php echo $testdd['ARBI_TELEPHONE']; ?>">
					<label for="telarb"><i class="material-icons left">call</i>Téléphone :</label>
				</div>
			</div>
			
			<div class="row">
				<div class="input-field s4 col">
					<input name="emailarb" type="text" id="emailarb" class="validate" value="<?php echo $testdd['ARBI_COURRIEL']; ?>">
					<label for="emailarb"><i class="material-icons left">email</i>Adresse e-mail :</label>
				</div>
			</div>
			
			 <div class="row">
				<div class="input-field s4 col">
					<input name="dnarb" type="text" id="dnarb" class="validate" value="<?php echo $testdd['ARBI_DATENAISSANCE']; ?>">
					<label for="dnarb"><i class="material-icons left">today</i>Date de naissance :</label>
				</div>
			</div>
			<!-- Bouton permettant d'enclencher la requête UPDATE  -->
			<div class="left col">
				<button class="btn waves-effect waves-yellow red darken-3" id="bouton" type="submit" name="action" action="modifier.php">Modifier
					<i class="material-icons large right">send</i>
				</button>
			</div>
			
		<?php
		
			//Utilisation d'une session pour pouvoir récupérer la valeur de $_POST['ChoixModif'];
			$_SESSION['choix']= $_POST['ChoixModif']; 
		
		?>

	
	<br />
	<br />
	
		

<?php
	

	}
			?>


</form>
</div>

<!-- Onglet desactiver -->
<div id="desactiver">
<?php
	// Requête pour récupérer toutes les données nécesaire
	$chercher ='SELECT ARBI_NOLICENCE, ARBI_NOM, ARBI_PRENOM FROM ARBITRE ORDER BY ARBI_NOLICENCE';
	$actif = 'SELECT ARBI_ACTIF FROM ARBITRE';
	?>
<form method="POST" action="index.php#desactiver"> 
	 <div class='input-field col s2'>
		<div class="row">
			<select id ="changement" class="browser-default" name="ArbitreActif">
					<option value="" disabled selected>Choisir un arbitre:</option>
						<?php
							// 
							foreach ($bdd->query($chercher) as $tuple)
							echo '<option value="'.$tuple['ARBI_NOLICENCE'].'">'.$tuple['ARBI_NOLICENCE']. ' ' .$tuple['ARBI_NOM'].' '.$tuple['ARBI_PRENOM'].'</option>';
							$requetedesactiver = $bdd->query('SELECT ARBI_ACTIF FROM arbitre WHERE ARBI_NOLICENCE = '.$_POST['ArbitreActif'].'');
						?>
			</select>	
		</div>
	 </div>

	<br />
	<br />
	<br />
	<br />
			
		<div class="left col">
			<button class="btn waves-effect waves-yellow red darken-3" id="bouton" type="submit" name="action" href="index.php">Chercher
					<i class="material-icons large right">send</i>
			</button>
		</div>
</form>	
	
	<?php
	
		//Condition pour ne rien afficher quand rien n'est sélectionné
	
		if (empty($_POST['ArbitreActif']))
		{
		
		
		
		}
		
		else
		{
	
			$reqchercher = $bdd -> query('SELECT ARBI_NOM, ARBI_PRENOM, ARBI_ACTIF FROM ARBITRE WHERE ARBI_NOLICENCE = '.$_POST['ArbitreActif']);
			
			
	
	
	
	?>
	
	<table class="bordered centered">
					<thead>
						<tr>
							<th>Nom</th>
							<th>Prénom</th>			
							<th>Actif ?</th>	
						</tr>
					</thead>
					<tbody>
	
					<?php

				//On récupère les valeurs de ARBI_ACTIF 
				//Si la valeur est égale à 1 on va marquer "Oui" et "Non" dans l'autre cas
				$infosbase = $reqchercher -> fetch();
				
				if ($infosbase['ARBI_ACTIF'] == 1)
				{
						$arbitreactif = "Oui";
				
				}
				else
				{
				
						$arbitreactif = "Non";
				}
				echo '<tr>';
				echo '<td>' . $infosbase['ARBI_NOM'] . '</td>';
				echo '<td>' . $infosbase['ARBI_PRENOM'] . '</td>';
				echo '<td>' . $arbitreactif . '</td>';	
				
				$_SESSION['choixactif'] = $_POST['ArbitreActif'];

		
				
				$reqactif = $bdd -> query('SELECT ARBI_ACTIF FROM ARBITRE WHERE  ARBI_NOLICENCE = '.$_POST['ArbitreActif'].'');
				$actifarb = $reqactif -> fetch();

				// Affichage du bouton désactiver ou activer en fonction de la valeur de l'actif pour l'arbitre sélectionné.
				if($actifarb['ARBI_ACTIF'] == 0)
				{
				?>
				<form method="POST" action="activer.php">
					<button class="btn waves-effect waves-yellow red darken-3" id="bouton" type="submit" name="action" action="activer.php">Activer
						<i class="material-icons large right">send</i>
					</button>
				</form>
				<?php
				}
				else
				{
				?>
				<form method="POST" action="desactiver.php">
					<button class="btn waves-effect waves-yellow red darken-3" id="bouton" type="submit" name="action" action="desactiver.php">Désactiver
						<i class="material-icons large right">send</i>
					</button>
				</form>
				<?php
				}
				
		}		
				?>	
				
		</tbody>
		</table>
  			
</div>

</body>
