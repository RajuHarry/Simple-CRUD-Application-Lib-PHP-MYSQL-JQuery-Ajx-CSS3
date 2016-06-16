<?php
	
$db_name = "cmanage";				// The database we created earlier in phpMyAdmin.
$db_server = "localhost";	// Change if you have this hosted.
$db_user = "root";				// Your USERNAME	
$db_pass = ""; 				// Your PASSWORD. Working locally, mine is blank. Change if you plan on deploying.


$mysqli = new MySQLi($db_server, $db_user, $db_pass, $db_name) 
			or die(mysqli_error());
			
	if($_POST['delete']) // from button name="delete"
	{
		$checkbox = $_POST['checkbox']; //from name="checkbox[]"
		$countCheck = count($_POST['checkbox']);
		
		
		                                                                                                   
		for($i=0;$i<$countCheck;$i++)
		{
			$del_id  = $checkbox[$i];
			
			$sql = "DELETE from student1 where id = $del_id";
			$result = $mysqli->query($sql) or die(mysqli_error($mysqli));
			
		}
			if($result)
		{	
				header('Location: studentadd.php');
			}
			else
			{
				echo "Error: ".mysql_error();
			}
	}
?>