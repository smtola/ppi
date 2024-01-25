<nav class="navbar">
    <div class="nav-container">
        <div class="logo">
            <a href="./" target="_parent">
                <img src="./assets/images/logo.jpg" alt="Logo" width="60" height="60" style="border-radius: 50%;">
            </a>
        </div>

        <div class="items-navbar">
            <ul class="list-items">
                <li>
                    <a onclick="closeFullscreen()" ondblclick="openFullscreen()" style="cursor: pointer;">
                        <i id="icon" class="bi bi-arrows-fullscreen" style="font-size: 19px;"></i>
                    </a>
                </li>
                <li>
                    <a href="../admin/index.php">
                        <i class="bi bi-grid" style="font-size: 20px;"></i>
                    </a>
                </li>
                <li>
                    <div class="dropdown">
                    <a onclick="myFunction()" class="dropbtn">
                        <i class="bi bi-person" style="font-size: 20px;"></i>
                        <span style="font-size: 18px;"><?php echo $_SESSION['user']?></span>
                    </a>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="../admin/myprofile.php">My Profile</a>
                        <a href="#">Change Password</a>
                        <a href="../admin/auth/login.php">Log out</a>
                    </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>