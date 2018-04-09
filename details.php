<?php
	require_once('admin/phpscripts/config.php');
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$tbl = "tbl_movies";
		$col = "movies_id";
		$getSingle = getSingle($tbl, $col, $id);
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/main.css">
<title>Details</title>
</head>
<body>
	<?php
		include('includes/nav.php');
?>
	<div class="container pushContent">
		<div class="row">
	<?php
		if(!is_string($getSingle)){
			$row = mysqli_fetch_array($getSingle);
			echo "<div class='col-sm-10 col-xs-10'>
									<div class='list mb-2'>
											<div class='list-header'>
													<a href=\"details.php?id={$row['movies_id']}\" class='list-header-image'>
														<img src=\"images/{$row['movies_cover']}\" alt=\"{$row['movies_title']}\">
													</a>
											</div>
											<div class='list-content'>
													<h2><a class='text-black'>{$row['movies_title']}</a></h2>
													<span class='list-meta'>
														<span class='list-meta-item'><i class'=fa fa-clock-o'></i>{$row['movies_year']}</span>
													</span>
													<span class='list-meta'>
														<span class='list-meta-item'><i class'=fa fa-clock-o'></i>{$row['movies_release']}</span>
													</span>
													<span class='list-meta'>
														<span class='list-meta-item'><i class'=fa fa-clock-o'></i>{$row['movies_runtime']}</span>
													</span>
													<p>{$row['movies_storyline']}</p>
											</div>
									</div>
							</div>";
		}else{
			echo "<p class=\"error\">{$getSingle}</p>";
		}
	?>
</div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
