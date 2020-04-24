<?php
require('dbcon.php');

$gro = "SELECT * FROM account";
$group = mysqli_query($con, $gro);
?>

<!DOCTYPE html>
<body>
<form method="POST" action="acc_delete_BN.php">
    <table BORDER='1' style="border-color: black; width: 500px; height: 50px; margin-left:30%;margin-top:10%" class="table table-bordered col-sm-12">
    <tr>
    <td style="background-color: #7c0000">
            <h5 align="center" style="font-weight: bold ; color:white">เลือกข้อมูลล็อกอินที่ต้องการลบ</h5>
        </td>
    <td>
                        <select name="select_acc1" style="width:60mm; margin-left:10%;margin-top:2%"">
                            <option value="0" disabled selected>เลือกล็อกอิน</option>
                            <?php
                            $max = 0;
                            while ($result = mysqli_fetch_array($group, MYSQLI_ASSOC)) {  ?>

                                    <option value="<?php echo $result['Account_Id'] ?>">
                                        <h5 style="margin-top:5%;color:black" align='center'><?php echo $result['Email']?> </h5>
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