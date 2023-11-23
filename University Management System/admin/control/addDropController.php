<?php
include ("../model/mydb.php");

$id=$_REQUEST["id"];



$mydb= new MyDB();
$conobj=$mydb->openCon();
$result=$mydb->getCourse("mycources", $id,$conobj);
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

    }


   $x= $mydb->insertDrop('droplist',$courseName,$courseId,$section,$faculty,$credit,$semester,$conobj);
  if ($x) {
  echo "ok";
  }
}
else
{
    echo "no data found";
}


?>