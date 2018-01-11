
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>H.R.M. Rajugurunagar</title>
<?php include('head.php'); ?>
</head>
	
<body>
<!-- header -->

	<?php include('navbar.php'); ?>
<!-- header -->
<!-- banner -->
<!-- banner-slider -->
			<div class="banner-slider">
					<div class="slider">
						<div class="callbacks_container">
							<ul class="rslides callbacks callbacks1" id="slider4">
								<li>
									<div class="agileits-banner-info">
										
									</div>
								</li>
								<li>
									<div class="agileits-banner-info agileits-banner-info1">
										<div class="container">
											
										</div>
									</div>
								</li>
								<li>
									<div class="agileits-banner-info agileits-banner-info2">
										<div class="container">
											
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="clearfix"> </div>
						<script src="js/responsiveslides.min.js"></script>
						<script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow 4
							  $("#slider4").responsiveSlides({
								auto: true,
								pager:true,
								nav:false,
								speed: 500,
								namespace: "callbacks",
								before: function () {
								  $('.events').append("<li>before event fired.</li>");
								},
								after: function () {
								  $('.events').append("<li>after event fired.</li>");
								}
							  });
						
							});
						 </script>
						<!--banner Slider starts Here-->
					</div>
			</div>
			<!-- //banner-slider -->

<!-- services -->
	<div class="services">
		<div class="container">
			
			<div class="w3_services_grids">
				<div class="col-md-6 w3l_services_grid">
					<div class="w3ls_services_grid agileits_services_grid3">
						<div class="wthree_service_text">
							<h3>RECENT ACTIVITIES</h3>
							<h4>Updates on College Activities</h4>
						</div>
					</div>
					
				</div>
				<div class="col-md-6 w3l_services_grid">
					<div class="w3ls_services_grid agileits_services_grid4">
						<div class="wthree_service_text">
							<h3>GALLERY</h3>
							<h4>Photo Galleries of College Events</h4>
						</div>
					</div>
					
				</div>
				<div class="col-md-4 w3l_services_grid">
					<div class="w3ls_services_grid agileits_services_grid">
						<div class="wthree_service_text">
							<h3>NEWS</h3>
							<h4>Notice and Important Announcement</h4>
						</div>
					</div>
					
				</div>
				<div class="col-md-4 w3l_services_grid">
					<div class="w3ls_services_grid agileits_services_grid2">
						<div class="wthree_service_text">
							<h3>COURSES</h3>
							<h4>Courses offered by College</h4>
						</div>
					</div>
				
				</div>
				<div class="col-md-4 w3l_services_grid">
					<div class="w3ls_services_grid agileits_services_grid1">
						<div class="wthree_service_text">
							<h3>PLACEMENT</h3>
							<h4></h4>
						</div>
					</div>
					
				</div>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //services -->
<!-- statistics -->
	<div class="statistics">
		<div class="container">
			<div class="col-md-6 w3layouts_statistics_grid_left" ">
				<div class="w3_statistics_grid_left_grid">
					<img src="images/college_img.jpg" alt=" " class="img-responsive" style="border-radius: 3px;" />
					
				</div>
			</div>
			<div class="col-md-6 w3layouts_statistics_grid_right" >
				<h4 style="text-align: center; font-weight: 600; color: white; font-size: 2em;">OUR ACHIEVEMENTS</h4>
				<div class="col-md-4 w3_stats_grid">
					<h3 style="font-size: 2.5em" id="w3l_stats1" class="odometer">0</h3>
					<p>Years</p>
					<div class="w3layouts_stats_grid1">
						<i class="fa fa-calendar" aria-hidden="true"></i>
					</div>
				</div>
				<div class="col-md-4 w3_stats_grid">
					<h3 style="font-size: 2.5em" id="w3l_stats2" class="odometer">0</h3>
					<p>Awards</p>
					<div class="w3layouts_stats_grid1">
						<i class="fa fa-trophy" aria-hidden="true"></i>
					</div>
				</div>
				<div class="col-md-4 w3_stats_grid">
					<h3 style="font-size: 2.5em" id="w3l_stats3" class="odometer">0</h3>
					<p>Students</p>
					<div class="w3layouts_stats_grid1">
						<i class="fa fa-users" aria-hidden="true"></i>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //statistics -->

<!-- odometer-script -->
	<script src="js/odometer.js"></script>
	<script>
		window.odometerOptions = {
		  format: '(ddd).dd'
		};
	</script>
	<script>
		setTimeout(function(){
			jQuery('#w3l_stats1').html(40);
		}, 1500);
	</script>
	<script>
		setTimeout(function(){
			jQuery('#w3l_stats2').html(330);
		}, 1500);
	</script>
	<script>
		setTimeout(function(){
			jQuery('#w3l_stats3').html(1508);
		}, 1500);
	</script>
<!-- //odometer-script -->
<!-- featured-services -->
	<div class="services">
		<div class="container">
			<div class="w3layouts_header">
				<h5><span>TOP  </span>RECRUITERS</h5>
			</div>
			
				<div class="w3layouts_skills_grids w3layouts_featured_services_grids">
					<div class="row">
						<div class="col-xs-12 col-md-3">
							<div class="recruit_image1"></div>
						</div>
						<div class="col-xs-12 col-md-3">
							<div class="recruit_image2"></div>
						</div>
						<div class="col-xs-12 col-md-3">
							<div class="recruit_image3"></div>
						</div>
						<div class="col-xs-12 col-md-3">
							<div class="recruit_image4"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-3">
							<div class="recruit_image5"></div>
						</div>
						<div class="col-xs-12 col-md-3">
							<div class="recruit_image6"></div>
						</div>
						<div class="col-xs-12 col-md-3">
							<div class="recruit_image7"></div>
						</div>
						<div class="col-xs-12 col-md-3">
							<div class="recruit_image8"></div>
						</div>
					</div>

					<div class="col-md-6 w3_featured_services_left">
						<div class="w3_featured_services_left_grid">
							<div class="col-xs-4 w3_featured_services_left_gridl">
								<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
									<i class="hi-icon fa-cubes"> </i>
								</div>
							</div>
							<div class="col-xs-8 w3_featured_services_left_gridr">
								<h4>lacinia vehicula </h4>
								<p>Maecenas bibendum nisi purus, in ullamcorper nisl aliquam id.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3_featured_services_left_grid">
							<div class="col-xs-4 w3_featured_services_left_gridl">
								<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
									<i class="hi-icon fa-globe"> </i>
								</div>
							</div>
							<div class="col-xs-8 w3_featured_services_left_gridr">
								<h4>tincidunt urna </h4>
								<p>Maecenas bibendum nisi purus, in ullamcorper nisl aliquam id.</p>
							</div>
							<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-6 w3_featured_services_right">
					<img src="images/3.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-6 w3_featured_services_right">
					<img src="images/4.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-6 w3_featured_services_left">
					<div class="w3_featured_services_left_grid">
						<div class="col-xs-4 w3_featured_services_left_gridl">
							<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
								<i class="hi-icon fa-gear"> </i>
							</div>
						</div>
						<div class="col-xs-8 w3_featured_services_left_gridr">
							<h4>nullam elementum </h4>
							<p>Maecenas bibendum nisi purus, in ullamcorper nisl aliquam id.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3_featured_services_left_grid">
						<div class="col-xs-4 w3_featured_services_left_gridl">
							<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
								<i class="hi-icon fa-hotel"> </i>
							</div>
						</div>
						<div class="col-xs-8 w3_featured_services_left_gridr">
							<h4>ullamcorper nisl</h4>
							<p>Maecenas bibendum nisi purus, in ullamcorper nisl aliquam id.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //featured-services -->
<!-- subscribe -->
<?php include('footer.php'); ?>
</body>
</html>