<?php
$num1 = (int) readline("Enter num 1 : ");
$num2 = (int) readline("Enter num 2 : ");
$num3 = (int) readline("Enter num 3 : ");

if ($num1 > $num2 && $num1 > $num3) {
    echo "$num1";
}
else if($num2 > $num1 && $num2 > $num3) {
    echo "$num2";
}
else{
    echo "$num3";
}
?>