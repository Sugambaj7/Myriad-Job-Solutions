<?php
    include '../connection/connection.php';
    if(isset($_GET['delete_id'])){
        $id = (int)$_GET['delete_id'];
        $query = "delete from news where news_id = $id";
        if(mysqli_query($conn,$query)){
            echo('<script type="text/javascript">alert("News Deleted");window.location=\'news.php\';</script>)');
        }
    }
    ?>