<?php

function check($a, $b)
{
    return strlen($a) - strlen($b);
}
function sortArrayByStringLength(array $strings)
{
    usort($strings, 'check');
    return $strings;
}

$input = array('one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine');

print_r(sortArrayByStringLength($input));
