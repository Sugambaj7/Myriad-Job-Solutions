<?php
// if (session_status() === PHP_SESSION_NONE) {
//     session_start();
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/jobseeker-registerr.css">
    <script src="JobSeeker/assets/js/jobseeker_form_validation.js"></script>
</head>
<body>
    <?php
        include "navbar.php";
        include 'connection.php';
        
    ?>

    <!-- <?php
        // $query = "select * from jobseeker accounts";
        // $result = mysqli_query($conn, $query);
        // $jobseeker_datas = [];
        // while($data = mysqli_fetch_assoc($result)){
        //     $jobseeker_datas [] = $data;
        // }
    ?> -->

   

    <div id="jobseeker-registration-field">
        <div id="outer-content">
            <div id="inner-content">
                <form action="jobseeker-register-assign.php" method="Post" name="jobseeker_register_form" onsubmit = "return validatemyform()">
                    <h3>Create your free Jobseeker Account</h3>
                    <p>Register with basic information, complete your profile and start applying for jobs for free.</p>
                
                    <div id="user-fname">
                        <label >Firstname <span class="star">*</span></label><br>
                        <input class="tag" type="text" name="fname" placeholder="Enter Your First Name">
                        <br>
                        <span class="error_msg" id="first_name_Err">

                        </span>
                    </div>

                    <div id="user-lname" class="details">
                        <label>Lastname <span class="star">*</span></label><br>
                        <input class="tag" type="text" name="lname" placeholder="Enter Your Last Name" >
                        <br>
                        <span class="error_msg" id="last_name_Err"></span>
                    </div>

                    <div id="user-gender" class="details">
                        <div id="for-gender">
                        <label id="gender">Gender</label>
                        </div>
                        <input class="radio-btn" name="gen" type="radio" value="Male">    <label class="gen">Male</label>
                        <input class="radio-btn"  name="gen" type="radio" value="Female">    <label class="gen">Female</label>
                        <input  class="radio-btn"  name="gen" type="radio" value="Others">    <label class="gen">Others</label>
                        <br>
                        <span class="error_msg" id="gender_Err"></span>
                    </div>

                    <div id="user-qualification" class="details">
                        <label >Qualification <span class="star">*</span></label><br>
                        <input class="tag" type="text" placeholder="Enter Your Qualification" name="qualification" >
                        <br>
                        <span class="error_msg" id="qualification_Err"></span>
                    </div>


                    <div id="user-email" class="details">
                        <label >Email <span class="star">*</span></label><br>
                        <input class="tag" type="text" placeholder="Enter Your Email Address" name="email" >
                        <br>
                        <span class="error_msg" id="email_Err">
                       
                        </span>
                        
                    </div>

                    <div id="user-password" class="details">
                        <label >Password <span class="star">*</span></label><br>
                        <input class="tag" type="password" placeholder="Enter Password" name="pass" >
                        <br>
                        <span class="error_msg" id="password_Err"></span>
                    </div>

                    <div id="user-mobile" class="details">
                        <label >Mobile <span class="star">*</span></label><br>
                        <input class="tag" type="number" placeholder="Enter Your Mobile Number" name="mob" >
                        <br>
                        <span class="error_msg" id="jobseeker_mobile_Err"></span>
                    </div>

                    <div id="user-desired-field" class="details">
                        <label>Desired Field<span class="star">*</span></label><br>
                        <select name="DesiredField" class="tag" > 
                            <option value="">Select Desired Field</option>                  
                            <option value="IT & Technology">IT & Technology</option>
                            <option value="Cleaning/ Facility Management">Cleaning/ Facility Management</option>
                            <option value="Banking">Banking</option>
                            <option value="Transportation">Transportation</option>
                        </select>
                        <br>
                        <span class="error_msg" id="desired_field_Err"></span>
                    </div>
                    <?php 
                        // foreach($jobseeker_datas as $jobseeker_data){
                        //     if($Email == trim($jobseeker_data['Email'])){
                                
                        //     }
                        // }

                    ?>

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
    <!-- <script src="">
        if(window.history.replaceState){
            window.history.replaceState(null,null,window.location.href);
        }
    </script> -->
</body>
</html>