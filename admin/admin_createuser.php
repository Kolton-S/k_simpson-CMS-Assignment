<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);
	require_once('phpscripts/config.php');
	confirm_logged_in();
	if(isset($_POST['submit'])) {
		$fname = trim($_POST['fname']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$email = trim($_POST['email']);
		$userlvl = $_POST['userlvl'];
		if(empty($userlvl)){
			$message = "Please select a user level.";
		}else{
			$result = createUser($fname, $username, $password, $email, $userlvl);
			$message = $result;
		}
	}

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/main.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<title>Database Portal - Create User</title>
</head>
<body>
	<?php
		include('layouts/nav.php');
	?>
	<?php if(!empty($message)){echo $message;} ?>.
	<div class='col-sm-8 col-xs-8 addMovieCon'>
	<form action="admin_createuser.php" method="post">
	<label>First Name:</label>
	<input type="text" name="fname" class='form-control' value="	<?php if(!empty($fname)){echo $fname;} ?>
"><br><br>

	<label>Username:</label>
	<input type="text" name="username" class='form-control' value="	<?php if(!empty($username)){echo $username;} ?>
"><br><br>

	<label>Password:</label>
	<input type="text" name="password" class='form-control' value="	<?php if(!empty($password)){echo $password;} ?>
"><br><br>

	<label>Email:</label>
	<input type="text" name="email" class='form-control' value="	<?php if(!empty($email)){echo $email;} ?>
"><br><br>

	<label>User Level:</label>
	<select name="userlvl" class='form-control'>
		<option value="">Please select a user level</option>
		<option value="2">Web Admin</option>
		<option value="1">Web Master</option>
	</select><br><br>

	<input type="submit" name="submit" class='btn btn-primary' value="Create User">
	</form>
</div>
</body>
</html>
