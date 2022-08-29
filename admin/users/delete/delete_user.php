<?php
    include '../../connection/connection.php';
    if(isset($_GET['delete_id'])){
        $id = (int)$_GET['delete_id'];
        $query = "delete from admin where User_Id = $id";
        if(mysqli_query($conn,$query)){
            echo('<script type="text/javascript">alert("Record Deleted");window.location=\'../user.php\';</script>)');
        }
    }
    ?>