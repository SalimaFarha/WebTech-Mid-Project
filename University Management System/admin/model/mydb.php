<?php
class MyDB{

function openCon(){
$conn = new mysqli("localhost","root","","secg");
return $conn;
}
function insertData($tablename, $firstname,$lastname,$course,$gender,$file,
$phone,$eamil,$pasword,$conn){
$sql="INSERT INTO $tablename (fname,lname,course, gender,file
,phone, email,password) VALUES ('$firstname','$lastname','$course','$gender','$file',
'$phone','$eamil','$pasword')";
$result=$conn->query($sql);
return $result;
}
function checkUser($tablename, $email, $password, $conn){
    $sql="SELECT * FROM $tablename WHERE email='$email' AND 
    password='$password'";
    $result=$conn->query($sql);
return $result;
}
function getUserInfo($tablename, $email, $conn){
    $sql="SELECT * FROM $tablename WHERE email='$email' ";
    $result = $conn->query($sql);
    return $result;
}

function getAllUsers($tablename, $conn)
{
    $sql="SELECT * FROM $tablename";
    $result = $conn->query($sql);
    return $result;
}
function updateUser($tablename, $conn, $fname, $lname, $password, $gender,
$course, $file, $email){


$sql= "UPDATE $tablename SET firstname='$fname', lastname='$lname', password='$password',
gender='$gender',
course='$course'
file='$file'
 WHERE email = '$email' ";
 $result = $conn->query($sql);
 return $result;
}
function deleteUser($tablename, $conn, $email){
$sql= "DELETE FROM $tablename WHERE email = '$email' ";
$result=$conn->query($sql);
return $result;
}

function searchUser($tablename, $conn, $email)
{
    $sql="SELECT * FROM $tablename WHERE email = '$email'";
    $result = $conn->query($sql);
    return $result;
}

function searchCources($tablename, $conn, $semester)
{
    $sql="SELECT * FROM $tablename WHERE semester = '$semester' ";
    $result = $conn->query($sql);
    return $result;
}

function searchDrop($tablename, $conn, $status)
{
    $sql="SELECT * FROM $tablename WHERE status ='$status'";
    $result = $conn->query($sql);
    return $result;
}

function getCourse($tablename, $id, $conn){
    $sql="SELECT * FROM $tablename WHERE id='$id' ";
    $result = $conn->query($sql);
    return $result;
}

function insertMyCourse($tablename,$courseName,$courseId,$section,$classTime,$faculty,$day,$credit,$semester,$fees,$conn){
$sql="INSERT INTO $tablename (courseName,courseId,section,classTime,faculty,day,credit,semester,fees) VALUES ('$courseName','$courseId','$section','$classTime','$faculty',
'$day','$credit','$semester','$fees')";
$result=$conn->query($sql);
return $result;
}

function insertDrop($tablename,$courseName,$courseId,$section,$faculty,$credit,$semester,$conn){
$sql="INSERT INTO $tablename (courseName,courseId,section,faculty,credit,semester) VALUES ($courseName,$courseId,$section,$faculty,$credit,$semester)";
$result=$conn->query($sql);
return $result;
}



function deleteCourse($tablename, $conn, $id){
    $sql= "DELETE FROM $tablename WHERE id = '$id' ";
    $result=$conn->query($sql);
    return $result;
    }


}


?>