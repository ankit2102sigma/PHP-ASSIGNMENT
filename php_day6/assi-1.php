<?php
  
$json_data = '{"A": 2102, "B": 2102, "C": 2023, "D":2024}';
  
$dec = json_decode($json_data);
  
print $dec->{'A'};
  
?>