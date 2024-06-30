<?php
session_start();
include "../db_conn.php";

// Vérifier si l'utilisateur est connecté
if (empty($_SESSION['user'])) {
    header('location: ../logout.php');
    exit();
}

$id = intval($_SESSION['id']); // Assurez-vous que $id est un entier

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.0.5/datatables.min.css" rel="stylesheet">
<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Custom CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-icons.css" rel="stylesheet">
<link href="css/magnific-popup.css" rel="stylesheet">
<link href="css/templatemo-first-portfolio-style.css" rel="stylesheet">
<style>
    .navbar-brand {
        color: var(--p-color);
    }
    .navbar .custom-btn {
        border-color: var(--secondary-color);
        color: var(--secondary-color);
    }
    .btn-primary {
        color: #fff;
        background-color: #14b789;
        border-color: #14b789;
    }
    .page-item.active .page-link {
        background-color: #14b789;
        border-color: #14b789;
    }
    table.dataTable thead>tr>th.dt-orderable-asc,
    table.dataTable thead>tr>th.dt-orderable-desc,
    table.dataTable thead>tr>td.dt-orderable-asc,
    table.dataTable thead>tr>td.dt-orderable-desc {
        background-color: #14b789;
    }
</style>
</head>
<body>
<?php
  include "nav.php";
echo"<br><br><br><br><br><br>";
?>
<div class="container">
<table id="example" class="table table-hover text-center">
<thead class="table">
    <tr>
        <th scope="col">Nom</th>
        <th scope="col">Semester</th>
        <th scope="col">Action</th>
    </tr>
</thead>
<tbody>
<?php
$conn = new mysqli("localhost", "root", "", "p_i");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT e.nom, e.semester, d.id AS dem_id, d.dem FROM etudiant e LEFT JOIN dem d ON d.id_lead = e.id WHERE e.lead = 1 AND e.semester = (SELECT semester FROM etudiant WHERE id = $id)";

$res = $conn->query($sql);

if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['nom']) . "</td>";
        echo "<td>" . htmlspecialchars($row['semester']) . "</td>";
        echo "<td>";
        if (!empty($row['dem_id'])) {
            echo "<form method='post'>";
            echo "<input type='hidden' name='id' value='" . intval($row['dem_id']) . "'>";
            echo "<button type='submit' name='accept' class='btn btn-success'>Accepter</button>";
            echo "<button type='submit' name='decline' class='btn btn-danger'>Décliner</button>";
            echo "</form>";
        } else {
            echo "Pas de demande";
        }
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='3'>Aucun enregistrement trouvé</td></tr>";
}

// Gestion de la soumission du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['accept'])) {
        $id = intval($_POST['id']); // Assurez-vous que $id est un entier
    
        // Récupérer id_etudiant depuis la table dem
        $id_etudiant_sql = "SELECT id_etudiant FROM dem WHERE id = $id";
        $result = mysqli_query($conn, $id_etudiant_sql);
        
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $id_etudiant = intval($row['id_etudiant']);
    
            // Récupérer le semester depuis la table etudiant
            $semester_sql = "SELECT semester FROM etudiant WHERE id = $id_etudiant";
            $semester_result = mysqli_query($conn, $semester_sql);
            
            if ($semester_result && mysqli_num_rows($semester_result) > 0) {
                $semester_row = mysqli_fetch_assoc($semester_result);
                $semester = $semester_row['semester'];
    
                // Insérer dans la table membres_group pour tous les groupes
                $insert_sql = "INSERT INTO membres_group (id_etudiant, id_group, semester) 
                               SELECT $id_etudiant, id, '$semester' 
                               FROM `group` 
                               WHERE id_etudiant = (SELECT id_lead FROM dem WHERE id = $id)";
                
                if (mysqli_query($conn, $insert_sql)) {
                    // Supprimer toutes les demandes pour cet étudiant
                    $delete_all_sql = "DELETE FROM dem WHERE id_etudiant = $id_etudiant";
                    if (mysqli_query($conn, $delete_all_sql)) {
                        echo "<script>alert('Record validated and removed all other requests for this student.'); window.location.href = window.location.href;</script>";
                    } else {
                        echo "<script>alert('Error deleting other records from dem table for this student: " . mysqli_error($conn) . "');</script>";
                    }
                } else {
                    echo "<script>alert('Error inserting record into membres_group table: " . mysqli_error($conn) . "');</script>";
                }
            } else {
                echo "<script>alert('No semester found for the student.');</script>";
            }
        } else {
            echo "<script>alert('No student found for the given id.');</script>";
        }
    } elseif (isset($_POST['decline'])) {
        $id = intval($_POST['id']); // Assurez-vous que $id est un entier
        
        // Supprimer l'enregistrement de la table dem
        $delete_sql = "DELETE FROM dem WHERE id = $id";
        if (mysqli_query($conn, $delete_sql)) {
            echo "<script>alert('Record canceled and removed from dem table.'); window.location.href = window.location.href;</script>";
        } else {
            echo "<script>alert('Error deleting record from dem table: " . mysqli_error($conn) . "');</script>";
        }
    }
    
    // Fermer la connexion
    mysqli_close($conn);
}
    ?>
    
</tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script src="js/jquery.js"></script>
<script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.0.5/datatables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable({});
    });
</script>
</body>
</html>
