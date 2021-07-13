<?php 	

require_once 'core.php';
require_once 'db_connect.php';

































 
if(isset($_REQUEST["term"])){
    // Prepare a select statement
   $girl=mysqli_real_escape_string($connect,$_REQUEST["term"]);
$sql="select * from info where  girl_IDNumber like '%$girl%' ||girl_fullname like '%$girl%'||girl_passport like '%$girl%'";
$result=$connect->query($sql);

$rows=66;
while($row=$result->fetch_array()):
$girl_id=$row["girl_id"];
$girl_fullname=$row["girl_fullname"];
$girl_IDnumber=$row["girl_IDnumber"];
$girl_phone=$row["girl_phone"];
$girl_dob=$row["girl_dob"];
$girl_religion=$row["girl_religion"];
$girl_county=$row["girl_county"];
$girl_passport=$row["girl_passport"];
$passport_date_issue=$row["passport_date_issue"];
$passport_date_expiry=$row["passport_date_expiry"];
$girl_passport_place=$row["girl_passport_place"];
$girl_goodConduct=$row["girl_goodConduct"];
$girl_birth=$row["girl_birth"];
$girl_firstMedical=$row["girl_firstMedical"];
$dateCreated=$row["dateCreated"];
$next_of_kin_fullname=$row["next_of_kin_fullname"];
$next_of_kin_IDnumber=$row["next_of_kin_IDnumber"];
$next_of_kin_relationship=$row["next_of_kin_relationship"];
$next_of_kin_phone=$row["next_of_kin_phone"];
$next_of_kin_fullname2=$row["next_of_kin_fullname2"];
$next_of_kin_IDnumber2=$row["next_of_kin_IDnumber2"];
$next_of_kin_relationship2=$row["next_of_kin_relationship2"];
$next_of_kin_phone2=$row["next_of_kin_phone2"];
$school_name=$row["school_name"];
$school_start=$row["school_start"];
$school_end=$row["school_end"];
$school_cert=$row["school_cert"];
$musaned_status=$row["musaned_status"];
$musaned_sponsporName=$row["musaned_sponsporName"];
$musaned_sponsporNumber=$row["musaned_sponsporNumber"];
$musaned_sponsporID=$row["musaned_sponsporID"];
$musaned_sponsporAddress=$row["musaned_sponsporAddress"];
$musaned_contractNumber=$row["musaned_contractNumber"];
$musaned_visaNumber=$row["musaned_visaNumber"];
$agency_name=$row["agency_name"];
$nea_date=$row["nea_date"];
$nea_status=$row["nea_status"];
$enjaz_status=$row["enjaz_status"];
$enjaz_date=$row["enjaz_date"];
$enjaz_medical=$row["enjaz_medical"];
$medical_name=$row["medical_name"];
$enjaz_medicalDate=$row["enjaz_medicalDate"];
$enjaz_wakala=$row["enjaz_wakala"];
$embassy_status=$row["embassy_status"];
$embassy_date=$row["embassy_date"];
$embassy_visaForm=$row["embassy_visaForm"];
$embassy_medical=$row["embassy_medical"];
$enjaz_number=$row["enjaz_number"];
$clearance_attestationList=$row["clearance_attestationList"];
$clearance_CertificateOfIncorporation=$row["clearance_CertificateOfIncorporation"];
$clearance_status=$row["clearance_status"];
$clearance_FullMedical=$row["clearance_FullMedical"];
$clearance_GoodConduct=$row["clearance_GoodConduct"];
$clearance_PassportCopy=$row["clearance_PassportCopy"];
$clearance_GirlContract=$row["clearance_GirlContract"];
$clearance_NextOfKinIDCopy=$row["clearance_NextOfKinIDCopy"];
$clearance_VisaForm=$row["clearance_VisaForm"];
$travel_date=$row["travel_date"];
$travel_arrival=$row["travel_arrival"];
$travel_pregnancy=$row["travel_pregnancy"];
$travel_pcrStatus=$row["travel_pcrStatus"];
$travel_pcrCode=$row["travel_pcrCode"];
$travel_pcrDate=$row["travel_pcrDate"];
$travel_tshirt=$row["travel_tshirt"];
$travel_stampedClearanceForm=$row["travel_stampedClearanceForm"];
$travel_ticket=$row["travel_ticket"];
$travel_yellowFever=$row["travel_yellowFever"];

$count=1;





?>








<tr class="table-agent-row">
  <th scope="row">
    <div class="media align-items-center">
      <!--
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="" />
                        </a>
-->
      <div class="media-body">
        <span class="name mb-0 text-sm"><?php echo $girl_fullname;?>
          <?php //echo $row[$count]; ?>
        </span>
      </div>
    </div>
  </th>

  <?php while($count<$rows):
              
    $count++;
    
    ?>

  <td class="budget">
    <?php echo $row[$count]?$row[$count]:"N/A";
              
    
    
    ?></td>
  <?php endwhile;
              
    
    
    ?>

  <td class="text-center">
    <div class="dropdown">
      <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-ellipsis-v"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
        <a class="dropdown-item" href="?girl=<?php echo $girl_id;?>">Girl Details</a>
        
      </div>
    </div>
  </td>
</tr>

<?php  endwhile;?>




<?php
}
 
// Close connection
$mysqli->close();
?>