<?php

    include '../include/connection.php';
           

    $Qualification = trim($_POST['qualification']);
    $CompanyName = trim($_POST['CompanyName']);
    $field = trim($_POST['field']);
//  stripcslashes()
//  trim()
// htmlspecialchars()
    
    $query = "select * from jobs where MinQualification='$Qualification' && CompanyName='$CompanyName' && JobTitle='$field'";
    $result=mysqli_query($conn,$query);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            header('location:searchjob.php?id='.$row['JobId']);
          echo "id: " . $row["JobId"]. "<br>";
        }
      } else {
        echo('<script type="text/javascript">alert("No available jobs for the given datas!!!");window.location=\'searchjob.php\';</script>)');
      }


 