<?php
require './config.php';

$data = $_POST['data'];
$r0 = $data[0];
$r1 = $data[1];
$r2 = $data[2];

    $q = "UPDATE `creategroup` SET `Committee1_Id`='$r1',`Committee2_Id`='$r2' WHERE `Group_Topic`='$r0'";
    $conn->query($q);
    echo ("เลือกกรรมการสำเร็จ");



