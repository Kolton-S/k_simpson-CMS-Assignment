<?php
	require_once('phpscripts/config.php');
	$tbl = "tbl_user";
	$users = getAll($tbl);
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/main.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<title>Database Portal - Delete User</title>
</head>
<body>
	<?php
		include('layouts/nav.php');
?>
	<div id="outer2">
		<div id="container2">
			<h3>Choose a User</h3>
		<ul class="list-group">
					<li class="list-group-item">
							<ul class="list-group collapse">
								<?php
									while($row = mysqli_fetch_array($users)) {
										echo "{$row['user_fname']}<a href=\"phpscripts/caller.php?caller_id=delete&id={$row['user_id']}\">Delete User</a><br>";
									}
								?>
							</ul>
					</li>
			</ul>
</div>
</div>
</html>
