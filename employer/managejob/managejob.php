<?php
    session_start();
    if(isset($_SESSION['status'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/styles.css" />
    <link rel="stylesheet" href="./assets/css/managejobs.css" />
    <link rel="stylesheet" href="../assets/css/employer_dashboarddd.css">
    <script src="https://kit.fontawesome.com/7f5825e61a.js" crossorigin="anonymous"></script>
    <title>Bootstap 5 Responsive Admin Dashboard</title>
    <style>
        .error_msg{
            color:red;
        }
        .err{
            margin-left:8.6rem;
        }
    </style>
    <script>
        function printErr(errorId,msg){
            document.getElementById(errorId).innerHTML = msg;
        }
        function job_insert_form_validation(){
            const companyName = document.jobInsertValidation.companyName.value;
            const email = document.jobInsertValidation.companyEmail.value;
            const title = document.jobInsertValidation.jobTitle.value;
            const vacancy = document.jobInsertValidation.vacancy.value;
            const qualification = document.jobInsertValidation.qualification.value;
            const salary = document.jobInsertValidation.salary.value;
            

            var qualification_pattern = /[A-Z a-z]{2,25}/
            var salary_pattern = /[0-9]{4,10}/
            var jobTitle_pattern = /[A-Z a-z]{2,25}/
            companyNameErr = emailErr = jobTitleErr = vacancyErr = qualificationErr = salaryErr = false;


            if(companyName == '' || companyName == null){
                printErr("companyNameErr",'Company Name cannot be empty!');
                companyNameErr = true;
            }
            else{
                printErr("companyNameErr",'');
                companyNameErr = false;
            }


            if(email == '' || email == null){
                printErr("emailErr",'Company Email cannot be empty!');
                emailErr = true;
            }
            else{
                printErr("emailErr",'');
                emailErr = false;
            }

            if(title == '' || title == null){
                printErr("jobTitleErr",'Job Title cannot be empty!');
                jobTitleErr = true;
            }
            else if(title.match(jobTitle_pattern)){
                printErr("jobTitleErr","");
                jobTitleErr = false;
            }
            else{
                printErr("jobTitleErr",'Job Title must be between 2 and 25 letters');
                jobTitleErr = true;
            }

            if(vacancy == '' || vacancy == null){
                printErr("vacancyErr",'Vacancy cannot be empty!');
                vacancyErr = true;
            }
            else{
                printErr("vacancyErr",'');
                vacancyErr = false;
            }


            if(qualification == '' || qualification == null){
                printErr("qualificationErr",'Qualification  cannot be empty!');
                qualificationErr = true;
            }
            else if(qualification.length<2 || qualification.length>25){
                printErr("qualificationErr","Qualification must be between 2 and 25 letters");
                qualificationErr = true;
            }
            else if(qualification.match(qualification_pattern)){
                printErr("qualificationErr",'');
                qualificationErr = false;
            }
            else{
                printErr("qualificationErr","Qualification must be letters between 2 and 25 letters");
                qualificationErr = true; 
            }

            
            if(salary == '' || salary == null){
                printErr("salaryErr",'Salary  cannot be empty!');
                salaryErr = true;
            }
            else if(salary.match(salary_pattern)){
                printErr("salaryErr","");
                salaryErr = false;
            }
            else{
                printErr("salaryErr",'Salary must be between 4 and 10 digits');
                salaryErr = true;
            }

            

            if( companyNameErr==true || emailErr ==true || jobTitleErr == true || vacancyErr == true|| qualificationErr == true || salaryErr == true){
                return false;
            }
            else if(companyNameErr==false || emailErr ==false || jobTitleErr == false || vacancyErr == false|| qualificationErr == false || salaryErr == false){
                // $_SESSION['validate']== true;
                return true;
            }
        }
        
    </script>

</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        
        <?php 
            include "../include/wrapper.php";
           

            include '../include/connection.php';
            
            $identification =  $_SESSION['email12'];
            $query = "select * from jobs where CompanyEmail='$identification' ";
            $queryRun = mysqli_query($conn,$query);
            $jobDatas = [];
            while($data = mysqli_fetch_assoc($queryRun)){
                $jobDatas[] = $data;
            }
            
            
        ?>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Employer
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div id="first-div">
                <div id="create-job">
                    <form name="jobInsertValidation" action="job-insert.php" method="post" onsubmit =" return job_insert_form_validation()">
                        <h3>Create Jobs</h3>
                        <div>
                            <label for="">Company Name</label>
                            <input type="text" id="companyName" name="companyName" >
                            <br>
                            <div class="err">
                                <span class="error_msg" id="companyNameErr" ></span>
                            </div>
                        </div>
                        <div>
                            <label for="">Company Email</label>
                            <input type="text" id="companyEmail" name="companyEmail" >
                            <br>
                            <div class="err">
                                <span class="error_msg" id="emailErr" ></span>
                            </div> 
                        </div>
                        <div>
                            <label for="">Job Title</label>
                            <input type="text" id="jobTitle" name="jobTitle" >
                            <br>
                            <div class="err">
                                <span class="error_msg" id="jobTitleErr" ></span>
                            </div>   
                        </div>
                        <div>
                            <label for="">Total Vacancy</label>
                            <input type="number" id="vacancy" name="vacancy" >
                            <br>
                            <div class="err">
                                <span class="error_msg" id="vacancyErr" ></span>
                            </div>                           
                        </div>
                        <div>
                            <label for="">Qualification</label>
                            <input type="text" id="qualification" name="qualification" >
                            <br>
                            <div class="err">
                                <span class="error_msg" id="qualificationErr" ></span>
                            </div>                        
                        </div>
                        <div>
                            <label for="">Salary</label>
                            <input type="number" id="salary" name="salary" >
                            <br>
                            <div class="err">
                            <span class="error_msg" id="salaryErr" ></span>
                            </div>
                        </div>
                        <div>
                            <label for="">Description</label>
                            <br>
                            <textarea name="description" id="description" cols="30" rows="5" ></textarea>
                        </div>
                        <div>
                            <input type="submit" value="Create">
                        </div>
                    </form>
                </div>
            </div>

            <div id="second-div">
                <h3>Posted Jobs</h3>
                <div id="posted-jobs">
                    <table>
                        <thead>
                            <th>Id</th>
                            <th>Company Name</th>
                            <th>Job Title</th>
                            <th>Vacancy</th>
                            <th>Qualification</th>
                            <th>Description</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                        <?php
                    foreach($jobDatas as $jobData){
                    ?>
                            <td><?php echo $jobData['JobId'] ?></td>
                            <td><?php echo $jobData['CompanyName'] ?></td>
                            <td><?php echo $jobData['JobTitle'] ?></td>
                            <td><?php echo $jobData['Vacancy'] ?></td>
                            <td><?php echo $jobData['MinQualification'] ?></td>
                            <td><?php echo $jobData['Description'] ?></td>
                            <td><a onclick="alert('Are your sure?');" href="./delete/delete_job.php?delete_id=<?php echo $jobData['JobId'] ?>">Delete</a> </td>
                        </tbody>
                        <?php
                    }
                    ?>
                    </table>
                </div>
            </div>
            
            
        </div>
    </div>
    <!-- /#page-content-wrapper -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script> -->

    <script src="aasets/js/bootstrap.min.js"></script>
    <script src="aasets/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>
</html>
<?php
    }
    else{
        echo('<script type="text/javascript">alert("Access denied!");window.location=\'../index.php\';</script>');
    }
 ?>