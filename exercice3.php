<?php
$my_array = array("bmw","jeep","dastun","ferrari","Honda");
$new_array = array_map('strlen', $my_array);
echo "The shortest array length is " . min($new_array) .
". The longest array length is " . max($new_array).'.';
?>
