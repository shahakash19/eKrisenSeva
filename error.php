<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Error - e-KrisenSeva</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/font-awesome.css" rel="stylesheet">
</head>
<body class="cbp-spmenu-push">
	<div id="page-wrapper">
		<div class="main-page login-page" style="text-align:center; padding: 60px 20px;">
			<div class="widget-shadow" style="display:inline-block; padding: 40px 60px;">
				<i class="fa fa-exclamation-triangle" style="font-size:48px; color:#e74c3c;"></i>
				<h2 class="title1" style="margin-top:20px;">Something went wrong</h2>
				<p style="margin: 15px 0 25px;">An unexpected error occurred. Please try again.</p>
				<a href="javascript:history.back()" class="btn btn-default" style="margin-right:10px;">
					<i class="fa fa-arrow-left"></i> Go Back
				</a>
				<?php if(isset($_SESSION['username'])): ?>
				<a href="pre_disaster.php" class="btn btn-primary">
					<i class="fa fa-home"></i> Dashboard
				</a>
				<?php else: ?>
				<a href="index.php" class="btn btn-primary">
					<i class="fa fa-sign-in"></i> Login
				</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>
