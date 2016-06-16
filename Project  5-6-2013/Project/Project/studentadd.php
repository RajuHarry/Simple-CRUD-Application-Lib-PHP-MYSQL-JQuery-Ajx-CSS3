<?php
session_start();
if ($_SESSION['valid_user'] == '') {
    header("location:login.php");
}
mysql_connect("localhost", "root", "");
mysql_select_db("cmanage");
$sel = mysql_query("select * from student1");


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $del_query = "delete from student1 where id='$id'";
    $delete = mysql_query($del_query);
    header('location:studentadd.php');
}
if (isset($_GET['searchname']) && isset($_GET['searchby'])) {
 //   echo $_GET['searchby'];
    $searchname = $_GET['searchname'];
    $searchby = $_GET['searchby'];
    $sel = mysql_query("select * from student1 where $searchby='$searchname' ");
 //   echo $sel;
}

if (isset($_POST['delete'])) {
    foreach ($_POST['del'] as $del) {
        $del_query = "delete from student1 where id='$del'";
        $delete = mysql_query($del_query);
    }

    header('location:studentadd.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Student</title>
        <link rel="stylesheet" href="css/mainbody.css" />
        <link rel="stylesheet" href="css/menu.css" />
        <link rel="stylesheet" href="css/usertable.css" />
        <link rel="stylesheet" href="css/logo.css" />
        <style>
            #result {
                height:20px;
                font-size:16px;
                color:#333;
                padding:5px;
                margin-bottom:10px;
                background-color:#FFFF99;
            }
            #country{
                padding:3px;
                border:1px #CCC solid;
                font-size:17px;
                margin-right: 23px;
            }
            .suggestionsBox {
                position: absolute;
                left: 0px;
                top:40px;
                margin: 26px 0px 0px 0px;
                width: 200px;
                padding:0px;
                background-color: #000;
                border-top: 3px solid #000;
                color: #fff;
                z-index:100;
            }
            .suggestionList {
                margin: 0px;
                padding: 0px;
            }
            .suggestionList ul li {
                list-style:none;
                margin: 0px;
                padding: 6px;
                border-bottom:1px dotted #666;
                cursor: pointer;
            }
            .suggestionList ul li:hover {
                background-color: #FC3;
                color:#000;
            }
            ul {

                font-size:11px;
                color:#FFF;
                padding:0;
                margin:0;
            }

            .load{
                background-image:url(loader.gif);
                background-position:right;
                background-repeat:no-repeat;
            }

            #suggest {
                position:relative;
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


        <script type="text/javascript" >

            function del()
            {
                var c = confirm("Are you sure you want to delete?");
                if (c)
                {
                    return true;
                }
                else
                {
                    return false;
                }

            }
				function exit()
				{
					header('location:studentadd.php');
				}
	

        </script>

        <!-- searchbox script -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js"></script>
        <script>
            function suggest(inputString, list) {
                // alert(list);        
                var selectVal = $('#' + list + ' :selected').val();
                // alert(selectVal);
                if (inputString.length == 0) {
                    $('#suggestions').fadeOut();
                } else {
                    $('#country').addClass('load');
                    $.post("autosuggeststudent.php", {queryString: "" + inputString + "", list: "" + selectVal + ""}, function(data) {
                        if (data.length > 0) {
                            $('#suggestions').fadeIn();
                            $('#suggestionsList').html(data);
                            $('#country').removeClass('load');
                        }
                    });
                }
            }

           

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
                        <h2></h2>
                        <div style="float:left"><h2 style=" color:#FFF; padding:0px 10px 0px;text-shadow: 0px 0px 5px #000; ">Student Record</h2></div>
               <form action="#" method="get" >
                        <div style="float:right; ">

                            <div id="suggest" style="margin-top:5px;">Start to Search By Anything  <br />
                                <select name="list" id="list" style="height:30px;">
                                    <option value='' selected="selected">Select for search by</option>
                                    <option value="fname" id="firstname">Firstname</option>
                                    <option value="mname" id="middlename">Middlename</option>
                                    <option value="lname" id="lastname">Lastname</option>
                                    <option value="email" id="email">Email</option>
                                    <option value="class" id="year">Year</option>

                                </select> <input type="text" size="25" value="" id="country" onkeyup="suggest(this.value, document.getbyElementById = 'list');" onblur="fill();" class=""  />
                                <div class="suggestionsBox" id="suggestions" style="display: none;"> 
                                    <img src="arrow.png" style="position: relative; top: -12px; left: 30px;" alt="upArrow" />
                                    <div class="suggestionList" id="suggestionsList"> &nbsp; </div>
                                </div>
                                <!--suggest end here--> 
                            </div>
                     
                        </div>
               </form>
					<form action="" method="post">

                        <table id='tbl' align="center" cellpadding="10" border="0" >
                            <thead>        
                                <tr> <th class="checkbox" >Check</th>
                                    <th class="checkbox">ID</th>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Surname</th>
                                    <th>DOB</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Year</th>
                                    <th class="checkbox" >Other Details</th>
                                    <th class="checkbox" >Edit</th>
                                    <th class="checkbox" >Delete</th>

                                </tr> 
                            </thead>
                            <tbody> 
                                <?php
                                $i = 1;


                                while ($row = mysql_fetch_array($sel)) {
                                    ?>
                                    <tr>

                                        <td ><input type="checkbox" id='del[]' value='<?php echo $row['id']; ?>' name='del[]'></td>
                                        <td>
                                            <?php echo $i; ?>
                                        </td>
                                        <td><?php echo $row['fname']; ?></td>
                                        <td><?php echo $row['mname']; ?></td>
                                        <td><?php echo $row['lname']; ?></td>
                                        <td><?php echo $row['dob']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['phone']; ?></td> 
                                        <td><?php echo $row['class']; ?></td>
                                        <td><a href="otherstudent.php?id=<?php echo $row['id']; ?> "><img src="images/vcard.png" title="Other Details" alt="Other Details" class="icondetail"/></td>
                                        <td><a href="Editstudent.php?id=<?php echo $row['id']; ?> "><img src="images/Edit.png" title="Edit" alt="Edit"  class="iconimg"/></a></td>
                                        <td><a onclick="return del();" href="studentadd.php?id=<?php echo $row['id']; ?>"><img src="images/del7.png" title="Delete" alt="Delete" class="iconimg"/></a></td>

                                    </tr>
                                    <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
<center><div id="pageNavPosition" style="margin:20px;"></div></center>

                        <center><a href="Addstudentdata.php"><input type="button" value="ADD" name="add" style="margin:20px 0px;" /></a>
                            <input type="submit" value="DELETE" name="delete" id="delete" onclick="return del();" style="margin:20px 0px;" />
                        </center>


                        <div class="clear"></div>


                    </div>



                    <div id="footer"> 


                    </div>
                </div>
                <!--Glass effect div end-->
            </div>
        </form>
<script type="text/javascript">
        var pager = new Pager('tbl', 2); 
        pager.init(); 
        pager.showPageNav('pager', 'pageNavPosition'); 
        pager.showPage(1);
</script>
    </body>
</html>
