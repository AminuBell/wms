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
    <title>Disposal Request | UrbanWaste-MS</title>
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
   <?php include("include/full-header.php") ?>
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
        <h3>Disposal Request</h3>

        <div class="card-body">
        <form class="needs-validation m-4" novalidate action="./helper/request.php" method="post">
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputMailForm"
                >Date - Time
                <span class="text-danger font-weight-bold">*</span></label
              >
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Date</span>
                </div>

                    <input
                    type="date"
                    class="form-control"
                    placeholder="Enter Date"
                    required
                    name="date"
                    />
                <div class="input-group-prepend">
                  <span class="input-group-text">Time</span>
                </div>
                    <input
                        type="time"
                        class="form-control"
                        placeholder="Enter House Address"
                        required
                        name = "time"
                    />

                <div class="invalid-feedback">
                  Please fill the Date - TIme field
                </div>
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="inputMailForm"
                >Day 
                <span class="text-danger font-weight-bold">*</span></label
              >
              <select class="custom-select" id="day" required name="day">
                <option value="<?php echo date("l") ?>" selected><?php echo date("l") ?></option>
              </select>
              <div class="invalid-feedback">
                Please select the Day field
              </div>
            </div>

            <div class="form-group col-md-6">
                <label for="inputMailForm"
                  >Code
                  <span class="text-danger font-weight-bold"></span></label
                >
                <input
                        type="number"
                        class="form-control"
                        value="<?php echo rand(1111,9999);?>"
                        readonly
                        name="code"
                    />
                
                <div class="invalid-feedback">
                  Please fill the
                </div>
            </div>

            <div class="form-group col-md-6">
                <label for="inputMailForm"
                  >Comfirmation Code
                  <span class="text-danger font-weight-bold">*</span></label
                >
                <input
                        type="number"
                        class="form-control"
                        placeholder="Enter Code"
                        required
                        name= "comcode"
                    />
                
                <div class="invalid-feedback">
                  Please fill the Comfirmation Code  field
                </div>
            </div>


            <div class="form-group col-md-6">
                <label for="availableSeat"
                  >Comment
                  <span class="text-danger font-weight-bold">*</span>
                  </label
                >
               <textarea name="comment" id=""  rows="2" class="form-control"></textarea>
            </div>
                        

            
          </div>
          <hr />
          <!-- <h3>Card Details</h3> -->
        
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
                value = "Request Disposal"
                name = "requestDispose"
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
