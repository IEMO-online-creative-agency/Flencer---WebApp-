<?php 

    // Connection to db
    include_once '../_config/config.php';

    // Start of the function
    if (isset($_POST['submit'])) {

    	//Form variables
        $tsk = $_POST['t_subject'];
        $dat = $_POST['t_date'];
        $time = $_POST['t_time'];


        
        // check the forms
        if (empty($tsk)|| empty($dat)|| empty($time)) {

        header('location: ../tasks.php?error=You need to fill all forms to add new project');

        exit();

        }else{
        	//insert data to db
        	$sql = " INSERT INTO t_new (task, tdate, ttime) VALUES ('$tsk', '$dat', '$time'); ";

            $result = mysqli_query($con, $sql);

        	if ($result) {
        	 header("Location: ../tasks.php?success=You added a new task to your calendar");
            }

            else{
 	         header("Location: ../tasks.php?error");
            }
        }

    }
?>