<?php

$year = (int) readline("Enter a year : ");

if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0)
    echo "This year is a leap year";
else
    echo "This year is a not leap year";



?>