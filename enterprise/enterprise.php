<?php
include("db_conn.php"); // Ensure correct path to db_conn.php and include the semicolon at the end

if(isset($_POST["submit"])) { 
    // print_r($_POST);
    // print_r($_FILES);
    // Ensure proper initialization of variables
    $uploadOk = 1;
    $target_file = "images/" . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Fetch form data
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size (uncomment if you want to enable this check)
    // if ($_FILES["image"]["size"] > 500000) {
    //     echo "Sorry, your file is too large.";
    //     $uploadOk = 0;
    // }

    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    if (!in_array($imageFileType, $allowedExtensions)) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded.";
            $imageName = basename($_FILES["image"]["name"]);
            $sql = "INSERT INTO images (image_name) VALUES ('$imageName')";
            if ($conn->query($sql) === TRUE) {
                echo "Record added successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            // Database connection
            // $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            // Insert image name into database
            // print_r($_POST);
            $imageName = basename($_FILES["image"]["name"]);
            $Nom_enterprise = $_POST['enterprise-name'];
            $Adresse = $_POST['enterprise-address'];
            $Domaine_activite = $_POST['enterprise-domaine'];
            $Email = $_POST['enterprise-email'];
            $Nom_professionnel = $_POST['enterprise-chef'];
            $Password = $_POST['enterprise-password']; 
            $Telephone = $_POST['enterprise-tel'];

            $password_hash = password_hash($Password, PASSWORD_DEFAULT); // Use appropriate hashing algorithm

            $sql = "INSERT INTO enterprise (nom_enterprise, Adresse, Domaine_activite, Email, Nom_profitionelle, password,tel)
                    VALUES ('$Nom_enterprise', '$Adresse', '$Domaine_activite', '$Email', '$Nom_professionnel', '$password_hash','$Telephone')";

            if ($conn->query($sql) === TRUE) {
                echo `<div class=\"modal_wrapper\">
                <div class=\"shadow\"></div>
                <div class=\"success_wrap\">
                    <span class=\"modal_icon\"><ion-icon name=\"checkmark-sharp\"></ion-icon></span>
                    <p> Merci de votre confiance 😊 </p>
                </div>
            </div>`;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            // Close the database connection
            $conn->close();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Progressive Form | Multi Steps Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <style>
        .dahan{
            width: auto;
            height: auto;
            margin:auto;
            max-width: 200px;
            max-height:200px;
            /* display: flex; */
        }
        input[type=file]::file-selector-button {
  margin-right: 20px;
  border: none;
  background: #084cdf;
  padding: 10px 20px;
  border-radius: 10px;
  color: #fff;
  cursor: pointer;
  transition: background .2s ease-in-out;
}

input[type=file]::file-selector-button:hover {
  background: #0d45a5;
}
    </style>
</head>
<body>

<div class="wrapper">
    <div class="header">
        <ul>
            <li class="active form_1_progessbar">
                <div>
                    <p>1</p>
                </div>
            </li>
            <li class="form_2_progessbar">
                <div>
                    <p>2</p>
                </div>
            </li>
            
        </ul>
    </div>
    <div class="form_wrap">
        <div class="form_1 data_info">
            <h2>Information de l'enterprise</h2>
            <form method="post" enctype="multipart/form-data">
                <div class="form_container">
                    <div class="input_wrap">
                        <label for="email">Nom de l'enterprise :</label>
                        <input type="text" name="enterprise-name" class="input" id="email">
                    </div>
                    <div class="input_wrap">
                        <label for="password">Adresse de l'enterprise :</label>
                        <input type="text" name="enterprise-address" class="input" id="password">
                    </div>
                    <div class="input_wrap">
                        <label for="confirm_password">Telephone :</label>
                        <input type="tel" name="enterprise-tel" class="input" >
                    </div>
                    <div class="input_wrap">
                        <label for="confirm_password">Domaine d'activite :</label>
                        <input type="text" name="enterprise-domaine" class="input" >
                    </div>
                    <div class="input_wrap">
                        <label for="confirm_password">Logo de l'enterprise :</label>
                        <input class="form-control" type="file" name="image" id="image" onchange="displayImage()">
                    </div>
                    <div class="dahan" id="imagePreview">
                        
                    </div>
                </div>
        </div>
        <div class="form_2 data_info" style="display: none;">
            <h2>Information personnel</h2>
                <div class="form_container">
                    <div class="input_wrap">
                        <label for="user_name">Nom de profissionelle</label>
                        <input type="text" name="enterprise-chef" class="input" id="user_name">
                    </div>
                    <div class="input_wrap">
                        <label for="first_name">Email </label>
                        <input type="email" name="enterprise-email" class="input" id="first_name">
                    </div>
                    <div class="input_wrap">
                        <label for="last_name">Mot de passe</label>
                        <input type="password" name="enterprise-password" class="input" id="last_name">
                    </div>
                </div>
                <div class="btns_wrap">
                <div class="common_btns form_2_btns" style="display: none;">
            <button type="button" class="btn_back"><span class="icon"><ion-icon name="arrow-back-sharp"></ion-icon></span>Retourne</button>
            <button type="submit" class="btn_done" name="submit">Envoyer<span class="icon" name="submit"><ion-icon name="arrow-forward-sharp"></ion-icon></span></button>
        </div>
        </div>
            </form>
        </div>
        
    <div class="btns_wrap">
        <div class="common_btns form_1_btns">
            <button type="button" class="btn_next">Suivant<span class="icon"><ion-icon name="arrow-forward-sharp"></ion-icon></span></button>
        </div>
        
        <!-- <div class="common_btns form_3_btns" style="display: none;">
            <button type="button" class="btn_back"><span class="icon"><ion-icon name="arrow-back-sharp"></ion-icon></span>Retourne</button>
            <button type="button" class="btn_done" name="submit">Envoyer</button>
        </div> -->
    </div>
</div>

</div> <!-- End of wrapper -->

<!-- <div class="modal_wrapper">
    <div class="shadow"></div>
    <div class="success_wrap">
        <span class="modal_icon"><ion-icon name="checkmark-sharp"></ion-icon></span>
        <p> Merci de votre conffience 😊 </p>
    </div>
</div> -->

<script type="text/javascript" src="script.js"></script>
<script>
    function displayImage() {
    const fileInput = document.getElementById('image');
    const previewContainer = document.getElementById('imagePreview');
    const previewImage = document.createElement('img');
    previewImage.style= "max-width: 100%; max-height: 100%;";
    // Clear previous preview if any
    previewContainer.innerHTML = '';

    // Retrieve selected image file
    const file = fileInput.files[0];

    if (file) {
        const reader = new FileReader();

        reader.onload = function(e) {
            previewImage.src = e.target.result;
        }

        reader.readAsDataURL(file);

        // Append image preview to the container
        previewContainer.appendChild(previewImage);
    } else {
        // If no file selected, display a placeholder or message
        const noImageText = document.createTextNode('No image selected');
        previewContainer.appendChild(noImageText);
    }
}
</script>

</body>
</html>
