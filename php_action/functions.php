<?php 


function totalGirls(){
  
  
  global $connect;
  
  $sql="select count(girl_id) as total from girls";
  
  $result=$connect->query($sql);
  $row=$result->fetch_array();
  $total=$row["total"];
  
  return $total;
}
function newGirls(){
  
  
  global $connect;
  $date=date("Y-m");
  $sql="SELECT count( DATE_FORMAT(dateCreated, '%m-%Y')) AS `total` from girls WHERE DATE_FORMAT(dateCreated, '%m-%Y')= '$date'";
  
  $result=$connect->query($sql);
  $row=$result->fetch_array();
  $total=$row["total"];
  
  return $total;
}
function travelledGirls(){
  
  
  global $connect;
  $date=date("Y-m");
  $sql="select count(girl_id) as total from travel";
  
  $result=$connect->query($sql);
  $row=$result->fetch_array();
  $total=$row["total"];
  
  return $total;
}

/*
  -total girls for every month for the current year
  -e.g 
        |----------|-------|
        |month-year| total |
        |----------|-------|
        |04-2021   | total |
        |----------|-------|     
        |05-2021   | total |
        |----------|-------|
        
        
        check the array
        
        01-2021==01-2021?4,
        02-2021,
        03-2021,
        04-2021,
        05-2021,
        06-2021,
        07-2021,
        08-2021,
        09-2021,
        10-2021,
        11-2021,
        12-2021
        
        
*/
function countGirlsByMonth(){
  
  
  global $connect;
  $date=date("Y-m");
  $year=date("Y");
  $constant = 0;
  $checks=array();
  $checksCount=1;
  while(count($checks)<12){
    if($checksCount<10){
      $val="0".$checksCount;
      
    }else{
      
      $val=$checksCount;
    }
    $checks[$val."-".$year]=$val."-".$year;
    $checksCount++;
  }
  
  
  $filter=$checks;
  $sql="SELECT count( DATE_FORMAT(dateCreated, '%m-%Y')) AS `total`, DATE_FORMAT(dateCreated, '%m-%Y') as dated from girls WHERE YEAR(dateCreated)='$year' GROUP BY dated";
  
  $result=$connect->query($sql);
  $data=array();
  while($row=$result->fetch_array()):
  
  $total=$row["total"];
  $dated=$row["dated"];
  
  $count=count($row);
  while($count<12):
  if($dated===$checks[$dated]){
    
    $checks[$dated]=$total;
    
  }
  $count++;
  endwhile;
  
  
  
 
  endwhile;
  
  
  
 foreach($checks as $key => $value) {
  if( $key==$value) {
    $checks[$value]=0;
    
  }

}
  return implode(",",$checks) ;
//  return array_walk($checks,"myfunction") ;
}
















?>