<?php
include ("../model/mydb.php");

$id=$_REQUEST["id"];



$mydb= new MyDB();
$conobj=$mydb->openCon();
$result=$mydb->getCourse("courses", $id,$conobj);
if($result->num_rows > 0)
{
    while($row=$result->fetch_assoc()){
    $id=$row["id"];
    $courseName=$row["courseName"];
    $courseId=$row["courseId"];
    $section=$row["section"];
    $classTime=$row["classTime"];
    $day=$row["day"];
    $faculty=$row["faculty"];
    $semester=$row["semester"];
    
    $credit=$row["credit"];
    $fees=$row["fees"];
    $stuudentCount=$row["stuudentCount"];
    }


   $x= $mydb->insertMyCourse('mycources',$courseName,$courseId,$section,$classTime,$faculty,$day,$credit,$semester,$fees,$conobj);
  if ($x) {
   $mydb->deleteCourse('courses',$conobj,$id);
    # code...
  }
}
else
{
    echo "no data found";
}


?>