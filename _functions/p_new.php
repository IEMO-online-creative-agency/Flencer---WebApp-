<?php 

    // Connection to db
    include_once '../_config/config.php';

    // Start of the function
    if (isset($_POST['submit'])) {

    	//Form variables
        $name = $_POST['p_name'];
        $srvc = $_POST['p_service'];
        $ddl = $_POST['p_deadline'];
        $budg = $_POST['p_budget'];

        
        // check the forms
        if (empty($name)|| empty($srvc)|| empty($ddl)|| empty($budg)) {

        header('location: ../projects.php?error=You need to fill all forms to add new project');

        exit();

        }else{
        	//insert data to db
        	$sql = " INSERT INTO p_new (name, service, deadline, budget) VALUES ('$name', '$srvc', '$ddl', '$budg'); ";

            $result = mysqli_query($con, $sql);

        	if ($result) {
        	 header("Location: ../projects.php?success=The project has been added successfuly");
            }

            else{
 	         header("Location: ../projects.php?error");
            }
        }

    }
?>