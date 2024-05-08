<?php
include "db_conn.php";

if (isset($_POST['submit'])) {
    $titre = $_POST['titer'];
    $Encadrer = $_POST['Encadrer'];
    $Description = $_POST['Description'];
    $semester = $_POST['semester'];
    $Technologie = $_POST['Technologie'];
    
    $sql = "INSERT INTO p_i (titre, encadrer, `description`, technologie, semester) 
            VALUES ('$titre', '$Encadrer', '$Description', '$Technologie', '$semester')";

    if (mysqli_query($conn, $sql)) {
        echo "Inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
}
?>
