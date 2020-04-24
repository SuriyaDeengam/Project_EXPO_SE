<?php
    require('dbcon.php');

    $q = "SELECT `Student_Id`, `Fname_Th`, `Lname_Th`, `Academic_Year` FROM `student` WHERE Status_Year = 1";
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
                ข้อมูลนิสิต
            </h3>
</div>
    <div class="col-sm-2"></div>
        <table  class="table table-bordered col-sm-12">
            <thead>
                <tr style="background-color: gainsboro">
                    <th>รหัสนิสิต</th>
                    <th>ชื่อ</th>
                    <th>นามสกุล</th>  
                    <th>ปีการศึกษา</th>      
                </tr>
            </thead>
            <tbody>
                <?php while($row = $res->fetch_assoc()){ ?>
                <tr>
                    <td><?php echo $row['Student_Id']; ?></td>
                    <td><?php echo $row['Fname_Th']; ?></td>
                    <td><?php echo $row['Lname_Th']; ?></td>
                    <td><?php echo $row['Academic_Year']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

    <div class="col-sm-12" style="margin-left: 22%;">
        <a href="std_update.php">
            <img src="iconSE/plus.png" style="width: 20%; margin: 10% ; min-width: 20mm; max-width: 20mm;">
                            </a>
        <a onclick="stddelete()">
            <img src="iconSE/minus.png" style="width: 20%; margin: 10% ; min-width: 20mm; max-width: 20mm;">
        </a>
    </div>

    
</body>