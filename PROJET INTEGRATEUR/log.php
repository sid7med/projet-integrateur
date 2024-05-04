<?php
session_start();
include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['password'])) {
    

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $pass = validate($_POST['password']);

    if (empty($email)) {
        header("Location: login.php?error=User Name is required");
        exit();
    } else if (empty($pass)) {
        header("Location: login.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$pass' AND is_valid= 1 ";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $pass) {
                $_SESSION['email'] = $row['email'];
                $_SESSION['is_valid'] = $row['is_valid'];
                header("Location: index.html");
                exit();
            } else {
                header("Location: login.php?error=Incorect User name or password");
                exit();
            }
        } else {
            header("Location: login.php?error=Incorect User name or password");
            exit();
        }
       
    }
} else {
    header("Location: login.php");
    exit();
}
