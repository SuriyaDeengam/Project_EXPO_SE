<?php
    require('dbcon.php');
    $q = "SELECT history_choose.S_id ,history_choose.before_c_id ,history_choose.after_c_id ,history_choose.reason from history_choose join student on student.Student_Id = history_choose.s_id ";
    $res = $con->query($q);

?>



<!DOCTYPE html>
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
    <table  class="table table-bordered col-sm-12">
                    <thead>
                            <tr style="background-color: gainsboro">
                            <th>รหัสนิสิต</th>
                            <th>ชื่อ-นามสกุล</th>
                            <th>สายเก่า</th>
                            <th>สายใหม่</th>

                            <th>เหตุผล</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = $res->fetch_assoc()){ ?>
                            <tr>
                            <td><?php echo $row['s_id']; ?></td>
                            <td><?php echo $row['Tname_Th'].$row['Fname_Th']." ".$row['Lname_Th']; ?></td>
                            <td><?php echo $row['before_c_id']; ?></td>
                            <td><?php echo $row['after_c_id']; ?></td>
                            <td><?php echo $row['reason']; ?></td>
                            
                            </tr>
                            <?php } ?>
                        </tbody>
            </table>

</body>