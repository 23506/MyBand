<?php
$result_per_page = 2;
$result_list = array();
//add model for articles

$sql = "SELECT * FROM articles";
$query = "SELECT * FROM articles LIMIT 4,5";



$result = $mysqli_query($mysqli,$query) or die ('error querying');
$number_of_results = mysqli_num_rows($result);


while($item=$result->fetch_assoc()) {
    $result_list[] = $item;

}

// huidige pagina checken

if ((!isset()))