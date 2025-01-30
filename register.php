<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Register | UrbanWaste-MS</title>
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
      <div class="mb-5 p-4 bg-white shadow-sm">
      <?php
           session_start();
           if(isset($_SESSION["msg"])){
             echo $_SESSION["msg"];
           }
           unset($_SESSION["msg"]);
        ?>
        <p>Already have an account? <a href="login.php">Sign in</a></p>
        <hr />
        <h3>Create an account</h3>
        <form class="needs-validation m-4" method="post" action="helper/signup.php" novalidate>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputMailForm"
                >Full name
                <span class="text-danger font-weight-bold">*</span></label
              >
              <input
                id="inputMailForm"
                type="text"
                class="form-control"
                placeholder="Enter your full name"
                required
                name ="name"
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
                id="inputMailForm"
                type="text"
                class="form-control"
                placeholder="Enter your UserName"
                required
                name="username"
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
                id="inputMailForm"
                type="email"
                class="form-control"
                placeholder="Enter email address"
                required
                name = "email"
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
                id="inputMailForm"
                type="text"
                class="form-control"
                placeholder="Enter phone number"
                maxlength="11"
                required
                name = "phone"
              />
              <div class="invalid-feedback">
                Please fill the phone number field
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="inputPasswordForm"
                >Choose Password
                <span class="text-danger font-weight-bold">*</span></label
              >
              <input
                id="inputPasswordForm"
                type="password"
                class="form-control"
                placeholder="Password"
                required
                name = "pass"
              />
              <div class="invalid-feedback">Please fill the password field</div>
            </div>

            <div class="form-group col-md-6">
              <label for="inputMailForm"
                >Confirm Password
                <span class="text-danger font-weight-bold">*</span></label
              >
              <input
                id="inputMailForm"
                type="password"
                class="form-control"
                placeholder="Enter confirm password"
                required
                name = "conPass"
              />
              <div class="invalid-feedback">
                Please fill the cofirm password field
              </div>
            </div>
          </div>
          <input
                
                type="submit"
                class="btn btn-primary"
                value = "Sign up"
                name = "signup"
              />
          <!-- <button class="btn btn-primary" type="submit">Sign up</button> -->
        </form>
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
