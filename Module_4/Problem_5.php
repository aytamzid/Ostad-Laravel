<?php

$input = array(10, 5, 20, 40, 50, 50, 40, 30, 70, 80, 12, 13);

function secondLargest($arr)
{

    $uniqueCheck = array_unique($arr);
    rsort($uniqueCheck);
    // print_r($uniqueCheck);
    return $uniqueCheck[1];
}

echo "The Second Largest number of the array is: " . secondLargest($input);
