<?php
$tuition = 6000;

$comission = ( $tuition >= 20000) ? "Comission of $tuition is 25% and tuition fee is = \$" . 0.25 * $tuition :
(($tuition > 10000) ? "Comission of $tuition is 20% and tuition fee is = \$" . 0.20 * $tuition :
(($tuition >= 7000) ? "Comission of $tuition is 15% and tuition fee is = \$" . 0.15 * $tuition : "Invalid Data."
));

    
echo $comission;
