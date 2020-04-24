<?php
    require("dbcon.php");

    $q = "select * from choose";
    $res = $con->query($q);
    $array = array();
    // $response = "<select id = 'option1' class='custom-select' style='height: 100%;font-size: 1.5em' id='inputGroupSelect01'><option selected>Choose...</option>";
    while($row = $res->fetch_assoc()){
        $subarray = array();
        array_push($subarray, $row["course_name"]);
        array_push($array, $subarray);
        // $response = $response."<option value='x'>".$row["course_name"]."</option>";
    }
    // $response = $response."</select>";
    // echo $response;
    echo json_encode($array);
    