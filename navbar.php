<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/navbars.css">
    <script src="https://kit.fontawesome.com/7f5825e61a.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<div class="contact">
                
                <div class="adjustment">
        
                </div>
                <ul class="contact-info">
                    <li><i class="fa-solid fa-envelope"></i></li>
                    <li id="mail">myriadjob@gmail.com</li>
                    <li><i class="fa-solid fa-tty"></i></li>
                    <li id="tel">01-36-47-387</li>
                </ul>
            </div>

            
            <nav>
                <img src="css/img/redesign1-01.png" alt="">
                <ul class="nav">

                        <li class="nav_link" id="home"><a href="index.php">HOME</a></li>
                        <li class="nav_link"><a href="index.php#about">ABOUT US</a></li>
                        <li class="nav_link" ><a href="index.php#contact">CONTACT US</a></li>
                        <li class="nav_link" id="admin"><a href="admin_login.php">ADMIN</a></li>
                </ul>
    

                <div>
                    <ul class="logandsign">
                        <li id="first-btn">
                            <a href="login.php">Login</a>
                        </li>
                        <li id="line">
                            |
                        </li>
                        <li id="second-btn" >
                            <button id="popup-btn">
                                Signup
                            </button>
                        </li>
                    </ul>
                </div>
                
            </nav>
            <script>
                document.getElementById('pop-sub-menu').addEventListener("click",function(){
                    document.getElementsByClassName("sub-menu").style.display="block";
                })
            </script>
                <div class="modal-fade" id="modal-fade-adjust">
                    <div class="popup">
                        <div class="popup-content">
                            <div class="signup-some-txt"> 
                                <div>
                                    <i class="fa-solid fa-user"></i>
                                    <button id="second-popups-button">×</button>
                                </div>
                                <h3>Sign Up Option</h3>
                            </div>
                            
                            <div class="optionss">
                                <button id="first-popup-btn" class="popup-buttons"> <a href="jobseeker-register.php">Jobseeker</a> </button>
                                <button id="second-popup-btn" class="popup-buttons"><a href="jobEmployeer-register.php">Employeer</a> </button>
                            </div>
                        </div>
                    </div>
                </div>

                
                
           

            <script>
                document.getElementById('popup-btn').addEventListener("click",function(){
                    document.querySelector(".modal-fade").style.display="flex";
                    document.querySelector(".text").style.display="none";
                })

                window.addEventListener("scroll",function(){
                var signupoptions = document.querySelector("#modal-fade-adjust").style.display="none";
                signupoptions.classList.toggle("option-removed",window.scrollY>0);

    
            });
            window.addEventListener("scroll",function(){
            var box = document.querySelector("#text-adjust").style.display="inline";
                box.classList.toggle("#text-added",window.scrollY>0);
            });

                document.getElementById('second-popups-button').addEventListener("click",function(){
                    document.querySelector(".modal-fade").style.display="none";
                    document.querySelector(".text").style.display="inline";
                })
            </script>

</body>
</html>