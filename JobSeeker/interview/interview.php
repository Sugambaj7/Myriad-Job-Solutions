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
    <link rel="stylesheet" href="../assets/css/jobseeker.css">
    <link rel="stylesheet" href="./assets/css/intervieww.css">
    <script src="https://kit.fontawesome.com/7f5825e61a.js" crossorigin="anonymous"></script>
    <title>Bootstap 5 Responsive Admin Dashboard</title>
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        
        <?php 
            include "../include/wrapper.php";
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


            <?php
           
            
            $identification =  $_SESSION['email'];
            include '../include/connection.php';

            $query = "select * from jobseeker_accounts where Email = '$identification' ";
            
            if(mysqli_query($conn,$query)){
                $queryRun = mysqli_query($conn,$query);
                $jobseekerDatas = [];
                while($data = mysqli_fetch_assoc($queryRun)){
                $jobseekerDatas[] = $data;
               
            }
            
            }
            foreach($jobseekerDatas as $jobseekerData){
                $jobseeker_id= $jobseekerData['id'];
            }
            ?>


            <?php 
                if(isset($_GET['verified_jobseeker'])){
                    $query1 = "select * from interview where jobseeker_id = $jobseeker_id";
                    if(mysqli_query($conn,$query1)){
                        $interview_datas = [];
                        $result = mysqli_query($conn,$query1);
                        while($datas = mysqli_fetch_assoc($result)){
                            $interview_datas = $datas;
                        }
                    }
                    }
            ?>
            <div id="first-div">
                <div id="second-div">
                    <h4>Interview</h4>
                    <form action="view_interview_detail.php" method="post">
                        <table>
                            <tr>
                                <th>Job Title</th>
                                <td>
                                    <?php 
                                        if(isset($_GET['verified_jobseeker'])){
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
                                            if(isset($_GET['verified_jobseeker'])){
                                                echo $jobsdatas['JobTitle'];
                                            }
                                    ?>
                                </td>
                            </tr>
                            
                            <tr>
                                <th>Company Name</th>
                                <td>
                                    <?php 
                                        if(isset($_GET['verified_jobseeker'])){
                                        $employer_id =  $interview_datas['emp_id'];
                                        $query3 = "select * from business_accounts where id = '$employer_id' ";
                                        if(mysqli_query($conn,$query3)){
                                            $employerdatas = [];
                                            $result3 = mysqli_query($conn,$query3);  
                                            while($horaemployerdata = mysqli_fetch_assoc($result3)){
                                                $employerdatas = $horaemployerdata;
                                            }
                                        }
                                        }
                                        
                                    ?>
                               <?php 
                                    if(isset($_GET['verified_jobseeker'])){
                                        echo $employerdatas['CompanyName'];
                                    }
                               ?>
                                </td>
                            </tr>

                            <tr>
                                <th>Interview Date</th>
                                <td>
                                    <?php 
                                        if(isset($_GET['verified_jobseeker'])){
                                            echo $interview_datas['interview_date'];
                                        }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <th>Interview Time</th>
                                <td>
                                    <?php 
                                        if(isset($_GET['verified_jobseeker'])){
                                            echo $interview_datas['interview_time'];
                                        }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <input type="hidden" name="jobseekerid" value=<?php echo $jobseeker_id;?>>
                                <th><input type="submit" value="View"></th>
                            </tr>
                            
                        </table>
                        
                    </form>
                </div>
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