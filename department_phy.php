<!DOCTYPE html>
<html lang="en">
<head>
<title>Departments of Physics</title>
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
			<h1 style="font-size: 2.8em;">Department of Physics</h1>
			<p style="font-size: 1.2em; padding-top: 1.5em;">The department of physics was established along with the establishment of the college in 1977. T.Y.B.Sc. Classes started in 1989. Prof. V. D. Kulkarni is the Head of the Department of physics. The physics laboratory consists of a general laboratory, a dark room and a computer room. The laboratory has adequate equipments for performing various experiments. The department of Physics runs a hobby center for sky observation for last four years. The Department runs a programme to create awareness regarding Energy Saving. The department also arranges visits of students to different institutes like IUCCA Pune,GMRT khodad,NCL Pune, Dept. of Physics,University of Pune, Vidnyan Ashram Pabal. The lecturers of distinguished guests are also arranged by the Department.</p>
			<div style="padding-top: 2em;">
				<ul class="nav nav-tabs">
				  <li class="nav-item" style="font-size: 1.4em;">
				    <a class="nav-link active" href="#">Notice</a>
				  </li>
				  <li class="nav-item" style="font-size: 1.4em;">
				    <a class="nav-link" href="#">Result</a>
				  </li>
				  <li class="nav-item" style="font-size: 1.4em;">
				    <a class="nav-link" href="#">Syllabus</a>
				  </li>
				  <li class="nav-item" style="font-size: 1.4em;">
				    <a class="nav-link disabled" href="#">Achievement</a>
				  </li>
				</ul>
			</div>
		</div>
	</div>
<div class="services">
	<div class="container">
		<div class="col-md-12" style="text-align: center;">
			<h1 style="font-size: 2.5em; ">Facilities</h1>	
		</div>
		<div class="row">
			<div class="col-md-4">
			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="images/cognizant.png" alt="Card image cap">
			  <div class="card-body">
			   	<h5 class="card-title">Card title</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="images/cognizant.png" alt="Card image cap">
			  <div class="card-body">
			   	<h5 class="card-title">Card title</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</div>
			</div>
		<div class="col-md-4">
			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="images/cognizant.png" alt="Card image cap">
			  <div class="card-body">
			   	<h5 class="card-title">Card title</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</div>
			</div>

		</div>
	</div>
</div>
<!-- //services -->
<div class="services">
		<div class="container">
			<div class="w3layouts_header">
				<h5><span>OUR  </span>RECRUITERS</h5>
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
				</div>
				<div>
					<h1 style="font-size: 2.5em; padding-top: 1.5em; ">Teachers</h1>
					<div style="padding-top: 2em; padding-bottom: 2.5em;">
						<ul class="nav nav-tabs">
						  <li class="nav-item" style="font-size: 1.4em;">
						    <a class="nav-link active" href="#table_teacher">Biodata</a>
						  </li>
						  <li class="nav-item" style="font-size: 1.4em;">
						    <a class="nav-link" href="#">Research</a>
						  </li>
						</ul>
					</div>					
					<div id="table_teacher">
						<table class="table">
						  <thead class="thead-dark">
						    <tr>
						      <th scope="col">Sr.</th>
						      <th scope="col">Designation</th>
						      <th scope="col">Name of Teacher</th>
						      <th scope="col">Deaprtment</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">1</th>
						      <td>Head of Department, Associate Professor</td>
						      <td>V. D. Kulkarni</td>
						      <td>Physics</td>
						    </tr>
						    <tr>
						      <th scope="row">2</th>
						      <td>Associate Professor</td>
						      <td>A. B. Kanvade</td>
						      <td>Physics</td>
						    </tr>
						    <tr>
						      <th scope="row">3</th>
						      <td>Associate Professor</td>
						      <td>V. B. Deshmukh</td>
						      <td>Physics</td>
						    </tr>
						  </tbody>
						</table>
					</div>

					<table class="table">
					  <thead class="thead-dark">
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">First</th>
					      <th scope="col">Last</th>
					     
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">1</th>
					      <td>Mark</td>
					      <td>Otto</td>
					     
					    </tr>
					    <tr>
					      <th scope="row">2</th>
					      <td>Jacob</td>
					      <td>Thornton</td>
					     
					    </tr>
					    <tr>
					      <th scope="row">3</th>
					      <td>Larry</td>
					      <td>the Bird</td>
					      
					    </tr>
					  </tbody>
					</table>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>					
<!-- statistics -->
	<div class="statistics">
		<div class="container">
			<div class="col-md-12 w3layouts_statistics_grid_right" >
				<div class="col-md-4 w3_stats_grid">
					<h3 style="font-size: 2.5em" id="w3l_stats1" class="odometer">0</h3>
					<p>Students</p>
					<div class="w3layouts_stats_grid1">
						<i class="fa fa-users" aria-hidden="true"></i>
					</div>
				</div>
				<div class="col-md-4 w3_stats_grid">
					<h3 style="font-size: 2.5em" id="w3l_stats2" class="odometer">0</h3>
					<p>Result</p>
					<div class="w3layouts_stats_grid1">
						<i class="fa fa-trophy" aria-hidden="true"></i>
					</div>
				</div>
				<div class="col-md-4 w3_stats_grid">
					<h3 style="font-size: 2.5em" id="w3l_stats3" class="odometer">0</h3>
					<p>Placement</p>
					<div class="w3layouts_stats_grid1">
						<i class="fa fa-calendar" aria-hidden="true"></i>
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
			jQuery('#w3l_stats1').html(300);
		}, 1500);
	</script>
	<script>
		setTimeout(function(){
			jQuery('#w3l_stats2').html(80);
		}, 1500);
	</script>
	<script>
		setTimeout(function(){
			jQuery('#w3l_stats3').html(1508);
		}, 1500);
	</script>
<!-- //odometer-script -->
<!-- featured-services -->
	
<!-- //featured-services -->
<!-- subscribe -->
<?php include('footer.php'); ?>
</body>
</html>