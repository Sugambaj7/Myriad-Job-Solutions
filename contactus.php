<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/contact_us.css">
    <script src="contact.js"></script>
</head>
<body>
    <div id="contact"style="height:2rem;">

    </div>
    <section id="contact-us-section">
                <div id="contact-main-div">
                    <div id="contact-text">
                        <h3>Contact Us</h3>
                    </div>
                    <div id="contact-second-row">
                        <div id="map-section">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.6264167520476!2d85.2980812!3d27.697939100000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb196433710a75%3A0x9de344627aa9ab06!2sKalimati%2C%20Myriad%20Job%20Solutions!5e0!3m2!1sen!2snp!4v1654257828877!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div id="contact-form">
                            <form name="contactform" action="contact_insert.php" method="post" onsubmit = "return validatemyform()">
                                <div id="contact-form-title">
                                   <p> leave your message</p>
                                </div>
                                <div id="contact-fillup">
                                    <div id="contact-first-detail" class="contact-form-details">
                                        <div id="contact-form-icon">
                                            <i class="fa-solid fa-user"></i>
                                        </div>
                                        <input type="text" placeholder="Full Name" name="full_name">
                                    </div>
                                    <span class="error_msg" id="fullNameErr"></span>
                                    <div id="contact-second-detail" class="contact-form-details">
                                        <div id="contact-form-icon">
                                            <i class="fa-solid fa-envelope"></i>
                                        </div>
                                        <input type="text" placeholder="Email" name="email">
                                    </div>
                                    <span class="error_msg" id="emailErr"></span>
                                    <div id="contact-third-detail" class="contact-form-details">
                                        <div id="contact-form-icon">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                        <input type="number" placeholder="Phone Number" name="contact_number">                                       
                                    </div>
                                    <span class="error_msg" id="contactErr"></span>
                                    <div id="contact-fourth-detail" class="contact-form-details">
                                        <div id="contact-form-icon">
                                            <i class="fa-solid fa-book"></i>
                                        </div>
                                        <input type="text" placeholder="Subject" name="subject">
                                    </div>
                                    <span class="error_msg" id="subjectErr"></span>
                                    <div id="contact-message">
                                        <textarea name="contact_message" id="" cols="39" rows="10"></textarea>
                                        <br>
                                        <span class="error_msg_2" id="textErr"></span>
                                    </div>
                                    <div id="submit-button">
                                        <input type="submit" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                   
                </div>
            </section>

            <!-- <script>
                function printErr(errorId,msg){
                    document.getElementById(errorId).innerHTML = msg;
                }
                function validatemyform(){
                    const full_name = document.contactform.full_name.value;
                    const email = document.contactform.email.value;
                    const contact_number = document.contactform.contact_number.value;
                    const subject = document.contactform.subject.value;
                    const contact_message = document.contactform.contact_message.value;
                    var email_pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
                    var mobile_pattern = /^[9][6-8]{1}[0-9]{8}/
                    
                    fullNameErr = emailErr = contactErr = subjectErr = textErr = false;

                    if(full_name == ''  || full_name == null){
                        printErr("fullNameErr","Full name cannot be empty!");
                        fullNameErr = true;
                    }
                    else if(full_name.length>25){
                        printErr("fullNameErr","Full Name must not be greater than 25!");
                        fullNameErr = true;
                    }
                    else{
                        printErr("fullNameErr","");
                        fullNameErr = false;
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
                        printErr("contactErr","Contact number cannot be empty!");
                        contactErr = true; 
                    }
                    else if(contact_number.length>10){
                        printErr("contactErr","Contact number must not be greater than 10 digits!");
                        contactErr = true; 
                    }
                    else if(contact_number.match(mobile_pattern)){
                        printErr("contactErr",'');
                        contactErr = false;
                    }
                    else{
                        printErr("company_contact_Err","Contact number must start with 96 or 97 or 98!");
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
                    else{
                        printErr("subjectErr","");
                        subjectErr = false;
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

                    if(fullNameErr == true || emailErr==true || contactErr==true || subjectErr==true || textErr==true){
                        return false;
                    }
                    else if(fullNameErr == false || emailErr==false || contactErr==false || subjectErr==false || textErr==false){
                        return true;
                    }
                    
                }
            </script> -->
</body>
</html>