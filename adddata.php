<?php
include 'conn.php';



$client_id      = $_POST['client_id'];
$temperature    = $_POST['temperature'];
$bloodpresure   = $_POST['bloodpresure'];
$heartbeat      = $_POST['heartbeat'];
$comment        = $_POST['comment'];

$current_date   = date("Y/m/d");
/**
$client_id      = '1';
$temperature    = '101';
$bloodpresure   = '101';
$heartbeat      = '101';
$comment        = "101";
$current_data   = date("Y/m/d");
 */
echo $connect->query("INSERT INTO client_checkup (client_id,temperature,blood_presure,heart_beat,comment,date_placed) VALUES (".$client_id.",'".$temperature."','".$bloodpresure."','".$heartbeat."','".$comment."','".$current_date."')");