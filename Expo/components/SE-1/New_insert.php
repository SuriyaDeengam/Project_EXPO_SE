<?php
    require('dbcon.php');

    $q = "SELECT `Title`, `Score` FROM `evaluation`";
    $res = $con->query($q);
?>

<!DOCTYPE html>
<body>
    <div class="col-sm-8">
        <table class="table table-bordered" style="margin-top: 5%;margin-left: 25% ;border-color: black;" id="myTable">
            <tr>
                <td>
                    <div>
                        <h4 align='center'
                            style="width: 100mm ; background-color: #7c0000; color: white;padding: 2%;margin-top: 5%; margin-left: 5%;">
                            เกณฑ์
                        </h4>
                        <input class='form-control' id='Title' placeholder='กำหนดรายละเอียด' style='margin-bottom: 5%;'>
                    </div>
                </td>
                <td>
                    <div class='col-sm-12'>
                     <div class='col-sm-10'>
                            <input class='form-control' id='Score' placeholder='กำหนดจำนวนคะแนน' style='margin-top: 40%;'>
                        </div>

                    </div>
                </td>
            </tr>
        </table>
    </div>
    
    <div class="col-sm-12">
    <div class="row d-flex justify-content-center" style="padding-left:1em; height: 5em" align='center'>
            <a onclick="changeCourse(),selectgrade()" class="col-4 d-flex justify-content-center" style="height: 100%">
                <img style="height: 100%;" src="iconSE/confirm.png">
            </a>
        </div>
    </div>
</body>

<script>
        function changeCourse(){
            var Title = document.getElementById('Title').value;
            var Score = document.getElementById('Score').value;
            var tmp = 0;
            if(Number(Score) == 'Nan'){
                alert('Please input score in integer');
            }
            else
            {
            var all = [];
            all.push(Title)
            all.push(Score)
            $.ajax({
                type: "POST",
                url: 'ins.php',
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