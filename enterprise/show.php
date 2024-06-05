<head>
    <style>
        .d {
            width: 100px;
            height: 100px;
            ;
            /* background-color:none; */
        }

        img {
            width: 70px;
            height: 70px;
        }
    </style>
</head>
<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "p_i";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve image data from the database
$sql = "SELECT image_name FROM images";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $imageName = $row["image_name"];
        echo "<div class=\"d\">";
        echo '<img src="images/' . $imageName . '" alt="' . $imageName . '"><br></div>';
    }
} else {
    echo "0 results";
}
$conn->close();
?>