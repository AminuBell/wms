<?php

error_reporting(0);
include_once("../dbConnection/connector.php");
include_once("../function/validate.php");
session_start();

if($_GET["approve_id"]!= ""){
    $id = $_GET["approve_id"];
    $res = mysqli_query($conn,"UPDATE `request` SET `status`= '1' WHERE id = '$id'");
    if($res){
      $_SESSION["msg"] = '<div class= "alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Request Approved</strong>
            </div>';
            header("location:../in-request.php");
  
  
    }else{
      $_SESSION["msg"] = '<div class= "alert alert-info">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Oooops</strong>
            </div>';
            header("location:../in-request.php");
  
          
    }
  
  }

  if($_GET["disapprove_id"]!= ""){
    $id = $_GET["disapprove_id"];
    $res = mysqli_query($conn,"UPDATE `request` SET `status`= '2' WHERE id = '$id'");
    if($res){
      $_SESSION["msg"] = '<div class= "alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Request Disapproved</strong>
            </div>';
            header("location:../in-request.php");
  
  
    }else{
      $_SESSION["msg"] = '<div class= "alert alert-info">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Oooops</strong>
            </div>';
            header("location:../in-request.php");
  
          
    }
  
  }


  if(isset($_POST['UserID'])){
    $id = $_POST['UserID'];
    $output = "";

    // $query = "SELECT * FROM `request` WHERE user_ID = '$id'";
    $query = "SELECT request.request_ID,request.comment,user.fullName,user.phone,user.curentCity,user.houseAddress FROM request INNER JOIN user ON request.user_ID = user.id AND request.id = '$id'";

    $result = mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($result)){
        $output ='
        <table class="table caption-top">
            <tr>
                <th scope="col">Request Id</th>
                <td>'.$row["request_ID"].'</td>
            </tr>

            <tr>
                <th scope="col">Full Name</th>
                <td>'.$row["fullName"].'</td>
            </tr>
            <tr>
                <th scope="col">Contact Info</th>
                <td>'.$row["phone"].'</td>
            </tr>
            <tr>
                <th scope="col">Address</th>
                <td>'.$row["curentCity"].' - '.$row["houseAddress"].'</td>
            </tr>
            <tr>
                <th scope="col">Comment</th>
                <td>'.$row["comment"].'</td>
            </tr>

        </table>
        
    ';
    }
    echo $output;
    
}


?>
<!-- $output ='
        <p><b> ID </b>'.$row["user_ID"].'</p>
        <p><b> NAME </b>'.$row["request_ID"].'</p>
        <p><b> AGE </b>'.$row["date"].'</p>
        <p><b> MESSAGE </b>'.$row["time"].'</p>
    '; -->