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
    <link rel="stylesheet" href="./assets/css/myprofile.css" />
    <link rel="stylesheet" href="../assets/css/jobseeker.css">
    <script src="https://kit.fontawesome.com/7f5825e61a.js" crossorigin="anonymous"></script>
    <title>Bootstap 5 Responsive Admin Dashboard</title>
</head>
<body>
    
        <?php
            
            $identification =  $_SESSION['email'];
            include '../include/connection.php';

            $query = "select * from jobseeker_accounts where Email = '$identification' ";
            
            $queryRun = mysqli_query($conn,$query);
            $jobseekerDatas = [];
            while($data = mysqli_fetch_assoc($queryRun)){
                $jobseekerDatas[] = $data;
            }
            
            
        ?>

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

            <div class="profile">
                <h3>Your Profile</h3>
                <table>
                    <tbody>
                    <?php
                    foreach($jobseekerDatas as $jobseekerData){
                    ?>
                    <?php
                        $jobseekerr_id = $jobseekerData['id'];
                       
                    ?>
                    <tr>
                    <th>ID</th>
                        <td><?php echo $jobseekerData['id'] ?></td>
                    </tr>
                    <tr>
                    <tr>
                    <th>First Name</th>
                        <td><?php echo $jobseekerData['FirstName'] ?></td>
                    </tr>
                    <tr>
                    <th>Last Name</th>
                         <td><?php echo $jobseekerData['LastName'] ?></td>
                    </tr>
                    <tr>
                    <th>Gender</th>
                        <td><?php echo $jobseekerData['Gender'] ?></td>
                    </tr>
                    <tr>
                    <th>Qualification</th>
                        <td><?php echo $jobseekerData['Qualification'] ?></td>
                    </tr>
          
                    <tr>
                    <th>Email</th>
                        <td><?php echo $jobseekerData['Email'] ?></td>
                    </tr>

                    <tr>
                    <th>Mobile</th>
                        <td><?php echo $jobseekerData['Mobile'] ?></td>
                    </tr>

                    <tr>
                    <th>Field</th>
                        <td><?php echo $jobseekerData['Field'] ?></td>
                    </tr>

                    <tr>
                    <th>Resume</th>
                        <td>
                            <form action="viewresume.php" method="post">
                                <input type="hidden" name="jobseekerid" value='<?php echo $jobseekerr_id;?>'>
                                <input type="submit" value="View">
                            </form>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
            <div class="profile">
                <h3>Your Resume</h3>
                    <div id="resume-result" >
                        <?php 
                            // $query2 = "select * from resume where jobseeker_id = '$jobseekerr_id'";
                           
                                // if(isset($_GET['true'])){
                                //         $dirname = "uploads/";
                                //         $images = glob($dirname. "*.jpg");
                                //         foreach($images as $image){
                                //             echo '<img src ="'.$image.' " /><br/>';
                                //         }
                                    
                                if(isset($_GET['true'])){
                                    $query2 = "select * from resume where jobseeker_id = '$jobseekerr_id'";
                                    if(mysqli_query($conn,$query2)){
                                        $resume = mysqli_query($conn,$query2);
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
                                    
                                    // $dirname = "uploads/$jobseekerkoresume" ;
                                    // echo  $dirname;
                                    //             $images = glob($dirname."*.jpg");
                                    //             foreach($images as $image){
                                    //                 echo '<img src ="'.$image.' " /><br/>';
                                    //             }
                                   
                                }
                                

                                // if(isset($_GET['true']) ){
                                //         $dirname = "uploads/$jobseekerkoresume";
                                //         $images = glob($dirname. "*.jpg");
                                //         foreach($images as $image){
                                //             echo '<img src ="'.$image.' " /><br/>';
                                //         }
                                // }

                                
                                    
                                    // $resume = mysqli_query($conn,$query2);
                                    // $resumedatas = [];
                                    // while($resume = mysqli_fetch_assoc($queryRun)){
                                    //     $resumedatas[] = $resume;
                                    
                        ?>
                        <img src="<?php echo $jobseekerkoresume; ?>" style="height:40rem; width:40rem;" alt="">
                    </div>
            </div>

            <div class="profile">
                <h3>Upload Your Resume</h3>
                <form action="file-uploader.php" method="post" enctype="multipart/form-data">
                    <table>
                        <tr>
                             <th>Resume (image in png)</th>
                        </tr>

                        <tr>
                            <th>Selcect File:</th>
                            <td><input type="file" name="uploadingfile" required/></td> 
                            <input type="hidden" name="jobseekerid" value='<?php echo $jobseekerr_id;?>'>
                        </tr>
                        <tr>
                            <th></th>
                            <td><input type="submit" value="Upload"></td>
                        </tr>
                    </table>
                </form>
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