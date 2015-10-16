using System;
using System.Data.SqlClient;

public partial class ajouter : System.Web.UI.Page
{
   

    protected void Page_Load(object sender, EventArgs e)
    {

        


    }

   protected void BoutonEnvoi_Click(object sender, EventArgs e)
    {

        string nom, prenom, adresse, ville, pays, datenaissance, email;

        nom = Request.Form["nomarb"];
        prenom = Request.Form["prenomarb"];
        adresse = Request.Form["adressearb"];
        ville = Request.Form["villearb"];
        pays = Request.Form["paysarb"];
        datenaissance = Request.Form["dnarb"];
        email = Request.Form["emailarb"];


        if (nom == "")
        {
            labelnomarb.ForeColor = System.Drawing.Color.Red;
            labelnomarb.Text = "Champs obligatoire!";
        }
        else { labelnomarb.Text = ""; }

        if (prenom == "")
        {
            labelprenomarb.ForeColor = System.Drawing.Color.Red;
            labelprenomarb.Text = "Champs obligatoire!";
        }
        else { labelprenomarb.Text = ""; }

        if (adresse == "")
        {
            labeladressearb.ForeColor = System.Drawing.Color.Red;
            labeladressearb.Text = "Champs obligatoire!";
        }
        else { labeladressearb.Text = ""; }

        if (ville == "")
        {
            labelvillearb.ForeColor = System.Drawing.Color.Red;
            labelvillearb.Text = "Champs obligatoire!";

        }
        else { labelvillearb.Text = ""; }

        if (pays == "")
        {
            labelpaysarb.ForeColor = System.Drawing.Color.Red;
            labelpaysarb.Text = "Champs obligatoire!";

        }
        else { labelpaysarb.Text = ""; }

        if (datenaissance == "")
        {
            labeldnarb.ForeColor = System.Drawing.Color.Red;
            labeldnarb.Text = "Champs obligatoire!";

        }
        else { labeldnarb.Text = ""; }

        if (email == "")
        {
            labelemailarb.ForeColor = System.Drawing.Color.Red;
            labelemailarb.Text = "Champs obligatoire!";
        }
        else { labelemailarb.Text = ""; }


        if(nom != "" && prenom != "" & adresse != "" && ville != "" && pays != "" && datenaissance != "" && email != "")
        {
            /// <summary>
            /// Description résumée de Connexion
            /// </summary>


            SqlConnection con = new SqlConnection("Data Source=(LocalDB)\\MSSQLLocalDB;AttachDbFilename=u:\\Visual Studio 2015\\WebSites\\ProjetSMS\\App_Data\\BaseContexte.mdf;Integrated Security=True");
            SqlCommand Rq;
            SqlDataReader reader;

            con.Open();

            Rq = new SqlCommand("INSERT INTO arbitre VALUES (null,  ,", con);
            reader = Rq.ExecuteReader();


            reader.Close();
            con.Close();


        }



    }
}








