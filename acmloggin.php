<?php

session_start();

date_default_timezone_set("Asia/Kolkata");

if(!isset($_SESSION["user12"]))
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
	<div class="row w3-padding">
		<div class="col-sm-12">
			<div class="w3-border w3-padding">
				<center>
					<h1><b>ACM and ACM-W</b></h1>
					<h1><b>QUIZ PORTAL</b></h1>
				</center>
			</div>
		</div>
	</div>
	<div class="row w3-padding">
		<div class="col-sm-12">
			<div class="jumbotron w3-border" style="margin-top:150px; border-radius:0;">
				<center>
				<h2>Participant Panel</h2>
				<br>
					<h1><span class="glyphicon glyphicon-user w3-border w3-hover-shadow" data-toggle="modal" data-target="#mymodal2" style="color:black; background-color:white; padding:70px; border-radius:50%; cursor:pointer; transition:0.5s;"></span></h1>
						<div class="modal fade" id="mymodal2" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-lock"></span></button>
										<div class="modal-title"><h2><b>LOGIN</b></h2></div>
									</div>
									<div class="modal-body">
										<h5>Participant Panel</h5>
										<br>
										<form method="post" action="acmplogin.php">
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group">
													<div class="input-group">
														<span class="input-group-addon"><i class="fa fa-user"></i></span>
														<input type="text" class="form-control" placeholder="username" name="name2" maxlength="10">
													</div>
												</div>
											</div>
											<div class="col-sm-12">
												<div class="form-group">
													<div class="input-group">
														<span class="input-group-addon"><i class="fa fa-key"></i></span>
														<input type="password" class="form-control" placeholder="password" name="password2" maxlength="7">
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="submit" name="submit2" class="btn btn-primary" style="transition:0.5s;">login <span class="glyphicon glyphicon-log-in"></span></button>
									</div>
									</form>
								</div>
							</div>
						</div>
				</center>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="jumbotron w3-border"style="margin-top:100px; border-radius:0;">
				<center>
				<h2>Administrator Panel</h2>
				<br>
					<h1><span class="glyphicon glyphicon-user w3-border w3-hover-shadow" data-toggle="modal" data-target="#mymodal1" style="color:black; background-color:white; padding:70px; border-radius:50%; cursor:pointer; transition:0.5s;"></span></h1>
						<div class="modal fade" id="mymodal1" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-lock"></span></button>
										<div class="modal-title"><h2><b>LOGIN</b></h2></div>
									</div>
									<div class="modal-body">
										<h5>Administrator Panel</h5>
										<br>
										<form method="post" action="acmlogin.php">
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group">
													<div class="input-group">
														<span class="input-group-addon"><i class="fa fa-user"></i></span>
														<input type="text" class="form-control" placeholder="username" name="name1" maxlength="10">
													</div>
												</div>
											</div>
											<div class="col-sm-12">
												<div class="form-group">
													<div class="input-group">
														<span class="input-group-addon"><i class="fa fa-key"></i></span>
														<input type="password" class="form-control" placeholder="password" name="password1" maxlength="7">
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="submit" name="submit1" class="btn btn-primary" style="transition:0.5s;">login <span class="glyphicon glyphicon-log-in"></span></button>
									</div>
									</form>
								</div>
							</div>
						</div>
				</center>
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
else
{
?>
<div class="container" style="margin-top:250px;">
	<center><h1 style="color:red;">Logout from Admin Panel first</h1></center>
</div>
<?php
}
?>
</body>
</html>
