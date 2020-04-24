<?php
require './config.php';

$data = $_POST['data'];
    $q = " UPDATE student  SET 	Student_Status = 0  WHERE Student_Id IN (SELECT Student_Id FROM creategroup WHERE Group_Topic = '$data' )";
    $conn->query($q);
    $q = "DELETE FROM `creategroup` WHERE `Group_Topic` = '$data'";
    $conn->query($q);
    echo ("ลบกลุ่มเรียบร้อย");




