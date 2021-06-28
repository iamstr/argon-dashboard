
<?php   require_once("core.php");?>
<div class="row w-100">
  
  <h3 class="font-weight-bold m-4">Girl Details</h3>
</div>

<?php

//girls table
$sql="SELECT DISTINCT UPPER( column_name) FROM INFORMATION_SCHEMA.COLUMNS where TABLE_SCHEMA='recruitment' &&  TABLE_NAME='girls'  and column_name not like'%_id'&& column_name not like '%update%'";

$result=$connect->query($sql) ;
  
  
  while($row=$result->fetch_array()){
    
    echo '<div class="btn-group-toggle m-1 my-2" data-toggle="buttons">
  <label class="btn btn-outline-str-secondary active" class="text-capitalize">
    <input type="checkbox" autocomplete="off" checked /> '.$row[0].'</label></div>';
  }
  ?>


<!--
<div class="row w-100">
  
  <h3 class="font-weight-bold m-4">Uploads</h3>
</div>
-->


<?php

//uploads table
//$sql="SELECT DISTINCT UPPER( column_name) FROM INFORMATION_SCHEMA.COLUMNS where TABLE_SCHEMA='recruitment' &&  TABLE_NAME='uploads'  and column_name not like'%_id' ";
//
//$result=$connect->query($sql) ;
//  
//  
//  while($row=$result->fetch_array()){
//    
//    echo '<div class="btn-group-toggle m-1 my-2" data-toggle="buttons">
//  <label class="btn btn-outline-str-secondary active" class="text-capitalize">
//    <input type="checkbox" autocomplete="off" checked /> '.$row[0].'</label></div>';
//  }
  ?>


<div class="row w-100">
  
  <h3 class="font-weight-bold m-4">Next Of Kin</h3>
</div>









<?php

//next of kin table
$sql="SELECT DISTINCT UPPER( column_name) FROM INFORMATION_SCHEMA.COLUMNS where TABLE_SCHEMA='recruitment' &&  TABLE_NAME='next_of_kin'  and column_name not like'%_id' ";

$result=$connect->query($sql) ;
  
  
  while($row=$result->fetch_array()){
    
    echo '<div class="btn-group-toggle m-1 my-2" data-toggle="buttons">
  <label class="btn btn-outline-str-secondary active" class="text-capitalize">
    <input type="checkbox" autocomplete="off" checked /> '.$row[0].'</label></div>';
  }
  ?>


<div class="row w-100">
  
  <h3 class="font-weight-bold m-4">School</h3>
</div>

























<?php
//musaned table
$sql="SELECT DISTINCT UPPER( column_name) FROM INFORMATION_SCHEMA.COLUMNS where TABLE_SCHEMA='recruitment'  and  TABLE_NAME='schools' and column_name not like '%girl%' &&  column_name not like '%school_id' && column_name not like '%user_id' && column_name not like '%update%'";

$result=$connect->query($sql) ;
  
  
  while($row=$result->fetch_array()){
    
      echo '<div class="btn-group-toggle m-1 my-2" data-toggle="buttons">
  <label class="btn btn-outline-str-secondary active" class="text-capitalize">
    <input type="checkbox" autocomplete="off" checked /> '.$row[0].'</label></div>';
  }
  ?>


<div class="row w-100">
  
  <h3 class="font-weight-bold m-4">Musaned</h3>
</div>





<?php

$sql="SELECT DISTINCT UPPER( column_name) FROM INFORMATION_SCHEMA.COLUMNS where TABLE_SCHEMA='recruitment' and TABLE_NAME='musaned'  && column_name not like '%update%' && column_name not like'%l_%' && column_name not like'%user_id%' && column_name not like'%musaned_id%' ";

$result=$connect->query($sql) ;
  
  
while($row=$result->fetch_array()){
    
      echo '<div class="btn-group-toggle m-1 my-2" data-toggle="buttons">
  <label class="btn btn-outline-str-secondary active" class="text-capitalize">
    <input type="checkbox" autocomplete="off" checked /> '.$row[0].'</label></div>';
  }
  ?>


<div class="row w-100">
  
  <h3 class="font-weight-bold m-4">NEA</h3>
</div>

<?php


//nea table 

$sql="SELECT DISTINCT UPPER( column_name) FROM INFORMATION_SCHEMA.COLUMNS where TABLE_SCHEMA='recruitment'  and TABLE_NAME='nea' and column_name not like '%id%'  && column_name not like '%update%'";

$result=$connect->query($sql) ;
  
  while($row=$result->fetch_array()){
    
      echo '<div class="btn-group-toggle m-1 my-2" data-toggle="buttons">
  <label class="btn btn-outline-str-secondary active" class="text-capitalize">
    <input type="checkbox" autocomplete="off" checked /> '.$row[0].'</label></div>';
  }
  ?>


<div class="row w-100">
  
  <h3 class="font-weight-bold m-4">Enjaz</h3>
</div>


<?php


//enjaz table 

$sql="SELECT DISTINCT UPPER( column_name) FROM INFORMATION_SCHEMA.COLUMNS where TABLE_SCHEMA='recruitment'  and TABLE_NAME='enjaz' and column_name not like '%girl_id%' && column_name not like '%update%'  &&  column_name not like '%user_id%' &&  column_name not like '%enjaz_id%'  ";

$result=$connect->query($sql) ;
  
  while($row=$result->fetch_array()){
    
      echo '<div class="btn-group-toggle m-1 my-2" data-toggle="buttons">
  <label class="btn btn-outline-str-secondary active" class="text-capitalize">
    <input type="checkbox" autocomplete="off" checked /> '.$row[0].'</label></div>';
  }
  ?>


<div class="row w-100">
  
  <h3 class="font-weight-bold m-4">Embassy</h3>
</div>


<?php


//embassy table 

$sql="SELECT DISTINCT UPPER( column_name) FROM INFORMATION_SCHEMA.COLUMNS where TABLE_SCHEMA='recruitment'  and TABLE_NAME='embassy' and column_name not like '%id%'&& column_name not like '%update%' ";

$result=$connect->query($sql) ;
  
  while($row=$result->fetch_array()){
    
      echo '<div class="btn-group-toggle m-1 my-2" data-toggle="buttons">
  <label class="btn btn-outline-str-secondary active" class="text-capitalize">
    <input type="checkbox" autocomplete="off" checked /> '.$row[0].'</label></div>';
  }
  ?>


<div class="row w-100">
  
  <h3 class="font-weight-bold m-4">Clearance</h3>
</div>


<?php


//clearance table 

$sql="SELECT DISTINCT UPPER( column_name) FROM INFORMATION_SCHEMA.COLUMNS where TABLE_SCHEMA='recruitment'  and TABLE_NAME='clearance' and column_name not like '%user_id%' && column_name not like '%girl_id%' && column_name not like '%clearance_id%'   && column_name not like '%update%'";

$result=$connect->query($sql) ;
  
  while($row=$result->fetch_array()){
    
      echo '<div class="btn-group-toggle m-1 my-2" data-toggle="buttons">
  <label class="btn btn-outline-str-secondary active" class="text-capitalize">
    <input type="checkbox" autocomplete="off" checked /> '.$row[0].'</label></div>';
  }
  ?>


<div class="row w-100">
  
  <h3 class="font-weight-bold m-4">Travel</h3>
</div>


<?php


//travel table 

$sql="SELECT DISTINCT UPPER( column_name) FROM INFORMATION_SCHEMA.COLUMNS where TABLE_SCHEMA='recruitment'  and TABLE_NAME='travel' and column_name not like '%id%' && column_name not like '%update%' ";

$result=$connect->query($sql) ;
  
  while($row=$result->fetch_array()){
    
      echo '<div class="btn-group-toggle m-1 my-2" data-toggle="buttons">
  <label class="btn btn-outline-str-secondary active" class="text-capitalize">
    <input type="checkbox" autocomplete="off" checked /> '.$row[0].'</label></div>';
  }
  ?>




