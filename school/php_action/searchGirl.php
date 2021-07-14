<?php 	

require_once 'core.php';
require_once 'db_connect.php';





















 
// Check connection
if($connect === false){
    die("ERROR: Could not connect. " . $connect->connect_error);
}
 
if(isset($_REQUEST["term"])){
    // Prepare a select statement
    $sql = "select girl_id,girl_name,girl_IDnumber,passport from girls where  LOWER(girl_name) LIKE ? OR LOWER(girl_IDnumber)  LIKE ? OR  LOWER(passport) LIKE ?";
    
    if($stmt = $connect->prepare($sql)){
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
                <span class="maid-name" id="<?php echo $row["girl_id"];?>"><?php echo $row["girl_name"]. str_repeat('&nbsp;', 5).$row["girl_IDnumber"];?></span>
               

              </li>
                    
                    <?php
                }
            } else{
                echo "<p>No matches found</p>";
            }
        } else{
            echo "ERROR: Could not able to execute  ";
        }
    }
     
    // Close statement
    $stmt->close();
}
 
// Close connection
$connect->close();
?>