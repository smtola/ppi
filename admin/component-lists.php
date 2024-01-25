<?php
include "./auth/loginSession.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPP Store</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <style>
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css");
    </style>
</head>

<body>
    <!-- navbar -->
    <?php include "./includes/navbar.php" ?>
    <!-- end navbar -->

    <!-- content app -->
    <?php include "./includes/menu.php" ?>

    <?php
    function ppiinfo_components()
    {
    ?>
        <!-- PPi information -->
        <div class="main">
            <div class="content-app">
                <span>PPI INFORMATION</span>
            </div>

            <div class="lists-manager">
                <ul>
                    <li class="list-link">
                        <a href="./pictures.php">Pictures</a>
                    </li>
                    <li class="list-link">
                        <a href="./courses.php">Courses</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end -->
    <?php
    }
    function home_components()
    {
    ?>
        <!-- PPi information -->
        <div class="main">
            <div class="content-app">
                <span>Home</span>
            </div>

            
        </div>
        <!-- end -->
    <?php
    }

    function myprofile_components()
    {
    ?>
        <!-- PPi information -->
        <div class="main">
            <div class="content-app">
                <span>My Profile</span>
            </div>

            <div class="container_profile">
                <div class="body_pofile">
                    <div class="profile_items">
                        <img src="./assets/images/user.png">
                    </div>
                    <div class="profile_items">
                        <button type="button"type="button">Update Profile</button>
                    </div>
                    <hr>
                    <div class="profile_items">
                        <h3>First Name : <span> <?php echo $_SESSION['fname'];?></span></h3>
                        <h3>Last Name : <span> <?php echo $_SESSION['lname'];?></span></h3>
                    </div>
                    <div  class="profile_items">
                        <h3>Username : <span><?php echo $_SESSION['user'];?></span></h3>
                        <h3>Phone Number : <span><?php echo $_SESSION['phonenum'];?></span></h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- end -->
    <?php
    }

    ?>
    <!-- end content app -->
</body>
<script src="./assets/js/scripts.js"></script>
</html>