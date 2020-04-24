<?php
    require('dbcon.php');

    $group = "SELECT * FROM evaluation";
    $committeegroup = mysqli_query($con, $group);
    

?>
<!DOCTYPE html>

<body>
    <form method="POST" action="delete_gradeBN.php">
        <table BORDER='1' style="border-color: black; width: 500px; height: 50px; margin-left:30%;margin-top:10%" class="table table-bordered col-sm-12">
        <tr>
        <td style="background-color: #7c0000">
            <h5 align="center" style="font-weight: bold ; color:white">เลือกเกณฑ์ที่ต้องการลบ</h5>
        </td>
        <td>
                            <select name="select_group1" style="width:60mm; margin-left:10%;margin-top:2%">
                                <option value="0" disabled selected>เลือกเกณฑ์</option>
                                <?php
                                $max = 0;
                                while ($result = mysqli_fetch_array($committeegroup, MYSQLI_ASSOC)) {  ?>

                                    <option value="<?php echo $result['Evaluation_Id'] ?>">
                                        <h5 style="margin-top:5%;color:black" align='center'><?php echo $result['Title']?> </h5>
                                    </option>

                                <?php 
                                }
                                mysqli_data_seek($teachergroup, 0); ?>
                            </select>
                            </td>
        </tr>
        </table>
        <br>
        <br>
        <div class="col-sm-12">
            <button style="margin-left:135mm" type="submit">
                <img src="./iconSE/confirm.png" style="width: 15mm; height: 15mm">
            </button>
        </div>
    </form>
</body>