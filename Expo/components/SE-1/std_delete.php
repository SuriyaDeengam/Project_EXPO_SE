<?php
require('dbcon.php');
$gro = "SELECT * FROM student WHERE Status_Year = 1";
$group = mysqli_query($con, $gro);
?>

<!DOCTYPE html>
<body>
<form method="POST" action="std_delete_BN.php">
    <table BORDER='1' style="border-color: black; width: 500px; height: 50px; margin-left:30%;margin-top:10%" class="table table-bordered col-sm-12">
    <tr>
    <td style="background-color: #7c0000">
            <h5 align="center" style="font-weight: bold ; color:white">เลือกนิสิตที่ต้องการลบ</h5>
        </td>
    <td>
                        <select name="select_teacher1" style="width:60mm; margin-left:10%;margin-top:2%">
                            <option value="0" disabled selected>เลือกรหัสนิสิต</option>
                            <?php
                            $max = 0;
                            while ($result = mysqli_fetch_array($group, MYSQLI_ASSOC)) {  ?>

                                    <option value="<?php echo $result['Student_Id'] ?>">
                                        <h5 style="margin-top:5%;color:black" align='center'><?php echo $result['Student_Id']?> </h5>
                                    </option>

                            <?php 
                            }
                            mysqli_data_seek($teachergroup, 0); ?>
                        </select>
                        </td>
    </tr>
    </table>
    <button style="margin-left:135mm" type="submit">
                            <img src="./iconSE/confirm.png" style="width: 15mm; height: 15mm">
                        </button>
                    </form>
</body>