<?php
session_start();
      include("db_conn.php");
   

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $email = mysqli_real_escape_string($conn, $email);
    $sql = "SELECT id, email, `password`, `role` FROM users WHERE email = '$email'
    and `password` = '$password'";
    $res = mysqli_query($conn, $sql);

    
$sql_1="SELECT lead from etudiant WHERE matricule=LEFT('$email', 5) ";
$res_1=mysqli_query($conn,$sql_1);
$row_1 = mysqli_fetch_assoc($res_1);

$leader=$row_1["lead"];
   
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);

   
            if ($row['role'] == 1) {
                $_SESSION['admin']=$row['id'];
                $_SESSION['role']=$row['role'];
                header("location: admin/index.php");
            } elseif ($row['role'] == 2) {
                
                $_SESSION['prof']=$row['id'];
                $_SESSION['role']=$row['role'];
                header("location: prof/index.php");
            } elseif ($row['role'] == 3) {
                
                $_SESSION['user']=$row['id'];
                $_SESSION['role']=$row['role'];
                $_SESSION['lead']=$leader;

                header("location:users/index.php");
            } else {
                
                $_SESSION['ent']=$row['id'];
                $_SESSION['role']=$row['role'];
                header("location:enterprise/index.php");
            }
       
    } else {
        echo "Aucun utilisateur trouvé avec cet email.";
    }

    // Fermer la connexion
    mysqli_close($conn);
}
    ?>

             

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration and login Form</title>
    <!-- importing fontawesome kit -->
    <script src="https://kit.fontawesome.com/667417c7ec.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="login.css">

    <!--    -->

    <!-- Lets add some styling -->
    <style>
       
    </style>
</head>

<body>

    <div class="container">
        <img src="logo.png" alt="error" class="logo">
        <div class="tabs">
            <h2 class="reg-tab">S'inscrire</h2>
            <h2 class="login-tab active">Login</h2>
        </div>
        <!-- login part -->
        <div id="login-form" class="active">
            <form action="" method="post">
                <input type="text" name="email" id="Email" required placeholder="Entrer votre email">
                <input type="password" name="password" id="password" required placeholder="password">
                <div class="options">
                    <!-- <div class="remember">
                        <input type="checkbox" name="rem" id="rem">
                        <p>Remember Me</p>
                    </div> -->
                    <a href="modifier_mot_de_passe.php">Mot de passe oublié ?</a>
                </div>
                <button type="submit" name="submit">Se connecter</button>
            </form>
        </div>
        <!-- Lets add registration form -->
        <div id="registration-form">
            <form action="">
               
                <input type="email" name="email" id="email" placeholder="Entrer votre email">
                <input type="password" name="pass" id="pass" placeholder="Entrer le mot de passe">
                <input type="password" name="confirm-pass" id="conform-pass" placeholder="Confirm Password">
                <div class="tnc">
                    <!-- <input type="checkbox" name="accept" id="accept"> -->
                    <!-- <p>I accept the <a href="#">Terms & Conditions</a></p> -->
                </div>
                <button type="submit" >S'isncrire</button>
               <center> <a href="enterprise/enterprise.php">S'inscrire d enterpris </a></center>
            </form>
        </div>

    </div>
    <!-- lets use some javascript to make these tabs to work -->
    <script>
        const reg_form = document.querySelector("#registration-form");
        const login_form = document.querySelector("#login-form");

        const reg_tab = document.querySelector('.reg-tab');
        const login_tab = document.querySelector('.login-tab');

        reg_tab.addEventListener('click',e=>{
            login_form.style.display = 'none';
            reg_form.style.display = 'block';
            reg_tab.classList.add('active');
            login_tab.classList.remove('active')
        })
        login_tab.addEventListener('click',e=>{
            reg_form.style.display = 'none';
            login_form.style.display = 'block';
            reg_tab.classList.remove('active');
            login_tab.classList.add('active')
        })

    </script>
</body>

</html>

