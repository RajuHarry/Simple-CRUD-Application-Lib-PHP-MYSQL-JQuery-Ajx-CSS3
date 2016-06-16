<?php

mysql_connect("localhost","root","");
mysql_select_db("cmanage");

if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$sel = mysql_query("select * from staff where id=$id");
	$row=mysql_fetch_array($sel);
	header("location='index.php'");
	
}




if(isset($_POST['add']))          // it sets action for button to import all field data
{                             
$fname=$_POST['fname'];        //it imports all values from textbox     
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$ms=$_POST['ms'];
$room=$_POST['room'];
$land=$_POST['land'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];  
$radio=$_POST['radio1'];
$class=$_POST['clas'];
$nation=$_POST['nation']; 
$roll=$_POST['rollnum']; 
$dob=$_POST['dob']; 
                            

$update = "update staff set fname='$fname',mname='$mname',lname='$lname',email='$email',phone='$phone',ms='$ms',landmark='$land',room='$room',city='$city',state='$state',pin='$zip',radio='$radio',class='$class',nation='$nation',roll='$roll',dob='$dob' where id=$id ";

$res=mysql_query($update);

echo '<script> location.href="Addstaffdata.php" </script>'; 

}


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add for DB</title>
<style TYPE="text/css" > 

	* {
		 margin: 0; 
		 
	}
	
	body 
	{
		font-family: Verdana, Arial;
		margin:10px;
	 
	 }
	 
	a 
	{ 
	text-decoration: none; 
	}
	.container
	{
		margin:auto; 
		width: 980px; 
		background: #fff;
	}
	#formlayout
{
	width:980px;
	height:510px;
	margin:auto;
}
	#header
	{
		width:920px;
		margin:auto;
		height:50px;
		background-color: #96C;
	}
	h3 
	{ 
	margin-bottom: 15px;
	font-size: 22px; 
	color:#FFF;
	}

	#leftdiv 
	{
	width:420px;
	padding: 20px;
	background: #96C;
	margin-left:30px;
	float:left;
	height:435px;
	}
	#rightdiv
	{
	float:left;
	width:420px;
	padding: 20px;
	height:435px;	
	background-color:#96C;
	}
	#footerdiv
{
	width:920px;
	background-color:#CCC;
	margin-left:30px;
}

	.field
	{
		margin-bottom:7px;
	}
	.lbl 
	{
	font-family: Arial, Verdana; 
	color:#FFF;
	display: block; 
	float: left; 
	
	margin-right:10px; 
	text-align: right; 
	width: 120px; 
	line-height: 25px; 
	font-size: 15px; 
	}
	.input{
	font-family: Arial, Verdana; 
	font-size: 15px; 
	padding: 5px; 
	border: 1px solid #b9bdc1; 
	width: 215px; 
	
	color: #797979;	
	}
	.msg
	{
		margin-left:130px;
		
		font-size:10px;
		color:#FFF;
	}
	</style>  
   <link rel="stylesheet" href="css/jquery-ui.css" />
    <link rel="stylesheet" href="/resources/demos/style.css" />
      <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

   <script type="text/javascript">
   
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
  
  <script type="text/javascript"> 
function checkEmail() {

    var email = document.getElementById('txtEmail');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
    email.focus;
    return false;
 }
}



function numbersonly(myfield, e, dec) {
    var key;
    var keychar;

    if (window.event)
        key = window.event.keyCode;
    else if (e)
        key = e.which;
    else
        return true;
    keychar = String.fromCharCode(key);

    // control keys
    if ((key == null) || (key == 0) || (key == 8) ||
            (key == 9) || (key == 13) || (key == 27))
        return true;

    // numbers
    else if ((("0123456789").indexOf(keychar) > -1))
        return true;

    // decimal point jump
    else if (dec && (keychar == ".")) {
        myfield.form.elements[dec].focus();
        return false;
    }
    else
        return false;
}  


function f(item,lbl) {
var el=item.value;
if(el=="") {
	document.getElementById(lbl).innerHTML = '<br><span class="msg">Please enter '+document.getElementById(lbl).title +' </span>';
	}
	
	else {
		document.getElementById(lbl).innerHTML = '';
		}
}



</script>
</head>

<body><form  method="post" action="">

<div class="container">
<div id="formlayout">
<div id="header">
<h3 align="center" style="padding-top:10px;">ADD Form</h3>
</div>
<div id="leftdiv" >

<div class="field">
	<span class="lbl">First Name</span>
  	<input type="text" class="input" id="bang" onblur="f(this,'lblfname');" name="fname" value="<?php echo $row['fname']; ?>"/>
    <label id='lblfname' name='lblfname' title="First Name"></label>
	
</div>

<div class="field">
	<span class="lbl">Middle Name</span>
  	<input type="text" class="input" id="bang2"  name="mname" onblur="f(this,'lblmname');" value="<?php echo $row['mname'];?>"/> 
    <label id='lblmname' name='lblmname' title="Middle Name"></label>
	
</div>
<div class="field">
	<span class="lbl">Last Name</span>
  	<input type="text" class="input" id="bang3" name="lname" onblur="f(this,'lbllname');" value="<?php echo $row['lname'];?>"/> 
        <label id='lbllname' name='lbllname' title="Last Name"></label>

	
</div>
<div class="field">
	<span class="lbl">DOB</span>
  	 <input type="text" id="datepicker" class="input" name="dob" value="<?php echo $row['dob'];?>"/>
	
</div>
<div class="field">
	<span class="lbl">Email</span>
  	<input type="text" onblur="Javascript:checkEmail();" class="input" id="txtEmail" name="email" value="<?php echo $row['email'];?>"/> 
	
</div>
<div class="field">
	<span class="lbl">Phone</span>
  	<abbr title="This field Must be digit only!"><input type="text" onKeyPress="return numbersonly(this, event);" maxlength="10" class="input" name="phone" value="<?php echo $row['phone'];?>"/> </abbr>
	
</div>
<div class="field" style="margin-top:40px;">
	<span class="lbl">Year</span>
  	<select style="height:30px; width:120px;border-radius: 0px;border:hidden;padding:0px 0px 0px 10px; " class="input" name="clas">
				   <option name="clas">F.Y.Bsc.(I.T)</option>
                   <option name="clas">S.Y.Bsc.(I.T)</option>
                   <option name="clas">T.Y.Bsc.(I.T)</option>

				   </select>
	
</div>
<div class="field"style="margin-top:40px;">
	<span class="lbl">Gender</span>
	<input type="text" class="input" id="bang3" name="radio1" onblur="f(this,'lbllname');" value="<?php echo $row['radio'];?>"/>
  </div>
</div>       
<div id="rightdiv">
<fieldset>
    <legend align="left"><span style="color:#FFF;">Address</span></legend>
   	<div class="field">
    <span class="lbl">Main Street</span>
    <input type="text" class="input" id="bang" onblur="f(this,'lblmstreetname');" name="ms" value="<?php echo $row['ms'];?>"/>  
    <label id='lblmstreetname' name='lblmstreetname' title="Main Street Name"></label>
    <br /></div>
    <div class="field">
    <span class="lbl">Landmark</span>
    <input type="text" class="input" id="bang" onblur="f(this,'lbllandname');" name="land" value="<?php echo $row['landmark'];?>"/> 
    <label id='lbllandname' name='lbllandname' title="Landmark Name"></label>
    <br />
    </div>
    <div class="field">
    <span class="lbl">Room No.</span>
    <input type="text" class="input" name="room" onKeyPress="return numbersonly(this, event);" maxlength="3" value="<?php echo $row['room'];?>"/> 
    <br />
    </div>
    <div class="field">
    <span class="lbl">City</span>
    <input type="text" class="input" id="bang" onblur="f(this,'lblcityname');" name="city" value="<?php echo $row['city'];?>"/>
    <label id='lblcityname' name='lblcityname' title="City"></label>
    <br />
    </div>
    <div class="field">
    <span class="lbl">State</span>
    <input type="text" class="input" id="bang" onblur="f(this,'lblstatename');" name="state" value="<?php echo $row['state'];?>"/>
    <label id='lblstatename' name='lblstatename' title="State"></label>
    <br />
    </div>
    <div class="field">
    <span class="lbl">Postal Code/Zip Code</span>
    <input type="text" class="input" onKeyPress="return numbersonly(this, event);" maxlength="6" name="zip" value="<?php echo $row['pin'];?>"/>
	<br />
    </div>
    
    </fieldset>
    <br />
    <div class="field" style="margin-left:15px;">
	<span class="lbl">Nationality</span>
    <input type="text" class="input" onblur="f(this,'lblnationname');" name="nation" value="<?php echo $row['Nation'];?>"/>
    <label id='lblnationname' name='lblnationname' title="Nation" ></label>
    </div>
    <div class="field" style="margin-left:15px;">
	<abbr title="This field Must be digit only!"><span class="lbl">Roll No.</span>
    <input type="text" class="input"onKeyPress="return numbersonly(this, event);" maxlength="3" name="rollnum" value="<?php echo $row['roll'];?>"/></abbr>
    
    </div>
     <div class="field" style="margin-left:15px;">
	<abbr title="This field Must be digit only!"><span class="lbl">College ID</span>
    <input type="text" class="input"onKeyPress="return numbersonly(this, event);" maxlength="4" name="c_id" value="<?php echo $row['id'];?>" /></abbr>
     
    </div>
</div>

</div>
<div id="footerdiv">
  <input type="submit" value="SAVE" name="add" style="padding:10px 30px;font-size:20px;margin-left:255px;margin-top:20px;margin-bottom:20px" />
  <input type="reset" value="ERASE" name="reset" style="padding:10px 30px;font-size:20px;margin-left:170px;margin-top:20px;margin-bottom:20px"/>
    <br><center><a href="staffadd.php"><span style="font-size:20px; color:#FFF;text-shadow: 0px 0px 5px #000; ">Goto Staff Record</span></a></center>
  <br>

</div>
</div>
</div>
</form>
</body>
</html>
