<?php
    require('dbcon.php');

    $q = "SELECT teacher.Teacher_id,teacher.TeacherName from teacher ";
    $res = $con->query($q);
    $before = $res->fetch_assoc();
    $q = "SELECT * FROM teacher";
    $res = $con->query($q);
?>


<!DOCTYPE html>

<body>
    <br>
    <br>
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
            <h3 align='center'
                style="width: 130mm ; background-color: #7c0000; color: white;padding: 2%;margin-top: 5%; margin-left: 12%">
                เกณฑ์การประเมิน
            </h3>
    </div>
    <div class="row d-flex justify-content-center" style="padding-left:1em; height: 5em">
            <a onclick="changeCourse()" class="col-4 d-flex justify-content-center" style="height: 100%">
                <img style="height: 100%;" src="iconSE/confirm.png">
            </a>
        </div>
    <div class="row" style="padding-left: 1em;">
    <table  class="table table-bordered col-sm-12">
                <thead>
                        <tr style="background-color: gainsboro">
                          <th>รหัสประจำตัว</th>
                          <th>ชื่อ-นามสกุล</th>
                          <th>สายการเรียน</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php while($row = $res->fetch_assoc()){ ?>
                        <tr>
                          <td><?php echo $row['Student_id']; ?></td>
                          <td><?php echo $row['TitlenameT'].' '.$row['FnameT'].' '.$row['LnameT']; ?></td>
                          <td><?php echo $row['SubjectName']; ?></td>
                        </tr>
                        <?php } ?>
                      </tbody>
        </table>
    </div>
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <table class="table table-bordered" style="margin-top: 5%;margin-left: 25% ;border-color: black;" id="myTable">
            <tr>
                <td>
                    <div>
                        <h4 align='center'
                            style="width: 100mm ; background-color: #7c0000; color: white;padding: 2%;margin-top: 5%; margin-left: 5%;">
                            เกณฑ์ที่ 1
                        </h4>
                        <input class='form-control' id='reason' placeholder='กำหนดรายละเอียด' style='margin-bottom: 5%;'>
                    </div>
                </td>
                <td>
                    <div class='col-sm-12'>
                        <div class='col-sm-10'>
                            <input class='form-control' id='point' placeholder='กำหนดจำนวนคะแนน' style='margin-top: 40%;'>
                        </div>

                    </div>
                </td>
                <!-- <td>
                    <div class='col-sm-12'>
                        <div class='col-sm-12'>
                            <input class='form-control' id='force_id' placeholder='กำหนดลำดับเกณฑ์' style='margin-top: 40%;'>
                        </div>

                    </div>
                </td> -->
            </tr>
        </table>
    </div>
    <div class="col-sm-2"></div>

    <!-- <div class="col-sm-12" style="margin-left: 22%;">
        <a onclick="add_row()">
            <img src="iconSE/plus.png" style="width: 20%; margin: 10% ; min-width: 20mm; max-width: 20mm;">
        </a>
        <a onclick="del_row()">
            <img src="iconSE/minus.png" style="width: 20%; margin: 10% ; min-width: 20mm; max-width: 20mm;">
        </a>
    </div> -->
    <script>
        // function add_row() {
        //     var table = document.getElementById("myTable");
        //     count_rows = table.getElementsByTagName("tr").length;

            
        //     var row = table.insertRow(count_rows);
        //     var cell1 = row.insertCell(0);
        //     var cell2 = row.insertCell(1);
        //     var cell3 = row.insertCell(2);
        //     cell1.innerHTML = "<div><h4 align='center' style='width: 100mm ; background-color: #7c0000; color: white;padding: 2%;margin-top: 5%; margin-left: 5%; w'>เกณฑ์ที่" + (count_rows + 1) + "</h4></div><input class='form-control' placeholder='กำหนดชื่อสายการเรียน' style='margin-bottom: 5%;'>";
        //     cell2.innerHTML = "<div class='col-sm-12'><div class='col-sm-10'><input class='form-control' placeholder='กำหนดจำนวนคะแนน' style='margin-top: 40%'></div> </div>";
        //     cell3.innerHTML = "<div class='col-sm-12'><div class='col-sm-10'><input class='form-control' placeholder='กำหนดลำดับเกณฑ์' style='margin-top: 40%;'></div></div>"
        // }



        // function del_row() {
        //     var table = document.getElementById("myTable");
        //     count_rows = table.getElementsByTagName("tr").length;
        //     document.getElementById("myTable").deleteRow(count_rows - 1);
        // }
        function changeCourse(){
       
            var reason = document.getElementById('reason').value;
            var point = document.getElementById('point').value;
            // var force_id = document.getElementById('force_id').value;
            console.log(reason);
            console.log(point);
            // console.log(force_id);
            var xml = new XMLHttpRequest();
        
            xml.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    alert('Updated');
                    console.log(this.responseText);
                }
            }
            xml.open('GET','insert.php?reason='+reason+'&point='+point,true);
            xml.send();
        }


    </script>



</body>