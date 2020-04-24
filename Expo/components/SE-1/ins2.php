ััััััััััััััััััััััััััััััััััั<?php
require './dbcon.php';

$data = $_POST['data'];
$array = array();
$sub = array();
$r0 = $data[0];
$r1 =$data[1];
$r2 = $data[2];
    $q = "INSERT INTO `subject`(`Subject_Name`, `Subject_Num`, `Student_Num`) VALUES ('$r0',$r1, $r2)";
    $con->query($q);
    echo ("Insert Success");