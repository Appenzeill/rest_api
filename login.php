<?php
include "conn.php";
$username   = $_POST['username'];
$password   = $_POST['password'];
$hash = "";

$sql = "SELECT * FROM users WHERE email='".$username."'";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $hash = $row["hash"];
    }
}

if (password_verify($password, $hash)) {
    $queryResult = $connect->query("SELECT * FROM users WHERE email='".$username."'");
    $result=array();

    while ($fetchData=$queryResult->fetch_assoc()) {
        $result[]=$fetchData;
    }

    echo json_encode($result);
}
