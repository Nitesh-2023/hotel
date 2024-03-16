<!DOCTYPE html>
<html>

<head>
    <title>
    CATEGORIES DELETION
    </title>
</head>
<style>
b{
    font-size: 30px;
    font-family: 'Arial';
    padding: 27px 62px;
} 
input[type=text] {
    width: 110px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 9px;
    font-size: 16px;
    background-color: lightblue;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 25px 20px 22px 10px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
    font-weight: bold;
    font-size: 30px;
}
input[type=text]:focus {
    width: 60%;
}
div{
	font-family: "verdana";
    font-weight: bold;
	font-size: 30px;
	font-style: bold;
	margin-left:25px;
	margin-top: 35px;
}
.btn{
    background-color: navy;
    color: white;
    padding: 16px 10px;
    margin: 8px 20px 20px 50px;
    border-radius: 24px;
    cursor: pointer;
    width: 10%;
    opacity: 0.7;
    align-content: center;
    font-family: "verdana";
    font-weight: bold;
    -webkit-box-shadow: 0px 6px 0px navy;
    -moz-box-shadow: 0px 6px 0px navy;
    box-shadow: 0px 6px 0px navy;
    -webkit-transition: all .1s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    -webkit-transform: translate(0, 5px) rotateX(25deg);
    -moz-transform: translate(0, 4px);
    transform: translate(0, 4px)
    }
.btn:hover 
{
    opacity: 1;
    background-color:navy;
}

</style>
<body style="background-color: lavenderblush">
	<form action="categoriesdelete.php" method="POST">
		<div>Enter CATEGORIES_ID:<input type="text" name="CATEGORIES_ID"><br></div>
		<br><br>
		<button type="submit" value ="Find" class="btn">Delete</button>
	</form>
    
    
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant";


$con = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $a=$_POST['CATEGORIES_ID'];

    if($a!="")
        {
            $sql1 = "SELECT * from categories where CATEGORIES_ID='$a'";
            $result = mysqli_query($con,$sql1);

            if(mysqli_num_rows($result)>0)
            {
            $sql3="DELETE from categories where CATEGORIES_ID='$a'";   // student is the table name
            mysqli_query($con,$sql3);
            echo "<b>Record with CATEGORIES_ID = $a is deleted successfully.<b>";
            }
           else
        {
            echo "<b>!!!Error in Deleting Record!!!<br> Record '$a' was not found in database.<b>" ;
        }
        }else{
                echo "CATEGORIES_ID Field is Empty";
            }
$con->close();
}

?> 
    <p style="font-family: Black And White Picture"><a href="categories.html"><font style="color:black">GO BACK</font></a></p>
</body>
</html>
