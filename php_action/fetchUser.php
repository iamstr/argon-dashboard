<?php 	



require_once 'core.php';

$sql = "SELECT * FROM users inner join branches on branches.branch_id=users.branch_id";

$result = $connect->query($sql);

$output = array('data' => array());
if($result->num_rows > 0) { 

 // $row = $result->fetch_array();
 $active = ""; 

 while($row = $result->fetch_array()) {
 	$userid = $row[0];
 	// active 
 	$fullname = $row[1];
 	$username = $row[2];
 	$email = $row[4];
 	$role = $row[5];
 	$status = $row[6];
 	$phone = $row[7];
 	$date = $row[8];
 	$branch = $row["branch_name"];
// 	$username = $row[1];

 	$button = '<tr class="table-agent-row">

                    <td class="budget">'.$userid.'</td>
                    <td class="budget">'.$fullname.'</td>
                    <td class="budget">'.$phone.'</td>
                    <td class="budget">'.$date.'</td>

                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">'.$status.'</span>
                      </span>
                    </td>

                    <td class="budget">'.$branch.'</td>

                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-id='.$userid.'>
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" style="">
                          <a class="dropdown-item" href="javascript:void(0)">Working</a>
                          <a class="dropdown-item" href="javascript:void(0)">Fire</a>
                          <a class="dropdown-item" href="javascript:void(0)">Suspend</a>

                        </div>
                      </div>
                    </td>
                  </tr>';

	echo $button;

// 	$output['data'][] = array( 		
// 		// name
// 		$username,
// 		// button
// 		$button 		
// 		); 	
 } // /while 

}// if num_rows

$connect->close();

//echo json_encode($output);