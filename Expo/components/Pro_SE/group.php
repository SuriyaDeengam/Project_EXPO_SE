<!DOCTYPE html>

<?php
session_start();
require './config.php';

$p1 = $_SESSION["page1"];
$y = 0;

$student1 = "SELECT * FROM student";
$student = mysqli_query($conn, $student1);

$gro = "SELECT * FROM creategroup WHERE Teacher_Id = '$p1' and  Group_Status = 1 ORDER BY Group_Id ";
$group = mysqli_query($conn, $gro);



?>

<body>
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <h2 align='center' style="color:#7c0000; margin-top:3%">รายชื่อกลุ่มและนิสิตในที่ปรึกษา</h2>
        <?php
        $max = 0;
        while ($result = mysqli_fetch_array($group, MYSQLI_ASSOC)) {
            ?>

            <?php
                $i = $result['Group_Id'];
                if ($i > $max) {
                    $na =  "SELECT creategroup.Group_Id,student.Tname_Th,creategroup.Student_Id , student.Fname_Th, student.Lname_Th FROM student,creategroup WHERE creategroup.Student_Id = student.Student_Id and creategroup.Group_Id = $i";
                    $name = mysqli_query($conn, $na);
                    $gro1 = "SELECT * FROM creategroup WHERE Group_Id = $i";
                    $group1 = mysqli_query($conn, $gro1);
                    $namegroup = mysqli_fetch_array($group1, MYSQLI_ASSOC)
                    ?>

                <TABLE BORDER="1" WIDTH="500mm" style="margin-top:5% ">
                    <tr style=" background-color: #7c0000;">
                        <th>
                            <h4 style="width:100mm;color:white" align='center'>ชื่อกลุ่ม</h4>
                        </th>
                        <th>
                            <h4 style="width:100mm;color:white" align='center'>รายชื่อนิสิตในกลุ่ม</h4>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <h4 align='center'><?php echo $namegroup['Group_Topic']; ?></h4>
                        </td>
                        <td style="margin-left:10mm">
                            <?php while ($nameg = mysqli_fetch_array($name, MYSQLI_ASSOC)) { ?>

                                <h5 style="margin-left:10mm">
                                    <?php echo $nameg['Tname_Th'];
                                                echo ' ';
                                                echo $nameg['Fname_Th'];
                                                echo ' ';
                                                echo $nameg['Lname_Th']; ?></h4>

                                <?php } ?>
                        </td>
                    </tr>
                </TABLE>
        <?php
                $max = $i;
            }
        }
        mysqli_data_seek($group, 0); ?>
    </div>
    <div class="col-sm-12" style="margin-left: 20%">
        <a onclick="creategroup()">
            <img src="iconSE/plus.png" style="width: 20%; margin: 10% ; min-width: 20mm; max-width: 20mm;">
        </a>
        <a onclick="deletegroup()">
            <img src="iconSE/minus.png" style="width: 20%; margin: 10% ; min-width: 20mm; max-width: 20mm;">
        </a>

    </div>
    <div class="col-sm-12" style="margin:15mm"></div>
</body>