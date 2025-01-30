<?php

error_reporting(0);
include_once("../dbConnection/connector.php");
include_once("../function/validate.php");
session_start();

$id = $_SESSION["login"];

if(isset($_POST["updateProfile"])){
    $email = validate_input($_POST["email"]);
    $phone = validate_input($_POST["phone"]);

    $result = mysqli_query($conn,"UPDATE `user` SET `email`= '$email',`phone`= '$phone' WHERE id = '$id'");
    if($result){
        $_SESSION["msg"] = '<div class= "alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Profile Update Successsful</strong>
        </div>';
        header("location:../profile.php");
    }else{
        $_SESSION["msg"] = '<div class= "alert alert-info">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Something Went Wrong!!!</strong>
        </div>';
        header("location:../profile.php");
    }   
}else{
    header("location:../profile.php");
}



if(isset($_POST["updateLocation"])){
    $city = validate_input($_POST["city"]);
    $address = validate_input($_POST["address"]);

    $result = mysqli_query($conn,"UPDATE `user` SET `curentCity`= '$city',`houseAddress`= '$address' WHERE id = '$id'");
    if($result){
        $_SESSION["msg"] = '<div class= "alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Location Update Successsful</strong>
        </div>';
        header("location:../profile.php");
    }else{
        $_SESSION["msg"] = '<div class= "alert alert-info">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Something Went Wrong!!!</strong>
        </div>';
        header("location:../profile.php");
    }  
}else{
    header("location:../profile.php");
}

if(isset($_POST["updatePassword"])){
    $currentPass = md5(validate_input($_POST["currentPass"]));
    $newPass = md5(validate_input($_POST["newPass"]));

    // checking if old password match in DB
    $result = mysqli_query($conn,"SELECT * FROM `user` WHERE id = '$id'");
    $row = mysqli_fetch_assoc($result);
    if($row["password"] == $currentPass){
        $result = mysqli_query($conn,"UPDATE `user` SET `password`= '$newPass' WHERE id = '$id'");
        if($result){
            $_SESSION["msg"] = '<div class= "alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Password Updated Successsful</strong>
        </div>';
        header("location:../profile.php");

        }else{
            $_SESSION["msg"] = '<div class= "alert alert-info">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Something Went Wrong</strong>
        </div>';
        header("location:../profile.php");

        }

    }else{
        $_SESSION["msg"] = '<div class= "alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Old Password Desnt Match</strong>
        </div>';
        header("location:../profile.php");

    }
}else{
    header("location:../profile.php");
}


?>