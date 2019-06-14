<?php
session_start();

require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/Exception.php";
require "PHPMailer/src/OAuth.php";
require "PHPMailer/src/SMTP.php";

$username = $_SESSION['username'];

if(isset($_SESSION['username']))	{
require 'connect.php';

$query="select blood_bank_name from admin_registered where admin_name='$username'";
$result=mysqli_query($conn,$query) or die(mysqli_error());
$rows=mysqli_fetch_row($result);
$userBloodBank=$rows[0];

if($userBloodBank==NULL)
{
	header('refresh:5 ; URL=UserDashboard.html');	
	echo '<p style="background:yellow"> Admin does not have the permissons to alter any inventory of the blood banks registered in the system!</p>'	;
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
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet"/>
	 <meta charset="utf-8">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

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
	<div class="container">
	<?php
		$query="select * from blood_requested where request_from_blood_bank!='$userBloodBank'";
		$result=$conn->query($query);
	  
		if ($result->num_rows > 0) {
		// output data of each row
		
		echo '</br?</br></br></br></br><b> <center>LIST OF REQUESTS</center> </b> <br> <br>';
		echo '<table width="4000" border="1" cellpadding="1" cellspacing="1">
				<tr>
					<th><center>&nbsp;REQUEST FROM BLOODBANK&nbsp;<center></th>
					<th><center>&nbsp;REQUEST TO BLOODBANK&nbsp;</center></th>
					<th>&nbsp;rbcAPositive&nbsp;</th>
					<th>&nbsp;rbcANegative&nbsp;</th>
					<th>&nbsp;rbcBPositive&nbsp;</th>
					<th>&nbsp;rbcBNegative&nbsp;</th>
					<th>&nbsp;rbcOPositive&nbsp;</th>
					<th>&nbsp;rbcONegative&nbsp;</th>
					<th>&nbsp;rbcABPositive&nbsp;</th>
					<th>&nbsp;rbcABNegative&nbsp;</th>
					<th>&nbsp;wbcAPositive&nbsp;</th>
					<th>&nbsp;wbcANegative&nbsp;</th>
					<th>&nbsp;wbcBPositive&nbsp;</th>
					<th>&nbsp;wbcBNegative&nbsp;</th>
					<th>&nbsp;wbcOPositive&nbsp;</th>
					<th>&nbsp;wbcONegative&nbsp;</th>
					<th>&nbsp;wbcABPositive&nbsp;</th>
					<th>&nbsp;wbcABNegative&nbsp;</th>
					<th>&nbsp;plasmaAPositive&nbsp;</th>
					<th>&nbsp;plasmaANegative&nbsp;</th>
					<th>&nbsp;plasmaBPositive&nbsp;</th>
					<th>&nbsp;plasmaBNegative&nbsp;</th>
					<th>&nbsp;plasmaABPositive&nbsp;</th>
					<th>&nbsp;plasmaABNegative&nbsp;</th>
					<th>&nbsp;plateletsAPositive&nbsp;</th>
					<th>&nbsp;plateletsANegative&nbsp;</th>
					<th>&nbsp;plateletsBPositive&nbsp;</th>
					<th>&nbsp;plateletsBNegative&nbsp;</th>
					<th>&nbsp;plateletsOPositive&nbsp;</th>
					<th>&nbsp;plateletsONegative&nbsp;</th>
					<th>&nbsp;plateletsABPositive&nbsp;</th>
					<th>&nbsp;plateletsABNegative&nbsp;</th>
				<tr>';
			  
			  while($row = $result->fetch_assoc()) {
				echo '<tr><td><center>'.$row["request_from_blood_bank"].'</center></td><td><center>'.$row["request_to_blood_bank"].'</center></td><td><center>'.$row["rbcAPositive"].'</center></td><td><center>'.$row["rbcANegative"].'</center></td><td><center>'.$row["rbcBPositive"].'</center></td><td><center>'.$row["rbcBNegative"].'</center></td><td><center>'.$row["rbcOPositive"].'</center></td><td><center>'.$row["rbcONegative"].'</center></td><td><center>'.$row["rbcABPositive"].'</center></td><td><center>'.$row["rbcABNegative"].'</center></td><td><center>'.$row["wbcAPositive"].'</center></td><td><center>'.$row["wbcANegative"].'</center></td><td><center>'.$row["wbcBPositive"].'</center></td><td><center>'.$row["wbcOPositive"].'</center></td><td><center>'.$row["wbcONegative"].'</center></td><td><center>'.$row["wbcABPositive"].'</center></td><td><center>'.$row["wbcABNegative"].'</center></td><td><center>'.$row["plasmaAPositive"].'</center></td><td><center>'.$row["plasmaANegative"].'</center></td><td><center>'.$row["plasmaBPositive"].'</center></td><td><center>'.$row["plasmaOPositive"].'</center></td><td><center>'.$row['plasmaONegative'].'</center></td><td><center>'.$row["plasmaABPositive"].'</center></td><td><center>'.$row["plasmaABNegative"].'</center></td><td><center>'.$row["plateletsAPositive"].'</center></td><td><center>'.$row["plateletsANegative"].'</center></td><td><center>'.$row["plateletsBPositive"].'</center></td><td><center>'.$row["plateletsBNegative"].'</center></td><td><center>'.$row["plateletsOPositive"].'</center></td><td><center>'.$row["plateletsONegative"].'</center></td><td><center>'.$row["plateletsABPositive"].'</center></td><td><center>'.$row["plateletsABNegative"].'</center></td></tr><br>';
			  }
			  echo '</table>';
		}
		else
			echo "<b><pre>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No blood donations made to date by any of the users!</pre></b>";

?>
</br></br></br>
<div class="container">	
			</br></br></br>
			<div class="agile-form">
				<form action="acceptreject.php" method="post">
				<ul class="field-list">
				<li>
							<label class="form-label">
							   Accept/Reject
							   
							</label>
							<div class="form-input">
							<select class="form-dropdown" name="acceptorreject" id="acceptorreject" required>
									<option value="Accept">Accept</option>
									<option value="Reject">Reject</option>
							</select>
							</div>
						<li>
						
					</ul>
					<input type="submit" value="submit" name = "submit" id = "submit">
				</form>	
			</div>
		</br>
<?php
	if(isset($_POST['acceptorreject']) && ($_POST['acceptorreject']=='Accept'|| $_POST['acceptorreject']=='Reject'))	{
	$decision = $_POST['acceptorreject'];
	
	if($decision == "Accept")
	{
				$query="select rbcAPositive,rbcANegative,rbcBPositive,rbcBNegative,rbcOPositive,rbcONegative,rbcABPositive,rbcABNegative,wbcAPositive,wbcANegative,wbcBPositive,wbcBNegative,wbcOPositive,wbcONegative,wbcABPositive,wbcABNegative,plasmaAPositive,plasmaANegative,plasmaBPositive,plasmaBNegative,plasmaOPositive,plasmaONegative,plasmaABPositive,plasmaABNegative,plateletsAPositive,plateletsANegative,plateletsBPositive,plateletsBNegative,plateletsOPositive,plateletsONegative,plateletsABPositive,plateletsABNegative from blood_count where blood_bank_name='$userBloodBank'";
	
				$result=mysqli_query($conn,$query) or die(mysqli_error());
				$rows=mysqli_fetch_row($result);
				$rbcAPositive=$rows[0];
				$rbcANegative=$rows[1];
				
				$rbcBPositive=$rows[2];
				$rbcBNegative=$rows[3];
				$rbcOPositive=$rows[4];
				$rbcONegative=$rows[5];
				$rbcABPositive=$rows[6];
				$rbcABNegative=$rows[7];
				
				$wbcAPositive=$rows[8];
				$wbcANegative=$rows[9];
				$wbcBPositive=$rows[10];
				$wbcBNegative=$rows[11];
				$wbcOPositive=$rows[12];
				$wbcONegative=$rows[13];
				$wbcABPositive=$rows[14];
				$wbcABNegative=$rows[15];
				
				$plasmaAPositive=$rows[16];
				$plasmaANegative=$rows[17];
				$plasmaBPositive=$rows[18];
				$plasmaBNegative=$rows[19];
				$plasmaOPositive=$rows[20];
				$plasmaONegative=$rows[21];
				$plasmaABPositive=$rows[22];
				$plasmaABNegative=$rows[23];
				
				$plateletsAPositive=$rows[24];
				$plateletsANegative=$rows[25];
				$plateletsBPositive=$rows[26];
				$plateletsBNegative=$rows[27];
				$plateletsOPositive=$rows[28];
				$plateletsONegative=$rows[29];
				$plateletsABPositive=$rows[30];
				$plateletsABNegative=$rows[31];
				
				
				$query="select rbcAPositive,rbcANegative,rbcBPositive,rbcBNegative,rbcOPositive,rbcONegative,rbcABPositive,rbcABNegative,wbcAPositive,wbcANegative,wbcBPositive,wbcBNegative,wbcOPositive,wbcONegative,wbcABPositive,wbcABNegative,plasmaAPositive,plasmaANegative,plasmaBPositive,plasmaBNegative,plasmaOPositive,plasmaONegative,plasmaABPositive,plasmaABNegative,plateletsAPositive,plateletsANegative,plateletsBPositive,plateletsBNegative,plateletsOPositive,plateletsONegative,plateletsABPositive,plateletsABNegative,request_from_blood_bank from blood_requested where request_to_blood_bank='$userBloodBank'";
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
				$requestFromBloodBank =$rows[32];
						
			
			$rbcAPositive2=$rbcAPositive-$rbcAPositive1;
			$rbcANegative2=$rbcANegative-$rbcANegative1;
			$rbcBPositive2=$rbcBPositive-$rbcBPositive1;
			$rbcBNegative2=$rbcBNegative-$rbcBNegative1;
			$rbcOPositive2=$rbcOPositive-$rbcOPositive1;
			$rbcONegative2=$rbcONegative-$rbcONegative1;
			$rbcABPositive2=$rbcABPositive-$rbcABPositive1;
			$rbcABNegative2=$rbcABNegative-$rbcABNegative1;
			
			$wbcAPositive2=$wbcAPositive-$wbcAPositive1;
			$wbcANegative2=$wbcBNegative-$wbcANegative;
			$wbcBPositive2=$wbcBPositive-$wbcBPositive1;
			$wbcBNegative2=$wbcBNegative-$wbcBNegative1;
			$wbcOPositive2=$wbcOPositive-$wbcOPositive1;
			$wbcONegative2=$wbcONegative-$wbcONegative1;
			$wbcABPositive2=$wbcABPositive-$wbcABPositive1;
			$wbcABNegative2=$wbcABNegative-$wbcABNegative1;
			
			$plasmaAPositive2=$plasmaAPositive-$plasmaAPositive1;
			$plasmaANegative2=$plasmaANegative-$plasmaANegative1;
			$plasmaBPositive2=$plasmaBPositive-$plasmaBPositive1;
			$plasmaBNegative2=$plasmaBNegative-$plasmaBNegative1;
			$plasmaOPositive2=$plasmaOPositive-$plasmaOPositive1;
			$plasmaONegative2=$plasmaONegative-$plasmaONegative1;
			$plasmaABPositive2=$plasmaABPositive-$plasmaABPositive1;
			$plasmaABNegative2=$plasmaABNegative-$plasmaABNegative1;
			
			$plateletsAPositive2=$plateletsAPositive-$plateletsAPositive1;
			$plateletsANegative2=$plateletsANegative-$plateletsANegative1;
			$plateletsBPositive2=$plateletsBPositive-$plateletsBPositive1;
			$plateletsBNegative2=$plateletsBNegative-$plateletsBNegative1;
			$plateletsOPositive2=$plateletsOPositive-$plateletsOPositive1;
			$plateletsONegative2=$plateletsONegative-$plateletsONegative1;
			$plateletsABPositive2=$plateletsABPositive-$plateletsABPositive1;
			$plateletsABNegative2=$plateletsABNegative-$plateletsABNegative1;

			
			$query="select rbcAPositive,rbcANegative,rbcBPositive,rbcBNegative,rbcOPositive,rbcONegative,rbcABPositive,rbcABNegative,wbcAPositive,wbcANegative,wbcBPositive,wbcBNegative,wbcOPositive,wbcONegative,wbcABPositive,wbcABNegative,plasmaAPositive,plasmaANegative,plasmaBPositive,plasmaBNegative,plasmaOPositive,plasmaONegative,plasmaABPositive,plasmaABNegative,plateletsAPositive,plateletsANegative,plateletsBPositive,plateletsBNegative,plateletsOPositive,plateletsONegative,plateletsABPositive,plateletsABNegative from blood_count where blood_bank_name='$requestFromBloodBank'";
	
				$result=mysqli_query($conn,$query) or die(mysqli_error());
				$rows=mysqli_fetch_row($result);
				
				$rbcAPositive4=$rows[0];
				$rbcANegative4=$rows[1];
				$rbcBPositive4=$rows[2];
				$rbcBNegative4=$rows[3];
				$rbcOPositive4=$rows[4];
				$rbcONegative4=$rows[5];
				$rbcABPositive4=$rows[6];
				$rbcABNegative4=$rows[7];
				
				$wbcAPositive4=$rows[8];
				$wbcANegative4=$rows[9];
				$wbcBPositive4=$rows[10];
				$wbcBNegative4=$rows[11];
				$wbcOPositive4=$rows[12];
				$wbcONegative4=$rows[13];
				$wbcABPositive4=$rows[14];
				$wbcABNegative4=$rows[15];
			
				$plasmaAPositive4=$rows[16];
				$plasmaANegative4=$rows[17];
				$plasmaBPositive4=$rows[18];
				$plasmaBNegative4=$rows[19];
				$plasmaOPositive4=$rows[20];
				$plasmaONegative4=$rows[21];
				$plasmaABPositive4=$rows[22];
				$plasmaABNegative4=$rows[23];
				
				$plateletsAPositive4=$rows[24];
				$plateletsANegative4=$rows[25];
				$plateletsBPositive4=$rows[26];
				$plateletsBNegative4=$rows[27];
				$plateletsOPositive4=$rows[28];
				$plateletsONegative4=$rows[29];
				$plateletsABPositive4=$rows[30];
				$plateletsABNegative4=$rows[31];	
				
			
			$query="update blood_count set rbcAPositive='$rbcAPositive2',rbcANegative='$rbcANegative2',rbcBPositive='$rbcBPositive2',rbcBNegative='$rbcBNegative2',rbcOPositive='$rbcOPositive2',rbcONegative='$rbcONegative2',rbcABPositive='$rbcABPositive2',rbcABNegative='$rbcABNegative2',wbcAPositive='$wbcAPositive2',wbcANegative='$wbcANegative2',wbcBPositive='$wbcBPositive2',wbcBNegative='$wbcBNegative2',wbcOPositive='$wbcOPositive2',wbcONegative='$wbcONegative2',wbcABPositive='$wbcABPositive2',wbcABNegative='$wbcABNegative2',plasmaAPositive='$plasmaAPositive2',plasmaANegative='$plasmaANegative2', plasmaBPositive='$plasmaBPositive2',plasmaBNegative='$plasmaBNegative2',plasmaOPositive='$plasmaOPositive2',plasmaONegative='$plasmaONegative2', plasmaABPositive='$plasmaABPositive2',plasmaABNegative='$plasmaABNegative2',plateletsAPositive='$plateletsAPositive2',plateletsANegative='$plateletsANegative2',plateletsBPositive='$plateletsBPositive2',plateletsBNegative='$plateletsBNegative2',plateletsOPositive='$plateletsOPositive2', plateletsONegative='$plateletsONegative2',plateletsABPositive='$plateletsABPositive2',plateletsABNegative='$plateletsABNegative2' where blood_bank_name='$userBloodBank'";
				if (mysqli_query($conn, $query)) {
					
				} else {
					echo "Error updating record: " . mysqli_error($conn);
				}
			
			$rbcAPositive3=$rbcAPositive4+$rbcAPositive1;
			$rbcANegative3=$rbcANegative4+$rbcANegative1;
			$rbcBPositive3=$rbcBPositive4+$rbcBPositive1;
			$rbcBNegative3=$rbcBNegative4+$rbcBNegative1;
			$rbcOPositive3=$rbcOPositive4+$rbcOPositive1;
			$rbcONegative3=$rbcONegative4+$rbcONegative1;
			$rbcABPositive3=$rbcABPositive4+$rbcABPositive1;
			$rbcABNegative3=$rbcABNegative4+$rbcABNegative1;
			
			$wbcAPositive3=$wbcAPositive4+$wbcAPositive1;
			$wbcANegative3=$wbcBNegative4+$wbcANegative;
			$wbcBPositive3=$wbcBPositive4+$wbcBPositive1;
			$wbcBNegative3=$wbcBNegative4+$wbcBNegative1;
			$wbcOPositive3=$wbcOPositive4+$wbcOPositive1;
			$wbcONegative3=$wbcONegative4+$wbcONegative1;
			$wbcABPositive3=$wbcABPositive4+$wbcABPositive1;
			$wbcABNegative3=$wbcABNegative4+$wbcABNegative1;
			
			$plasmaAPositive3=$plasmaAPositive4+$plasmaAPositive1;
			$plasmaANegative3=$plasmaANegative4+$plasmaANegative1;
			$plasmaBPositive3=$plasmaBPositive4+$plasmaBPositive1;
			$plasmaBNegative3=$plasmaBNegative4+$plasmaBNegative1;
			$plasmaOPositive3=$plasmaOPositive4+$plasmaOPositive1;
			$plasmaONegative3=$plasmaONegative4+$plasmaONegative1;
			$plasmaABPositive3=$plasmaABPositive4+$plasmaABPositive1;
			$plasmaABNegative3=$plasmaABNegative4+$plasmaABNegative1;
			
			$plateletsAPositive3=$plateletsAPositive4+$plateletsAPositive1;
			$plateletsANegative3=$plateletsANegative4+$plateletsANegative1;
			$plateletsBPositive3=$plateletsBPositive4+$plateletsBPositive1;
			$plateletsBNegative3=$plateletsBNegative4+$plateletsBNegative1;
			$plateletsOPositive3=$plateletsOPositive4+$plateletsOPositive1;
			$plateletsONegative3=$plateletsONegative4+$plateletsONegative1;
			$plateletsABPositive3=$plateletsABPositive4+$plateletsABPositive1;
			$plateletsABNegative3=$plateletsABNegative4+$plateletsABNegative1;
			
			
			
			$query="update blood_count set rbcAPositive='$rbcAPositive3',rbcANegative='$rbcANegative3',rbcBPositive='$rbcBPositive3',rbcBNegative='$rbcBNegative3',rbcOPositive='$rbcOPositive3',rbcONegative='$rbcONegative3',rbcABPositive='$rbcABPositive3',rbcABNegative='$rbcABNegative3',wbcAPositive='$wbcAPositive3',wbcANegative='$wbcANegative3',wbcBPositive='$wbcBPositive3',wbcBNegative='$wbcBNegative3',wbcOPositive='$wbcOPositive3',wbcONegative='$wbcONegative3',wbcABPositive='$wbcABPositive3',wbcABNegative='$wbcABNegative3',plasmaAPositive='$plasmaAPositive3',plasmaANegative='$plasmaANegative3', plasmaBPositive='$plasmaBPositive3',plasmaBNegative='$plasmaBNegative3',plasmaOPositive='$plasmaOPositive3',plasmaONegative='$plasmaONegative3', plasmaABPositive='$plasmaABPositive3',plasmaABNegative='$plasmaABNegative3',plateletsAPositive='$plateletsAPositive3',plateletsANegative='$plateletsANegative3',plateletsBPositive='$plateletsBPositive3',plateletsBNegative='$plateletsBNegative3',plateletsOPositive='$plateletsOPositive3', plateletsONegative='$plateletsONegative3',plateletsABPositive='$plateletsABPositive3',plateletsABNegative='$plateletsABNegative3' where blood_bank_name='$requestFromBloodBank'";
				if (mysqli_query($conn, $query)) {
					
				} else {
					echo "Error updating record: " . mysqli_error($conn);
				}
			
			
			//header('refresh:5 ; URL=AdminDashboard.html');	
			echo '<p style="color:green"> Request has been accepted and the changes to the amount of blood has been reflected in the inventory!</p>'	;
	}
			
		else
		{
			//header('refresh:5 ; URL=AdminDashboard.html');		
			echo '<p style="color:red"> Request has been rejected and an email has been sent to the respective admin and user of the blood bank!</p>'	;
		}
	}
?>
		<form action="AdminDashboard.html" method="post">
				<input type="submit" value="Back to Admin Dashboard">
		</form>
		</div>
			
</div>			
<!-- banner -->
</body>
</html>