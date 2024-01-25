<?php
    include "../config/class.php";
    $object = new myclass;
    
    $fname = $_POST['fname'];  
    $lname = $_POST['lname'];  
    $uname = $_POST['uname'];  
    $phoneNum = $_POST['phoneNum'];  
    $pass = $_POST['pass'];  
    $pass = md5($pass);
    $userType = $_POST['userType'];  

    $field = array("firstname","lastname","username","password","type","phonenumber");
    $value = array("'$fname'","'$lname'","'$uname'","'$pass'","'$userType'","'$phoneNum'");
    $query = $object->insert("tblusers",$field,$value);

    if($query){
        echo "done";
    }else{
        echo 'fialed!';
    }
?>