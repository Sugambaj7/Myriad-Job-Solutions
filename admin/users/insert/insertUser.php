<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            include '../../connection/connection.php';

            $UserName=$_POST['uname'];
            $Password= md5($_POST['pass']);
            
            $query = "insert into admin( Username, Password) values('$UserName','$Password')";
            if(mysqli_query($conn,$query)){
                echo('<script type="text/javascript">alert("Successfully!!! user inserted...");window.location=\'../user.php\';</script>)');
            }
            else{
                echo('<script type="text/javascript">alert("Unable to insert the user!!!");window.location=\'../user.php\';</script>)');
            }

    ?>
</body>
</html>