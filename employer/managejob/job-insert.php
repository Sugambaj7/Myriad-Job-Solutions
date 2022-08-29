<?php   

    include '../include/connection.php';

    $companyName = $_POST['companyName'];
    $companyEmail = trim($_POST['companyEmail']);
    $jobTitle = $_POST['jobTitle'];
    $Total_Vacancy = $_POST['vacancy'];
    $Qualification = $_POST['qualification'];
    $Salary = $_POST['salary'];
    $Description = $_POST['description'];

    $query2 = "select * from business_accounts";
    $result = mysqli_query($conn,$query2);
    $business_accounts_details = [];
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $Official_Email = $row['OfficialEmail'];
            $CompanyName = $row['CompanyName'];
        }
        if($companyName == $CompanyName) {
            if($companyEmail == $Official_Email){
                $query = "insert into jobs(CompanyName,CompanyEmail,JobTitle,Vacancy,MinQualification,Salary,Description) values('$companyName','$companyEmail', '$jobTitle','$Total_Vacancy','$Qualification','$Salary','$Description')";
                 mysqli_query($conn,$query);
                 echo('<script type="text/javascript">alert("Successfully Job Posted!!!");window.location=\'../managejob/managejob.php\';</script>)');
                }
                else{
                    echo('<script type="text/javascript">alert("Incorrect Email!!!");window.location=\'../managejob/managejob.php\';</script>');
                }

                
            }
            else{
                echo('<script type="text/javascript">alert("Incorrect Company Name! Please give your valid company name!!");window.location=\'../managejob/managejob.php\';</script>');
            }
        
        }
        
     