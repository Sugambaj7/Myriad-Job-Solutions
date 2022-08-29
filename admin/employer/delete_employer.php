<?php
    include '../connection/connection.php';
    if(isset($_GET['delete_id'])){
        $id = (int)$_GET['delete_id'];
        $query = "delete from business_accounts where id = $id";
        if(mysqli_query($conn,$query)){
            echo('<script type="text/javascript">alert("Employer has been deleted");window.location=\'manage_employer.php\';</script>)');
        }
    }
    ?>