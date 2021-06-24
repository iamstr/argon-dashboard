<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

  $fullname		= $_POST['fullname'];
  $id			= $_POST['id'];
  $phone			= $_POST['phone'];
  $dob			= date("Y-m-d", strtotime($_POST['dob']));
  $religion			= $_POST['religion'];
  $county		= $_POST['county'];
  $firstMedical		= $_POST['firstMedical'];
  $birth_cert	= $_POST['birth_cert'];
  $passport	= $_POST['passport'];
  $conduct	= $_POST['conduct'];
  $place_issue	= $_POST['issue'];
  $kin_names	= $_POST['kin_names'];
  $kin_names2	= $_POST['kin_names2'];
  $kinship	= $_POST['kinship'];
  $kinship2	= $_POST['kinship2'];
  $kin_number= $_POST['kin_number'];
  $kin_number2= $_POST['kin_number2'];
  $kin_id= $_POST['kin_id'];
  $kin_id2= $_POST['kin_id2'];
  $agent_name= $_POST['agent_name'];
  $agent_number= $_POST['agent_number'];
  $passport_date_issue= date("Y-m-d", strtotime($_POST['passport_date_issue']));
  
  $passport_date_expiry= date("Y-m-d", strtotime("+10 years",$_POST['passport_date_issue']));
  $user=$_SESSION['user']||1;
  $date=date("Y-m-d H:m:s");
  
  

	
				$sql = "INSERT INTO `girls`(`girl_fullname`, `girl_IDnumber`, `girl_phone`, `girl_dob`, `girl_religion`, `girl_county`, `girl_passport`,   `passport_date_issue`, `passport_date_expiry`, `girl_goodConduct`, `girl_passport_place`, `girl_birth`, `girl_firstMedical`, `user_id`,dateCreated, `updatedBy`)  
				VALUES ('$fullname', '$id' , '$phone','$dob','$religion','$county','$passport',$passport_date_issue,
$passport_date_expiry,'$conduct','$place_issue','$birth_cert','$firstMedical','$user','$date',$user)";
				if($connect->query($sql) === TRUE) {
					$valid['success'] = true;
                    $girl_id = $connect->insert_id;
                  if (!file_exists('../uploads/'.$girl_id."-".$fullname."-".$id."/")) {
    mkdir('../uploads/'.$girl_id."-".$fullname."-".$id."/", 0777, true);
}
                  
                  
                  $sqlKin=" INSERT INTO `next_of_kin`( `next_of_kin_fullname`, `next_of_kin_IDnumber`, `next_of_kin_relationship`, `next_of_kin_phone`, `next_of_kin_fullname2`, `next_of_kin_IDnumber2`, `next_of_kin_phone2`, `next_of_kin_relationship2`, `girl_id`) VALUES( '$kin_names',$kin_id,'$kinship',$kin_number,'$kin_names2','$kin_id2',$kin_number2,'$kinship2',$girl_id)";
                 
                  $sqlAgent="INSERT INTO `agents`( `agent_fullname`, `agent_phone`,girl_id) VALUES ( '$agent_name','$agent_number',$girl_id)";
                  if($connect->query($sqlKin) === TRUE) {
                    
                    
                    
                     if($connect->query($sqlAgent) === TRUE) {
                    
                    
                    $valid['messages'] = "Successfully Added  ".$fullname;	
                    
                  }else{
                    $valid['success'] = false;
					$valid['messages'] = "Error while adding the girl agent ".$connect->error;
                       
                  }
                    
                    
                  }else{
                    
                    $valid['success'] = false;
					$valid['messages'] = "Error while adding the girl  ".$connect->error;
                  }
                 
					
                  
				} else {
					$valid['success'] = false;
					$valid['messages'] = "Error while adding the kins  ".$connect->error;
				}

				// /else	
		
	} // if in_array 		

	$connect->close();

	echo json_encode($valid);
 
