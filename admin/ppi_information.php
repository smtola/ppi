<?php
include "./auth/loginSession.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPI Management</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
    <style>
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css");
    </style>
</head>

<body>
    <!-- navbar -->
    <?php include "./include/navbar.php" ?>
    <!-- end navbar -->

    <!-- content app -->
    <?php include "./include/menu.php" ?>

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
    <!-- end content app -->
</body>
<script src="./assets/js/scripts.js"></script>

</html>