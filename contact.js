function printErr(errorId,msg){
    document.getElementById(errorId).innerHTML = msg;
}
function validatemyform(){
    const full_name = document.contactform.full_name.value;
    const email = document.contactform.email.value;
    const contact_number = document.contactform.contact_number.value;
    const subject = document.contactform.subject.value;
    const contact_message = document.contactform.contact_message.value;
    var subject_pattern = /^[A-Z][a-z]{2,10}/
    var email_pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
    var mobile_pattern = /^[9][6-8]{1}[0-9]{8}/
    
    full_Name_Err = emailErr = contactErr = subjectErr = textErr = false;

    if(full_name == ''  || full_name == null){
        printErr("fullNameErr","Full name cannot be empty!");
        full_Name_Err = true;
    }
    else if(full_name.length>25){
        printErr("fullNameErr","Full Name must not be greater than 25!");
        full_Name_Err = true;
    }
    else{
        printErr("fullNameErr","");
        full_Name_Err = false;
    }


    if(email == '' || email == null){
        printErr("emailErr","Email cannot be empty!");
        emailErr = true;  
    }
    else if(email.match(email_pattern)){
        printErr("emailErr","");
        emailErr = false;
    }
    else{
        printErr("emailErr","Must contain @ in email");
        emailErr = true;
    }

    if(contact_number == '' || contact_number == null){
        printErr("contactErr","Mobile Number cannot be empty!");
        contactErr = true;  
       }
       else if(contact_number.length<10 || contact_number.length>10 ){
        printErr("contactErr","Mobile Number must be of 10 digits!");
        contactErr = true;
       }
       else if(contact_number.match(mobile_pattern)){
        printErr("contactErr",'');
        contactErr = false;
      }
       else{
        printErr("contactErr","Mobile number starts with 98 or 96 or 97!");
        contactErr = true;
       }

    
    if(subject == ''  || subject == null){
        printErr("subjectErr","Subject cannot be empty!");
        subjectErr = true;
    }
    else if(subject.length>30){
        printErr("subjectErr","Subject must not be greater than 30!");
        subjectErr = true;
    }
    else if(subject.match(subject_pattern)){
        printErr("subjectErr","");
        subjectErr = false;
    }
    else{
        printErr("subjectErr","First letter must be upper case letter and no numbers!");
        subjectErr = true;
    }

    if(contact_message == ''  || contact_message == null){
        printErr("textErr","Description cannot be empty!");
        textErr = true;
    }
    else if(contact_message.length>100){
        printErr("textErr","Description must not be greater than 100!");
        textErr = true;
    }
    else{
        printErr("textErr","");
        textErr = false;
    }

    if(full_Name_Err == true || emailErr==true || contactErr==true || subjectErr==true || textErr==true){
        return false;
    }
    else if(full_Name_Err == false || emailErr==false || contactErr==false || subjectErr==false || textErr==false){
        return true;
    }
    
}