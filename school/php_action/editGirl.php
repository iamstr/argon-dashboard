<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

  $fullname		= mysqli_real_escape_string($connect,$_POST['fullname']);
  $id			= mysqli_real_escape_string($connect,$_POST['id']);
  $phone			= mysqli_real_escape_string($connect,$_POST['phone']);
  $dob			= date("Y-m-d", strtotime($_POST['dob']));
  $religion			= mysqli_real_escape_string($connect,$_POST['religion']);
  $county		= mysqli_real_escape_string($connect,$_POST['county']);
  $firstMedical		= mysqli_real_escape_string($connect,$_POST['firstMedical']);
  $birth_cert	= mysqli_real_escape_string($connect,$_POST['birth_cert']);
  $passport	= mysqli_real_escape_string($connect,$_POST['passport']);
  $conduct	= mysqli_real_escape_string($connect,$_POST['conduct']);
  $place_issue	= mysqli_real_escape_string($connect,$_POST['issue']);
  $kin_names	= mysqli_real_escape_string($connect,$_POST['kin_names']);
  $kin_names2	= mysqli_real_escape_string($connect,$_POST['kin_names2']);
  $kinship	= mysqli_real_escape_string($connect,$_POST['kinship']);
  $kinship2	= mysqli_real_escape_string($connect,$_POST['kinship2']);
  $kin_number= mysqli_real_escape_string($connect,$_POST['kin_number']);
  $kin_number2= mysqli_real_escape_string($connect,$_POST['kin_number2']);
  $kin_id= mysqli_real_escape_string($connect,$_POST['kin_id']);
  $kin_id2= mysqli_real_escape_string($connect,$_POST['kin_id2']);
  
  
  $passport_date_issue= $_POST['passport_date_issue'];
  
  $passport_date_expiry= date("Y-m-d", strtotime('+3651 day', strtotime($_POST['passport_date_issue'])) );
  $user=$_SESSION['user'];
  $girl=$_SESSION['girl'];
  $date=date("Y-m-d H:m:s");
  
  

	
				$sql = "UPDATE `girls` SET `girl_fullname`='$fullname', 
                `girl_IDnumber`='$id'
                , `girl_phone`='$phone'
                , `girl_dob`='$dob'
                , `girl_religion`='$religion'
                , `girl_county`='$county'
                , `girl_passport`='$passport'
                , `passport_date_issue`='$passport_date_issue'
                , `passport_date_expiry`='$passport_date_expiry'
                , `girl_goodConduct`='$conduct'
                , `girl_passport_place`='$place_issue'
                , `girl_birth`='$birth_cert'
                , `girl_firstMedical`='$firstMedical',
                `updatedBy`='$user' WHERE girl_id='$girl'";
				if($connect->query($sql) === TRUE) {
					$valid['success'] = true;
                    $girl_id = $connect->insert_id;
                  if (!file_exists('../uploads/'.$girl_id."-".$fullname."-".$id."/")) {
    mkdir('../uploads/'.$girl_id."-".$fullname."-".$id."/", 0777, true);
}
                  
                  
                  $sqlKin=" UPDATE `next_of_kin` SET 
                  `next_of_kin_fullname`='$kin_names', 
                  `next_of_kin_IDnumber`='$kin_id',
                  `next_of_kin_relationship`='$kinship',
                  `next_of_kin_phone`='$kin_number',
                  `next_of_kin_fullname2`='$kin_names2', 
                  `next_of_kin_IDnumber2`='$kin_id2', 
                  `next_of_kin_phone2`='$kin_number2', 
                  `next_of_kin_relationship2`='$kinship2'
                   WHERE girl_id=$girl";
                 
                 
                  
                  if(!empty($_POST['agent_name'])&&!empty($_POST['agent_number'])){
                    
                    $agent_name= mysqli_real_escape_string($connect,$_POST['agent_name']);
                    $agent_number= mysqli_real_escape_string($connect,$_POST['agent_number']);
                    $sqlAgent="INSERT INTO `agents`( `agent_fullname`, `agent_phone`,girl_id) VALUES ( '$agent_name','$agent_number','$girl')";
                  }else{
                    
                     $agent= mysqli_real_escape_string($connect,$_POST['agent']);
                      $sqlAgent2="select * from agents where agent_id=$agent";
                    
                    $resultAgent=$connect->query($sqlAgent2);
                    $rowAgent=$resultAgent->fetch_array();
                    $agent_name= $rowAgent['agent_fullname'];
                    $agent_number= $rowAgent['agent_phone'];
                    $sqlAgent="UPDATE
                    `agents` SET  
                    `agent_fullname`='$agent_name',
                    `agent_phone`='$agent_number'
                     WHERE
                    girl_id='$girl'";
                  }
                            
                             
                  
                  
                 
                  if($connect->query($sqlKin) === TRUE) {
                    
                    
                    
                     if($connect->query($sqlAgent) === TRUE) {
                    
                    
                    $valid['messages'] = "Successfully Updated  ".$fullname;	
                    
                  }else{
                    $valid['success'] = false;
					$valid['messages'] = "Error while updating the girl  Try updating instead ". $_POST['passport_date_issue']." ".$connect->error;
                       
                  }
                    
                    
                  }else{
                    
                    $valid['success'] = false;
					$valid['messages'] = "Error while updating the girl  Try updating instead  ". $sqlKin." ".$connect->error;
                  }
                 
					
                  
				} else {
					$valid['success'] = false;
					$valid['messages'] = "Error while updating the girl  Try updating instead ". $passport_date_issue." ".$connect->error;
				}

				// /else	
		
	} // if in_array 		

	$connect->close();

	echo json_encode($valid);
 
