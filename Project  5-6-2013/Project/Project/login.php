<?php
session_start();    
date_default_timezone_set("Asia/Calcutta");
isset($_SESSION['time']);
$_SESSION['time']=date("dmYHis");
$_SESSION['userid']=''; 
$ERROR='';
// Grab User submitted information
if(isset($_POST['Login']))
{
$con=mysqli_connect("localhost","root","","cmanage");
if(isset($_POST['username']) && isset($_POST['pass']))
$username = mysql_escape_string(stripslashes(addslashes($_POST["username"])));
$pass = md5(mysql_escape_string(stripslashes(addslashes($_POST["pass"]))));

// Connect to the database
// Make sure we connected succesfully
if (mysqli_connect_errno())
  {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
          session_destroy();
        exit();
  }

$result = mysqli_query($con,"SELECT * FROM login WHERE uname='".$username."' and pwd= '".$pass."' LIMIT 1 ");

$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
 
 $_SESSION["valid_id"] = $obj->id;
        $_SESSION["valid_user"] = $_POST["username"];
        $_SESSION["valid_time"] = time();
 
 header("location:index.php");
 }
 else {
 $ERROR= "<span style='margin-left:54px; padding:10px; border-radius: 0px;box-shadow: 0px 0px 4px #000;box-shadow: 0px 0px 4px rgba(0,0,0,.5);
'> Wrong Username or Password</span>";
 }


}
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Login</title>
    <meta name="author" content="ccomadmin" >
    <meta name="description" content="jQuery plugin for creating an unique page transitioning system">
    <link rel="stylesheet" href="css/curtain.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/Login.css">
</head>
<body>

<ol class="curtains">
    <!--<li id="section-1" class="cover" data-parallax-background="-.05">-->
    <li id="section-1" class="cover">
        <header data-fade="550" data-slow-scroll="3">
            <h1>Admin Login Panel</h1><br>
            <h2>Scroll Down to Log in </h2>
        </header>
    </li>
    <li id="section-2">
 
        <div id="loginform">

	<form action="" method="post">
    
		<label for="name">Username:</label>
		
		<input type="name" class="text" id="username" name="username" placeholder="Name">
		
		<label for="username">Password:</label>
        
        <p>
        <a href="#">Forgot your password?</a>
		
		<input type="password" id="pass" name="pass" class="text" placeholder="Password" >
    
        <div id="lower">
		
		<input type="checkbox">
        <label class="check" for="checkbox">Keep me logged in</label>
		
		<input type="submit" value="Login" name="Login">
		
		</div>
		
    </form>
    <br/>
        <?php echo $ERROR; ?> 
</div>

     
        </article>
    </li>
    
   </ol>

<script src="js/Curtain js/jquery.min.js"></script>
<script src="js/Curtain js/curtain.js"></script>
<script>
    $(function(){
       $('.curtains').curtain({
           scrollSpeed: 300,
           controls: '.menu',
           curtainLinks: '.curtain-links',
           nextSlide: function(){
            console.log("ok");
           }
       });
    });
</script>
</body>
</html>