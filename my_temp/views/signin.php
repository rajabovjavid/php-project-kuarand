<?php

include "auth_check.php";

if(isset($_SESSION["email"]))
    header("Location:index.php");
?>


<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>KuaRand</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="../styles/signup_style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
    <h1>Login</h1>
    
		<div class="main-agileinfo">
			<div class="agileits-top">
        <button><a href="index.php">Back To Home</a></button>
                <small>
                    <?php
                    echo apcu_fetch("message");
                    apcu_delete("message")
                    ?>
                </small>
				<form action="../api_routes/customer_routes/signin_cus_route.php" method="post">
					<input class="text email" type="email" name="cus_email" placeholder="Email" required="">
					<input class="text" type="password" name="cus_password" placeholder="Password" required="">
					<input type="submit" name="user_signin" value="SIGN IN">
				</form>
				<p>Don't have an Account? <a href="signup.php"> Sign Up!</a></p>
                <p>If you are a hairdresser or admin <a href="../nedmin/production/login.php"> Click Here</a></p>
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>© 2018 Colorlib Signup Form. All rights reserved | Design by <a href="https://colorlib.com/" target="_blank">Colorlib</a></p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>