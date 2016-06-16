<?php
session_start();
echo '<link rel="shortcut icon" href="/r.ico" type="image/x-icon" />';
echo '<link rel="icon" href="r.ico" type="image/x-icon" />'; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - Login, Signup</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="php2" >
<link rel="stylesheet" type="text/css" href="index.css" />
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">

</script>
</head>
<body>
<?php
include("not/not.php");
if(isset($_POST['LogIn']))
{
	//$_SESSION['username']=$_POST['nname'];
	$nname=$_POST['nname'];
	$npassword=$_POST['npassword'];
	if(strstr($nname,"'"))
		{
			echo 'User name invalid';
		}
		else
		{
			//echo strstr("'",$uname);
			$sel="SELECT * FROM note_db WHERE nname='$nname' AND npassword='$npassword'";
			$rel=mysql_query($sel);
			if(mysql_num_rows($rel)==0)
				{
					$dis='<font face="verdana" color="violet">User Name & Password invalid</font>';
				}
				else
				{
					$_SESSION['username']=$nname;
					echo '<script language="javascript">location.href="home.php"</script>';
					//echo $_SESSION['username'];
					//echo $nname;
					//echo $npassword;
				}
		}
}

?>
<div align="center">
<div class="roundbox">
<font  face="Times New Roman" color="#003399">
<form method="post" action="">
<table width="62%" border="0" cellspacing="0" cellpadding="0">
<tr>
<h1 align="center">
<font  face="verdana" color="#003399">LogIn</font></h1>
</tr>
<tr>
<td>User Name</td>
<td>Password</td></tr>
<tr><td><input type="text" name="nname" value="" placeholder="Your Name" /></td>
<td><input type="password" name="npassword" value="" placeholder="Password" /></td>
<td colspan="2"><form method="post" action=""><input type="submit" name="LogIn" value="Log In" /></form></td>
</tr>
<tr>
<td> <input type="checkbox">Keep me logged in</td>
<td><a href="forgetpassword.php">Forgot your password ?</a></td>
</tr>
<tr></tr>
<tr>
<th colspan="4" align="center"><?php if(isset($dis)) { echo $dis; } ?></tr>
</table>
</font>
</form>
</div>
</div>
</body>
</html>
