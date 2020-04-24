<?php 
    require('dbcon.php');
    $no = $_POST['select_teacher1'];
    
    $q = "DELETE FROM `student` WHERE `Student_Id` = '$no'";
    $res = $con->query($q);
    echo '<meta http-equiv= "refresh" content="0; url=index.php"/>';

?>



