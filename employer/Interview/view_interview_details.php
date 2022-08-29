<?php

    include '../include/connection.php';


    if(isset($_POST['employer_id'])){
        $emp_id = $_POST['employer_id'];
          
        $query = "select * from interview where emp_id= '$emp_id' ";
    

        if(mysqli_query($conn,$query)){
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0){
                header('location:interview.php?verified_employer');
            }
            else{
                echo('<script type="text/javascript">alert("There is no any interviews ");window.location=\'interview.php\';</script>');
            }
        }
    }
    else{
        echo('<script type="text/javascript">alert("Access denied!");window.location=\'interview.php\';</script>');
    }

    ?>