<?php

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
    font-size: 20px;
    border: none;
    /* outline: none; */
    color: green;
    padding-left:20px;
    /* background-color: inherit; */
    font-family: initial;
    margin-left: 20px;
    position: relative;
    /* max-width: 250px;
    margin-right:100px ; */
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

            <a href="index.php" class="navbar-brand mx-auto mx-lg-0">Gestion des PIs Et Stages</a>

            <div class="d-flex align-items-center d-lg-none">
                <i class="navbar-icon bi-telephone-plus me-3"></i>
                <a class="custom-btn btn" href="#section_5">
                    
                </a>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-lg-5">
                    <li class="nav-item ">
                        <a class="nav-link click-scroll" href="index.php">Acceuil</a>
                    <li class="nav-item ">
                        <div class="dropdown ">
                            <button class="btn adm nav-link" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                adminstration
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="gestion des étudiants/index.php">gestion des étudiants</a></li>
                              <li><a class="dropdown-item" href="gestion des user/>liste.php">gestion des user</a></li>
                              <li><a class="dropdown-item" href="gestion des entreprises/index.php">gestion des entreprises</a></li>
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

                            <h2 class="mb-4">Bonjour,Nous Sommes a votre Services  </h2>
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


        <section class="about section-padding" id="section_2">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <!-- <img src="images/couple-working-from-home-together-sofa.jpg" class="about-image img-fluid" -->
                            <!-- alt=""> -->
                    </div>
                        <a href="add.php" class="btn-a"> +Ajouter Un PI</a><br><br>
                        <a href="../stage/nouveau-stager.php" class="btn-a"> +Ajouter Un Stage</a><br><br>
                    <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                        <div class="about-thumb">

                            <!-- <div class="section-title-wrap align-items-center "> -->
                                <h2 class="pi"  >Les PIs Availables</h2>

                                <!-- <img src="images/happy-bearded-young-man.jpg" class="avatar-image img-fluid" alt=""> -->
                            </div>

                            <!-- <h3 class="pt-2 mb-3">Un Peu Sur Les PIs </h3> -->

                           

                            <!-- <p>Vous êtes autorisé à utiliser ce projet pour vos sites Web.  -->
                                <!-- Vous n'êtes pas autorisé à redistribuer le fichier ZIP du modèle sur un autre site Web.  -->
                                <!-- S'il te plaît  </p> -->
                                <!-- <a href="supnum.mr" target="_blank">  Contactez Nous    </a>  pour plus d'informations. -->
                            <!-- </p<> -->
                        </div>
                    </div>

                    <?php
                    	$conn = new mysqli("localhost","root","","p_i");
                        if (!$conn) {
                            echo "Connection failed!";
                        }
$sql_1 = "SELECT * FROM `p_i`";
$result = mysqli_query($conn, $sql_1);
while ($row = mysqli_fetch_assoc($result)) { 
    // Assuming the field you want to check is 'id'
    $id = $row['id'];
    if ($id % 2 == 0) {
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




<?php
    } // End of if-else
} // End of while loop
?>






                </div>
            </div>
        </section>

        <section class="featured section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <div class="profile-thumb">
                            <div class="profile-title">
                                <h4 class="mb-0">Informations Sur Nous</h4>
                            </div>

                            <div class="profile-body">
                                <p>
                                    <span class="profile-small-title">Nom</span>
                                    <span>Gestion des PIs et Stages</span>
                                </p>

                                <p>
                                    <span class="profile-small-title">Date</span>
                                    <span>2023-2024</span>
                                </p>

                                <p>
                                    <span class="profile-small-title">Tel</span>
                                    <span><a href="tel:+222 43535630">43 53 56 30</a></span>
                                </p>

                                <p>
                                    <span class="profile-small-title">Email</span>
                                    <span><a href="mailto:hello@josh.design">meya.haroune@gmail.com</a></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                        <div class="about-thumb">
                            <div class="row">
                                <div class="col-lg-6 col-6 featured-border-bottom py-2">
                                    <strong class="featured-numbers">10+</strong>

                                    <p class="featured-text">Annee du Experiences</p>
                                </div>

                                <div class="col-lg-6 col-6 featured-border-start featured-border-bottom ps-5 py-2">
                                    <strong class="featured-numbers">245+</strong>

                                    <p class="featured-text">Clients satisfaits</p>
                                </div>

                                <div class="col-lg-6 col-6 pt-4">
                                    <strong class="featured-numbers">30+</strong>

                                    <p class="featured-text">Projet terminé</p>
                                </div>

                                <div class="col-lg-6 col-6 featured-border-start ps-5 pt-4">
                                    <strong class="featured-numbers">72+</strong>

                                    <p class="featured-text">Prix numériques</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="clients section-padding">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-12 col-12">
                        <h3 class="text-center mb-5">Entreprises avec lesquelles nous avons travaillé</h3>
                    </div>

                    <div class="col-lg-2 col-4 ms-auto clients-item-height">
                        <img src="images/supnum.png" class="clients-image img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-4 clients-item-height">
                        <img src="images/supnum.png" class="clients-image img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-4 clients-item-height">
                        <img src="images/supnum.png" class="clients-image img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-4 clients-item-height">
                        <img src="images/supnum.png" class="clients-image img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-4 me-auto clients-item-height">
                        <img src="images/supnum.png" class="clients-image img-fluid" alt="">
                    </div>

                </div>
            </div>
        </section>


        <section class="services section-padding" id="section_3">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12 mx-auto">
                        <div class="section-title-wrap d-flex justify-content-center align-items-center mb-5">
                            <!-- <img src="images/handshake-man-woman-after-signing-business-contract-closeup.jpg" -->
                                <!-- class="avatar-image img-fluid" alt=""> -->

                            <h2 class="text-white ms-4 mb-0">Les Stages Availables</h2>
                        </div>

                        <div class="row pt-lg-5">
                            <div class="col-lg-6 col-12">
                                <div class="services-thumb">
                                    <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                        <h3 class="mb-0">Titre de Stage</h3>

                                        <div class="services-price-wrap ms-auto">
                                            <p class="services-price-text mb-0">Encadrer</p>
                                           
                                        </div>
                                    </div>

                                    <!-- <p>You may want to explore Too CSS for great collection of free HTML CSS templates. -->
                                    <!-- </p> -->
                                        Description
                                    <!-- <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a> -->

                                    <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                      Technologie  <!-- <i class="services-icon bi-globe"></i> -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12">
                                <div class="services-thumb services-thumb-up">
                                    <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                        <h3 class="mb-0">Titre de Stage</h3>

                                        <div class="services-price-wrap ms-auto">
                                            <p class="services-price-text mb-0">Encadrer</p>
                                            <!-- <div class="services-price-overlay"></div> -->
                                        </div>
                                    </div>

                                    <!-- <p>You can explore more CSS templates on TemplateMo website by browsing through -->
                                        <!-- different tags.</p> -->
                                        Description
                                    <!-- <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a> -->

                                    <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                       Technologie <!-- <i class="services-icon bi-lightbulb"></i> -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12">
                                <div class="services-thumb">
                                    <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                        <h3 class="mb-0">Titre de Stage</h3>

                                        <div class="services-price-wrap ms-auto">
                                            <p class="services-price-text mb-0">Encadrer</p>
                                            <!-- <div class="services-price-overlay"></div> -->
                                        </div>
                                    </div>

                                    <!-- <p>If you need a customized ecommerce website for your business, feel free to -->
                                        <!-- discuss with me.</p> -->
                                        Description
                                    <!-- <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a> -->

                                    <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                        Technologie <!-- <i class="services-icon bi-phone"></i> -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12">
                                <div class="services-thumb services-thumb-up">
                                    <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                        <h3 class="mb-0">Titre de Stage</h3>

                                        <div class="services-price-wrap ms-auto">
                                            <p class="services-price-text mb-0">Encadrer</p>
                                            <!-- <div class="services-price-overlay"></div> -->
                                        </div>
                                    </div>

                                    <!-- <p>To list your website first on any search engine, we will work together. First -->
                                        <!-- Portfolio is one-page CSS Template for free download.</p> -->
                                        Description
                                    <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a>

                                    <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                        Technologie<!-- <i class="services-icon bi-google"></i> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="projects section-padding" id="section_4">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-md-8 col-12 ms-auto">
                        <div class="section-title-wrap d-flex justify-content-center align-items-center mb-4">
                            <!-- <img src="images/white-desk-work-study-aesthetics.jpg" class="avatar-image img-fluid" -->
                                <!-- alt=""> -->

                            <h2 class="text-white ms-4 mb-0">Autres</h2>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="projects-info">
                                <small class="projects-tag">mini projet 1</small>

                                <h3 class="projects-title">NOM DU MP</h3>
                            </div>

                            <a href="images/projects/nikhil-KO4io-eCAXA-unsplash.jpg" class="popup-image">
                                <img src="images/projects/nikhil-KO4io-eCAXA-unsplash.jpg"
                                    class="projects-image img-fluid" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="projects-info">
                                <small class="projects-tag">Mini Projet 2</small>

                                <h3 class="projects-title">NOM DU MP</h3>
                            </div>

                            <a href="images/projects/the-5th-IQYR7N67dhM-unsplash.jpg" class="popup-image">
                                <img src="images/projects/the-5th-IQYR7N67dhM-unsplash.jpg"
                                    class="projects-image img-fluid" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="projects-info">
                                <small class="projects-tag">Mini Projet 2</small>

                                <h3 class="projects-title">NOM DU MP</h3>
                            </div>

                            <a href="images/projects/true-agency-9Bjog5FZ-oc-unsplash.jpg" class="popup-image">
                                <img src="images/projects/true-agency-9Bjog5FZ-oc-unsplash.jpg"
                                    class="projects-image img-fluid" alt="">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="contact section-padding" id="section_5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-8 col-12">
                        <div class="section-title-wrap d-flex justify-content-center align-items-center mb-5">
                            <img src="images/aerial-view-man-using-computer-laptop-wooden-table.jpg"
                                class="avatar-image img-fluid" alt="">

                            <h2 class="text-white ms-4 mb-0">Salut </h2>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-lg-3 col-md-6 col-12 pe-lg-0">
                        <div class="contact-info contact-info-border-start d-flex flex-column">
                            <strong class="site-footer-title d-block mb-3">Services</strong>

                            <ul class="footer-menu">
                                <li class="footer-menu-item"><a href="#" class="footer-menu-link">Projets</a></li>

                                <li class="footer-menu-item"><a href="#" class="footer-menu-link">Stages</a></li>

                                <li class="footer-menu-item"><a href="#" class="footer-menu-link">Mini projets</a></li>

                                <li class="footer-menu-item"><a href="#" class="footer-menu-link">Autres</a></li>
                            </ul>

                            <strong class="site-footer-title d-block mt-4 mb-3">Rester connecté</strong>

                            <ul class="social-icon">
                                <li class="social-icon-item"><a href="https://twitter.com/minthu"
                                        class="social-icon-link bi-twitter"></a></li>

                                <li class="social-icon-item"><a href="#" class="social-icon-link bi-instagram"></a></li>

                                <li class="social-icon-item"><a href="#" class="social-icon-link bi-pinterest"></a></li>

                                <li class="social-icon-item"><a href="https://www.youtube.com/templatemo"
                                        class="social-icon-link bi-youtube"></a></li>
                            </ul>

                            <strong class="site-footer-title d-block mt-4 mb-3">Commancer un projet</strong>

                            <p class="mb-0">Nous sommes diponibles pour vous !</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 ps-lg-0">
                        <div class="contact-info d-flex flex-column">
                            <strong class="site-footer-title d-block mb-3">About</strong>

                            <p class="mb-2">
                                SupNum c'est ............etc
                            </p>

                            <strong class="site-footer-title d-block mt-4 mb-3">Email</strong>

                            <p>
                                <a href="mailto:hello@josh.design">
                                    meya.haroune@gmail.com
                                </a>
                            </p>

                            <strong class="site-footer-title d-block mt-4 mb-3">Call</strong>

                            <p class="mb-0">
                                <a href="tel: 120-240-9600">
                                    +222 41 53 56 30
                                </a>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                        <form action="#" method="get" class="custom-form contact-form" role="form">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-floating">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Name"
                                            required="">

                                        <label for="floatingInput">Nom ou Libelle</label>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-floating">
                                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                            class="form-control" placeholder="Email address" required="">

                                        <label for="floatingInput">Email address</label>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-6">
                                    <div class="form-check form-check-inline">
                                        <input name="website" type="checkbox" class="form-check-input"
                                            id="inlineCheckbox1" value="1">

                                        <label class="form-check-label" for="inlineCheckbox1">
                                            <i class="bi-globe form-check-icon"></i>
                                            <span class="form-check-label-text">Projets</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-6">
                                    <div class="form-check form-check-inline">
                                        <input name="branding" type="checkbox" class="form-check-input"
                                            id="inlineCheckbox2" value="1">

                                        <label class="form-check-label" for="inlineCheckbox2">
                                            <i class="bi-lightbulb form-check-icon"></i>
                                            <span class="form-check-label-text">Stages</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-6">
                                    <div class="form-check form-check-inline">
                                        <input name="ecommerce" type="checkbox" class="form-check-input"
                                            id="inlineCheckbox3" value="1">

                                        <label class="form-check-label" for="inlineCheckbox3">
                                            <i class="bi-phone form-check-icon"></i>
                                            <span class="form-check-label-text">Mini Projets</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-6">
                                    <div class="form-check form-check-inline me-0">
                                        <input name="seo" type="checkbox" class="form-check-input" id="inlineCheckbox4"
                                            value="1">

                                        <label class="form-check-label" for="inlineCheckbox4">
                                            <i class="bi-google form-check-icon"></i>
                                            <span class="form-check-label-text">Autres</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="message" name="message"
                                            placeholder="Tell me about the project"></textarea>

                                        <label for="floatingTextarea">Parlez-vous du projet</label>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-12 ms-auto">
                                    <button type="submit" class="form-control">Rendez votre demande</button>
                                </div>

                            </div>
                        </form>
                    </div>

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
