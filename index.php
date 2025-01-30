<?php 
include("helper/login.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Home |  UrbanWaste-MS</title>
    <meta name="description" content="Association of Point of Sales Users Membership Registation" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="img/logo.png" type="image/gif" sizes="16x16" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />
    <style>
        html{
            scroll-behavior:smooth;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100 bg-light">
    <!-- Nav-->
    
    <?php include("include/full-header.php");?>

    <!-- content -->
    <div class="container flex-grow-1 flex-shrink-0 py-5">
        <!-- <div class="mb-5 p-4 bg-white shadow-sm">
            <h3>FAQs on booking</h3>

            <div class="card-body">
                <ol>
                    <li class="mb-3">
                        jnjsnjsnjcsxcnsnnsjnxns
                        <ol type="a">
                            <li>JNsjnjsncsjnxjsjxsn.</li>
                            <li>jndcjdncjndjcdn.</li>
                        </ol>
                    </li>
                    <li class="mb-3">jcdnjdncjdnjncnc</li>
                </ol>
            </div>
        </div> -->
        <?php
           session_start();
           if(isset($_SESSION["msg"])){
             echo $_SESSION["msg"];
           }
           unset($_SESSION["msg"]);
        ?>
        <?php  include("include/slider.php");?>
        <!-- section for about -->
        <?php  include("include/main-content.php");?>
    </div>

    <!-- footer -->
    <?php  include("include/footer.php");?>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>