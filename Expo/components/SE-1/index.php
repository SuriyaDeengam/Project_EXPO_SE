<!DOCTYPE html>
<?php session_start();
    $sess_id =  $_SESSION['user'];
    $type = $_SESSION['type'];
    if(!isset($sess_id) || (!isset($type))){
        header('Location: index.php');
    }
    if($type != 0){
        header('Location: ../../index.php');
    }
?>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./custom.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Admin</title>

    <!-- // import file function  -->
    <script src="func.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<style>
    #red {
        background-color: #7c0000 !important;
    }

    tagfont {
        font-size: 4.5mm;
        color: white !important;
    }
</style>

<header>
    <div id="nav"></div>
</header>

<body background="./iconSE/BG.png">
    <div class="container-fluid">
        <div class="row">
            <div id="red" style=" padding-bottom: 150px" class="col-sm-2">

                <div style="margin-top: 30px">
                    
                    <hr>
                    <button onclick="yearset()" id="red" type="button" class="btn btn-secondary btn-lg">
                            <img src="iconSE/pramern-white.png" style="width:30px;height:30px;">
                            <tagfont> กำหนดปีการศึกษา </tagfont>
                        </button>
                        <hr>
                    <button onclick="selectgrade()" id="red" type="button" class="btn btn-secondary btn-lg">
                        <img src="iconSE/pramern-white.png" style="width:30px;height:30px;">
                        <tagfont> กำหนดเกณฑ์ </tagfont>
                    </button>
                    <hr>
                    <button onclick="selectmajor()" id="red" type="button" class="btn btn-secondary btn-lg">
                        <img src="iconSE/pramern-white.png" style="width:30px;height:30px;">
                        <tagfont> กำหนดสายการเรียน </tagfont>
                    </button>
                    <hr>
                    <button onclick="account()" id="red" type="button" class="btn btn-secondary btn-lg">
                            <img src="iconSE/pramern-white.png" style="width:30px;height:30px;">
                            <tagfont> จัดการข้อมูลล็อกอิน </tagfont>
                        </button>
                    <hr>
                    <button onclick="stdshow()" id="red" type="button" class="btn btn-secondary btn-lg">
                        <img src="iconSE/pramern-white.png" style="width:30px;height:30px;">
                        <tagfont> จัดการข้อมูลนิสิต </tagfont>
                    </button>
                    <hr>
                    <button onclick="teashow()" id="red" type="button" class="btn btn-secondary btn-lg">
                        <img src="iconSE/pramern-white.png" style="width:30px;height:30px;">
                        <tagfont> จัดการข้อมูลอาจารย์ </tagfont>
                    </button>
                    <hr>
                    <button onclick="calsub()" id="red" type="button" class="btn btn-secondary btn-lg">
                            <img src="iconSE/pramern-white.png" style="width:30px;height:30px;">
                            <tagfont> เลือกสายการเรียน </tagfont>
                        </button>
                        <hr>
                    <button onclick="checkrequest()" id="red" type="button" class="btn btn-secondary btn-lg">
                        <img src="iconSE/pramern-white.png" style="width:30px;height:30px;">
                        <tagfont> ดูรีเควส </tagfont>
                    </button>
                    <hr>
                    
                </div>

            </div>
            <div class="col-sm-10" id = "page">
                
            </div>
        </div>
    </div>
</body>

<footer>
    <div id="foot"></div>
</footer>

</html>