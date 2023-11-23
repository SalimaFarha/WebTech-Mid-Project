<?php 

include "../control/rutineController.php";
?>

<html>
<head>   
<title>  
Course Registration
</title>  

<link rel="stylesheet" type="text/css" href="../../css/mystyle.css">
</head>  
<body>  

<h1> Class Routine</h1>
<?php




        
      
if($result->num_rows > 0)
{

    echo "<table border=1>";
        echo "<tr>";
           
            echo "<th>";
                echo "Course name";
            echo "</th>";
            echo "<th>";
                echo "Section ";
            echo "</th>";
            echo "<th>";
                echo "Class time";
            echo "</th>";
            echo "<th>";
                echo "day";
            echo "</th>";
            echo "<th>";
                echo "Faculty";
            echo "</th>";
            echo "<th>";
                echo "Credit";
            echo "</th>";
            echo "<th>";
                echo "Drop Course";
            echo "</th>";
           
        echo "</tr>";

  
    while($row=$result->fetch_assoc()){

       echo "<tr>";
        
         echo "<td>";
            echo $row["courseName"];
         echo "</td>";
         echo "<td>";
            echo $row["section"];
         echo "</td>";
         echo "<td>";
            echo $row["classTime"];
         echo "</td>";
         echo "<td>";
            echo $row["day"];
         echo "</td>";
         echo "<td>";
            echo $row["faculty"];
         echo "</td>";
         echo "<td>";
            echo $row["credit"];
         echo "</td>";
         
         echo "<td>";
            echo "<button>";
            echo "<a class='btn info' href='../control/addDropController.php?id=".$row["id"]."'>Drop</a>";
            echo "</button>";
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