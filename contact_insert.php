<?php
    include 'connection.php';
    
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $subject = $_POST['subject'];
    $contact_message = $_POST['contact_message'];


    
    $query = "insert into contacts( FullName, Email, ContactNum, Subject, Description) values('$full_name','$email','$contact_number','$subject','$contact_message')";
    if(mysqli_query($conn,$query)){
        echo('<script type="text/javascript">alert("Your message has been recorded!");window.location=\'index.php\';</script>)');
    }
    else{
        echo('<script type="text/javascript">alert("Unable to message!");</script>').mysqli_error($conn);
    }