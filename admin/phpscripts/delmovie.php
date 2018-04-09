<?php
function delMovie($id) {
  //echo $id;
  include('connect.php');
  $delstring = "DELETE FROM tbl_movies WHERE movies_id={$id}";
  $delquery = mysqli_query($link, $delstring);
  if($delquery){
    redirect_to("../admin_index.php");
  }else{
    $message = "F%*k, call security...";
    return $message;
  }
  mysqli_close($link);
}
 ?>
