<?php
if($_SESSION["status"] !=1){
    ?>
        <li class="nav-item">
                <a class="nav-link" href="./disposal-request.php">Disposal Request</a>
        </li>
    <?php
}

?>

<?php
if($_SESSION["status"] == 1){
    ?>
        <li class="nav-item">
            <a class="nav-link" href="./in-request.php">In-Requset </a>
        </li>
    <?php
}else{
    ?>
        <li class="nav-item">
            <a class="nav-link" href="./disposal-history.php">Disposal History </a>
        </li>
    <?php
}

?>


<li class="dropdown nav-item">
    <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">
        My Profile
        <span class="caret"></span></a>
    <ul class="dropdown-menu bg-dark text-white">
        <?php
        include_once("dbConnection/connector.php");
        $id = $_SESSION["login"];

        $sql = "SELECT * FROM `user` WHERE id = '$id'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);

        ?>
        <li class="nav-item"><a href="profile.php" class="nav-link"><i class="fa fa-user"></i> <?php echo $row["userName"];?> </a></li>
        <li class="nav-item"><a href="contact.php" class="nav-link"><i class="fa fa-comment"></i> Comments</a></li>
        <li class="nav-item"><a href="function/logout.php" class="nav-link"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
    </ul>
</li>