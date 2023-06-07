<?php
 function findPerfectSquare() {
    $numberStart = 1;
    $numberEnd = 100;
    for ($i = $numberStart; $i <= $numberEnd; $i++) { 
        $x = sqrt($i);
        if ((int)$x*(int)$x == $i) {
            echo $i . " là số chính phương <br>";
        }
    }        
}
$numberStart = 1;
$numberEnd = 100;
echo findPerfectSquare();
?>







