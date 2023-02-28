<?php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
$cars_len  = count($cars);
for($x = 0; $x <$cars_len; $x++) {
    echo $cars[$x]. "<br>" ;
}

?> 