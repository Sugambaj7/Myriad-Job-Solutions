<?php
     session_start();
    include '../../connection/connection.php';
 
        $old_psw = $_POST['uname'];
        $new_psw = $_POST['pass'];
        $myid= $_POST['id'];

        $queryOne = "select * from admin order by User_Id asc";
        $queryRun = mysqli_query($conn,$queryOne);
        $adminDatas = [];
        while($data = mysqli_fetch_assoc($queryRun)){
            $adminDatas[] = $data;
        }

        foreach($adminDatas as $adminData){
            $query = "Update admin set Password = '$new_psw'  WHERE User_Id = $myid";
            if($old_psw == $adminData['Password']){
                mysqli_query($conn,$query);
                echo('<script type="text/javascript">alert("Password Successfully updated!!!");window.location=\'../user.php\';</script>');
                break;
                }
                else{
                    echo('<script type="text/javascript">alert("Incorrect old password!!!");</script>)');
                }
            }
            


                

           
            
        
        

        /*
       $query = "Update admin set Password = '$new_psw'  WHERE User_Id = $id";
       if(mysqli_query($conn,$query)){
        echo('<script type="text/javascript">alert("Password Successfully updated!!!");window.location=\'../user.php\';</script>)');
    }
    else{
        return false;
    }
    */
       
/*
        

        $querytwo = "UPDATE admin SET Password = $new_psw WHERE User_Id = 26";
        if(mysqli_query($conn,$querytwo)){
            echo('<script type="text/javascript">alert("Password Successfully updated!!!");window.location=\'../user.php\';</script>)');
        }
        else{
            return false;
        }
        */
       /* foreach($adminDatas as $adminData){
            if($old_psw = $adminData['Password']){
                
            }
                if(mysqli_query($conn,$querytwo)){
                    
                }
                else{
                    echo('<script type="text/javascript">alert("Incorrect Old Password!!!");window.location=\'../user.php\';</script>)');
                }
            }
           
      
        else{
            echo "k milena milena";
        }
        */
    ?>
