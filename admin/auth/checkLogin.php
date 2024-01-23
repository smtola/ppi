<?php
    session_start();
    include "../config/class.php";
    $object = new myclass;

    $user = $_POST['user'];
    $pwd = $_POST['pwd'];
    $pwd = md5($pwd);

    $query = $object->login("tblusers","username","password",$user,$pwd);

    $count = mysqli_num_rows($query);
    if($count > 0){
        $_SESSION['users'] = $user;
        $_SESSION['pass'] = $pwd;
        while ($row = mysqli_fetch_assoc($query)) {
            $_SESSION['usertype'] = $row['usertype'];
        }
        echo "done";
    }else{
        echo "done";
    }
?>