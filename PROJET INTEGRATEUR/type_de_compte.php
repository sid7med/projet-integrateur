
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <style>
        /* Styles pour la première section */
        body {
            background: #f4f4f4;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
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

        /* Styles pour la deuxième section */
        .container {
            margin-top: 60px;
            padding: 20px;
            height: 70px;
            width: 50%;
            margin:auto;
        }

        .form-select {
            margin-bottom: 20px;
            height: 70px;
            width: 50%;
            margin:auto;
            text-align:center;
        }

        .form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
            margin:auto;
            
        }

        .form fieldset {
            border: none;
            padding: 0;
            margin: 0;
        }

        .form legend {
            font-size: 1.5em;
            margin-bottom: 15px;
            color: #4c44b6;
        }

        .form label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #555;
        }

        .form input[type="text"],
        .form input[type="tel"],
        .form input[type="email"],
        .form input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s;
        }

        .form input[type="text"]:focus,
        .form input[type="tel"]:focus,
        .form input[type="email"]:focus,
        .form input[type="number"]:focus {
            border-color: #4c44b6;
        }
        
        .form button[type="submit"],
        .form button[type="reset"] {
            background-color: #4c44b6;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form button[type="submit"]:hover,
        .form button[type="reset"]:hover {
            background-color: #665ec5;
        }

        /* Nouveau style */
        h1 {
            text-align: center;
            margin-top: 20px;
            color: #4c44b6;
        }

        .form-select select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s;
        }

        .form-select select:focus {
            border-color: #4c44b6;
        }

        .form-select label {
            font-weight: normal;
            color: #555;
        }

        .form-select select option {
            font-size: 14px;
        }

        /* Style for the overlay */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: none; /* Initially hidden */
            z-index: 999; /* Ensure it's above other content except the menu */
        }
        #icon{
            display: flex;
            
        }
    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
    <!-- Première section -->
    <button id="menubtn">&#9776;</button>
    <nav id="nav">
        <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">À propos</a></li>
            <li><a href="#">Services</a></li>
            <li id="icon"><a href="deconnexion.php">deconnexion</a><span class="material-symbols-outlined">
move_item
</span></li>
        </ul>
    </nav>

    <!-- Overlay -->
    <div class="overlay" onclick="closeMenu()" id="overlay"></div>

    <!-- Deuxième section -->
    <div class="container">
        <h1>Types des comptes</h1>
        <div class="form-select">
            <label for="subject"></label>
            <select id="subject">
                <option value="enterprise">Enterprise</option>
                <option value="prof">Professeur</option>
                <option value="etud">Étudiant</option>
            </select>
        </div>
        <div class="form" id="enterprise">
            <form>
                <fieldset>
                    <center><legend>Entreprise</legend></center>
                    <label for="enterprise-name">Libelle :</label>
                    <input type="text" id="enterprise-name" required>
                    <label for="enterprise-address">Adresse :</label>
                    <input type="text" id="enterprise-address" required>
                    <label for="enterprise-tel">Téléphone :</label>
                    <input type="tel" id="enterprise-tel" required>
                    <label for="enterprise-email">Email :</label>
                    <input type="email" id="enterprise-email" required>
                    <center><button type="submit">Valider</button>
                    <button type="reset">Annuler</button></center>
                </fieldset>
            </form>
        </div>
        <div class="form" id="prof" style="display: none;">
            <form>
                <fieldset>
                    <center><legend>Professeur</legend></center>
                    <label for="prof-name">Nom :</label>
                    <input type="text" id="prof-name" required>
                    <label for="prof-prenom">Prénom :</label>
                    <input type="text" id="prof-prenom" required>
                    <label for="prof-address">Adresse :</label>
                    <input type="text" id="prof-address" required>
                    <label for="prof-tel">Téléphone :</label>
                    <input type="tel" id="prof-tel" required>
                    <label for="prof-email">Email :</label>
                    <input type="email" id="prof-email" required>
                    <center><button type="submit">Valider</button>
                    <button type="reset">Annuler</button></center>
                </fieldset>
            </form>
        </div>
        <div class="form" id="etud" style="display: none;">
            <form>
                <fieldset>
                    <center><legend>Étudiant</legend></center>
                    <label for="etud-name">Nom :</label>
                    <input type="text" id="etud-name" required>
                    <label for="etud-prenom">Prénom :</label>
                    <input type="text" id="etud-prenom" required>
                    <label for="etud-address">Adresse :</label>
                    <input type="text" id="etud-address" required>
                    <label for="etud-tel">Téléphone :</label>
                    <input type="tel" id="etud-tel" required>
                    <label for="etud-email">Email :</label>
                    <input type="email" id="etud-email" required>
                    <center><button type="submit">Valider</button>
                    <button type="reset">Annuler</button></center>
                </fieldset>
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

        // Affichage du formulaire en fonction du sujet sélectionné
        const subjectSelect = document.getElementById('subject');
        const enterprise = document.getElementById('enterprise');
        const prof = document.getElementById('prof');
        const etud = document.getElementById('etud');

        subjectSelect.addEventListener('change', () => {
            const selectedValue = subjectSelect.value;

            enterprise.style.display = 'none';
            prof.style.display = 'none';
            etud.style.display = 'none';

            if (selectedValue === 'enterprise') {
                enterprise.style.display = 'block';
            } else if (selectedValue === 'prof') {
                prof.style.display = 'block';
            } else if (selectedValue === 'etud') {
                etud.style.display = 'block';
            }
        });
    </script>
</body>
</html>


