<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/jobseeker-register.css">
</head>
<body>
    <?php
        include "navbar.php";
    ?>

    <div id="jobseeker-registration-field">
        <div id="outer-content">
            <div id="inner-content">
                <form action="admin_register_assign.php" method="Post">
                <h3>Create your admin account</h3>
                <p>Register with basic information, complete your profile and start managing the site data.</p>
            
                <div id="user-fname">
                    <label >Firstname <span class="star">*</span></label><br>
                    <input class="tag" type="text" name="fname" placeholder="Enter Your First Name" required >
                </div>

                <div id="user-lname" class="details">
                    <label>Lastname <span class="star">*</span></label><br>
                    <input class="tag" type="text" name="lname" placeholder="Enter Your Last Name" required>
                </div>

                <div id="user-gender" class="details">
                    <div id="for-gender">
                    <label id="gender">Gender</label>
                    </div>
                    <input type="radio" name="gen" value="Male">    <label class="gen">Male</label>
                    <input class="radio-btn"  name="gen" type="radio" value="Female">    <label class="gen">Female</label>
                    <input  class="radio-btn"  name="gen" type="radio" value="Others">    <label class="gen">Others</label>
                </div>

                <div id="user-qualification" class="details">
                    <label >Qualification <span class="star">*</span></label><br>
                    <input class="tag" type="text" placeholder="Enter Your Qualification" name="qualification" required>
                </div>


                <div id="user-email" class="details">
                    <label >Email <span class="star">*</span></label><br>
                    <input class="tag" type="text" placeholder="Enter Your Email Address" name="email" required>
                </div>

                <div id="user-password" class="details">
                    <label >Password <span class="star">*</span></label><br>
                    <input class="tag" type="password" placeholder="Enter Password" name="pass" required>
                </div>

                <div id="user-mobile" class="details">
                    <label >Mobile <span class="star">*</span></label><br>
                    <input class="tag" type="text" placeholder="Enter Your Mobile Number" name="mob" required>
                </div>

                <div id="terms">
                    <p>By clicking on 'Register Now' below you are agreeing to the <a href="">Terms and condition</a> regarding the use of Myriad Job Solutions</p>
                </div>

                <div id="button">
                    <input type="submit" value="Register Now">
                </div>
                </form>
                
            </div>
        </div>
</div>

    <?php
        include 'footer.php';
    ?>
</body>
</html>