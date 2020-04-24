<?php
    require('dbcon.php');


    $q = "SELECT `Title`, `Score` FROM `evaluation`";
    $res = $con->query($q);
?>

<!DOCTYPE html>
<body>
    <br>
    <br>
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
            <h3 align='center'
                style="width: 130mm ; background-color: #7c0000; color: white;padding: 2%;margin-top: 5%; margin-left: 15%">
                เกณฑ์การประเมิน
            </h3>
</div>
    <div class="col-sm-2"></div>
    <table  class="table table-bordered col-sm-8"  style="width:250mm; margin-left: 10%">
                    <thead>
                            <tr style="background-color: gainsboro">
                            <th>รายละเอียด</th>
                            <th>คะแนน</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = $res->fetch_assoc()){ ?>
                            <tr>
                            <td><?php echo $row['Title']; ?></td>
                            <td><?php echo $row['Score']; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
            </table>

    <div class="col-sm-12" style="margin-left: 22%;">
        <a onclick="selectgrade2()">
            <img src="iconSE/plus.png" style="width: 20%; margin: 10% ; min-width: 20mm; max-width: 20mm;">
                            </a>
        <a onclick="deletegrade()">
            <img src="iconSE/minus.png" style="width: 20%; margin: 10% ; min-width: 20mm; max-width: 20mm;">
        </a>
    </div>
</body>