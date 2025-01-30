<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>System Config | Bus Booking System</title>
    <meta
      name="description"
      content="Association of Point of Sales Users Membership Registation"
    />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="img/logo.jpg" type="image/gif" sizes="16x16" />
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
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark text-white">
      <div class="container">
        <h1 class="mb-0 h5 py-1 mr-3">
          <a class="navbar-brand" href="index.html">
            <img
              src="img/logo.jpg"
              width="30"
              height="30"
              class="d-inline-block align-top"
              alt="BusBookingSys Logo"
            />
            BusBookingSys</a
          >
        </h1>
        <a
          href="register.html"
          class="btn btn-outline-light py-1 ml-auto mx-sm-0 order-0 order-sm-last"
        >
          Register Now
        </a>
        <button
          class="navbar-toggler ml-3"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.html">My Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="systemconfig.html">
                System Config
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="reserveSeat.html">Reserve a Seat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="bookedSeat.html">Booked History </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- content -->
    <div class="container flex-grow-1 flex-shrink-0 py-5">
      <div class="mb-5 p-4 bg-white shadow-sm">
        <h3>System Configuration</h3>
        <hr />
        <form class="needs-validation m-4" novalidate>
          <div class="form-row">
            <div class="col-md-5">
              <h6 class="card-subtitle mb-2 text-muted">Manage BUS</h6>
              <div class="form-group col-md-12">
                <label for="inputMailForm"
                  >BUS name
                  <span class="text-danger font-weight-bold">*</span></label
                >
                <input
                  type="text"
                  class="form-control"
                  placeholder="Enter BUS name"
                  required
                />
                <div class="invalid-feedback">
                  Please fill the BUS name field
                </div>
              </div>

              <div class="form-group col-md-12">
                <label for="inputMailForm"
                  >BUS capacity
                  <span class="text-danger font-weight-bold">*</span></label
                >
                <input
                  type="number"
                  class="form-control"
                  placeholder="Enter BUS capacity"
                  required
                />
                <div class="invalid-feedback">
                  Please fill the BUS capacity field
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
                  <button type="submit" class="btn btn-primary px-5">
                    Submit
                  </button>
                </div>
              </div>
            </div>

            <div class="col-md-7">
              <h6 class="card-subtitle mb-2 text-muted">List of BUSES</h6>
              <table class="table caption-top">
                <caption>
                  List of BUSES
                </caption>
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Capacity</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>MakaPolo</td>
                    <td>100</td>
                    <td>
                      <a href="#" class="btn btn-sm btn-outline-primary">
                        Edit
                      </a>
                      <a href="#" class="btn btn-sm btn-outline-danger">
                        Delete
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </form>

        <hr />

        <form class="needs-validation m-4" novalidate>
          <div class="form-row">
            <div class="col-md-5">
              <h6 class="card-subtitle mb-2 text-muted">Manage Location</h6>
              <div class="form-group col-md-12">
                <label for="inputMailForm"
                  >Terminal name
                  <span class="text-danger font-weight-bold">*</span></label
                >
                <input
                  type="text"
                  class="form-control"
                  placeholder="Enter terminal name"
                  required
                />
                <div class="invalid-feedback">
                  Please fill the terminal name field
                </div>
              </div>

              <div class="form-group col-md-12">
                <label for="inputMailForm">
                  Address
                  <span class="text-danger font-weight-bold">*</span></label
                >
                <input
                  type="text"
                  class="form-control"
                  placeholder="Enter address"
                  required
                />
                <div class="invalid-feedback">
                  Please fill the address field
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
                  <button type="submit" class="btn btn-primary px-5">
                    Submit
                  </button>
                </div>
              </div>
            </div>

            <div class="col-md-7">
              <h6 class="card-subtitle mb-2 text-muted">List of Locations</h6>
              <table class="table caption-top">
                <caption>
                  List of Locations
                </caption>
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>CASS</td>
                    <td>Sabon Tasha Branch</td>
                    <td>
                      <a href="#" class="btn btn-sm btn-outline-primary">
                        Edit
                      </a>
                      <a href="#" class="btn btn-sm btn-outline-danger">
                        Delete
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- footer -->
    <footer class="p-3 mt-auto bg-white shadow">
      <div class="container">
        <p class="text-muted float-left">
          <b>Supervisor</b>: Dr. Mal. Abbas Yusuf
        </p>
        <p class="float-right">
          <b>Developed by</b>: Bashir Abdulwahab - KPT/CST/19/46763
        </p>
      </div>
    </footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
