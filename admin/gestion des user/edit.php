<?php
include "db_conn.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {
  $nom =$_POST['nom'];
  $prenom=$_POST['prénom'];
  $email =$_POST['email'];
  $password  =$_POST['password'];
  $sql = "UPDATE `` SET `email`='$email',`nom`='$nom ',`prénom`='$prenom ',`email`='$email',`password`='$password'";
  
  $result = mysqli_query($con, $sql);
  if ($result) {
    header("Location: index.php?msg=Données mises à jour avec succès");
  } else {
    echo "Failed: " . mysqli_error($con);
  }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>PHP CRUD Application</title>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:cornflowerblue;">
  Liste des utilisateurs
  </nav>

  <div class="container">
    <div class="text-center mb-4">
      <h3>Modifier les informations utilisateurs</h3>
      <p class="text-muted">Cliquez sur mettre à jour après avoir modifié des informations</p>
    </div>

    <?php
    $sql = "SELECT * FROM `utilisateurs` WHERE id = $id LIMIT 1";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style= "width:50vw; min-width:300px #00ff5573;">
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">nom</label>
          
            <input type="text" class="form-control" name="nom" value="<?php echo $row['nom'] ?>">
          </div>

          <div class="col">
            <label class="form-label">prenom:</label>
            <input type="text" class="form-control" name="prenom" value="<?php echo $row['prenom'] ?>">
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="mail" class="form-control" name="matricule" value="<?php echo $row['email'] ?>">
        </div>
        <div class="col">
            <label class="form-label">Mot de passe</label>
            <input type="text" class="form-control" name="niveaux" value="<?php echo $row['password'] ?>">
          </div>
          
        

        <div>
          <button type="submit" class="btn btn-success m-2" name="submit">mettre à jour</button>
          <a href="index.php" class="btn btn-danger">Annuler</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>