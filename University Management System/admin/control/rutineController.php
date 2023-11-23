<?php
include "../model/mydb.php";
session_start();

$mydb= new MyDB();
$conobj=$mydb->openCon();
$result=$mydb->searchCources("mycources", $conobj,"Fall",);

if($result->num_rows > 0)
{
    return $result;
  while($row=$result->fetch_assoc()){
    $courseName=$row["courseName"];
    
    $section=$row["section"];
    $classTime=$row["classTime"];
    $day=$row["day"];
    $faculty=$row["faculty"];
   
    $credit=$row["credit"];
   
    // echo $courseName;  
   
}
}
else
{
    echo "no data ";
}




?>