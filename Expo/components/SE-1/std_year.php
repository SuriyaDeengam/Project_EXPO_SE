<?php
    require('dbcon.php');

    $q = "SELECT `No`, `Student_Id`, `Tname_Th`, `Fname_Th`, `Lname_Th`, `Tname_En`, `Fname_En`, `Lname_En`, `Faculty`, `Branch`, `Year`, `Academic_Year`, `Student_Status`, `Status_Year`, `Student_Subject` FROM `student`";
    $res = $con->query($q);
    mysqli_set_charset($con, "utf8");
    
?>
<!DOCTYPE html>
<body>
<br>
    <br>
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
            <h3 align='center'
                style="width: 130mm ; background-color: #7c0000; color: white;padding: 2%;margin-top: 5%; margin-left: 12%">
                เลือกปีการศึกษา
            </h3>
    </div>
    <div class="col-sm-12">
        <td>
            <select id="select_group" class='browser-default custom-select custom-select-lg mb-3'>
                <option value="no" disabled selected>เลือกปีการศึกษา</option>
                    <option>2560</option>
                    <option>2561</option>
                    <option>2562</option>
            </select>
        </td>
    </div>
    <div class="col-sm-12">
        <div class="row d-flex justify-content-center" style="padding-left:1em; height: 5em" align='center'>
            <a onclick="stdshow()" class="col-4 d-flex justify-content-center" style="height: 100%">
                <img style="height: 100%;" src="iconSE/confirm.png">
            </a>
        </div>
    </div>
</body>
