<?php
    include '../../include/connection.php';
    if(isset($_GET['delete_id'])){
        $id = (int)$_GET['delete_id'];
        $query = "delete from jobs where JobId = $id";
        if(mysqli_query($conn,$query)){
            echo('<script type="text/javascript">alert("Job Deleted");window.location=\'../managejob.php\';</script>)');
        }
    }
    ?>