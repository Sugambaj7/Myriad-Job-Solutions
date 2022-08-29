<?php

    include '../include/connection.php';

    $interview_date = $_POST['inter_date'];
    $interview_time = $_POST['inter_time'];
    $jobseeker_id = $_POST['jobseekerid'];

    $employer_id = trim($_POST['employerid']);


    // if(isset($_POST[' employeremail'])){
    //     $employer_identity = $_POST[' employeremail'];
    //     echo $employer_identity;
    // }
    


    
    $query = "select * from applied_jobs where jobseeker_id='$jobseeker_id' ";
    $result = mysqli_query($conn,$query);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            $approved_job_id = $row['ap_job_id'];
            if($jobseeker_id == $row['jobseeker_id']){
                if($row['Status'] == 'Approved'){
                    $query2 = "insert into  interview(approved_jobs_id,jobseeker_id,interview_date,interview_time,emp_id) values('$approved_job_id','$jobseeker_id','$interview_date','$interview_time',' $employer_id')";
                    if(mysqli_query($conn,$query2)){
                        echo '<script type="text/javascript">alert("Interview data and time has been fixed!!!");window.location=\'interview.php\';</script>';
                    }
                    else{
                        echo "k bigryo tw";
                    }
                }
                elseif($row['Status'] == 'Rejected'){
                    echo "You are rejected";
                }
                else{
                    echo "Application is not seen! Wait for some time!!!";
                }
            }
            else{
                echo "Jobseeker havenot applied";
            }
        }
    }
    else{
        echo '<script type="text/javascript">alert("Check for the application first!!!");window.location=\'interview.php\';</script>)';
    }
    ?>