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
$result = mysqli_query($conn,"select password from acm15 where password = '".$_SESSION["key2_session"]."'");

$result_value = mysqli_fetch_array($result);

if($result_value['password']!="678901")
{
   header("Location: acmlogin2.php");
}

#------------------------------------------

$option10="";

if(isset($_POST["tenoption"]))
{
    $uuser10=$_POST["uuser10"];
	$option10=$_POST["tenoption"];
}

$sql="INSERT INTO `acm10`(`username`,`option10`, `post_time`) VALUES ('$uuser10','$option10',CURRENT_TIMESTAMP)";

mysqli_query($conn,$sql) or die(mysqli_error($conn));

if(mysqli_affected_rows($conn)>0)
{
	$_SESSION["user11"] = true;
}

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
<script src="jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<style>

body {
  -webkit-user-select: none;
     -moz-user-select: -moz-none;
      -ms-user-select: none;
          user-select: none;
}

</style>

<body>

<!----------nav bar for desktop------->
<div class="w3-bar w3-light-grey w3-card-2 w3-hide-small w3-hide-medium w3-mobile" style="width:100%;">
	<div class="w3-bar-item w3-mobile" style="font-size:30px;"><b>ACM and ACM-W</b></div>
	<div class="w3-bar-item w3-mobile" style="font-size:30px;">Second Round</div>
	<button class="w3-button w3-bar-item w3-padding w3-right w3-hover-blue" style="height:60px; width:120px; transition:0.5s; color:black;" data-toggle="modal" data-target="#myymodal">logout <span class="glyphicon glyphicon-log-out"></span></button>
</div>

<!--------------nav bar for tablets--------------->
<div class="w3-bar w3-light-grey w3-card-2 w3-hide-large w3-hide-small w3-mobile" style="width:100%;">
	<div class="w3-bar-item" style="font-size:15px;"><b>ACM and ACM-W</b></div>
	<div class="w3-bar-item w3-mobile" style="font-size:15px;">Second Round</div>
	<button class="w3-button w3-bar-item w3-padding w3-right w3-hover-blue" style="height:40px; z-index:999; width:100px; transition:0.5s; color:black;" data-toggle="modal" data-target="#myymodal">logout <span class="glyphicon glyphicon-log-out"></span></button>
</div>

<!------------nav bar for mobiles------------>
<div class="w3-bar w3-light-grey w3-card w3-hide-large w3-hide-medium w3-mobile" style="width:100%; box-shadow:0 4px 8px rgba(0,0,0,0.6);">
	<div class="w3-bar-item" style="font-size:15px;"><b>ACM and ACM-W</b></div>
	<button class="w3-button w3-bar-item w3-padding w3-right w3-hover-blue" style="height:40px; z-index:999; width:100px; transition:0.5s; color:black;" data-toggle="modal" data-target="#myymodal">logout <span class="glyphicon glyphicon-log-out"></span></button>
</div>
<div class="modal fade" id="myymodal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<center><div class="modal-title"><h2><b>LOG-OUT</b></h2></div></center>
			</div>
			<div class="modal-body">
				<center><h4>Are you sure you want to logout ?</h4></center>
			</div>
			<div class="modal-footer">
				<a href="logout.php"><button type="button" class="btn btn-default">yes <span class="glyphicon glyphicon-thumbs-up"></span></button></a>
				<button type="button" class="btn btn-default" data-dismsis="modal">no <span class="glyphicon glyphicon-thumbs-down"></span></button>
			</div>
		</div>
	</div>
</div>

<div class="container" style="margin-top:40px;">
	<div class="w3-border w3-padding">
		<div class="w3-padding">
			<center><h1>Your Quiz Successfully Submitted</h1></center>
		</div>
	</div>
</div>

<script>
$(document).ready(function () {
    $('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });
});
</script>

<script>
$(document).ready(function () {
    $("body").on("contextmenu",function(e){
        return false;
    });
});
</script>

<script>
    $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
</script>


</body>
</html>
