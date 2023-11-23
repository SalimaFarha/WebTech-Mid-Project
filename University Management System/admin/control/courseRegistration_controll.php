<?php
include "../model/mydb.php";
session_start();

$mydb= new MyDB();
$conobj=$mydb->openCon();
$result=$mydb->getAllUsers("courses", $conobj);

if($result->num_rows > 0)
{
    return $result;
  while($row=$result->fetch_assoc()){
    $courseName=$row["courseName"];
    $courseId=$row["courseId"];
    $section=$row["section"];
    $classTime=$row["classTime"];
    $day=$row["day"];
    $faculty=$row["faculty"];
 
    $session=$row["session"];
    $credit=$row["credit"];
    $stuudentCount=$row["stuudentCount"];
    // echo $courseName;  
   
}
}
else
{
    
}




?>