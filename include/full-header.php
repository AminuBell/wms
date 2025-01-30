<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
    <div class="container">
        <h1 class="mb-0 h5 py-1 mr-3">
            <a class="navbar-brand" href="index.html">
                <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="" /> UrbanWaste-MS
            </a>
        </h1>
        <?php
         if(!(isset($_SESSION["login"]))){
             ?>
             <a href="register.php" class="btn btn-outline-light py-1 ml-auto mx-sm-0 order-0 order-sm-last">
                Register Now
            </a>
            <?php

        }
        ?>
        
        <button class="navbar-toggler ml-3" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#services"> Services </a>
                </li>
                <?php 
                if(isset($_SESSION["login"])){ 
                    include("include/sub-header.php");
                } 
              
            ?>
                
            </ul>
        </div>
    </div>
</nav>