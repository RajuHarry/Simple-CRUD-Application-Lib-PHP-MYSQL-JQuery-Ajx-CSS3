<?php

require_once "dbconfig.php";

if(isset($page))
  {
   $result = mysql_query("select Count(*) As Total from php");
   $rows = mysql_num_rows($result);
   if($rows)
   {
    $rs = mysql_fetch_array($result);
    $total = $rs["Total"];
   }
   $totalPages = ceil($total / $perpage);
   if($page <=1 )
   {
    echo "<span id='page_links' style='font-weight:bold;'>Pre</span>";
   }
   else
   {
    $j = $page - 1;
    echo "<span><a id='page_a_link' href='index.php?page=$j'>< Pre</a></span>";
   }
   for($i=1; $i <= $totalPages; $i++)
   {
    if($i<>$page)
    {
     echo "<span><a href='index.php?page=$i' id='page_a_link'>$i</a></span>";
    }
    else
    {
     echo "<span id='page_links' style='font-weight:bold;'>$i</span>";
    }
   }
   if($page == $totalPages )
   {
    echo "<span id='page_links' style='font-weight:bold;'>Next ></span>";
   }
   else
   {
    $j = $page + 1;
    echo "<span><a href='index.php?page=$j' id='page_a_link'>Next</a></span>";
   }
  }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>

<title>Pagination || http://www.w3programmers.com</title>

<link rel="stylesheet" type="text/css" href="css/template.css" />

</head>

<body>

<table width="400" cellspacing="2" cellpadding="2" align="center" style="border:1px #000000 solid;">

<?php

$perpage = 5;

if(isset($_GET["page"]))

{

$page = intval($_GET["page"]);

}

else

{

$page = 1;

}

$calc = $perpage * $page;

$start = $calc - $perpage;

$result = mysql_query("select * from php Limit $start, $perpage");

$rows = mysql_num_rows($result);

if($rows)

{

$i = 0;

while($post = mysql_fetch_array($result))

{

?>

<tr style="background-color: #cccccc;">

<td style="font-weight: bold;font-family: arial;"><?php echo $post["title"]; ?></td>

</tr>

<tr>

<td style="font-family: arial;padding-left: 20px;"><?php echo $post["detail"]; ?></td>

</tr>

<?php

}

}

?>

</table>

<br/>

<table width="400" cellspacing="2" cellpadding="2" align="center" >

<tr>

<td align="center">

<?php

if(isset($page))

{

$result = mysql_query("select Count(*) As Total from php");

$rows = mysql_num_rows($result);

if($rows)

{

$rs = mysql_fetch_array($result);

$total = $rs["Total"];

}

$totalPages = ceil($total / $perpage);

if($page <=1 )

{

echo "<span id='page_links' style='font-weight:bold;'>Prev</span>";

}

else

{

$j = $page - 1;

echo "<span><a id='page_a_link' href='index.php?page=$j'>< Prev</a></span>";

}

for($i=1; $i <= $totalPages; $i++)

{

if($i<>$page)

{

echo "<span><a href='index.php?page=$i' id='page_a_link'>$i</a></span>";

}

else

{

echo "<span id='page_links' style='font-weight:bold;'>$i</span>";

}

}

if($page == $totalPages )

{

echo "<span id='page_links' style='font-weight:bold;'>Next ></span>";

}

else

{

$j = $page + 1;

echo "<span><a href='index.php?page=$j' id='page_a_link'>Next</a></span>";

}

}

?>

<td>

</tr>

</table>

</body>

</html>
