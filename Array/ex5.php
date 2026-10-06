<?php
$arr = array("1", "2", "3", "4", "5");
$loc = (int) readline("Enter an location : ");
$elem = readline("enter an element : ");
array_splice($arr, $loc - 1, 0, $elem);
print_r($arr);
?>