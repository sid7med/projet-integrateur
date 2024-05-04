
<?php
// Include connection file 
include_once("db_con.php");

// Initialize all variables
$params = $columns = $totalRecords = $data = array();

$params = $_REQUEST;

// Define index of columns
$columns = array( 
    0 =>'login',
    1 =>'email', 
    2 => 'password',
    3 => 'role',

);

$where = $sqlTot = $sqlRec = "";

// Check search value existence
if (!empty($params['search']['value'])) {   
    $where .= " WHERE ";
    $where .= " (login LIKE '".$params['search']['value']."%' ";    
    $where .= "  OR email LIKE '".$params['search']['value']."%' ";
    $where .= "  OR role LIKE '".$params['search']['value']."%' ";
    
}

// Getting total number records without any search
$sql = "SELECT login, email, password, role FROM `users` ";
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
