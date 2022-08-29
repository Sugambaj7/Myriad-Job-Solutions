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
    <link rel="stylesheet" href="../assets/js/interview_validate.js" />
    <link rel="stylesheet" href="./assets/css/job_interview.css">
    <link rel="stylesheet" href="../assets/css/employer_dashboarddd.css">
    <script src="https://kit.fontawesome.com/7f5825e61a.js" crossorigin="anonymous"></script>
    <title>Bootstap 5 Responsive Admin Dashboard</title>
    <script>
        function validateInterview() {
           
            const form_interview_time = document.interview.inter_time.value;

            

           
            // alert(current_time);
            // alert(form_interview_time);

            dateErr = timeErr = false;


        }
    </script>
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        
        <?php 
            include "../include/wrapper.php";
            include '../include/connection.php';
            if(isset($_SESSION['jobseeeker_id'])){
                $identification =  trim($_SESSION['jobseeeker_id']);
            }
            
          
            $employer_identity = $_SESSION['email12'];
            $query = "select * from business_accounts where OfficialEmail = '$employer_identity' ";
            $queryRun = mysqli_query($conn,$query);
            $companyDatas = [];
            while($data = mysqli_fetch_assoc($queryRun)){
                $companyDatas[] = $data;
            }
            foreach($companyDatas as $companyData){
                $company_id =  $companyData['id'];
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

            <div class="first-div">
                <h3>Create Interview For Selected Candidate</h3>
                <div id="interview">
                    <table>
                        <div id="content">
                            <form action="insert_interviewdetail.php" name="interview" method="post" onsubmit = "return validate_date()">
                                <tr>
                                    <th>Interview Date</th>
                                    <td><input type="date" name="inter_date" id=""></td>
                                    <br>
                                    <span id="dateErr"></span>
                                </tr>
                                <tr>
                                    <th>Interview Time</th>
                                    <td><input type="datetime" name="inter_time" id=""></td>
                                    <br>
                                    <span id="timeErr"></span>
                                </tr>
                                <tr>
                                     <input type="hidden" name="jobseekerid" value='<?php echo  $identification;?>'>
                                     <input type="hidden" name="employerid" value='<?php echo   $company_id?>'>
                                    <td><input type="submit" value="Create"></td>
                                </tr>
                            </form>
                            <?php
                            unset($_SESSION['jobseeeker_id']);
                            ?>
                        </div>
                    </table>
                </div>
            </div>



            <div class="second-div">
                <h3>Interview Details</h3>
                <div id= "interview_details">
                    <table>
                        <form action="view_interview_details.php" method="post">
                            <?php 
                                if(isset($_GET['verified_employer'])){
                                    $query1 = "select * from interview where emp_id = $company_id";
                                    if(mysqli_query($conn,$query1)){
                                        $interview_datas = [];
                                        $result = mysqli_query($conn,$query1);
                                        while($datas = mysqli_fetch_assoc($result)){
                                            $interview_datas = $datas;
                                        }
                                    }
                                    }
                                ?>
                      
                        <tr>
                            <th>Jobseeker Name</th>
                            <td>
                            <?php 
                                    if(isset($_GET['verified_employer'])){
                                       $jobseeker_id =  $interview_datas['jobseeker_id'];
                                       $query3 = "select * from jobseeker_accounts where id = '$jobseeker_id' ";
                                       if(mysqli_query($conn,$query3)){
                                        $jobseekerdatas = [];
                                        $result3 = mysqli_query($conn,$query3);  
                                        while($horajobseekerdata = mysqli_fetch_assoc($result3)){
                                            $jobseekerdatas = $horajobseekerdata;
                                        }
                                       }
                                    }
                                    
                               ?>
                               <?php 
                                    if(isset($_GET['verified_employer'])){
                                        echo $jobseekerdatas['FirstName'] . " " . $jobseekerdatas['LastName'] ;
                                    }
                               ?>
                            </td>
                        </tr>
                                    
                          <tr>
                                
                            <th>Job Title</th>
                            <td>
                            <?php 
                                    if(isset($_GET['verified_employer'])){
                                       $approved_jobs_id =  $interview_datas['approved_jobs_id'];
                                       $query2 = "select * from jobs where JobId = '$approved_jobs_id' ";
                                       if(mysqli_query($conn,$query2)){
                                        $jobsdatas = [];
                                        $result2 = mysqli_query($conn,$query2);  
                                        while($actualdatas = mysqli_fetch_assoc($result2)){
                                            $jobsdatas = $actualdatas;
                                        }
                                       }
                                    }
                                    
                               ?>
                               <?php 
                                    if(isset($_GET['verified_employer'])){
                                        echo $jobsdatas['JobTitle'];
                                    }
                               ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Interview Date</th>
                            <td>
                               <?php 
                                    if(isset($_GET['verified_employer'])){
                                        echo $interview_datas['interview_date'];
                                    }
                               ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Interview Time</th>
                            <td>
                                <?php 
                                    if(isset($_GET['verified_employer'])){
                                        echo $interview_datas['interview_time'];
                                    }
                               ?>
                            </td>
                        </tr>
                        <tr>
                           
                            <input type="hidden" name="employer_id" value= "<?php echo $company_id;?>" >
                            <td><input type="submit" value="View"></td>
                        </tr>
                        </form>
                    </table>
                </div>

            </div>
            
             
            
    </div>
    <!-- /#page-content-wrapper -->
    </div>

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