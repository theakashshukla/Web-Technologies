<?php
$name=$_POST["uname"];
$age=$_POST["age"];
if($age<18)
{
echo "Hello ".$name." , <font color=red size=5>You are not authorized to visit this site</font>";
}
else
{
    echo "Hello ".$name." ,<font color=green size=5> Welcome to this site</font>";
}
?>