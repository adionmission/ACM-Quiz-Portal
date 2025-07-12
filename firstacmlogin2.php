<?php
session_start();

date_default_timezone_set("Asia/Kolkata");

$servername="mysql.hostinger.in";
$dbusername="";
$dbpassword="";
$dbname="";

$p="";

if(isset($_POST["sq1"]))
{
	$_SESSION["key1_session"]=$_POST['pwd1'];
	#$p = $_SESSION["key1_session"];
	#$user1 = $_POST["user1"];
}

$f=0;
$conn= mysqli_connect($servername,$dbusername,$dbpassword);
mysqli_select_db($conn,$dbname);

$q="select * from acm14";

$sql1="INSERT INTO `acm22`('username',`key1`, `post_time`) VALUES ('$user1','$p',CURRENT_TIMESTAMP)"; 

mysqli_query($conn,$sql1);

$row=mysqli_query($conn,$q) or die("Error: ".mysqli_error($conn));
while($r=mysqli_fetch_array($row))
{
if($_SESSION["key1_session"]==$r['password'])
{
$f=1;
break;
}}
if($f==1)
{
	header("location: accm1.php");
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
	<div class="w3-border" style="margin-top:150px;">
		<div class="w3-padding">
			<div class="row">
				<div class="col-sm-12">
					<center><h2>Invalid Key</h2></center>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
    $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
</script>

<?php
}
?>

</body>
</html>
