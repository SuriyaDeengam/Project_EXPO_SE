<?php
    require('dbcon.php');


    $q = "SELECT `Email`, `ID` FROM `account`";
    $res = $con->query($q);
?>


<!DOCTYPE html>
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
                    <button onclick="window.close();window.open('index.php')" id="red" type="button" class="btn btn-secondary btn-lg">
                        <img src="iconSE/pramern-white.png" style="width:30px;height:30px;">
                        <tagfont> ย้อนกลับ </tagfont>
                    </button>
                
                </div>

            </div>
            <div class="col-sm-10" >
    
            
                <div class="row col-sm-7" style="margin-left: 20%">
                    <table style="border-color: black; height: 60px; width: 500px; margin-left: 10%"
                        class="table table-bordered col-sm-10">
                        <td>
                            <div class="col-sm-10" style="margin-top: 0%; margin-left: 10%">
                                <table style="border-color: black; height: 30px; width: 30px;"
                                    class="table table-bordered col-sm-5">
                                    <h3 align="center" style="background-color: #7c0000; color: white;padding: 3%;">
                                        ข้อมูล Account</h3>
                                        <form action="uploadacc.php" method="post" enctype="multipart/form-data">
                                            Select file to upload:<br>
                                            <input type="file" name="fileToUpload" id="fileToUpload"><br>
                                            <input type="submit" value="Upload File" name="submit">
                                        </form>
                                </table>
                            </div>
                        </td>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

<footer>
    <div id="foot"></div>
</footer>

</html>





