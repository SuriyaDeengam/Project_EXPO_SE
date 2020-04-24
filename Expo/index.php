<?php 
    session_start();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>

<body>
    <div class="big-con">
        
        <div class="left-con">
            <img style="height: 100%;" src="recourses/cpe.png" alt="">
        </div>


        <div class="right-con" >
            <form class="form-con" id="myform" action="components/login.php" method="post">
                <h2 style="color:white; font-size:4em; font-family: myfontB;">SIGN IN</h2>


                <div class="input-group mb-3" style="height: 2.5em;width: 80%; margin-top: 2em">
                    <div class="input-group-prepend" style="height: 100%">
                        <div class="input-group-text" style="height: 100%">
                            <img style="height: 100%;" src="recourses/asas.png" alt="">
                        </div>
                    </div>
                    <input name="username" style="height: 100%" type="text" class="form-control" placeholder="Username"
                        aria-label="Username" aria-describedby="basic-addon1">
                </div>


                <div class="input-group mb-5 d-flex" style="height: 2.5em;width: 80%">
                    <div class="input-group-prepend" style="height: 100%;">
                        <div class="input-group-text" style="height: 100%;">
                            <img style="height: 122%;" src="recourses/key.png" alt="">
                        </div>
                    </div>
                    <input name="password" style="height: 100%;width: 70%" type="password" class="form-control" placeholder="Password"
                        aria-label="Password" aria-describedby="basic-addon1">
                </div>


                <a onclick="login()" style="cursor: pointer; text-decoration: none; " class="btn-con">
                    <img style="height: 55%;" src="recourses/login-btn.png">
                    <h4 class="mt-1" style="color:white;">Login</h4>
                </a>
            </form>
        </div>
    </div>
    <script>
        function login(){
            var form = document.getElementById("myform");
            form.submit();
            
        }

    </script>
</body>

</html>