<?php
error_reporting(0);
include_once("../dbConnection/connector.php");
include_once("../function/validate.php");
session_start();

if(isset($_POST["signin"])){
    $email = validate_input($_POST["email"]);
    $pass = md5(validate_input($_POST["pass"]));

    $sql = "SELECT * FROM `user` WHERE email = '$email' AND password = '$pass'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    if($row > 0){
        $_SESSION["msg"] = '<div class= "alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Login Successsful</strong>
        </div>';
        
        $_SESSION['login'] = $row["id"];
        $_SESSION['status'] = $row["status"];
        header("location:../index.php");

    }else{
        $_SESSION["msg"] = '<div class= "alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Invalid Email or Password!!!</strong>
        </div>';
        header("location:../login.php");
    }
}


?>