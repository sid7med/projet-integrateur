<?php
session_start();
include "../db_conn.php";

if (strlen($_SESSION['prof']==0)) {
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
                        </div>
                            </div>
                        </div>
                    </div>

                    <section class="about section-padding" id="section_2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        </div>
                            </div>
                        </div>
                    </div>

            <a class="btn-a" href="add.php" >+Ajouter Un PI</a>

<?php
  	$conn = new mysqli("localhost","root","","p_i");
    if (!$conn) {
   echo "Connection failed!"; }
$sql_1 = "SELECT * FROM `p_i`";
$result = mysqli_query($conn, $sql_1);
while ($row = mysqli_fetch_assoc($result)) { 
    // Assuming the field you want to check is 'id'
    $id = $row['id'];
    if ($id % 2 != 0) {
?>


<div class="row pt-lg-5">
                            <div class="col-lg-6 col-12">
                                <div class="services-thumb">
                                    <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                        <h3 class="mb-0"><?php echo $row["titre"]; ?></h3>

                                        <div class="services-price-wrap ms-auto">
                                            <p class="services-price-text mb-0">$2,400</p>
                                            <div class="services-price-overlay"></div>
                                        </div>
                                    </div>

                                    <p><?php echo $row["description"]; ?>.</p>
                                    <p><?php echo $row["technologie"]; ?></p>

                                    <a href="#" class="custom-btn custom-border-btn btn mt-3">Consulter</a>

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
                                        <h3 class="mb-0"><?php echo $row["titre"]; ?></h3>

                                        <div class="services-price-wrap ms-auto">
                                            <p class="services-price-text mb-0">$1,200</p>
                                            <div class="services-price-overlay"></div>
                                        </div>
                                    </div>

                                    <p><?php echo $row["description"]; ?>.</p>
                                    <p><?php echo $row["technologie"]; ?></p>
                                    <a href="#" class="custom-btn custom-border-btn btn mt-3">Consulter</a>

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









                </div>
            </div>
        </section>


        
                </div>
            </div>
        </section>


                </div>
            </div>
            </div>
        </section>

    </main>

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
<?php } ?>