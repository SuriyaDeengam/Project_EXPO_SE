<?php 
    require('dbcon.php');
    $no = $_GET['no'];
    $subject_name = $_GET['subject_name'];
    $subject_num = $_GET['subject_num'];
    $subject_status = $_GET['subject_status'];

    $q = "insert into insert_subject values('$no','$subject_name','$subject_num','$subject_status')";
    $res = $con->query($q);
?>