
function printErr(errorId,msg){
    document.getElementById(errorId).innerHTML = msg;
 }
 
 function validatemyform(){
    const first_name = document.jobseeker_register_form.fname.value;
    const last_name = document.jobseeker_register_form.lname.value;
    const gender = document.jobseeker_register_form.gen.value;
    const qualification = document.jobseeker_register_form.qualification.value;
    const jobseeker_email = document.jobseeker_register_form.email.value;
    const jobseeker_password = document.jobseeker_register_form.pass.value;
    const jobseeker_mobile = document.jobseeker_register_form.mob.value;
    const desired_field = document.jobseeker_register_form.DesiredField.value;
    // var email_pattern = /[a-z]{5,10}[0-9]{3,3}@gmail\.com$/
    var email_pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
    var mobile_pattern = /^[9][6-8]{1}[0-9]{8}/
    var first_name_pattern = /^[A-Z][a-z]{2,10}/
    var last_name_pattern = /^[A-Z][a-z]{2,10}/
    var qualification_pattern = /[A-Z a-z]{2,25}/
 
    first_name_Err = last_name_Err = gender_Err = qualification_Err = email_Err = password_Err = desired_field_Err = jobseeker_mobile_Err = false;

    if(first_name == ''  || first_name == null){
       printErr("first_name_Err","First Name cannot be empty!");
       first_name_Err = true;
   }
    else if(first_name.length<3 || first_name.length>10){
      printErr("first_name_Err","First Name must be between 3 and 10!");
      first_name_Err = true;
    }
    else if(first_name.match(first_name_pattern)){
      printErr("first_name_Err","");
      first_name_Err = false;
    }
    else{
      printErr("first_name_Err","Must start with uppercase letter followed by lowercase and must not contain number!");
      first_name_Err = true;
    }



   if(last_name == ''  || last_name == null){
      printErr("last_name_Err","Last Name cannot be empty!");
      last_name_Err = true;
    }
    else if(last_name.length>20){
      printErr("last_name_Err","Last Name must not be greater than 20!");
      last_name_Err = true;
    }
    else if(last_name.length<2){
      printErr("last_name_Err","Last Name must not be less than 2!");
      last_name_Err = true;
    }
    else if(last_name.match(last_name_pattern)){
      printErr("last_name_Err",'');
      last_name_Err = false;
    }
    else{
      printErr("last_name_Err","Must start with uppercase letter and must not contain number!");
      last_name_Err = true;
    }
   
 
   if(gender == '' || gender == null){
    printErr("gender_Err","Gender cannot be empty!");
    gender_Err = true;  
   }
   else{
    printErr("gender_Err","");
    gender_Err = false; 
   }
 
   if(qualification == '' || qualification == null){
    printErr("qualification_Err","Qualification cannot be empty!");
    qualification_Err = true; 
   }
   else if(qualification.length<2 || qualification.length>25){
    printErr("qualification_Err","Qualification must be between 2 and 25 letters");
    qualification_Err = true;
  }
  else if(qualification.match(qualification_pattern)){
    printErr("qualification_Err",'');
    qualification_Err = false;
  }
   else{
    printErr("qualification_Err","Qualification must be letters between 2 and 25 letters");
    qualification_Err = true; 
   }

   if(jobseeker_email == '' || jobseeker_email == null){
    printErr("email_Err","Email cannot be empty!");
    email_Err = true;  
   }
    else if(jobseeker_email.match(email_pattern)){
    printErr("email_Err","");
    email_Err = false;
   }
   else{
    printErr("email_Err","Invalid emailformat!");
    email_Err = true;
   }

 
   if(jobseeker_password == '' || jobseeker_password == null){
    printErr("password_Err","Password cannot be empty!");
    password_Err = true;  
   }
  else if(jobseeker_password.length>10){
    printErr("password_Err","Password must not be greater than 10");
    password_Err = true;
   }
   else{
    printErr("password_Err","");
    password_Err = false;
   }

   if(jobseeker_mobile == '' || jobseeker_mobile == null){
    printErr("jobseeker_mobile_Err","Mobile Number cannot be empty!");
    jobseeker_mobile_Err = true;  
   }
   else if(jobseeker_mobile.length<10 || jobseeker_mobile.length>10 ){
    printErr("jobseeker_mobile_Err","Mobile Number must be of 10 digits!");
    jobseeker_mobile_Err = true;
   }
   else if(jobseeker_mobile.match(mobile_pattern)){
    printErr("jobseeker_mobile_Err",'');
    jobseeker_mobile_Err = false;
  }
   else{
    printErr("jobseeker_mobile_Err","Mobile number starts with 98!");
    jobseeker_mobile_Err = true;
   }


   if(desired_field == '' || desired_field == null){
    printErr("desired_field_Err","Desired Field cannot be empty!");
    desired_field_Err = true;  
   }
   else{
    printErr("desired_field_Err","");
    desired_field_Err = false;
   }
 
   
 
   if(first_name_Err == true || last_name_Err==true || gender_Err==true || qualification_Err==true || email_Err==true  || password_Err==true || jobseeker_mobile_Err ==true  || desired_field_Err==true ){
    return false;
   }
   else if(first_name_Err == false || last_name_Err == false || gender_Err==false || qualification_Err == false || email_Err==false|| password_Err==false || jobseeker_mobile_Err ==false ||desired_field_Err==false ){
    // $_SESSION['validate']== true;
    return true;
   }
 }
 
    
 