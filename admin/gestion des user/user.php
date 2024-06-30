<?php
session_start();
ob_start();
include "../gestion des entreprises/nav.php";
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.0.5/datatables.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Gestion des Utilisateurs</title>
  <style>
    body {
      background-color: #d6eed6;
    }
    .navbar-brand {
      color: var(--p-color);
    }
    .navbar .custom-btn {
      border-color: var(--secondary-color);
      color: var(--secondary-color);
    }
    .btn-primary {
      color: #fff;
      background-color: #14b789;
      border-color: #14b789;
    }
    table.dataTable thead>tr>th.dt-orderable-asc,
    table.dataTable thead>tr>th.dt-orderable-desc,
    table.dataTable thead>tr>td.dt-orderable-asc,
    table.dataTable thead>tr>td.dt-orderable-desc {
      background-color: #14b789;
    }
    .page-item.active .page-link {
      background-color: #14b789;
      border-color: #14b789;
    }
  </style>
</head>
<body>

<?php
include "../../db_conn.php";

// Ajouter un utilisateur
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_user'])) {
  $email = $_POST['email'];
  $is_valid = $_POST['is_valid'];

  $sql = "INSERT INTO users (email, is_valid) VALUES ('$email', $is_valid)";
  mysqli_query($conn, $sql);
  header("Location: user.php");
  exit();
}

// Modifier un utilisateur
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_user'])) {
  $id = $_POST['id'];
  $email = $_POST['email'];
  $is_valid = $_POST['is_valid'];

  $sql = "UPDATE users SET email='$email', is_valid=$is_valid WHERE id=$id";
  mysqli_query($conn, $sql);
  header("Location: user.php");
  exit();
}

// Supprimer un utilisateur
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_user'])) {
  $id = $_POST['id'];

  $sql = "DELETE FROM users WHERE id=$id";
  mysqli_query($conn, $sql);
  header("Location: user.php");
  exit();
}

// Modifier le statut de validation
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['toggle_valid'])) {
  $id = $_POST['id'];
  $is_valid = $_POST['is_valid'];

  $new_valid = $is_valid == 1 ? 0 : 1;
  $sql = "UPDATE users SET is_valid=$new_valid WHERE id=$id";
  mysqli_query($conn, $sql);
}
?>

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
  <a href="#addModal" class="btn btn-primary mb-3" data-bs-toggle="modal">Ajouter un nouveau</a>

  <table id="example" class="table table-hover text-center">
    <thead class="table">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Email</th>
        <th scope="col">Statut de validation</th>
        <th scope="col">Modifier</th>
        <th scope="col">Supprimer</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM `users`";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
      ?>
        <tr>
          <td><?php echo $row["id"] ?></td>
          <td><?php echo $row["email"] ?></td>
          <td>
            <form action="" method="post" class="lead-form">
              <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
              <input type="hidden" name="is_valid" value="<?php echo $row["is_valid"] ?>">
              <input type="submit" name="toggle_valid" class="btn <?php echo $row["is_valid"] == 1 ? 'btn-success' : 'btn-warning'; ?>" value="<?php echo $row["is_valid"] == 1 ? 'Actif' : 'Inactif'; ?>">
            </form>
          </td>
          <td>
            <a href="#editModal_<?php echo $row["id"] ?>" class="link-dark" data-bs-toggle="modal"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
          </td>
          <td>
            <!-- Bouton de suppression avec modal -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal_<?php echo $row["id"] ?>">
              <i class="fa-solid fa-trash fs-5"></i>
            </button>

            <!-- Modal de confirmation de suppression -->
            <div class="modal fade" id="deleteModal_<?php echo $row["id"] ?>" tabindex="-1" aria-labelledby="deleteModalLabel_<?php echo $row["id"] ?>" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel_<?php echo $row["id"] ?>">Confirmation de suppression</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Êtes-vous sûr de vouloir supprimer cet utilisateur ?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <form action="" method="post">
                      <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                      <button type="submit" name="delete_user" class="btn btn-danger">Supprimer</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>

        <!-- Edit Modal -->
        <div class="modal fade" id="editModal_<?php echo $row["id"] ?>" tabindex="-1" aria-labelledby="editModalLabel_<?php echo $row["id"] ?>" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel_<?php echo $row["id"] ?>">Modifier Utilisateur</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="" method="post">
                  <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $row["email"] ?>" required>
                  </div>
                  <div class="mb-3">
                    <label for="is_valid" class="form-label">Statut de validation</label>
                    <select class="form-control" name="is_valid">
                      <option value="0" <?php echo $row["is_valid"] == 0 ? 'selected' : ''; ?>>Inactif</option>
                      <option value="1" <?php echo $row["is_valid"] == 1 ? 'selected' : ''; ?>>Actif</option>
                    </select>
                  </div>
                  <button type="submit" name="update_user" class="btn btn-primary">Modifier</button>
                </form>
              </div>
            </div>
          </div>
        </div>

      <?php
      }
      ?>
    </tbody>
  </table>
</div>

<!-- Modal pour ajouter un utilisateur -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel">Ajouter Utilisateur</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" required>
          </div>
          <div class="mb-3">
            <label for="is_valid" class="form-label">Statut de validation</label>
            <select class="form-control" name="is_valid">
              <option value="0">Inactif</option>
              <option value="1">Actif</option>
            </select>
          </div>
          <button type="submit" name="add_user" class="btn btn-primary">Ajouter</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.0.5/datatables.min.js"></script>
<script type="text/javascript">
  $('#example').DataTable({});
</script>

<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-12">
        <div class="copyright-text-wrap">
          <p class="mb-0">
            <span class="copyright-text">Copyright © 2024 <a href="supnum.mr">SupNum</a> Institute. Tous droits réservés.</span>
            Design:
            <a rel="sponsored" href="https://templatemo.com" target="_blank">Etudiants de Dr.Meya</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/click-scroll.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<script src="js/custom.js"></script>

</body>
</html>

<?php
ob_end_flush();
?>
