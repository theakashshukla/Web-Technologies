<?php
$num1=$_POST["fnum"];
$num2=$_POST["snum"];
$op=$_POST["op"];
if($num1=="" or $num2=="")
{
    echo "Please enter two numbers...";
}
else
{
    echo "First Number is : ".$num1."<br/>"; 
    echo "Second Number is : ".$num2."<br/>";
    echo "Operator is : ".$op."<br/>";
    if($op=="+")
    {
        $res=$num1+$num2;
        echo "Additon is : ".$res;
    }
    if($op=="-")
    {
        $res=$num1-$num2;
        echo "Subtraction is : ".$res;
    }
    if($op=="*")
    {
        $res=$num1*$num2;
        echo "Multiplication is : ".$res;
    }
    if($op=="/")
    {
        $res=$num1/$num2;
        echo "Division is : ".$res;
    }
    if($op=="%")
    {
        $res=$num1%$num2;
        echo "Modulus is : ".$res;
    }
}?>