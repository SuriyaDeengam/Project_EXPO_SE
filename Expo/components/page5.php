<?php
  
  require('dbcon.php');
  session_start();
  $em_id = $_SESSION['user'];
  $q = "select * from history_choose where s_id like '$em_id'";

  $history = $con->query($q);

?>


<!DOCTYPE html>

<body>

    <div class="row d-flex justify-content-center" style="padding-left:1em;margin-top: 50px;">
        <div class="col-4">
        </div>
        <div class="col-4 d-flex justify-content-center">
            <h1><B>ประวัติการยื่นคำร้อง</B></h1>
        </div>
        <div class="col-4 d-flex justify-content-center">
        </div>
</div>


        <table  class="table table-bordered col-sm-12">
                <thead>
                        <tr style="background-color: gainsboro">
                          <th style="font-size:1.5em">วันที่รับเรื่อง</th>
                          <th style="font-size:1.5em">สายการเรียนที่เปลี่ยน</th>
                          <th style="font-size:1.5em">หมายเหตุ</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php while($historys = $history->fetch_assoc()){ 


                            $q = "select subject.Subject_Name from subject where subject.Subject_Id = ".$historys['before_c_id'];
                            $row = $con->query($q);
                            $before = $row->fetch_assoc();
                            $before_name = $before['Subject_Name'];

                            $q = "select subject.Subject_Name from subject where subject.Subject_Id = ".$historys['after_c_id'];
                            $row = $con->query($q);
                            $after = $row->fetch_assoc();
                            $after_name = $after['Subject_Name'];
                            
                          ?>
                        <tr>
                          <td style="font-size:1.5em"><?php echo $historys['date']; ?></td>
                          <td style="font-size:1.5em"><?php echo $before_name.' -- '.$after_name; ?></td>
                          <td style="font-size:1.5em"><?php echo $historys['reason']; ?></td>
                        </tr>      
                        <?php } ?>
                      </tbody>
        </table>
    </div>
</body>