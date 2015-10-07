<!DOCTYPE html>
<head>
	<title>
			Accueil
	</title>	
</head>

<body>


<?php
include('init.php');
?>

 <script>
	// function actualiserafficher(div_a_actualiser)
// {
// $("#afficher").load("index.php #afficher");
// }




     </script> 


  <div class="row">
    <div class="col s12">
      <ul class="tabs">
	    <li class="tab col s3"><a href="#afficher" onclick="actualiserafficher();" class="active">Afficher les arbitres</a></li>
        <li class="tab col s3"><a href="#ajouter">Ajouter un arbitre</a></li>
        <li class="tab col s3"><a href="#chercher">Chercher un arbitre</a></li>
        <li class="tab col s3"><a href="#modifier">Modifier un arbitre</a></li> 		
        <li class="tab col s3"><a href="#desactiver">Désactiver un arbitre</a></li>
      </ul>
    </div>

	<br />
	<br />
	<br />

<div id="afficher">
<?php
include('init.php');
$requeteaff = $bdd->query('SELECT ARBI_PRENOM,ARBI_NOM,ARBI_ADRESSE,ARBI_VILLE,ARBI_PAYS,ARBI_TELEPHONE,ARBI_COURRIEL FROM arbitre');
?>
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
						</tr>
					</thead>
	<tbody>
			
<?php
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
				echo '</tr>';
	 		}		
	 	 $requeteaff -> closeCursor();
?> 






</tbody>  
</table>
</div>


<div id="ajouter">
	<div class="row">
		<form class="col s6" method="POST" action="ajouter.php">
			<div class="row">
				<div class="input-field col s6">
					<input name="nomarb" type="text" class="validate">
					<label for="nomarb"><i class="material-icons left">account_circle</i>Nom de l'arbitre :</label>
				</div>
			</div>
			
			<div class="row">
				<div class="input-field col s6">
					<input name="prenomarb" type="text" class="validate">
					<label for="prenomarb"><i class="material-icons left">perm_identity</i>Prénom de l'arbitre :</label>
				</div>
			</div>
			
			<div class="row">
				<div class="input-field col s6">
					<input name="adressearb" type="text" class="validate">
					<label for="adressearb"><i class="material-icons left">description</i>Adresse :</label>
				</div>
			</div>
			
			<div class="row">
				<div class="input-field col s6">
					<input name="villearb" type="text" class="validate">
					<label for="villearb"><i class="material-icons left">location_on</i>Ville :</label>
				</div>
			</div>
			
			<div class="row">
				<div class="input-field col s6">
					<input name="paysarb" type="text" class="validate">
					<label for="paysarb"><i class="material-icons left">my_location</i>Pays :</label>
				</div>
			</div>
			
			<div class="row">
				<div class="input-field col s6">
					<input name="telarb" type="text" class="validate">
					<label for="telarb"><i class="material-icons left">call</i>Téléphone :</label>
				</div>
			</div>
			
			<div class="row">
				<div class="input-field col s6">
					<input name="emailarb" type="text" class="validate">
					<label for="emailarb"><i class="material-icons left">email</i>Adresse e-mail :</label>
				</div>
			</div>
			
			<div class="row">
				<div class="input-field col s6">
					<input name="dnarb" type="text" class="validate">
					<label for="dnarb"><i class="material-icons left">today</i>Date de naissance :</label>
				</div>
			</div>
			
			Actif?	
			<div class="row">
				<div class="switch">
					<label>
						Non
							<input type="checkbox" name="actifarb">
								<span class="lever"></span>
						Oui
					</label>
				</div>
			</div>
			
			
			<button class="btn waves-effect waves-yellow red darken-3" type="submit" name="action" href="index.php" onClick="toast()">Ajouter
				<i class="material-icons large right">send</i>
			</button>
			
		</form>	
	</div>	

	
</div>

<script>
		function toast(){
		Materialize.toast("L'arbitre à bien été ajouté!", 10000);	
}		
	</script>

<br />
<div id="chercher">
	<?php
		$chercher ='SELECT ARBI_NOLICENCE, ARBI_NOM, ARBI_PRENOM FROM ARBITRE ORDER BY ARBI_NOLICENCE';
	?>
<form method="GET" action="">
	 <div class='input-field col s2'>
		<div class="row">
			<select id ="changement" class="browser-default" name="arbitrechoisi">
					<option value="" disabled selected>Choisir un arbitre:</option>
						<?php	
							foreach ($bdd->query($chercher) as $tuple)
							echo '<option value="'.$tuple['ARBI_NOLICENCE'].'">'.$tuple['ARBI_NOLICENCE']. ' ' .$tuple['ARBI_NOM'].' '.$tuple['ARBI_PRENOM'].'</option>';
							$requetechercher = $bdd->query('SELECT * FROM arbitre WHERE ARBI_NOLICENCE = '.$_POST['abrbitrechoisi']);
						?>
			</select>	
		</div>
	</div>
</form>
	
	<br />
	<br />
	<br />
	<br />


</div>
</div>
</body>
