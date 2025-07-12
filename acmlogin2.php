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
$result = mysqli_query($conn,"select username, password from acm13 where username = '".$_SESSION["name2_session"]."' and password = '".$_SESSION["password2_session"]."'");

$result_value = mysqli_fetch_array($result);

if($result_value['username']!="part1" && $result_value['password']!="pass123")
{
   header("Location: acmloggin.php");
}
else
{
#------------------------------------------
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

<nav class="navbar navbar-default" style="border-radius:0; border:none; box-shadow:0 4px 8px 0 rgba(0,0,0,0.5);">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
				<span class="icon-bar" id="bar1"></span>
				<span class="icon-bar" id="bar2"></span>
				<span class="icon-bar" id="bar3"></span>
			</button>
			<div class="navbar-brand" style="transition:0.5s;">ACM and ACM-W</div>
		</div>
		<div class="collapse navbar-collapse" id="mynav">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="" data-toggle="modal" data-target="#mymodal1" style="transition:0.5s;">logout <span class="glyphicon glyphicon-log-out"></span></a></li>
			</ul>
		</div>
	</div>
</nav>
<div class="modal fade" id="mymodal1" role="dialog">
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
				<button type="button" class="btn btn-default" data-dismiss="modal">no <span class="glyphicon glyphicon-thumbs-down"></span></button>
			</div>
		</div>
	</div>
</div>
<br>
<div class="w3-border w3-padding" style="margin-top:-20px;">
	<center>
		<h1><b>QUIZ PORTAL</b></h1>
	</center>
</div>
<div class="container">
	<div class="row" style="margin-top:40px;">
		<div class="col-sm-12">
			<center><h2>Participant Panel</h2></center>
		</div>
	</div>
	<br>
	<br>
	<div class="row">
		<div class="col-sm-6 w3-padding">
			<div class="jumbotron w3-border" style="border-radius:0;">
				<center><h3>Round One</h3>
				<br>
				<h1><span class="glyphicon glyphicon-pencil w3-hover-shadow w3-border" style="background-color:white; transition:0.5s; padding:40px; cursor:pointer;" data-toggle="modal" data-target="#moda1"></span></h1></center>
			</div>
		</div>
		<form method="post" action="firstacmlogin2.php">
			<div class="modal fade" id="moda1" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content w3-animate-zoom">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<center><div class="modal-title"><h2><b>ROUND ONE - Coding<b></h2></div></center>
						</div>
						<div class="modal-body">
						<center><h4>Enter the key in order to start Round One</h4></center>
						<br>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-key"></i></span>
									<input type="password" class="form-control" name="pwd1" placeholder="enter given key" maxlength="6">
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" name="sq1" class="btn btn-default" style="transition:0.5s;">Start Quiz</button>
							<button type="button" class="btn btn-default" style="transition:0.5s;" data-dismiss="modal">close &times;</button>
						</div>
					</div>
				</div>
			</div>
		</form>
		<div class="col-sm-6 w3-padding">
			<div class="jumbotron w3-border" style="border-radius:0;">
				<center><h3>Round Two</h3>
				<br>
				<h1><span class="glyphicon glyphicon-pencil w3-hover-shadow w3-border" style="background-color:white; transition:0.5s; padding:40px; cursor:pointer;" data-toggle="modal" data-target="#moda2"></span></h1></center>
			</div>
		</div>
		<form method="post" action="secondacmlogin2.php">
			<div class="modal fade" id="moda2" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content w3-animate-zoom">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<center><div class="modal-title"><h2><b>ROUND TWO - Multiple Choice</b></h2></div></center>
						</div>
						<div class="modal-body">
						<center><h4>Enter the key in order to start Round Two</h4></center>
						<br>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input type="text" class="form-control" placeholder="enter given username" name="username2" maxlength="100">
							</div>
						</div>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-key"></i></span>
									<input type="password" class="form-control" placeholder="enter given key" name="pwd2" maxlength="6">
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" name="sq2" class="btn btn-default" style="transition:0.5s;">Start Quiz</button>
							<button type="button" class="btn btn-default" style="transition:0.5s;" data-dismiss="modal">close &times;</button>
						</div>
					</div>
				</div>
			</div>
		</form>
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
