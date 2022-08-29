<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/business_login.css">
</head>
<body>
    <?php
        include 'navbar.php'
    ?>

<section class="job-seeker-login">
    <div id="main-div">
        <div id="content">
                    <form name="loginFormEmp" action="jobEmployeer-login-process.php" method="POST" onsubmit ="return validateLoginEmp()" >
                        <div id="error">
                                <?php if (isset($_GET['error'])) {
                                echo $_GET['error'];
                                }?>
                        </div>
                        <div id="whose-form">
                            <p>Employee Form</p>
                        </div>
                        <div id="username">
                            <label id="usser">Email</label>
                            <br>
                            <input class="information-for-login" id="input-user" type="text" name="uname" placeholder="Enter your username here!!!"/>
                            <br>
                            <span class="error_msg" id="loginEmailErr"></span>
                        </div>

                        <div class="information-for-login" id="password">
                            <label id="psw">Password</label>
                            <br>
                            <input class="information-for-login"  id="input-pass" type="password" name="pass" placeholder="Enter your password here!!!"/>
                            <br>
                            <span class="error_msg" id="loginPasswordErr"></span>
                        </div>

                        <div class="button" id="login">
                            <input id="login-btn" type="submit" value="Login" />
                        </div>

                    </form>
                        <div id="design">
                                <div id="horizontal-line-one" class="line">
                                
                                </div>
                                <div id="or" class="line">
                                    <p>or</p>
                                </div>
                                <div id="horizontal-line-two" class="line">
                                </div>
                        </div>
                    <div id="register">
                        <button id="register-btn"><a class="mylink" href="jobEmployeer-register.php">Register</a></button>
                    </div>
                </div>
                    
            </div>   
        </div>
    </section>


    <script>
            function printErr(errorId,msg){
                document.getElementById(errorId).innerHTML=msg;
            }
            function validateLoginEmp(){
                const email=document.loginFormEmp.uname.value;
                const pass=document.loginFormEmp.pass.value;
                var email_pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                // console.log(email+"  "+pass);
                emailErr=passErr=false;

                if(email==""){
                    printErr("loginEmailErr","Email cannot be empty!")
                    emailErr=true;
                }
                else if(email.match(email_pattern)){
                    emailErr = false;
                    printErr("loginEmailErr","");
                }
                else{
                    printErr("loginEmailErr","Must contain @ in the email")
                    emailErr=true;
                }

                if(pass==""){
                    printErr("loginPasswordErr","Password cannot be empty!")
                    passErr=true;
                    
                }else if(pass.length>10){
                   
                    printErr("loginPasswordErr","Password should be less than 10 characters")
                    passErr=true;
                
                }
                else{
                    printErr("loginPasswordErr","")
                    passErr=false;
                }
                


                if(emailErr==true || passErr==true){
                    return false;
                }else{
                    return true;
                }
                
            }

        </script>
<?php
        include 'footer.php'
    ?>
</polacode>
   

</body>
</html>