<?php

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());
if(!empty($_POST)):

$school=mysqli_real_escape_string($connect,$_POST['school']);
$enjaz_number=mysqli_real_escape_string($connect,$_POST['enjaz_number']);
$medical=mysqli_real_escape_string($connect,$_POST['medical']);
$conduct=mysqli_real_escape_string($connect,$_POST['conduct']);
$wakala=mysqli_real_escape_string($connect,$_POST['wakala']);
$enjaz=mysqli_real_escape_string($connect,$_POST['enjaz']);
$visa=mysqli_real_escape_string($connect,$_POST['visa']);
$user=$_SESSION["user"];
$date=date("Y-m-d");
$girl=$_SESSION['girl'];


   $girl=mysqli_real_escape_string($connect,$girl);
  if(!empty($girl)):
  
  $sql = "UPDATE `embassy` SET
  `embassy_status`='$enjaz',
  `embassy_date`='$date' ,
  `embassy_visaForm`='$visa',
  `embassy_medical`='$medical',
  `updatedBy`='$user', 
  `enjaz_number`='$enjaz_number'  WHERE girl_id=$girl";
				if($connect->query($sql) === TRUE) {
					$valid['success'] = true;
                    $girl_id = $connect->insert_id;
                  $valid['messages'] = "updated successfully... ";
                  
                }else{
                  $valid['success'] = true;
                  $valid['messages'] = "failed... ". $connect->error;
                  
                }
  else: echo $girl;
  
  endif; //end of if empty








  
else: $valid['success']=false; $valid['message']="something went wrong 😫"; 

endif;$connect->close();

	echo json_encode($valid);
 








?>