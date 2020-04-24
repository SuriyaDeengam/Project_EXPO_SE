<!DOCTYPE html>
<?php
require './config.php';
$y = 0;

$student1 = "SELECT * FROM student WHERE `Student_Status` = 0 and Status_Year = 1";
$student = mysqli_query($conn, $student1);

$gro = "SELECT * FROM creategroup";
$group = mysqli_query($conn, $gro);


$na =  "SELECT creategroup.Group_Id,creategroup.Student_Id , student.Fname_Th, student.Lname_Th FROM student,creategroup WHERE creategroup.Student_Id = student.Student_Id ORDER BY creategroup.Group_Id";
$name = mysqli_query($conn, $na);

$yea = "SELECT Academic_Year , Status_Year FROM `student` WHERE  Status_Year = 1";
$year = mysqli_query($conn, $yea);
?>

<?php
while ($numgroup1 = mysqli_fetch_array($group, MYSQLI_ASSOC)) {
    if ($y <= $numgroup1['Group_Id']) {
        $y = $numgroup1['Group_Id'] + 1;
    }
}
$result = mysqli_fetch_array($year, MYSQLI_ASSOC);
$year1 = $result['Academic_Year'];
?>

<body>
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <table class="table table-bordered" style="margin-top: 5%;margin-right: 10% ;border-color: black;" id="myTable">
            <tr class='tablegroup'>
                <td>
                    <div>
                        <h3 align='center' style='width: 100mm ; background-color: #7c0000; color: white;padding: 2%;margin-top: 5%; w'>ชื่อกลุ่ม</h3>
                    </div><input class='form-control groupname' maxlength="30" placeholder='ชื่อโปรเจค' style='margin-bottom: 5%'>
                </td>
                <td>
                    <div class='col-sm-12'>
                        <select class='studentname browser-default custom-select custom-select-lg mb-3'>
                            <option value='x99' selected>เลือกชื่อนิสิต</option>
                            <?php while ($result = mysqli_fetch_array($student, MYSQLI_ASSOC)) {  ?>
                                <option value='<?php echo $result['Student_Id']; ?>'><?php echo $result['Fname_Th'];
                                                                                            echo ' ';
                                                                                            echo $result['Lname_Th']; ?></option><?php }
                                                                                                                                    mysqli_data_seek($student, 0); ?>
                        </select>
                        <select class='studentname browser-default custom-select custom-select-lg mb-3'>
                            <option value='x98' selected>เลือกชื่อนิสิต</option>
                            <?php while ($result = mysqli_fetch_array($student, MYSQLI_ASSOC)) {  ?>
                                <option value='<?php echo $result['Student_Id']; ?>'><?php echo $result['Fname_Th'];
                                                                                            echo ' ';
                                                                                            echo $result['Lname_Th']; ?></option><?php }
                                                                                                                                    mysqli_data_seek($student, 0); ?>
                        </select>
                        <select class='studentname browser-default custom-select custom-select-lg mb-3'>
                            <option value='x97' selected>เลือกชื่อนิสิต</option>
                            <?php while ($result = mysqli_fetch_array($student, MYSQLI_ASSOC)) {  ?>
                                <option value='<?php echo $result['Student_Id']; ?>'><?php echo $result['Fname_Th'];
                                                                                            echo ' ';
                                                                                            echo $result['Lname_Th']; ?></option><?php }
                                                                                                                                    mysqli_data_seek($student, 0); ?>
                        </select>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <div class="col-sm-12">
        <button type="button" onclick="update()" id="red" style="margin-left: 40%" class="btn btn-secondary btn-lg">
            <h4 id="setwhite">ตกลง</h4>
        </button>
    </div>
</body>
<script>
    function update() {
        var tablegroup = document.getElementsByClassName('tablegroup');
        var groupname = document.getElementsByClassName('groupname');
        var studentname = document.getElementsByClassName('studentname');
        var length1 = tablegroup.length;
        var length3 = length1;
        var student = [];
        var test = 0;
        // console.log('number of '+<?php echo $y ?>);

        for (var i = 0; i < length1; i++) {
            var length2 = tablegroup[i].getElementsByClassName('studentname').length;
            var group_name = document.getElementsByClassName('groupname')[i].value;
            var sub = [];
            sub[1] = 99;
            sub[0] = (<?php echo $y ?>);
            sub[1] = (group_name);
            for (var j = 0; j < length2; j++) {
                // console.log(tablegroup[i].getElementsByClassName('studentname')[j].value);

                sub.push(tablegroup[i].getElementsByClassName('studentname')[j].value);
                // console.log("นิสิตคนที่");
                if (tablegroup[i].getElementsByClassName('studentname')[0].value == test) {
                    // console.log("ว่าง");
                    test = 99;
                }
                // console.log(tablegroup[i].getElementsByClassName('studentname')[j].value);
                // console.log("กลุ่ม");
                // console.log(sub[j]);
                // console.log("test");
                // console.log(test);
            }
            sub.push(<?php echo $year1 ?>)
            student.push(sub);
            // console.log(student[0][2]);

            // console.log("student");
            //     console.log(student[0][2]);
        }
        // if(student[0][1] == ""){

        //     alert(student[0][2]);
        // }
        // console.log(student);
        if (student[0][2] != 'x99' || student[0][3] != 'x98' || student[0][4] != 'x97') {
            if (student[0][1] != "" &&  student[0][2] != student[0][3] &&  student[0][4] != student[0][3] &&  student[0][2] != student[0][4]) {

                // console.log("ไม่ว่าง");
                $.ajax({
                    type: "POST",
                    url: 'updateGroup.php',
                    data: {
                        data: student
                    },
                    success: function(res) {
                        // console.log(res);
                        alert(res);
                    },
                });

                selectgroup();
            } else {
                // console.log("ว่าง");
                alert("กรุณาเลือกใหม่");
            }
        } else {
            alert("กรุณาเลือกใหม่");
        }
    }
</script>