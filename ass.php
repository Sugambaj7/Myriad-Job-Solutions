<?php

    include 'connection.php';
    
    $user = $_POST['uname'];
    $pass = $_POST['pass'];
    $option = $_POST['myoption'];

    $query = "insert into details(Username,Password,Options) values('$user','$pass','$option')";

   if(mysqli_query($conn,$query)){
       echo("Successfully registered!!!");

    }else{
        die("Sorry!!! Could not register.....");
    }
 ?>
