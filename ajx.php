<?php

include 'conn.php';

$condition = "1";

if (isset($_GET['car_id'])){
  $condition = " car_id=".$_GET['car_id'];
}

$carData = mysqli_query($conn, "SELECT * FROM whipplug WHERE ".$condition);

$response = array();

while($row=mysqli_fetch_assoc($carData)){
  $response[] = $row;
}

echo json_encode($response);
exit;