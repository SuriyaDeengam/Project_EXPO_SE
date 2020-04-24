<?php
    require("dbcon.php");

    $Email = $_POST["username"];
    $Password = sha1($_POST["password"]);

    $q = "select * from account where Email like '$Email' and Password like '$Password'";
    $res = $con->query($q);


    if($res->num_rows == 1)
    {
        $row = $res->fetch_assoc();
        session_start();
        

        $_SESSION["user"] = $row["ID"];
        $_SESSION["type"] = $row["AccountStatus"];
        if($row["AccountStatus"] == 1){
            $q = "select * from student where Student_Id like ".$row['ID']." and Status_Year = 1";
            $checkStatus = $con->query($q);
            if($checkStatus->num_rows == 0){
                echo "<script>alert('คุณไม่ได้ไปต่อ');window.location.href = '../index.php';</script>";
                
                exit();
            }
            header("Location: ../regis.php");

        }else if($row["AccountStatus"] == 0){
            header("Location: SE-1/index.php");
        
        }else if($row["AccountStatus"] == 2){
            echo "<script>console.log('asd');</script>";
            header("Location: Pro_SE/index.php");
        }
    }
    else{
        header("Location: ../index.php");
    }
?>
