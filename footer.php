	<div class="footer-top">
		<div class="container">
			<div class="col-md-4 col-sl-12 welcome">
				<h3>About Us</h3>
				<p>The opportunity to help students learn and grow. Come be a part of our schools, whether as an involved parent, a student, a community volunteer, or a partner. Pulling together, we can accomplish our goal.</p>
				
			</div>
			<div class="col-md-3 col-sl-12 address" >
				<h3>QUICK LINKS</h3>
					<a href="#" id="quick_links">Department</a><br><br>
					<a href="#" id="quick_links">Admission</a><br><br>
					<a href="#" id="quick_links">Facilities</a><br><br>
					<a href="#" id="quick_links">Activities</a>
			</div>
			<div class="col-md-5 col-sl-12 wthree-subscribe">
				<h3>Contact Us </h3>
				<p>For any queries</p>
				
				<div class="w3-agileits-subscribe-form">
					<form action="#" method="post" >
						<div class="row">
							<div class="col-md-4" id="contact_us1">
								<input type="text" placeholder="Name" name="name" required="">
						        <input type="text" placeholder="Contact no" name="phone no" required="">
						
							</div>
							<div class="col-md-8" id="contact_us2">
							    <input type="text" placeholder="message" name="message" required="">
						        <button class="btn1">Submit</button>	
							</div>
						</div>
						
					</form>
				</div>
				
			</div>
				<div class="clearfix"></div>
		</div>
	</div>
<!-- //subscribe -->
<!-- copy-right -->
	<div class="copy-right-grids">
		<div class="container">
			<div class="copy-left">
				<p class="footer-gd">© 2018 HRM Rajgurunagar. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">sss.computers</a></p>
			</div>
				<div class="clearfix"></div>
		</div>
	</div>
<!-- //copy-right -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smooth-scrolling -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->