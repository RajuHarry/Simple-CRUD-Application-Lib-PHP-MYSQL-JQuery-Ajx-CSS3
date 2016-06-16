<style type="text/css">
ul.pagination {
	font-family: "Arial", "Helvetica", sans-serif;
	font-size: 13px;
	height: 100%;
	list-style-type: none;
	margin: 20px 0;
	overflow: hidden;
	padding: 0;
}
ul.pagination li.details {
	background-color: white;
	border-color: #C8D5E0;
	border-image: none;
	border-style: solid;
	border-width: 1px 1px 2px;
	color: #1E598E;
	font-weight: bold;
	padding: 8px 10px;
	text-decoration: none;
}
ul.pagination li.dot {
	padding: 3px 0;
}
ul.pagination li {
	float: left;
	list-style-type: none;
	margin: 0 3px 0 0;
}
ul.pagination li:first-child {
	margin-left: 0;
}
ul.pagination li a {
	color: black;
	display: block;
	padding: 7px 10px;
	text-decoration: none;
}
ul.pagination li a img {
	border: medium none;
}
ul.pagination li a.current {
	background-color: white;
	border-radius: 0 0 0 0;
	color: #333333;
}
ul.pagination li a.current:hover {
	background-color: white;
}
ul.pagination li a:hover {
	background-color: #C8D5E0;
}
ul.pagination li a {
	background-color: #F6F6F6;
	border-color: #C8D5E0;
	border-image: none;
	border-style: solid;
	border-width: 1px 1px 2px;
	color: #1E598E;
	display: block;
	font-weight: bold;
	padding: 8px 10px;
	text-decoration: none;
}
</style>
<?php

 function pagination($per_page = 10, $page = 1, $url = '', $total){    
 
        $adjacents = "2";
 
        $page = ($page == 0 ? 1 : $page); 
        $start = ($page - 1) * $per_page;                              
         
        $prev = $page - 1;                         
        $next = $page + 1;
        $lastpage = ceil($total/$per_page);
        $lpm1 = $lastpage - 1;
         
        $pagination = "";
        if($lastpage > 1)
        {  
            $pagination .= "<ul class='pagination'>";
                    $pagination .= "<li class='details'>Page $page of $lastpage</li>";
            if ($lastpage < 7 + ($adjacents * 2))
            {  
                for ($counter = 1; $counter <= $lastpage; $counter++)
                {
                    if ($counter == $page)
                        $pagination.= "<li><a class='current'>$counter</a></li>";
                    else
                        $pagination.= "<li><a href='{$url}$counter'>$counter</a></li>";                   
                }
            }
            elseif($lastpage > 5 + ($adjacents * 2))
            {
                if($page < 1 + ($adjacents * 2))    
                {
                    for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
                    {
                        if ($counter == $page)
                            $pagination.= "<li><a class='current'>$counter</a></li>";
                        else
                            $pagination.= "<li><a href='{$url}$counter'>$counter</a></li>";                   
                    }
                    $pagination.= "<li class='dot'>...</li>";
                    $pagination.= "<li><a href='{$url}$lpm1'>$lpm1</a></li>";
                    $pagination.= "<li><a href='{$url}$lastpage'>$lastpage</a></li>";     
                }
                elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
                {
                    $pagination.= "<li><a href='{$url}1'>1</a></li>";
                    $pagination.= "<li><a href='{$url}2'>2</a></li>";
                    $pagination.= "<li class='dot'>...</li>";
                    for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
                    {
                        if ($counter == $page)
                            $pagination.= "<li><a class='current'>$counter</a></li>";
                        else
                            $pagination.= "<li><a href='{$url}$counter'>$counter</a></li>";                   
                    }
                    $pagination.= "<li class='dot'>..</li>";
                    $pagination.= "<li><a href='{$url}$lpm1'>$lpm1</a></li>";
                    $pagination.= "<li><a href='{$url}$lastpage'>$lastpage</a></li>";     
                }
                else
                {
                    $pagination.= "<li><a href='{$url}1'>1</a></li>";
                    $pagination.= "<li><a href='{$url}2'>2</a></li>";
                    $pagination.= "<li class='dot'>..</li>";
                    for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
                    {
                        if ($counter == $page)
                            $pagination.= "<li><a class='current'>$counter</a></li>";
                        else
                            $pagination.= "<li><a href='{$url}$counter'>$counter</a></li>";                   
                    }
                }
            }
             
            if ($page < $counter - 1){
                $pagination.= "<li><a href='{$url}$next'>Next</a></li>";
               // $pagination.= "<li><a href='{$url}$lastpage'>Last</a></li>";
            }else{
                //$pagination.= "<li><a class='current'>Next</a></li>";
               // $pagination.= "<li><a class='current'>Last</a></li>";
            }
            $pagination.= "</ul>\n";     
        }          
        return $pagination;
    } 		
		
	
$page=1;	
if(isset($_GET['page']) && $_GET['page']!=''){
	$page=$_GET['page'];
}	
	
echo pagination(10,$page,'pagination.php?page=',200);	
?>
