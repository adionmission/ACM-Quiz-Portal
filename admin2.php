<?php

session_start();

date_default_timezone_set("Asia/Kolkata");

$servername="mysql.hostinger.in";
$dbusername="";
$dbpassword="";
$dbname="";

$conn=mysqli_connect($servername,$dbusername,$dbpassword,$dbname);
mysqli_select_db($conn,$dbname);

# protection -----------------------------------
$result = mysqli_query($conn,"select username, password from acm12 where username = '".$_SESSION["name1_session"]."' and password = '".$_SESSION["password1_session"]."'");

$result_value = mysqli_fetch_array($result);

if($result_value['username']!="cdadmin" && $result_value['password']!="acmpass")
{
   header("Location: acmloggin.php");
}

#------------------------------------------

$_SESSION["q1_session"] = $_POST["q1"];
		$q1=$_SESSION["q1_session"];
	$_SESSION["mq1_session"] = $_POST["mq1"];
		$mq1=$_SESSION["mq1_session"];
	$_SESSION["mq2_session"] = $_POST["mq2"];
		$mq2=$_SESSION["mq2_session"];
	$_SESSION["mq3_session"] = $_POST["mq3"];
		$mq3=$_SESSION["mq3_session"];
	$_SESSION["mq4_session"] = $_POST["mq4"];
		$mq4=$_SESSION["mq4_session"];
			
			$_SESSION["q2_session"] = $_POST["q2"];
			$q2=$_SESSION["q2_session"];
			$_SESSION["mq5_session"] = $_POST["mq5"];
			$mq5=$_SESSION["mq5_session"];
			$_SESSION["mq6_session"] = $_POST["mq6"];
			$mq6=$_SESSION["mq6_session"];
			$_SESSION["mq7_session"] = $_POST["mq7"];
			$mq7=$_SESSION["mq7_session"];
			$_SESSION["mq8_session"] = $_POST["mq8"];
			$mq8=$_SESSION["mq8_session"];
			
			$_SESSION["q3_session"] = $_POST["q3"];
			$q3=$_SESSION["q3_session"];
			$_SESSION["mq9_session"] = $_POST["mq9"];
			$mq9=$_SESSION["mq9_session"];
			$_SESSION["mq10_session"] = $_POST["mq10"];
			$mq10=$_SESSION["mq10_session"];
			$_SESSION["mq11_session"] = $_POST["mq11"];
			$mq11=$_SESSION["mq11_session"];
			$_SESSION["mq12_session"] = $_POST["mq12"];
			$mq12=$_SESSION["mq12_session"];
			
			$_SESSION["q4_session"] = $_POST["q4"];
			$q4=$_SESSION["q4_session"];
			$_SESSION["mq13_session"] = $_POST["mq13"];
			$mq13=$_SESSION["mq13_session"];
			$_SESSION["mq14_session"] = $_POST["mq14"];
			$mq14=$_SESSION["mq14_session"];
			$_SESSION["mq15_session"] = $_POST["mq15"];
			$mq15=$_SESSION["mq15_session"];
			$_SESSION["mq16_session"] = $_POST["mq16"];
			$mq16=$_SESSION["mq16_session"];
			
			$_SESSION["q5_session"] = $_POST["q5"];
			$q5=$_SESSION["q5_session"];
			$_SESSION["mq17_session"] = $_POST["mq17"];
			$mq17=$_SESSION["mq17_session"];
			$_SESSION["mq18_session"] = $_POST["mq18"];
			$mq18=$_SESSION["mq18_session"];
			$_SESSION["mq19_session"] = $_POST["mq19"];
			$mq19=$_SESSION["mq19_session"];
			$_SESSION["mq20_session"] = $_POST["mq20"];
			$mq20=$_SESSION["mq20_session"];
			
			$_SESSION["q6_session"] = $_POST["q6"];
			$q6=$_SESSION["q6_session"];
			$_SESSION["mq21_session"] = $_POST["mq21"];
			$mq21=$_SESSION["mq21_session"];
			$_SESSION["mq22_session"] = $_POST["mq22"];
			$mq22=$_SESSION["mq22_session"];
			$_SESSION["mq23_session"] = $_POST["mq23"];
			$mq23=$_SESSION["mq23_session"];
			$_SESSION["mq24_session"] = $_POST["mq24"];
			$mq24=$_SESSION["mq24_session"];
			
			$_SESSION["q7_session"] = $_POST["q7"];
			$q7=$_SESSION["q7_session"];
			$_SESSION["mq25_session"] = $_POST["mq25"];
			$mq25=$_SESSION["mq25_session"];
			$_SESSION["mq26_session"] = $_POST["mq26"];
			$mq26=$_SESSION["mq26_session"];
			$_SESSION["mq27_session"] = $_POST["mq27"];
			$mq27=$_SESSION["mq27_session"];
			$_SESSION["mq28_session"] = $_POST["mq28"];
			$mq28=$_SESSION["mq28_session"];
			
			$_SESSION["q8_session"] = $_POST["q8"];
			$q8=$_SESSION["q8_session"];
			$_SESSION["mq29_session"] = $_POST["mq29"];
			$mq29=$_SESSION["mq29_session"];
			$_SESSION["mq30_session"] = $_POST["mq30"];
			$mq30=$_SESSION["mq30_session"];
			$_SESSION["mq31_session"] = $_POST["mq31"];
			$mq31=$_SESSION["mq31_session"];
			$_SESSION["mq32_session"] = $_POST["mq32"];
			$mq32=$_SESSION["mq32_session"];
			
			$_SESSION["q9_session"] = $_POST["q9"];
			$q9=$_SESSION["q9_session"];
			$_SESSION["mq33_session"] = $_POST["mq33"];
			$mq33=$_SESSION["mq33_session"];
			$_SESSION["mq34_session"] = $_POST["mq34"];
			$mq34=$_SESSION["mq34_session"];
			$_SESSION["mq35_session"] = $_POST["mq35"];
			$mq35=$_SESSION["mq35_session"];
			$_SESSION["mq36_session"] = $_POST["mq36"];
			$mq36=$_SESSION["mq36_session"];
			
			$_SESSION["q10_session"] = $_POST["q10"];
			$q10=$_SESSION["q10_session"];
			$_SESSION["mq37_session"] = $_POST["mq37"];
			$mq37=$_SESSION["mq37_session"];
			$_SESSION["mq38_session"] = $_POST["mq38"];
			$mq38=$_SESSION["mq38_session"];
			$_SESSION["mq39_session"] = $_POST["mq39"];
			$mq39=$_SESSION["mq39_session"];
			$_SESSION["mq40_session"] = $_POST["mq40"];
			$mq40=$_SESSION["mq40_session"];

$sql = "update acm21 set q1='$q1',mq1='$mq1',mq2='$mq2',mq3='$mq3',mq4='$mq4',
q2='$q2',mq5='$mq5',mq6='$mq6',mq7='$mq7',mq8='$mq8',
q3='$q3',mq9='$mq9',mq10='$mq10',mq11='$mq11',mq12='$mq12',
q4='$q4',mq13='$mq13',mq14='$mq14',mq15='$mq15',mq16='$mq16',
q5='$q5',mq17='$mq1',mq18='$mq18',mq19='$mq19',mq20='$mq20',
q6='$q6',mq21='$mq21',mq22='$mq22',mq23='$mq23',mq24='$mq24',
q7='$q7',mq25='$mq25',mq26='$mq26',mq27='$mq27',mq28='$mq28',
q8='$q8',mq29='$mq29',mq30='$mq30',mq31='$mq31',mq32='$mq32',
q9='$q9',mq33='$mq33',mq34='$mq34',mq35='$mq35',mq36='$mq36',
q10='$q10',mq37='$mq37',mq38='$mq38',mq39='$mq39',mq40='$mq40' where id=1";
 
mysqli_query($conn,$sql);

mysqli_close($conn);

if(!$conn)
{
	die("error in connecting to the database :".mysqli_error($conn));
}
else
{
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<title>acm event</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="icon" type="icon/png" href=""/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

<div class="container">
	<div class="row w3-padding" style="margin-top:40px;">
		<div class="col-sm-12">
			<div class="w3-border">
				<div class="w3-padding">
					<center><h3>Your questions posted successfully</h3>
					<a href="admin.php"><h5>click to continue</h5></a></center>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
}
?>

</body>
</html>
