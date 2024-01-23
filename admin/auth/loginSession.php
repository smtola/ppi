<?php
    session_start();
    if (!$_SESSION['user'] && !$_SESSION['pwd']) {
        header('location:../admin/auth/login.php');
    }
?>