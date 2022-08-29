<?php

include 'connection.php';

function checkDuplicate($table,$col,$check){
    global $conn;
    $sql = "select $col from $table where $col = '$check'";
    $result = mysqli_query($conn,$sql);
    $vars= "";
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    // echo "<script>console.log('check 1');</script>";
    if (mysqli_num_rows($result) > 0) {
        // output data of each row  
    $vars = "Given $col already exists";
    }
    return $vars;
}



    $CompanyName = $_POST['CompanyName'];
    $IndustryType = $_POST['DesiredField'];
    $CompanyContact = $_POST['companyNo'];
    $OfficialEmail = $_POST['OfficialEmail'];
    $Password = $_POST['Password'];


    $emailErr=checkDuplicate('business_accounts','OfficialEmail',$OfficialEmail);
    $phoneErr=checkDuplicate('business_accounts','CompanyContact',$CompanyContact);


if($emailErr==""){
    if($phoneErr == ""){
        $query = "insert into business_accounts(CompanyName,IndustryType,CompanyContact,OfficialEmail,Password) values('$CompanyName','$IndustryType','$CompanyContact','$OfficialEmail','$Password ')";

        if(mysqli_query($conn,$query)){
        echo '<script type="text/javascript">alert("Your account has been created");window.location=\'jobseeker-register.php\';</script>';

        }else{
            die("Sorry!!! Could not register.....".mysqli_error($conn));
        }
    }
    else{
        echo '<script type="text/javascript">alert("Telephone number has been previously used!");window.location=\'jobseeker-register.php\'</script>';
        
    }
}
else{
    echo '<script type="text/javascript">alert("Email has been previously used!");window.location=\'jobEmployeer-register.php\';</script>';
}
 ?>