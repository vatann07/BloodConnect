<?php
session_start();

require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/Exception.php";
require "PHPMailer/src/OAuth.php";
require "PHPMailer/src/SMTP.php";

$username = $_SESSION['username'];
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

$completeError=array();

	$query="select blood_bank_name from admin_registered where admin_name='$username'";
	$result=mysqli_query($conn,$query) or die(mysqli_error());
	$rows=mysqli_fetch_row($result);
	$userBloodBank=$rows[0];
	
	$query="select rbcAPositive,rbcANegative,rbcBPositive,rbcBNegative,rbcOPositive,rbcONegative,rbcABPositive,rbcABNegative,wbcAPositive,wbcANegative,wbcBPositive,wbcBNegative,wbcOPositive,wbcONegative,wbcABPositive,wbcABNegative,plasmaAPositive,plasmaANegative,plasmaBPositive,plasmaBNegative,plasmaOPositive,plasmaONegative,plasmaABPositive,plasmaABNegative,plateletsAPositive,plateletsANegative,plateletsBPositive,plateletsBNegative,plateletsOPositive,plateletsONegative,plateletsABPositive,plateletsABNegative from blood_count where blood_bank_name='$userBloodBank'";
	$result=mysqli_query($conn,$query) or die(mysqli_error());
	$rows=mysqli_fetch_row($result);
	$rbcAPositive1=$rows[0];
	$rbcANegative1=$rows[1];
	$rbcBPositive1=$rows[2];
	$rbcBNegative1=$rows[3];
	$rbcOPositive1=$rows[4];
	$rbcONegative1=$rows[5];
	$rbcABPositive1=$rows[6];
	$rbcABNegative1=$rows[7];
	
	$wbcAPositive1=$rows[8];
	$wbcANegative1=$rows[9];
	$wbcBPositive1=$rows[10];
	$wbcBNegative1=$rows[11];
	$wbcOPositive1=$rows[12];
	$wbcONegative1=$rows[13];
	$wbcABPositive1=$rows[14];
	$wbcABNegative1=$rows[15];
	
	$plasmaAPositive1=$rows[16];
	$plasmaANegative1=$rows[17];
	$plasmaBPositive1=$rows[18];
	$plasmaBNegative1=$rows[19];
	$plasmaOPositive1=$rows[20];
	$plasmaONegative1=$rows[21];
	$plasmaABPositive1=$rows[22];
	$plasmaABNegative1=$rows[23];
	
	$plateletsAPositive1=$rows[24];
	$plateletsANegative1=$rows[25];
	$plateletsBPositive1=$rows[26];
	$plateletsBNegative1=$rows[27];
	$plateletsOPositive1=$rows[28];
	$plateletsONegative1=$rows[29];
	$plateletsABPositive1=$rows[30];
	$plateletsABNegative1=$rows[31];
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
	<h1><center>Components of blood</center></h1>
	<div class="user_access-mn rgtr">
	<div class="user_access-mn5">
	
	
	
	<form role="form" action="adminupdateblood.php" method="POST" >
	
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
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="rbcAPositive" id="redBloodCells" type="text" value="<?php echo $rbcAPositive1?>" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="rbcANegative" id="redBloodCells" type="text" value="<?php echo $rbcANegative1?>" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="rbcBPositive" id="redBloodCells" type="text" value="<?php echo $rbcBPositive1?>" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="rbcBNegative" id="redBloodCells" type="text" value="<?php echo $rbcBNegative1?>" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="rbcOPositive" id="redBloodCells" type="text" value="<?php echo $rbcOPositive1?>" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="rbcONegative" id="redBloodCells" type="text" value="<?php echo $rbcONegative1?>" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="rbcABPositive" id="redBloodCells" type="text" value="<?php echo $rbcABPositive1?>" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="rbcABNegative" id="redBloodCells" type="text" value="<?php echo $rbcABNegative1?>" reqiured/></div>
		</div>
		
		
		
		
		
		
		<div class="form-input">
			<div class="col-sm-2 col-md-4"  <label for="whiteBloodCells">White blood cells *</label></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="wbcAPositive" id="whiteBloodCells" type="text" value="<?php echo $wbcAPositive1?>" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="wbcANegative" id="whiteBloodCells" type="text" value="<?php echo $wbcANegative1?>" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="wbcBPositive" id="whiteBloodCells" type="text" value="<?php echo $wbcBPositive1?>" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="wbcBNegative" id="whiteBloodCells" type="text" value="<?php echo $wbcBNegative1?>" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="wbcOPositive" id="whiteBloodCells" type="text" value="<?php echo $wbcOPositive1?>" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="wbcONegative" id="whiteBloodCells" type="text" value="<?php echo $wbcONegative1?>" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="wbcABPositive" id="whiteBloodCells" type="text" value="<?php echo $wbcABPositive1?>" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="wbcABNegative" id="whiteBloodCells" type="text" value="<?php echo $wbcABNegative1?>" reqiured/></div>
		</div>
		
		<div class="form-input">
			<div class="col-sm-2 col-md-4"  <label for="platelets">Platelets   *</label></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plateletsAPositive" id="platelets" type="text" value="<?php echo $plateletsAPositive1?>" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plateletsANegative" id="platelets" type="text" value="<?php echo $plateletsANegative1?>" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plateletsBPositive" id="platelets" type="text" value="<?php echo $plateletsBPositive1?>" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plateletsBNegative" id="platelets" type="text" value="<?php echo $plateletsBNegative1?>" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plateletsOPositive" id="platelets" type="text" value="<?php echo $plateletsOPositive1?>" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plateletsONegative" id="platelets" type="text" value="<?php echo $plateletsONegative1?>" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plateletsABPositive" id="platelets" type="text" value="<?php echo $plateletsABPositive1?>" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plateletsABNegative" id="platelets" type="text" value="<?php echo $plateletsABNegative1?>" reqiured/></div>
		</div>
		
		<div class="form-input">
			<div class="col-sm-2 col-md-4"  <label for="plasma">Plasma *</label></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plasmaAPositive" id="plasma" type="text" value="<?php echo $plasmaAPositive1?>" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plasmaANegative" id="plasma" type="text" value="<?php echo $plasmaANegative1?>" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plasmaBPositive" id="plasma" type="text" value="<?php echo $plasmaBPositive1?>"reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plasmaBNegative" id="plasma" type="text" value="<?php echo $plasmaBNegative1?>" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plasmaOPositive" id="plasma" type="text" value="<?php echo $plasmaOPositive1?>" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plasmaONegative" id="plasma" type="text" value="<?php echo $plasmaONegative1?>" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plasmaABPositive" id="plasma" type="text" value="<?php echo $plasmaABPositive1?>" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plasmaABNegative" id="plasma" type="text" value="<?php echo $plasmaABNegative1?>"reqiured/></div>
		</div>
		
		<div class="form-input">
			
			</br>
			</br>
			</br>
			<input type="submit" value="update" name = "update" id = "update" align="center">

		</div>
		
	</form>
	</div>
	</br>
	</br>
		<form action="AdminDashboard.html" method="post">
				<input type="submit" value="Back to Admin Dashboard">
		</form>
	</div>
	</div>
	</div>
</body>
</html>
<?php
	if(isset($_POST['update']) && $_POST['update']=='update')	{
	
	$query="select blood_bank_name from blood_count where blood_bank_name='$userBloodBank'";
	$result=mysqli_query($conn,$query) or die(mysqli_error());
	$rows=mysqli_fetch_row($result);
	$exists=$rows[0];
	
	if($exists==NULL)
	{
		$query="insert into blood_count values('$rbcAPositive','$rbcANegative','$rbcBPositive','$rbcBNegative','$rbcOPositive','$rbcONegative','$rbcABPositive','$rbcABNegative','$wbcAPositive','$wbcANegative','$wbcBPositive','$wbcBNegative','$wbcOPositive','$wbcONegative','$wbcABPositive','$wbcABNegative','$plasmaAPositive','$plasmaANegative','$plasmaBPositive','$plasmaBNegative','$plasmaOPositive','$plasmaONegative','$plasmaABPositive','$plasmaABNegative','$plateletsAPositive','$plateletsANegative','$plateletsBPositive','$plateletsBNegative','$plateletsOPositive','$plateletsONegative','$plateletsABPositive','$plateletsABNegative','$userBloodBank')";
		$result=mysqli_query($conn,$query);
	}
	else
	{
		$query="update blood_count set rbcAPositive='$rbcAPositive',rbcANegative='$rbcANegative',rbcBPositive='$rbcBPositive',rbcBNegative='$rbcBNegative',rbcOPositive='$rbcOPositive',rbcONegative='$rbcONegative',rbcABPositive='$rbcABPositive',rbcABNegative='$rbcABNegative',wbcAPositive='$wbcAPositive',wbcANegative='$wbcANegative',wbcBPositive='$wbcBPositive',wbcBNegative='$wbcBNegative',wbcOPositive='$wbcOPositive',wbcONegative='$wbcONegative',wbcABPositive='$wbcABPositive',wbcABNegative='$wbcABNegative',plasmaAPositive='$plasmaAPositive',plasmaANegative='$plasmaANegative', plasmaBPositive='$plasmaBPositive',plasmaBNegative='$plasmaBNegative',plasmaOPositive='$plasmaOPositive',plasmaONegative='$plasmaONegative', plasmaABPositive='$plasmaABPositive',plasmaABNegative='$plasmaABNegative',plateletsAPositive='$plateletsAPositive',plateletsANegative='$plateletsANegative',plateletsBPositive='$plateletsBPositive',plateletsBNegative='$plateletsBNegative',plateletsOPositive='$plateletsOPositive', plateletsONegative='$plateletsONegative',plateletsABPositive='$plateletsABPositive',plateletsABNegative='$plateletsABNegative' where blood_bank_name='$userBloodBank'";
		if (mysqli_query($conn, $query)) {
			
		} else {
			echo "Error updating record: " . mysqli_error($conn);
		}
	}
	
	$query="select email from admin_login_credentials where admin_name='$username'";
	$result=mysqli_query($conn,$query) or die(mysqli_error());
	$rows=mysqli_fetch_row($result);
	$returnedEmail=$rows[0];	
	  
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
		$mail->setFrom('no-reply@bloodconnect.com','BloodConnect');

		                                  // Set email format to HTML
		$mail->Subject = 'Changes made to the amount of blood';
		$mail->Body    = '<b>This message is to inform you that changes have been made to your amount of blood in the system. Please do reply back and respond if you or the admin haven\'t made these changes!</b>';
		$mail->AddAddress($returnedEmail);
		
		if(!$mail->Send()) {
			echo "Mailer Error: " . $mail->ErrorInfo;
		}
	}
	catch (Exception $e) {

	}

}	
?>