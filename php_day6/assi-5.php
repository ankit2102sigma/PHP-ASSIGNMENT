<?php
function bubbleSort($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n-1; $i++) {
        for ($j = 0; $j < $n-$i-1; $j++) {
            if ($arr[$j] > $arr[$j+1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
            }
        }
    }
    return $arr;
}

$myArray = array(3, 6, 1, 8, 2, 9, 4, 5, 7);
echo "Original array: " . implode(", ", $myArray) . "<br>";
$sortedArray = bubbleSort($myArray);
echo "Sorted array: " . implode(", ", $sortedArray);
?>