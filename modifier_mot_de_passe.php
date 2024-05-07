<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
    <style>
        #nav {
            width: 250px;
            height: 100vh;
            position: fixed;
            right: -250px;
            top: 0;
            background-color: #4c44b6;
            transition: 0.5s;
            padding-top: 60px;
            z-index: 1000; /* Added z-index to make sure it's above other content */
        }
        #nav.open {
            right: 0;
        }
        #nav ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        #nav ul li {
            margin: 10px 0;
        }
        #nav ul li a {
            display: block;
            padding: 10px;
            color: #fff;
            text-decoration: none;
            transition: 0.3s;
        }
        #nav ul li a:hover {
            background-color: #665ec5;
        }
        #menubtn {
            border: none;
            background: #4c44b6;
            color: #fff;
            position: fixed;
            right: 20px;
            top: 20px;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
            z-index: 1001; /* Ensure it's above the menu */
        }
        #menubtn:hover {
            background: #665ec5;
        }
        a {
            text-decoration: none;
            color: #333;
        }
        ul {
            list-style: none;
        }
    </style>
</head>
<body>
    <!-- Première section -->
    <button id="menubtn">&#9776;</button>
    <nav id="nav">
        <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">À propos</a></li>
            <li><a href="#">Services</a></li>
            <li id="icon"><a href="#">deconnexion</a><span class="material-symbols-outlined">
move_item
</span></li>
        </ul>
    </nav>

    <!-- Overlay -->
    <div class="overlay" onclick="closeMenu()" id="overlay"></div>

    <div class="container">
        <div class="box form-box">
           
            <header>Se connecter</header>
            <form action="index.php" method="post">
                
                <div class="field input">
                    <label for="password">Entrez votre nouveau mot de passe</label>
                    <input type="password" name="password" id="password" autocomplete="off"  placeholder="" required>
                </div>
                <div class="field input">
                    <label for="password">Confirmer votre nouveau mot de passe</label>
                    <input type="password" name="password" id="password" autocomplete="off"  placeholder="" required>
                </div>
                
                 <center><div class="field">
                    <input type="submit" class="btn" name="changePassword" value="Changer">
                </div></center>
                
            </form>
        </div>
    </div>
    <script>
        // Gestion du menu déroulant
        const menuBtn = document.getElementById('menubtn');
        const nav = document.getElementById('nav');
        const overlay = document.getElementById('overlay');

        menuBtn.addEventListener('click', () => {
            nav.classList.toggle('open');
            overlay.style.display = 'block'; // Show overlay when menu is open
        });

        // Function to close menu and hide overlay
        function closeMenu() {
            nav.classList.remove('open');
            overlay.style.display = 'none'; // Hide overlay when menu is closed
        }
    </script>
</body>
</html>