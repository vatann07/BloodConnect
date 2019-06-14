<?php
session_start();

require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/Exception.php";
require "PHPMailer/src/OAuth.php";
require "PHPMailer/src/SMTP.php";

$username = $_SESSION['username'];
$blood_bank_name = $_SESSION['blood_bank_name'];


if(isset($_SESSION['username']))	{
require 'connect.php';
if(isset($_POST['rbcAPositive']))$rbcAPositive=$_POST['rbcAPositive'];
if(isset($_POST['rbcBPositive']))$rbcBPositive=$_POST['rbcBPositive'];
if(isset($_POST['rbcOPositive']))$rbcOPositive=$_POST['rbcOPositive'];
if(isset($_POST['rbcABPositive']))$rbcABPositive=$_POST['rbcABPositive'];
if(isset($_POST['wbcAPositive']))$wbcAPositive=$_POST['wbcAPositive'];
if(isset($_POST['wbcBPositive']))$wbcBPositive=$_POST['wbcBPositive'];
if(isset($_POST['wbcOPositive']))$wbcOPositive=$_POST['wbcOPositive'];
if(isset($_POST['wbcABPositive']))$wbcABPositive=$_POST['wbcABPositive'];
if(isset($_POST['plasmaAPositive']))$plasmaAPositive=$_POST['plasmaAPositive'];
if(isset($_POST['plasmaBPositive']))$plasmaBPositive=$_POST['plasmaBPositive'];
if(isset($_POST['plasmaOPositive']))$plasmaOPositive=$_POST['plasmaOPositive'];
if(isset($_POST['plasmaABPositive']))$plasmaABPositive=$_POST['plasmaABPositive'];
if(isset($_POST['plateletsAPositive']))$plateletsAPositive=$_POST['plateletsAPositive'];
if(isset($_POST['plateletsBPositive']))$plateletsBPositive=$_POST['plateletsBPositive'];
if(isset($_POST['plateletsOPositive']))$plateletsOPositive=$_POST['plateletsOPositive'];
if(isset($_POST['plateletsABPositive']))$plateletsABPositive=$_POST['plateletsABPositive'];

if(isset($_POST['rbcANegative']))$rbcANegative=$_POST['rbcANegative'];
if(isset($_POST['rbcBNegative']))$rbcBNegative=$_POST['rbcBNegative'];
if(isset($_POST['rbcONegative']))$rbcONegative=$_POST['rbcONegative'];
if(isset($_POST['rbcABNegative']))$rbcABNegative=$_POST['rbcABNegative'];
if(isset($_POST['wbcANegative']))$wbcANegative=$_POST['wbcANegative'];
if(isset($_POST['wbcBNegative']))$wbcBNegative=$_POST['wbcBNegative'];
if(isset($_POST['wbcONegative']))$wbcONegative=$_POST['wbcONegative'];
if(isset($_POST['wbcABNegative']))$wbcABNegative=$_POST['wbcABNegative'];
if(isset($_POST['plasmaANegative']))$plasmaANegative=$_POST['plasmaANegative'];
if(isset($_POST['plasmaBNegative']))$plasmaBNegative=$_POST['plasmaBNegative'];
if(isset($_POST['plasmaONegative']))$plasmaONegative=$_POST['plasmaONegative'];
if(isset($_POST['plasmaABNegative']))$plasmaABNegative=$_POST['plasmaABNegative'];
if(isset($_POST['plateletsANegative']))$plateletsANegative=$_POST['plateletsANegative'];
if(isset($_POST['plateletsBNegative']))$plateletsBNegative=$_POST['plateletsBNegative'];
if(isset($_POST['plateletsONegative']))$plateletsONegative=$_POST['plateletsONegative'];
if(isset($_POST['plateletsABNegative']))$plateletsABNegative=$_POST['plateletsABNegative'];

if(isset($_POST['update']) && $_POST['update']=='update')
{
	$query="select blood_bank_name from user_login_credentials where username='$username'";
	$result=mysqli_query($conn,$query) or die(mysqli_error());
	$rows=mysqli_fetch_row($result);
	$userBloodBank=$rows[0];
	
	$query="insert into blood_requested values('$rbcAPositive','$rbcANegative','$rbcBPositive','$rbcBNegative','$rbcOPositive','$rbcONegative','$rbcABPositive','$rbcABNegative','$wbcAPositive','$wbcANegative','$wbcBPositive','$wbcBNegative','$wbcOPositive','$wbcONegative','$wbcABPositive','$wbcABNegative','$plasmaAPositive','$plasmaANegative','$plasmaBPositive','$plasmaBNegative','$plasmaOPositive','$plasmaONegative','$plasmaABPositive','$plasmaABNegative','$plateletsAPositive','$plateletsANegative','$plateletsBPositive','$plateletsBNegative','$plateletsOPositive','$plateletsONegative','$plateletsABPositive','$plateletsABNegative','$userBloodBank','$blood_bank_name')";
	$result=mysqli_query($conn,$query);
	
	header('refresh:5 ; URL=UserDashboard.html');	
	echo '<p style="background:yellow"> Request has been sent to the admin of blood bank : '.$blood_bank_name.' ! Redirecting you!!</p>'	;
}
$completeError=array();
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
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet"/>

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
<!-- banner -->

	<div class="w3ls-banner">
	<div class="heading">
		<div class="row">
	<h1><center>Request amount of blood from <center><?php echo $blood_bank_name ?></h1>
	<div class="user_access-mn rgtr">
	<div class="user_access-mn5">
	
	<form role="form" action="requestquantityblood.php" method="POST" >
		<div class="form-input">
			<div class="col-sm-2 col-md-4"  <label for="redBloodCells"></label></div>
			<div class="col-sm-1 col-lg-1"> A+</div>
			<div class="col-sm-1 col-lg-1"> A-</div>
			<div class="col-sm-1 col-lg-1"> B+</div>
			<div class="col-sm-1 col-lg-1"> B-</div>
			<div class="col-sm-1 col-lg-1"> O+</div>
			<div class="col-sm-1 col-lg-1"> O-</div>
			<div class="col-sm-1 col-lg-1"> AB+</div>
			<div class="col-sm-1 col-lg-1"> AB-</div>
		</div>
		<div class="form-input">
			<div class="col-sm-2 col-md-4"  <label for="redBloodCells">Red blood cells *</label></div>
			<div class="col-sm-1 col-lg-1"> <input type = "number" class="form-control" name="rbcAPositive" id="redBloodCells" min="1" max="$rbcAPositive1"></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="rbcANegative" id="redBloodCells" type = "number" min="1" ></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="rbcBPositive" id="redBloodCells" type = "number" min="1" ></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="rbcBNegative" id="redBloodCells" type = "number" min="1" ></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="rbcOPositive" id="redBloodCells" type = "number" min="1" ></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="rbcONegative" id="redBloodCells" type = "number" min="1" ></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="rbcABPositive" id="redBloodCells" type = "number" min="1" ></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="rbcABNegative" id="redBloodCells" type = "number" min="1" ></div>
		</div>
		
		<div class="form-input">
			<div class="col-sm-2 col-md-4"  <label for="whiteBloodCells">White blood cells *</label></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="wbcAPositive" id="whiteBloodCells" type = "number" min="1" ></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="wbcANegative" id="whiteBloodCells" type = "number" min="1" ></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="wbcBPositive" id="whiteBloodCells" type = "number" min="1" ></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="wbcBNegative" id="whiteBloodCells" type = "number" min="1" ></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="wbcOPositive" id="whiteBloodCells" type = "number" min="1" ></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="wbcONegative" id="whiteBloodCells" type = "number" min="1" ></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="wbcABPositive" id="whiteBloodCells" type = "number" min="1" ></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="wbcABNegative" id="whiteBloodCells" type = "number" min="1" ></div>
		</div>
		
		<div class="form-input">
			<div class="col-sm-2 col-md-4"  <label for="platelets">Platelets   *</label></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plateletsAPositive" id="platelets" type = "number" min="1"></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plateletsANegative" id="platelets" type = "number" min="1"></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plateletsBPositive" id="platelets" type = "number" min="1"></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plateletsBNegative" id="platelets" type = "number" min="1"></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plateletsOPositive" id="platelets" type = "number" min="1"></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plateletsONegative" id="platelets" type = "number" min="1"></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plateletsABPositive" id="platelets" type = "number" min="1"></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plateletsABNegative" id="platelets" type = "number" min="1" ></div>
		</div>
		
		<div class="form-input">
			<div class="col-sm-2 col-md-4"  <label for="plasma">Plasma *</label></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plasmaAPositive" id="plasma" type = "number" min="1" ></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plasmaANegative" id="plasma" type = "number" min="1" ></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plasmaBPositive" id="plasma" type = "number" min="1" ></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plasmaBNegative" id="plasma" type = "number" min="1" ></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plasmaOPositive" id="plasma" type = "number" min="1" ></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plasmaONegative" id="plasma" type = "number" min="1" ></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plasmaABPositive" id="plasma" type = "number" min="1" ></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plasmaABNegative" id="plasma" type = "number" min="1" ></div>
		</div>
		
		<div class="form-input">
			
			</br>
			</br>
			</br>
			<input type="submit" value="update" name = "update" id = "update" align="center">

		</div>
		
	</form>
	</div>
	</div>
	</div>
	</div>
</body>
</html>

<?php

if(isset($_POST['update']) && $_POST['update']=='update')
{
$query="select admin_name from admin_registered where blood_bank_name='$blood_bank_name'";
	$result=mysqli_query($conn,$query) or die(mysqli_error());
	$rows=mysqli_fetch_row($result);
	$admin_name_value=$rows[0];	

$query="select email from admin_login_credentials where admin_name='$admin_name_value'";
	$result=mysqli_query($conn,$query) or die(mysqli_error());
	$rows=mysqli_fetch_row($result);
	$returnedEmail=$rows[0];	
	
$query="select blood_bank_name from user_login_credentials where username='$username'";
	$result=mysqli_query($conn,$query) or die(mysqli_error());
	$rows=mysqli_fetch_row($result);
	$requestfrombloodbank=$rows[0];	
	  
	$mail = new PHPMailer\PHPMailer\PHPMailer(true);                         // Passing `true` enables exceptions
	
	try {
//Server settings                                 // Enable verbose debug output
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = "smtp.gmail.com";  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = "ednajohnson138@gmail.com";                 // SMTP username
		$mail->Password = "Ilovemyparents8";                           // SMTP password
		$mail->SMTPSecure = "ssl";                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 465;                                    // TCP port to connect to

		//Content
		$mail->isHTML(true);
		//Recipients
		$mail->setFrom('no-reply@bloodhelper.com','BloodConnect');

		                                  // Set email format to HTML
		$mail->Subject = 'Request for blood';
		$mail->Body    = '<br>This message is to inform you that a request for blood has been made by the blood bank : '.$requestfrombloodbank.'</br></br></br>. Please verify with the inventory and the request in the system and accept or reject the request.';
		$mail->AddAddress($returnedEmail);
		
		if(!$mail->Send()) {
			echo "Mailer Error: " . $mail->ErrorInfo;
		}
	}
	catch (Exception $e) {
		
	}
}

?>