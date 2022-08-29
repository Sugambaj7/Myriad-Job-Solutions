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



if(isset($_POST['gen'])){
    $Gender = $_POST['gen'];
}

$FirstName = $_POST['fname'];
$LastName = $_POST['lname'];
$Qualification = $_POST['qualification'];
$Email = $_POST['email'];
$Password = $_POST['pass'];
$Mobile = $_POST['mob'];
$Field = $_POST['DesiredField'];

// $query = "select * from jobseeker accounts";
// $result = mysqli_query($conn, $query);
// $jobseeker_datas = [];
// while($data = mysqli_fetch_assoc($result)){
//     $jobseeker_datas [] = $data;
// }

// foreach($jobseeker_datas as $jobseeker_data){
//     if($Email == trim($jobseeker_data['Email'])){
//         $_SESSION['']
//         if($Mobile == trim($jobseeker_data['Mobile'])){
//             echo '<script type="text/javascript">alert("Mobile number has been previously used!");window.location=\'jobseeker-register.php\';</script>';
//         } 
//     }
//     else{
        
//     }
// }

$emailErr=checkDuplicate('jobseeker_accounts','Email',$Email);
$mobileErr=checkDuplicate('jobseeker_accounts','Mobile',$Mobile);


if($emailErr==""){
    if($mobileErr == ""){
        $query = "insert into jobseeker_accounts(FirstName,LastName,Gender,Qualification,Email,Password,Mobile,Field) values('$FirstName','$LastName','$Gender','$Qualification','$Email','$Password','$Mobile','$Field')";

        if(mysqli_query($conn,$query)){
        echo '<script type="text/javascript">alert("Your account has been created");window.location=\'jobseeker-register.php\';</script>';

        }else{
            die("Sorry!!! Could not register.....".mysqli_error($conn));
        }
    }
    else{
        echo '<script type="text/javascript">alert("Mobile number has been previously used!");window.location=\'jobseeker-register.php\'</script>';
        
    }
}
else{
    echo '<script type="text/javascript">alert("Email has been previously used!");window.location=\'jobseeker-register.php\'</script>';
}

// if($emailErr=="" && $mobileErr=="" ){

// }else
// {
    // echo "<script>console.log('check 2');</script>";

    // $_SESSION['emailErr'] =$emailErr;
    // $_SESSION['mobileErr'] =$mobileErr;
    // $_SESSION['fname_old'] =$FirstName;

    // echo "<script>console.log('check 3');</script>";
    // echo $emailErr."<br>";
    // echo $_SESSION['emailErr'];
    // echo '<script type="text/javascript">alert("Email Already Registered");window.location=\'jobseeker-register.php\'</script>';
    // header('location:'.$_SERVER['DOCUMENT_ROOT']);
    // echo '<script type="text/javascript">alert("Email Already Registered");window.location=\'jobseeker-register.php\';</script>';
// }
?>
