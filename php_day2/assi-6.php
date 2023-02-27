<?php
$my_array = array('Dastun', 'Honda', 'BMW');
$new_array = array_map('strlen', $my_array);
 
echo "The shortest array length is ". min($new_array)."<br>"." The longest array length is " . max($new_array).'.'; 
?>