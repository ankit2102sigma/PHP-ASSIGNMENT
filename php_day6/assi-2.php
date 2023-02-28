<?php
$json = '{"number": 12345678901234567890}';
$json_given = '{"number2": 123456789012345678901234567890}';

var_dump(json_decode($json));
echo "<br>";
var_dump(json_decode($json_given));