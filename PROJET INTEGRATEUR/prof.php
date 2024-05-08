<?php
$conn = mysqli_connect("localhost", "root", "", "p_i");
if (!$conn) {
    die("echo error");
}
$sql = "SELECT * FROM `professeur`";
$res = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/templatemo-first-portfolio-style.css">
    <title>Document</title>
    <style>
        /* Styles personnalisés */
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
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
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-lg-6 col-12 mt-5 mt-lg-0">
            <form action="ins.php" method="post" class="custom-form contact-form" role="form">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-floating">
                            <input type="text" name="titer" id="name" class="form-control" placeholder="titer" required="">
                            <label for="floatingInput">Titer</label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-floating">
                            <select name="semester" id="semester" class="form-control">
                                <option value="s2">s2</option>
                                <option value="s3">s3</option>
                                <option value="s4">s4</option>
                                <option value="s5">s5</option>
                            </select>
                            <label for="floatingInput">Semester</label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-floating">
                            <input type="text" name="Technologie" id="email" class="form-control" placeholder="Technologie" required="">
                            <label for="floatingInput">Technologie</label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-floating">
                            <input type="text" name="Encadrer" id="email" class="form-control" placeholder="Encadrer" required="">
                            <label for="floatingInput">Encadrer</label>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12">
                        <div class="form-floating">
                            <textarea class="form-control" id="message" name="Description" placeholder="Description"></textarea>
                            <label for="floatingTextarea">Description</label>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12">
                        <div class="form-floating">
                            <input type="text" name="annee" id="email" class="form-control" placeholder=" par example (2024) " required="">
                            <label for="floatingInput">Annee</label>
                        </div>
                    </div>
                    <div class="overflow-auto" style="max-height: 25px;">
    <?php mysqli_data_seek($res, 0);  ?>
    <?php while ($row2 = mysqli_fetch_array($res)) : ?>
        <div class="col-lg-12 col-12">
            <input type="checkbox" name="professors[]" value="<?php echo $row2[0]; ?>">
            <label for="<?php echo $row2[0]; ?>"><?php echo $row2[1]; ?></label>
        </div>
    <?php endwhile; ?>
</div>
                    <div class="col-lg-3 col-12 ms-auto" style="margin-top: 20px;">
                        <button type="submit" name="submit" class="form-control">Enregister</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
