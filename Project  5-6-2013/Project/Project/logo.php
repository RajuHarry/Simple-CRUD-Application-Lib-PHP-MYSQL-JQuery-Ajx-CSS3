<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student</title>



<link rel="stylesheet" href="css/logo.css" />
<style type="text/css">
#logos {
   
   -ms-perspective: 800px;
   -webkit-perspective: 800px;
   -o-perspective: 800px;
   perspective: 800px; 
}
#cube{
  display: block;   margin: 30px auto;
  height: 50px;  width: 50px;
  -moz-transform-style: preserve-3d;
  -moz-transform:rotateX(0) rotateY(0) rotateZ(0);
  -webkit-transform-style: preserve-3d;
  -webkit-transform: rotateX(0) rotateY(0) rotateZ(0);
  -ms-transform-style: preserve-3d;
  -ms-transform: rotateX(0) rotateY(0) rotateZ(0);
  -o-transform-style: preserve-3d;
  -o-transform: rotateX(0) rotateY(0) rotateZ(0);
  transform-style: preserve-3d;
  transform: rotateX(0) rotateY(0) rotateZ(0);

}
#front{display:none;}
#back{
  position: absolute;  height: 50px;  width: 50px;
  -moz-backface-visibility: visible;
  -moz-transform:  rotateY(180deg) translateZ(100px);
  -ms-backface-visibility: visible;

  -webkit-backface-visibility: visible;

  -o-backface-visibility: visible;
  -o-transform: rotateY(180deg) translateZ(100px);
  backface-visibility: visible;
  transform: rotateY(180deg) translateZ(100px);
}
a:hover   {
-moz-animation: upyourscache1369120909156 5s infinite linear;
-ms-animation: upyourscache1369120909156 5s infinite linear;
-webkit-animation: upyourscache1369120909156 5s infinite linear;
-o-animation: upyourscache1369120909156 5s infinite linear;
animation: upyourscache1369120909156 5s infinite linear;

}
@-moz-keyframes upyourscache1369120909156 {
0% { -moz-transform: rotateY(0) ;}
100% { -moz-transform: rotateY(360deg) ;}
}
@-webkit-keyframes upyourscache1369120909156 {
0% { -webkit-transform: rotateY(0) ;}
100% { -webkit-transform: rotateY(360deg) ;}
}
@-ms-keyframes upyourscache1369120909156 {
0% { -ms-transform: rotateY(0) ;}
100% { -ms-transform: rotateY(360deg) ;}
}
@-o-keyframes upyourscache1369120909156 {
0% { -o-transform: rotateY(0) ;}
100% { -o-transform: rotateY(360deg) ;}
}
@keyframes upyourscache1369120909156 {
0% { transform: rotateY(0) ;}
100% { transform: rotateY(360deg) ;}
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

<div id="maincontent">

<h2 style=" color:#FFF; padding:20px 10px 0px;text-shadow: 0px 0px 5px #000; ">Feedback</h2>

<div class="clear"></div>

</div>


<div id="footer"> 


</div>
</div>

<!--Glass effect div end-->
</div>
</body>
</html>
