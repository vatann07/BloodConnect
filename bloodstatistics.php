<?php
session_start();

require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/Exception.php";
require "PHPMailer/src/OAuth.php";
require "PHPMailer/src/SMTP.php";

$username = $_SESSION['username'];

if(isset($_SESSION['username']))	{
require 'connect.php';

$query="select blood_bank_name from user_login_credentials where username='$username'";
$result=mysqli_query($conn,$query) or die(mysqli_error());
$rows=mysqli_fetch_row($result);
$userBloodBank=$rows[0];

$query="select rbcAPositive,rbcANegative,rbcBPositive,rbcBNegative,rbcOPositive,rbcONegative,rbcABPositive,rbcABNegative,wbcAPositive,wbcANegative,wbcBPositive,wbcBNegative,wbcOPositive,wbcONegative,wbcABPositive,wbcABNegative,plasmaAPositive,plasmaANegative,plasmaBPositive,plasmaBNegative,plasmaOPositive,plasmaONegative,plasmaABPositive,plasmaABNegative,plateletsAPositive,plateletsANegative,plateletsBPositive,plateletsBNegative,plateletsOPositive,plateletsONegative,plateletsABPositive,plateletsABNegative  from blood_count where blood_bank_name='$userBloodBank'";
		$result=mysqli_query($conn,$query) or die(mysqli_error());
		$rows=mysqli_fetch_array($result);
		$pieChartArray[0]=$rows[0];
		$pieChartArray[1]=$rows[1];
		$pieChartArray[2]=$rows[2];
		$pieChartArray[3]=$rows[3];
		$pieChartArray[4]=$rows[4];
		$pieChartArray[5]=$rows[5];
		$pieChartArray[6]=$rows[6];
		$pieChartArray[7]=$rows[7];
		$pieChartArray[8]=$rows[8];
		$pieChartArray[9]=$rows[9];
		$pieChartArray[10]=$rows[10];
		$pieChartArray[11]=$rows[11];
		$pieChartArray[12]=$rows[12];
		$pieChartArray[13]=$rows[13];
		$pieChartArray[14]=$rows[14];
		$pieChartArray[15]=$rows[15];
		$pieChartArray[16]=$rows[16];
		$pieChartArray[17]=$rows[17];
		$pieChartArray[18]=$rows[18];
		$pieChartArray[19]=$rows[19];
		$pieChartArray[20]=$rows[20];
		$pieChartArray[21]=$rows[21];
		$pieChartArray[22]=$rows[22];
		$pieChartArray[23]=$rows[23];
		$pieChartArray[24]=$rows[24];
		$pieChartArray[25]=$rows[25];
		$pieChartArray[26]=$rows[26];
		$pieChartArray[27]=$rows[27];
		$pieChartArray[28]=$rows[28];
		$pieChartArray[29]=$rows[29];
		$pieChartArray[30]=$rows[30];
		$pieChartArray[31]=$rows[31];
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
  <script type="text/javascript">
      
	 var pieChartArrayJ = <?php echo json_encode($pieChartArray); ?>;
     google.charts.load('current', {'packages':['corechart']});
     google.charts.setOnLoadCallback(drawChart);
     function drawChart() {
	 var rbc1=eval(pieChartArrayJ[0]);
	 var rbc2=eval(pieChartArrayJ[1]);
	 var rbc3=eval(pieChartArrayJ[2]);
	 var rbc4=eval(pieChartArrayJ[3]);
	 var rbc5=eval(pieChartArrayJ[4]);
	 var rbc6=eval(pieChartArrayJ[5]);
	 var rbc7=eval(pieChartArrayJ[6]);
	 var rbc8=eval(pieChartArrayJ[7]);
	 var wbc1=eval(pieChartArrayJ[8]);
	 var wbc2=eval(pieChartArrayJ[9]);
	 var wbc3=eval(pieChartArrayJ[10]);
	 var wbc4=eval(pieChartArrayJ[11]);
	 var wbc5=eval(pieChartArrayJ[12]);
	 var wbc6=eval(pieChartArrayJ[13]);
	 var wbc7=eval(pieChartArrayJ[14]);
	 var wbc8=eval(pieChartArrayJ[15]);
	 var p1=eval(pieChartArrayJ[16]);
	 var p2=eval(pieChartArrayJ[17]);
	 var p3=eval(pieChartArrayJ[18]);
	 var p4=eval(pieChartArrayJ[19]);
	 var p5=eval(pieChartArrayJ[20]);
	 var p6=eval(pieChartArrayJ[21]);
	 var p7=eval(pieChartArrayJ[22]);
	 var p8=eval(pieChartArrayJ[23]);
	 var pl1=eval(pieChartArrayJ[24]);
	 var pl2=eval(pieChartArrayJ[25]);
	 var pl3=eval(pieChartArrayJ[26]);
	 var pl4=eval(pieChartArrayJ[27]);
	 var pl5=eval(pieChartArrayJ[28]);
	 var pl6=eval(pieChartArrayJ[29]);
	 var pl7=eval(pieChartArrayJ[30]);
	 var pl8=eval(pieChartArrayJ[31]);
	   
     var data = google.visualization.arrayToDataTable([
          ['Component', 'Quantity'],
          ['RBC A +', rbc1 ],
          ['RBC A -', rbc2 ],
          ['RBC B +', rbc3 ],
          ['RBC B -', rbc4 ],
          ['RBC O +', rbc5 ],
          ['RBC O -', rbc6 ],
          ['RBC AB +', rbc7 ],
          ['RBC AB -', rbc8 ],
          ['WBC A +', wbc1 ],
          ['WBC A -', wbc2 ],
          ['WBC B +', wbc3 ],
          ['WBC B -', wbc4 ],
          ['WBC O +', wbc5 ],
          ['WBC O -', wbc6 ],
          ['WBC AB +', wbc7 ],
          ['WBC AB -', wbc8 ],
          ['PLASMA A +', p1 ],
          ['PLASMA A -', p2 ],
          ['PLASMA B +', p3 ],
          ['PLASMA B -', p4 ],
          ['PLASMA O +', p5 ],
          ['PLASMA O -', p6 ],
          ['PLASMA AB +', p7 ],
          ['PLASMA AB -', p8 ],
          ['PLATELETS A +', pl1 ],
          ['PLATELETS A -', pl2 ],
          ['PLATELETS B +', pl3 ],
          ['PLATELETS B -', pl4 ],
          ['PLATELETS O +', pl5 ],
          ['PLATELETS O -', pl6 ],
          ['PLATELETS AB +', pl7 ],
          ['PLATELETS AB -', pl8 ],
         ]);

        var options = {
          title: 'REPORT Below Displays Your Last Updated Data!'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
	  
    </script>

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
  	 <div id="piechart" style="width: 900px; height: 500px;"></div>
		<form action="UserDashboard.html" method="post">
				<input type="submit" value="Back to User Dashboard">
		</form>
</div>			
<!-- banner -->
</body>
</html>