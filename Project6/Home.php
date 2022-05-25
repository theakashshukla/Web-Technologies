<html>
<head>
<title>Welcome </title>
</head>
<body>
<br/>
<?php 
session_start();
$stime=$_SESSION['stime'];
echo "<p align='right'><b>".$_SESSION['stime']."</b></p>";
echo "Welcome : ".$_SESSION['name'];

?> 
<form name="form1" method="post">
<input type="submit" name="logout" value="LOGOUT">
</form>
<?php 
if(isset($_POST['logout']))
{ 
$uname=$_POST["uname"];
date_default_timezone_set('Asia/Kolkata');
$currentTime = date( 'h:i:s A', time () );
session_start();
$_SESSION["stime"] = $_SESSION['stime'];
$_SESSION["etime"] = $currentTime;
header('Location: Welcome.php'); 
}
?> 
</body>
</html>