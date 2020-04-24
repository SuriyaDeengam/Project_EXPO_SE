<?php 
    require('dbcon.php');
    $no = $_POST['select_subject1'];
    $result = $con->query("SELECT * FROM subject WHERE Subject_Id = $no");
    if($result->num_rows != 0)
    {
    $q = "UPDATE `subject` SET `Subject_Status`= 0 WHERE Subject_Id = $no";
    $res = $con->query($q);}
    echo '<meta http-equiv= "refresh" content="0; url=index.php"/>';
?>