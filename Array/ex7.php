<?php
$arr = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 
65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73 );

$avarge = array_sum( $arr ) / count( $arr );
print($avarge);
sort( $arr );
$lowest = array_splice($arr, 0, 7);
print_r($lowest);
arsort( $arr );
$highest = array_splice($arr, 0, 7);
print($highest);
?>