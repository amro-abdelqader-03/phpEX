<?php
$num1 = (int) readline("enter num 1 : ");
$num2 = (int) readline("enter num 2 : ");
$operation = readline("enter operation : ");
$result = 0;
if ($operation == "+") {
    $result = $num1 + $num2;
    echo "$result";
} else if ($operation == "-") {
    $result = $num1 - $num2;
    echo "$result";
} else if ($operation == "*") {
    $result = $num1 * $num2;
    echo "$result";
} else if ($operation == "/") {
    $result = $num1 / $num2;
    echo "$result";
} else {
    echo "invalid operation";
}
?>