<?php
// include database connection file
include_once("../_config/config.php");

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($con, "DELETE FROM t_new WHERE id=$id");

if ($result > 0){
  header("Location: ../tasks.php?success=Good job, you've done your task");
}else {
  header("Location:../tasks.php?error=An error occurred while deleting the project");
}


?>
