<?php

require_once 'bd_connect.php';

$connection = new mysqli($host, $user, $pass, $bd);

if($connection->connect_error) die('Error Connection');

$query = "SELECT * FROM users";
$result = $connection->query($query);

if(!$result) die('Error Result');

$rows = $result->num_rows;
for($i=0; $i<$rows; $i++) {
    $result->data_seek($i);
    echo 'Name: ' . $result->fetch_assoc()['name'].'. ';
    $result->data_seek($i);
    echo 'Sity: ' . $result->fetch_assoc()['city_name'] . "<br>";
}
$result->close();
$connection->close();

// echo "<pre>";
// print_r($result);
// echo "</pre>";