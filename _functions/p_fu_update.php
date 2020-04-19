<?php
// including the database connection file
include_once("../_config/config.php");

// start of updating functions
if(isset($_POST['update']))
{   
    // Variables
    $id= $_POST['id'];
    $name = $_POST['edit_name'];
    $srvc = $_POST['edit_service'];
    $ddl = $_POST['edit_deadline'];
    $budg = $_POST['edit_budget'];   
    

    // Query
    $result = mysqli_query($con, "UPDATE p_new SET name='$name',service='$srvc',deadline='$ddl',budget='$budg' WHERE id=$id");
    
    // start of algo
    if($result){
    //redirectig to the display project with success 
    header("Location: ../projects.php?success=Your project has been edited successfuly");
    }else{
    //redirectig to the display projects with error
    header("Location: ../projects.php?error= error in updating the data");
    }
    
}
?>
