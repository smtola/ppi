<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPP Store</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/theme.css">
    <link rel="stylesheet" href="./assets/css/modal_style.css">
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
            <span><a href="./ppi_information.php" style="text-decoration: none;color:#343a40;"><i class="bi bi-arrow-left"></i> PPI Information</a> / Pictures</span>
        </div>

        <div class="content-lists">
            <div class="header">
                <input type="search" id="search" placeholder="Search" onkeyup="myFunction()">

                <button type="button" class="btn-add" id="myBtn">Add</button>
            </div>

            <div class="lists">
                <table id="myTable">
                    <tr>
                        <th>#</th>
                        <th>File</th>
                        <th>File Name</th>
                        <th>Type</th>
                        <th></th>
                    </tr>
                    <?php
                    include('./config/class.php');
                    $obj = new myclass;
                    $i = 0;
                    $query = $obj->select("tblpictures");
                    while ($row = mysqli_fetch_assoc($query)) {
                        $files = $row['file'];
                        $types = $row['type'];
                        $sizes = $row['size'];
                        $i++;
                    ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td>
                                <?php echo $files; ?>
                            </td>
                            <td>
                                <a target="_blank" href="./upload/<?php echo $files; ?>">
                                    <img src="./upload/<?php echo $files; ?>" alt="<?php echo $files; ?>" width="50" height="50">
                                </a>
                            </td>
                            <td><?php echo $types; ?></td>
                            <td>
                                <div class="btnGroup">
                                    <button class="btnEdit" id="onEdit"><i class="bi bi-pencil-square"></i> Edit</button>|
                                    <button class="btnDelete"><i class="bi bi-trash"></i> Delete</button>
                                </div>
                            </td>
                        </tr>
                    <?php  } ?>
                </table>
            </div>
        </div>
    </div>
    <!-- end content app -->

    <!-- Modal Add,Edit,Delete-->
    <?php
        include "./addImages.php";
        include "./editPictures.php";
    ?>
    <!-- End Modal -->
</body>
<script src="./assets/js/scripts.js"></script>
<script src="./assets/js/modal_script.js"></script>

</html>