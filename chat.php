
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
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

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
						<h1><a class="navbar-brand" href="index.html"><span class="fa fa-area-chart"></span>e-KrisenSeva<span class="dashboard_text">Disaster Management</span></a></h1>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="sidebar-menu">
							<li class="header">MAIN NAVIGATION</li>
							<li class="treeview">
								<a href="pre_disaster.html">
									<i class="fa fa-dashboard"></i> <span>Pre Disaster</span>
								</a>
							</li>
							
							<li class="treeview">
								<a href="active_disaster.html">
									<i class="fa fa-pie-chart"></i>
									<span>Active Disaster</span>
									<span class="label label-primary pull-right">new</span>
								</a>
							</li>
							
							<li>
								<a href="post_disaster.html">
									<i class="fa fa-th"></i> <span>Post Disaster</span>
									<small class="label pull-right label-info">08</small>
								</a>
							</li>
							<li class="header">LABELS</li>
							<li><a href="chat.html"><i class="fa fa-angle-right text-red"></i> <span>Chat</span></a></li>
							<li><a href="profile.html"><i class="fa fa-angle-right text-yellow"></i> <span>Update Profile</span></a></li>
							
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
							<a href="chat.html" class="dropdown-toggle"><i class="fa fa-envelope"></i><span class="badge">4</span></a>
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
								
								<li> <a href="profile.html"><i class="fa fa-suitcase"></i> Profile</a> </li> 
								<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
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
			<div class="main-page compose">
				<h2 class="title1">Chat Page</h2>
				<div class="col-md-4 compose-left">
					<div class="folder widget-shadow">
						<ul>
							<li class="head">Global Chat</li>
							<li><a href="inbox.html"><i class="fa fa-inbox"></i>Click for Global Chat <span>52</span></a></li>
							<!-- <li><a href="#"><i class="fa fa fa-envelope-o"></i>Sent </a></li>
							<li><a href="#"><i class="fa fa-file-text-o"></i>Drafts <span>03</span></a> </li>
							<li><a href="#"><i class="fa fa-flag-o"></i>Spam </a></li>
							<li><a href="#"><i class="fa fa-trash-o"></i>Trash</a></li> -->
						</ul>
					</div>
					<div class="chat-grid widget-shadow">
						<ul>
							<li class="head">Officials </li>
							<li><a href="#">
									<div class="chat-left">
										<img class="img-circle" src="images/i1.png" alt="">
										<label class="small-badge"></label>
									</div>
									<div class="chat-right">
										<p>Andrew Josifn</p>
										<h6>Nullam quis risus eget </h6>
									</div>
									<div class="clearfix"> </div>	
								</a>
							</li>
							<li><a href="#">
									<div class="chat-left">
										<img class="img-circle" src="images/i4.png" alt="">
										<label class="small-badge bg-green"></label>
									</div>
									<div class="chat-right">
										<p>Justen Ferry</p>
										<h6>Urna mollis ornare vel</h6>
									</div>
									<div class="clearfix"> </div>	
								</a>
							</li>
							<li><a href="#">
									<div class="chat-left">
										<img class="img-circle" src="images/i3.png" alt="">
										<label class="small-badge bg-green"></label>
									</div>
									<div class="chat-right">
										<p>Brown Andy </p>
										<h6>Quis risus ullam neget </h6>
									</div>
									<div class="clearfix"> </div>	
								</a>
							</li>
							<li><a href="#">
									<div class="chat-left">
										<img class="img-circle" src="images/i4.png" alt="">
										<label class="small-badge"></label>
									</div>
									<div class="chat-right">
										<p>Deos Jhon</p>
										<h6>Mollis ornare Urna vel</h6>
									</div>
									<div class="clearfix"> </div>	
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-8 compose-right widget-shadow">
					<div class="panel-default">
						<div class="panel-heading">
							Start your chat here 
						</div>
						<div class="panel-body">
							<div class="alert alert-info">
								Please fill details to send 
							</div>
							<div class="scrollbar" id="style-3">
								<div class="activity-row activity-row1">
									<div class="col-xs-3 activity-img"><img src='images/1.jpg' class="img-responsive" alt=""/><span>06:01 AM</span></div>
									<div class="col-xs-5 activity-img1">
										<div class="activity-desc-sub">
											<h5>Michael Chris</h5>
											<p>Hello ! this is Michael chris</p>
										</div>
									</div>
									<div class="col-xs-4 activity-desc1"></div>
									<div class="clearfix"> </div>
								</div>
								<div class="activity-row activity-row1">
									<div class="col-xs-2 activity-desc1"></div>
									<div class="col-xs-7 activity-img2">
										<div class="activity-desc-sub1">
											<h5>Alexander</h5>
											<p>Hi,How are you ? What about our next meeting?</p>
										</div>
									</div>
									<div class="col-xs-3 activity-img"><img src='images/3.jpg' class="img-responsive" alt=""/><span>06:02 AM</span></div>
									<div class="clearfix"> </div>
								</div>
								<div class="activity-row activity-row1">
									<div class="col-xs-3 activity-img"><img src='images/1.jpg' class="img-responsive" alt=""/><span>06:05 AM</span></div>
									<div class="col-xs-5 activity-img1">
										<div class="activity-desc-sub">
											<h5>Michael Chris</h5>
											<p>Yeah fine, Hope you the same</p>
										</div>
									</div>
									<div class="col-xs-4 activity-desc1"></div>
									<div class="clearfix"> </div>
								</div>
								<div class="activity-row activity-row1">
									<div class="col-xs-2 activity-desc1"></div>
									<div class="col-xs-7 activity-img2">
										<div class="activity-desc-sub1">
											<h5>Alexander</h5>
											<p>Wow that's great</p>
										</div>
									</div>
									<div class="col-xs-3 activity-img"><img src='images/3.jpg' class="img-responsive" alt=""/><span>06:20 PM</span></div>
									<div class="clearfix"> </div>
								</div>
							</div>
							<form class="com-mail">
								<input type="text" class="form-control1 control3" placeholder="Enter your message :">
								<input type="submit" value="Send Message"> 
							</form>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>	
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
   
</body>
</html>