<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Index.aspx.cs" Inherits="index" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Accueil</title>
    <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>    
       <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css"/>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
          


</head>
<body>
  
    
    <nav>
    <div class="nav-wrapper light-blue darken-4">      
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="index.aspx">Afficher les arbitres</a></li>
        <li><a href="ajouter.aspx">Ajouter un arbitre</a></li>
        <li><a href="chercher.aspx">Chercher un arbitre</a></li>
         <li><a href="modifier.aspx">Modifier un arbitre</a></li>
         <li><a href="desactiver.aspx">Désactiver un arbitre</a></li>
      </ul>
    </div>
   </nav>

    <br />
    <br />

    <form runat="server">

        <asp:GridView ID="TableAffich" runat="server" AutoGenerateColumns="False" DataKeyNames="ARBI_NOLICENCE" DataSourceID="arbitre">
            <Columns>
       
                <asp:BoundField DataField="ARBI_NOM" HeaderText="Nom" SortExpression="ARBI_NOM" />
                <asp:BoundField DataField="ARBI_PRENOM" HeaderText="Prénom" SortExpression="ARBI_PRENOM" />
                <asp:BoundField DataField="ARBI_ADRESSE" HeaderText="Adresse" SortExpression="ARBI_ADRESSE" />
                <asp:BoundField DataField="ARBI_VILLE" HeaderText="Ville" SortExpression="ARBI_VILLE" />
                <asp:BoundField DataField="ARBI_PAYS" HeaderText="Pays" SortExpression="ARBI_PAYS" />
                <asp:BoundField DataField="ARBI_TELEPHONE" HeaderText="Téléphone" SortExpression="ARBI_TELEPHONE" />
                <asp:BoundField DataField="ARBI_COURRIEL" HeaderText="Courriel" SortExpression="ARBI_COURRIEL" />
                <asp:BoundField DataField="ARBI_DATENAISSANCE" HeaderText="Date de naissance" SortExpression="ARBI_DATENAISSANCE" />
            </Columns>
     

        </asp:GridView>
   
        <asp:SqlDataSource ID="arbitre" runat="server" ConnectionString="<%$ ConnectionStrings:ConnectionString %>" SelectCommand="SELECT [ARBI_NOLICENCE], [ARBI_NOM], [ARBI_PRENOM], [ARBI_ADRESSE], [ARBI_VILLE], [ARBI_PAYS], [ARBI_TELEPHONE], [ARBI_COURRIEL], [ARBI_DATENAISSANCE] FROM [arbitre]"></asp:SqlDataSource>
   
    </form>

   


</body>
</html>
