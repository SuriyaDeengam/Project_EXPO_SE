<?php 
    require('dbcon.php');
    $no = $_GET['no'];
    $reason2 = $_GET['reason2'];
    $point2 = $_GET['point2'];
    // $force_id = $_GET['force_id'];

    $q = "insert into choose_test values('$no','$reason2','$point2')";
    $res = $con->query($q);


?>

