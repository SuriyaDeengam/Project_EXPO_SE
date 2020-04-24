<?php 
    require('dbcon.php');
    $no = $_POST['select_acc1'];
    
    $q = "DELETE FROM `account` WHERE `Account_Id` = $no";
    $res = $con->query($q);
    echo '<meta http-equiv= "refresh" content="0; url=index.php"/>';

?>



