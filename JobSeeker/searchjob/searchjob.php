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
    <link rel="stylesheet" href="./assets/css/searchjob.css">
    <script src="https://kit.fontawesome.com/7f5825e61a.js" crossorigin="anonymous"></script>
    <title>Bootstap 5 Responsive Admin Dashboard</title>
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <?php 
            include "../include/wrapper.php";
        
            
            include '../include/connection.php';
           
            $query = "select * from jobs";
            $queryRun = mysqli_query($conn,$query);
            $jobs = [];
            while($data = mysqli_fetch_assoc($queryRun)){
                $jobs[] = $data;
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

            <div class="first-div" id="first-div">
                <div id="second-div">
                    <h3>Search Job</h3>
                    <form action="letssearch.php" method="POST">
                        <div>
                            <label for="">Select Your Qualification:</label>
                            <select name="qualification">
                            <?php
                            foreach($jobs as $job){
                                ?>
                                <option value=" <?php echo $job['MinQualification'] ?>"><?php echo $job['MinQualification'] ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
            

                        <div>
                            <label for="">Select Company Name:</label>
                            <select  name="CompanyName" >
                            <?php
                            foreach($jobs as $job){
                                ?>
                                <option value=" <?php echo $job['CompanyName'] ?>"><?php echo $job['CompanyName'] ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>

                        <div>
                            <label for="">Field</label>
                            <select name="field" id="">
                                <?php
                                foreach($jobs as $job){
                                    ?>
                                    <option  value=" <?php echo $job['JobTitle'] ?>"><?php echo $job['JobTitle'] ?></option>
                                    <?php
                                        }
                                    ?>
                            </select>
                        </div>

                        <div>
                            <input type="submit" value="Search" onsubmit="">
                        </div>
                    </form>
                </div>
                </div>

                <div class="first-div">
                    
                    <h3>Available Jobs</h3>
                    <div  id="third-div">
                    <form action="apply_post.php" method="post">
                    <table>
                    <tbody>
                    <tr>
                    <th>CompanyName</th>
                        <td>
                        <?php
                                      
                            if(isset($_GET['id'])){
                                $myId=$_GET['id'];
                                $query = "select * from jobs where JobId=$myId";
                                $queryRun = mysqli_query($conn,$query);
                                while($row = mysqli_fetch_assoc($queryRun)) {
                                  echo  $row["CompanyName"];
                                }
                              }
                 
                          ?>
                        </td>
                    </tr>
                    <tr>
                    <tr>
                    <th>Job Title</th>
                        <td> 
                            <?php    
                                if(isset($_GET['id'])){
                                    $myId=$_GET['id'];
                                          $query = "select * from jobs where JobId=$myId";
                                          $queryRun = mysqli_query($conn,$query);
                                          while($row = mysqli_fetch_assoc($queryRun)) {
                                            echo  $row["JobTitle"];
                                          }
                                        }
                            ?>
                        </td>
                    </tr>
                    <tr>
                    <tr>
                    <th>Vacancy</th>
                        <td>
                        <?php    
                            if(isset($_GET['id'])){
                                $myId=$_GET['id'];
                                $query = "select * from jobs where JobId=$myId";
                                $queryRun = mysqli_query($conn,$query);
                                while($row = mysqli_fetch_assoc($queryRun)) {
                                    echo  $row["Vacancy"];
                                    }
                                }
                            ?>
                        </td>
                    </tr>
                    <th>Qualification</th>
                         <td>
                            <?php
                                if(isset($_GET['id'])){
                                    $myId=$_GET['id'];
                                    $query = "select * from jobs where JobId=$myId";
                                    $queryRun = mysqli_query($conn,$query);
                                    while($row = mysqli_fetch_assoc($queryRun)) {
                                        echo  $row["MinQualification"];
                                        }
                                    }
                            ?>
                        </td>
                    </tr>
                    <tr>
                    <th>Description</th>
                        <td>
                            <?php
                               if(isset($_GET['id'])){
                                $myId=$_GET['id'];
                                $query = "select * from jobs where JobId=$myId";
                                $queryRun = mysqli_query($conn,$query);
                                while($row = mysqli_fetch_assoc($queryRun)) {
                                    echo  $row["Description"];
                                    }
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>

                    <th></th>
                        <input type="hidden" name="app_job_id" value="<?php echo $myId; ?>" />
                        <input type="hidden" name="jobseeker_email" value="<?php echo $_SESSION['email']; ?>" />
                        <td><input type="submit" value="Apply"></td>
                    </tr>
          
                </table>
                    </form>
                   
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