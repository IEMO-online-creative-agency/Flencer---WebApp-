<?php

// including the database connection file
include_once("./_config/config.php");

//getting id from url
    $id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($con, "SELECT * FROM p_new WHERE id=$id");
   while($res = mysqli_fetch_array($result))
    {
    $name = $res['name'];
    $srvc = $res['service'];
    $ddl = $res['deadline'];
    $budg = $res['budget'];
    }
?>
       <div class="col-lg-12">
<div class="main-card mb-3 card">
     <div class="card-body"><h5 class="card-title">You can update the project informations and submit it</h5>
     <form class="" action="./_functions/p_fu_update.php" method="post">
        <div class="form-row">
            <div class="col-md-6">
                <div class="position-relative form-group"><label 
                    for="exampleEmail11" 
                    class="">Project Name</label><input 
                    name="edit_name" 
                    id="exampleEmail11" 
                    placeholder="What's the name of the project?" 
                    type="text" 
                    class="form-control"
                    value="<?php echo $name;?>"></div>
            </div>
            <div class="col-md-6">
                <div class="position-relative form-group">
                    <label
                    for="exampleEmail11" 
                    class="">Service</label><input 
                    placeholder="What's the kind of Service? (Website, Logo, Branding...)"  
                    type="text" 
                    class="form-control"
                    name="edit_service"
                    value="<?php echo $srvc;?>">
                </div>
            </div>
            </div>
            <div class="form-row">
            <div class="col-md-6">
                <div class="position-relative form-group"><label 
                    for="exampleEmail11" 
                    class="">Deadline</label><input 
                    name="edit_deadline" 
                    id="exampleEmail11" 
                    placeholder="What's the date of finishing the project?"
                    type="text" 
                    class="form-control"
                    value="<?php echo $ddl;?>"></div>
            </div>
             <div class="col-md-6">
                <div class="position-relative form-group"><label for="exampleEmail11" 
                    class="">Budget</label><input 
                    placeholder="What's the budget of the project?"
                    type="text" 
                    class="form-control"
                    name="edit_budget" 
                    value="<?php echo $budg;?>">
                </div>
             </div>
             </div>
             <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
             <button class="mt-2 btn btn-primary" type="submit" name="update">Update the project</button>
             <a href="projects.php" class="mt-2 btn btn-danger">Exit</a>
             </form>
             </div>
             </div>
             </div>