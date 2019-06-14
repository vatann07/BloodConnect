<?php

require "connect.php";

require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/Exception.php";
require "PHPMailer/src/OAuth.php";
require "PHPMailer/src/SMTP.php";

session_start();
error_reporting(E_ERROR | E_PARSE);

	$username = $_SESSION['username'];
	
	$oldPassword=$_POST['oldpassword'];
	$newPassword=$_POST['newpassword'];
	$confirmPassword=$_POST['confirmpassword'];
	
	if(isset($_POST['submit']) && $_POST['submit']=='submit')	{
	
		if($newPassword==$confirmPassword)
		{
			$query="update user_login_credentials set password='$newPassword' where username='$username'";
			$result=mysqli_query($conn,$query) or die(mysqli_error());
			header('refresh:5 ; URL=UserDashboard.html');	
			echo '<p style="background:yellow"> Password updated successfully! Redirecting you to the home page!</p>'	;
		}
		else
		{
			header('refresh:5 ; URL=changepassword.php');	
			echo '<p style="background:yellow"> New password does not match with the confirmed password! Please enter again! </p>'	;
		}
	}	
?>

<!DOCTYPE html>
<html>

<head>
	<title>BloodConnect</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="New Clinic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/appointment_style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
</head>

<body>
	<!-- header -->
	<div class="header" id="home">
		<div class="top_menu_w3layouts">
<div class="container">
			<div class="header_left">
				<ul>
					<li><i class="fa fa-map-marker" aria-hidden="true"></i>Thunder Bay,Canada </li>
					<li><i class="fa fa-phone" aria-hidden="true"></i>+1 807 001 1234</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">contact@bloodconnect.com</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			</div>
		</div>

		<div class="content white">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
						<a class="navbar-brand" href="bloodconnect.html">
							<h1><span class="fa fa-stethoscope" aria-hidden="true"></span>BloodConnect </h1>
						</a>
					</div>
					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav">
								<li><a href="bloodconnect.html" >Home</a></li>
								<li><a href="about.html" class="active">About</a></li>	
								<li><a href="faq.html" class="active">FAQs</a></li>		
								<li><a href="mail.html">Mail Us</a></li>
								<li><a href="BloodBank.html">Blood Bank</a></li>
								<li><a href="logout.php">Logout</a></li>								
							</ul>
								
						</nav>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>
		<!--//banner -->
	<div class="w3ls-banner">
	<div class="heading">
		<h1><center>Change password</center></h1>
	</div>
		<div class="container_1">
			<div class="heading">
			</div>		
			</br></br></br></br>
			<div class="agile-form">
				<form action="changepassword.php" method="post">
					<ul class="field-list">
						<li>
							<label class="form-label"> 
								New password 
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="password" name="newpassword" id="newpassword" required >
							</div>
						</li>
						<li>
							<label class="form-label"> 
								Confirm New Password 
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="password" name="confirmpassword" id="confirmpassword" required >
							</div>
						</li>
					</ul>
					<input type="submit" value="submit" name = "submit" id = "submit">
				</form>	
			</div>
		</div>
		<form action="UserDashboard.html" method="post">
				<input type="submit" value="Back to User Dashboard">
		</form>
</div>
    </div>

  </form>
</div>
<!-- //about -->
<!-- emergency -->
<div class="emergency_cases_w3ls">
<div class="emergency_cases_bt">
	<div class="container">
	<div class="emergency_cases_top">
		<div class="col-md-6 emergency_cases_w3ls_left">
			<h4>Customer Care Hours</h4>
			<h6>Monday - Friday&nbsp;<span class="eme">09.00 - 18.00</span></h6>
			<h6>Weekends &nbsp;<span class="eme">10.00 - 17.00</span></h6>
		</div>
		<div class="col-md-6 emergency_cases_w3ls_right">
			<h4>Call Us</h4>
			<h5><i class="fa fa-phone" aria-hidden="true"></i>+1 807 001 1234 </h5>
			<p>Clear all your queries about the centre and it's reliability.</p>
		</div>
		
		<div class="clearfix"></div>
		</div>
	</div>
	</div>
</div>
<!-- //emergency -->

	<div class="footer_wthree_agile">
		<p>© 2019 BloodConnect. All rights reserved </p>

	</div>
<!-- //footer -->

<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>
