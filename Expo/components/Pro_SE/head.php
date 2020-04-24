<!DOCTYPE html>
<?php
session_start();
require './config.php';

$p1 = $_SESSION["page1"];

$teacher = "SELECT * FROM teacher WHERE `Teacher_Id` ='$p1'";
$teachername = mysqli_query($conn, $teacher);
?>

<head>
    <style>
        textbutton {
            font-size: 6mm;
        }

        ul {
            list-style-type: none;
            margin: 0;
            /* padding: 10px; */
            overflow: hidden;
            background-color: #7c0000;
        }

        .dropbtn:hover,
        .dropbtn:focus {
            background-color: rgb(234, 238, 25);
        }
    </style>
</head>

<body>
    <header>
        <ul>
            <div class="col-sm-3">
                <img src="./iconSE/top-left.png" style="margin-top: 3% ;width: 25mm; height: 15mm;">
            </div>
            <div class="col-sm-5"></div>
            <div class="col-sm-4">
                <div class="col-sm-9">
                    <h4 style="margin-top: 18px; margin-left: 30%" id="setwhite">
                        <?php
                        $result = mysqli_fetch_array($teachername, MYSQLI_ASSOC);
                        echo $result["Teacher_Name"]; ?> </h4>
                </div>

                <div class="col-sm-3">
                    <a href="../../index.php">
                        <h4 style="margin-top: 20px" id="setwhite">Logout</h4>
                    </a>
                </div>
            </div>
        </ul>
    </header>
</body>