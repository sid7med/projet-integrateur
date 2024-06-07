<?php
// Include the navigation bar (commented out in your code)
// include "../gestion des entreprises/nav.php";
echo "<br><br><br><br><br><br>";
?>
<!doctype html>
<html lang="en">

<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.0.5/datatables.min.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Custom CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-icons.css" rel="stylesheet">
  <link href="css/magnific-popup.css" rel="stylesheet">
  <link href="css/templatemo-first-portfolio-style.css" rel="stylesheet">
  <style>
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
    .page-item.active .page-link {
      background-color: #14b789;
      border-color: #14b789;
    }
    table.dataTable thead>tr>th.dt-orderable-asc,
    table.dataTable thead>tr>th.dt-orderable-desc,
    table.dataTable thead>tr>td.dt-orderable-asc,
    table.dataTable thead>tr>td.dt-orderable-desc {
      background-color: #14b789;
    }
  </style>
  <title>SupNum Platform</title>
</head>

<body>

<?php
include "../db_conn.php";
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

    <table id="example" class="table table-hover text-center">
      <thead class="table">
        <tr>
          <th scope="col">Matricule</th>
          <th scope="col">Nom</th>
          <th scope="col">Prenom</th>
          <th scope="col">Niveaux</th>
          <th scope="col">Semester</th>
          <th scope="col">demande</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM etudiant";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["matricule"] ?></td>
            <td><?php echo $row["nom"] ?></td>
            <td><?php echo $row["prenom"] ?></td>
            <td><?php echo $row["niveaux"] ?></td>
            <td><?php echo $row["semester"] ?></td>
            <td>
              <form action="" method="post" class="demande-form">
                <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                <?php if ($row["demande"] == 0): ?>
                  <input type="submit" name="action" class="btn btn-success" value="Inviter">
                <?php else: ?>
                  <input type="submit" name="action" class="btn btn-warning" value="Annuler">
                <?php endif; ?>
              </form>
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
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["action"]) && isset($_POST["id"])) {
    $id = $_POST["id"];
    $new_demande_status = ($_POST["action"] === "Inviter") ? 1 : 0;

    if ($new_demande_status === 1) {
        // Count the number of students with demande = 1
        $count_sql = "SELECT COUNT(*) as count FROM etudiant WHERE demande = 1";
        $result = mysqli_query($conn, $count_sql);
        $row = mysqli_fetch_assoc($result);
        $count = $row['count'];

        if ($count >= 4) {
            echo "<script>alert('Only 4 students can have their request approved.'); window.location.href = 'add_group.php';</script>";
            exit;
        }
    }

    $sql = "UPDATE etudiant SET demande = $new_demande_status WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        echo "<script>window.location.href = 'add_group.php';</script>";
    } else {
        echo "<script>alert('Error updating record: " . mysqli_error($conn) . "');</script>";
    }
}
?>

<script src="js/jquery.js"></script>
<script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.0.5/datatables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable({});
    });
</script>

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="copyright-text-wrap">
                    <p class="mb-0">
                        <span class="copyright-text">Copyright © 2024 <a href="supnum.mr">SupNum</a> Institute. Tous droits réservés.</span>
                        Design:
                        <a rel="sponsored" href="https://templatemo.com" target="_blank"> Etudiants de Dr.Meya</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- JAVASCRIPT FILES -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/click-scroll.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
