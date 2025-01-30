<?php

$localhost = "localhost";
$username = "root";
$pass = "";
$db = "wms";

$conn = mysqli_connect($localhost,$username,$pass,$db);

if(!$conn){
    echo "Something is wrong with DB";
}



?>