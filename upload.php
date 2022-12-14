<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
$name = $_SESSION['username1'];
$statusMsg = '';
$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'sessionpractical');

$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){

    $allowTypes = array('jpg','png','jpeg','gif','pdf','txt');
    if(in_array($fileType, $allowTypes)){

        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){

            $insert = $con->query("INSERT into files (filename, time , name) VALUES ('".$fileName."', NOW() , '".$name."' )");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            }
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}
header('location:lab.php');
?>