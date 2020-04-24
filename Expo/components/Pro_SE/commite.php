<!DOCTYPE html>
<?php

session_start();
require './config.php';

$student = "SELECT * FROM student";
$student0 = mysqli_query($conn, $student);

$eva = "SELECT * FROM evaluation ";
$evaluation = mysqli_query($conn, $eva);

$p1 = $_SESSION["page1"];




$create = "SELECT * FROM `creategroup` WHERE `Group_id` = $p1 ";
$creategroup = mysqli_query($conn, $create);


?>
<body>
    <div class="row" style="margin-top: 5%;">
        <div style=" margin-left: 10%">
            <table style="border-color: black; width: 700px; height: 50;" class="table table-bordered ">

                <td style="background-color: #7c0000;width: 100px;">
                    <h5 style="color:white">กลุ่ม
                    <?php echo $p1 ?>
                </td>
                <div class="col-sm-10">
                    <td>

                        <div class="col-sm-12">
                            <div class="col-sm-4">
                                <h5>

                                <?php
                                    $result = mysqli_fetch_array($creategroup, MYSQLI_ASSOC) ?>
                                        <?php echo $result["Topic"]; ?>
                                    
                                </h5>
                            </div>
                            <div class="col-sm-8">
                                <select class="browser-default custom-select custom-select-lg mb-3">
                                    <option value="" disabled selected>เลือกชื่อนิสิตที่ต้องการประเมินผล</option>

                                    <?php
                                    while ($result = mysqli_fetch_array($student0, MYSQLI_ASSOC)) { ?>
                                        <option value="s1"> <?php echo $result["FnameT"];
                                                                echo " ";
                                                                echo $result["LnameT"]; ?></option>
                                    <?php
                                    }
                                    ?>

                                </select>
                            </div>
                        </div>


                    </td>
                </div>
            </table>
        </div>

    </div>
    <div>
        <h5 style="font-weight: bold; text-decoration-line: underline">การให้ค่าคะแนน</h5>
        <h5 style="font-weight: bold;margin-left: 2%"> 5 หมายถึง ดีมาก</h5>
        <h5 style="font-weight: bold;margin-left: 2%"> 4 หมายถึง ดี</h5>
        <h5 style="font-weight: bold;margin-left: 2%"> 3 หมายถึง พอใช้</h5>
        <h5 style="font-weight: bold;margin-left: 2%"> 2 หมายถึง ควรปรับปรุง </h5>
        <h5 style="font-weight: bold;margin-left: 2%"> 1 หมายถึง ควรปรับปรุงมากที่สุด</h5>
    </div>

    <div style="margin-top: 3%">
        <table class="table table-bordered">
            <thead>
                <tr style="background-color: #7c0000">
                    <th scope="col">
                        <h5 id="setwhite">ลำดับ</h5>
                    </th>
                    <th scope="col">
                        <h5 id="setwhite">รายละเอียดข้อคำถาม</h5>
                    </th>
                    <th scope="col">
                        <h5 id="setwhite">ระดับคะแนน</h5>
                    </th>
                </tr>
            </thead>
            <tbody>
                <script>
                    var c1 = 1;
                </script>
                <?php
                while ($result = mysqli_fetch_array($evaluation, MYSQLI_ASSOC)) { ?>
                    <tr style="background-color: #ebebeb">
                        <th scope="row"><?php echo $result["edi"]; ?></th>
                        <td><?php echo $result["title"]; ?></td>
                        <td>
                            <label style="margin-left:5%" class="radio-inline"><input type="radio" name="<?php echo $result["edi"]; ?>" checked>5</label>
                            <label style="margin-left:10%" class="radio-inline"><input type="radio" name="<?php echo $result["edi"]; ?>">4</label>
                            <label style="margin-left:10%" class="radio-inline"><input type="radio" name="<?php echo $result["edi"]; ?>">3</label>
                            <label style="margin-left:10%" class="radio-inline"><input type="radio" name="<?php echo $result["edi"]; ?>">2</label>
                            <label style="margin-left:10%" class="radio-inline"><input type="radio" name="<?php echo $result["edi"]; ?>">1</label>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

</body>