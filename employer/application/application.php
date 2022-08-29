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
    <link rel="stylesheet" href="./assets/css/application1.css" />
    <link rel="stylesheet" href="../assets/css/employer_dashboarddd.css">
    <script src="https://kit.fontawesome.com/7f5825e61a.js" crossorigin="anonymous"></script>
    <title>Bootstap 5 Responsive Admin Dashboard</title>
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        
        <?php 
            include "../include/wrapper.php";
            include '../include/connection.php';
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
                  
            
                  $jobidentification =  $_SESSION['email12'];
                  $query = "select * from jobs where CompanyEmail='$jobidentification' ";
                  $queryRun = mysqli_query($conn,$query);
                  $jobDatas = [];
                  while($data = mysqli_fetch_assoc($queryRun)){
                      $jobDatas[] = $data;
                  }

            ?>

             <?php
  
                
                    $identification =  $_SESSION['email12'];
                    
                    include '../include/connection.php';

                    $query3 = "select * from jobseeker_accounts where Email = '$identification' ";
                    
                    $queryRunn = mysqli_query($conn,$query3);
                    $jobseekerDatas = [];
                    while($hora_jobseeker_data = mysqli_fetch_assoc($queryRunn)){
                        $jobseekerDatas[] = $hora_jobseeker_data;
                }
            
            
             ?>

            <div class="first-div">
                <h4 style="margin-top:2rem; margin-bottom:1rem;">View Application</h4> 
                <div id="second-div">
                    <form action="view-application.php" method="post" >
                            <table>
                                <tbody>
                                    <tr>
                                        <th  style="font-size:1.3rem; margin-right:0.5rem;">Select Job Title</th>
                                            <td>
                                                <select name="jobtitle" id="">
                                                    <?php
                                                        foreach($jobDatas as $jobData){
                                                    ?>
                                                    <option value="<?php echo $jobData['JobTitle']; ?>"> 
                                                        <?php 
                                                            echo $jobData['JobTitle'];
                                                        ?>
                                                    </option>
                                                    <?php
                                                        }
                                                    ?>
                                                </select>
                                            </td>
                                    
                                            
                                            <td>
                                                <input type="hidden" name="what" value="<?php echo $jobidentification; ?>" >
                                                <input type="hidden" name="sorry" value="<?php echo $jobidentification; ?>" >
                                                    <input type="submit" value="View">
                                            </td>
                                    </tr>
                            </tbody>
                        </table>
                    </form>
                
                </div>
            </div>

        <div class="main">
            
        </div>

            <div class="first-div">
                <div id="third-div">
                    <h4 style="margin-bottom:1rem;">Application Status</h4>
                <table>
                    <tr>
                        <thead>
                            <th>Id</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Status</th>
                        </thead>
                    </tr>
                    <tr>
                        <tbody>
                            <td>
                            <?php    
                                if(isset($_GET['jobseeker_id'])){
                                    $myId=$_GET['jobseeker_id'];
                                          $query = "select * from jobseeker_accounts where id='$myId'";
                                          $queryRun = mysqli_query($conn,$query);
                                          while($row = mysqli_fetch_assoc($queryRun)) {
                                            echo  $row["id"];
                                          }
                                        }
                            ?>
                            </td>
                            <td>
                            <?php    
                                if(isset($_GET['jobseeker_id'])){
                                    $myId=$_GET['jobseeker_id'];
                                          $query = "select * from jobseeker_accounts where id='$myId'";
                                          $queryRun = mysqli_query($conn,$query);
                                          while($row = mysqli_fetch_assoc($queryRun)) {
                                            echo  $row["FirstName"];
                                          }
                                        }
                            ?>
                            </td>
                            <td>
                            <?php    
                                if(isset($_GET['jobseeker_id'])){
                                    $myId=$_GET['jobseeker_id'];
                                          $query = "select * from jobseeker_accounts where id='$myId'";
                                          $queryRun = mysqli_query($conn,$query);
                                          while($row = mysqli_fetch_assoc($queryRun)) {
                                            echo  $row["LastName"];
                                          }
                                        }
                            ?>
                            </td>
                            <td>
                            <?php    
                                if(isset($_GET['jobseeker_id'])){
                                    $myId=$_GET['jobseeker_id'];
                                          $query = "select * from jobseeker_accounts where id='$myId'";
                                          $queryRun = mysqli_query($conn,$query);
                                          while($row = mysqli_fetch_assoc($queryRun)) {
                                            echo  $row["Email"];
                                          }
                                        }
                            ?>
                            </td>
                            <td>
                            <?php    
                                 if(isset($_GET['jobseeker_id'])){
                                    $myId=$_GET['jobseeker_id'];
                                          $query = "select * from applied_jobs where jobseeker_id='$myId'";
                                          $queryRun = mysqli_query($conn,$query);
                                          while($row = mysqli_fetch_assoc($queryRun)) {
                                            echo  $row["Status"];
                                          }
                                        }
                            ?>
                            </td>
                        </tbody>
                    </tr>
                        </table>
                </div>
            </div>

            <div class="first-div" id="jobseekerprofile">
                 <h4 style="margin-top:2rem; margin-bottom:1rem;">Jobseeker Profile</h4> 
                    <div class="profile">
                        <table>
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <td>
                                    <?php    
                                            if(isset($_GET['jobseeker_id'])){
                                                $myId=$_GET['jobseeker_id'];
                                                    $query = "select * from jobseeker_accounts where id='$myId'";
                                                    $queryRun = mysqli_query($conn,$query);
                                                    while($row = mysqli_fetch_assoc($queryRun)) {
                                                        echo  $row["id"];
                                                    }
                                                    }
                                        ?>
                                </td>
                            </tr>
                            <tr>
                            <tr>
                            <th>First Name</th>
                                <td>
                                <?php    
                                        if(isset($_GET['jobseeker_id'])){
                                            $myId=$_GET['jobseeker_id'];
                                                $query = "select * from jobseeker_accounts where id='$myId'";
                                                $queryRun = mysqli_query($conn,$query);
                                                while($row = mysqli_fetch_assoc($queryRun)) {
                                                    echo  $row["FirstName"];
                                                }
                                                }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                            <th>Last Name</th>
                                <td>
                                <?php    
                                        if(isset($_GET['jobseeker_id'])){
                                            $myId=$_GET['jobseeker_id'];
                                                $query = "select * from jobseeker_accounts where id='$myId'";
                                                $queryRun = mysqli_query($conn,$query);
                                                while($row = mysqli_fetch_assoc($queryRun)) {
                                                    echo  $row["LastName"];
                                                }
                                                }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                            <th>Gender</th>
                                <td>
                                <?php    
                                        if(isset($_GET['jobseeker_id'])){
                                            $myId=$_GET['jobseeker_id'];
                                                $query = "select * from jobseeker_accounts where id='$myId'";
                                                $queryRun = mysqli_query($conn,$query);
                                                while($row = mysqli_fetch_assoc($queryRun)) {
                                                    echo  $row["Gender"];
                                                }
                                                }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                            <th>Qualification</th>
                                <td>
                                <?php    
                                        if(isset($_GET['jobseeker_id'])){
                                            $myId=$_GET['jobseeker_id'];
                                                $query = "select * from jobseeker_accounts where id='$myId'";
                                                $queryRun = mysqli_query($conn,$query);
                                                while($row = mysqli_fetch_assoc($queryRun)) {
                                                    echo  $row["Qualification"];
                                                }
                                                }
                                    ?>
                                </td>
                            </tr>
                
                            <tr>
                            <th>Email</th>
                                <td>
                                    <?php    
                                        if(isset($_GET['jobseeker_id'])){
                                            $myId=$_GET['jobseeker_id'];
                                                $query = "select * from jobseeker_accounts where id='$myId'";
                                                $queryRun = mysqli_query($conn,$query);
                                                while($row = mysqli_fetch_assoc($queryRun)) {
                                                    echo  $row["Email"];
                                                }
                                                }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                            <th>Mobile</th>
                                <td>
                                <?php    
                                        if(isset($_GET['jobseeker_id'])){
                                            $myId=$_GET['jobseeker_id'];
                                                $query = "select * from jobseeker_accounts where id='$myId'";
                                                $queryRun = mysqli_query($conn,$query);
                                                while($row = mysqli_fetch_assoc($queryRun)) {
                                                    echo  $row["Mobile"];
                                                }
                                                }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                            <th>Field</th>
                                <td>
                                <?php    
                                        if(isset($_GET['jobseeker_id'])){
                                            $myId=$_GET['jobseeker_id'];
                                                $query = "select * from jobseeker_accounts where id='$myId'";
                                                $queryRun = mysqli_query($conn,$query);
                                                while($row = mysqli_fetch_assoc($queryRun)) {
                                                    echo  $row["Field"];
                                                }
                                                }
                                    ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div id="profile">
                    <h4>
                        Jobseeker Resume
                    </h4>
                        <div id="resume-result" >
                        <?php   
                                    if(isset($_GET['jobseeker_id'])){
                                        $query = "select * from resume where jobseeker_id = $myId";
                                        if(mysqli_query($conn,$query)){
                                            $resume = mysqli_query($conn,$query);
                                            $resumedatas = [];
                                            while($jobseekeresume = mysqli_fetch_assoc($resume)){
                                                $resumedatas[] = $jobseekeresume;
                                                
                                                foreach($resumedatas as $resumedata){
                                                    $jobseekerkoresume = $resumedata['jobseeker_resume'];
                                                   
                                                    
                                                    // echo '<img src ="'.$image.' " /><br/>';
                                                }
                                                // echo $resumedatas['jobseeker_resume'];
                                                // echo $jobseeker_resume;
                                            }
                                        }
                                    }
                            ?>
                            <img src="../../JobSeeker/profile/<?php echo $jobseekerkoresume; ?>" style="height:40rem; width:40rem;" alt="">
                        </div>
                    <div id="status-section">
                        <div id="approve_status" class="status">
                            <form action="status_update.php" method="post">
                                <input type="hidden" name="approve" value = "<?php echo  $myId; ?>">
                                <input type="submit" value ="Approve">
                            </form>
                        </div>
                        <div id="deny_status" class="status">
                            <form action="status_update.php" method="post">
                                <input type="hidden" name="deny" value = "<?php echo  $myId; ?>">
                                <input type="submit" value ="Reject">
                            </form>
                        </div>
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