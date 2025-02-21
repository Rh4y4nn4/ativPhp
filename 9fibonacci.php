<?php

function fibonacci($n) {
    $a = 0;
    $b = 1;
    echo "Fibonacci até o $nº termo:<br>";
    
    
    echo "$a<br>";
    echo "$b<br>";
    
    
    for ($i = 3; $i <= $n; $i++) {
        $c = $a + $b;
        echo "$c<br>";
        
       
        $a = $b;
        $b = $c;
    }
}


fibonacci(10);
?>