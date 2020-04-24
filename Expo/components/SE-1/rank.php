<?php
require('dbcon.php');

$q = "SELECT gradetable.student_id, gradetable.grade,student.Fname_Th,register.Course,subject.Subject_Name,subject.Subject_Num,subject.Student_Num FROM gradetable,register,subject,student WHERE register.Priority = 1 and register.User_Id = gradetable.student_id and register.Course = subject.Subject_Id and student.Student_Subject=0 and student.Student_Id=gradetable.student_id ORDER BY grade DESC";
$res = $con->query($q);
mysqli_set_charset($con, "utf8");
?>

<!DOCTYPE html>
<?php
$Student_Num2 = 1;
while ($row = $res->fetch_assoc()) {
    $c = $row['Course'];
    $s = $row['student_id'];
    $Subject_Num = $row['Subject_Num'];
    $Student_Num = $row['Student_Num'];
    $Student_Num2 = $Student_Num+1;
    // echo ($Subject_Num);
    // echo ($Student_Num);
    // echo ($Student_Num2);
    //if ($Subject_Num > $Student_Num) {
        //echo ($Student_Num2);
        $q = "UPDATE `student` SET `Student_Subject`= $c WHERE Student_Id = '$s'";
        $con->query($q);
        $q = "UPDATE `subject` SET `Student_Num`= $Student_Num2 WHERE Subject_Id = '$c'";
        $con->query($q);
    //}
}
    ?>
<?php   
 mysqli_data_seek($res, 0);
 echo '<meta http-equiv= "refresh" content="0; url=index.php"/>';
?>

