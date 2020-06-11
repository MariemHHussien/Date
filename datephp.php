<?php
include 'date.html';
echo "<h1 style='margin-left:530px;'>Date:</h1>";
echo " Today is:".date('l')."</br>";
echo "Month :".date('F')."</br>";
echo date('Y-m-d')."</br>";
//echo "the time now is"." ".date('H:i:m ');
$time=strtotime('+1 hour');
echo date('H:i:m ',$time);




?>

