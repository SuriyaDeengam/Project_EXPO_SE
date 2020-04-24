<?php
    session_start();
    $sess_id =  $_SESSION['user'];
    $type = $_SESSION['type'];
    if(!isset($sess_id) || (!isset($type))){
        header('Location: index.php');
    }
    if($type != 1){
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./js/taluew.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="regis.css">
    <link rel="stylesheet" href="components/page1.css">
    <link rel="stylesheet" href="components/page2.css">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid mycon">
        <div class="row mynav">
            <div class="left-con d-flex justify-content-center align-items-center">
                <img src="./recourses/top-left.png">
            </div>
        </div>

        <div class="row mybody">
            <div class="body-left d-flex flex-column align-items-center">
                <a style="cursor: pointer" onclick="showpage1()"
                    class="box d-flex justify-content-center align-items-center">
                    <div class="box-icon d-flex justify-content-center align-items-center">
                        <img src="./recourses/left-icon.png">
                    </div>
                    <div class="box-text pt-2 d-flex align-items-center">
                        <h3>เกณฑ์การให้คะแนน</h3>
                    </div>
                </a>

                <a style="cursor: pointer" onclick="showpage2()"
                    class="box d-flex justify-content-center align-items-center">
                    <div class="box-icon d-flex justify-content-center align-items-center">
                        <img src="./recourses/left-icon.png">
                    </div>
                    <div class="box-text pt-2 d-flex align-items-center">
                        <h3>เลือกสายการเรียน</h3>
                    </div>
                </a>


                <a style="cursor: pointer" onclick="showpage3()"
                    class="box d-flex justify-content-center align-items-center">
                    <div class="box-icon d-flex justify-content-center align-items-center">
                        <img src="./recourses/left-icon.png">
                    </div>
                    <div class="box-text pt-2 d-flex align-items-center">
                        <h3>ประกาศผล</h3>
                    </div>
                </a>
                

                <a style="cursor: pointer" onclick="showpage4()"
                    class="box d-flex justify-content-center align-items-center">
                    <div class="box-icon d-flex justify-content-center align-items-center">
                        <img src="./recourses/left-icon.png">
                    </div>
                    <div class="box-text pt-2 d-flex align-items-center">
                        <h3>ยื่นคำร้องเปลี่ยนสาย</h3>
                    </div>
                </a>


                
                <a style="cursor: pointer" onclick="showpage5()"
                    class="box d-flex justify-content-center align-items-center">
                    <div class="box-icon d-flex justify-content-center align-items-center">
                        <img src="./recourses/left-icon.png">
                    </div>
                    <div class="box-text pt-2 d-flex align-items-center">
                        <h3>ประวัติการยื่นคำร้อง</h3>
                    </div>
                </a>

                <a href="index.php" style="cursor: pointer;text-decoration: none;"
                    class="box d-flex justify-content-center align-items-center">
                    <div class="box-icon d-flex justify-content-center align-items-center">
                        <img src="./recourses/login(white).png">
                    </div>
                    <div class="box-text pt-2 d-flex align-items-center">
                        <h3>ออกจากระบบ</h3>
                    </div>
                </a>
            </div>

            <div id="content" style="overflow-y: scroll" class="body-right">

            </div>
        </div>

        <div class="row myfooter d-flex justify-content-center align-items-center">
            <h3>COPYRIGHT @ 2019 COMPUTER ENGINEERING AND INFORMATICS,FACULITY OF ENGINEERING AT SRIRACHA, KASETSART
                UNIVERSITY SRIRACHA CAMPUS.</h3>
        </div>

    </div>

    <script>
        $("#content").load("./components/page1.php");

        function showpage1() {
            $("#content").load("./components/page1.php");
        }

        function showpage2() {
            console.log("hi");
            $("#content").load("./components/page2.php");
        }

        function showpage3() {
            $("#content").load("./components/page3.php");
        }

        function showpage4() {
            $("#content").load("./components/page4.php");
        }


        function showpage5() {
            $("#content").load("./components/page5.php");
        }
    </script>

</body>

</html>