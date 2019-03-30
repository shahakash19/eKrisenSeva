
<!DOCTYPE HTML>
<html>
<head>
	<title>e-KrisenSeva</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />

	<!-- font-awesome icons CSS -->
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<!-- //font-awesome icons CSS -->

	<!-- side nav css file -->
	<link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
	<!-- side nav css file -->

	<!-- js-->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<!-- Backend required start-->

	<script src="../js/custom/server.config.js"></script>
	<script src="../js/custom/loginControl.js"></script>
	<script src="../js/custom/common_functions.js"></script>

	<script>
		$(window).load(function(){
			$.ajax({
				type: 'GET',
				url: serverName + "php/Requesthandler.php?action=getUserProfile",
				dataType: 'json',
				success: function(data){
					if(data['status'] == true){
						$('input[name="fname"]').val(data['content']['fname']);
						$('input[name="mname"]').val(data['content']['mname']);
						$('input[name="lname"]').val(data['content']['lname']);
						$('input[name="dob"]').val(data['content']['dob']);
						$('input[type="radio"]:checked').removeAttr('checked');
						$('input[value="' + data["content"]["gender"] + '"]').attr('checked', 'checked');
						$('input[name="con_num"]').val(data['content']['contact_no']);
						$('input[name="con_num1"]').val(data['content']['alternate_contact_no']);
						$('input[name="email"]').val(data['content']['email_id']);
						$('input[name="aadhar_no"]').val(data['content']['aadhar_no']);

						let pimg = new Image();
						pimg.src = serverName + data['content']['profile_photo'];
						if(pimg.width != 0) $('img#saved_profile_photo').attr('src', serverName + data['content']['profile_photo']);					

						return true;	
					}

					console.log(data['msg']);
				}
			});
		});
	</script>
	<!-- backend required end -->


	<!--webfonts-->
	<!-- <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet"> -->
	<!--//webfonts--> 
	<script type="text/javascript">

		$(document).ready(function(){
			$('#disablebutton').click(function(){
				if($('.field_disable').prop('disabled'))
				{
					$('.field_disable').prop('disabled', false)
				}
				else{
					$('.field_disable').prop('disabled', true)
				}
			});
		})
		
	</script>
	<!-- Metis Menu -->
	<script src="js/metisMenu.min.js"></script>
	<script src="js/custom.js"></script>
	<link href="css/custom.css" rel="stylesheet">
	<!--//Metis Menu -->

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
				<h2 class="title1">Blank Page</h2>
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<form class="form-horizontal" id="contactDetails">
								<fieldset>
									<div class="form-group">
										<label class="col-md-4 control-label" for="Name (Full name)">Name (First name)</label>  
										<div class="col-md-8">
											<div class="input-group">
												<div class="input-group-addon">
													<i class="fa fa-user">
													</i>
												</div>
												<input id="Name (First name) textfieldToClose" name="fname" type="text" placeholder="Name (First name)" class="form-control input-md field_disable">
											</div>


										</div>


									</div>
									<div class="form-group">
										<label class="col-md-4 control-label" for="Name (Middle name)">Name (Middle name)</label>  
										<div class="col-md-8">
											<div class="input-group">
												<div class="input-group-addon">
													<i class="fa fa-user">
													</i>
												</div>
												<input id="Name (Middle name) textfieldToClose" name="mname" type="text" placeholder="Name (Middle name)" class="form-control input-md field_disable">
											</div>


										</div>


									</div>

									<div class="form-group">
										<label class="col-md-4 control-label" for="Name (Last name)">Name (Last name)</label>  
										<div class="col-md-8">
											<div class="input-group">
												<div class="input-group-addon">
													<i class="fa fa-user">
													</i>
												</div>
												<input id="Name (Last name) textfieldToClose" name="lname" type="text" placeholder="Name (Last name)" class="form-control input-md field_disable">
											</div>


										</div>


									</div>


									<!-- File Button --> 
									<div class="form-group">
										<label class="col-md-4 control-label" for="Upload photo">Upload photo</label>
										<div class="col-md-8">
											<input id="Upload photo" name="profile_photo" class="input-file field_disable" type="file">
										</div>
									</div>

									<!-- Text input-->
									<div class="form-group">
										<label class="col-md-4 control-label" for="Date Of Birth">Date Of Birth</label>  
										<div class="col-md-8">

											<div class="input-group">
												<div class="input-group-addon">
													<i class="fa fa-birthday-cake"></i>

												</div>
												<input id="Date Of Birth" name="dob" type="date" placeholder="dd/mm/yyyy" class="form-control input-md field_disable">
											</div>


										</div>
									</div>
									<!-- Multiple Radios (inline) -->
									<div class="form-group">
										<label class="col-md-4 control-label" for="Gender">Gender</label>
										<div class="col-md-8"> 
											<label class="radio-inline" for="Gender-0">
												<input type="radio" name="gender" id="Gender-0" value="male" class="field_disable" checked="checked">
												Male
											</label> 
											<label class="radio-inline" for="Gender-1">
												<input type="radio" name="gender" id="Gender-1" value="female" class="field_disable">
												Female
											</label> 
											<label class="radio-inline" for="Gender-2">
												<input type="radio" name="gender" id="Gender-2" value="shemale" class="field_disable">
												Other
											</label>
										</div>
									</div>

									<!-- Text input-->
									<div class="form-group">
										<label class="col-md-4 control-label" for="Phone number ">Phone number </label>  
										<div class="col-md-8">
											<div class="input-group">
												<div class="input-group-addon">
													<i class="fa fa-phone"></i>

												</div>
												<input id="Phone number " name="con_num" type="text" placeholder="Primary Phone number " class="form-control input-md field_disable">

											</div>
											<div class="input-group othertop">
												<div class="input-group-addon">
													<i class="fa fa-mobile fa-1x" style="font-size: 20px;"></i>

												</div>
												<input id="Phone number " name="con_num1" type="text" placeholder=" Secondary Phone number " class="form-control input-md field_disable">

											</div>

										</div>
									</div>

									<!-- Text input-->
									<div class="form-group">
										<label class="col-md-4 control-label" for="Email Address">Email Address</label>  
										<div class="col-md-8">
											<div class="input-group">
												<div class="input-group-addon">
													<i class="fa fa-envelope-o"></i>

												</div>
												<input id="Email Address" name="email" type="text" placeholder="Email Address" class="form-control input-md field_disable">

											</div>

										</div>
									</div>

									<!-- Text input-->
									<div class="form-group">
										<label class="col-md-4 control-label" for="Citizenship No.">Aadhar No.</label>  
										<div class="col-md-8">
											<div class="input-group">
												<div class="input-group-addon">
													<i class="fa fa-sticky-note-o"></i>

												</div>
												<input id="Citizenship No." name="aadhar_no" type="text" placeholder="Citizenship No." class="form-control input-md field_disable">

											</div>


										</div>
									</div>
									<!-- Textarea -->
										<!-- <div class="form-group">
											<label class="col-md-4 control-label" for="Overview (max 200 words)">Overview (max 200 words)</label>
											<div class="col-md-8">                     
												<textarea class="form-control field_disable" rows="10"  id="Overview (max 200 words)" name="Overview (max 200 words)">Overview</textarea>
											</div>
										</div> -->


										<div class="form-group">
											<label class="col-md-4 control-label" ></label>  
											<div class="col-md-8">
												<a href="#" class="btn btn-success" name="button1" id="disablebutton" class="profile_submit">Submit</a>
												<a href="#" class="btn btn-danger" value=""><span class="glyphicon glyphicon-remove-sign"></span> Clear</a>
												<input type="button" value="dfsdfsfsdf" class="profile_submit">
											</div>
										</div>

									</fieldset>
								</form>
							</div>
							<div class="col-md-2 hidden-xs">
								<img src="http://websamplenow.com/30/userprofile/images/avatar.jpg" class="img-responsive img-thumbnail" id="saved_profile_photo">
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

			<!-- side nav js -->
			<script src='js/SidebarNav.min.js' type='text/javascript'></script>
			<script>
				$('.sidebar-menu').SidebarNav()
			</script>
			<!-- //side nav js -->

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

			<!-- Bootstrap Core JavaScript -->
			<script src="js/bootstrap.js"> </script>

			<script>
				$(document).ready(function() {
					$(".profile_submit").click(function(event) {
						var formData = new FormData($("#contactDetails")[0]);
						for (var pair of formData.entries()) {
							console.log(pair[0]+ ', ' + pair[1]); 
						}

						$.ajax({
							type: 'POST',
							url: serverName + 'php/Requesthandler.php?action=addContactDetails',
							data: formData,
							cache: false,
							contentType: false,
							processData: false,
							dataType: 'json',
							success: function(data){
								console.log(data);
							}
						});
					});
				});
			</script>

		</body>
		</html>