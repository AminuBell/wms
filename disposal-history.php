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
    <title>Disposal History | UrbanWaste-MS</title>
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
        <h3>Disposal History</h3>

        <div class="card-body">
        
          <!-- Tabs navs -->
<!-- Tabs navs -->
<ul class="nav nav-tabs nav-justified mb-3" id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a
      class="nav-link active"
      id="ex3-tab-1"
      data-mdb-toggle="tab"
      href="#ex3-tabs-1"
      role="tab"
      aria-controls="ex3-tabs-1"
      aria-selected="true"
      >Approved</a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="ex3-tab-2"
      data-mdb-toggle="tab"
      href="#ex3-tabs-2"
      role="tab"
      aria-controls="ex3-tabs-2"
      aria-selected="false"
      >Pending</a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="ex3-tab-3"
      data-mdb-toggle="tab"
      href="#ex3-tabs-3"
      role="tab"
      aria-controls="ex3-tabs-3"
      aria-selected="false"
      >Disapproved</a
    >
  </li>
</ul>
<!-- Tabs navs -->

<!-- Tabs content -->
<div class="tab-content" id="ex2-content">
    <div
      class="tab-pane fade show active"
      id="ex3-tabs-1"
      role="tabpanel"
      aria-labelledby="ex3-tab-1"
    >
      <!-- content for approved -->
      <table class="table caption-top">
                <caption>
                  List of Requests
                </caption>
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Request ID</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Day</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                    

                  </tr>
                </thead>
                <?php
                $id = $_SESSION["login"];
                $result = mysqli_query($conn,"SELECT * FROM `request` WHERE user_ID = '$id' AND status = '1'");
                $count = 1;
                while($row = mysqli_fetch_assoc($result)){
                  ?>
                      <tr>
                        <td scope="row"><?php echo $count; ?></td>
                        <td><?php echo $row["request_ID"]; ?></td>
                        <td><?php echo $row["date"]; ?></td>
                        <td><?php echo $row["time"]; ?></td>
                        <td><?php echo $row["day"]; ?></td>
                        <td>
                          <?php echo "Approved";?>
                        </td>
                        <td> 
                            <i class="fa fa-thumbs-up" title="Approved Request"></i>
                        </td>
                    </tr>

                  <?php
                  $count++;
                }

                ?>

                <tbody>
          </table>

    </div>
    <div
      class="tab-pane fade"
      id="ex3-tabs-2"
      role="tabpanel"
      aria-labelledby="ex3-tab-2"
    >
      <!-- content for pending -->

      <table class="table caption-top">
                <caption>
                  List of Requests
                </caption>
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Request ID</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Day</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                    

                  </tr>
                </thead>
                <?php
                $id = $_SESSION["login"];
                $result = mysqli_query($conn,"SELECT * FROM `request` WHERE user_ID = '$id' AND status = '0'");
                $count = 1;
                while($row = mysqli_fetch_assoc($result)){
                  ?>
                      <tr>
                        <td scope="row"><?php echo $count; ?></td>
                        <td><?php echo $row["request_ID"]; ?></td>
                        <td><?php echo $row["date"]; ?></td>
                        <td><?php echo $row["time"]; ?></td>
                        <td><?php echo $row["day"]; ?></td>
                        <td>
                          <?php echo "Pending Request";?>
                        </td>
                        <td> 
                          <a href="./helper/request.php?id=<?php echo $row["id"]; ?>"><i class="fa fa-bell" style="color:#343a40;" title="Pending Request"></i> </a>
                        </td>
                    </tr>

                  <?php
                  $count++;
                }

                ?>

                <tbody>
          </table>

    </div>
    <div
      class="tab-pane fade"
      id="ex3-tabs-3"
      role="tabpanel"
      aria-labelledby="ex3-tab-3"
    >
     <!-- content for disapproved -->
     <table class="table caption-top">
                <caption>
                  List of Requests
                </caption>
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Request ID</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Day</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                    

                  </tr>
                </thead>
                <?php
                $id = $_SESSION["login"];
                $result = mysqli_query($conn,"SELECT * FROM `request` WHERE user_ID = '$id' AND status = '2'");
                $count = 1;
                while($row = mysqli_fetch_assoc($result)){
                  ?>
                      <tr>
                        <td scope="row"><?php echo $count; ?></td>
                        <td><?php echo $row["request_ID"]; ?></td>
                        <td><?php echo $row["date"]; ?></td>
                        <td><?php echo $row["time"]; ?></td>
                        <td><?php echo $row["day"]; ?></td>
                        <td>
                          <?php echo "Canceled";?>
                        </td>
                        <td> 
                           <i class="fa fa-ban" title="Canceled Request"></i> 

                        </td>
                    </tr>

                  <?php
                  $count++;
                }

                ?>

                <tbody>
          </table>

    </div>
</div>
<!-- Tabs content -->
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
    <!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"
></script>
  </body>
</html>
