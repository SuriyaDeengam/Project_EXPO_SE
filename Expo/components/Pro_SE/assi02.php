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
$teach = $_POST["teach"];
$group = $_POST["select_group2"];

$mul = 100 / ($_POST["cou"] * 5);
while ($i <= $_POST["cou"]) {
    $_POST["rdo$i"] = $_POST["rdo$i"] * $mul;
    $score = $score + $_POST["rdo$i"];
    $i = $i + 1;
}
$score = $score/4;

$q = "UPDATE creategroup, teacher SET creategroup.Committee1_Score =$score WHERE creategroup.Committee1_Id = '$teach' and creategroup.Student_Id = '$studentid'";
$conn->query($q);
$q = "UPDATE creategroup, teacher SET creategroup.Committee2_Score =$score WHERE creategroup.Committee2_Id = '$teach' and creategroup.Student_Id = '$studentid'";
$conn->query($q);

// echo '<meta http-equiv= "refresh" content="0; url=index.php"/>';
?>
<body background="./iconSE/BG.png">
    <form action="assign1.php" method="post" name="form1">
        <input type="hidden" name="select_group2" value="<?php echo $group ?>">
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