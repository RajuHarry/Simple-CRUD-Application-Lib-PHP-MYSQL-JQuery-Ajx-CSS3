<?php
  //Host name
  $host = "localhost";
        //Username
  $user = "root";
        //Password
  $password = "";
        //Database Name
  $database = "php";
  $db = mysql_connect($host, $user, $password);
  if($db)
  {
   $select_db = mysql_select_db($database);
   if(!$select_db)
   {
    echo 'Database Error:'. mysql_error();
   }
  }else
  {
   echo 'Connection Error:'. mysql_error();
  }
 ?>
