<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);
	require_once('phpscripts/config.php');
	confirm_logged_in();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/main.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<title>Database Portal - Home</title>
</head>
<body>
	<?php
		include('layouts/nav.php');
?>
	<div id="outer2">
		<div id="container2">
			<h3>Choose an Action</h3>
		<ul class="list-group">
					<li class="list-group-item">
					<a data-toggle="collapse">User Actions</a>
							<ul class="list-group collapse">
									<a class="btn btn-primary tab-pane homeButton" href="admin_createuser.php">Create User</a><br>
									<a class="btn btn-primary tab-pane homeButton" href="admin_edituser.php">Edit User</a><br>
									<a class="btn btn-primary tab-pane homeButton" href="admin_deleteuser.php">Delete user</a>
							</ul>
					</li>
					<li class="list-group-item">
					<a data-toggle="collapse">Movie Actions</a>
							<ul class="list-group collapse">
									<a class="btn btn-primary tab-pane homeButton" href="admin_addmovie.php">Add Movie</a><br>
									<a class="btn btn-primary tab-pane homeButton" href="admin_delmovie.php">Delete Movie</a><br>
									<a class="btn btn-primary tab-pane homeButton" href="admin_editall.php">Edit All</a>
							</ul>
					</li>
			</ul>
</div>
</div>

</body>
</html>
