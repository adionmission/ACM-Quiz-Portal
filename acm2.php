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

$option1="";

if(isset($_POST["fstoption"]))
{
    $uuser1=$_POST["uuser1"];
	$option1=$_POST["fstoption"];
}

$sql="INSERT INTO `acm1`(`username`, `option1`, `post_time`) VALUES ('$uuser1','$option1',CURRENT_TIMESTAMP)";

mysqli_query($conn,$sql) or die(mysqli_error($conn));

if(mysqli_affected_rows($conn)>0)
{
	$_SESSION["user2"] = true;
}

if(!isset($_SESSION["user3"]))
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
<link rel="stylesheet" type="text/css" href="css"/>
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

<body id="body">

<!----------nav bar for desktop------->
<div class="w3-bar w3-light-grey w3-card-2 w3-hide-small w3-hide-medium w3-mobile" style="width:100%;">
	<div class="w3-bar-item w3-mobile" style="font-size:30px;"><b>ACM and ACM-W</b></div>
	<div class="w3-bar-item w3-mobile" style="font-size:30px;">Second Round</div>
</div>

<!--------------nav bar for tablets--------------->
<div class="w3-bar w3-light-grey w3-card-2 w3-hide-large w3-hide-small w3-mobile" style="width:100%;">
	<div class="w3-bar-item" style="font-size:15px;"><b>ACM and ACM-W</b></div>
	<div class="w3-bar-item w3-mobile" style="font-size:15px;">Second Round</div>
</div>

<!------------nav bar for mobiles------------>
<div class="w3-bar w3-light-grey w3-card w3-hide-large w3-hide-medium w3-mobile" style="width:100%; box-shadow:0 4px 8px rgba(0,0,0,0.6);">
	<div class="w3-bar-item" style="font-size:15px;"><b>ACM and ACM-W</b></div>
	<div class="w3-bar-item w3-mobile" style="font-size:15px; width:100%;">Second Round</div>
</div>

<script>

function countdown( elementName, minutes, seconds )
{
    var element, endTime, hours, mins, msLeft, time;

    function twoDigits( n )
    {
        return (n <= 9 ? "0" + n : n);
    }

    function updateTimer()
    {
        msLeft = endTime - (+new Date);
        if ( msLeft < 1000 ) {
            document.getElementById('body').innerHTML = "time over <a href='acm3.php' style='color:blue;'>continue to next question</a>";
			
        } else {
            time = new Date( msLeft );
            hours = time.getUTCHours();
            mins = time.getUTCMinutes();
            element.innerHTML = (hours ? hours + ':' + twoDigits( mins ) : mins) + ':' + twoDigits( time.getUTCSeconds() );
            setTimeout( updateTimer, time.getUTCMilliseconds() + 1000 );
        }
    }

    element = document.getElementById( elementName );
    endTime = (+new Date) + 1000 * (60*minutes + seconds) + 1000;
    updateTimer();
}

</script>

<div class="container">
	<div class="row" style="margin-top:20px;">
		<div class="col-sm-12">
			<div class="pull-right"><div id="countdown"></div></div>
			<script>countdown( "countdown", 3, 0 );</script>
		</div>
	</div>
</div>
<form method="post" action="acm3.php">
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-user"></i></span>
					<input type="text" class="form-control" placeholder="enter your username" name="uuser2">
				</div>
			</div>
		</div>
	</div>
	<h5><span style="color:red;">*</span>Enter your username in order to save your answer</h5>
</div>

<?php

$conn=mysqli_connect($servername,$dbusername,$dbpassword,$dbname);
mysqli_select_db($conn,"demos1");

$sql="select * from acm21 where id = 2";

$result=mysqli_query($conn,$sql);

$q2=$mq5=$mq6=$mq7=$mq8="";

while($r1=mysqli_fetch_array($result))
{
	$_SESSION["q2_session"] = $r1["q2"];
		$q2=str_replace("\n","<br>",$_SESSION["q2_session"]);
	$_SESSION["mq5_session"] = $r1["mq5"];
		$mq5=str_replace("\n","<br>",$_SESSION["mq5_session"]);
	$_SESSION["mq6_session"] = $r1["mq6"];	
		$mq6 = str_replace("\n","<br>",$_SESSION["mq6_session"]);
	$_SESSION["mq7_session"] = $r1["mq7"];	
		$mq7 = str_replace("\n","<br>",$_SESSION["mq7_session"]);
	$_SESSION["mq8_session"] = $r1["mq8"];	
		$mq8 = str_replace("\n","<br>",$_SESSION["mq8_session"]);
}

?>
<div class="container" style="margin-top:40px;">
	<div class="w3-border w3-padding">
	<div class="w3-padding">
	<h6>Question 2 of 10 \ Multiple Choice Questions</h6>
	<br>
	<h1><kbd>2.</kbd> <?php echo $q2; ?></h1> 
	<br>
	<hr>
	<br>
	<div class="row">
		<center>
		<h3>
		<div class="col-sm-6">
			<div class="radio">
				<label><input type="radio" name="secoption" value="<?php echo $mq5; ?>"><?php echo $mq5; ?></label>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="radio">
				<label><input type="radio" name="secoption" value="<?php echo $mq6; ?>"><?php echo $mq6; ?><label>
			</div>
		</div>
		</h3>
		</center>
	</div>
	<div class="row">
		<center>
		<h3>
		<div class="col-sm-6">
			<div class="radio">
				<label><input type="radio" name="secoption" value="<?php echo $mq7; ?>"><?php echo $mq7; ?></label>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="radio">
				<label><input type="radio" name="secoption" value="<?php echo $mq8; ?>"><?php echo $mq8; ?></label>
			</div>
		</div>
		</h3>
		</center>
	</div>
	</div>
	<br>
	<br>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-12">
			<button type="button" class="btn btn-primary w3-right" data-toggle="modal" data-target="#mymodal1">save and submit <span class="fa fa-arrow-right"></span></button>
				<div class="modal fade" id="mymodal1" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content w3-animate-zoom">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<center><div class="modal-title"><h2>Save and Submit</h2></div></center>
							</div>
							<div class="modal-body">
								<center><h4>Are you sure you want to continue ?</h4></center>
							</div>
							<div class="modal-footer">
								<button type="submit" name="yes2" class="btn btn-primary">yes <span class="glyphicon glyphicon-thumbs-up"></span></button>
								<button type="button" class="btn btn-primary" data-dismiss="modal">no <span class="glyphicon glyphicon-thumbs-down"></span></button>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>
	</form>
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

<?php
}
else
{
?>
<div class="container" style="margin-top:250px;">
	<center><h1 style="color:red;">Already Attempted</h1></center>
</div>
<?php
}
?>
