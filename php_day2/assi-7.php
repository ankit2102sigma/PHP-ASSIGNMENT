<?php
function min_values_not_zero(Array $values) 
{
return min(array_diff(array_map('intval', $values), array(0)));
}
print_r(min_values_not_zero(array(1,2,3,4,5,6,7,9,0,0,0,0,-5,-10,-50))."\n");
?>