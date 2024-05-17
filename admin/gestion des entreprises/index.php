<?php
include "db_conn.php";
include "nav.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.0.5/datatables.min.css" rel="stylesheet">
  
  <!-- Bootstrap -->ko
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.bootstrap4.css">

  <title>PHP CRUD Application</title>

</head>

<body>


  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <div class="d-flex justify-content-between " >
    <a href="add-new.php" class="btn btn-primary mb-3 ">ajouter un nouveau</a>
    <a   onClick="tableToExcel()" class="btn btn-primary mb-3">Exporter</a>
</div>
    <table id="example" class="table table-hover text-center">
      <thead class="table-primary">
        <tr>
          <th scope="col">Nom_enterprise</th>
          <th scope="col">Adresse</th>
          <th scope="col">Domaine_activite</th>
          <th scope="col">Email</th>
          <th scope="col">Nom_profitionelle</th>
          <th scope="col">logo</th>
          <th scope="col">Action</th>
          <!-- <th scope="col">Action</th> -->
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `entreprise`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["Nom_enterprise"] ?></td>
            <td><?php echo $row["Adresse"] ?></td>
            <td><?php echo $row["Domaine_activite"] ?></td>
            <td><?php echo $row["Email"] ?></td>
            <td><?php echo $row["Nom_profitionelle"] ?></td>
            <td><?php echo $row["logo"] ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <!-- Bouton de suppression avec modal -->
              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal_<?php echo $row["id"] ?>">
                <i class="fa-solid fa-trash fs-5"></i>
              </button>

              <!-- Modal de confirmation de suppression -->
              <div class="modal fade" id="deleteModal_<?php echo $row["id"] ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="deleteModalLabel">Confirmation de suppression</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Êtes-vous sûr de vouloir supprimer cet étudiant ?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                      <a href="delete.php?id=<?php echo $row["id"] ?>" class="btn btn-danger">Supprimer</a>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <?php
  include "db_conn.php";

  // Vérifiez si des données ont été soumises via le formulaire
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifiez si au moins l'un des champs a été soumis
    if (isset($_POST['Nom_enterprise']) || isset($_POST['Adresse']) || isset($_POST['Domaine_activite']) || isset($_POST['Email']) || isset($_POST['Nom_profitionelle']) ||  isset($_POST['logo']) ) {
      // Affichez la confirmation de la modification avec Bootstrap
      echo '<div class="alert alert-success alert-dismissible fade show" >
                Les informations ont été modifiées avec succès !
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
    }
  }


  ?>

</body>

</html>