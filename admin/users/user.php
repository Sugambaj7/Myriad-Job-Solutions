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
    <link rel="stylesheet" href="assets/css/mycustom.css">
    <link rel="stylesheet" href="assets/css/create-users.css">
    <script src="https://kit.fontawesome.com/7f5825e61a.js" crossorigin="anonymous"></script>
    <title>Bootstap 5 Responsive Admin Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <?php
            include '../include/wrapper.php';
            include '../connection/connection.php';

            $query = "select * from admin order by User_id asc";
            $queryRun = mysqli_query($conn,$query);
            $adminDatas = [];
            while($data = mysqli_fetch_assoc($queryRun)){
                $adminDatas[] = $data;
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

            <div class="container-fluid px-4">
                <div class="row my-5">
                        <div id="main-div">
                            <div id="content">
                                        <form action="insert/insertUser.php" method="POST" >
                                            <div id="whose-form">
                                                <p>Create New Users</p>
                                            </div>
                                            <div id="username">
                                                <label id="usser">Username</label>
                                                <br>
                                                <input class="information-for-login" id="input-user" type="text" name="uname" placeholder="Enter your username here!!!"/>
                                            </div>
                    
                                            <div class="information-for-login" id="password">
                                                <label id="psw">Password</label>
                                                <br>
                                                <input class="information-for-login"  id="input-pass" type="password" name="pass" placeholder="Enter your password here!!!"/>
                                            </div>
                    
                                            <div class="button" id="login">
                                                <input id="login-btn" type="submit" value="Submit" />
                                            </div>
                    
                                        </form>
                                    </div>
                                        
                                 </div>   
                            </div>

                            <div class="row g-3 my-2">
                                     
                                <div class="display-row">
                                    <div class="display-table">
                                            <div class ="contents">
                                                <h3>User List</h3>
                                            </div>
                                            
                                            <div class="contents">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th>User Id</th>
                                                            <th>UserName</th>
                                                            <th>Password</th>
                                                            <th>Edit</th>
                                                            <th>Delete</th>
                                                        </tr> 
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        foreach($adminDatas as $adminData){
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $adminData['User_Id'] ?></td>
                                                            <td><?php echo $adminData['Username'] ?></td>
                                                            <td><?php echo $adminData['Password'] ?></td>
                                                            <td><a href="./edit/edituser.php?edit_id=<?php echo $adminData['User_Id'] ?>">Edit</a></td>
                                                            <td> <a onclick="alert('Are your sure?');" href="./delete/delete_user.php?delete_id=<?php echo $adminData['User_Id'] ?>">Delete</a> </td>
                                                        </tr>
                                                        <?php }?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
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