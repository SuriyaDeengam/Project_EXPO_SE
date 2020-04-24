<?php
session_start();
require './config.php';

$p1 = $_SESSION["page1"];
$data = $_POST['data'];
$array = array();

for ($i = 0; $i < count($data); $i = $i + 1) {
    $sub = array();
    $r0 = $data[$i][0];
    $r1 = $data[$i][1];
    $r2 = $data[$i][2];
    $r3 = $data[$i][3];
    $r4 = $data[$i][4];
    $year = $data[$i][5];
    if($r2 != 'x99'){
        $q = "INSERT INTO creategroup(`Group_Id`, `Group_Topic`, `Student_Id`, `Teacher_Id`, Group_Status,Group_Year) VALUES ('$r0','$r1','$r2','$p1',1, '$year') on duplicate key update `Group_Id` = values(`Group_Id`),`Group_Topic` = values(`Group_Topic`), `Student_Id` = values(`Student_Id`), `Teacher_Id` = values(`Teacher_Id`)";
        $conn->query($q);
        $q = "UPDATE `student` SET `Student_Status`=1 WHERE `Student_Id`=$r2";
        $conn->query($q);
    }
    if($r3 != 'x98'){
        $q = "INSERT INTO creategroup(`Group_Id`, `Group_Topic`, `Student_Id`, `Teacher_Id`, Group_Status ,Group_Year) VALUES ('$r0','$r1','$r3','$p1' ,1, '$year') on duplicate key update `Group_Id` = values(`Group_Id`),`Group_Topic` = values(`Group_Topic`), `Student_Id` = values(`Student_Id`), `Teacher_Id` = values(`Teacher_Id`)";
        $conn->query($q);
        $q = "UPDATE `student` SET `Student_Status`=1 WHERE `Student_Id`=$r3";
        $conn->query($q);
    }
    if($r4 != 'x97'){
        $q = "INSERT INTO creategroup(`Group_Id`, `Group_Topic`, `Student_Id`, `Teacher_Id`, Group_Status,Group_Year) VALUES ('$r0','$r1','$r4','$p1', 1,'$year') on duplicate key update `Group_Id` = values(`Group_Id`),`Group_Topic` = values(`Group_Topic`), `Student_Id` = values(`Student_Id`), `Teacher_Id` = values(`Teacher_Id`)";
        $conn->query($q);
        $q = "UPDATE `student` SET `Student_Status`=1 WHERE `Student_Id`=$r4";
        $conn->query($q);
    }
    echo ("เพิ่มกลุ่มเรียบร้อย!!");
}

// echo json_encode($array);
