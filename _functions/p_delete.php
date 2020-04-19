<?php
// include database connection file
include_once("../_config/config.php");

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($con, "DELETE FROM p_new WHERE id=$id");

if ($result > 0){
  header("Location: ../projects.php?danger=The project has been successfully deleted");
}else {
  header("Location:../projects.php?danger=An error occurred while deleting the project");
}


?>
