
<?php
// Adam's Custom PHP MySQL Pagination Tutorial and Script
// You have to put your mysql connection data and alter the SQL queries(both queries)
// This script is in tutorial form and is accompanied by the following video:
// http://www.youtube.com/watch?v=K8xYGnEOXYc
mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("cmanage") or die (mysql_error());
//////////////  QUERY THE MEMBER DATA INITIALLY LIKE YOU NORMALLY WOULD
$sql = mysql_query("SELECT id, title, detail FROM php ORDER BY id ASC");
//////////////////////////////////// Adam's Pagination Logic ////////////////////////////////////////////////////////////////////////
$nr = mysql_num_rows($sql); // Get total of Num rows from the database query

if (isset($_GET['pn'])) { // Get pn from URL vars if it is present
    $pn = preg_replace('#[^0-9]#i', '', $_GET['pn']); // filter everything but numbers for security(new)
    //$pn = ereg_replace("[^0-9]", "", $_GET['pn']); // filter everything but numbers for security(deprecated)
} else { // If the pn URL variable is not present force it to be value of page number 1
    $pn = 1;
} 
//This is where we set how many database items to show on each page 
$itemsPerPage = 1; 
// Get the value of the last page in the pagination result set
$lastPage = ceil($nr / $itemsPerPage);
// Be sure URL variable $pn(page number) is no lower than page 1 and no higher than $lastpage
if ($pn < 1) { // If it is less than 1
    $pn = 1; // force if to be 1
} else if ($pn > $lastPage) { // if it is greater than $lastpage
    $pn = $lastPage; // force it to be $lastpage's value
} 
// This creates the numbers to click in between the next and back buttons
// This section is explained well in the video that accompanies this script
$centerPages = "";
$sub1 = $pn - 1; 
$sub2 = $pn - 2;  
$add1 = $pn + 1;   
$add2 = $pn + 2;  
if ($pn == 1) {
    $centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $add1 . '">' . $add1 . '</a> &nbsp;';
} else if ($pn == $lastPage) {
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;';
    
    $centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
} else if ($pn > 2 && $pn < ($lastPage - 1)) {
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $sub2 . '">' . $sub2 . '</a> &nbsp;';
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;';
    $centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $add1 . '">' . $add1 . '</a> &nbsp;';
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $add2 . '">' . $add2 . '</a> &nbsp;';
} else if ($pn > 1 && $pn < $lastPage) {
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;';
    $centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $add1 . '">' . $add1 . '</a> &nbsp;';
}
// This line sets the "LIMIT" range... the 2 values we place to choose a range of rows from database in our query
$limit = 'LIMIT ' .($pn - 1) * $itemsPerPage .',' .$itemsPerPage; 
// Now we are going to run the same query as above but this time add $limit onto the end of the SQL syntax
// $sql2 is what we will use to fuel our while loop statement below
$sql2 = mysql_query("SELECT id, title, detail FROM php ORDER BY id ASC $limit"); 
//////////////////////////////// END Adam's Pagination Logic ////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////// Adam's Pagination Display Setup /////////////////////////////////////////////////////////////////////
$paginationDisplay = ""; // Initialize the pagination output variable
// This code runs only if the last page variable is ot equal to 1, if it is only 1 page we require no paginated links to display
if ($lastPage != "1"){
    // This shows the user what page they are on, and the total number of pages
    $paginationDisplay .= 'Page <strong>' . $pn . '</strong> of ' . $lastPage. '&nbsp;  &nbsp;  &nbsp; ';
    // If we are not on page 1 we can place the Back button
    if ($pn != 1) {
        $previous = $pn - 1;
        $paginationDisplay .=  '&nbsp;  <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $previous . '"> Back</a> ';
    } 
    // Lay in the clickable numbers display here between the Back and Next links
    $paginationDisplay .= '<span class="paginationNumbers">' . $centerPages . '</span>';
    // If we are not on the very last page we can place the Next button
    if ($pn != $lastPage) {
        $nextPage = $pn + 1;
        $paginationDisplay .=  '&nbsp;  <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $nextPage . '"> Next</a> ';
    } 
}
///////////////////////////////////// END Adam's Pagination Display Setup ///////////////////////////////////////////////////////////////////////////
// Build the Output Section Here
$outputList = '';
while($row = mysql_fetch_array($sql2)){ 

    $id = $row["id"];
    $firstname = $row["title"];
    $country = $row["detail"];

    $outputList .= '<div style="width:auto; background-color:#ccc;border-radius:2px;box-shadow:0px 0px 1px 1px #333;background: rgba(255, 255, 255,0.4);padding:5px 11px; "><h5>' . $firstname . '</h5><div style="width:auto; background-color:#ccc;border-radius:2px;box-shadow:0px 0px 1px 1px #333;background: rgba(255, 255, 255,0.4);padding:5px 11px;"><h5>' . $country . ' </h5></div><hr /></div>';
    
} // close while loop
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E-library</title>
<link rel="stylesheet" href="css/mainbody.css" />
<link rel="stylesheet" href="css/menu.css" />
<link rel="stylesheet" href="css/logo.css" />

<style type="text/css">
body {
margin: 0px auto;

}

#container
{
	width:980px;
	margin:auto;
}
#header
{
	width:980px;
	margin:auto;
	height:160px;
	background-color:#999;
}


.leftlogo
{
	float:left;width:50%;
}



.outer_container {
    
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



</style>
		<link rel="stylesheet" href="css/piemenu.css">
      <link rel="stylesheet" href="css/mainbody.css" />
      <link rel="stylesheet" href="css/pagination.css"  />
</head>

<body>
<div id="glass">
<div id="container">

<div id="header">

<?php
 
 include('userheader.php');

?>

</div>

<div id="piemenuheader">
<h2></h2>
  <?php include('piemenu.php') ?>   
</div>
    <div id="maincontent">
		
        <div>
        <h2 style=" color:#FFF; padding:10px 10px 0px;text-shadow: 0px 0px 5px #000; ">Welocome To E-Library</h2>
		</div>

                <div id='leftpart'>Hello left</div>
				 
          <div  id="rightpart" style="padding:10px 0px;"> 
          
         <!-- <div style="margin-left:64px; margin-right:64px;">
   <h2>Total Items: <?php echo $nr; ?></h2>
  </div> -->
      <div style="background: rgba(255, 255, 255,0.7);box-shadow: 0px 0px 4px #000;margin: 0px 30px; padding:6px;  border:#999 1px solid;"><?php echo $paginationDisplay; ?></div>
      <div style="margin:10px 30px; "><?php print "$outputList"; ?></div>
      <div style="background: rgba(255, 255, 255,0.7);box-shadow: 0px 0px 4px #000;margin:0px 30px;  padding:6px;  border:#999 1px solid;"><?php echo $paginationDisplay; ?></div>  
          
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
