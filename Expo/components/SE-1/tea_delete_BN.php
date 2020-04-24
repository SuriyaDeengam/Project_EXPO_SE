<?php 
    require('dbcon.php');
    $no = $_POST['select_teacher1'];
    
    $q = "DELETE FROM `teacher` WHERE `Teacher_Id` = '$no'";
    $res = $con->query($q);
    echo '<meta http-equiv= "refresh" content="0; url=index.php"/>';

?>




