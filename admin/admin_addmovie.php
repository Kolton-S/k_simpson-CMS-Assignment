<?php
	require_once('phpscripts/config.php');

	$tbl="tbl_genre";
	$genQuery = getAll($tbl);

	if(isset($_POST['submit'])) {
		$title = $_POST['title'];
		$cover = $_FILES['cover'];
		$year = $_POST['year'];
		$runtime = $_POST['runtime'];
		$storyline = $_POST['storyline'];
		$trailer = $_POST['trailer'];
		$release = $_POST['release'];
		$genre = $_POST['genList'];
		$uploadMovie = addMovie($title, $cover, $year, $runtime, $storyline, $trailer, $release, $genre);
		$message = $uploadMovie;
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
<!-- <script src="js/dragdrop.js"></script> -->
<title>Database Portal - Add Movie</title>
</head>
<body>
	<?php
		include('layouts/nav.php');
?>
	<?php if(!empty($message)){echo $message;} ?>

<div class='col-sm-10 col-xs-10 addMovieCon'>
	<form action="admin_addmovie.php" method="post" id="mainForm" enctype="multipart/form-data">
						<div class='list mb-2'>
								<div class='list-header'>
										<a class='list-header-image'>
											<img src="#" id="tempImg" alt="Image Preview">
										</a>
								</div>
								<div class='list-content'>
									<label for="title">Movie Title:</label>
									<input name="title" class="form-control" type="text" id="title" value=""><br><br>
									<label for="upload-files">Movie Cover:</label>
									<input type="file" name="cover" id="upload-files">
									<img id="tempImg" src="#" alt="Image Preview">
									<!-- <h4>Or drag and drop files below</h4>
									<div class="upload-drop-zone" id="drop-zone">
										Just drag and drop files here
									</div> --><br><br>
									<label for="year">Movie Year:</label>
									<input name="year" class="form-control" type="text" id="year" value=""><br><br>
									<label for="runtime">Movie Runtime</label>
									<input name="runtime" class="form-control" type="text" id="runtime" value=""><br><br>
									<label for="storyline">Movie Storyline</label>
									<input name="storyline" class="form-control" type="text" id="storyline" value=""><br><br>
									<label for="trailer">Movie Trailer</label>
									<input name="trailer" class="form-control" type="text" id="trailer" value=""><br><br>
									<label for="release">Movie Release</label>
									<input name="release" class="form-control" type="text" id="release" value=""><br><br>
									<select name="genList">
										<option value="">Please select a genre</option>
										<?php
											while($row = mysqli_fetch_array($genQuery)){
												echo "<option value=\"{$row['genre_id']}\">{$row['genre_name']}</option>";
											}
										?>
									</select>
									<input type="submit" class="btn btn-primary" name="submit" value="Add Movie">
								</div>
						</div>
					</form>
				</div>

<script>
function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#tempImg').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#upload-files").change(function() {
  readURL(this);
});
</script>
</body>
</html>
