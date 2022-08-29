<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../styles.css" />
    <link rel="stylesheet" href="../assets/css/my_custom.css">
    <script src="https://kit.fontawesome.com/7f5825e61a.js" crossorigin="anonymous"></script>
    <title>Bootstap 5 Responsive Admin Dashboard</title>
</head>

<body>
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold  border-bottom"><a href="index.php" id="my-company-logo"><span id="color-letter">Myriad</span><br> Job Solutions</a></div>
            <div class="list-group list-group-flush my-3">
                <a href="../../index.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="../../jobseeker/manage_jobseeker.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-user-pen me-2"></i>Manage JobSeeker</a>
                <a href="../../employer/manage_employer.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-chart-simple me-2"></i>Manage Employeer</a>
                <a href="../../news/news.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-globe me-2"></i>News</a>
                <a href="../../messages/message.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-comments me-2"></i>Messages</a>
                <a href="../logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        
</body>
</html>