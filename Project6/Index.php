<html>
<head>
<title>Index</title>
</head>
<body>
<form name="form1" method="post">
<table align="center" width="70%" border="0" cellpadding="3" cellspacing="1">
<br/>
<tr>
<td>Name  : </td>
<td><input name="uname" type="text"></td>
</tr>
<tr>
<td></td>
<td ><input type="submit" name="Submit" value="SUBMIT"></td>
</tr>
</table>
</form>
<?php 
if(isset($_POST['Submit']))
{ 
date_default_timezone_set('Asia/Kolkata');
$currentTime = date( 'h:i:s A', time () );
$uname=$_POST["uname"];
session_start();
$_SESSION["name"] = $_POST["uname"];
$_SESSION["stime"] = $currentTime;
header('Location: Home.php'); 
}
?> 
</body>
</html>