<?php 
session_start();
 if($_SESSION['valid_user']=='') 
 {
 header("location:login.php");
 }
mysql_connect("localhost","root","");
mysql_select_db("cmanage");

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Homepage</title>
<link rel="stylesheet" href="css/mainbody.css" />
<link rel="stylesheet" href="css/menu.css" />
<link rel="stylesheet" href="css/table.css" />
<link rel="stylesheet" href="css/logo.css" />

<style type="text/css">

#leftpart {
    float: left;
    width: 180px;
    margin-left: 15px;
	border-radius:0px;
    box-shadow: 0px 0px 4px #000;
    box-shadow: 0px 0px 4px rgba(0,0,0,.5);
    opacity: .95;
}

#rightpart {
    float: left;
    width: auto;
    background-color: #999;
    box-shadow: 0px 0px 4px #000;
    box-shadow: 0px 0px 4px rgba(0,0,0,.5);
    opacity: .95;
    margin-left: 20px;
}
ul.tabs {
    margin: 0;
    padding: 0;
    float: left;
    list-style: none;
    height: 32px;
    border-bottom: 1px solid #999;
    border-left: 1px solid #999;
    width: 100%;
}
ul.tabs li {
    float: left;
    margin: 0;
    padding: 0;
    height: 31px;
    line-height: 31px;
    border: 1px solid #999;
    border-left: none;
    margin-bottom: -1px;
    background: #e0e0e0;
    overflow: hidden;
    position: relative;
}
ul.tabs li a {
    text-decoration: none;
    color: #000;
    display: block;
    font-size: 1.2em;
    padding: 0 20px;
    border: 1px solid #fff;
    outline: none;
}
ul.tabs li a:hover {
    background: #ccc;
}    
html ul.tabs li.active, html ul.tabs li.active a:hover  {
    background: #fff;
    border-bottom: 1px solid #fff;
}
.tab_container {
    margin: auto;
    border: 1px solid #999;
    border-top: none;
    clear: both;
    float: left; 
    width: 750px;
    background: #fff;
    -moz-border-radius-bottomright: 5px;
    -khtml-border-radius-bottomright: 5px;
    -webkit-border-bottom-right-radius: 5px;
    -moz-border-radius-bottomleft: 5px;
    -khtml-border-radius-bottomleft: 5px;
    -webkit-border-bottom-left-radius: 5px;
}
.tab_content {
    padding: 20px;
    font-size: 1.2em;
}
.tab_content h2 {
    font-weight: normal;
    padding-bottom: 10px;
    border-bottom: 1px dashed #ddd;
    font-size: 1.8em;
}
.tab_content h3 a{
    color: #254588;
}
.tab_content img {
    float: left;
    

}
.pg-normal {
                color: black;
                font-weight: normal;
                text-decoration: none;    
                cursor: pointer;    
            }
            .pg-selected {
                color: black;
                font-weight: bold;        
                text-decoration: underline;
                cursor: pointer;
            }
</style>

<script type="text/javascript"src="js/jquery.js"></script>

<script type="text/javascript">

$(document).ready(function() {

    //Default Action
    $(".tab_content").hide(); //Hide all content
    $("ul.tabs li:first").addClass("active").show(); //Activate first tab
    $(".tab_content:first").show(); //Show first tab content
    
    //On Click Event
    $("ul.tabs li").click(function() {
        $("ul.tabs li").removeClass("active"); //Remove any "active" class
        $(this).addClass("active"); //Add "active" class to selected tab
        $(".tab_content").hide(); //Hide all tab content
        var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
        $(activeTab).fadeIn(); //Fade in the active content
        return false;
    });

});
</script>
<script type="text/javascript" src="js/paging.js"></script>


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
<div>
<h2 style=" color:#FFF; padding:20px 10px 0px;text-shadow: 0px 0px 5px #000; ">Welocome To College Management</h2>
</div>
<div id='leftpart'>
<h2 style=" color:#CCC; padding:0px 10px 0px;text-shadow: 0px 0px 5px #000; ">College Management</h2>
                <p style="padding:10px 10px 0px;"> This system is made for College purpose where Student,Staff,E-library
                like hugh data record details can be analyze more prominently.
                </p>
                <p style="padding:5px 10px 0px;">Student</p>
                <p style="padding:5px 10px 0px;">Staff</p>
                <p style="padding:5px 10px 0px;">E-Library</p>

<br /><!--
        				<div id="logos">
  							<a id="cube" href="index.php" style="margin-left:0px; height:auto;">
   							 <img src="./images/logo_home.png" style="height:200px;" alt="College Management" >
  							</a>
                            
						</div>-->

</div>

<div id='rightpart'><ul class="tabs">
        <li><a href="#tab1">Student Details</a></li>
        <li><a href="#tab2">Staff Details</a></li>
        <li><a href="#tab3">Elibrary Deatails</a></li>
      <!--   <li><a href="#tab4">Contact</a></li> -->

    </ul>
    <div class="tab_container">
        <div id="tab1" class="tab_content">
            <h2>Student Records</h2> 
        
<?php

  $sel=mysql_query("select * from student1");   
  
  
?>        
            <table id='tbl' align="center" cellpadding="10" border="0">
<thead>        
  <tr>
    <th class="checkbox">ID</th>
    <th>First Name</th>
    <th>Middle Name</th>
    <th>Surname</th>
    <th>DOB</th>
    
    <th>Phone</th>
    <th>Year</th>

    <th class="checkbox">Update</th>

    
  </tr> 
  </thead>
  <tbody> 
<?php
$i=1;
          while($row = mysql_fetch_array($sel))
          
          {
  ?>
  <tr>
    <td>
    <?php echo $i; ?>
    </td>
    <td><?php echo $row['fname']; ?></td>
    <td><?php echo $row['mname']; ?></td>
    <td><?php echo $row['lname']; ?></td>
    <td><?php echo $row['dob']; ?></td>
    
   <td><?php echo $row['phone']; ?></td>  
    <td><?php echo $row['class']; ?></td>
    
    <td><a href="studentadd.php"><img src="images/Edit.png" title="Edit" alt="Edit"  class="iconimg"/></td>
   
       
  </tr>
<?php
        $i++;  
          }
  
  ?>
  
                                   


  </tbody>
</table>

<center><div id="pageNavPosition" style="margin:20px;"></div></center>


        </div>
        
        
         <!--  STAFF RECORD -->
        <?php

  $sel=mysql_query("select * from staff");   
  
  
?> 

        <div id="tab2" class="tab_content">
            
            <h2>Staff Records</h2>
            <table id='tbl2' align="center" cellpadding="10" border="0">
<thead>

  <tr>
    <th class="checkbox">ID</th>
    <th>First Name</th>
    <th>Middle Name</th>
    <th>Surname</th>
    <th>DOB</th>
    
    <th>Phone</th>
    <th>Year</th>

    <th class="checkbox">Update</th>
  
    
  </tr>
  </thead>

  <tbody>

  <?php
$i=1;
          while($row = mysql_fetch_array($sel))
          
          {
  ?>
  <tr>
    <td>
    <?php echo $i; ?>
    </td>
    <td><?php echo $row['fname']; ?></td>
    <td><?php echo $row['mname']; ?></td>
    <td><?php echo $row['lname']; ?></td>
    <td><?php echo $row['dob']; ?></td>
    
    <td><?php echo $row['phone']; ?></td>
    <td><?php echo $row['class']; ?></td>

    <td><a href="staffadd.php"><img src="images/Edit.png" title="Edit" alt="Edit"  class="iconimg"/></td>
 
       
  </tr>
      <?php
      $i++;
          
          }
  
  ?>

  </tbody>
</table>
<div id="pageNavPosition2"></div> 
  

 
     

</div>
								         <!--  Elibrary RECORD -->
<?php

  $sel=mysql_query("select * from php");   
  
  
?> 
<div id="tab3" class="tab_content">
            <h2>Elibrary</h2>
            
               <table id='tbl3' align="center" cellpadding="10" border="0" style="width:auto;">
<thead>        
  <tr >

    <th class="checkbox">ID</th>
    <th>Title</th>
    <th>Detail</th>
    
    
    <th class="checkbox">Update</th>

    
  </tr> 
  </thead>
  <tbody> 
   <?php

$i=1;
   
   
          while($row = mysql_fetch_array($sel))
          
          {
  ?>
  <tr >
   

    <td>
      <?php echo $i;  ?>
    </td>
    <td><?php echo $row['title']; ?></td>
    <td><textarea style="width:400px; height:50px; font-size:12px;" readonly="0"><?php echo $row['detail']; ?></textarea></td>


    <td><a href="elibadd.php?"><img src="images/Edit.png" title="Edit" alt="Edit"  class="iconimg"/></a></td>

       
  </tr>
<?php

$i++;
          
          }
  
  ?>
  </tbody>
</table>
<!--        <div id="pageNavPosition3"></div>
-->
        </div> 
         <!--    <div id="tab4" class="tab_content">
            <h2>Contact</h2>
             -->
</div>
</div>

<!-- midcontainer End Here -->
<div class="clear"></div>





</div>
<div id="footer"> 
<center><div style="padding:20px;box-shadow: 0px 0px 1px 1px #333;background: rgba(255, 255, 255,0.4);">
<span  style="color:#000; padding:20px 10px 0px;text-shadow: 0px 0px 5px #fff; "><a href="Index.php" style="color:#000;text-decoration:none;">Home</a></span>

<span style="color:#000; padding:20px 10px 0px;text-shadow: 0px 0px 5px #fff; ">|</span> 
<span  style="color:#000; padding:20px 10px 0px;text-shadow: 0px 0px 5px #fff;text-decoration:none; "><a href="studentadd.php" style="color:#000;text-decoration:none;" >Student</a> </span>
<span style="color:#000; padding:20px 10px 0px;text-shadow: 0px 0px 5px #fff; ">|</span> 
<span  style="color:#000; padding:20px 10px 0px;text-shadow: 0px 0px 5px #fff; "><a href="staffadd.php" style="color:#000;text-decoration:none;">Staff</a></span>
<span style="color:#000; padding:20px 10px 0px;text-shadow: 0px 0px 5px #fff; ">|</span>
<span  style="color:#000; padding:20px 10px 0px;text-shadow: 0px 0px 5px #fff; "><a href="elibadd.php" style="color:#000;text-decoration:none;">E-Library </a></span>
<span style="color:#000; padding:20px 10px 0px;text-shadow: 0px 0px 5px #fff; ">|</span>
<span  style="color:#000; padding:20px 10px 0px;text-shadow: 0px 0px 5px #fff; "><a href="file.php" style="color:#000;text-decoration:none;">File Upload </a></span>
<br><br>
<span  style="color:#000; padding:20px 10px 0px;text-shadow: 0px 0px 5px #fff; ">Copyright © 2013, Rajuharry  | Email :Rajuharry4592@gmail.com</span>
</div>
</center>
</div>
</div>

<!--Glass effect div end-->
</div>



<script type="text/javascript">
        var pager = new Pager('tbl', 2); 
        pager.init(); 
        pager.showPageNav('pager', 'pageNavPosition'); 
        pager.showPage(1);
</script>

 <!--
 
      
  <script type="text/javascript">
        var pager = new Pager('tbl2', 2); 
        pager.init(); 
        pager.showPageNav('pager', 'pageNavPosition2'); 
        pager.showPage(1);
    </script>   
    
    <script type="text/javascript">
        var pager = new Pager('tbl3', 2); 
        pager.init(); 
        pager.showPageNav('pager', 'pageNavPosition3'); 
        pager.showPage(1);
    </script>-->
</body>
</html>
