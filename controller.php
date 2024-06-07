<?php
session_start();
include "db_conn.php";

if (isset($_POST['signup'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['conform_password'];

    $errors = [];

    // Check if email domain is correct
    $email_parts = explode("@", $email);
    if ($email_parts[1] !== 'supnum.mr') {
        $errors['email'] = "L'email doit contenir le domaine '@supnum.mr'.";
    }

    // Check password length and matching
    if (strlen($password) < 8) {
        $errors['password'] = 'Utilisez 8 caractères ou plus avec un mélange de lettres, de chiffres et de symboles';
    } elseif ($password !== $confirm_password) {
        $errors['confirm_password'] = 'Les mots de passe ne correspondent pas !';
    }

    // Check if the email exists in the database
    $stmt = $conn->prepare("SELECT role, is_valid FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($role, $is_valid);
    $stmt->fetch();

    if ($stmt->num_rows > 0) {
        // Email exists in the database
        if ($role == 3) {
            if ($is_valid == 1) {
                $errors['email'] = "Le compte est déjà activé.";
            } else {
                // Proceed with the signup process
                $_SESSION['code'] = rand(100000, 999999);
                $_SESSION['email'] = $email;
                $_SESSION['pwd'] = password_hash($password, PASSWORD_BCRYPT); // Hash password securely

                $subject = 'Code de vérification des e-mails';
                $message = "Notre code de vérification est {$_SESSION['code']}";
                $url = "https://script.google.com/macros/s/AKfycbz1KWjBC8wx3Ay9fYYg6pW_1dcS-07rYT07Xxq0SscKOgUXpiPcq5zqgfTsR7PZFr4j/exec";
                $ch = curl_init($url);
                curl_setopt_array($ch, [
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_POSTFIELDS => http_build_query([
                        "recipient" => $email_parts[0],
                        "subject"   => $subject,
                        "body"      => $message
                    ])
                ]);
                $result = curl_exec($ch);
                curl_close($ch);

                if ($result) {
                    header('Location: verifier_code.php');
                    exit();
                } else {
                    $errors['otp_errors'] = 'Échec lors de l’envoi du code!';
                }
            }
        } else {
            $errors['email'] = "L'email est associé à un autre rôle.";
        }
    } else {
        // Email does not exist in the database, continue with signup process
        if (empty($errors)) {
            $_SESSION['code'] = rand(100000, 999999);
            $_SESSION['email'] = $email;
            $_SESSION['pwd'] = password_hash($password, PASSWORD_BCRYPT); // Hash password securely

            $subject = 'Code de vérification des e-mails';
            $message = "Notre code de vérification est {$_SESSION['code']}";
            $url = "https://script.google.com/macros/s/AKfycbz1KWjBC8wx3Ay9fYYg6pW_1dcS-07rYT07Xxq0SscKOgUXpiPcq5zqgfTsR7PZFr4j/exec";
            $ch = curl_init($url);
            curl_setopt_array($ch, [
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_POSTFIELDS => http_build_query([
                    "recipient" => $email_parts[0],
                    "subject"   => $subject,
                    "body"      => $message
                ])
            ]);
            $result = curl_exec($ch);
            curl_close($ch);

            if ($result) {
                header('Location: verifier_code.php');
                exit();
            } else {
                $errors['otp_errors'] = 'Échec lors de l’envoi du code!';
            }
        }
    }

    $stmt->close();
}

if (isset($_POST['verify'])) {
    $_SESSION['message'] = "";
    $code = $_SESSION['code'];
    $otp = $_POST['otp'];

    if ($otp == $code) {
        $email = $_SESSION['email'];
        $password = $_SESSION['pwd'];

        // Check if the email exists and has role 3
        $stmt = $conn->prepare("SELECT role FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($role);
        $stmt->fetch();

        if ($stmt->num_rows > 0 && $role == 3) {
            // Update password and set is_valid to 1
            $update_stmt = $conn->prepare("UPDATE users SET password = ?, is_valid = 1 WHERE email = ?");
            $update_stmt->bind_param("ss", $password, $email);
            if ($update_stmt->execute()) {
                $_SESSION['message'] = "Compte activé et mot de passe mis à jour avec succès!";
                header('Location: login.php'); // Redirect to a success page
                exit();
            } else {
                $_SESSION['message'] = "Erreur lors de la mise à jour du compte!";
            }
            $update_stmt->close();
        } else {
            // Insert new user
            $role=2;
            $stmt = $conn->prepare("INSERT INTO users (email, password, is_valid, role) VALUES (?, ?, 1, ?)");
            $stmt->bind_param("ssi", $email, $password, $role);
            if ($stmt->execute()) {
                $_SESSION['message'] = "Compte créé avec succès!";
                header('Location: login.php'); // Redirect to a success page
                exit();
            } else {
                $_SESSION['message'] = "Erreur lors de la création du compte!";
            }
        }
        $stmt->close();
    } else {
        $_SESSION['message'] = "Code de vérification incorrect!";
    }

    header('Location: verifier_code.php');
    exit();
   
}
?>
