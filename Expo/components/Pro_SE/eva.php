<!DOCTYPE php>

<?php
session_start();
require './config.php';

$p1 = $_SESSION["page1"];

$group = "SELECT * FROM creategroup  WHERE Teacher_Id = '$p1' and  Group_Status = 1 ORDER BY Group_Id";
$teachergroup = mysqli_query($conn, $group);

$group = "SELECT * FROM `creategroup` WHERE  Group_Status = 1 and`Committee1_Id` = '$p1' OR `Committee2_Id` = '$p1'ORDER BY Group_Id";
$committeegroup = mysqli_query($conn, $group);


$test = "test"
?>


<body>
    <div class="col-sm-2">
    </div>
    <div class="col-sm-8" style="margin-top:20mm">
        <h3 align="center">อาจารย์ที่ปรึกษา</h3>

        <table BORDER="1" class="table" style="width:200mm;background-color: #7c0000">
            <tr>
                <td style="width:100mm">
                    <h4 style="color:white" align='center'>ชื่อกลุ่ม</h4>
                </td>
                <td style="width:100mm">
                    <form method="POST" action="assi.php">
                        <!-- <input type="hidden"  name="teach" value="<?= '$p1' ?>" /> -->
                        <select name="select_group1" style="width:70mm;">
                            <option value="99" checked>เลือกนิสิต</option>
                            <?php
                            $max = 0;
                            while ($result = mysqli_fetch_array($teachergroup, MYSQLI_ASSOC)) {  ?>

                                <?php
                                    $i = $result['Group_Id'];
                                    if ($i > $max) {
                                        $na =  "SELECT creategroup.Group_Id,student.Tname_Th,creategroup.Student_Id , student.Fname_Th, student.Lname_Th FROM student,creategroup WHERE creategroup.Student_Id = student.Student_Id and creategroup.Group_Id = $i";
                                        $name = mysqli_query($conn, $na);
                                        ?>
                                    <option value="<?php echo $result['Group_Topic'] ?>">
                                        <h5 style="margin-top:5%;color:black" align='center'><?php echo $result['Group_Topic'] ?> </h5>
                                    </option>

                            <?php $max = $i;
                                }
                            }
                            mysqli_data_seek($teachergroup, 0); ?>
                        </select>
                        <button style="margin-left:5mm;background-color: #7c0000" type="submit">
                            <img src="./iconSE/pramern-white.png" style="width: 10mm; height: 10mm">
                        </button>
                    </form>
                </td>
            </tr>
        </table>

        <h3 style="margin-top:20mm" align="center">อาจารย์กรรมการ</h3>

        <table BORDER="1" class="table" style="width:200mm;background-color: #c4c4c4">
            <tr>
                <td style="width:100mm">
                    <h4 style="color:black" align='center'>ชื่อกลุ่ม</h4>
                </td>
                <td style="width:100mm">
                    <form method="POST" action="assign1.php">
                        <select name="select_group2" style="width:70mm;">
                            <option value="99" checked>เลือกนิสิต</option>
                            <?php
                            $max = 0;
                            while ($result = mysqli_fetch_array($committeegroup, MYSQLI_ASSOC)) {  ?>

                                <?php
                                    $i = $result['Group_Id'];
                                    if ($i > $max) {
                                        $na =  "SELECT creategroup.Group_Id,student.Tname_Th,creategroup.Student_Id , student.Fname_Th, student.Lname_Th FROM student,creategroup WHERE creategroup.Student_Id = student.Student_Id and creategroup.Group_Id = $i";
                                        $name = mysqli_query($conn, $na);
                                        ?>
                                    <option value="<?php echo $result['Group_Topic'] ?>">
                                        <h5 style="margin-top:5%;color:black" align='center'><?php echo $result['Group_Topic'] ?> </h5>
                                    </option>

                            <?php $max = $i;
                                }
                            }
                            mysqli_data_seek($teachergroup, 0); ?>
                        </select>
                        <button style="margin-left:5mm;background-color: #c4c4c4" type="submit">
                            <img src="./iconSE/pramern-white.png" style="width: 10mm; height: 10mm">
                        </button>
                    </form>
                </td>
            </tr>
        </table>

    </div>
    <div class="col-sm-12" style="margin:15mm"></div>
</body>