<?php

error_reporting(0);
include_once("../dbConnection/connector.php");
include_once("../function/validate.php");
session_start();

if(isset($_POST["sendMsg"])){

    $email = validate_input($_POST["email"]);
    $subject = validate_input($_POST["subject"]);
    $msg = validate_input($_POST["msg"]);

    $user_ID = $_SESSION["login"];
    $result = mysqli_query($conn,"INSERT INTO `contactus`(`userID`, `email`, `subject`, `mesaage`) VALUES ('$user_ID','$email','$subject','$msg')");
    if($result){
        $_SESSION["msg"] = '<div class= "alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Msg Send Successsful.. Thanks for contacting Us</strong>
        </div>';
        header("location:../contact.php");
    }else{
        $_SESSION["msg"] = '<div class= "alert alert-info">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Oooops</strong>
        </div>';
        header("location:../contact.php");

    }

}else{
    header("location:../contact.php");
}


?>