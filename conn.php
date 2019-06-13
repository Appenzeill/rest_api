<?php
$connect = new mysqli("localhost","root","Welkom01!","projectmes");

if ($connect) {
} else {
    echo "Connection Failed";
    exit();
}
