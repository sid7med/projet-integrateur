<?php
session_start();
  if(isset($_POST['envoyer'])){

    $m = $_SESSION['m'];
    $connection = mysqli_connect('localhost','root','','projet');
    $choix_1 = $_POST['choix_1'];
    $choix_2 = $_POST['choix_2'];
    $choix_3 = $_POST['choix_3'];
    $query = "INSERT INTO `choix`(`matricule`, `choix_1`, `choix_2`, `choix_3`) VALUES ('$m','$choix_1','$choix_2','$choix_3')";
    mysqli_query($connection,$query);
}

?>


<html>
<head>
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="style.css?v=<?php echo time();?>">
</head>
<body>

<div class="container">
    <form action="form.php"class= "form-group"method ="post">
        <h1>Choisissez votre spécialité</h1>
    <table class="table">
        <tr>
            <td><pre>      </pre></td>
            <th>1er choix</th>
            <th>2er choix</th>
            <th>3er choix</th>
        </tr>
        <tr>
            <td>DSI</td>
            <td><input type="radio" name="choix_1" value="DSI" class="radio"></td>
            <td><input type="radio" name="choix_2" value="DSI" class="radio"></td>
            <td><input type="radio" name="choix_3" value="DSI" class="radio"></td>
        </tr>
        <tr>
            <td>CNM</td>
            <td><input type="radio" name="choix_1" value="CNM" class="radio"></td>
            <td><input type="radio" name="choix_2" value="CNM" class="radio"></td>
            <td><input type="radio" name="choix_3" value="CNM" class="radio"></td>
        </tr>
        <tr>
            <td>RSS</td>
            <td><input type="radio" name="choix_1" value="RSS" class="radio"></td>
            <td><input type="radio" name="choix_2" value="RSS" class="radio"></td>
            <td><input type="radio" name="choix_3" value="RSS" class="radio"></td>
        </tr>
        
    </table>
    <input type="submit" name="envoyer" class="btn btn-primary">
    </form>
</div>
</body>
</html>