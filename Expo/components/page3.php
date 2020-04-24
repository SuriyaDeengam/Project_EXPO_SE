<?php
  
  require('dbcon.php');
  $q = 'select student.Student_Id , student.Tname_Th, student.Fname_Th,student.Lname_Th, subject.Subject_Name from student
  left JOIN subject on student.Student_Subject = subject.Subject_Id where student.Status_Year = 1 ORDER BY student.Student_Id';
  $res = $con->query($q);

?>

<!DOCTYPE html>
<body>
            <div class="row d-flex justify-content-center" style="padding-left:1em;margin-top: 50px;">
        <div class="col-4">
        </div>
        <div class="col-4 d-flex justify-content-center">
            <h1><B>ประกาศสายการเรียน</B></h1>
        </div>
        <div class="col-4 d-flex justify-content-center">
        </div>
</div>

        <table  class="table table-bordered col-sm-12">
                <thead>
                        <tr style="background-color: gainsboro">
                          <th style="font-size:1.5em">รหัสประจำตัว</th>
                          <th style="font-size:1.5em">ชื่อ-นามสกุล</th>
                          <th style="font-size:1.5em">สายการเรียน</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php while($row = $res->fetch_assoc()){ ?>
                        <tr>
                          <td style="font-size:1.5em"><?php echo $row['Student_Id']; ?></td>
                          <td style="font-size:1.5em" ><?php echo $row['Tname_Th'].$row['Fname_Th'].'  '.$row['Lname_Th']; ?></td>
                          <td style="font-size:1.5em"><?php echo $row['Subject_Name']; ?></td>
                        </tr>
                        <?php } ?>
                      </tbody>
        </table>
    </div>
</body>