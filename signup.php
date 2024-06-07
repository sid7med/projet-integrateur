<?php
include "db_conn.php";
// include "register.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo-first-portfolio-style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 400px;
            margin: 100px auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .login-tab {
            font-size: 40px;
            margin-bottom: 20px;
            text-align: center;
        }
        #login-form {
            display: flex;
            flex-direction: column;
        }
        input[type="text"],
        input[type="password"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .options {
            margin-bottom: 15px;
        }
        .options a {
            color: #007bff;
            text-decoration: none;
        }
        .options a:hover {
            text-decoration: underline;
        }
        button[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
            margin-top: 10px;
        }
        .logo{
            max-width: 100px;
            max-height: 100px;
            margin-left: 125px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    
    <div id="login-form" class="container">
    <h2 class="login-tab">S'isncrire</h2>
    <img src="logo.png" alt="error" class="logo">
        <form action="controller.php" method="post" class="custom-form contact-form" onsubmit="return validateForm()">
            <input type="text" class="form-control" name="email" id="Email" required placeholder="Enter your email">
            <input type="password" class="form-control" name="password" id="password" required placeholder="password">
            <input type="password" class="form-control" name="conform_password" id="conform_password" required placeholder="Confirm password">
            <div id="errorMessages" class="error"></div>
            <div class="options">
                <a href="#" style="margin-right:100px;">Forgot password?</a>
                <a href="login.php" style="margin-left:10px;">login</a>
            </div>

            <button type="submit"  name="signup">S'isncrire</button>
        </form>
        
    </div>

    <script>
        function validateForm() {
            var email = document.getElementById("Email").value;
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("conform_password").value;
            var errorMessages = document.getElementById("errorMessages");
            errorMessages.innerHTML = "";

            var emailPattern = /@supnum\.mr$/;
            var passwordMinLength = 8;
            var isValid = true;

            if (!emailPattern.test(email)) {
                errorMessages.innerHTML += "L'email doit contenir @supnum.mr<br>";
                isValid = false;
            }

            if (password.length < passwordMinLength) {
                errorMessages.innerHTML += "Le mot de passe doit contenir au moins 8 caractères<br>";
                isValid = false;
            }

            if (password !== confirmPassword) {
                errorMessages.innerHTML += "Les mots de passe ne correspondent pas<br>";
                isValid = false;
            }

            return isValid;
        }
    </script>
</body>
</html>