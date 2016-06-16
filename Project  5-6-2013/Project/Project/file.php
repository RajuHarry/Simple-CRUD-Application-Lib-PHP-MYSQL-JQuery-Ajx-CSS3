<?php
session_start();
if ($_SESSION['valid_user'] == '') {
    header("location:login.php");
}
mysql_connect("localhost", "root", "");
mysql_select_db("cmanage");

if(isset($_POST['submit']))
{

	$img=$_FILES['file']['name'];
	$file = $_FILES['file']['tmp_name'];
	move_uploaded_file($file, 'img/'.$img);
	$ins = "INSERT INTO fileupload(file) VALUES ('$img')";
	$res=mysql_query($ins);
	echo '<script> location.href="fileupload.php" </script>'; 

}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>File</title>
<link rel="stylesheet" href="css/mainbody.css" />
<link rel="stylesheet" href="css/menu.css" />
<link rel="stylesheet" href="css/table.css" />
<link rel="stylesheet" href="css/logo.css" />
</head>


<body>
<div id="glass">

<div id="container">
<div id="header">
<?php
 
 include('header.php');

?>

</div>

<div id="maincontent" style="background-image:url(images/mbx3.jpg) !important;">

<h2 style=" color:#FFF; padding:20px 10px 0px;text-shadow: 0px 0px 5px #000; ">File Upload</h2>
<br />
<div style="margin:auto; border:1px solid #999;width:800px; padding:10px;">


<form method="post" enctype="multipart/form-data"  action="fileupload.php">
<div style="margin:10px; border:1px solid #999;width:400px; height:300px;background: rgba(255, 255, 255,0.3);">


</div>
<span style="margin-left:40px;">
<input type="file" name="file" value="">
<input type="submit" name="submit" value="Upload">
</span>

</form>
</div>
<div class="clear"></div>

</div>


<div id="footer"> 

</div>
</div>

<!--Glass effect div end-->
</div>

</body>
</html>
