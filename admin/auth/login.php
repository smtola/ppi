<?php
session_start();
session_destroy()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <!--ring div starts here-->
    <div class="ring">
        <i style="--clr:#00ff0a;"></i>
        <i style="--clr:#ff0057;"></i>
        <i style="--clr:#fffd44;"></i>
        <div class="login">
            <h2>Login</h2>
            <div class="inputBx">
                <input type="text" placeholder="Username" require id="uname">
            </div>
            <div class="inputBx">
                <input type="password" placeholder="Password" require id="pwd">
            </div>
            <div class="inputBx">
                <input type="submit" value="Sign in" onclick="login()">
            </div>
            <div class="links">
                <a href="#">Forget Password</a>
            </div>
        </div>
    </div>
    <!--ring div ends here-->
</body>
<?php
include "../auth/include/link-js.php";
?>

</html>
<script type="text/javascript">
    function login() {
        var user = $('#uname').val()
        var pwd = $('#pwd').val()
        if (user == '' && pwd == '') {
            $('#uname').focus()
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "error",
                title: "Fill your username and password!"
            });
            exit()
        } else if (user == '') {
            $('#uname').focus()
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "error",
                title: "Filling your username!"
            });
            exit()
        } else if (pwd == '') {
            $('#pwd').focus()
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "error",
                title: "Filling your password!"
            });
            exit()
        }
        $.post('./checkLogin.php', {
            user: user,
            pwd: pwd
        }, function(data) {
            if (data == 'done') {
                window.open('../../admin/index.php', '_self');
            } else {
                $('#uname').select()
                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 2000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    }
                });
                Toast.fire({
                    icon: "error",
                    title: "Username and password incorrect!"
                });
            }
        })
    }
    document.onkeypress = function(data) {
        var key_press = String.fromCharCode(data.keyCode);
        var key_code = data.keyCode
        if (key_code == 13) {
            login();
        }
    }
</script>