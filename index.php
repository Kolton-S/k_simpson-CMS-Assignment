<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);
	require_once('admin/phpscripts/config.php');
	if(isset($_GET['filter'])){
		$tbl = "tbl_movies";
		$tbl2 = "tbl_genre";
		$tbl3 = "tbl_mov_genre";
		$col = "movies_id";
		$col2 = "genre_id";
		$col3 = "genre_name";
		$filter = $_GET['filter'];
		$getMovies = filterType($tbl, $tbl2, $tbl3, $col, $col2, $col3, $filter);
	}else{
		$tbl = "tbl_movies";
		$getMovies = getAll($tbl);
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/main.css">
<title>The Movie Selection Database</title>
</head>
<body>
	<?php
		include('includes/nav.php');
?>
<div class="container pushContent">
	<div class="row">
<?php
		if(!is_string($getMovies)){
			while($row = mysqli_fetch_array($getMovies)){
				echo "<div class='col-sm-6 col-xs-6'>
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
				                    	<a href=\"details.php?id={$row['movies_id']}\" class='list-meta-item'><i class='fa fa-star'></i>More Details...</a>
				                    </span>
				                </div>
				            </div>
				        </div>";
			}
		}else{
			echo "<p class=\"error\">{$getMovies}</p>";
		}
?>
</div>
</div>


</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
