<?php

    session_start();
    include '../include/connection.php';
    $applied_job_id = trim($_POST['app_job_id']);
    $job_seeker_email = trim($_POST['jobseeker_email']);

    $query = "select * from jobseeker_accounts where Email='$job_seeker_email'";
    $result = mysqli_query($conn,$query);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          $seeker_id = $row['id'];
          $_SESSION['jobseekerr_id'] = $seeker_id;
          $query2 = "insert into applied_jobs(ap_job_id,jobseeker_id,job_seeker_email) values('$applied_job_id','$seeker_id','$job_seeker_email')";
          if(mysqli_query($conn,$query2)){
            echo('<script type="text/javascript">alert("Job Applied Successfully!!!");window.location=\'searchjob.php\';</script>)');
          }
          else{
            echo('<script type="text/javascript">alert("Unable to apply job!!!");window.location=\'searchjob.php\';</script>)');
          }
        }
      } 
      else{
        echo "no records";
      }
    


    