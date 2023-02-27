<?php
$car = array('Dastun', 'Honda', 'BMW');
array_push($car,'Alto');
foreach ($car as $c)
{
echo "$c, ";
}
sort($car);
echo "<ol type =A>";
foreach ($car as $y)
{
echo "<li>$y</li>";
}
echo "</ol>";
?>