<?php
// include database connection file
include_once  ("./_config/config.php");


 $p_sql = " SELECT * FROM p_new;";
 $p_res = mysqli_query($con, $p_sql);
 $p_check = mysqli_num_rows($p_res);


 $t_sql = " SELECT * FROM t_new;";
 $t_res = mysqli_query($con, $t_sql);
 $t_check = mysqli_num_rows($t_res);

?>