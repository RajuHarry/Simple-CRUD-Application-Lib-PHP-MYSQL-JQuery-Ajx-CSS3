<?php

mysql_connect("localhost","root","");
mysql_select_db("cmanage");


if(isset($_POST['add']))          // it sets action for button to import all field data
{                             
$title=$_POST['title'];        //it imports all values from textbox     
$detail=$_POST['detail'];


 
                            

$ins = "INSERT INTO php (title,detail) VALUES ('$title','$detail') ";
mysql_query($ins);


}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E-Library Add Data</title>
<link rel="stylesheet" href="css/mainbody.css" />
<link rel="stylesheet" href="css/menu.css" />
<link rel="stylesheet" href="css/table.css" />
<link rel="stylesheet" href="css/logo.css" />
<style type="text/css">
	.input{
	font-family: Arial, Verdana; 
	font-size: 15px; 
	padding: 5px; 
	border: 5px solid #b9bdc1;
	border-radius:5px; 
	width: 300px; 
	color: #797979;	
	}
	textarea
	{
	font-family: Arial, Verdana; 
	font-size: 15px; 
	padding: 5px; 
	border: 5px solid #b9bdc1;
	border-radius:5px; 
	width: 300px; 
	height:300px;
	color: #797979;	
		
	}
</style>
</head>


<body>
<div id="glass">

<div id="container">
<div id="header">
<?php
 
 include('header.php');

?>

</div>

<div id="maincontent" style="background-image:url(images/mbx.jpg) !important;">
<form  method="post" action="">
	<div style="background: rgba(255, 255, 255,0.3); margin-bottom:-20px;">

		<h2 style=" color:#FFF; padding:20px 10px 0px;text-shadow: 0px 0px 5px #000; ">Elibrary Add Panel</h2>

			<div style="width:400px;height:auto; margin:0px auto; padding-left:100px; padding-bottom:20px;">

			<span style=" color:#903; padding:20px 10px 0px;text-shadow: 0px 0px 5px #FFF; ">Title</span><br />
			<br />

			<input type="text" class="input" placeholder="Here Must Be Heading" style="background: rgba(255, 255, 255,0.5);"name="title"/><br /><br />
			<span style=" color:#903; padding:20px 10px 0px;text-shadow: 0px 0px 5px #FFF; ">Content</span>
			<br /><br />
			<textarea placeholder="Content Write Here" style="background: rgba(255, 255, 255,0.5);" name="detail"></textarea>
			<br />
			<input type="submit" onclick="Prompt()" value="ADD" name="add" style="font-size:12px;box-shadow: 0px 0px 4px #000;margin-top:10px !important;"/>
			<input type="reset" value="RESET" name="reset" style="font-size:12px;box-shadow: 0px 0px 4px #000;margin-top:10px !important;"/>
			</div>

	</div>
</form>
</div>

			
<div id="footer"></div> 

</div>



<!--Glass effect div end-->
</div>
<script type="text/javascript">
		function Prompt()
  			{
  				alert("E-Library Record Added sccsessfully");
  			}
			
			
</script>
</body>
</html>
