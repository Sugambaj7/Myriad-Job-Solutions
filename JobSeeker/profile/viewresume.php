<?php
    include '../include/connection.php';

    if(isset($_POST['jobseekerid'])){
        $jobseekerr_id = $_POST['jobseekerid'];
    }
    $query2 = "select * from resume where jobseeker_id = '$jobseekerr_id'";
    $result = mysqli_query($conn,$query2);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
            header('location:profile.php?true');
      } else {
        echo('<script type="text/javascript">alert("First upload your resume!!!");window.location=\'profile.php\';</script>)');
      }
?>