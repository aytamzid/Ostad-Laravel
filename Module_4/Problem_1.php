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

$input = array('a', 'quick', 'brown', 'fox', 'jumped', 'over', 'the', 'lazy', 'dog');

print_r(sortArrayByStringLength($input));
