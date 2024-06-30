
<?php

$conn = mysqli_connect("localhost", "root", "", "p_i");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM `professeur`";
$res = mysqli_query($conn, $sql);
?>
<?php
session_start();
include "../db_conn.php";
include "nav.php";
for ($i=0; $i<6; $i++)
{
    echo "<br>";
}
if (strlen($_SESSION['admin']==0)) {
  header('location: ../logout.php');
  } else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo-first-portfolio-style.css">
    <title>Document</title>
    <style>
        body {
            background-color: #d6eed6;
            
        }
        .custom-form {
            
          margin: auto;
        }
        .form-floating {
            margin-bottom: 20px;
        }
        .checkbox label {
            font-weight: normal;
        }
        .btn-primary {
            width: 100%;
        }
        a {
            color: var(--p-color);
            
        }
        .navbar-brand{
            color: #717275;
        }
        
        .navbar .custom-btn{
            color: #14b789;
            border-color:#14b789;
        }

    </style>
</head>
<body >
   

    <div class="container">
        <div class="col-lg-6 col-12 mt-5 mt-lg-0">
            <form action="ins.php" method="post" class="custom-form contact-form" role="form" style="margin-left:50px;">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="form-floating">
                            <input type="text" name="titer" id="name" class="form-control" placeholder="Name" required="">
                            <label for="floatingInput">Titer</label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-floating">
                            <input type="text" name="Technologie" id="text" class="form-control" placeholder="text" required="">
                            <label for="floatingInput">Technologie</label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-floating">
                            <select name="semester" id="" class="form-control">
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                                <option value="S4">S4</option>
                                <option value="S5">S5</option>
                            </select>
                            <label for="floatingInput">Semester</label>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12">
                        <div class="form-floating">
                            <textarea class="form-control" id="message" name="Description" placeholder="Tell me about the project"></textarea>
                            <label for="floatingTextarea">Description</label>
                        </div>
                    </div>
                    <div class="overflow-auto" style="height:40px; width:650px;  margin-bottom: 20px ;">
                        <?php mysqli_data_seek($res, 0); ?>
                        <?php while ($row2 = mysqli_fetch_array($res)) : ?>
                        <div class="col-lg-12 col-12">
                            <input type="checkbox" name="professors[]" value="<?php echo $row2[0]; ?>">
                            <label for="<?php echo $row2[0]; ?>"><?php echo $row2[1]; ?></label>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <div class="col-lg-3 col-12 ms-auto">
                        <button  class="form-control btn btn-primary" name="Annuler" formnovalidate><a href="index.php" >Annuler</a></button>
                    </div>
                    <div class="col-lg-3 col-12 ms-auto">
                        <button class="form-control btn btn-primary" name="Enregister">Enregister</button>
                    </div>
                </div>
            </form>
        </div>
    </di>
</body>
</html>
<?php
  }
mysqli_close($conn);

?>