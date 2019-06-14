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
	<h1><center>Add Blood</center></h1>
	<div class="user_access-mn rgtr">
	<div class="user_access-mn5">
	
	<form role="form" action="addblood.php" method="POST" >
	
		
		<div class="row">
			<div class="col-sm-2 col-md-4"  <label for="redBloodCells">Red blood cells *</label></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="rbcAPositive" value="" id="redBloodCells" type="text" placeholder="A+" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="rbcANegative" value="" id="redBloodCells" type="text" placeholder="A-" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="rbcBPositive" value="" id="redBloodCells" type="text" placeholder="B+" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="rbcBNegative" value="" id="redBloodCells" type="text" placeholder="B-" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="rbcOPositive" value="" id="redBloodCells" type="text" placeholder="O+" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="rbcONegative" value="" id="redBloodCells" type="text" placeholder="O-" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="rbcABPositive" value="" id="redBloodCells" type="text" placeholder="AB+" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="rbcABNegative" value="" id="redBloodCells" type="text" placeholder="AB-" reqiured/></div>
		</div>
		<div class="row">
			<div class="col-sm-2 col-md-4"  <label for="whiteBloodCells">White blood cells *</label></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="wbcAPositive" value="" id="whiteBloodCells" type="text" placeholder="A+" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="wbcANegative" value="" id="whiteBloodCells" type="text" placeholder="A-" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="wbcBPositive" value="" id="whiteBloodCells" type="text" placeholder="B+" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="wbcBNegative" value="" id="whiteBloodCells" type="text" placeholder="B-" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="wbcOPositive" value="" id="whiteBloodCells" type="text" placeholder="O+" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="wbcONegative" value="" id="whiteBloodCells" type="text" placeholder="O-" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="wbcABPositive" value="" id="whiteBloodCells" type="text" placeholder="AB+" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="wbcABNegative" value="" id="whiteBloodCells" type="text" placeholder="AB-" reqiured/></div>
		</div>
			<div class="row">
			<div class="col-sm-2 col-md-4"  <label for="platelets">Platelets   *</label></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plateletsAPositive" value="" id="platelets" type="text" placeholder="A+" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plateletsANegative" value="" id="platelets" type="text" placeholder="A-" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plateletsBPositive" value="" id="platelets" type="text" placeholder="B+" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plateletsBNegative" value="" id="platelets" type="text" placeholder="B-" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plateletsOPositive" value="" id="platelets" type="text" placeholder="O+" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plateletsONegative" value="" id="platelets" type="text" placeholder="O-" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plateletsABPositive" value="" id="platelets" type="text" placeholder="AB+" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plateletsABNegative" value="" id="platelets" type="text" placeholder="AB-" reqiured/></div>
		</div>
		<div class="row">
			<div class="col-sm-2 col-md-4"  <label for="plasma">Plasma *</label></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plasmaAPositive" value="" id="plasma" type="text" placeholder="A+" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plasmaANegative" value="" id="plasma" type="text" placeholder="A-" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plasmaBPositive" value="" id="plasma" type="text" placeholder="B+" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plasmaBNegative" value="" id="plasma" type="text" placeholder="B-" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plasmaOPositive" value="" id="plasma" type="text" placeholder="O+" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plasmaONegative" value="" id="plasma" type="text" placeholder="O-" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plasmaABPositive" value="" id="plasma" type="text" placeholder="AB+" reqiured/></div>
			<div class="col-sm-1 col-lg-1"> <input class="form-control" name="plasmaABNegative" value="" id="plasma" type="text" placeholder="AB-" reqiured/></div>
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
	</br>
		<form action="UserDashboard.html" method="post">
				<input type="submit" value="Back to User Dashboard">
		</form>
	</div>
	</div>
	</div>
</body>
</html>
<?php
	if(isset($_POST['update']) && $_POST['update']=='update')	{
		
	
	$query="select blood_bank_name from user_login_credentials where username='$username'";
	$result=mysqli_query($conn,$query) or die(mysqli_error());
	$rows=mysqli_fetch_row($result);
	$userBloodBank=$rows[0];
	
	$query="select blood_bank_name from blood_count where blood_bank_name='$userBloodBank'";
	$result=mysqli_query($conn,$query) or die(mysqli_error());
	$rows=mysqli_fetch_row($result);
	$exists=$rows[0];
	
	if($exists==NULL)
	{
		?><p style="background:yellow">Please add inventory first!</p><br/><?php
	}
	else
	{
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
						
			
			$rbcAPositive2=$rbcAPositive+$rbcAPositive1;
			$rbcANegative2=$rbcANegative+$rbcANegative1;
			$rbcBPositive2=$rbcBPositive+$rbcBPositive1;
			$rbcBNegative2=$rbcBNegative+$rbcBNegative1;
			$rbcOPositive2=$rbcOPositive+$rbcOPositive1;
			$rbcONegative2=$rbcONegative+$rbcONegative1;
			$rbcABPositive2=$rbcABPositive+$rbcABPositive1;
			$rbcABNegative2=$rbcABNegative+$rbcABNegative1;
			
			$wbcAPositive2=$wbcAPositive+$wbcAPositive1;
			$wbcANegative2=$wbcBNegative+$wbcANegative;
			$wbcBPositive2=$wbcBPositive+$wbcBPositive1;
			$wbcBNegative2=$wbcBNegative+$wbcBNegative1;
			$wbcOPositive2=$wbcOPositive+$wbcOPositive1;
			$wbcONegative2=$wbcONegative+$wbcONegative1;
			$wbcABPositive2=$wbcABPositive+$wbcABPositive1;
			$wbcABNegative2=$wbcABNegative+$wbcABNegative1;
			
			$plasmaAPositive2=$plasmaAPositive+$plasmaAPositive1;
			$plasmaANegative2=$plasmaANegative+$plasmaANegative1;
			$plasmaBPositive2=$plasmaBPositive+$plasmaBPositive1;
			$plasmaBNegative2=$plasmaBNegative+$plasmaBNegative1;
			$plasmaOPositive2=$plasmaOPositive+$plasmaOPositive1;
			$plasmaONegative2=$plasmaONegative+$plasmaONegative1;
			$plasmaABPositive2=$plasmaABPositive+$plasmaABPositive1;
			$plasmaABNegative2=$plasmaABNegative+$plasmaABNegative1;
			
			$plateletsAPositive2=$plateletsAPositive+$plateletsAPositive1;
			$plateletsANegative2=$plateletsANegative+$plateletsANegative1;
			$plateletsBPositive2=$plateletsBPositive+$plateletsBPositive1;
			$plateletsBNegative2=$plateletsBNegative+$plateletsBNegative1;
			$plateletsOPositive2=$plateletsOPositive+$plateletsOPositive1;
			$plateletsONegative2=$plateletsONegative+$plateletsONegative1;
			$plateletsABPositive2=$plateletsABPositive+$plateletsABPositive1;
			$plateletsABNegative2=$plateletsABNegative+$plateletsABNegative1;
		
		$query="update blood_count set rbcAPositive='$rbcAPositive2',rbcANegative='$rbcANegative2',rbcBPositive='$rbcBPositive2',rbcBNegative='$rbcBNegative2',rbcOPositive='$rbcOPositive2',rbcONegative='$rbcONegative2',rbcABPositive='$rbcABPositive2',rbcABNegative='$rbcABNegative2',wbcAPositive='$wbcAPositive2',wbcANegative='$wbcANegative2',wbcBPositive='$wbcBPositive2',wbcBNegative='$wbcBNegative2',wbcOPositive='$wbcOPositive2',wbcONegative='$wbcONegative2',wbcABPositive='$wbcABPositive2',wbcABNegative='$wbcABNegative2',plasmaAPositive='$plasmaAPositive2',plasmaANegative='$plasmaANegative2', plasmaBPositive='$plasmaBPositive2',plasmaBNegative='$plasmaBNegative2',plasmaOPositive='$plasmaOPositive2',plasmaONegative='$plasmaONegative2', plasmaABPositive='$plasmaABPositive2',plasmaABNegative='$plasmaABNegative2',plateletsAPositive='$plateletsAPositive2',plateletsANegative='$plateletsANegative2',plateletsBPositive='$plateletsBPositive2',plateletsBNegative='$plateletsBNegative2',plateletsOPositive='$plateletsOPositive2', plateletsONegative='$plateletsONegative2',plateletsABPositive='$plateletsABPositive2',plateletsABNegative='$plateletsABNegative2' where blood_bank_name='$userBloodBank'";
		if (mysqli_query($conn, $query)) {
			
		} else {
			echo "Error updating record: " . mysqli_error($conn);
		}
	}
	
	$query="select email from user_login_credentials where username='$username'";
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
	
	echo '	<div class=" container "></br></br><form role="form" action="bloodstatistics.php" method="POST" >'. '<p style="color:#258ecd;float:left;font-weight:bold">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspData updated Successfully. Click to view overall Stats'. '<button type="submit" name="view"><span class="glyphicon glyphicon-search"</button></p><center></form></div>';
}	
?>