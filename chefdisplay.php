<!DOCTYPE html>
<html>
<head>
 <title>DISPLAY CATEGORIES</title>
 <style>
  b{
    font-size: 20px;
    font-family: 'Arial';
    padding: 2px;
    text-align: center;
}
  table 
  {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 15px;
   text-align: left;
   font-family:"Verdana";
   font-weight: bold;
   text-align: center;
   
  } 
  th 
  {
   background-color: maroon;
   color: white;
   
  }
  h1{
    font-family: "times new roman";
    font-size: 40px;
    border: 9px solid grey;
    border-radius: 17px;
     color: maroon;
  }
  td{
    padding: 12px;
    font-family: "Verdana";
  
  }
  tr:nth-child(even) {background-color: #87CEFA; 
    border-radius: 14px;}
 </style>
</head>
<body style="background-color: lavender">
  <h1><center><font style="border:9px solid grey"> DISPLAY OF CHEF TABLE </font></center></h1>
 <table>
 <tr>
  <th><br>CHEF_NAME<br><br></th> 
  <th><br>SPECIALITY<br><br></th> 
     <th><br>CATEGORIES_ID<br><br></th> 
     <th><br>TIME<br><br></th> 
  <br><br>
 </tr>
     
 <?php
$conn = mysqli_connect("localhost", "root", "", "restaurant");

  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 

  $sql = "SELECT CHEF_NAME,SPECIALITY,CATEGORIES_ID,TIME FROM chef";
  $result = $conn->query($sql);
  if ($result->num_rows > 0)
   {
   
   while($row = $result->fetch_assoc())
    {
    echo "<tr><td>" . $row["CHEF_NAME"]. "</td><td>" .$row["SPECIALITY"]. "</td><td>" .$row["CATEGORIES_ID"]. "</td><td>" .$row["TIME"]. "</td></tr>";
    }
    echo "</table>";
   
    }
else 
  { 
    echo "0 results"; 
  }
$conn->close();
?>
</table>
    <p style="font-family: Black And White Picture"><a href="chef.html"><font style="color:black">GO BACK</font></a></p>
</body>
</html>