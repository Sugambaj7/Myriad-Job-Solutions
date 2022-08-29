<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
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
                        <li class="nav_link"><a href="#about">ABOUT US</a></li>
                        <li class="nav_link" ><a href="#contact">CONTACT US</a></li>
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
                    document.querySelector(".sub-menu").style.display="block";
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
         <header class="my-header">
                <div class="head-img">
                    <img src="css/img/header-image.png"  style="margin-top:2rem;" alt="" srcset="">
                </div>
                <div class="text" id="text-adjust">
                    <p id="first-txt">WE  FOR  YOU</p>
                    <div class="problem">
                        <p id="third-txt">Post Vacancies</p>
                        <p id="fourth-txt">Apply Job</p>
                        <p id="fifth-txt">All For Free!!!</p>
                    </div>
        
                    <div class="care">
                        <p id="sixth-txt">We are here for you!</p>
                        <p id="seventh-txt">Because we do care</p>
                    </div>
                </div>
            </header>
           <?php
             include 'ourservices.php';

             include 'aboutus.php';

             include 'contactus.php';

             ?>
            
            <section id="sticky-log-sign">
                <div class="container-for-log">
                    <div class="content-for-log">
                        <div class="everything" id="some-text">
                            <span>Search, Apply & Get Job:Free</span>     
                        </div>
                        <div class="everything" id="buttons-for-log">
                            <button class="buttonhoni" id="register-btnn">
                                <a href="jobseeker-register.php">
                                    <i class="fa-solid fa-user-tie"></i>
                                    Register
                                </a>
                            </button>
                            <button class="buttonhoni" id="login-btnn">
                                <a href="login.php">
                                    <i class="fa-solid fa-lock"></i>
                                    Login
                                </a>
                            </button>
                        </div>
                        <div class="everything" id="question">
                            <span>
                               <a href="business-login.php"><i class="fa-solid fa-building"></i>Are You an Employeer?</a>
                            </span>
                        </div>
                    </div>
                </div>
            </section>
            <script type="text/javascript">
                window.addEventListener("scroll",function(){
                    var stickylogsign = document.querySelector("#sticky-log-sign");
                    stickylogsign.classList.toggle("removed",window.scrollY<610);
                });
            </script>

            

            <footer>
                <div class="myfooter">
                    <div class="footer-row">
                        <div id="about-myriad">
                            <div id="about-myriad-1">
                                <h3>About Myriad</h3>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi reprehenderit nobis quia provident? Dolorem fugiat at modi sunt officiis maxime nesciunt illum, voluptatibus a! Libero molestias fuga adipisci suscipit officia.</p>
                            </div>
                        </div>
                        <div class="footer-1" id="myriad-information">
                            <div class="footer" id="myriad-information-1">
                                <h3>Information</h3>
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-circle-info"></i>
                                        <a href="#about">About us</a>  
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-user"></i>
                                        <a href="#contact">Contact Us</a>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-user-tie"></i>
                                        <a href="#services">Services</a>  
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-1" id="myriad-for-individual">
                            <div class="footer" id="myriad-for-individual-1">
                                <h3>For Individual</h3>
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-registered"></i>
                                        <a href="jobseeker-register.php">Register</a>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-lock"></i>
                                        <a href="login.php">Login</a>  
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-1" id="myriad-for-business">
                            <div class="footer" id="myriad-for-business-1">
                                <h3>For Business</h3>
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-registered"></i>
                                        <a href="jobEmployeer-register.php">Register</a>  
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-lock"></i>
                                        <a href="business-login.php">Login</a>      
                                    </li>
                        
                                </ul>
                            </div>
                        </div>
                        <div class="footer-1" id="myriad-contact">
                            <div class="footer" id="myriad-contact-1">
                                <h3>Contact us</h3>
                                <ul id="contact-us">
                                    <li>
                                        <i class="fa-solid fa-location-dot"></i>
                                        <p id="addre">Kalimati, Kathmandu, Nepal</p>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-phone"></i>
                                        <p id="phonee">9813738921, 9860382910</p>  
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-envelope"></i>
                                        <p id="support">support@myriadjob.com</p>  
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        
            <section id="btm-footer">
                <div id="adjustment-3">
                    <ul class="my-second-icons">
                            <li id="first-icon"><a id="first-social-link" href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li id="second-icon"><a id="second-social-link" href=""><i class="fa-brands fa-twitter"></i></a></li>
                            <li id="third-icon"><a id="third-social-link" href=""><i class="fa-brands fa-google-plus-g"></i></a></li>
                            <li id="fourth-icon"><a id="fourth-social-link" href=""><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                </div>
                <div id="btm-container">
                    <p>©2022 All Rights reserved with <a href="">Myriad Job Solutions</a></p>
                </div>
            </section> 
</body>
</html>