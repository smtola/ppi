
function login() {
    var users = document.querySelector('#uname');
    var pwds = document.querySelector('#pwd');
    var user = users.value;
    var pwd = pwds.value;

    if (user == '' && pwd == '') {
        user.focus
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
            title: "Username and password is required!"
        });
        exit()
    } else if (user == '') {
        user.focus
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
            title: "Username is required!"
        });
        exit()
    } else if (pwd == '') {
        user.focus
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
            title: "Password is required!"
        });
        exit()
    }
    $.ajax({
        type: "post",
        url: "../auth/checkLogin.php",
        data : {
            user: user,
            pwd: pwd
        },
        success: function(ref) {
        if (ref == 'done') {
            user.select
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
        } else {
            window.open('../index.php', '_self');
        }
        }
    })

}
document.onkeypress = function(data) {
    var key_press = String.fromCharCode(data.keyCode);
    var key_code = data.keyCode;
    if (key_code == 13) {
        login();
    }
}