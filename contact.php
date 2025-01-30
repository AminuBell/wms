<?php 
include("helper/login.php");
include("function/check-login.php");
check_login();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Contact | UrbanWaste-MS</title>
    <meta
      name="description"
      content="Association of Point of Sales Users Membership Registation"
    />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="img/logo.png" type="image/gif" sizes="16x16" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
      integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
      crossorigin="anonymous"
    />
  </head>

  <body class="d-flex flex-column min-vh-100 bg-light">
    <!-- Nav-->
    <?php  include("include/full-header.php");?>

    <!-- content -->
    <div class="container flex-grow-1 flex-shrink-0 py-5">
    <?php
           session_start();
           if(isset($_SESSION["msg"])){
             echo $_SESSION["msg"];
           }
           unset($_SESSION["msg"]);
        ?>
      <div class="mb-5 p-4 bg-white shadow-sm">

        <h3>Contact Us Form</h3>

        <div class="card-body">
        <form class="needs-validation m-4" novalidate action="./helper/contact.php" method="post">
          <div class="form-row">

            <div class="form-group col-md-6">
              <label for="inputMailForm"
                >Email
                <span class="text-danger font-weight-bold">*</span></label
              >
              <?php

              $user_ID = $_SESSION["login"];
              $result = mysqli_query($conn,"SELECT * FROM `user` WHERE id = '$user_ID'");
              $row = mysqli_fetch_assoc($result);


              ?>
              <input
                type="text"
                class="form-control"
                placeholder="Enter Email"
                readonly
                value="<?php  echo $row["email"]; ?>"
                name="email"
                
                    />
             
              <div class="invalid-feedback">
                Please enter the email field
              </div>
            </div>

            <div class="form-group col-md-6">
                <label for="inputMailForm"
                  >Subject
                  <span class="text-danger font-weight-bold"></span></label
                >
                <input
                        type="text"
                        class="form-control"
                        placeholder="Enter Message Subject"
                        required
                        name="subject"
                    />
                
                <div class="invalid-feedback">
                  Please fill the Message Subject
                </div>
            </div>

            <div class="form-group col-md-6">
                <label for="inputMailForm"
                  >Message
                  <span class="text-danger font-weight-bold">*</span></label
                >
                <textarea name="msg" id=""  rows="2" class="form-control">Enter your message here</textarea>
                <div class="invalid-feedback">
                  Please fill the Message  field
                </div>
            </div>
            
          </div>
          <hr />
        
          <div
            class="btn-toolbar justify-content-between"
            role="toolbar"
            aria-label="Toolbar with button groups"
          >
         
            <div class="btn-group" role="group" aria-label="First group">
                <!-- <p class="text-muted font-weight-bold mb-0">Fee:  ₦50.00 </p> -->
            </div>
            <div class="input-group">
            <input
                
                type="submit"
                class="btn btn-primary"
                value = "Send Message"
                name="sendMsg"
                
              />
            </div>
          </div>
        
        
        </form>
        </div>
      </div>
    </div>

    <!-- footer -->
    <?php include("include/footer.php"); ?>
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
