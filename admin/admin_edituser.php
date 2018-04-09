<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);
	require_once('phpscripts/config.php');
	//confirm_logged_in();
	$id = $_SESSION['user_id'];
	//echo $id;
	$tbl = "tbl_user";
	$col = "user_id";
	$popForm = getSingle($tbl, $col, $id);
	$found_user = mysqli_fetch_array($popForm, MYSQLI_ASSOC);
	//echo $found_user;

	if(isset($_POST['submit'])) {
		$fname = trim($_POST['fname']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$email = trim($_POST['email']);
		$result = editUser($id, $fname, $username, $password, $email);
			$message = $result;
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
<title>Database Portal - Edit User</title>
</head>
<body>
	<?php
		include('layouts/nav.php');
?>
	<?php if(!empty($message)){echo $message;} ?>
	<div class='col-sm-8 col-xs-8 addMovieCon'>
	<form action="admin_edituser.php" method="post">
	<label>First Name:</label>
	<input type="text" name="fname" class='form-control' value="<?php echo $found_user['user_fname']; ?>
"><br><br>

	<label>Username:</label>
	<input type="text" name="username" class='form-control' value="<?php echo $found_user['user_name']; ?>
"><br><br>

	<label>Password:</label>
	<input type="text" name="password" class='form-control' value="<?php echo $found_user['user_pass']; ?>
"><br><br>

	<label>Email:</label>
	<input type="text" name="email" class='form-control' value="<?php echo $found_user['user_email']; ?>
"><br><br>
	<input type="submit" name="submit" class='btn btn-primary' value="Edit Account">
	</form>
</div>
</body>
</html>
