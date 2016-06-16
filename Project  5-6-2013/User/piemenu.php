<div class='demo'>
					
					<div id='outer_container' class="outer_container" >
						<a class="menu_button" href="#" title="Toggle"><span>Menu Toggle</span></a>
						<ul class="menu_option">
						  <li><a href="#"><span>Item</span></a></li>
						  <li><a href="#"><span>Item</span></a></li>
						  <li><a href="#"><span>Item</span></a></li>
						  <li><a href="#"><span>Item</span></a></li>
						  <li><a href="#"><span>Item</span></a></li>
						</ul>
					</div>				
				</div>
	
        
                        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script src="js/jquery.menu.js" type="text/javascript"></script>
        <script src="js/jquery-ui-1.8.20.custom.min.js" type="text/javascript"></script>
		<script>
		function PieMenuInit(){		
			$('#outer_container').PieMenu({
				'starting_angel':$('#s_angle').val(),
				'angel_difference' : $('#diff_angle').val(),
				'radius':$('#radius').val(),
			});			
		}
		$(function() {          
			$("#submit_button").click(function() {reset(); }); 
			
			PieMenuInit();
			
		});
		function reset(){
			if($(".menu_button").hasClass('btn-rotate'))
			$(".menu_button").trigger('click');
			
			$("#info").fadeIn("slow").fadeOut("slow");
			PieMenuInit();
		}
		</script>
        