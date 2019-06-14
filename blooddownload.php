<?php 
session_start();
if(isset($_SESSION['username']))
{
	require 'connect.php';
	$username=$_SESSION['username'];
	
	function cleanData(&$str) 
	{ 
		$str = preg_replace("/\t/", "\\t", $str); 
		$str = preg_replace("/\r?\n/", "\\n", $str); 
		if(strstr($str, '"')) 
			$str = '"' . str_replace('"', '""', $str) . '"'; 
	}  
	$filename = $username."_" . date('Y-m-d') . ".xls"; 
	header("Content-Disposition: attachment; filename=\"$filename\""); 
	header("Content-Type: application/vnd.ms-excel"); 
	$flag = false;

	$query="select blood_bank_name from user_login_credentials where username='$username'";
	$result=mysqli_query($conn,$query) or die(mysqli_error());
	$rows=mysqli_fetch_row($result);
	$userBloodBank=$rows[0];

	$query = "select * from blood_count where blood_bank_name = '$userBloodBank'";
	$result=$conn->query($query);
	while($row = $result->fetch_assoc()) 
	{ 
		if(!$flag) 
		{ 
			echo implode("\t", array_keys($row)) . "\r\n"; $flag = true; 
		} 
		array_walk($row, __NAMESPACE__ . '\cleanData'); 
		echo implode("\t", array_values($row)) . "\r\n"; 
	} 
	exit;
}?>
