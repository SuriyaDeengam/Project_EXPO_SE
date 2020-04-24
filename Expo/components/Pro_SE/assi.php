<!DOCTYPE html>
<html>

<?php
session_start();
require './config.php';

$teach1 = $_SESSION["page1"];

$group1 = $_POST["select_group1"];

$na =  "SELECT creategroup.Group_Id,creategroup.Teacher_Score,student.Tname_Th,creategroup.Student_Id , student.Fname_Th, student.Lname_Th FROM student,creategroup WHERE creategroup.Student_Id = student.Student_Id and creategroup.Teacher_Id = '$teach1' and creategroup.Group_Topic = '$group1' ";
$name = mysqli_query($conn, $na);
// and creategroup.Teacher_score=0
$eva = "SELECT * FROM evaluation ";
$evaluation = mysqli_query($conn, $eva);

$ch = 0;
$num = 0;
$score = 0;
if ($group1 == '99') {
    echo '<meta http-equiv= "refresh" content="0; url=none.php"/>';
}

?>
<!-- <script>
    alert("test");
</script> -->

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="./sek.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./custom.css">

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="style.css">
    <title>ประเมินคะแนน</title>
</head>

<body background="./iconSE/BG.png">
    <form action="assi01.php" method="post" name="form1">
        <div style="margin-left:30mm">
            <table BORDER="1" class="table" style="width:200mm;background-color: #7c0000; margin-left:70mm; margin-top:10mm">
                <tr>
                    <td style="width:100mm">
                        <h4 style="color:white" align='center'>ชื่อกลุ่ม</h4>
                    </td>
                    <td style="width:100mm">
                        <h4 style="color:white" align='center'>ชื่อนิสิต</h4>
                    </td>
                </tr>
                <tr style="background-color: white">
                    <td>
                        <h4 style="color:black" align='center'><?= $group1 ?></h4>
                    </td>
                    <td style="width:100mm">
                        <select name="select_student" style="width:50mm;">
                            <?php
                            while ($nameg = mysqli_fetch_array($name, MYSQLI_ASSOC)) { ?>

                                <option value="<?php echo $nameg['Student_Id'] ?>" style="margin-left:10mm">
                                    <?php echo $nameg['Tname_Th'];
                                        echo ' ';
                                        echo $nameg['Fname_Th'];
                                        echo ' ';
                                        echo $nameg['Lname_Th']; 
                                        echo 'คะแนน = ';
                                        echo $nameg['Teacher_Score']; 
                                        ?>
                                </option>

                            <?php } ?>
                        </select>
                    </td>
                </tr>
            </table>
            <div>
                <h5 style="font-weight: bold; text-decoration-line: underline">การให้ค่าคะแนน</h5>
                <h5 style="font-weight: bold;margin-left: 2%"> 5 หมายถึง ดีมาก</h5>
                <h5 style="font-weight: bold;margin-left: 2%"> 4 หมายถึง ดี</h5>
                <h5 style="font-weight: bold;margin-left: 2%"> 3 หมายถึง พอใช้</h5>
                <h5 style="font-weight: bold;margin-left: 2%"> 2 หมายถึง ควรปรับปรุง </h5>
                <h5 style="font-weight: bold;margin-left: 2%"> 1 หมายถึง ควรปรับปรุงมากที่สุด</h5>
            </div>
            <div style="margin-top: 3% ">

                <table class="table table-bordered" style="width:350mm">
                    <thead>
                        <tr style="background-color: #7c0000">
                            <th scope="col" style="width:50mm">
                                <h5 align="center" id="setwhite">ลำดับ</h5>
                            </th>
                            <th scope="col" style="width:200mm">
                                <h5 align="center" id="setwhite">รายละเอียดข้อคำถาม</h5>
                            </th>
                            <th scope="col" style="width:100mm">
                                <h5 align="center" id="setwhite">ระดับคะแนน</h5>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($result = mysqli_fetch_array($evaluation, MYSQLI_ASSOC)) {
                            $ch++;
                            ?>
                            <tr style="background-color: #ebebeb">
                                <th scope="row">
                                    <h4 align="center"><?php echo $ch ?> </h4>
                                </th>
                                <td>
                                    <h4><?php echo $result["Title"]; ?></h4>
                                </td>
                                <td>

                                    <input name="rdo<?= $ch ?>" type="radio" value="5" checked>5 &nbsp; &nbsp;
                                    <input name="rdo<?= $ch ?>" type="radio" value="4">4&nbsp; &nbsp;
                                    <input name="rdo<?= $ch ?>" type="radio" value="3">3&nbsp; &nbsp;
                                    <input name="rdo<?= $ch ?>" type="radio" value="2">2&nbsp; &nbsp;
                                    <input name="rdo<?= $ch ?>" type="radio" value="1">1&nbsp; &nbsp;

                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>

                <input type="hidden" name="select_group1" value="<?php echo $group1 ?>">
                <input type="hidden" name="cou" value="<?php echo $ch ?>">
                <!-- onclick="return confirm('ยืนยันการประเมิน')" -->
                <button name="btnSubmit" type="submit" value="Submit" style="background-color:#7c0000;margin-left: 35%" class="btn btn-secondary btn-lg" >
                    <h4 id="setwhite">บันทึกการประเมิน</h4>
                </button>
                <input type="hidden" name="select_group1" value="<?php echo $group1 ?>">
                <input type="hidden" name="cou" value="<?php echo $ch ?>">
                <a href="index.php" style="background-color:#7c0000;margin-left: 2%" class="btn btn-secondary btn-lg ">
                    <h4 id="setwhite">ย้อนกลับ</h4>
                </a>

            </div>
        </div>
    </form>
</body>

<script>
    function back() {
        echo '<meta http-equiv= "refresh" content="0; url=index.php"/>';
    }
</script>

</html>