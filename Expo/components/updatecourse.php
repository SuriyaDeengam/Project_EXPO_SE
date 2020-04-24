<?php
    require("dbcon.php");

    $Priority= $_GET["pri"];
    $User_Id = $_GET["us"];
    $Course = $_GET["co"];

    $q = "insert into register(Priority,User_Id,Course) values($Priority,$User_Id,$Course) on duplicate key update
         Priority = values(Priority),User_Id = values(User_Id) , Course = values(Course)";
    $res = $con->query($q);