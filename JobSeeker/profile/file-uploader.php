<?php
include '../include/connection.php';



$target_dir = "uploads/";
$my_image_file = basename($_FILES["uploadingfile"]["name"]);
$target_file = $target_dir . basename($_FILES["uploadingfile"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["uploadingfile"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["uploadingfile"]["size"] > 50000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["uploadingfile"]["tmp_name"], $target_file)) {
    if(isset($_POST['jobseekerid'])){
        $actual_jobseekerid = $_POST['jobseekerid'];
        echo $actual_jobseekerid;
       $query = "insert into resume(jobseeker_id,jobseeker_resume) values('$actual_jobseekerid','$target_file')";
        if(mysqli_query($conn,$query)){
           echo('<script type="text/javascript">alert("Your resume has been uploaded");window.location=\'profile.php\';</script>)');
        }
    }
    echo "The file ". htmlspecialchars( basename( $_FILES["uploadingfile"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>