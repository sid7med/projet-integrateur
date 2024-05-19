<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   
    <title>users</title>
  
</head>
<body>
<?php include 'user-nav.php' ?>

<div class="excel">
    <a href="URL_de_votre_lien"><img src="excel.png" alt="Excel" ></a>
</div>
  <div class="logo">
     <!-- HTML !-->
     <button class="button-10" role="button"><a href="new-user.php" style="text-decoration: none; color: inherit;">Nouveau utilisateur</a></button>
     </div>
     <form action="#" class="search-form">
        <input type="search" name="search" placeholder="Search..." required>
        <button  type="submit">Search</button>
      </form>

      <table>
  <thead>
    <tr>
      <th>Login</th>
      <th>Email</th>
      <th>Rôle</th>
    </tr>
  </thead>
  <tbody>
  <?php
        // Connexion à la base de données
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "p_i";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Vérification de la connexion
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Requête SQL pour sélectionner les données de la table users
        $sql = "SELECT login, email, role FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Afficher les données dans le tableau
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["login"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["role"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Aucune donnée disponible</td></tr>";
        }
        $conn->close();
        ?>
  </tbody>
</table>
<style>

.excel img {
    max-width: 50px; /* Taille maximale pour la largeur */
    max-height: 50px; /* Taille maximale pour la hauteur */
    margin-left: 50px;
    margin-top: 20px;
    margin-right: 120px;
    margin-bottom: -230px;

}

/* CSS */
.button-10 {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 5px 15px;
  font-family: -apple-system, BlinkMacSystemFont, 'Roboto', sans-serif;
  border-radius: 6px;
  border: none;
text-decoration: none;
  color: #fff;
  background: linear-gradient(180deg, #007bff 0%, #007bff 100%);
   background-origin: border-box;
 box-shadow: 0px 0.5px 1.5px rgba(54, 122, 246, 0.25), inset 0px 0.8px 0px -0.25px rgba(255, 255, 255, 0.2); 
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  margin-left: 200px;
  margin-top: 100px;
  font-size: 14px;
  margin-bottom: -135px;
}

</style>



<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f1f1f1;
}  


.search-form {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 100px;
    margin-bottom: -100px;
    margin-left: 580px;
}

input[type="search"] {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px 0 0 5px;
    width: 350px;
    height: 38px;
    font-size: 16px;
    outline: none;
    border-radius: 20px;
}

button {
    padding: 6px 20px;
    background-color: #007bff;
    border: none;
    border-radius: 0 5px 5px 0;
    color: white;
    cursor: pointer;
    font-size: 16px;
    height: 38px;
    margin-left: 10px;
    border-radius: 15px;
    align-items: center;
    text-align: center; /* Alignement du texte au centre */
    
}

button:hover {
    background-color: #0056b3;
}

input[type="search"]:focus,
button:focus {
    border-color: #007bff;
}

  </style>
  <style>
        
table {
    width: 80%;
    border-collapse: collapse;
    position: absolute;
    bottom: 0;
    align: center;
    margin-left: 160px;
    margin-top: 20px;
   margin-bottom: -10100px;
    
    
}

th, td {
    padding: 8px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}

th {
  background-color: #2d49e7;
    color: #ddd;
}

  </style>

</body>
</html>  
