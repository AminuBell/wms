<?php

session_start();
include("../dbConnection/connector.php");
include("../function/validate.php");

if(isset($_POST["signup"])){
    $name = validate_input($_POST["name"]);
    $username = validate_input($_POST["username"]);
    $email = validate_input($_POST["email"]);
    $phone = validate_input($_POST["phone"]);
    $pass = md5(validate_input($_POST["pass"]));
    $conPass = md5(validate_input($_POST["conPass"]));

    if($pass!= $conPass){
        $_SESSION["msg"] = '<div class= "alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Password doesnt Match</strong>
        </div>';
        header("location:../register.php");

    }else{
        $sql = "INSERT INTO `user`(`fullName`, `userName`, `email`, `phone`, `password`) VALUES ('$name','$username','$email','$phone','$pass')";
        $result = mysqli_query($conn,$sql);
        if($result){
            $_SESSION["msg"] = '<div class= "alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Register Successful</strong><a href="login.php">  Login</a>
            </div>';
            header("location:../register.php");
        }else{
            $_SESSION["msg"] = '<div class= "alert alert-info">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Something went wrong</strong>
            </div>';
            header("location:../register.php");
        }
    }

}





?>