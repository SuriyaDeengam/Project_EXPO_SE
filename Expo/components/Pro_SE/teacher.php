<?php
session_start();
    $sess_id =  $_SESSION['user'];
    $type = $_SESSION['type'];

    if(!isset($sess_id) || (!isset($type))){
        header('Location: ../../index.php');
    }
    if($type != 2){
        header('Location: ../../index.php');
    }

?>
<!doctype html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.css">

    <script src="../../js/taluew.js"></script>
    <script src="../../js/bootstrap.js"></script>


    <title>Teacher</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <script src="./func.js">
        // ///////////////////////DropDwon01//////////////////////////
        // function myFunction() {
        //     document.getElementById("myDropdown").classList.toggle("show");
        // }
    </script>

</head>

<style>
    #red {
        background-color: #7c0000;
    }
</style>

<header>
    <div id="nav"></div>
</header>
<!-- background="./iconSE/geer.png" -->

<body background="./iconSE/BG.png">
    <div class="container-fluid">
        <div class="row">
            <div id="red" style=" padding-bottom: 30%;" class="col-sm-2">

                <div style="margin-top: 30%;">
                    <hr>
                    <button onclick="selectgroup()" id="red" type="button" class="btn btn-secondary btn-lg"
                        style="width: 100%; height: 100%;">

                        <div class="col-sm-4">
                            <img src="iconSE/group.png" style="width: 100%; min-width: 10mm; max-width: 15mm;">
                        </div>
                        <div class="col-sm-8">
                            <h4 style="margin-right: 10mm">รายชื่อกลุ่ม</h4>
                        </div>

                    </button>
                    <hr>
                    <button onclick="selectteceher()" id="red" type="button" class="btn btn-secondary btn-lg"
                        style="width: 100%; height: 100%;">

                        <div class="col-sm-4">
                            <img src="iconSE/teacher.png" style="width: 100%; min-width: 10mm; max-width: 15mm;">
                        </div>
                        <div class="col-sm-8">
                            <h4>คณะกรรมการ</h4>
                        </div>

                    </button>
                    <hr>
                    <button onclick="gane()" id="red" type="button" class="btn btn-secondary btn-lg"
                        style="width: 100%; height: 100%;">

                        <div class="col-sm-4">
                            <img src="iconSE/force.png" style="width: 100%; min-width: 10mm; max-width: 15mm;">
                        </div>
                        <div class="col-sm-8">
                            <h4>เกณฑ์ประเมิน</h4>
                        </div>

                    </button>
                    <hr>
                    <button onclick="evaluation()" id="red" type="button" class="btn btn-secondary btn-lg"
                        style="width: 100%; height: 100%;">

                        <div class="col-sm-4">
                            <img src="iconSE/pramern.png" style="width: 100%; min-width: 10mm; max-width: 15mm;">
                        </div>
                        <div class="col-sm-8">
                            <h4>การประเมินผล</h4>
                        </div>

                    </button>
                    <hr>

                    <button onclick="check()" id="red" type="button" class="btn btn-secondary btn-lg"
                        style="width: 100%; height: 100%;">

                        <div class="col-sm-4">
                            <img src="iconSE/score.png" style="width: 100%; min-width: 10mm; max-width: 15mm;">
                        </div>
                        <div class="col-sm-8">
                            <h4>ดูคะแนนนิสิต</h4>
                        </div>

                    </button>
                    <hr>
                </div>

            </div>
            <div class="col-sm-10" id="page">

            </div>
        </div>
    </div>
</body>
<footer>
    <div id="foot"></div>
</footer>

</html>