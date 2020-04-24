<!DOCTYPE html>
<?php
session_start();
require './config.php';

$_SESSION["page2"] = "111";
session_write_close();

$p1 = $_SESSION["page1"];

$teacher1 = "SELECT * FROM teacher WHERE Teacher_Id != '$p1'";
$teacher = mysqli_query($conn, $teacher1);

$gro = "SELECT * FROM creategroup WHERE Teacher_Id = '$p1' and  Group_Status = 1 ORDER BY Group_Id";
$group = mysqli_query($conn, $gro);

$comm1 = 0;

?>

<body>
    <div class="col-sm-2"></div>

    <div class="col-sm-8">
        <h2 align='center' style="color:#7c0000">เพิ่มหรือแก้ไขกรรมการ</h2>
        <table BORDER="1" WIDTH="500mm" style="margin-top:2% ">
            <tr style=" background-color: #7c0000;">
                <th>
                    <h4 style="width:60mm;color:white" align='center'>เลือกกลุ่ม</h4>
                </th>
                <th>
                    <h4 style="width:70mm;color:white" align='center'>เลือกกรรมการของกลุ่มคนที่ 1</h4>
                </th>
                <th>
                    <h4 style="width:70mm;color:white" align='center'>เลือกกรรมการของกลุ่มคนที่ 2</h4>
                </th>
            </tr>
            <tr>
                <td>
                    <select id="select_group1" style="width:60mm;">
                        <option value='x100' selected>เลือกกลุ่ม</option>
                        <?php
                        $max = 0;
                        while ($select_group01 = mysqli_fetch_array($group, MYSQLI_ASSOC)) {
                            ?>

                            <?php
                                $i = $select_group01['Group_Id'];
                                if ($i > $max) { ?>
                                <option value="<?php echo $select_group01['Group_Topic']; ?>"><?php echo $select_group01['Group_Topic']; ?></option>
                        <?php
                                $max = $i;
                            }
                        }
                        mysqli_data_seek($group, 0); ?>
                    </select>
                </td>
                <td>
                    <select id="select_commit1" style="width:70mm;">
                        <option value="x99" selected>เลือกกรรมการคนที่1</option>
                        <?php
                        $commi1 = "SELECT * FROM teacher WHERE Teacher_Id != '$p1' ";
                        $commi01 = mysqli_query($conn, $commi1);
                        while ($select_commot01 = mysqli_fetch_array($commi01, MYSQLI_ASSOC)) { ?>
                            <option value="<?php echo $select_commot01['Teacher_Id']; ?>"><?php echo $select_commot01['Teacher_Name']; ?></option>
                        <?php }
                        mysqli_data_seek($commi01, 0); ?>
                    </select>
                </td>
                <td>
                    <select id="select_commit2" style="width:70mm;">
                        <option value="x98" selected>เลือกกรรมการคนที่2</option>
                        <?php
                        while ($select_commot02 = mysqli_fetch_array($teacher, MYSQLI_ASSOC)) { ?>
                            <option value="<?php echo $select_commot02['Teacher_Id']; ?>"><?php echo $select_commot02['Teacher_Name']; ?></option>
                        <?php }
                        mysqli_data_seek($teacher, 0); ?>
                    </select>
                </td>
            </tr>
        </table>
        <button type="button" onclick="sel()" id="red" style="margin-left: 43%; margin-top:3%" class="btn btn-secondary btn-lg">
            <h4>ตกลง</h4>
        </button>


        <h2 align='center' style="color:#7c0000">รายชื่อกลุ่มและกรรมการ</h2>
        <?php
        $max = 0;
        while ($result = mysqli_fetch_array($group, MYSQLI_ASSOC)) {
            ?>

            <?php
                $i = $result['Group_Id'];
                if ($i > $max) {
                    $gro1 = "SELECT * FROM creategroup WHERE Group_Id = $i";
                    $group1 = mysqli_query($conn, $gro1);
                    $namegroup = mysqli_fetch_array($group1, MYSQLI_ASSOC);

                    $c1 = "SELECT creategroup.Group_Id,creategroup.Committee1_Id,teacher.Teacher_Name FROM teacher,creategroup WHERE creategroup.Committee1_Id = teacher.Teacher_Id and creategroup.Group_Id = $i";
                    $com1 = mysqli_query($conn, $c1);
                    $commit1 = mysqli_fetch_array($com1, MYSQLI_ASSOC);

                    $c2 = "SELECT creategroup.Group_Id,creategroup.Committee2_Id,teacher.Teacher_Name FROM teacher,creategroup WHERE creategroup.Committee2_Id = teacher.Teacher_Id and creategroup.Group_Id = $i";
                    $com2 = mysqli_query($conn, $c2);
                    $commit2 = mysqli_fetch_array($com2, MYSQLI_ASSOC);
                    ?>

                <TABLE BORDER="1" WIDTH="500mm" style="margin-top:5% ">
                    <tr style=" background-color: #7c0000;">
                        <th>
                            <h4 style="width:100mm;color:white" align='center'>ชื่อกลุ่ม</h4>
                        </th>
                        <th>
                            <h4 style="width:100mm;color:white" align='center'>รายชื่อกรรมการของกลุ่ม</h4>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <h4 align='center'><?php echo $namegroup['Group_Topic']; ?></h4>
                        </td>
                        <td style="margin-left:10mm">
                            <h4 style="margin-left:10mm"><?php echo $commit1['Teacher_Name']; ?></h4>
                            <h4 style="margin-left:10mm"><?php echo $commit2['Teacher_Name']; ?></h4>
                        </td>
                    </tr>
                </TABLE>
        <?php
                $max = $i;
            }
        }
        mysqli_data_seek($group, 0); ?>



    </div>
    <div class="col-sm-12" style="margin:15mm"></div>
</body>
<script>
    function sel() {
        var select_group = $('#select_group1').val();
        // console.log(select_group);

        var select_commit001 = $('#select_commit1').val();
        // console.log(select_commit001);

        var select_commit002 = $('#select_commit2').val();
        // console.log(select_commit002);

        var commi = [];
        commi.push(select_group);
        commi.push(select_commit001);
        commi.push(select_commit002);
  

        if(commi[0] != 'x100' && commi[1] != commi[2] && commi[1] != 'x99' && commi[2] != 'x98' ){
            $.ajax({
                type: "POST",
                url: 'addteacher.php',
                data: {
                    data: commi
                },
                success: function(res) {
                    window.location.reload();
                    alert(res);
                },
            });
         }
          else {
             alert ("กรุณาลองใหม่!!!!!!!");
         }

    }
</script>

<!-- <button type="button" onclick="addteacher()" id="red" style="margin-left: 40%" class="btn btn-secondary btn-lg">
            <h4 id="setwhite">เลือกกรรมการ</h4>
        </button> -->