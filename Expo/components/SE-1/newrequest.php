<?php
    require('dbcon.php');

    $q = "SELECT `s_id`, `before_c_id`, `after_c_id`, `reason`, `date` FROM `history_choose`";
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
                คำร้องขอเปลี่ยนสายการเรียนของนิสิต
            </h3>
</div>
    <div class="col-sm-2"></div>
        <table  class="table table-bordered col-sm-12">
            <thead>
                <tr style="background-color: gainsboro">
                    <th>รหัสนิสิต</th>
                    <th>สายการเรียนเดิม</th>
                    <th>สายการเรียนใหม่</th>  
                    <th>เหตุผล</th> 
                    <th>วันที่</th>     
                </tr>
            </thead>
            <tbody>
                <?php while($row = $res->fetch_assoc()){ ?>
                <tr>
                    <td><?php echo $row['s_id']; ?></td>
                    <td><?php echo $row['before_c_id']; ?></td>
                    <td><?php echo $row['after_c_id']; ?></td>
                    <td><?php echo $row['reason']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
</body>