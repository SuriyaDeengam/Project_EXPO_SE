<?php
    require('dbcon.php');

    $q = "SELECT `Student_Id`, `Fname_Th`, `Lname_Th`, `Student_Subject` FROM `student`";
    $res = $con->query($q);
    mysqli_set_charset($con, "utf8");
?>
<!DOCTYPE html>
<body>
<br>
    <br>
    <div class="col-sm-3"></div>
    <div class="col-sm-8">
            <h3 align='center'
                style="width: 130mm ; background-color: #7c0000; color: white;padding: 2%;margin-top: 5%; margin-left: 5%">
                เลือกปีการศึกษา
            </h3>
    </div>
    <form method="POST" action="yearsu.php">
    <table BORDER='1' style="border-color: black; width: 650px; height: 50px; margin-left:22%;margin-top:2%" class="table table-bordered col-sm-12">
    <tr>
    <td style="background-color: #7c0000 ">
            <h5 align="center" style="font-weight: bold ; color:white ">เลือกปีการศึกษา</h5>
    </td>
    <td>
    <select name="select_group" class='browser-default custom-select custom-select-lg mb-3' style="width:60mm; margin-left:10%;margin-top:2%" >
                <option value="0" disabled selected>เลือกปีการศึกษา</option>
                        <option value="2560">2560</option>
                        <option value="2561">2561</option>
                        <option value="2562">2562</option>
                        <option value="2563">2563</option>
            </select>
                        </td>
    </tr>
    </table>
    <button style="margin-left:150mm;" type="submit">
                            <img src="./iconSE/confirm.png" style="width: 15mm; height: 15mm">
                        </button>
                    </form>
