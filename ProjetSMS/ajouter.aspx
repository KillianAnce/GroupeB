<%@ Page Language="C#" AutoEventWireup="true" CodeFile="ajouter.aspx.cs" Inherits="ajouter" %>

<!DOCTYPE html>



<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Ajouter un arbitre</title>
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

   <form runat="server" class="s6" name="formajouter" >
       <div class="row">            
                <div class="input-field col s3">                 
                       <input id="nomarb" type="text" class="validate" runat="server"   />
                       <label for="nomarb"><i class="material-icons left">account_circle</i>Nom de l'arbitre :</label><asp:Label ID="labelnomarb" runat="server" Text=""></asp:Label>                  
                </div>
        </div>

       <div class="row">
                <div class="input-field col s3">
                        <input id="prenomarb" type="text" class="validate" runat="server"  />
                        <label for="prenomarb"><i class="material-icons left">perm_identity</i>Prénom de l'arbitre :</label><asp:Label ID="labelprenomarb" runat="server" Text=""></asp:Label>
                </div>
        </div>

       <div class="row">
                <div class="input-field col s3">
                        <input id="adressearb" type="text" class="validate" runat="server"/>
                        <label for="adressearb"><i class="material-icons left">description</i>Adresse :</label><asp:Label ID="labeladressearb" runat="server" Text=""></asp:Label>
                </div>
        </div>

       <div class="row">
                <div class="input-field col s3">
                        <input id="villearb" type="text" class="validate" runat="server"  />
                        <label for="villearb"><i class="material-icons left">location_on</i>Ville :</label><asp:Label ID="labelvillearb" runat="server" Text=""></asp:Label>
                </div>
        </div>
        
       <div class="row">
                <div class="input-field col s3">
                        <input id="paysarb" type="text" class="validate" runat="server" />
                        <label for="paysarb"><i class="material-icons left">my_location</i>Pays :</label><asp:Label ID="labelpaysarb" runat="server" Text=""></asp:Label>
                </div>
        </div>

        <div class="row">
                <div class="input-field col s3">
                        <input id="telarb" type="text" class="validate" runat="server"  />
                        <label for="telarb"><i class="material-icons left">call</i>Téléphone :</label><asp:Label ID="labeltelarb" runat="server" Text=""></asp:Label>
                </div>
        </div>

       <div class="row">
                <div class="input-field col s3">
                        <input id="emailarb" type="text" class="validate" runat="server" />
                        <label for="emailarb"><i class="material-icons left">email</i>Adresse e-mail :</label><asp:Label ID="labelemailarb" runat="server" Text=""></asp:Label>
                </div>
        </div>

        <div class="row">
                <div class="input-field col s3">
                        <input id="dnarb" type="text" class="validate" runat="server"  />
                        <label for="dnarb"><i class="material-icons left">today</i>Date de naissance :</label><asp:Label ID="labeldnarb" runat="server" Text=""></asp:Label>
                </div>
        
        </div>

       <div class="row">
           <asp:Button ID="BoutonEnvoi" Text="Ajouter" runat="server" CssClass=" btn waves-light light-blue darken-4" style="margin-left: 10px;" OnClick="BoutonEnvoi_Click" />    
       </div>       
       
    </form>


 

    


</body>
</html>
