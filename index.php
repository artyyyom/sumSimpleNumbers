<?php

function sumSimpleNumbers($n) { 
    $sum = 0;

    for($i=2; $i<=$n; $i++) {
        $counter = 0;

        for($j=1; $j<=$i; $j++) { 
            if($i%$j == 0) { 
                $counter++; 
            } 
        } 
    
        if ($counter == 2) { 
            $sum += $i;
        } 
    } 
    
    return $sum; 
} 

echo sumSimpleNumbers(30); 