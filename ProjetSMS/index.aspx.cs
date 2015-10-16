using System;
using System.Data.SqlClient;

public partial class index : System.Web.UI.Page
{
    

    protected void Page_Load(object sender, EventArgs e)
    {


        /// <summary>
        /// Description résumée de Connexion
        /// </summary>


        SqlConnection con = new SqlConnection("Data Source=(LocalDB)\\MSSQLLocalDB;AttachDbFilename=u:\\Visual Studio 2015\\WebSites\\ProjetSMS\\App_Data\\BaseContexte.mdf;Integrated Security=True");
        SqlCommand Rq;
        SqlDataReader reader;

        con.Open();

        Rq = new SqlCommand("SELECT * FROM arbitre", con);
        reader = Rq.ExecuteReader();


        reader.Close();
        con.Close();

       
    }



   


}
   
