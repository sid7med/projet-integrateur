<?php
include "db_conn.php";

if (isset($_POST['submit'])) {

    $titre = mysqli_real_escape_string($conn, $_POST['titer']);
    $Encadrer = mysqli_real_escape_string($conn, $_POST['Encadrer']);
    $Description = mysqli_real_escape_string($conn, $_POST['Description']);
    $semester = mysqli_real_escape_string($conn, $_POST['semester']);
    $Technologie = mysqli_real_escape_string($conn, $_POST['Technologie']);
    $annee = mysqli_real_escape_string($conn, $_POST['annee']);
    $professors = $_POST['professors'];

    $lastInsertedId = null;
    $professorId = null;

    foreach($professors as $prof) {
        $sql = "INSERT INTO p_i (titre, encadrer, `description`, technologie, semester, id_professeur, annee)
                VALUES ('$titre', '$Encadrer', '$Description', '$Technologie', '$semester', '$prof', '$annee')";

        if (mysqli_query($conn, $sql)) {
            $lastInsertedId = mysqli_insert_id($conn);
            $professorId = $prof;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    $sql1 = "INSERT INTO encadrant(id_professeur, id_pi) VALUES ('$professorId', '$lastInsertedId')";
if (mysqli_query($conn,$sql1))
{
    echo"yes";
}
    mysqli_close($conn);
}
?>
