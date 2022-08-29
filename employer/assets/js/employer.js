function printErr(errorId,msg){
   document.getElementById(errorId).innerHTML = msg;
}

function validatemyform(){
   const company_name = document.jobEmployerRegisterForm.CompanyName.value;
   const desired_field = document.jobEmployerRegisterForm.DesiredField.value;
   const company_contact = document.jobEmployerRegisterForm.companyNo.value;
   const company_email = document.jobEmployerRegisterForm.OfficialEmail.value;
   const company_password = document.jobEmployerRegisterForm.Password.value;
   // var email_pattern = /[a-z]{5,10}[0-9]{3,3}@gmail\.com$/
   var company_name_pattern = /^[A-Z][a-z]{2,30}/
   var email_pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
   var phone_pattern = /^[0][1]{1}[0-9]{7}/

   // 
   company_name_Err = desired_Field_Err = company_contact_Err = company_email_Err = company_password_Err = false;

   if(company_name == ''  || company_name == null){
      printErr("company_name_Err","Company Name cannot be empty!");
      company_name_Err = true;
  }
  else if(company_name.length>20){
   printErr("company_name_Err","Company Name must not be greater than 20!");
   company_name_Err = true;
  }
  else if(company_name.match(company_name_pattern)){
   printErr("company_name_Err","");
   company_name_Err = false;
 }
 else{
   printErr("company_name_Err","Must start with uppercase letter followed by lowercase and must not contain number!");
   first_name_Err = true;
 }
  

  if(desired_field == '' || desired_field == null){
   printErr("desired_Field_Err","Industry Type cannot be empty!");
   desired_Field_Err = true;  
  }
  else{
   printErr("desired_Field_Err","");
   desired_Field_Err = false;
  }

  if(company_contact == '' || company_contact == null){
   printErr("company_contact_Err","Telephone number cannot be empty!");
   company_contact_Err = true; 
  }
  else if(company_contact.length>9){
   printErr("company_contact_Err","Telephone number must not be greater than 9 digits!");
   company_contact_Err = true; 
  }
  else if(company_contact.match(phone_pattern)){
   printErr("company_contact_Err",'');
   company_contact_Err = false;
 }
  else{
   printErr("company_contact_Err","Telephone number starts with 01");
   company_contact_Err = true;
  }
  
  

  if(company_email == '' || company_email == null){
   printErr("company_email_Err","Email cannot be empty!");
   company_email_Err = true;  
  }
  else if(company_email.match(email_pattern)){
   company_email_Err = false;
   printErr("company_email_Err","");
  }
  else{
   printErr("company_email_Err","Must contain @ in email");
   company_email_Err = true;
  }

  if(company_password == '' || company_password == null){
   printErr("company_password_Err","Password cannot be empty!");
   company_email_Err = true;  
  }
 else if(company_password.length>10){
   printErr("company_password_Err","Password must not be greater than 10");
   company_password_Err = true;
  }
  else{
   printErr("company_password_Err","");
   company_password_Err = false;
  }

  if(company_name_Err == true || desired_Field_Err==true || company_contact_Err==true || company_email_Err==true || company_password_Err==true){
   return false;
  }
  else if(company_name_Err == false || desired_Field_Err==false || company_contact_Err==false || company_email_Err==false || company_password_Err==false){
   return true;
  }
}

   






