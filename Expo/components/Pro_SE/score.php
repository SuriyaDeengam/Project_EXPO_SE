<!DOCTYPE php>

<?php
session_start();
require './config.php';

$p1 = $_SESSION["page1"];

$teac = "SELECT * FROM student,creategroup WHERE creategroup.Teacher_Id = '$p1' and student.Student_Id=creategroup.Student_Id and  creategroup.Group_Status = 1 ORDER BY Group_Id";
$teachergroup = mysqli_query($conn, $teac);


?>


<body>
    <div class="col-sm-1">
    </div>
    <div class="col-sm-8">
        <table BORDER="1" class="table" style="width:250mm; margin-top:20mm">
            <tr style="background-color: #7c0000">
                <td style="width:80mm">
                    <h4 style="color:white" align='center'>ชื่อกลุ่ม</h4>
                </td>
                <td style="width:50mm">
                    <h4 style="color:white" align='center'>ชื่อนิสิต</h4>
                </td>
                <td style="width:30mm">
                    <h5 style="color:white" align='center'>คะแนนที่ปรึกษา</h5>
                </td>
                <td style="width:30mm">
                    <h5 style="color:white" align='center'>คะแนนกรรมการคนที่ 1</h5>
                </td>
                <td style="width:30mm">
                    <h5 style="color:white" align='center'>คะแนนกรรมการคนที่ 2</h5>
                </td>
                <td style="width:30mm">
                    <h5 style="color:white" align='center'>คะแนนรวม</h5>
                </td>
            </tr>
            <?php
            while ($result = mysqli_fetch_array($teachergroup, MYSQLI_ASSOC)) {
                $na = $result["Teacher_Score"] + $result["Committee1_Score"] + $result["Committee2_Score"];
                ?>
                <tr>
                    <td>
                        <h5 style="margin-top:5%;color:black" align='center'><?php echo $result["Group_Topic"]; ?> </h5>
                    </td>
                    <td>
                        <h5 style="margin-top:5%;color:black" align='center'><?php echo $result['Fname_Th'];
                                                                                    echo ' ';
                                                                                    echo $result['Lname_Th']; ?> </h5>
                    </td>
                    <td>
                        <h5 style="margin-top:5%;color:black" align='center'><?php echo $result["Teacher_Score"]; ?> </h5>
                    </td>
                    <td>
                        <h5 style="margin-top:5%;color:black" align='center'><?php echo $result["Committee1_Score"]; ?> </h5>
                    </td>
                    <td>
                        <h5 style="margin-top:5%;color:black" align='center'><?php echo $result["Committee2_Score"]; ?> </h5>
                    </td>
                    <td>
                        <h5 style="margin-top:5%;color:black" align='center'><?php echo $na ?> </h5>
                    </td>
                

            <?php
            }
            mysqli_data_seek($teachergroup, 0); ?>
            </tr>
        </table>
        
    </div>
    <div class="col-sm-12" style="margin:15mm"></div>
</body>