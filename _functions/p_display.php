 <?php
                // Connection to db
                include_once './_config/config.php';

                //database read
                $sql = " SELECT * FROM p_new;";
                $result = mysqli_query($con, $sql);
                $resultcheck = mysqli_num_rows($result);
                
                // Function start
                if ($resultcheck > 0) {

                  // fetch data from db
                  while ($row = mysqli_fetch_assoc($result)) {

                  	// Data display 
                    echo "<tr>
                    <td>".$row['id']."</td>
                    <td>".$row['name']."</td>
                    <td>".$row['service']."</td>
                    <td>".$row['deadline']."</td>
                    <td>".$row['budget']."</td>
                    <td> 
                        <a class='btn btn-success' href='./p_update.php?id=$row[id]' name='edit_btn'>Edit</a>
                        <a class='btn btn-danger' href='./_functions/p_delete.php?id=$row[id]' >Delete</a>

                    </td>
                    </tr>
                    ";
                  }
                    }

                ?>
