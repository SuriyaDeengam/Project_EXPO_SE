<!DOCTYPE html>
<?php
session_start();
require './config.php';

$p1 = $_SESSION["page1"];

$gro = "SELECT * FROM creategroup WHERE Teacher_Id = '$p1'ORDER BY Group_Id  ";
$group = mysqli_query($conn, $gro);
?>

<body>
    <table style="border-color: black; width: 390px; height: 50; margin-left:30%;margin-top:10%" class="table table-bordered col-sm-12">
        <td style="background-color: #7c0000">
            <h5 align="center" style="font-weight: bold ; color:white">เลือกกลุ่มที่ต้องการลบ</h5>
        </td>
        <div class="col-sm-10">
            <td>
                <select id="select_group" class='browser-default custom-select custom-select-lg mb-3'>
                    <option value="no" selected>เลือกชื่อกลุ่ม</option>
                    <?php
                    $max = 0;
                    while ($result = mysqli_fetch_array($group, MYSQLI_ASSOC)) {
                        $i = $result['Group_Id'];
                        if ($i > $max) { ?>
                            <option value='<?php echo $result['Group_Topic']; ?>'><?php echo $result['Group_Topic']; ?></option>
                    <?php $max = $i;
                        }
                    } ?>
                </select>
            </td>
        </div>
    </table>

    <div class="col-sm-12">
        <button type="button" onclick="select_g()" id="red" style="margin-left: 40%" class="btn btn-secondary btn-lg">
            <h4 id="setwhite">ตกลง</h4>
        </button>
    </div>


</body>

<script>
    function select_g() {
        var select_group = $('#select_group').val();
        console.log(select_group);
        
        if(select_group == "no"){
            alert("กรุณาเลือกกลุ่ม");
        }
        else{
        $.ajax({
            type: "POST",
            url: 'delete.php',
            data: {
                data: select_group
            },
            success: function(res) {
                alert(res);
                window.location.reload();
            },
        });
        }
    }
</script>