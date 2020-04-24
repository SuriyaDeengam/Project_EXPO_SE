<?php 
    require('dbcon.php');
    $no = $_POST['select_group'];
    echo ($no);
    $q = "UPDATE `student` SET `Status_Year`= 0 WHERE `Status_Year` = 1";
    $res = $con->query($q);
    $q = "UPDATE `student` SET `Status_Year`= 1 WHERE `Academic_Year` = $no";
    $res = $con->query($q);
    $q = "UPDATE `creategroup` SET `Group_Status`= 0 WHERE `Group_Status` = 1";
    $res = $con->query($q);
    $q = "UPDATE `creategroup` SET `Group_Status`= 1 WHERE `Group_Year` = $no";
    $res = $con->query($q);
    echo ('Success');
    echo '<meta http-equiv= "refresh" content="0; url=index.php"/>';

?>
