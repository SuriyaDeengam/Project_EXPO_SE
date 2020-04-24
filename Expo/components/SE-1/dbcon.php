<?php
    $con = new mysqli("localhost","root","","se_project");
    if($con->connect_error){
        echo $con->connect_error;
    }