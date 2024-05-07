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

  <title>PHP CRUD Application</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="TemplateMo">

    <title>SupNum Plateform</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/magnific-popup.css" rel="stylesheet">

    <link href="css/templatemo-first-portfolio-style.css" rel="stylesheet">




    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.0.5/datatables.min.css" rel="stylesheet">
   Bootstrap -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->

  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --> -->

    <!--

TemplateMo 578 First Portfolio

https://templatemo.com/tm-578-first-portfolio


-->
<style> 
.btn {
    font-size: 16px;
    border: none;
    outline: none;
    color: white;
    padding: 8px 8px;
    background-color: inherit;
    font-family: inherit;
    margin-left: 20px;
    position: relative; 
  }
  

  .btn {
    transition: transform 0.3s ease-in-out; 
  }

  .btn {
    cursor: pointer;
  }
 
</style>
</head>

<body>

    <section class="preloader">
        <div class="spinner">
            <span class="spinner-rotate"></span>
        </div>
    </section>

    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a href="index.html" class="navbar-brand mx-auto mx-lg-0">Gestion des PIs Et Stages</a>

            <div class="d-flex align-items-center d-lg-none">
                <i class="navbar-icon bi-telephone-plus me-3"></i>
                <a class="custom-btn btn" href="#section_5">
                <?php
include "db_conn.php";
?>
<!DOCTYPE html>
<html lang="en">



  

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
    <a href="add-new.php" class="btn btn-primary mb-3">ajouter un nouveau</a>

    <table id="example" class="table table-hover text-center">
      <thead class="table-primary">
        <tr>
          <th scope="col">matricule</th>
          <th scope="col">nom</th>
          <th scope="col">prenom</th>
          <th scope="col">niveaux</th>
          <th scope="col">semester</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `etudiant`";
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
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifiez si au moins l'un des champs a été soumis
    if(isset($_POST['nom']) || isset($_POST['prenom']) || isset($_POST['matricule']) || isset($_POST['Niveaux']) || isset($_POST['Semestre']))  {
        // Affichez la confirmation de la modification avec Bootstrap
        echo '<div class="alert alert-success alert-dismissible fade show" >
                Les informations ont été modifiées avec succès !
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
    }
}


?>
<script src="js/jquery.js"></script>
<script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.0.5/datatables.min.js"></script>
<script type="text/javascript">
    $('#datatable').DataTable({});
  </script>



                
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-lg-5">
                    <li class="nav-item ">
                        <a class="nav-link click-scroll" href="#section_1">Acceuil</a>
                    <li class="nav-item ">
                        <div class="dropdown ">
                            <button class="btn adm nav-link" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                adminstration
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="index.php">gestion des étudiants</a></li>
                              <li><a class="dropdown-item" href="#">gestion des user</a></li>
                              <li><a class="dropdown-item" href="index.php">gestion des entreprises</a></li>
                            </ul>
                          </div>
                    </li>

                    <li class="nav-item">
                        <!-- <a class="nav-link click-scroll" href="#section_2"></a> -->
                        
                        <div class="dropdown ">
                            <button class="btn adm nav-link" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                             Projets Integrateurs
                            </button>
                            <ul class="dropdown-menu">
                            <li>
                              <button  type="button" data-bs-toggle="dropdown" aria-expanded="false">Listes</button>
                                   <li><a class="dropdown-item" href="#">PI S2</a></li> 
                                   <li><a class="dropdown-item" href="#">PI S3</a></li> 
                                   <li><a class="dropdown-item" href="#">PI S4</a></li> 
                                   <li><a class="dropdown-item" href="#">PI S5</a></li> 
                               </li>
                            
                        
                              <li><a class="dropdown-item" href="#">Groupes</a></li>
                            </ul>
                          </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_3">Stages  </a>
                    </li> 

                    <!-- <li class="nav-item"> -->
                        <!-- <a class="nav-link click-scroll" href="#section_4">Projects</a> -->
                    <!-- </li> -->

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_5">Autres</a>
                    </li>
                </ul>

                <div class="d-lg-flex align-items-center d-none ms-auto">
                    <!-- <i class="navbar-icon bi-telephone-plus me-3"><a href="+222 37677296"></a></i> -->
                    <a class="custom-btn btn" href="#section_5">
                        Contactez SupNum
                    </a>
                </div>
            </div>

        </div>
    </nav>

    <main>

        <section class="hero d-flex justify-content-center align-items-center" id="section_1">
            <div class="container">
                <div class="row">

                    <div class="col-lg-7 col-12">
                        <div class="hero-text">
                            <div class="hero-title-wrap d-flex align-items-center mb-4">
                                <!-- <img src="images/happy-bearded-young-man.jpg"
                                    class="avatar-image avatar-image-large img-fluid" alt=""> -->

                                <h1 class="hero-title ms-3 mb-0">Bienvenue </h1>
                            </div>

                            <h2 class="mb-4">Gestion des Etudients </h2>
                            <p class="mb-4"><a class="custom-btn btn custom-link" href="#section_2"></a></p>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12 position-relative">
                        <img class="hero-image-wrap" src="images/supnum.png"
                            class="hero-image img-fluid" alt="">  
                        
                    </div class="hero-image">

                </div>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#535da1" fill-opacity="1"
                    d="M0,160L24,160C48,160,96,160,144,138.7C192,117,240,75,288,64C336,53,384,75,432,106.7C480,139,528,181,576,208C624,235,672,245,720,240C768,235,816,213,864,186.7C912,160,960,128,1008,133.3C1056,139,1104,181,1152,202.7C1200,224,1248,224,1296,197.3C1344,171,1392,117,1416,90.7L1440,64L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z">
                </path>
            </svg>
        </section>



                 





                </div>
            </div>
        </section>



      

<?php
include "db_conn.php";
?>

<!-- <head>
  <meta charset="UTF-8">
 
 
</head> -->


  
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
    <a href="add-new.php" class="btn btn-primary mb-3">ajouter un nouveau</a>

    <table id="example" class="table table-hover text-center">
      <thead class="table-primary">
        <tr>
          <th scope="col">matricule</th>
          <th scope="col">nom</th>
          <th scope="col">prenom</th>
          <th scope="col">niveaux</th>
          <th scope="col">semester</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `etudiant`";
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
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifiez si au moins l'un des champs a été soumis
    if(isset($_POST['nom']) || isset($_POST['prenom']) || isset($_POST['matricule']) || isset($_POST['Niveaux']) || isset($_POST['Semestre']))  {
        // Affichez la confirmation de la modification avec Bootstrap
        echo '<div class="alert alert-success alert-dismissible fade show" >
                Les informations ont été modifiées avec succès !
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
    }
}


?>
<script src="js/jquery.js"></script>
<script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.0.5/datatables.min.js"></script>
<script type="text/javascript">
    $('#datatable').DataTable({});
  </script>


        

    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <div class="copyright-text-wrap">
                        <p class="mb-0">
                            <span class="copyright-text">Copyright © 2024  <a href="supnum.mr">SupNum</a> Institue .  Tous droits réservés.</span>
                            Design:
                            <a rel="sponsored" href="https://templatemo.com" target="_blank"> Etudients de Dr.Meya</a>
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