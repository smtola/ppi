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
        $_SESSION['user'] = $user;
        $_SESSION['pwd'] = $pwd;
        while ($row = mysqli_fetch_assoc($query)) {
            $_SESSION['fname'] = $row['firstname'];
            $_SESSION['lname'] = $row['lastname'];
            $_SESSION['phonenum'] = $row['phonenumber'];
            $_SESSION['usertype'] = $row['type'];
        }
        echo ("done");
    }else{
        echo ("failed");
    }
?>