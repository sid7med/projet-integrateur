<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Datatable users</title> 
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap5.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.3/css/select.bootstrap5.min.css"/>  

<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>


</head>
<body>
  <header class="nav">
<?php
 include 'user-nav.php';
 ?>
  </header> 
<div class="content">
  <footer class="button">
    <button class="button-1" role="button"><a href="new-user.php"></a>Nouvel utilisateur</a></button>
    <button onClick="tableToExcel()" id="exportButton" class="exportButton">Exporter vers Excel</button>
  </footer>
  

  <div class="list">
    <table id="employee_grid" class="table table-striped" style="width:150%" cellspacing="0">
      <thead>
        <tr>
          <th>Email</th>
          <th>Password</th>
          <th>Rôle</th>
        </tr>
      </thead>
    </table>
  </div>
</div>
  <script type="text/javascript">
  $(document).ready(function() {
    $('#employee_grid').DataTable({
       "bProcessing": true,
       "serverSide": true,
       "select": true,
       "ajax":{
          url :"response.php", // json datasource
          type: "post",  // type of method  ,GET/POST/DELETE
          error: function(){
            console.log('error');
          }
        }
      });
  });
  </script>

  <script>
    document.getElementById('exportButton').addEventListener('click', function() {
      // Effectuer une requête AJAX pour récupérer les données du tableau depuis le serveur
      var xhr = new XMLHttpRequest();
      xhr.open('GET', 'users.php', true);
      xhr.responseType = 'blob'; // La réponse est un fichier binaire

      xhr.onload = function() {
          if (xhr.status === 200) {
              // Créer un lien de téléchargement
              var url = window.URL.createObjectURL(xhr.response);
              var a = document.createElement('a');
              a.href = url;
              a.download = 'users.xlsx'; // Nom du fichier à télécharger
              document.body.appendChild(a);
              a.click();
              window.URL.revokeObjectURL(url);
          }
      };

      xhr.send();
  });

  </script>
  
  <style>
    .content{
        margin-top: 60px;
    }
    /* CSS */
    .button-1 {
      background-color: #2e4bdd;
      border-radius: 8px;
      border-style: none;
      box-sizing: border-box;
      color: #FFFFFF;
      cursor: pointer;
      display: inline-block;
      font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-size: 10px;
      font-weight: 50;
      height: 40px;
      line-height: 20px;
      list-style: none;
      margin-right: 10px ;
      margin-left: 50px;
      outline: none;
      padding: 10px 30px;
      position: relative;
      text-align: center;
      text-decoration: none;
      transition: color 100ms;
      vertical-align: baseline;
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
      text-decoration: none;
    }
    .button-1 a {
    color: white; /* Définir la couleur du texte comme blanc */
    text-decoration: none; /* Supprimer le soulignement des liens */
}
    .button-1:hover,
    .button-1:focus {
      background-color: #2e4bdd;
      color: #FFFFFF;
    }
    .exportButton{
      background-color: #2dc725;
      border-radius: 8px;
      border-style: none;
      box-sizing: border-box;
      color: #FFFFFF;
      cursor: pointer;
      display: inline-block;
      font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-size: 10px;
      font-weight: 50;
      height: 40px;
      line-height: 20px;
      list-style: none;
      margin-right: 10px ;
      margin-left: -5px;
      outline: none;
      padding: 10px 30px;
      position: relative;
      text-align: center;
      text-decoration: none;
      transition: color 100ms;
      vertical-align: baseline;
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
      text-decoration: none;
      margin-top: 50px;
      margin-bottom: 20px;
    }
    
    .exportButton:hover,
    .exportButton:focus {
      background-color: #2dc725;
    
    }
    
  .list{
    margin-left: 300px;
    margin-right: 450px;
  }
  </style>  
</body>
</html>
<?php  
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = ""; // Assurez-vous de mettre votre mot de passe si vous en avez un
$dbname = 'p i';

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Récupération des données de la table users (email et role)
$sql = "SELECT email, role FROM users";
$result = $conn->query($sql);

echo "<table border='1'>
<tr>
<th>Email</th>
<th>Role</th>
</tr>";

// Affichage des données dans le tableau
while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td class='user-data'>" . $row['email'] . "</td>";
    echo "<td class='user-data'>" . $row['role'] . "</td>";
    echo "</tr>";
}

echo "</table>";

// Fermeture de la connexion à la base de données
$conn->close();   
?>

<script>  /*
// JavaScript pour rendre le tableau interactif
document.querySelectorAll('.user-data').forEach(item => {
    item.addEventListener('click', event => {
        // Récupérer les données de l'utilisateur
        var email = item.parentNode.querySelector(':first-child').textContent;
        var role = item.parentNode.querySelector(':nth-child(2)').textContent;

        // Afficher les données de l'utilisateur dans une alerte (vous pouvez personnaliser cela comme vous le souhaitez)
        alert("Email: " + email + "\nRole: " + role);
    });
});   */
</script>