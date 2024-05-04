<?php 
      include("db_conn.php");
      if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password']; // Don't hash the password here
        
        // Query for admin table
        $stmt_admin = $conn->prepare("SELECT email, `password` FROM adminstrateur WHERE Email=?");
        $stmt_admin->bind_param("s", $email);
        $stmt_admin->execute();
        $result_admin = $stmt_admin->get_result();

        // Query for users table
        $stmt_users = $conn->prepare("SELECT email, `password` FROM users WHERE Email=?");
        $stmt_users->bind_param("s", $email);
        $stmt_users->execute();
        $result_users = $stmt_users->get_result();

        if($result_admin->num_rows == 1){
          $row = $result_admin->fetch_assoc();
          $hashed_password = $row['password'];
          if($password === $hashed_password){ 
            // Compare passwords directly for admin
            $_SESSION['email'] = $email; // Store user's email in session
            header("Location: admin/index.html"); // Redirect to admin page
            exit(); // Stop further execution
          
          } else {
            echo "<div class='message'>;
                   <p>Wrong Password</p>
                  </div> <br>";
            echo "<a href='login.php'><button class='btn'>Go Back</button>";
          }
        } 
        elseif ($result_users->num_rows == 1) {
          $row = $result_users->fetch_assoc();
          $hashed_password = $row['password'];
          if($password === $hashed_password){ // Compare hashed passwords for users
            $_SESSION['email'] = $email; // Store user's email in session
            header("Location: index.html"); // Redirect to client page
            exit(); // Stop further execution
         } else {
            echo "<div class='message'>
                   <p>Wrong Password</p>
                  </div> <br>";
            echo "<a href='login.php'><button class='btn'>Go Back</button>";
          }
        } else {
          echo "<div class='message'>
                 <p>No user found with that email</p>
                </div> <br>";
          echo "<a href='login.php'><button class='btn'>Go Back</button>";
        }
      }

      $conn->close();
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