<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/admin-login.css">
    <style>
        .error_msg{
            color: red;
            font-size: 15px;
        }
    </style>
</head>
<body>
    <?php 
        include 'navbar.php';
        ?>
    <section class="job-seeker-login">
    <div id="main-div">
        <div id="content">
                    <form name="admin_login" action="admin-info-check.php" method="POST" onsubmit="return validatemyform()">
                        <div id="whose-form">
                            <p>Admin Login</p>
                        </div>
                        <div id="username">
                            <label id="usser">Email</label>
                            <br>
                            <input class="information-for-login" id="input-user" type="text" name="uname" placeholder="Enter your username here!!!"/>
                            <br>
                            <span class="error_msg" id="error_on_email"></span>
                        </div>

                        <div class="information-for-login" id="password">
                            <label id="psw">Password</label>
                            <br>
                            <input class="information-for-login"  id="input-pass" type="password" name="pass" placeholder="Enter your password here!!!"/>
                            <br>
                            <span class="error_msg" id="error_on_password"></span>
                        </div>

                        <div class="button" id="login">
                            <input id="login-btn" type="submit" value="Login" />
                        </div>

                    </form>
                        <!-- <div id="design">
                                <div id="horizontal-line-one" class="line">
                                
                                </div>
                                <div id="or" class="line">
                                    <p>or</p>
                                </div>
                                <div id="horizontal-line-two" class="line">
                                </div>
                        </div> -->
                    <!-- <div id="register">
                        <button id="register-btn"><a class="mylink" href="admin_register.php">Register</a></button>
                    </div>  -->
                </div>
                    
             </div>   
        </div>
    </section>
    <script>
        function printErr(errorId,msg){
                document.getElementById(errorId).innerHTML = msg;
            }
            function validatemyform(){
                const email = document.admin_login.uname.value;
                const password = document.admin_login.pass.value;

                error_on_email = error_on_password = false;

                if(email == ''  || email == null){
                    printErr("error_on_email","Email cannot be empty!");
                    error_on_email = true;
                }
                else{
                    printErr("error_on_email","");
                    error_on_email = false;
                }

                if(password == ''  || password == null){
                    printErr("error_on_password","Password cannot be empty!");
                    error_on_password = true;
                }
                else{
                    printErr("error_on_email","");
                    error_on_password = false;
                }

                if(error_on_email == true || error_on_password==true){
                    return false;
                }
                else if(error_on_email == false || error_on_password==false){
                    return true;
                }
            }
        </script>
    <?php
        include 'footer.php';
        ?>
</body>
</html>