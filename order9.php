<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: Arial, Helvetica, sans-serif;

}
{
    box-sizing: border-box;
}

/* Add padding to containers */
.container {
  
    padding: 15px;
  
}

/* Full-width input fields */
input[type=text], input[type=text] 
    {
    width: 95%; 
    padding: 14px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border-radius: 10px;
    background: #F0F0F4;
}

input[type=text]:focus, input[type=text]:focus {
    background: white;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color: mediumorchid;
    color: white;
    padding: 15px 21px;
    margin: 8px 0;
    border-radius: 10px;
    cursor: pointer;
    width: 25%;
    opacity: 0.5;
}

.registerbtn:hover {
    opacity: 1;
}

a {
    color: mediumseagreen;
}

.signin {
    background-color: #ffffff;
    text-align: center;
}
</style>
</head>
<body>
<form ACTION="orderbihar.php"METHOD="POST">
  <div class="container">
    <center><h1 style="color:#B22222" size="45";>GIVE APPROPRIATE DETAILS</h1></center>
    <hr>
      
      <label for="ORD_ID"><b>ORD_ID</b></label>
    <input type="text" placeholder="Enter ORD_ID" name="ORD_ID" required>
      
      <label for="ITEM_ID"><b>ITEM ID</b></label>
    <input type="text" placeholder="Enter ITEM_ID" name="ITEM_ID" required>
	<label for="MOB"><b>MOBILE NO</b></label>
    <input type="text" placeholder="Enter MOBILE NUMBER" name="MOB" required>

    <label for="QUANTITY"><b>QUANTITY</b></label>
    <input type="text" placeholder="Enter QUANTITY" name="QUANTITY" required>
      
       <label for="ITEM_RATE"><b>ITEM RATE</b></label>
    <input type="text" placeholder="Enter ITEM RATE" name="ITEM_RATE" required>
      
      <label for="TOTAL"><b>TOTAL</b></label>
    <input type="text" placeholder="Enter TOTAL" name="TOTAL" required>
      
      <button type="update" class="registerbtn">UPDATE</button>
    <button type="reset" class="registerbtn">RESET</button>
  </div>
</form>
<p style="font-family: Black And White Picture"><a href="main.html"><font style="color:black">GO BACK</font></a></p>
</body>
</html>

