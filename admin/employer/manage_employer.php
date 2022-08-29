<?php
    session_start();
    if(isset($_SESSION['status1'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="assets/css/job_Employer.css">
    <script src="https://kit.fontawesome.com/7f5825e61a.js" crossorigin="anonymous"></script>
    <title>Bootstap 5 Responsive Admin Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <?php
            include '../include/wrapper.php';
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
                                <i class="fas fa-user me-2"></i>Admin
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
                include '../connection/connection.php';
                $query = "select * from business_accounts";
                $result = mysqli_query($conn,$query);
                $employer_datas = [];
                if(mysqli_num_rows($result)>0){
                    while($datas = mysqli_fetch_assoc($result)){
                        $employer_datas[] = $datas; 
                    }
                }

            ?>

                    <div id="first-row">
                        <div id="mng-company-table">
                            <div id="content">
                                <h4>Employer On Site</h4>
                                <div id="table">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Company Name</th>
                                                <th>Contact No.</th>
                                                <th>Email</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>

                                        <?php 
                                        foreach($employer_datas as $employer_data){
                                        ?>
                                        <tr>
                                            <td><?php echo $employer_data['id'];?></td>
                                            <td><?php echo $employer_data['CompanyName'];?></td>
                                            <td><?php echo $employer_data['CompanyContact'];?></td>
                                            <td><?php echo $employer_data['OfficialEmail'];?></td>
                                            <td><a onclick="alert('Are your sure?');" href="delete_employer.php?delete_id=<?php echo $employer_data['id'] ?>">Delete</a></td>
                                        </tr>
                                        <?php 
                                        }
                                        ?>
                                    </table>
                                </div>
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
?>