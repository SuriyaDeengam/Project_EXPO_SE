<?php

$host = 'localhost';
$dbname = 'se_project';
$username = 'root';
$password = '';

$conn = mysqli_connect($host, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8");
