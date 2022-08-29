<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "myriad_job_solutions";

   $conn = mysqli_connect($server,$username,$password,$db_name);

    if(!$conn){
        die("Sorry failed to connect");
    }