<?php
$original = array( '5','2','8','9','1' );
echo 'Original array : '."\n";
foreach ($original as $x) 
{echo "$x ";}
$inserted = '3';
array_splice( $original, 3, 0, $inserted ); 
echo " \n After inserting '3' the array is : "."\n";
foreach ($original as $x) 
{echo "$x ";}
echo "\n"
?>