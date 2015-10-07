<head>
<meta charset="iso-8859-1"/>

 
	  <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
          
 <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	  <script type="text/javascript" src="codejs.js"></script>
</head> 
<?php



	try
	{
		$bdd= new PDO("mysql:host=localhost;dbname=contextesms", "root", "");
	}
	catch(PDOException $e)
	{
		$bdd = null;
		echo 'Grosse erreur : ' .$e -> getMessage();
	}
	return($bdd);



	


 
	


?>