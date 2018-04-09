<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);

	require_once('phpscripts/config.php');

	$ip = $_SERVER['REMOTE_ADDR'];
	//echo $ip;
	if(isset($_POST['submit'])){
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		if($username !== "" && $password !== "") {
			$result = logIn($username, $password, $ip);
			$message = $result;
		}else{
			$message = "Please fill in the required fields";
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/main.css">
<title>Database Portal Login</title>
</head>
<body id="backgroundImageLogin">
	<?php if(!empty($message)){echo "<div id='errorMessages'>${message}</div>";} ?>
	<div id="outer">
		<div id="container1">
	<form action="admin_login.php" id="loginForm" method="post">
		<label for="username">Username:</label>
		<input type="text" name="username" class="form-control" id="username" value="">
		<br>
		<label for="password">Password:</label>
		<input type="password" name="password" class="form-control" id="password" value="">
		<br>
		<input type="submit" class="btn btn-primary" name="submit" value="Login">
	</form>
</div>
</div>
</body>
</html>
