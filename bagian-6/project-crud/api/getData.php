<?php
require 'db.php';

/***** Only for testing for 'getData()' function ******/

// $sql = "SELECT * FROM articles";


// $result = $mysqli->query($sql);

// while($row = $result->fetch_assoc()) {
//     $json[] = $row;
// }

// $data['data'] = $json;

// echo json_encode($data);

/****************** end testing **********************/

$num_rec_per_page = 5;

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
};

$start_from = ($page - 1) * $num_rec_per_page;

$sqlTotal = "SELECT * FROM articles";

$sql = "SELECT * FROM articles Order By id desc LIMIT $start_from, $num_rec_per_page";


$result = $mysqli->query($sql);


while ($row = $result->fetch_assoc()) {

    $json[] = $row;
}

$data['data'] = $json;


$result =  mysqli_query($mysqli,$sqlTotal);


$data['total'] = mysqli_num_rows($result);


echo json_encode($data);

?>