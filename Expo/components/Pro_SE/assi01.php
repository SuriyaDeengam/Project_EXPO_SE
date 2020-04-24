<!DOCTYPE html>
<html>

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
    <title>ยืนยันการประเมิน</title>
</head>

<?php
require './config.php';

$i = 1;
$score = 0;

$studentid = $_POST["select_student"];

$group = $_POST["select_group1"];

$mul = 100 / ($_POST["cou"] * 5);
while ($i <= $_POST["cou"]) {
    $_POST["rdo$i"] = $_POST["rdo$i"] * $mul;
    $score = $score + $_POST["rdo$i"];
    $i = $i + 1;
}
$score = $score / 2;
// echo ("นาย ");
// echo $studentid;
// echo ("คะแนน ");
// echo $score;

$q = " UPDATE creategroup  SET Teacher_Score = $score  WHERE Student_Id = $studentid";
$conn->query($q);

// echo '<meta http-equiv= "refresh" content="0; url=index.php"/>';
?>

<body background="./iconSE/BG.png">
    <form action="assi.php" method="post" name="form1">
        <input type="hidden" name="select_group1" value="<?php echo $group ?>">
        <table style="margin-left: 150mm; margin-top:45mm">
            <tr>
                <td><h2>บันทึกการประเมินเรียบร้อย</h2></td>
            </tr>
            <tr>

                <td>
                    <button name="btnSubmit" type="submit" value="Submit" style="background-color:#7c0000; margin-top:10mm" class="btn btn-secondary btn-lg">
                        <h3 style="width:75mm;color:white">ตกลง</h3>
                    </button>
                </td>
            </tr>
        </table>

    </form>
</body>


</html>
<!-- 
<table BORDER="1" class="table" style="width:200mm;background-color: #7c0000; margin-left:100mm; margin-top:50mm">
        <tr>
            <td>
                <h1 align='center' style="color:white"> บันทึกการประเมินเรียบร้อย </h1>
                <h1 align='center' style="color:white"> ต้องการประเมินนิสิตกลุ่มนี้ต่อหรือไม่ </h1>
                <form action="assi.php" method="post" name="form1">
                    <input type="hidden" name="select_group1" value="<?php echo $group ?>">
                    <button name="btnSubmit" type="submit" value="Submit" style="background-color:white;margin-left: 35%;" class="btn btn-secondary btn-lg">
                        <h3 style="color:black">ใช่</h3>
                    </button>
                    <a href="index.php" style="background-color:white;margin-left: 2%" class="btn btn-secondary btn-lg">
                        <h3 style="color:black">ไม่ใช่</h3>
                    </a>
                </form>
            </td>
        </tr>
    </table> -->