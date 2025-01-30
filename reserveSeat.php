<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Business | Bus Booking System</title>
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
              <a class="nav-link" href="systemconfig.html"> System Config </a>
            </li>
            <li class="nav-item active">
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
        <h3>Business Infomation</h3>
        <form class="needs-validation m-4" novalidate action="referee.html">
          <div class="form-row">
            <div class="form-group col-12">
              <label for="inputMailForm"
                >Business Location/Address
                <span class="text-danger font-weight-bold">*</span></label
              >
              <input
                id="inputMailForm"
                type="text"
                class="form-control"
                placeholder="Enter business location address"
                required
              />
              <div class="invalid-feedback">
                Please fill the business location address field
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="inputMailForm"
                >Highest Qualification
                <span class="text-danger font-weight-bold">*</span></label
              >
              <select class="custom-select" id="inputGroupSelect04" required>
                <option selected disabled></option>
                <option value="Primary Education">Primary Education</option>
                <option value="Secondary Education">Secondary Education</option>
                <option value="Undergraduate">Undergraduate</option>
                <option value="Graduate">Graduate</option>
                <option value="Postgraduate">Postgraduate</option>
                <option value="Others">Others</option>
              </select>
              <div class="invalid-feedback">
                Please fill the qualification field
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="inputMailForm"
                >Working Experience
                <span class="text-danger font-weight-bold">*</span></label
              >
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">from</span>
                </div>
                <input
                  type="number"
                  class="form-control"
                  placeholder="eg: 2015"
                  maxlength="4"
                  required
                />
                <div class="input-group-prepend">
                  <span class="input-group-text">to</span>
                </div>
                <input
                  type="number"
                  class="form-control"
                  placeholder="eg: 2021"
                  maxlength="4"
                  required
                />
                <div class="invalid-feedback">
                  Please fill the working experience from-to field
                </div>
              </div>
            </div>
          </div>

          <div
            class="btn-toolbar justify-content-between"
            role="toolbar"
            aria-label="Toolbar with button groups"
          >
            <div class="btn-group" role="group" aria-label="First group">
              <a href="profile.html" class="btn btn-light">Back</a>
            </div>
            <div class="input-group">
              <button type="submit" class="btn btn-primary">
                Save and continue
              </button>
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
