<?php
session_start();
include "../db_conn.php";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $_SESSION['email'] = $email;

    $emailCheckQuery = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($emailCheckQuery);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $emailCheckResult = $stmt->get_result();

    if ($emailCheckResult) {
        if ($emailCheckResult->num_rows > 0) {
            $code = rand(999999, 111111);
            $_SESSION["code"] = $code;

            $subject = 'Code de vérification des e-mails';
            $message = "Notre code de vérification est $code";
            $url = "https://script.google.com/macros/s/AKfycbw2MsBGjkJ7hzw_cnE5jW-CmqHZbibaNjrEz_DNXZZgCXfptPo5B1yy7x37kFrwSZkeFg/exec";
            $ch = curl_init($url);
            curl_setopt_array($ch, [
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_POSTFIELDS => http_build_query([
                    "recipient" => $email,
                    "subject"   => $subject,
                    "body"      => $message
                ])
            ]);

            $result = curl_exec($ch);
            curl_close($ch);

            if ($result) {
                $message = "Nous avons envoyé un code de vérification à votre adresse e-mail <br> $email";
                $_SESSION['message'] = $message;
                header('Location: verify_reset_code.php');
                exit();
            } else {
                $errors['otp_errors'] = '<div class="alert alert-danger row-md-15" id="success-alert">
                                            <span aria-hidden="true">&times;</span>
                                            <strong>Échec lors de l’envoi du code ! </strong>
                                        </div>';
            }
        } else {
            $errors['invalidEmail'] = '<p style="color:red">Adresse e-mail non valide</p>';
        }
    } else {
        $errors['db_error'] = "Échec lors de la vérification des e-mails de la base de données!";
    }
}

if (isset($_POST['verify'])) {
    $_SESSION['message'] = "";
    $code_1 = $_POST["otp"];

    if ($_SESSION['code'] == $code_1) {
        header("Location: reset_password.php");
        exit();
    } else {
        $errors['verification_error'] = "Code de vérification non valide";
    }
}

if (isset($_POST['reset_password'])) {
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    if (strlen($password) < 8) {
        $errors['password_error'] = 'Utilisez 8 caractères ou plus avec un mélange de lettres, de chiffres et de symboles';
    } else {
        if ($password != $confirmPassword) {
            $errors['password_error'] = 'Mot de passe ne correspondant pas';
        } else {
            $hashedPassword = md5($password);
            $email = $_SESSION['email'];

            $updatePassword = "UPDATE users SET `password` = ? WHERE email = ?";
            $stmt = $conn->prepare($updatePassword);
            $stmt->bind_param("ss", $hashedPassword, $email);
            $stmt->execute();

            session_destroy();
            header('Location: ../login.php');
            exit();
        }
    }
}
?>
