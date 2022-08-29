<?php
    session_start();
     
     require_once "connection.php";
     
     /*
     if(isset($_POST['uname'],$_POST['pass']))
     {
    }
    */
    // if(isset())
    if(isset($_POST['uname']) && isset($_POST['pass']))
    {
    $email= $_POST['uname'];
    $pass= $_POST['pass'];
    
    $query = "select * from jobseeker_accounts where Email='$email' and Password='$pass'";
    
    $res = mysqli_query($conn,$query);

    if($email == 'admin' & $pass == 'admin@123'){
        $_SESSION['email1'] = $_POST['uname'];
        $_SESSION['password1'] = $_POST['pass'];
        $_SESSION['status1']=true;
        header('location:admin/index.php');
    }
    else if(mysqli_num_rows($res)==1){
        //store form username to session
        $_SESSION['email']= $_POST['uname'];
        $_SESSION['password']= $_POST['pass'];
        $_SESSION['status']=true;
        
        
        
        //if user found
        //redirect to the welcome page
        header('location:JobSeeker/index.php');
    }
    else{
        echo '<script type="text/javascript">alert("Invalid login details!");window.location=\'login.php\';</script>';
    }
    
}else{
    echo "<script>alert('Please enter username and password to login')</script>";
}
    
    /*
            $database_data= mysqli_fetch_assoc($res);
        
            if(count ((array) $database_data)> 0){
                header('location: welcome.php' );
            }
            else{
                header('location: index.php');
            }
   
    else{
        header('location:index.php');
    }
*/
    