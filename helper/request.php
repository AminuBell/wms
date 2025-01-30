<?php

error_reporting(0);
include_once("../dbConnection/connector.php");
include_once("../function/validate.php");
session_start();

if(isset($_POST["requestDispose"])){

  $date = validate_input($_POST["date"]);
  $time = validate_input($_POST["time"]);
  $day = validate_input($_POST["day"]);
  $code = validate_input($_POST["code"]);
  $comcode = validate_input($_POST["comcode"]);
  $comment = validate_input($_POST["comment"]);

  

  $request_ID = strtoupper(uniqid());
  $user_ID = $_SESSION["login"];
  if($code == $comcode){
      $result = mysqli_query($conn,"INSERT INTO `request`(`user_ID`, `request_ID`, `date`, `time`, `day`, `comment`,`status`) VALUES ('$user_ID','$request_ID','$date','$time','$day','$comment',0)");
      if($result){
        $_SESSION["msg"] = '<div class= "alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Request Placed Successsful</strong>
        </div>';
        header("location:../disposal-request.php");

      }else{
        $_SESSION["msg"] = '<div class= "alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Something Went Wrong</strong>
        </div>';
        header("location:../disposal-request.php");

      }
    
      
  }else{
    $_SESSION["msg"] = '<div class= "alert alert-info">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Code Doesnt Match</strong>
    </div>';
    header("location:../disposal-request.php");
     
  }


}else{
    header("location:../disposal-request.php");

}

if($_GET["id"]!= ""){
  $id = $_GET["id"];
  $res = mysqli_query($conn,"UPDATE `request` SET `status`= '2' WHERE id = '$id'");
  if($res){
    $_SESSION["msg"] = '<div class= "alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Request Canceled</strong>
          </div>';
          header("location:../disposal-history.php");


  }else{
    $_SESSION["msg"] = '<div class= "alert alert-info">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Oooops</strong>
          </div>';
          header("location:../disposal-history.php");

        
  }

}

?>