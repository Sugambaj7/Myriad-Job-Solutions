
<?php   
    session_start();
?>

<?php


    include '../include/connection.php';

    if(!isset($_POST['jobtitle'])){
        echo('<script type="text/javascript">alert("You have not posted any jobs till now!");window.location=\'application.php\';</script>)');
    }

    else if(isset($_POST['what']) || isset($_POST['jobtitle'])){
        $companyemail = $_POST['what'];
        $jobTitle = $_POST['jobtitle'];
 

    $query = "select JobId from jobs where CompanyEmail='$companyemail' && JobTitle='$jobTitle'";
    $result=mysqli_query($conn,$query);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
             $jobId = $row['JobId'];
             
            }
            $query2 = "select * from applied_jobs where ap_job_id=$jobId";
            if(mysqli_query($conn,$query2)){
                $result2 =mysqli_query($conn,$query2) ;
                if (mysqli_num_rows($result2) > 0) {
                    while($row2 = mysqli_fetch_assoc($result2)){
                        $apjbid = $row2['ap_job_id'];
                        if($jobId == $apjbid){
                            $jobseekerr_id = $row2['jobseeker_id'];
                            $query3 = "select * from resume where jobseeker_id = '$jobseekerr_id'";
                            $result3 = mysqli_query($conn,$query3);
                            if (mysqli_num_rows($result3) > 0) {
                                // output data of each row
                                $_SESSION['jobseeeker_id'] = $jobseekerr_id;
                                header('location:application.php?jobseeker_id='. $jobseekerr_id);
                            } else {
                               echo('<script type="text/javascript">alert("Jobseeker has not upload resume!!!");window.location=\'application.php\';</script>)');
                            }
                        }
                        else{
                            echo('<script type="text/javascript">alert("No applications for the given job!!!");window.location=\'application.php\';</script>)');
                        }
                    }
                }
                else{
                    echo('<script type="text/javascript">alert("No applications for the given job!!!");window.location=\'application.php\';</script>)');
                }
            }
            else{
                echo('<script type="text/javascript">alert("No applications for the given job!!!");window.location=\'application.php\';</script>)');
            }
           
            
        }else {
            // echo('<script type="text/javascript">alert("No Jobs");window.location=\'application.php\';</script>)');
            echo "no jobs";
      }
    }

      