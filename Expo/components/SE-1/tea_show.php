<?php
    require('dbcon.php');

    $q = "SELECT `Teacher_Id`, `Teacher_Name` FROM `teacher`";
    $res = $con->query($q);
    mysqli_set_charset($con, "utf8");
    
?>


<!DOCTYPE html>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<body>
    <br>
    <br>
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
            <h3 align='center'
                style="width: 130mm ; background-color: #7c0000; color: white;padding: 2%;margin-top: 5%; margin-left: 12%">
                ข้อมูลอาจารย์
            </h3>
</div>
    <div class="col-sm-2"></div>
        <table  class="table table-bordered col-sm-12">
            <thead>
                <tr style="background-color: gainsboro">
                    <th>ID</th>
                    <th>ชื่อ-นามสกุล</th>         
                </tr>
            </thead>
            <tbody>
                <?php while($row = $res->fetch_assoc()){ ?>
                <tr>
                    <td><?php echo $row['Teacher_Id']; ?></td>
                    <td><?php echo $row['Teacher_Name']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

    <div class="col-sm-12" style="margin-left: 22%;">
        <a href="tea_update.php">
            <img src="iconSE/plus.png" style="width: 20%; margin: 10% ; min-width: 20mm; max-width: 20mm;">
                            </a>
        <a onclick="teadelete()">
            <img src="iconSE/minus.png" style="width: 20%; margin: 10% ; min-width: 20mm; max-width: 20mm;">
        </a>
    </div>

    
</body>