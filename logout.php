<?php

date_default_timezone_set("Asia/Kolkata");

session_start();
session_destroy();

unset($_SESSION["user1"]);
header("location:acmlogin2.php");


?>


<?php

session_start();
session_destroy();

unset($_SESSION["user2"]);
unset($_SESSION["user3"]);
unset($_SESSION["user4"]);
unset($_SESSION["user5"]);
unset($_SESSION["user6"]);
unset($_SESSION["user7"]);
unset($_SESSION["user8"]);
unset($_SESSION["user9"]);
unset($_SESSION["user10"]);
unset($_SESSION["user11"]);

header("location:acmlogin2.php");

?>


<?php

session_start();
session_destroy();

unset($_SESSION["user12"]);
header("location:acmloggin.php");


?>
