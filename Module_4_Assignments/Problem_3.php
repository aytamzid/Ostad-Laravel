<?php

$input = array('first', 'second', 'third', 'forth', 'fifth', 'sixth');

function removeFandLElement($arr)
{
    array_shift($arr);
    array_pop($arr);
    return $arr;
}

print_r(removeFandLElement($input));
