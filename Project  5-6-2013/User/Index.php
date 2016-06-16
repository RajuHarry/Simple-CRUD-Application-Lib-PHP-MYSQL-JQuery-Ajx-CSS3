<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome To CCOM</title>
<link rel="stylesheet" href="css/mainbody.css" />
<!--<link rel="stylesheet" href="css/piemenu.css"/>-->
<link rel="stylesheet" href="css/menu.css" />
<link rel="stylesheet" href="css/logo.css" />
<link rel="stylesheet" href="css/book.css" />


<style type="text/css">

/*.outer_container {
    
	height: 48px;
    position: relative;
}

.demo
{
	width:49px;
	margin:auto;
	
}

#piemenuheader
{
	
	background-color:#CCC;
	height:auto;
	width: 100%;
	margin-top:10px;
    padding:0px 0px 10px 0px;
	border-radius:2px;
	box-shadow:0px 0px 1px 1px #333;
	background: rgba(255, 255, 255,0.4);
}
*/

</style>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/jquery.menu.js" type="text/javascript"></script>
<script src="js/jquery-ui-1.8.20.custom.min.js" type="text/javascript"></script>
</head>

<body>
<div id="glass">
<div id="container">

<div id="header">

<?php
 
 include('userheader.php');

?>

</div>

<!--<div id="piemenuheader">
<h2></h2>
  <?php include('piemenu.php') ?>   
</div>-->
    <div id="maincontent">
		
        <div>
        <h2 style=" color:#FFF; padding:10px 10px 0px;text-shadow: 0px 0px 5px #000; ">Welocome To CCOM</h2>
		</div>

                <div id='leftpart'> 

                <div id="logos">
  							<a id="cube" href="index.php" style="margin-left:7px;margin-top:150px; height:auto;">
   							 <img src="./images/logo_home.png" style="height:200px;max-width:170px; " alt="College Management" >
  							</a>
                            
						</div>

                
                
                </div>
				 
          <div id="rightpart">          	
 			<div id="bookheader">

          			<?php include('book.php') ?>   

            </div>

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
