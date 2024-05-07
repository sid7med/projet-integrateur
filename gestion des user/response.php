
<?php
// Include connection file 
include_once("db_conn.php");

// Initialize all variables
$params = $columns = $totalRecords = $data = array();

$params = $_REQUEST;

// Define index of columns
$columns = array( 
    0 =>'nom',
    1 =>'prénom', 
    2 => 'email',
    3 => 'password',

);

$where = $sqlTot = $sqlRec = "";

// Check search value existence
if (!empty($params['search']['value'])) {   
    $where .= " WHERE ";
    $where .= " (matricule LIKE '".$params['search']['value']."%' ";    
    $where .= "  OR nom LIKE '".$params['search']['value']."%' ";
    $where .= " OR prenom LIKE '".$params['search']['value']."%' ";
    $where .= " OR niveaux LIKE '".$params['search']['value']."%' ";
    $where .= " OR semester LIKE '".$params['search']['value']."%') ";
}

// Getting total number records without any search
$sql = "SELECT nom, prenom, email, password FROM `utilisateurs` ";
$sqlTot .= $sql;
$sqlRec .= $sql;

// Concatenate search SQL if value exists
if (!empty($where)) {
    $sqlTot .= $where;
    $sqlRec .= $where;
}

// Order by clause
if (isset($params['order'][0]['column']) && isset($columns[$params['order'][0]['column']])) {
    $sqlRec .= " ORDER BY " . $columns[$params['order'][0]['column']] . " " . $params['order'][0]['dir'];
}

// Limit clause
if (isset($params['start']) && isset($params['length'])) {
    $sqlRec .= " LIMIT " . $params['start'] . ", " . $params['length'];
}

$queryTot = mysqli_query($conn, $sqlTot) or die("Database error: " . mysqli_error($conn));
$totalRecords = mysqli_num_rows($queryTot);

$queryRecords = mysqli_query($conn, $sqlRec) or die("Error fetching data: " . mysqli_error($conn));

// Iterate over results rows and create new index array of data
while ($row = mysqli_fetch_row($queryRecords)) { 
    $data[] = $row;
}

$json_data = array(
    "draw"            => isset($params['draw']) ? intval($params['draw']) : 0,   
    "recordsTotal"    => intval($totalRecords),  
    "recordsFiltered" => intval($totalRecords),
    "data"            => $data   // Total data array
);

echo json_encode($json_data);  // Send data as JSON format
?>
