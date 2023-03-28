                                                                                Problem 1:

<?php

$input = 0;

function checkIfEven(int $number){
    if($number%2 == 0){
        return true;
    }
    else{
        return false;
    }
}

if($input == 0){
    echo "The number is ZERO.";
}
elseif(checkIfEven($input)){
    echo "The number is Even.";
}
else {
echo "The number is Odd.";
}





                                                                                Problem 2:


<?php

$lastDigit= 100;
$sum = 0;

for($i=1; $i<=$lastDigit; $i++){
$sum+=$i;
}

echo "The summation of the series 1 to {$lastDigit} is: {$sum}";



