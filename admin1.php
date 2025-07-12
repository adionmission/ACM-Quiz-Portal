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

$_SESSION["Q1_session"] = $_POST["Q1"];
$teext1=str_replace("\n","<br>",$_SESSION["Q1_session"]);

###################################################

$_SESSION["Q2_session"] = $_POST["Q2"];
$teext2=str_replace("\n","<br>",$_SESSION["Q2_session"]);

###################################################

$_SESSION["Q3_session"] = $_POST["Q3"];
#$question3 = $_SESSION["Q3_session"];
$teext3=str_replace("\n","<br>",$_SESSION["Q3_session"]);

###################################################

$_SESSION["Q4_session"] = $_POST["Q4"];
$teext4=str_replace("\n","<br>",$_SESSION["Q4_session"]);

###################################################

$_SESSION["Q5_session"] = $_POST["Q5"];
$teext5=str_replace("\n","<br>",$_SESSION["Q5_session"]);

$sql = "update acm20 set teext1='$teext1',teext2='$teext2',teext3='$teext3',teext4='$teext4',teext5='$teext5' where id=1"; 

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
<!----------nav bar for desktop------->
<div class="w3-bar w3-light-grey w3-card-2 w3-hide-small w3-hide-medium w3-mobile" style="width:100%;">
	<div class="w3-bar-item w3-mobile" style="font-size:30px;"><b>ACM and ACM-W</b></div>
	<div class="w3-bar-item w3-mobile" style="font-size:30px;">Administrator Panel</div>
	<button class="w3-button w3-bar-item w3-padding w3-right w3-hover-blue" style="height:60px; width:120px; transition:0.5s; color:black;" data-toggle="modal" data-target="#logout">logout <span class="glyphicon glyphicon-log-out"></span></button>
	<button class="w3-button w3-bar-item w3-padding w3-right w3-hover-blue" style="height:60px; width:150px; transition:0.5s; color:black;" data-toggle="collapse" data-target="#coll1"><span class="glyphicon glyphicon-pencil"></span> Instructions</button>
	<button class="w3-button w3-bar-item w3-padding w3-right w3-hover-blue" style="height:60px; width:200px; transition:0.5s; color:black;" data-toggle="collapse" data-target="#coll2"><span class="glyphicon glyphicon-cog"></span> Technical Issue</button>
	<div class="collapse w3-padding" style="margin-top:40px;" id="coll1">
		<center>
		<hr class="w3-animate-zoom w3-border-black">
			<h3>INSTRUCTIONS</h3>
			<br>
			<h5>1. Choices are given to set the number of questions</h5>
			<h5>2. You can write or edit the questions as per your need</h5>
		</center>
	</div>
	<div class="collapse w3-padding" style="margin-top:40px;" id="coll2">
		<hr class="w3-animate-zoom w3-border-black">
		<form method="post" action="technicalissue.php">
		<div class="row w3-padding" style="margin-top:30px;">
			<div class="col-sm-6">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="text" class="form-control" placeholder="your name" name="name">
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-certificate"></i></span>
						<input type="text" class="form-control" placeholder="your post in ACM and ACM-W" name="post">
					</div>
				</div>
			</div>
		</div>
		<div class="row w3-padding">
			<div class="col-sm-12">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
						<textarea class="form-control" placeholder="write your issue . . ." rows="6" name="issue"></textarea>
					</div>
				</div>
			</div>
		</div>
		<div class="row w3-padding">
			<div class="col-sm-12">
				<div class="pull-right"><button type="button" class="btn btn-primary w3-large">send <span class="glyphicon glyphicon-send"></span></button></div>
			</div>
		</div>
		</form>
	</div>
</div>

<!--------------nav bar for tablets--------------->
<div class="w3-bar w3-light-grey w3-card-2 w3-hide-large w3-hide-small w3-mobile" style="width:100%;">
	<div class="w3-bar-item" style="font-size:25px;"><b>ACM and ACM-W</b></div>
	<div class="w3-bar-item w3-mobile" style="font-size:25px;">Administrator Panel</div>
	<button class="w3-button w3-bar-item w3-padding w3-right w3-hover-blue" style="height:60px; width:150px; transition:0.5s; color:black;" data-toggle="collapse" data-target="#coll3"><span class="glyphicon glyphicon-pencil"></span> Instructions</button>
	<button class="w3-button w3-bar-item w3-padding w3-right w3-hover-blue" style="height:60px; width:200px; transition:0.5s; color:black;" data-toggle="collapse" data-target="#coll4"><span class="glyphicon glyphicon-cog"></span> Technical Issue</button>
	<div class="collapse w3-padding" style="margin-top:40px;" id="coll3">
		<center>
		<hr class="w3-animate-zoom w3-border-black">
			<h3>INSTRUCTIONS</h3>
			<br>
			<h5>1. Choices are given to set the number of questions</h5>
			<h5>2. You can write or edit the questions as per your need</h5>
		</center>
	</div>
	<div class="collapse w3-padding" style="margin-top:40px;" id="coll4">
		<hr class="w3-animate-zoom w3-border-black">
		<form method="post" action="technicalissue.php">
		<div class="row w3-padding" style="margin-top:30px;">
			<div class="col-sm-6">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="text" class="form-control" placeholder="your name">
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-certificate"></i></span>
						<input type="text" class="form-control" placeholder="your post in ACM and ACM-W">
					</div>
				</div>
			</div>
		</div>
		<div class="row w3-padding">
			<div class="col-sm-12">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
						<textarea class="form-control" placeholder="write your issue . . ." rows="6"></textarea>
					</div>
				</div>
			</div>
		</div>
		<div class="row w3-padding">
			<div class="col-sm-12">
				<div class="pull-right"><button type="button" class="btn btn-primary w3-large">send <span class="glyphicon glyphicon-send"></span></button></div>
			</div>
		</div>
		</form>
	</div>
	<button class="w3-button w3-bar-item w3-padding w3-right w3-hover-blue" style="width:100%; transition:0.5s; color:black;" data-toggle="modal" data-target="#logout">logout <span class="glyphicon glyphicon-log-out"></span></button>
</div>

<!------------nav bar for mobiles------------>
<div class="w3-bar w3-light-grey w3-card w3-hide-large w3-hide-medium w3-mobile" style="width:100%; box-shadow:0 4px 8px rgba(0,0,0,0.6);">
	<div class="w3-bar-item" style="font-size:15px; text-align:center;"><b>ACM and ACM-W</b></div>
	<div class="w3-bar-item w3-mobile" style="font-size:15px;">Admin Panel</div>
	<button class="w3-button w3-bar-item w3-padding w3-right w3-hover-blue" style="width:100%; transition:0.5s; color:black;" data-toggle="collapse" data-target="#coll5"><span class="glyphicon glyphicon-cog"></span> Technical Issue</button>
	<button class="w3-button w3-bar-item w3-padding w3-right w3-hover-blue" style="width:100%; transition:0.5s; color:black;" data-toggle="collapse" data-target="#coll6"><span class="glyphicon glyphicon-pencil"></span> Instructions</button>
	<br>
	<div class="collapse w3-padding" id="coll6">
		<center>
		<hr class="w3-animate-zoom w3-border-black">
			<h3 style="margin-top:40px;">INSTRUCTIONS</h3>
			<br>
			<h5>1. Choices are given to set the number of questions</h5>
			<h5>2. You can write or edit the questions as per your need</h5>
		</center>
	</div>
	<div class="collapse w3-padding" id="coll5">
		<form method="post" action="technicalissue.php">
		<div class="row w3-padding" style="margin-top:50px;">
			<div class="col-sm-6">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="text" class="form-control" placeholder="your name">
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-certificate"></i></span>
						<input type="text" class="form-control" placeholder="your post in ACM and ACM-W">
					</div>
				</div>
			</div>
		</div>
		<div class="row w3-padding">
			<div class="col-sm-12">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
						<textarea class="form-control" placeholder="write your issue . . ." rows="6"></textarea>
					</div>
				</div>
			</div>
		</div>
		<div class="row w3-padding">
			<div class="col-sm-12">
				<div class="pull-right"><button type="button" class="btn btn-primary w3-large">send <span class="glyphicon glyphicon-send"></span></button></div>
			</div>
		</div>
		</form>
	</div>
	<button class="w3-button w3-bar-item w3-padding w3-right w3-hover-blue" style="width:100%; transition:0.5s; color:black;" data-toggle="modal" data-target="#logout">logout <span class="glyphicon glyphicon-log-out"></span></button>
</div>

<form>
	<div class="modal fade" id="logout" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content w3-animate-zoom">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<center><div class="modal-title"><h2>LOGOUT</h2></div></center>
				</div>
				<div class="modal-body">
					<center><h5>Are you sure you want to log out ?</h5></center>
				</div>
				<div class="modal-footer">
					<a href="logout.php"><button type="button" class="btn btn-default" style="transition:0.5s;">yes <span class="glyphicon glyphicon-thumbs-up"></span></button></a>
					<button type="button" class="btn btn-default" style="transition:0.5s;" data-dismiss="modal">no <span class="glyphicon glyphicon-thumbs-down"></span></button>
				</div>
			</div>
		</div>
	</div>
</form>

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
