<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="TemplateMo">
    
        <title>nav</title>

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
   
   .navbar {
   background: transparent;
   position: absolute;
   z-index: 9;
   right: 0;
   left: 0;
   transition: all 0.3s;
   padding-top: 15px;
   padding-bottom: 0;
   margin-bottom:100px ;
   color: black;
   
}
.navbar-expand-lg .navbar-nav .nav-link {
    color:var(--p-color);
}


.navbar-icon {
   background: var(--secondary-color);
   color: var(--white-color);
}

.navbar-brand{
    color: black;
}
   .navbar-nav .nav-link{
      color:  var(--p-color);
   }
 .navbar-expand-lg .navbar-collapse{
   background-color: (--white-color);
   }
   .navbar .custom-btn{
    border-color:#14b789;
    color:  #14b789;
    
   }

</style>

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

            <a href="#" class="navbar-brand mx-auto mx-lg-0">Gestion des PIs Et Stages</a>

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
                              <li><a class="dropdown-item" href="#">gestion des user</a></li>
                              <li><a class="dropdown-item" href="gestion des entreprises/index.php">gestion des entreprises</a></li>
                            </ul>
                          </div>
                    </li>

                    

                    
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="indexGET.php">Projets Integrateurs  </a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="stage.php">Stages  </a>
                    </li> 

                    <!-- <li class="nav-item"> -->
                        <!-- <a class="nav-link click-scroll" href="#section_4">Projects</a> -->
                    <!-- </li> -->

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index.php">Autres</a>
                    </li>
                </ul>

                <div class="d-lg-flex align-items-center d-none ms-auto">
                    <!-- <i class="navbar-icon bi-telephone-plus me-3"><a href="+222 37677296"></a></i> -->
                    <a class="custom-btn btn" href="index.php">
                        Contactez SupNum
                    </a>
                </div>
            </div>

        </div>
    </nav>

        
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