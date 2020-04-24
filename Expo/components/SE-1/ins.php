ััััััััััััััััััััััััััััััััััั<?php
require './dbcon.php';

$data = $_POST['data'];
$array = array();
$sub = array();
$r0 = $data[0];
$r1 =$data[1];
    $q = "INSERT INTO `evaluation`(`Title`, `Score`) VALUES ('$r0',$r1)";
    $con->query($q);
    echo ("Insert Success");
