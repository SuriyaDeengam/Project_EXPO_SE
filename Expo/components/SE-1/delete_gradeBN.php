<?php 
    require('dbcon.php');
    $no = $_POST['select_group1'];
    
    $q = "DELETE FROM `evaluation` WHERE `Evaluation_Id` = $no";
    $res = $con->query($q);
    echo '<meta http-equiv= "refresh" content="0; url=index.php"/>';

?>