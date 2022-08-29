<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/jobEmployeeer-register.css">
    <script src="employer/assets/js/employer.js"></script>
    <style>
        #other {
  opacity: 0.5;
  pointer-events: none;
}

#otherRad:checked ~ #other {
  opacity: 1;
  pointer-events: auto;
}
    </style>
</head>
<body>
    <?php
        include "navbar.php";
    ?>

    <div id="jobEmployeer-registration-field">
        <div id="outer-content">
            <div id="inner-content">
                <form name = "jobEmployerRegisterForm" action="employer-registers-assign.php"  method="POST" onsubmit="return validatemyform()">
                        <h3>Create your free Employeer Account</h3>
                                <p id="first-txt">Register with Myriad Job Solutions, Find the perfect candidate</p>                           
                                <div id="user-fname">
                                    <label >Company Name <span class="star">*</span></label><br>
                                    <input class="tag" type="text" name="CompanyName" placeholder="Enter Your Company Name">
                                    <br>
                                    <span class="error_msg" id="company_name_Err"></span>
                                </div>

                                <div id="user-desired-field" class="details">
                                    <label>Company Industry<span class="star">*</span></label><br>
                                    <select name="DesiredField" class="tag" > 
                                        <option value="">Select Desired Field</option>                 
                                        <option value="IT & Technology">IT & Technology</option>
                                        <option value="Cleaning/ Facility Management">Cleaning/ Facility Management</option>
                                        <option value="Banking">Banking</option>
                                        <option value="Transportation">Transportation</option>
                                    </select>
                                    <br>
                                    <span class="error_msg" id="desired_Field_Err"></span>
                                </div>

                                <div id="user-mobile" class="details">
                                    <label >Company Tel No.<span class="star">*</span></label><br>
                                    <input  class="tag" type="number" name="companyNo" placeholder="Enter Your Telephone Number" >
                                    <br>
                                    <span class="error_msg" id="company_contact_Err"></span>
                                </div>

                            <div id="user-email" class="details">
                                    <label >Official Email <span class="star">*</span></label><br>
                                    <input class="tag" type="text" name="OfficialEmail" placeholder="Enter company email address" >
                                    <br>
                                    <span class="error_msg" id="company_email_Err"></span>
                                </div>

                                <div id="user-password" class="details">
                                    <label >Password <span class="star">*</span></label><br>
                                    <input  class="tag" type="password" name="Password" placeholder="Enter Password" >
                                    <br>
                                    <span class="error_msg" id="company_password_Err"></span>
                                </div>

                                <div id="terms">
                                    <p>By clicking on 'Register Now' below you are agreeing to the <a href="">Terms and condition</a> regarding the use of Myriad Job Solutions</p>
                                </div>

                                <div id="button">
                                    <input type="submit"  value="Register Now">
                                </div>
                </form>
                <div id="question">
                    <a href="business-login.php">Already have an Account? Click here</a>
                </div>
            </div>
        </div>
       
</div>
  


    <?php
        include 'footer.php';
    ?>
    <script src="employer/assets/js/employer.js"></script>
</body>
</html>