<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPI Management</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <style>
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css");
    </style>
</head>

<body>
    <!-- navbar -->
    <?php include "./include/navbar.php" ?>
    <!-- end navbar -->

    <!-- content app -->
    <div class="app-container">
        <a href="./ppi_information.php">
            <div class="app-box">
                <img src="./assets/images/admin.png" alt="" width="80" height="80" style="display: block;margin:1rem auto;">
                <span>PPI _Admin</span>
            </div>
        </a>
        <a href="./home.php">
            <div class="app-box">
                <img src="./assets/images/management.png" alt="" width="80" height="80" style="display: block;margin:1rem auto;">
                <span>PPI MANAGEMENT</span>
            </div>
        </a>
    </div>
    <!-- end content app -->
</body>
<script src="./assets/js/scripts.js"></script>
<?php include "./include/link-js.php" ?>

</html>