<div id="book">

	<div class="cover">
    
    <img src="images/Clock_Tower_Mumbai_University.jpg" style="max-width: 350px; width:350px; height:400px; " />
    
    </div>
    <?php
	mysql_connect("localhost","root","") or die (mysql_error());
	mysql_select_db("cmanage") or die (mysql_error());
	
	$sql2 = mysql_query("SELECT * FROM page"); 
    while($row = mysql_fetch_array($sql2)){ 

 echo '<div style=""><br><div style=" margin:10px 10px; padding:10px 10px;background: rgba(255, 255, 255,0.4);">'. $row['detail'] .'</div></div>';	
 //echo '<div style=""><br><div style=" margin:10px 10px; padding:10px 0px; border-radius: 2px;box-shadow: 0px 0px 1px 1px #333;background: rgba(255, 255, 255,0.4);">'. $row['detail'] .'</div></div>';	
 
	}
	
	?>
</div>

<div id="controls" style="font-size:20px;">
	<label for="page-number" style="font-size:20px;">Page:</label> <input type="text" size="1" id="page-number" style="font-size:20px;"> of <span id="number-pages"></span>
</div>
<script type="text/javascript">
</script>
<script type="text/javascript" src="js/turn.min.js"></script>
<script src="../New folder/js/jquery-ui-1.8.20.custom.min.js" type="text/javascript"></script>
<script>
	// Sample using dynamic pages with turn.js

	var numberOfPages = 10; 

	// Adds the pages that the book will need
	function addPage(page, book) {
		// 	First check if the page is already in the book
		if (!book.turn('hasPage', page)) {
			// Create an element for this page
			var element = $('<div />', {'class': 'page '+((page%2==0) ? 'odd' : 'even'), 'id': 'page-'+page}).html('<i class="loader"></i>');
			// If not then add the page
			book.turn('addPage', element, page);
			// Let's assum that the data is comming from the server and the request takes 1s.
			setTimeout(function(){
					element.html('<div class="data">Data for page '+page+'</div>');
			}, 1000);
		}
	}

	$(window).ready(function(){
		$('#book').turn({acceleration: true,
							pages: numberOfPages,
							elevation: 50,
							gradients: !$.isTouch,
							when: {
								turning: function(e, page, view) {

									// Gets the range of pages that the book needs right now
									var range = $(this).turn('range', page);

									// Check if each page is within the book
									for (page = range[0]; page<=range[1]; page++) 
										addPage(page, $(this));

								},

								turned: function(e, page) {
									$('#page-number').val(page);
								}
							}
						});

		$('#number-pages').html(numberOfPages);

		$('#page-number').keydown(function(e){

			if (e.keyCode==13)
				$('#book').turn('page', $('#page-number').val());
				
		});
	});

	$(window).bind('keydown', function(e){

		if (e.target && e.target.tagName.toLowerCase()!='input')
			if (e.keyCode==37)
				$('#book').turn('previous');
			else if (e.keyCode==39)
				$('#book').turn('next');

	});

</script>
