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
    <link rel="stylesheet" href="./assets/css/theme.css">
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

    <div class="main">
        <div class="content-app">
            <span><a href="./ppi_information.php" style="text-decoration: none;color:#343a40;"><i class="bi bi-arrow-left"></i> PPI Information</a> / Courses</span>
        </div>

        <div class="content-lists">
            <div class="header">
                <input type="search" id="search" placeholder="Search" onkeyup="myFunction()">

                <button type="button" class="btn-add">Add</button>
            </div>

            <div class="lists">
                <table id="myTable">
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Savings</th>
                    </tr>
                    <tr>
                        <td>Peter</td>
                        <td>Griffin</td>
                        <td>$100</td>
                    </tr>
                    <tr>
                        <td>Lois</td>
                        <td>Griffin</td>
                        <td>$150</td>
                    </tr>
                    <tr>
                        <td>Joe</td>
                        <td>Swanson</td>
                        <td>$300</td>
                    </tr>
                    <tr>
                        <td>Cleveland</td>
                        <td>Brown</td>
                        <td>$250</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!-- end content app -->
</body>
<script src="./assets/js/script.js"></script>

</html>