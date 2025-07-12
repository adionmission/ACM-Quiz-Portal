<?php
session_start();

date_default_timezone_set("Asia/Kolkata");

$servername="mysql.hostinger.in";
$dbusername="";
$dbpassword="";
$dbname="";

$conn=mysqli_connect($servername,$dbusername,$dbpassword,$dbname);
mysqli_select_db($conn,$dbname);

$result = mysqli_query($conn,"select username, password from acm12 where username = '".$_SESSION["name1_session"]."' and password = '".$_SESSION["password1_session"]."'");

$result_value = mysqli_fetch_array($result);

if($result_value['username']!="cdadmin" && $result_value['password']!="acmpass")
{
   header("Location: acmloggin.php");
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


<div class="container" style="margin-top:100px;">
	<div class="w3-border" style="padding:40px;">
		<div class="w3-padding">
			<center>
			<div class="row">
				<div class="col-sm-12">
					<button type="button" class="btn btn-default btn-block w3-hover-shadow" style="transition:0.5s; border-radius:0; padding:20px;" data-toggle="collapse" data-target="#col1">CODING QUESTIONS</button>
					<div class="collapse w3-animate-zoom" id="col1" style="margin-top:30px;">
						<h4>Select Number Of Questions</h4>
						<button type="button" class="btn btn-default" style="transition:0.5s;" data-toggle="collapse" data-target="#op1">5</button>
						<button type="button" class="btn btn-default" style="transition:0.5s;" disabled="disabled" data-toggle="collapse" data-target="#op2">10</button>
					</div>
				</div>
			</div>
			<br>
			<br>
			<br>
			<div class="row">
				<div class="col-sm-12">
					<button type="button" class="btn btn-default btn-block w3-hover-shadow" style="transition:0.5s; border-radius:0; padding:20px;" data-toggle="collapse" data-target="#col2">MULTIPLE CHOICE QUESTIONS</button>
					<div class="collapse w3-animate-zoom" id="col2" style="margin-top:30px;">
						<h4>Select Number Of Questions</h4>
						<button type="button" class="btn btn-default" style="transition:0.5s;" disabled="disabled" data-toggle="collapse" data-target="#op4">5</button>
						<button type="button" class="btn btn-default" style="transition:0.5s;" data-toggle="collapse" data-target="#op5">10</button>
					</div>
				</div>
			</div>
			<center>
		</div>
	</div>

<!------------coding question (5)-------------->
<div class="collapse" id="op1" style="margin-top:100px;">
	<div class="row w3-padding">
		<div class="col-sm-12">
			<div class="w3-border">
				<div class="w3-padding">
					<form method="post" action="admin1.php">
						<div class="row">
							<div class="col-sm-12">
								<center><h3>Write Or Edit Your Questions</h3>
								<hr>
								<h4>CODING QUESTIONS</h4></center>
								<br>
								<div class="jumbotron w3-border" style="border-radius:0;">
									<h4>Question Number-1</h4>
									<div class="form-group">
										<textarea class="form-control" placeholder="demo" rows="15" name="Q1">question 1</textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="row" style="margin-top:60px;">
							<div class="col-sm-12">
								<div class="jumbotron w3-border" style="border-radius:0;">
									<h4>Question Number-2</h4>
									<div class="form-group">
										<textarea class="form-control" placeholder="demo" rows="15" name="Q2">question 1</textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="row" style="margin-top:60px;">
							<div class="col-sm-12">
								<div class="jumbotron w3-border" style="border-radius:0;">
									<h4>Question Number-3</h4>
									<div class="form-group">
										<textarea class="form-control" placeholder="demo" rows="15" name="Q3">question 1</textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="row" style="margin-top:60px;">
							<div class="col-sm-12">
								<div class="jumbotron w3-border" style="border-radius:0;">
									<h4>Question Number-4</h4>
									<div class="form-group">
										<textarea class="form-control" placeholder="demo" rows="15" name="Q4">question 1</textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="row" style="margin-top:60px;">
							<div class="col-sm-12">
								<div class="jumbotron w3-border" style="border-radius:0;">
									<h4>Question Number-5</h4>
									<div class="form-group">
										<textarea class="form-control" placeholder="demo" rows="15" name="Q5">question 1</textarea>
									</div>
								</div>
							</div>
						</div>
						<button type="button" class="btn btn-default btn-block" style="padding:10px; transition:0.5s; border-radius:0;" data-toggle="modal" data-target="#submodal">Post <span class="fa fa-arrow-right"></span></button>
							<div class="modal fade" id="submodal" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content w3-animate-bottom">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<center><div class="modal-title"><h2>POST QUESTIONS</h2></div></center>
										</div>
										<div class="modal-body">
											<center><h5>Are you sure you want to post the questions ?</h5></center>
										</div>
										<div class="modal-footer">
											<button type="submit" name="submit1" class="btn btn-default" style="transition:0.5s;">yes <span class="glyphicon glyphicon-thumbs-up"></span></button>
											<button type="button" class="btn btn-default" style="transition:0.5s;" data-dismiss="modal">no <span class="glyphicon glyphicon-thumbs-down"></span></button>
										</div>
									</div>
								</div>
							</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!----------coding questions (10)------------>

<div class="collapse" id="op2" style="margin-top:100px;">
	<div class="row w3-padding">
		<div class="col-sm-12">
			<div class="w3-border">
				<div class="w3-padding">
					<form>
						<div class="row">
							<div class="col-sm-12">
								<center><h3>Write Or Edit Your Questions</h3>
								<hr>
								<h4>CODING QUESTIONS</h4></center>
								<br>
								<div class="jumbotron w3-border" style="border-radius:0;">
									<h4>Question Number-1</h4>
									<div class="form-group">
										<textarea class="form-control" placeholder="demo" rows="15" name="Q1">Question number 1</textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="row" style="margin-top:60px;">
							<div class="col-sm-12">
								<div class="jumbotron w3-border" style="border-radius:0;">
									<h4>Question Number-2</h4>
									<div class="form-group">
										<textarea class="form-control" placeholder="demo" rows="15" name="Q2">Question number 2</textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="row" style="margin-top:60px;">
							<div class="col-sm-12">
								<div class="jumbotron w3-border" style="border-radius:0;">
									<h4>Question Number-3</h4>
									<div class="form-group">
										<textarea class="form-control" placeholder="demo" rows="15" name="Q3">Question number 3</textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="row" style="margin-top:60px;">
							<div class="col-sm-12">
								<div class="jumbotron w3-border" style="border-radius:0;">
									<h4>Question Number-4</h4>
									<div class="form-group">
										<textarea class="form-control" placeholder="demo" rows="15" name="Q4">Question number 4</textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="row" style="margin-top:60px;">
							<div class="col-sm-12">
								<div class="jumbotron w3-border" style="border-radius:0;">
									<h4>Question Number-5</h4>
									<div class="form-group">
										<textarea class="form-control" placeholder="demo" rows="15" name="Q5">Question number 5</textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="jumbotron w3-border" style="border-radius:0;">
									<h4>Question Number-6</h4>
									<div class="form-group">
										<textarea class="form-control" placeholder="demo" rows="15" name="Q6">Question number 6</textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="row" style="margin-top:60px;">
							<div class="col-sm-12">
								<div class="jumbotron w3-border" style="border-radius:0;">
									<h4>Question Number-7</h4>
									<div class="form-group">
										<textarea class="form-control" placeholder="demo" rows="15" name="Q7">Question number 7</textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="row" style="margin-top:60px;">
							<div class="col-sm-12">
								<div class="jumbotron w3-border" style="border-radius:0;">
									<h4>Question Number-8</h4>
									<div class="form-group">
										<textarea class="form-control" placeholder="demo" rows="15" name="Q8">Question number 8</textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="row" style="margin-top:60px;">
							<div class="col-sm-12">
								<div class="jumbotron w3-border" style="border-radius:0;">
									<h4>Question Number-9</h4>
									<div class="form-group">
										<textarea class="form-control" placeholder="demo" rows="15" name="Q9">Question number 9</textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="row" style="margin-top:60px;">
							<div class="col-sm-12">
								<div class="jumbotron w3-border" style="border-radius:0;">
									<h4>Question Number-10</h4>
									<div class="form-group">
										<textarea class="form-control" placeholder="demo" rows="15" name="Q10">Question number 10</textarea>
									</div>
								</div>
							</div>
						</div>
						<button type="button" class="btn btn-default btn-block" style="padding:10px; transition:0.5s; border-radius:0;" data-toggle="modal" data-target="#submodal1">Post <span class="fa fa-arrow-right"></span></button>
							<div class="modal fade" id="submodal1" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content w3-animate-bottom">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<center><div class="modal-title"><h2>POST QUESTIONS</h2></div></center>
										</div>
										<div class="modal-body">
											<center><h5>Are you sure you want to post the questions ?</h5></center>
										</div>
										<div class="modal-footer">
											<button type="submit" name="submit4" class="btn btn-default" style="transition:0.5s;">yes <span class="glyphicon glyphicon-thumbs-up"></span></button>
											<button type="button" class="btn btn-default" style="transition:0.5s;" data-dismiss="modal">no <span class="glyphicon glyphicon-thumbs-down"></span></button>
										</div>
									</div>
								</div>
							</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<!-----------multiple choice questions (5)------------->

<div class="collapse" style="margin-top:100px;" id="op4">
	<div class="row w3-padding">
		<div class="col-sm-12">
			<div class="w3-border">
				<div class="w3-padding">
					<form method="post" action="admin.php">
						<div class="row">
							<div class="col-sm-12">
								<center><h3>Write Or Edit Your Questions</h3>
								<hr>
								<h4>MULTIPLE CHOICE QUESTIONS</h4></center>
								<br>
								<div class="jumbotron w3-border" style="border-radius:0;">
									<h4>Question Number-1</h4>
									<div class="form-group">
										<textarea class="form-control" placeholder="demo" name="q1" rows="15">Question number 1</textarea>
									</div>
									<h4>Input Multiple Choice Options</h4>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">1.</span>
											<textarea class="form-control" placeholder="write first option" name="mq1">option one</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">2.</span>
											<textarea class="form-control" placeholder="write second option" name="mq2">option two</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">3.</span>
											<textarea class="form-control" placeholder="write third option" name="mq3">option third</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">4.</span>
											<textarea class="form-control" placeholder="write forth option" name="mq4">option four</textarea>
										</div>
									</div>
								</div>
								<div class="jumbotron w3-border" style="border-radius:0; margin-top:60px;">
									<h4>Question Number-2</h4>
									<div class="form-group">
										<textarea class="form-control" placeholder="demo" name="q2" rows="15">Question number 2</textarea>
									</div>
									<h4>Input Multiple Choice Options</h4>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">1.</span>
											<textarea class="form-control" placeholder="write first option" name="mq5">option one</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">2.</span>
											<textarea class="form-control" placeholder="write second option" name="mq6">option two</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">3.</span>
											<textarea class="form-control" placeholder="write third option" name="mq7">option third</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">4.</span>
											<textarea class="form-control" placeholder="write forth option" name="mq8">option four</textarea>
										</div>
									</div>
								</div>
								<div class="jumbotron w3-border" style="border-radius:0; margin-top:60px;">
									<h4>Question Number-3</h4>
									<div class="form-group">
										<textarea class="form-control" placeholder="demo" name="q3" rows="15">Question number 3</textarea>
									</div>
									<h4>Input Multiple Choice Options</h4>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">1.</span>
											<textarea class="form-control" placeholder="write first option" name="mq9">option one</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">2.</span>
											<textarea class="form-control" placeholder="write second option" name="mq10">option two</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">3.</span>
											<textarea class="form-control" placeholder="write third option" name="mq11">option third</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">4.</span>
											<textarea class="form-control" placeholder="write forth option" name="mq12">option four</textarea>
										</div>
									</div>
								</div>
								<div class="jumbotron w3-border" style="border-radius:0; margin-top:60px;">
									<h4>Question Number-4</h4>
									<div class="form-group">
										<textarea class="form-control" placeholder="demo" rows="15" name="q4">Question number 4</textarea>
									</div>
									<h4>Input Multiple Choice Options</h4>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">1.</span>
											<textarea class="form-control" placeholder="write first option" name="mq13">option one</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">2.</span>
											<textarea class="form-control" placeholder="write second option" name="mq14">option two</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">3.</span>
											<textarea class="form-control" placeholder="write third option" name="mq15">option third</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">4.</span>
											<textarea class="form-control" placeholder="write forth option" name="mq16">option four</textarea>
										</div>
									</div>
								</div>
								<div class="jumbotron w3-border" style="border-radius:0; margin-top:60px;">
									<h4>Question Number-5</h4>
									<div class="form-group">
										<textarea class="form-control" placeholder="demo" rows="15" name="q5">Question number 5</textarea>
									</div>
									<h4>Input Multiple Choice Options</h4>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">1.</span>
											<textarea class="form-control" placeholder="write first option" name="mq17">option one</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">2.</span>
											<textarea class="form-control" placeholder="write second option" name="mq18">option two</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">3.</span>
											<textarea class="form-control" placeholder="write third option" name="mq19">option third</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">4.</span>
											<textarea class="form-control" placeholder="write forth option" name="mq20">option four</textarea>
										</div>
									</div>
								</div>
								<button type="button" class="btn btn-default btn-block" style="border-radius:0; padding:10px; transition:0.5s;" data-toggle="modal" data-target="#mod1">submit <span class="fa fa-arrow-right"></span></button>
									<div class="modal fade" id="mod1" role="dialog">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<center><div class="modal-title"><h2>Submission</h2></div></center>
												</div>
												<div class="modal-body">
													<center><h5>Are you sure you want to submit your questions ?</h5></center>
												</div>
												<div class="modal-footer">
													<button type="submit" name="submit2" class="btn btn-default" style="transition:0.5s;">yes <span class="glyphicon glyphicon-thumbs-up"></span></button>
													<button type="button" class="btn btn-default" style="transition:0.5s;" data-dismiss="modal">no <span class="glyphicon glyphicon-thumbs-up"></span></button>
												</div>
											</div>
										</div>
									</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!-----------multiple choice questions (10)------------->

<div class="collapse" style="margin-top:100px;" id="op5">
	<div class="row w3-padding">
		<div class="col-sm-12">
			<div class="w3-border">
				<div class="w3-padding">
					<form method="post" action="admin2.php">
						<div class="row">
							<div class="col-sm-12">
								<center><h3>Write Or Edit Your Questions</h3>
								<hr>
								<h4>MULTIPLE CHOICE QUESTIONS</h4></center>
								<br>
								<div class="jumbotron w3-border" style="border-radius:0;">
									<h4>Question Number-1</h4>
									<div class="form-group">
										<textarea class="form-control" placeholder="demo" name="q1" rows="15">Question number 1</textarea>
									</div>
									<h4>Input Multiple Choice Options</h4>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">1.</span>
											<textarea class="form-control" placeholder="write first option" name="mq1">option one</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">2.</span>
											<textarea class="form-control" placeholder="write second option" name="mq2">option two</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">3.</span>
											<textarea class="form-control" placeholder="write third option" name="mq3">option third</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">4.</span>
											<textarea class="form-control" placeholder="write forth option" name="mq4">option four</textarea>
										</div>
									</div>
								</div>
								<div class="jumbotron w3-border" style="border-radius:0; margin-top:60px;">
									<h4>Question Number-2</h4>
									<div class="form-group">
										<textarea class="form-control" placeholder="demo" name="q2" rows="15">Question number 2</textarea>
									</div>
									<h4>Input Multiple Choice Options</h4>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">1.</span>
											<textarea class="form-control" placeholder="write first option" name="mq5">option one</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">2.</span>
											<textarea class="form-control" placeholder="write second option" name="mq6">option two</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">3.</span>
											<textarea class="form-control" placeholder="write third option" name="mq7">option third</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">4.</span>
											<textarea class="form-control" placeholder="write forth option" name="mq8">option four</textarea>
										</div>
									</div>
								</div>
								<div class="jumbotron w3-border" style="border-radius:0; margin-top:60px;">
									<h4>Question Number-3</h4>
									<div class="form-group">
										<textarea class="form-control" placeholder="demo" name="q3" rows="15">Question number 3</textarea>
									</div>
									<h4>Input Multiple Choice Options</h4>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">1.</span>
											<textarea class="form-control" placeholder="write first option" name="mq9">option one</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">2.</span>
											<textarea class="form-control" placeholder="write second option" name="mq10">option two</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">3.</span>
											<textarea class="form-control" placeholder="write third option" name="mq11">option third</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">4.</span>
											<textarea class="form-control" placeholder="write forth option" name="mq12">option four</textarea>
										</div>
									</div>
								</div>
								<div class="jumbotron w3-border" style="border-radius:0; margin-top:60px;">
									<h4>Question Number-4</h4>
									<div class="form-group">
										<textarea class="form-control" placeholder="demo" rows="15" name="q4">Question number 4</textarea>
									</div>
									<h4>Input Multiple Choice Options</h4>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">1.</span>
											<textarea class="form-control" placeholder="write first option" name="mq13">option one</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">2.</span>
											<textarea class="form-control" placeholder="write second option" name="mq14">option two</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">3.</span>
											<textarea class="form-control" placeholder="write third option" name="mq15">option third</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">4.</span>
											<textarea class="form-control" placeholder="write forth option" name="mq16">option four</textarea>
										</div>
									</div>
								</div>
								<div class="jumbotron w3-border" style="border-radius:0; margin-top:60px;">
									<h4>Question Number-5</h4>
									<div class="form-group">
										<textarea class="form-control" placeholder="demo" rows="15" name="q5">Question number 5</textarea>
									</div>
									<h4>Input Multiple Choice Options</h4>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">1.</span>
											<textarea class="form-control" placeholder="write first option" name="mq17">option one</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">2.</span>
											<textarea class="form-control" placeholder="write second option" name="mq18">option two</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">3.</span>
											<textarea class="form-control" placeholder="write third option" name="mq19">option third</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">4.</span>
											<textarea class="form-control" placeholder="write forth option" name="mq20">option four</textarea>
										</div>
									</div>
								</div>
								<div class="jumbotron w3-border" style="border-radius:0;">
									<h4>Question Number-6</h4>
									<div class="form-group">
										<textarea class="form-control" placeholder="demo" name="q6" rows="15">Question number 6</textarea>
									</div>
									<h4>Input Multiple Choice Options</h4>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">1.</span>
											<textarea class="form-control" placeholder="write first option" name="mq21">option one</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">2.</span>
											<textarea class="form-control" placeholder="write second option" name="mq22">option two</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">3.</span>
											<textarea class="form-control" placeholder="write third option" name="mq23">option third</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">4.</span>
											<textarea class="form-control" placeholder="write forth option" name="mq24">option four</textarea>
										</div>
									</div>
								</div>
								<div class="jumbotron w3-border" style="border-radius:0; margin-top:60px;">
									<h4>Question Number-7</h4>
									<div class="form-group">
										<textarea class="form-control" placeholder="demo" name="q7" rows="15">Question number 7</textarea>
									</div>
									<h4>Input Multiple Choice Options</h4>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">1.</span>
											<textarea class="form-control" placeholder="write first option" name="mq25">option one</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">2.</span>
											<textarea class="form-control" placeholder="write second option" name="mq26">option two</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">3.</span>
											<textarea class="form-control" placeholder="write third option" name="mq27">option third</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">4.</span>
											<textarea class="form-control" placeholder="write forth option" name="mq28">option four</textarea>
										</div>
									</div>
								</div>
								<div class="jumbotron w3-border" style="border-radius:0; margin-top:60px;">
									<h4>Question Number-8</h4>
									<div class="form-group">
										<textarea class="form-control" placeholder="demo" name="q8" rows="15">Question number 8</textarea>
									</div>
									<h4>Input Multiple Choice Options</h4>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">1.</span>
											<textarea class="form-control" placeholder="write first option" name="mq29">option one</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">2.</span>
											<textarea class="form-control" placeholder="write second option" name="mq30">option two</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">3.</span>
											<textarea class="form-control" placeholder="write third option" name="mq31">option third</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">4.</span>
											<textarea class="form-control" placeholder="write forth option" name="mq32">option four</textarea>
										</div>
									</div>
								</div>
								<div class="jumbotron w3-border" style="border-radius:0; margin-top:60px;">
									<h4>Question Number-9</h4>
									<div class="form-group">
										<textarea class="form-control" placeholder="demo" rows="15" name="q9">Question number 9</textarea>
									</div>
									<h4>Input Multiple Choice Options</h4>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">1.</span>
											<textarea class="form-control" placeholder="write first option" name="mq33">option one</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">2.</span>
											<textarea class="form-control" placeholder="write second option" name="mq34">option two</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">3.</span>
											<textarea class="form-control" placeholder="write third option" name="mq35">option third</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">4.</span>
											<textarea class="form-control" placeholder="write forth option" name="mq36">option four</textarea>
										</div>
									</div>
								</div>
								<div class="jumbotron w3-border" style="border-radius:0; margin-top:60px;">
									<h4>Question Number-10</h4>
									<div class="form-group">
										<textarea class="form-control" placeholder="demo" rows="15" name="q10">Question number 10</textarea>
									</div>
									<h4>Input Multiple Choice Options</h4>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">1.</span>
											<textarea class="form-control" placeholder="write first option" name="mq37">option one</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">2.</span>
											<textarea class="form-control" placeholder="write second option" name="mq38">option two</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">3.</span>
											<textarea class="form-control" placeholder="write third option" name="mq39">option third</textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon w3-black">4.</span>
											<textarea class="form-control" placeholder="write forth option" name="mq40">option four</textarea>
										</div>
									</div>
								</div>
								<button type="button" class="btn btn-default btn-block" style="border-radius:0; padding:10px; transition:0.5s;" data-toggle="modal" data-target="#mod2">submit <span class="fa fa-arrow-right"></span></button>
									<div class="modal fade" id="mod2" role="dialog">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<center><div class="modal-title"><h2>Submission</h2></div></center>
												</div>
												<div class="modal-body">
													<center><h5>Are you sure you want to submit your questions ?</h5></center>
												</div>
												<div class="modal-footer">
													<button type="submit" name="submit3" class="btn btn-default" onsubmit="addnewlines();" style="transition:0.5s;">yes <span class="glyphicon glyphicon-thumbs-up"></span></button>
													<button type="button" class="btn btn-default" style="transition:0.5s;" data-dismiss="modal">no <span class="glyphicon glyphicon-thumbs-up"></span></button>
												</div>
											</div>
										</div>
									</div>
							</div>
						</div>
					</form>
				</div>
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
