<?php
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="login">
			<h1>Login</h1>
			<form  method="post">
				<label for="username">
                    <i class="bi bi-person-fill"></i>
				</label>
				<input type="text" placeholder="Username" id="uname" name="uname">
				<label for="password">
                    <i class="bi bi-lock-fill"></i>
				</label>
				<input type="password" placeholder="Password" id="pwd" name="pwd">
				<input type="button" value="Login" onclick="login()">
			</form>
		</div>
</body>
<script src="./js/scripts.js"></script>
<script src="../assets/setting/sweetalert2.min.js"></script>
<script src="../assets/setting/sweetalert2.all.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</html>