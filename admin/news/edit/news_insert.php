<?php
    include '../../connection/connection.php';
    
   $news = $_POST['news'];
   $news_date = $_POST['news_date'];

    
    $query = "insert into news( news, news_date) values('$news','$news_date')";
    if(mysqli_query($conn,$query)){
        echo('<script type="text/javascript">alert("News has been created!");window.location=\'../news.php\';</script>)');
    }
    else{
        echo('<script type="text/javascript">alert("Unable to create news!");</script>').mysqli_error($conn);
    }