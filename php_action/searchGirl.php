<?php 	

require_once 'core.php';
//$q = $_REQUEST["q"];
//$q = strtolower($q);
//
//$q = mysqli_real_escape_string($connect,$q);
//$sql="select girl_id,girl_fullname,girl_IDnumber,girl_passport from girls where  LOWER(girl_fullname) LIKE '%mary%' OR LOWER(girl_IDnumber)  LIKE '%mary%' OR  LOWER(girl_passport) LIKE '%mary%' ";
//echo $q;
//
//
//if(isset($q)):
//
//if($result =$connect->query($sql) === TRUE) {
//
//  echo $result->fetch_array();
//  echo "hey";
//  while($row=$result->fetch_array()){
    
    
//  echo $row["girl_fullname"];
  
  ?>
  
  
<!--  <li class="list-group-item d-flex flex-row justify-content-between custom-list-group-item tasks">-->
<!--                <span class="maid-name" id="<?php //echo $row["girl_id"];?>"><?php //echo $row["girl_fullname"];?></span>-->
                <!--<i class="fa fa-trash-alt text-danger tasks-delete pt-1"></i>-->
<!--              </li>-->
  
  
  <?php
  //} //end of while
//}else{
//  echo $connect->error;
//  echo "not working";
////  
//}
//
//endif;
?>
































<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
//$mysqli = new mysqli("localhost", "root", "", "recruitment");
 


// $username = "root";
$username = "zakeirag_recruitment";
// $password = "";
$password = "FVqJtab809]6@F";
// $dbname = "recruitment";
$dbname = "zakeirag_recruitment";
$mysqli = new mysqli($localhost, $username, $password, $dbname);
 

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