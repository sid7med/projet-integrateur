<?php
include "../db_conn.php";

if (isset($_POST['Enregister'])) {
    // Escape input values for security
    $titre = mysqli_real_escape_string($conn, $_POST['titer']);
    $Description = mysqli_real_escape_string($conn, $_POST['Description']);
    $semester = mysqli_real_escape_string($conn, $_POST['semester']);
    $Technologie = mysqli_real_escape_string($conn, $_POST['Technologie']);
    $annee = date("Y");
    $professors = $_POST['professors'];

    // Prepared statement for inserting into p_i table
    $stmt = $conn->prepare("INSERT INTO p_i (titre, `description`, technologie, semester, annee) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $titre, $Description, $Technologie, $semester, $annee);

    if ($stmt->execute()) {
        // Get the last inserted id
        $lastInsertedId = $stmt->insert_id;

        // Prepared statement for inserting into encadrant table
        $stmt2 = $conn->prepare("INSERT INTO encadrant (id_professeur, id_pi) VALUES (?, ?)");
        $stmt2->bind_param("ii", $professorId, $lastInsertedId);

        // Insert each professor linked to the project
        foreach ($professors as $professorId) {
            if (!$stmt2->execute()) {
                echo "Error: " . $stmt2->error;
            }
        }

        echo "Inserted successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statements and the database connection
    $stmt->close();
    $stmt2->close();
    mysqli_close($conn);
}
?>
