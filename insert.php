<?php
include "conn.php";
$username   = $_POST['username'];
$password   = $_POST['password'];

    $queryResult = $connect->query("SELECT * FROM users WHERE email='".$username."'");

    $result=array();

    while ($fetchData=$queryResult->fetch_assoc()) {
        $result[]=$fetchData;
    }

    echo json_encode($result);
