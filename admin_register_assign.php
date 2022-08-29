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
            include 'connection.php';


            $Firsname = $_POST['fname'];
            $Lastname = $_POST['lname'];
            $Gender = $_POST['gen'];
            $Qualification = $_POST['qualification'];
            $Email = $_POST['email'];
            $Password = $_POST['pass'];
            $Mobile = $_POST['mob'];

            
            
            $query = "insert into sub_admin( Firstname, Lastname, Gender, Qualification, Email, Password, Mobile) values('$Firsname ',' $Lastname','$Gender','$Qualification',' $Email','$Password','$Mobile')";
            if(mysqli_query($conn,$query)){
                echo('<script type="text/javascript">alert("Successfully!!! user inserted...");window.location=\'index.php\';</script>)');
            }
            else{
                echo('<script type="text/javascript">alert("Unable to insert the user!!!");</script>');
            }

    ?>
</body>
</html>