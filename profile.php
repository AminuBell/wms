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
    <title>Profile | UrbanWaste-MS</title>
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
  <?php include("include/full-header.php"); ?>

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
        <?php
        $id = $_SESSION["login"];

        $sql = "SELECT * FROM `user` WHERE id = '$id'";
        $result = mysqli_query($conn,$sql); 
        $row = mysqli_fetch_assoc($result);

        ?>
        <h3>Profile Infomation</h3>
        <form class="needs-validation m-4" novalidate method="post" action="./helper/update-details.php">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputMailForm"
                >Full name
                <span class="text-danger font-weight-bold">*</span></label
              >
              <input
                type="text"
                class="form-control"
                placeholder="Enter your full name"
                required
                readonly
                value="<?php echo $row["fullName"]; ?>"

              />
              <div class="invalid-feedback">
                Please fill the full name field
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="inputMailForm"
                >UserName
                <span class="text-danger font-weight-bold">*</span></label
              >
              <input
                type="text"
                class="form-control"
                placeholder="Enter your UserName"
                required
                readonly
                value="<?php echo $row["userName"]; ?>"
              />
              <div class="invalid-feedback">
                Please fill the UserName field
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="inputMailForm"
                >Email address
                <span class="text-danger font-weight-bold">*</span></label
              >
              <input
                type="email"
                class="form-control"
                placeholder="Enter your email address"
                required
                value="<?php echo $row["email"]; ?>"
                name="email"
              />
              <div class="invalid-feedback">
                Please fill the email address field
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="inputMailForm"
                >Phone number
                <span class="text-danger font-weight-bold">*</span></label
              >
              <input
                type="text"
                class="form-control"
                placeholder="Enter your phone number"
                required
                value="<?php echo $row["phone"]; ?>"
                name="phone"
              />
              <div class="invalid-feedback">
                Please fill the phone number field
              </div>
            </div>
          </div>

          <div
            class="btn-toolbar justify-content-between"
            role="toolbar"
            aria-label="Toolbar with button groups"
          >
            <div class="btn-group" role="group" aria-label="First group">
              <!-- <a href="#" class="btn btn-light disabled">Back</a> -->
            </div>
            <div class="input-group">
            <input
                
                type="submit"
                class="btn btn-primary"
                value = "Update Profile"
                name = "updateProfile"
              />
            </div>
          </div>
        </form>

        <hr />

      <form class="needs-validation m-4" novalidate method="post" action="./helper/update-details.php">

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputMailForm"
                >Curent City
                <span class="text-danger font-weight-bold">*</span></label
              >
              <input
                type="text"
                class="form-control"
                placeholder="Enter your current City"
                required
                value="<?php echo $row["curentCity"]; ?>"
                name="city"
              />
              <div class="invalid-feedback">
                Please fill the current City field
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="inputMailForm"
                >House Address
                <span class="text-danger font-weight-bold">*</span></label
              >
              <input
                type="text"
                class="form-control"
                placeholder="Enter House Address"
                required
                value="<?php echo $row["houseAddress"]; ?>"
                name="address"
              />
              <div class="invalid-feedback">
                Please fill the House Address
              </div>
            </div>
          </div>

          <div
            class="btn-toolbar justify-content-between"
            role="toolbar"
            aria-label="Toolbar with button groups"
          >
            <div class="btn-group" role="group" aria-label="First group">
              <!-- <a href="#" class="btn btn-light disabled">Back</a> -->
            </div>
            <div class="input-group">
            <input
                
                type="submit"
                class="btn btn-primary"
                value = "Update Location"
                name = "updateLocation"
              />
            </div>
          </div>
        </form>
        <hr />

        <form class="needs-validation m-4" novalidate method="post" action="./helper/update-details.php">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputMailForm"
                >Curent password
                <span class="text-danger font-weight-bold">*</span></label
              >
              <input
                type="password"
                class="form-control"
                placeholder="Enter your current password"
                required
                name = "currentPass"
              />
              <div class="invalid-feedback">
                Please fill the current password field
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="inputMailForm"
                >New password
                <span class="text-danger font-weight-bold">*</span></label
              >
              <input
                type="password"
                class="form-control"
                placeholder="Enter your new password"
                required
                name="newPass"
              />
              <div class="invalid-feedback">
                Please fill the new password field
              </div>
            </div>
          </div>

          <div
            class="btn-toolbar justify-content-between"
            role="toolbar"
            aria-label="Toolbar with button groups"
          >
            <div class="btn-group" role="group" aria-label="First group">
              <!-- <a href="#" class="btn btn-light disabled">Back</a> -->
            </div>
            <div class="input-group">
              <input
                
                type="submit"
                class="btn btn-primary"
                value = "Update Password"
                name = "updatePassword"
              />
            </div>
          </div>
        </form> 
      </div>
    </div>

    <!-- footer -->
    <?php include("include/footer.php") ?>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
