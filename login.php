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
        .logo{
            max-width: 100px;
            max-height: 100px;
            margin-left: 125px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="login-tab">Login</h2>
        <img src="logo.png" alt="error" class="logo">
        <div id="login-form">
            <form action="index.php" method="post" class="custom-form contact-form">
                <input type="text" class="form-control" name="email" id="Email" required placeholder="Enter your email">
                <input type="password" class="form-control"  name="password" id="password" required placeholder="password">
               
                <div class="options">
                    <a href="forgot_password.php" style=" margin-right:100px;" >Forgot password?</a>
                    <a href="signup.php" style="margin-left:10px;">S'inscrire</a>
                </div>
                
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>


