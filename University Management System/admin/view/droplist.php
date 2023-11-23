<?php 

include "../control/droplistcontroller.php";
?>

<html>
<head>   
<title>  
Course Registration
</title>  

<link rel="stylesheet" type="text/css" href="../../css/mystyle.css">
</head>  
<body>  

<h1> All Avilable courses </h1>
<?php


echo "<table border=1>";
        echo "<tr>";
           
            echo "<th>";
                echo "Course id";
            echo "</th>";
            echo "<th>";
                echo "Course name";
            echo "</th>";
            echo "<th>";
                echo "Section ";
            echo "</th>";
            echo "<th>";
                echo "Faculty";
            echo "</th>";
            echo "<th>";
                echo "Credit";
            echo "</th>";
            echo "<th>";
                echo "Semester";
            echo "</th>";
            echo "<th>";
                echo "Session";
            echo "</th>";
            echo "<th>";
                echo "Status";
            echo "</th>";
            
            
        echo "</tr>";


        
      
if($result->num_rows > 0)
{
  
    while($row=$result->fetch_assoc()){

       echo "<tr>";
         echo "<td>";
            echo $row["courseId"];
         echo "</td>";
         echo "<td>";
            echo $row["courseName"];
         echo "</td>";
         echo "<td>";
            echo $row["section"];
         echo "</td>";
         echo "<td>";
            echo $row["faculty"];
         echo "</td>";
         echo "<td>";
            echo $row["credit"];
         echo "</td>";
         echo "<td>";
            echo $row["semester"];
         echo "</td>";
         echo "<td>";
            echo $row["session"];
         echo "</td>";
         
         echo "<td>";
            echo $row["status"];
         echo "</td>";
       
         
       echo "</tr>";


  
}


echo "</table>";
}
else
{
    echo "no data available";
}



?>



</body>
    <html>