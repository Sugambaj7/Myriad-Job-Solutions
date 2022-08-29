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
    <!-- <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="assets/css/mycustom.css"> -->
    <link rel="stylesheet" href="assets/css/newss.css">
    <script src="https://kit.fontawesome.com/7f5825e61a.js" crossorigin="anonymous"></script>
    <script src="assets/js/date.js"></script>
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
                $query = "select * from news";
                $result = mysqli_query($conn,$query);
                $news = [];
                if(mysqli_num_rows($result)>0){
                    while($datas = mysqli_fetch_assoc($result)){
                        $news[] = $datas;
                    }
                }
            ?>

            <div class="container-fluid px-4">
                <div class="row my-5">
                    <div id="main-div">
                        <div id="content">
                        <!-- ./edit/news_insert.php -->
                            <form action="./edit/news_insert.php" method="POST" name="news_section" onsubmit="return validate_date()">
                                <div id="whose-form">
                                    <p>Create News</p>
                                </div>
                                <div id="username">
                                    <label id="usser">News:</label>
                                    <br>
                                    <textarea name="news"  class="information-for-login" cols="27" rows="3"></textarea>
                                    <br>
                                    <span class="error_msg" id="newsErr"></span>
                                    <!-- <input class="information-for-login" id="input-user" type="text" name="news"/> -->
                                </div>
        
                                <div class="information-for-login" id="password">
                                    <label id="psw">News Date:</label>
                                    <br>
                                    <input class="information-for-login"  id="input-pass" type="date" name="news_date" min=''>
                                    <br>
                                    <span class="error_msg" id="dateErr"></span>
                                </div>
        
                                <div class="button" id="login">
                                    <input id="login-btn" type="submit" value="Submit" />
                                </div>
        
                            </form>
                        </div>      
                    </div>

                    <div class="row g-3 my-2">
                        <div id="my-table">
                            <h3>News List</h3>
                            <table>
                                <tr>
                                    <th class="table-id">Id</th>
                                    <th>News</th>
                                    <th>Date</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                
                                <?php
                                    foreach($news as $new){
                                ?>
                                <tr>
                                    <td class="table-id">
                                        <?php echo $new['news_id']; ?>
                                    </td>
                                    <td>
                                        <?php echo $new['news']; ?>
                                    </td>
                                    <td>
                                        <?php echo $new['news_date']; ?>
                                    </td>
                                    <td><a href="./edit/edit_news.php?edit_id=<?php echo $new['news_id'] ?>">Edit</a></td>
                                    <td><a onclick="alert('Are your sure?');" href="delete_news.php?delete_id=<?php echo $new['news_id'] ?>">Delete</a></td>
                                </tr>
                                <?php
                                }
                                ?>  
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>          <!-- /#page-content-wrapper -->
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script> -->

    <script src="aasets/js/bootstrap.min.js"></script>
    <script src="aasets/js/bootstrap.bundle.min.js"></script>
    <!-- <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };

        var date = new Date();
        var tdate = date.getDate();
        var month = date.getMonth()+1;
        var year = date.getUTCFullYear();

        if (tdate < 10){
            tdate = "0"+ tdate;
        }
        if (month < 10){
            month = "0"+ month;
        }

        var min_date = month + "-" + tdate + "-" + year;
        var max_date = month + "-" + tdate + "-" + year;

        
        document.getElementById("input-pass").setAttribute("max", max_date);
    </script> -->
</body>

</html>
<?php
    }
    else{
        echo('<script type="text/javascript">alert("Access denied!");window.location=\'../index.php\';</script>');
    }
?>