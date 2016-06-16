
<?php
session_start();
 if($_SESSION['valid_user']=='') {
 header("location:login.php");
 }
 
 
mysql_connect("localhost","root","");
mysql_select_db("cmanage");


?>





<html>
<head>

<title>Other Details</title>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add for DB</title>
<link rel="stylesheet" href="css/mainbody.css" />
<link rel="stylesheet" href="css/menu.css" />
<style TYPE="text/css" > 

	* {
		 margin: 0; 
		 padding:0;
	}
	
	body 
	{
		font-family: Verdana, Arial;
		margin:10px;
	 
	 }
	 #container
	{
		margin:auto; 
		width: 980px; 

	}
#formlayout
{
	width:980px;
	height:500px;
	margin:auto;
	background: rgba(255, 255, 255,0.3);
	-webket-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
	padding: 10px;
}

#leftdiv 
	{
	width:420px;
	padding: 40px;
	border-radius:2px;
	box-shadow:0px 0px 1px 1px #333;
	background: rgba(255, 255, 255,0.4);

	float:left;
	height:395px;
	}
#rightdiv
	{
	float:left;
	width:420px;
	padding: 20px;
	height:auto;	
	border-radius:2px;
	box-shadow:0px 0px 1px 1px #333;
	background: rgba(255, 255, 255,0.4);
	margin-left: 20px;

	}	
 table {
 	margin: auto;
	background: rgba(255, 255, 255,0.5);
 	
 	border: 2px solid #fff;
 	
 	}

 table tr td
 {
 	width: 300px;
 	padding: 10px;
 	
 	}

</style>
</head>

<body>

<div id="container">

<div id="formlayout">
<div id="leftdiv">
<?php

if(isset($_GET['id']))
	{
	$id = $_GET['id'];
	$sel = mysql_query("select * from staff where id=$id");
	$row=mysql_fetch_array($sel);
	
	}

?>


<table style="margin-top:35px;">

<tr>

<td>First Name:</td>

<td><?php echo $row['fname']; ?></td>
</tr>
<tr>

<td>Middle Name:</td>

<td><?php echo $row['mname']; ?></td>
</tr>
<tr>

<td>Last Name:</td>

<td><?php echo $row['lname']; ?></td>
</tr>
<tr>

<td>DOB:</td>

<td><?php echo $row['dob'];?></td>
</tr>
<tr>

<td>Email:</td>

<td><?php echo $row['email']; ?></td>
</tr>
<tr>

<td>Phone:</td>

<td><?php echo $row['phone']; ?></td>
</tr>
<tr>

<td>Year:</td>

<td><?php echo $row['class']; ?></td>
</tr>
<tr>

<td>Gender:</td>

<td><?php echo $row['radio']; ?></td>
</tr>


</table>

</div>


<div id="rightdiv">
<fieldset style="padding:22px;">
<legend>Address</legend>
<table>




<tr>

<td>Main Road:</td>

<td><?php echo $row['ms']; ?></td>
</tr>
<tr>

<tr>

<td>Landmark:</td>

<td><?php echo $row['landmark']; ?></td>
</tr>
<tr>
<tr>

<td>Room:</td>

<td><?php echo $row['room']; ?></td>
</tr>
<tr>

<td>City:</td>

<td><?php echo $row['city']; ?></td>
</tr>
<tr>

<td>State:</td>

<td><?php echo $row['state']; ?></td>
</tr>
<tr>

<td>Pincode:</td>

<td><?php echo $row['pin']; ?></td>
</tr>
<tr>

<td>Nationality:</td>

<td><?php echo $row['Nation']; ?></td>
</tr>
<tr>

<td>Roll No:</td>

<td><?php echo $row['roll']; ?></td>
</tr>
<tr>

<td>College Id:</td>

<td><?php echo $row['id']; ?></td>
</tr>
</table>
</fieldset>



</div>




</div>






<div id="footer" style="background: rgba(255, 255, 255,0.3);width:1000px;border-radius:5px;"> 
  <br><br><center><a href="staffadd.php" style="text-decoration:none;"><span style="font-size:20px; color:#FFF;text-shadow: 0px 0px 5px #000; ">Goto Staff Record</span></a></center>

</div>


</div>





</body>


</html>