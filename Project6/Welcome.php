<html>
<head>
<title>Welcome</title>
</head>
<body>
<?php
session_start();
echo "Thank You  ".$_SESSION["name"]."<br/>";
$stime=$_SESSION['stime'];
$etime=$_SESSION['etime'];
echo "Login time is :". $stime."<br/>";
echo "Logout time is : ".$etime."<br/>";
$time1 = new DateTime($stime);
$time2 = new DateTime($etime);
$interval = $time1->diff($time2);
echo "Duration is :" . $interval->format('%s second(s)');
?>
</body>
</html>