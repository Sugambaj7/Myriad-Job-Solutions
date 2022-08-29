<?php
     session_start();
    include '../../connection/connection.php';
 
        $news = $_POST['news'];
        $news_date = $_POST['news_date'];
        $myid= $_POST['id'];

        $query = "select * from news";
        $queryRun = mysqli_query($conn,$query);

        if(mysqli_num_rows($queryRun)>0){
            $newsDatas = [];
            while($data = mysqli_fetch_assoc($queryRun)){
                $newsDatas[] = $data;
            }
            foreach($newsDatas as $newsData){
            $query = "Update news set news = '$news', news_date = '$news_date'  WHERE news_id = $myid";

            if($myid == $newsData['news_id']){
                mysqli_query($conn,$query);
                echo('<script type="text/javascript">alert("News has been edited!");window.location=\'\./edit_news.php\';</script>');
            }
            else{
                echo('<script type="text/javascript">alert("There is no such news!");</script>');
            }
        }
        }
        else{
            echo('<script type="text/javascript">alert("No news available");</script>');
        }