<?php
    
    include '../include/connection.php';

    if(isset($_POST['approve'])){
        $approve_id = $_POST['approve'];
        $query = "Update applied_jobs set Status='Approved' where jobseeker_id='$approve_id' ";
        if(mysqli_query($conn,$query)){
            $_SESSION['jobseeeker_id'] = $approve_id;
            echo '<script type="text/javascript">alert("Candidate has been selected!!! Please kindly do the interview procedure!");window.location=\'../interview/interview.php\';</script>)';
        }
        else{
            echo "not successful";
        }
    }
    elseif (isset($_POST['deny'])){
        $reject_id = $_POST['deny'];
        $query2 = "Update applied_jobs set Status='Rejected' where jobseeker_id='$reject_id' ";
        if(mysqli_query($conn,$query2)){
            echo '<script type="text/javascript">alert("Candidate has been rejected!!!");window.location=\'../index.php\';</script>)';
        }
        else{
            echo "not successful";
        }
    }

