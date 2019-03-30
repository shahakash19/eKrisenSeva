<!DOCTYPE HTML>
<html>
<head>
	<title>E-krisenseva</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />

	<!-- font-awesome icons CSS -->
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<!-- //font-awesome icons CSS-->

	<!-- side nav css file -->
	<link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
	<!-- //side nav css file -->
	
	<!-- js-->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/modernizr.custom.js"></script>

	<!--webfonts-->
	<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
	<!--//webfonts--> 

	<!-- chart -->
	<script src="js/Chart.js"></script>
	<!-- //chart -->

	<!-- Metis Menu -->
	<script src="js/metisMenu.min.js"></script>
	<script src="js/custom.js"></script>
	<link href="css/custom.css" rel="stylesheet">
	<!--//Metis Menu -->


	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCc7FZQ6jG2VcxnxbMNdkPFFzrUsJxq-ys"></script>

	<style>
	#chartdiv {
		width: 100%;
		height: 295px;
	}
</style>
<!--pie-chart --><!-- index page sales reviews visitors pie chart -->
<script src="js/pie-chart.js" type="text/javascript"></script>

<!-- //pie-chart --><!-- index page sales reviews visitors pie chart -->

<!-- requried-jsfiles-for owl -->
<link href="css/owl.carousel.css" rel="stylesheet">
<script src="js/owl.carousel.js"></script>
<script>
	$(document).ready(function() {
		$("#owl-demo").owlCarousel({
			items : 3,
			lazyLoad : true,
			autoPlay : true,
			pagination : true,
			nav:true,
		});
	});
</script>
<script type="text/javascript">

	var geocoder;
	var map;
	var marker;

/*
 * Google Map with marker
 */
 function initialize() {
 	var initialLat = $('.search_latitude').val();
 	var initialLong = $('.search_longitude').val();
 	initialLat = initialLat?initialLat:19.192758385416035;
 	initialLong = initialLong?initialLong:72.862730091211;

 	var latlng = new google.maps.LatLng(initialLat, initialLong);
 	var options = {
 		zoom: 16,
 		center: latlng,
 		mapTypeId: google.maps.MapTypeId.ROADMAP
 	};

 	map = new google.maps.Map(document.getElementById("geomap"), options);

 	geocoder = new google.maps.Geocoder();

 	marker = new google.maps.Marker({
 		map: map,
 		draggable: true,
 		position: latlng,
 		title:'Click to view or edit details'
 	});

 	google.maps.event.addListener(marker, "dragend", function () {
 		var point = marker.getPosition();
 		map.panTo(point);
 		geocoder.geocode({'latLng': marker.getPosition()}, function (results, status) {
 			if (status == google.maps.GeocoderStatus.OK) {
 				map.setCenter(results[0].geometry.location);
 				marker.setPosition(results[0].geometry.location);
 				$add=(results[0].formatted_address);
 				$lat=(marker.getPosition().lat());
 				$lng=(marker.getPosition().lng());
 			}
 		});
 	});

 }

 $(document).ready(function () {
    //load google map
    initialize();
    
    /*
     * autocomplete location search
     */
     var PostCodeid = '#search_location';
     $(function () {
     	$(PostCodeid).autocomplete({
     		source: function (request, response) {
     			geocoder.geocode({
     				'address': request.term
     			}, function (results, status) {
     				response($.map(results, function (item) {
     					return {
     						label: item.formatted_address,
     						value: item.formatted_address,
     						lat: item.geometry.location.lat(),
     						lon: item.geometry.location.lng()
     					};
     				}));
     			});
     		},
     		select: function (event, ui) {
     			$add=ui.item.value;
     			$lat=ui.item.lat;
     			$lng=ui.item.lon;
     			var latlng = new google.maps.LatLng(ui.item.lat, ui.item.lon);
     			marker.setPosition(latlng);
     			initialize();
     		}
     	});
     });

    /*

     * Point location on google map
     */
     $('.get_map').click(function (e) {
     	var address = $(PostCodeid).val();
     	geocoder.geocode({'address': address}, function (results, status) {
     		if (status == google.maps.GeocoderStatus.OK) {
     			map.setCenter(results[0].geometry.location);
     			marker.setPosition(results[0].geometry.location);
     			$add=(results[0].formatted_address);
     			$lat=(marker.getPosition().lat());
     			$lng=(marker.getPosition().lng());
     			google.maps.event.addListener(marker, 'click', function() {
     				$('#myModal').modal('show');
     			});
     			abc();
     			return showcoords($add,$lat,$lng);
     		} else {
     			alert("Geocode was not successful for the following reason: " + status);
     		}
     	});
     	e.preventDefault();
     });

    //Add listener to marker for reverse geocoding
    google.maps.event.addListener(marker, 'drag', function() {
    	geocoder.geocode({'latLng': marker.getPosition()}, function (results, status) {
    		if (status == google.maps.GeocoderStatus.OK) {
    			if (results[0]) {
    				console.log("drag event");
    				$add=(results[0].formatted_address);
    				$lat=(marker.getPosition().lat());
    				$lng=(marker.getPosition().lng());
    				return showcoords($add,$lat,$lng);
    			}
    		}
    	});
    });

    google.maps.event.addListener(marker, 'click', function() {
    	$('#myModal').modal('show');
    });
});

 function showcoords($add,$lat,$lng) { 

 	document.getElementById('showcoords').style.display='block'; 
 	$(".add").html($add);
 	$(".lat").html($lat);
 	$(".lng").html($lng);
 	$('#sheltername').val($add);
 	$('#latitude').val($lat);
 	$('#longitude').val($lng);


 } 
 function abc(){
 	google.maps.event.addListener(marker, 'drag', function() {
 		geocoder.geocode({'latLng': marker.getPosition()}, function (results, status) {
 			if (status == google.maps.GeocoderStatus.OK) {
 				if (results[0]) {
 					console.log("drag event");
 					$add=(results[0].formatted_address);
 					$lat=(marker.getPosition().lat());
 					$lng=(marker.getPosition().lng());
 					return showcoords($add,$lat,$lng);
 				}
 			}
 		});
 	});
 }




</script>
<style type="text/css">
#geomap{
	width: 100%;
	height: 400px;
}
</style>
<!-- //requried-jsfiles-for owl -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
			<!--left-fixed -navigation-->
			<aside class="sidebar-left">
				<nav class="navbar navbar-inverse">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a class="navbar-brand" href="index.php"><span class="fa fa-area-chart"></span>e-KrisenSeva<span class="dashboard_text">Disaster Management</span></a></h1>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="sidebar-menu">
							<li class="header">MAIN NAVIGATION</li>
							<li class="treeview">
								<a href="pre_disaster.php">
									<i class="fa fa-dashboard"></i> <span>Pre Disaster</span>
								</a>
							</li>
							
							<li class="treeview">
								<a href="active_disaster.php">
									<i class="fa fa-pie-chart"></i>
									<span>Active Disaster</span>
									<span class="label label-primary pull-right">new</span>
								</a>
							</li>
							
							<li>
								<a href="post_disaster.php">
									<i class="fa fa-th"></i> <span>Post Disaster</span>
									<small class="label pull-right label-info">08</small>
								</a>
							</li>
							<li class="header">LABELS</li>
							<li><a href="chat.php"><i class="fa fa-angle-right text-red"></i> <span>Chat</span></a></li>
							<li><a href="profile.php"><i class="fa fa-angle-right text-yellow"></i> <span>Update Profile</span></a></li>
							
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</nav>
			</aside>
		</div>
				<!--left-fixed -navigation-->
				
				<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<div class="profile_details_left"><!--notifications of menu start -->
					<ul class="nofitications-dropdown">
						<li class="dropdown head-dpdn">
							<a href="chat.php" class="dropdown-toggle"><i class="fa fa-envelope"></i><span class="badge">4</span></a>
						</li>
						
					</ul>
					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src="images/2.jpg" alt=""> </span> 
									<div class="user-name">
										<p>Admin Name</p>
										<span>Administrator</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								
								<li> <a href="profile.php"><i class="fa fa-suitcase"></i> Profile</a> </li> 
								<li> <a href="backend/logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
				<!-- main content start-->
				<div id="page-wrapper">
					<div class="main-page">
						

						
						
						
						<!-- search input box -->
						<form>
							<div class="form-group input-group">
								<input type="text" id="search_location" class="form-control" placeholder="Search location or drag marker on the map">
								<div class="input-group-btn">
									<button class="btn btn-default get_map" type="submit">
										Locate
									</button>
								</div>
							</div>
						</form>

						<!-- display google map -->
						<div id="geomap"></div>

						<!-- <div class="inline-form widget-shadow" id="showcoords" style="display:none;">
							<div class="alert alert-add" role="alert">
								The position you have selected is <strong class="add">""</strong> and the latitudes and longitutes are <strong class="lat">""</strong> and <strong class="lng">""</strong> respectively. Are you sure to add the current location as shelter?<br>


								<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addShelterModal" data-whatever="@mdo">Add Shelter</button>
							</div>
						</div>
 -->








							
						<div class="inline-form widget-shadow">
							<div class="form-title">
								<h4>Current Shelter Details</h4>
							</div>
							<div class="table-responsive">
										<table class="table table-hover">
											<thead>
												<tr>
													<th>#</th>
													<th>Shelter Name</th>
													<th>Shelter Official</th>                                   
													
													<th>Contact Number</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
												<?php 
													include 'backend/connect.php';
													include 'backend/view_shelter.php';
													showDetails($con);
												?>
											</tbody>
										</table>
									</div>
						</div>	
							
							





						



						<!-- Modal Shelter-->
						<div class="modal fade" id="myModal" role="dialog">
							<div class="modal-dialog">

								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Shelter Details</h4>
									</div>
									<div class="modal-body">
										<div class="modal-body">

											<div class="form-three widget-shadow">
												<form class="form-horizontal">

													<div class="form-group">
														<label for="Name" class="col-sm-2 control-label">Name</label>
														<div class="col-sm-8">
															<input type="text" class="form-control1" id="Name" placeholder="name">
														</div>
													</div>
													<div class="form-group">
														<label for="Latitude" class="col-sm-2 control-label">Latitude</label>
														<div class="col-sm-8">
															<input type="text" class="form-control1" id="Latitude" placeholder="Latitude">
														</div>
													</div>
													<div class="form-group">
														<label for="Longitude" class="col-sm-2 control-label">Longitude</label>
														<div class="col-sm-8">
															<input type="text" class="form-control1" id="Longitude" placeholder="Longitude">
														</div>
													</div>
													<div class="form-group">
														<label for="checkbox" class="col-sm-2 control-label">Facilities</label>
														<div class="col-sm-8">
															<div class="checkbox-inline1"><label><input type="checkbox"> Food</label></div>
															<div class="checkbox-inline1"><label><input type="checkbox" checked=""> Clothing</label></div>
															<div class="checkbox-inline1"><label><input type="checkbox">Shelter</label></div>
															<div class="checkbox-inline1"><label><input type="checkbox" disabled="" checked=""> Sanitation</label></div>
														</div>
													</div>

													<div class="form-group">
														<label for="selector1" class="col-sm-2 control-label">Shelter Official</label>
														<div class="col-sm-8"><select name="selector1" id="selector1" class="form-control1">
															<option >Lorem ipsum dolor sit amet.</option>
															<option >Dolore, ab unde modi est!</option>
															<option >Illum, fuga minus sit eaque.</option>
															<option >Consequatur ducimus maiores vo.</option>
														</select></div>
													</div>




													<div class="form-group">
														<label for="smallinput" class="col-sm-2 control-label label-input-sm">Capacity</label>
														<div class="col-sm-8">
															<input type="text" class="form-control1 input-sm" id="smallinput" placeholder="Capacity">
														</div>
													</div>

												</form>
											</div>

										</div>
									</div>
									<div class="modal-footer">

										<button type="button" class="btn btn-default" data-dismiss="modal">Edit</button>
										<button type="button" class="btn btn-primary">Remove</button>
									</div>
								</div>

							</div>
						</div>



						<!-- modal add shelter -->


						<div class="modal fade" id="addShelterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="exampleModalLabel">Add the Shelter Details</h4>
									</div>
									<div class="modal-body">

										<div class="form-three widget-shadow">
											<form class="form-horizontal">

												<div class="form-group">
													<label for="Name" class="col-sm-2 control-label">Name</label>
													<div class="col-sm-8">
														<input type="text" class="form-control1 add" id="sheltername" placeholder="sheltername">
													</div>
												</div>
												<div class="form-group">
													<label for="Latitude" class="col-sm-2 control-label">Latitude</label>
													<div class="col-sm-8">
														<input type="text" class="form-control1" id="latitude" placeholder="Latitude">
													</div>
												</div>
												<div class="form-group">
													<label for="Longitude" class="col-sm-2 control-label">Longitude</label>
													<div class="col-sm-8">
														<input type="text" class="form-control1" id="longitude" placeholder="Longitude">
													</div>
												</div>
												<div class="form-group">
													<label for="checkbox" class="col-sm-2 control-label">Facilities</label>
													<div class="col-sm-8">
														<div class="checkbox-inline1"><label><input type="checkbox"> Food</label></div>
														<div class="checkbox-inline1"><label><input type="checkbox" checked=""> Clothing</label></div>
														<div class="checkbox-inline1"><label><input type="checkbox">Shelter</label></div>
														<div class="checkbox-inline1"><label><input type="checkbox" disabled="" checked=""> Sanitation</label></div>
													</div>
												</div>

												<div class="form-group">
													<label for="selector1" class="col-sm-2 control-label">Shelter Official</label>
													<div class="col-sm-8"><select name="selector1" id="selector1" class="form-control1">
														<option>Lorem ipsum dolor sit amet.</option>
														<option>Dolore, ab unde modi est!</option>
														<option>Illum, fuga minus sit eaque.</option>
														<option>Consequatur ducimus maiores voluptatum minima.</option>
													</select></div>
												</div>




												<div class="form-group">
													<label for="smallinput" class="col-sm-2 control-label label-input-sm">Capacity</label>
													<div class="col-sm-8">
														<input type="text" class="form-control1 input-sm" id="smallinput" placeholder="Capacity">
													</div>
												</div>

											</form>
										</div>

									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										<button type="button" class="btn btn-primary">Add Shelter</button>
									</div>
								</div>
							</div>
						</div>



						
						
					</div>
				</div>
				<!--footer-->
		<div class="footer">
			<p>&copy; 2019 e-KrisenSreva Disaster Management System. All Rights Reserved | Design by <a href="#" target="_blank">El!te$</a></p>		
		</div>
		<!--//footer-->
			</div>
			
			


			<!-- Classie --><!-- for toggle left push menu script -->
			<script src="js/classie.js"></script>
			<script>
				var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;

				showLeftPush.onclick = function() {
					classie.toggle( this, 'active' );
					classie.toggle( body, 'cbp-spmenu-push-toright' );
					classie.toggle( menuLeft, 'cbp-spmenu-open' );
					disableOther( 'showLeftPush' );
				};


				function disableOther( button ) {
					if( button !== 'showLeftPush' ) {
						classie.toggle( showLeftPush, 'disabled' );
					}
				}
			</script>
			<!-- //Classie --><!-- //for toggle left push menu script -->

			<!--scrolling js-->
			<script src="js/jquery.nicescroll.js"></script>
			<script src="js/scripts.js"></script>
			<!--//scrolling js-->

			<!-- side nav js -->
			<script src='js/SidebarNav.min.js' type='text/javascript'></script>
			<script>
				$('.sidebar-menu').SidebarNav()
			</script>
			<!-- //side nav js -->



			<!-- Bootstrap Core JavaScript -->
			<script src="js/bootstrap.js"> </script>
			<!-- //Bootstrap Core JavaScript -->

		</body>
		</html>