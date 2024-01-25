<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign Up</title>
	<link rel="stylesheet" href="./css/style.css">
</head>

<body>
	<div class="login">
		<h1>Sing Up</h1>
		<form method="post">
			<label for="fname">
				<i class="bi bi-people-fill"></i>
			</label>
			<input type="text" placeholder="First Name" id="fname">

			<label for="lname">
				<i class="bi bi-people-fill"></i>
			</label>
			<input type="text" placeholder="Last Name" id="lname">

			<label for="username">
				<i class="bi bi-person-fill"></i>
			</label>
			<input type="text" placeholder="Username" id="uname" name="uname">

			<label for="phn">
				<i class="bi bi-telephone-fill"></i>
			</label>
			<input type="text" placeholder="Phone Number" id="phn">

			<label for="password">
				<i class="bi bi-lock-fill"></i>
			</label>
			<input type="password" placeholder="Password" id="pwd" name="pwd">

			<input type="text" hidden id="usertype" value="user">

			<div style="display: flex;width:100%;">
				<input type="button" value="Sing in" onclick="logInComponents()">
				<button type="button" onclick="register()">Register</button>
			</div>
		</form>
	</div>
</body>
<script src="./js/script.js"></script>
<script src="../assets/setting/sweetalert2.min.js"></script>
<script src="../assets/setting/sweetalert2.all.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</html>