
<?php
session_start();
include "../db_conn.php";

if (strlen($_SESSION['admin']==0)) {
  header('location: ../logout.php');
  } else{

?>

<!doctype html>
<html lang="en">

<head>
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

    <!--

TemplateMo 578 First Portfolio

https://templatemo.com/tm-578-first-portfolio

-->
<style> 
div.services-thumb {
    background: var(--white-color);
    border: 2px solid green;
    border-radius: var(--border-radius-medium);
    position: relative;
    overflow: hidden;
    margin-bottom: 24px;
    padding: 40px 40px 240px 40px;
    transition: all 0.5s;
}
.services, .featured{
    background-color: #d6eed6;
}

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
  .btn-a{
    font-size: 40px;
    border: none;
    /* outline: none; */
    color: green;
    padding-left:20px;
    /* background-color: inherit; */
    font-family: initial;
    margin-left: 250px;
    position: relative;
  }
  .btn {
    transition: transform 0.3s ease-in-out; 
  }

  .btn {
    cursor: pointer;
  }
 .pi{
    padding-bottom: 35px;
    margin-right: 50px;
 }
 

</style>
</head>

<body>
   <?php
include "nav.php";
   ?>
        <section class="about section-padding" id="section_2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                           <a class="btn-a custom-btn custom-border-btn btn mt-3" href="../stage/t.php" >+Ajouter Un Stage</a>
                        </div>
                            </div>
                        </div>
                    </div>

         
            <section class="about section-padding" id="section_2">
            <div class="container">
            <div class="row">
            <?php
$conn = new mysqli("localhost", "root", "", "p_i");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql_1 = "SELECT * FROM `internships`";
$result = mysqli_query($conn, $sql_1);
while ($row = mysqli_fetch_assoc($result)) { 
    $id = $row['id'];
    $description_preview = substr($row['description'], 0, 100); // Show the first 100 characters of the description
    if ($id % 2 != 0) {
?>
<div class="row pt-lg-5">
    <div class="col-lg-6 col-12">
        <div class="services-thumb">
            <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                <h3 class="mb-0"><?php echo $row["company_name"]; ?></h3>
                <div class="services-price-wrap ms-auto">
                    <p class="services-price-text mb-0">$2,400</p>
                    <div class="services-price-overlay"></div>
                </div>
            </div>
            <p class="description-preview"><?php echo $description_preview; ?>...</p>
            <div class="details-container" style="display: none;">
                <p><?php echo $row["technologie"]; ?></p>
                <p><?php echo $row["description"]; ?>.</p>
            </div>
            <a href="inf_stage.php?id=<?php echo $id; ?>" class="custom-btn custom-border-btn btn mt-3 voir-plus-btn">Consulter</a>
            <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                <i class="services-icon bi-globe"></i>
            </div>
        </div>
    </div>

<?php 
    } else {
?>
    <div class="col-lg-6 col-12">
        <div class="services-thumb services-thumb-up">
            <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                <h3 class="mb-0"><?php echo $row["company_name"]; ?></h3>
                <div class="services-price-wrap ms-auto">
                    <p class="services-price-text mb-0">$1,200</p>
                    <div class="services-price-overlay"></div>
                </div>
            </div>
            <p class="description-preview"><?php echo $description_preview; ?>...</p>
            <div class="details-container" style="display: none;">
            <p><?php echo $row["technologie"]; ?></p>
            <p><?php echo $row["description"]; ?>.</p>
            </div>
            <a href="inf_stage.php?id=<?php echo $id; ?>" class="custom-btn custom-border-btn btn mt-3 voir-plus-btn">Consulter</a>
            <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                <i class="services-icon bi-lightbulb"></i>
            </div>
        </div>
    </div>
    
</div>
<?php 
    } // End of if-else
} // End of while loop
?>

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
<?php }?>
