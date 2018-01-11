
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

<!-- campus tour -->
	<div class="campus_tour">
		<div class="container">
			<div style="height: 80px; width: 100%"></div>
			<div class="w3layouts_header" style="text-align: center;">
				<h5><span>TAKE A </span>CAMPUS TOUR</h5>
				<hr />
			</div>
			<h4 style="margin-top: 10px; text-align: center;">Our campus have a lot to offer for our students; feel free to call us to book a visit.</h4>

			<div class="container-fluid campus-container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="campus-image">
						</div>
						<div class="campus-data">
							Placements
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="campus-image">
						</div>
						<div class="campus-data">
							HRM Culture
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="campus-image">
						</div>
						<div class="campus-data">
							HRM Culture
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="campus-image">
						</div>
						<div class="campus-data">
							HRM Library
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="campus-image">
						</div>
						<div class="campus-data">
							HRM Library
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="campus-image">
						</div>
						<div class="campus-data">
							Tech Fest
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="campus-image">
						</div>
						<div class="campus-data">
							Cultural Fest
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="campus-image">
						</div>
						<div class="campus-data">
							GRACIA
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	
<!-- campus tour ends here -->

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
	<div class="top-recruiters">
		<div class="container">
			<div style="height: 50px; width: 100%;"></div>
			<div class="w3layouts_header" style="text-align: center;">
				<h5><span>TOP  </span>RECRUITERS</h5>
				<hr />
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
		</div>
	</div>

	<style type="text/css">
		.mission-vision {
			background: url(images/banner.jpg) no-repeat 0px 0px;
    		background-size: cover;
           -webkit-background-size: cover;
           -moz-background-size: cover;
           -o-background-size: cover;
           -ms-background-size: cover;
           background-attachment: fixed;
           min-height: 600px;
		}
		.mission-vision .container-fluid {
			background-color: rgba(200,106,21,0.2);
			min-height: 600px;
		}
		.mission-vision h5 {
			color: white;
			font-weight: 500;
			margin-top: 8%;
			text-align: center;
		}
		.mission-vision p {
			color: white;
			font-size: 1.1em;
		}
		.aligned-text {
			word-wrap: break-word;
    		text-wrap: normal;
    		word-break: keep-words;
	    	letter-spacing: 0.50px;
    		text-align: justify;
            -moz-text-align-last: center;
    		text-align-last: center;
    		text-justify: inter-word;
		}
		@media only screen and (max-width: 600px) {
			.mission-vision p {
				font-size: 0.95em;
			}
		}
	</style>

	<div style="height: 50px; width: 100%"></div>
	<div class="mission-vision">
		<div class="container-fluid">
			<div class="container">
				
				<div class="w3layouts_header">
					<h5>OUR VISION</h5>
				</div>
				<p class="aligned-text">
				Perceiving qualitative higher education as the medium of bridging the gap between the rapidly developing towns and the most underdeveloped villages and the hamlets of Khed Taluka, we visualize inculcating small –skill based and knowledge-based educational values to promote vocational competence, intellectual abilities, humanistic values, and social awareness by adopting changing concepts used in contemporary educational systems.
				</p>

				<div class="w3layouts_header">
					<h5>OUR MISSION</h5>
				</div>
				<p class="aligned-text">
				Our mission is to lead the socially and economically backward inhabitants of the hilly and tribal villages of Khed taluka from the darkness of ignorance to the light of knowledge, wisdom, sagacity, and human values. Education is not perceived as an end in itself, but a means and device to achieve these objectives in the journey towards developing the best qualities of head, hand and heart. Our aim is to provide the students with the best possible facilities to develop their communicative competence, vocational skills and confidence to face the rapid changes and challenges of the time.
				</p>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>


	<div class="services">
		<div class="container">

					<div class="w3layouts_header" style="text-align: center;">
						<h5><span>COLLEGE  </span>FACILITIES</h5>
						<hr />
					</div>
					<div style="height: 50px; width: 100%;"></div>

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
<!-- //featured-services -->
<!-- subscribe -->
<?php include('footer.php'); ?>
</body>
</html>