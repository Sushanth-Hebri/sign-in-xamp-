<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="sign-in.css">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
	<style>
		.loglink {
			color: white;
		}
		input[type="submit"] {
			padding: 5px 10px;
			background-color: #4CAF50;
			color: white;
			border: none;
			cursor: pointer;
		}
	</style>
</head>

<body>
	<div class="main">

		<input type="checkbox" id="chk" aria-hidden="true">

		<div class="signup">
			<form action="register.php" method="POST">
				<label for="chk" aria-hidden="true">Sign up</label>

				<input type="text" name="user_name" placeholder="User name" required="">
				<input type="email" name="email" placeholder="Email" required="">
				<input type="password" name="password" placeholder="Password" required="">
				<input type="submit" value="Sign Up">
			</form>
		</div>

		<div class="login">
<form action="login.php" method="POST">
			<label for="chk" aria-hidden="true">Login</label>
			<input type="email" name="email" placeholder="Email">
			<input type="password" name="password" placeholder="Password">
			<input type="submit" value="Sign In">

			<!-- <a href="Home.html" class="loglink"> <button id="btnSubmit">Login</button></a> -->

			<a href="forgotpassword.html" alt="notworking.html">
				<h5 style="color:blue;margin:3px;">Forgot password?</h5>
			</a>


			<a href="Home.html" alt="notworking.html">
				<h5 style="color:rgb(255, 4, 0);margin:9px;"></h5>
			</a>
</form>

		</div>
	</div>
	<script>

		document.getElementById("btnSubmit").addEventListener("click", function () {
			localStorage.setItem("alert", "true");
			window.location.href = "Home.html";
		});
	</script>
</body>

</html>