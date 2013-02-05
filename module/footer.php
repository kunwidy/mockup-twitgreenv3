<?php
/**
 * The template for displaying the footer.
 */
?>

 <!-- footer -->
	<div class="container">
		<div id="footer">
			<div class="row">
				<div id="" class="span12">
					<p>&copy; Twitgreen.com 2013</p>
				</div>
			</div>
		</div>
	</div>
	 <!-- /footer -->
	
	 <!-- Le javascript
	================================================== -->
   <!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="js/bootstrap-fileupload.js"></script>
	<script type="text/javascript" src="js/jquery.bootstrap.wizard.js"></script>


	<!-- twitter -->
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	
	<!-- facebook -->
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/id_ID/all.js#xfbml=1";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>


	<script>
	$(document).ready(function() {
		$('#rootwizard').bootstrapWizard({'tabClass': 'nav nav-tabs'});	
		window.prettyPrint && prettyPrint()
	});	
	</script>
	
	 <script type="text/javascript">
	
		
	$('.fileupload').fileupload();
		
	
	$(document).ready(function () {
	 $("[rel=tooltip]").tooltip();
	 
	 /*untuk menapilkan alert button*/
	 $("#submit-sponsor").live("click",function(){
			 $(".alert-message").show();
			 $(".alert-message").alert();
					 window.setTimeout(function() { $(".alert-message").hide(); }, 3000);
			
			return false;
		});
	 
	 /*untuk menapilkan alert button*/
	 $("#submit-profile").live("click",function(){
			 $(".alert-message").show();
			 $(".alert-message").alert();
					 window.setTimeout(function() { $(".alert-message").hide(); }, 3000);
			
			return false;
		});
	
	$("#submit-biodata").live("click",function(){
			 $(".alert-message").show();
			 $(".alert-message").alert();
					 window.setTimeout(function() { $(".alert-message").hide(); }, 3000);
			
			return false;
		});
	 
	 });
	 
	 
	
	/* $(".alert-message").alert();
	window.setTimeout(function() { $(".alert-message").alert('close'); }, 5000);
	*/
	
	jQuery(document).ready(function($) {
 
		$('#myCarousel').carousel({
				interval: 5000
		});
 
		$('#carousel-text').html($('#slide-content-0').html());
 
		//Handles the carousel thumbnails
		$('[id^=carousel-selector-]').click( function(){
				var id_selector = $(this).attr("id");
				var id = id_selector.substr(id_selector.length -1);
				var id = parseInt(id);
				$('#myCarousel').carousel(id);
		});
 
 
		// When the carousel slides, auto update the text
		$('#myCarousel').on('slid', function (e) {
				var id = $('.item.active').data('slide-number');
				$('#carousel-text').html($('#slide-content-'+id).html());
		});
 
 
});
		
	
	</script>
	 
	 <script>
			$(function(){
			window.prettyPrint && prettyPrint();
			$('#dp1').datepicker({
				format: 'mm-dd-yyyy'
			});
			$('#dp2').datepicker();
			$('#dp3').datepicker();
			$('#dp3').datepicker();
			$('#dpYears').datepicker();
			$('#dpMonths').datepicker();
			
			
			var startDate = new Date(2012,1,20);
			var endDate = new Date(2012,1,25);
			$('#dp4').datepicker()
				.on('changeDate', function(ev){
					if (ev.date.valueOf() > endDate.valueOf()){
						$('#alert').show().find('strong').text('The start date can not be greater then the end date');
					} else {
						$('#alert').hide();
						startDate = new Date(ev.date);
						$('#startDate').text($('#dp4').data('date'));
					}
					$('#dp4').datepicker('hide');
				});
			$('#dp5').datepicker()
				.on('changeDate', function(ev){
					if (ev.date.valueOf() < startDate.valueOf()){
						$('#alert').show().find('strong').text('The end date can not be less then the start date');
					} else {
						$('#alert').hide();
						endDate = new Date(ev.date);
						$('#endDate').text($('#dp5').data('date'));
					}
					$('#dp5').datepicker('hide');
				});
		});
	</script>


	
</body></html>