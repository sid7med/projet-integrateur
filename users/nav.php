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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-VP1KorIeZMqrNJ9E+eziNpNhCP5nT/5CipRtMb3EUb6vp2dPiqOjUYbYCXfNHoASZWgHg5u1KWU/iLoJ/9cA6w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
         body {
            background-color:  #d6eed6;
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .navbar {
            background: transparent;
            position: absolute;
            z-index: 9;
            right: 0;
            left: 0;
            transition: all 0.3s;
            padding-top: 15px;
            padding-bottom: 0;
            margin-bottom: 100px;
            color: black;
        }
        .navbar-expand-lg .navbar-nav .nav-link {
            color: var(--p-color);
        }
        .navbar-icon {
            background: var(--secondary-color);
            color: var(--white-color);
        }
        .navbar-brand {
            font-size: 20px; /* Adjust the size as needed */
            color: black;
        }
        .navbar-nav .nav-link {
            color: var(--p-color);
        }
        .navbar-expand-lg .navbar-collapse {
            background-color: (--white-color);
        }
        .navbar .custom-btn {
            border-color: #14b789;
            color: #14b789;
        }
        #profileDropdown {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            z-index: 1;
        }
        #profileDropdown a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        #profileDropdown a:hover {
            background-color: #f1f1f1;
        }
        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 60%;
            margin-bottom: 10px;
            flex-direction: column;
            width: 200px;
            margin-top: 10px;
        }
        .mb-1 {
            cursor: pointer;
        }
        /* CSS pour l'image */
        #myButton {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px; /* Espacement entre l'image et le bouton */
        }
        /* CSS pour la mise en page de la navigation du profil */
        .nav-profile {
            display: flex; /* Utiliser la disposition flexbox */
            align-items: center; /* Aligner les éléments sur l'axe vertical */
        }
        #profileDropdown {
            display: none;
            position: absolute;
            top: 100%; /* Positionner la div juste en dessous de son parent */
            right: 0; /* Aligner la div sur le côté droit de son parent */
            background-color: #f9f9f9;
            min-width: 200px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            z-index: 1;
            padding: 10px;
            border-radius: 5px;
        }
        .center-text {
            display: block;
            text-align: center;
            font-weight: bold;
            cursor: pointer;
        }

        
    .custom-btn {
        font-size: 16px;
        border: none;
        outline: none;
        color: white;
        padding: 8px 8px;
        background-color: inherit;
        font-family: inherit;
    }
    .contact-btn-container {
        font-size: 0.8em; /* Adjust font size */
        padding: 5px; /* Adjust padding */
        margin-right: 10px; /* Adjust margin */
    }
    .contact-btn-container .custom-btn {
        padding: 5px 10px; /* Adjust button padding */
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="#" class="navbar-brand mx-auto mx-lg-0">Gestion des PIs Et Stages</a>
            <div class="d-flex align-items-center d-lg-none">
                <i class="navbar-icon bi-telephone-plus me-3"></i>
                <a class="custom-btn btn" href="#section_5"></a>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-lg-5">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index.php">Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <!-- <div class="dropdown">
                            <button class="btn adm nav-link" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Administration
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="gestion des étudiants/index.php">Gestion des étudiants</a></li>
                                <li><a class="dropdown-item" href="#">Gestion des utilisateurs</a></li>
                                <li><a class="dropdown-item" href="gestion des entreprises/index.php">Gestion des entreprises</a></li>
                            </ul>
                        </div> -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="indexGET.php">Projets Integrateurs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="stage.php">Stages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index.php">Autres</a>
                    </li>
                </ul>
              

                <div class="d-lg-flex align-items-center d-none ms-auto">
                    <?php if (isset($_SESSION['email'])): ?>
                    <div class="dropdown">
                        <div class="logo">
                            <div class="nav-profile">
                                <img src="../images/supnum.jpg" alt="image" draggable="false" style="width: 40px; height: 40px; border-radius: 50%; margin-right: 10px;">
                                <div class="nav-profile-text">
                                    <p onclick="toggleProfile()" class="mb-1 text-black"><?php echo $_SESSION['email']; ?></p>
                                    <?php if ($_SESSION['role'] == 1): ?>
                                    <div onclick="toggleProfile()" class='center-text'>
                                        (Etudiant)
                                    </div>
                                    <?php endif; ?>
                                    <?php if ($_SESSION['role'] == 2): ?>
                                    <div onclick="toggleProfile()" class='center-text'>
                                        (professeur)
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <i class="fas fa-check-circle text-success"></i> <!-- Icône de connexion verte -->
                            </div>
                            <div id="profileDropdown" class="dropdown-menu">
                                <div class="logo">
                                    <img id="myButton" class="style-scope yt-img-shadow" src="../images/supnum.jpg" draggable="false" style="width: 40px; height: 40px; border-radius: 50%;">
                                </div>
                                <center><p><?php echo $_SESSION['email']; ?></p></center>
                                <center><p><?php echo $_SESSION['role']; ?></p></center>
                                <a href="#">Gérer votre compte</a>
                                <a href="logout.php">
                                    <i class="bi bi-box-arrow-right text-primary"></i> Se déconnecter
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php else: ?>
                    <a class="custom-btn btn" href="../logout.php">Se connecter</a>
                    <?php endif; ?>
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
    <script>
        // Fonction pour afficher ou masquer le div du profil
        function toggleProfile() {
            var profileDropdown = document.getElementById("profileDropdown");
            if (profileDropdown.style.display === "none") {
                profileDropdown.style.display = "block";
            } else {
                profileDropdown.style.display = "none";
            }
        }
    </script>
</body>
</html>
