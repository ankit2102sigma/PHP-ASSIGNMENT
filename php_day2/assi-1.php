<?php
$car = array('Dastun', 'Honda', 'BMW');
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