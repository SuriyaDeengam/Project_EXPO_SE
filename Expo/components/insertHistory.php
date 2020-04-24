<?php 
    require('dbcon.php');
    $s_id = $_GET['s_id'];
    $before = $_GET['before'];
    $after = $_GET['after'];
    $reason = $_GET['reason'];
    $date = date('Y-m-d');

    $q = "select * from history_choose where s_id like '$s_id'";
    $res = $con->query($q);

    $q = "select * from subject where Subject_Id = $before";
    $studentRow = $con->query($q);
    $students = $studentRow->fetch_assoc();
    $studentLeft = $students['Student_Num'];
    $studentLeft = $studentLeft - 1;



    if($res->num_rows>0){
        echo "กรุณารอดำเนินการ";
    }else{
        $q = "insert into history_choose(s_id,before_c_id,after_c_id,reason,date) values('$s_id',$before,$after,'$reason','$date')";
        $query = $con->query($q);

        $q = "update subject set Student_Num = $studentLeft WHERE Subject_Id = $before";
        $query2 = $con->query($q);

        echo "Updated";
    }

    // $q = "update student
    // set student.Subject_id = $after
    // where student.Student_id like '$s_id'";
    // $res = $con->query($q);

?>