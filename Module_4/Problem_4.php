<?php

$input1 = "Hello World";
$input2 = "Roll no 21";

function checkLetterWhitespace($str)
{
    return preg_match('/^[A-Za-z\s]+$/', $str);
}

if (checkLetterWhitespace($input1)) {
    echo "Contains only letter and whitespace. \n";
} else {
    echo "Doesn't contains only letter and whitespace.";
}
if (checkLetterWhitespace($input2)) {
    echo "Contains only letter and whitespace.";
} else {
    echo "Doesn't contains only letter and whitespace. \n";
}
