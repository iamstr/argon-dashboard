<?php 	

require_once 'core.php';
require_once 'db_connect.php';






































/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
if(isset($_REQUEST["term"])){
    // Prepare a select statement
    $sql = "select girl_id,girl_fullname,girl_IDnumber,girl_passport from girls where  LOWER(girl_fullname) LIKE ? OR LOWER(girl_IDnumber)  LIKE ? OR  LOWER(girl_passport) LIKE ?";
    
    if($stmt = $mysqli->prepare($sql)){
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("sss", $param_term,$param_term,$param_term);
        
        // Set parameters
        $param_term = $_REQUEST["term"] . '%';
        
        // Attempt to execute the prepared statement
        if($stmt->execute()){
            $result = $stmt->get_result();
            
            // Check number of rows in the result set
            if($result->num_rows > 0){
                // Fetch result rows as an associative array
                while($row = $result->fetch_array(MYSQLI_ASSOC)){
                    ?>
                      <li class="list-group-item d-flex flex-row justify-content-between custom-list-group-item tasks">
                <span class="maid-name" id="<?php echo $row["girl_id"];?>"><?php echo $row["girl_fullname"]. str_repeat('&nbsp;', 5).$row["girl_IDnumber"];?></span>
               

              </li>
                    
                    <?php
                }
            } else{
                echo "<p>No matches found</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
     
    // Close statement
    $stmt->close();
}
 
// Close connection
$mysqli->close();
?>