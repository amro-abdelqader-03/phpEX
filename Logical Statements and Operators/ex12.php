<?php
$grade1 = (int) readline("Enter grade 1 : ");
$grade2 = (int) readline("Enter grade 2 : ");
$grade3 = (int) readline("Enter grade 3 : ");
$grade4 = (int) readline("Enter grade 4 : ");
$grade5 = (int) readline("Enter grade 5 : ");
$result = ( $grade1 + $grade2 + $grade3 + $grade4 + $grade5) / 5;
if ($result >= 90){
    echo "A";
} else if ($result >= 80){
    echo "B";
} else if ($result >= 70){
    echo "C";
} else if ($result >= 60){
    echo "D";
} else {
    echo "F";
}

?>