<?php
    require('dbcon.php');
    $q = "SELECT `subject_name`, `subject_num`, `subject_status` FROM `insert_subject`";
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
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <table class="table table-bordered" style="margin-top: 5%;margin-left: 25% ;border-color: black;" id="myTable">
            <tr>
                <td>
                    <div>
                        <h4 align='center'
                            style="width: 80mm ; background-color: #7c0000; color: white;padding: 2%;margin-top: 5%; margin-left: 10%;">
                            สายการเรียน
                        </h4>
                        <input class='form-control' id = 'Subject_Name' placeholder='กำหนดชื่อสายการเรียน' style='margin-bottom: 5%;'>
                    </div>
                </td>
                <td>
                    <div class='col-sm-10'>
                        <div class='col-sm-10'>
                            <input class='form-control' id='Subject_Num' placeholder='กำหนดจำนวนคน' style='margin-top: 40%;'>
                        </div>

                    </div>
                </td>

            </tr>
        </table>
    </div>
    <div class="col-sm-12">
    <div class="row d-flex justify-content-center" style="padding-left:1em; height: 5em">
            <a onclick="changeCourse(),selectmajor()" class="col-4 d-flex justify-content-center" style="height: 100%">
                <img style="height: 100%;" src="iconSE/confirm.png">
            </a>
        </div>
     </div>
    <script>
        function changeCourse(){
            var Subject_Name = document.getElementById('Subject_Name').value;
            var Subject_Num = document.getElementById('Subject_Num').value;
            if(Number(Subject_Num) == 'Nan'){
                alert('Please input score in integer');
            }
            else
            {
            var all = [];
            all.push(Subject_Name)
            all.push(Subject_Num)
            all.push(1)
            $.ajax({
                type: "POST",
                url: 'ins2.php',
                data: {
                    data: all
                },
                success: function(res) {
                    alert(res);
                },
            });
            }
        }
    </script>
</body>