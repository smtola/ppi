<?php 
    include "./auth/loginSession.php";
?>
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
    <?php include "./includes/navbar.php" ?>
    <!-- end navbar -->

    <!-- content app -->
    <div class="app-container">
        <?php
            if($_SESSION['usertype'] == 'admin'){
                ?>
                    <a href="" onclick="checkUserType('./ppi_information.php')">
                        <div class="app-box">
                            <img src="./assets/images/admin.png" alt="" width="80" height="80" style="display: block;margin:1rem auto;">
                            <span>PPI _Admin</span>
                        </div>
                    </a>
                    <a href="" onclick="checkUserType('../admin/home.php')">
                        <div class="app-box">
                            <img src="./assets/images/management.png" alt="" width="80" height="80" style="display: block;margin:1rem auto;">
                            <span>PPI MANAGEMENT</span>
                        </div>
                    </a>
                <?php
            }else if($_SESSION['usertype'] == 'editor'){
                ?>
                    <a href="" onclick="checkUserType('../admin/home.php')">
                        <div class="app-box">
                            <img src="./assets/images/management.png" alt="" width="80" height="80" style="display: block;margin:1rem auto;">
                            <span>PPI MANAGEMENT</span>
                        </div>
                    </a>
                <?php
            }else if ($_SESSION['usertype'] == 'user'){
                ?>
                    <h1 style="color:#343a40;background:#99e9f2;border:1px solid #1098ad;text-align: center;padding:1rem 3rem;border-radius:4px;">Welcome to Admin Page!</h1>
                <?php
            }
            ?>
    </div>
    <!-- end content app -->
</body>
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/modal_script.js"></script>
    <script src="./assets/setting/sweetalert2.min.js"></script>
    <script src="./assets/setting/sweetalert2.all.min.js"></script>
</html>
<input type="text" id="usertype" hidden  value="<?php echo $_SESSION['usertype'];?>">

