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
$result = mysqli_query($conn,"select password from acm14 where password = '".$_SESSION["key1_session"]."'");

$result_value = mysqli_fetch_array($result);

if($result_value['password']!="123456")
{
   header("Location: acmlogin2.php");
}

#------------------------------------------

$sql="select * from acm20 where id = 1";

$result=mysqli_query($conn,$sql);

$texxt1=$texxt2=$texxt3=$texxt4=$texxt5="";

while($r=mysqli_fetch_array($result))
{
	$_SESSION["Q1_session"]=$r["teext1"];
	$texxt1= str_replace('\n', "<br>",$_SESSION["Q1_session"]);
	$_SESSION["Q2_session"]=$r["teext2"];
	$texxt2=str_replace("\n","<br>",$_SESSION["Q2_session"]);
	$_SESSION["Q3_session"]=$r["teext3"];
	$texxt3=str_replace("\n","<br>",$_SESSION["Q3_session"]);
	$_SESSION["Q4_session"]=$r["teext4"];
	$texxt4=str_replace("\n","<br>",$_SESSION["Q4_session"]);
	$_SESSION["Q5_session"]=$r["teext5"];
	$texxt5=str_replace("\n","<br>",$_SESSION["Q5_session"]);
}

if(!isset($_SESSION["user1"]))
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
	<div class="w3-bar-item w3-mobile" style="font-size:30px;">First Round</div>
</div>

<!--------------nav bar for tablets--------------->
<div class="w3-bar w3-light-grey w3-card w3-hide-large w3-hide-small w3-mobile" style="width:100%; box-shadow:0 4px 8px rgba(0,0,0,0.6);">
	<div class="w3-bar-item" style="font-size:15px;"><b>ACM and ACM-W</b></div>
	<div class="w3-bar-item w3-mobile" style="font-size:15px;">First Round</div>
</div>

<!------------nav bar for mobiles------------>
<div class="w3-bar w3-light-grey w3-card w3-hide-large w3-hide-medium w3-mobile" style="width:100%; box-shadow:0 4px 8px rgba(0,0,0,0.6);">
	<div class="w3-bar-item" style="font-size:15px;"><b>ACM and ACM-W</b></div>
	<div class="w3-bar-item w3-mobile" style="width:100%;">First Round</div>
</div>

<!------------tabs for desktop and tablet------------>
<div class="nav nav-tabs w3-bar-block w3-hide-small w3-light-grey w3-mobile" style="width:110px; position:fixed; height:600px;">
	<h3 class="w3-bar-block w3-mobile w3-padding" style="width:110px; height:60px;">Q. No.</h3>
	<button class="w3-button w3-bar-block w3-mobile" style="width:110px; height:108px;" data-toggle="tab" data-target="#user1">1. </button>
	<button class="w3-button w3-bar-block w3-mobile" style="width:110px; height:108px;" data-toggle="tab" data-target="#user2">2. </button>
	<button class="w3-button w3-bar-block w3-mobile" style="width:110px; height:108px;" data-toggle="tab" data-target="#user3">3. </button>
	<button class="w3-button w3-bar-block w3-mobile" style="width:110px; height:108px;" data-toggle="tab" data-target="#user4">4. </button>
	<button class="w3-button w3-bar-block w3-mobile" style="width:110px; height:108px;" data-toggle="tab" data-target="#user5">5. </button>
</div>

<!------------tabs for mobile------------------>
<div class="nav nav-tabs w3-bar-block w3-hide-large w3-light-grey w3-hide-medium w3-mobile" style="width:110px;">
	<center><h3 class="w3-bar-block w3-mobile w3-padding" style="width:110px;">Q. No.</h3></center>
	<button class="w3-button w3-bar-block w3-mobile" style="width:100%" data-toggle="tab" data-target="#user1">1. </button>
	<button class="w3-button w3-bar-block w3-mobile" style="width:100%" data-toggle="tab" data-target="#user2">2. </button>
	<button class="w3-button w3-bar-block w3-mobile" style="width:100%" data-toggle="tab" data-target="#user3">3. </button>
	<button class="w3-button w3-bar-block w3-mobile" style="width:100%" data-toggle="tab" data-target="#user4">4. </button>
	<button class="w3-button w3-bar-block w3-mobile" style="width:100%" data-toggle="tab" data-target="#user5">5. </button>
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
            document.getElementById('body').innerHTML = "time over <a href='acm1.php' style='color:blue;'>continue to next question</a>";
			
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
			<script>countdown( "countdown", 35, 0 );</script>
		</div>
	</div>
</div>

<div class="w3-main w3-padding" style="margin-left:110px;">

<form method="post" action="acm1.php">
    <div class="form-group">
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-user"></i></span>
<input type="text" class="form-control" name="username" placeholder="enter your given username" maxlength="100">
</div>
</div>



<div class="row w3-hide-small">
	<center>
	<div class="col-sm-6">
		<h3>Question Description</h3>
	</div>
	<div class="col-sm-6">
		<h3>Coding Area</h3>
	</div>
	</center>
</div>

<div class="w3-bar w3-mobile w3-hide-large w3-hide-medium">
<div class="row">
	<center>
	<div class="col-sm-6">
		<h5 class="w3-bar-item">Question Description</h5>
	</div>
	<div class="col-sm-6">
		<h5 class="w3-bar-item">Coding Area</h5>
	</div>
	</center>
</div>
</div>


<div class="tab-content">
	<div class="tab-pane fade" id="user1">
		<center>
		<div class="row w3-padding" style="margin-top:30px;">
			<div class="col-sm-6">
				<h3 style="white-space:pre-wrap;"><?php echo $texxt1; ?></pre></h3>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-laptop"></i></span>
						<textarea class="form-control" placeholder="write your code . . ." rows="20" name="code1" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false"></textarea>
					</div>
				</div>
			</div>
		</div>
		</center>
		</div>
		<div class="tab-pane fade" id="user2">
		<center>
		<div class="row w3-padding" style="margin-top:30px;">
			<div class="col-sm-6">
				<h3 style="white-space:pre-wrap;"><?php echo $texxt2; ?></h3>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-laptop"></i></span>
						<textarea class="form-control" placeholder="write your code . . ." rows="20" name="code2" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false"></textarea>
					</div>
				</div>
			</div>
		</div>
		</center>
		</div>
		<div class="tab-pane fade" id="user3">
		<center>
		<div class="row w3-padding" style="margin-top:30px;">
			<div class="col-sm-6">
				<h3 style="white-space:pre-wrap;"><?php echo $texxt3; ?></h3>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-laptop"></i></span>
						<textarea class="form-control" placeholder="write your code . . ." rows="20" name="code3" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false"></textarea>
					</div>
				</div>
			</div>
		</div>
		</center>
		</div>
		<div class="tab-pane fade" id="user4">
		<center>
		<div class="row w3-padding" style="margin-top:70px;">
			<div class="col-sm-6">
				<h4 style="white-space:pre-wrap;"><?php echo $texxt4; ?></h4>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-laptop"></i></span>
						<textarea class="form-control" placeholder="write your code . . ." rows="15" name="code4" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false"></textarea>
					</div>
				</div>
			</div>
		</div>
		</center>
		</div>
		<div class="tab-pane fade" id="user5">
		<center>
		<div class="row w3-padding" style="margin-top:70px;">
			<div class="col-sm-6">
				<h4 style="white-space:pre-wrap;"><?php echo $texxt5; ?></h4>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-laptop"></i></span>
						<textarea class="form-control" placeholder="write your code . . ." rows="15" name="code5" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false"></textarea>
					</div>
				</div>
			</div>
		</div>
		<br>
		<hr>
		<button type="button" class="btn btn-primary w3-hover-shadow" style="transition:0.5s;" data-toggle="modal" data-target="#mymodal">save and submit</button>
			<div class="modal fade" id="mymodal" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<div class="modal-title"><h2>Submit Answers</h2></div>
						</div>
						<div class="modal-body">
							<h5>Are you sure you want to submit the answers ?</h5>
						</div>
						<div class="modal-footer">
							<button type="submit" name="submit" class="btn btn-primary" style="transition:0.5s;">yes <span class="glyphicon glyphicon-thumbs-up"></span></button>
							<button type="button" class="btn btn-primary" style="transition:0.5s;" data-dismiss="modal">no <span class="glyphicon glyphicon-thumbs-down"></span></button>
						</div>
					</div>
				</div>
			</div>
		</center>
	</div>
</div>
</form>

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

</div>

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

</body>
</html>
