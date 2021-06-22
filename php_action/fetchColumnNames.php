<?php
require_once("core.php");
$sql="SELECT DISTINCT column_name FROM INFORMATION_SCHEMA.COLUMNS where TABLE_SCHEMA='recruitment' and TABLE_NAME!='userlogs' and TABLE_NAME!='users' and TABLE_NAME='girls' and column_name not like'%_id' ";

$result=$connect->query($sql) ;
  
  
  while($row=$result->fetch_array()){
    
    
 
  ?>

<div class="btn-group-toggle m-1" data-toggle="buttons">
  <label class="btn btn-outline-str-secondary active" class="text-capitalize">
    <input type="checkbox" autocomplete="off" checked /> <?php echo $row[0];?>
  </label>
</div>

<?php

   }
  




$sql="SELECT DISTINCT column_name FROM INFORMATION_SCHEMA.COLUMNS where TABLE_SCHEMA='recruitment' and TABLE_NAME!='userlogs' and TABLE_NAME!='users' and TABLE_NAME!='girls' and column_name not like '%id%' ";

$result=$connect->query($sql) ;
  
  
  while($row=$result->fetch_array()){
    
    
 
  ?>

<div class="btn-group-toggle m-1" data-toggle="buttons">
  <label class="btn btn-outline-str-secondary active" class="text-capitalize">
    <input type="checkbox" autocomplete="off" checked /> <?php echo $row[0];?>
  </label>
</div>

<?php

   }
  



?>
