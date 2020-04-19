 <?php
                // Connection to db
                include_once './_config/config.php';

                //database read
                $sql = " SELECT * FROM t_new;";

                $result = mysqli_query($con, $sql);
                $resultcheck = mysqli_num_rows($result);
                
                // Function start
                if ($resultcheck > 0) {

                  // fetch data from db
                  while ($row = mysqli_fetch_assoc($result)) {

                  	// Data display 
                    echo "<tr>
                    <td>".$row['id']."</td>
                    <td>".$row['task']."</td>
                    <td>".$row['tdate']."</td>
                    <td>".$row['ttime']."</td>
                    <td>
                        <a class='btn btn-success' href='./_functions/t_done.php?id=$row[id]' name='edit_btn'>Done</a>
                    </td>
                    </tr>
                    ";
                  }
                    }

                ?>
