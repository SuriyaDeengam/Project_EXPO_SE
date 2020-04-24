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
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <div class="col-sm-6">
            <h3 align='center'
                style="width: 100mm ; background-color: #7c0000; color: white;padding: 2%;margin-top: 15%;">
                ชื่อสายการเรียน
        </h3>
        </div>
        <div class="col-sm-6">
            <h3 align='center'
                style="width: 60mm ; background-color: #7c0000; color: white;padding: 2%;margin-top: 15%; margin-left: 20%;">
                จำนวนคน
            </h3>
        </div>
    </div>
    <div class="row d-flex justify-content-center" style="padding-left:1em; height: 5em">
            <a onclick="changeCourse()" class="col-4 d-flex justify-content-center" style="height: 100%">
                <img style="height: 100%;" src="iconSE/plus.png">
            </a>
        </div>

    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <table class="table table-bordered" style="margin-top: 5%;margin-left: 25% ;border-color: black;" id="myTable">
            <tr>
                <td>
                    <div>
                        <h4 align='center'
                            style="width: 80mm ; background-color: #7c0000; color: white;padding: 2%;margin-top: 5%; margin-left: 10%;">
                            สายการเรียนที่ 1
                        </h4>
                        <input class='form-control' id='subject_name' placeholder='กำหนดชื่อสายการเรียน' style='margin-bottom: 5%;'>
                    </div>
                </td>
                <td>
                    <div class='col-sm-12'>
                        <div class='col-sm-8'>
                            <input class='form-control' id='subject_num' placeholder='กำหนดจำนวนคน' style='margin-top: 40%;'>
                        </div>

                    </div>
                </td>

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

        //     cell1.innerHTML = "<div><h4 align='center' style='width: 80mm ; background-color: #7c0000; color: white;padding: 2%;margin-top: 5%; margin-left: 10%; w'>สายการเรียนที่" + (count_rows + 1) + "</h4></div><input class='form-control' placeholder='กำหนดชื่อสายการเรียน' style='margin-bottom: 5%;'>";
        //     cell2.innerHTML = "<div class='col-sm-12'><div class='col-sm-10'><input class='form-control' placeholder='กำหนดจำนวนคน' style='margin-top: 40%'></div> </div>";
        // }


        // function del_row() {
        //     var table = document.getElementById("myTable");
        //     count_rows = table.getElementsByTagName("tr").length;
        //     document.getElementById("myTable").deleteRow(count_rows - 1);
        // }

        function changeCourse(){
       
            // var force_id = document.getElementById('force_id').value;
            var subject_name = document.getElementById('subject_name').value;
            var subject_num = document.getElementById('subject_num').value;
            var subject_status = document.getElementById('subject_status').value;
   
            console.log(subject_name);
            console.log(subject_num);
            console.log(subject_status);
            // console.log(force_id);
            var xml = new XMLHttpRequest();
        
            xml.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    alert('Updated');
                    console.log(this.responseText);
                }
            }
            xml.open('GET','insert_sub.php?subject_name='+subject_name+'&subject_num='+subject_num+'&subject_status='+subject_status,true);
            xml.send();
        }
    </script>
</body>