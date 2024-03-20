<h1>Sum</h1>
<?php

    function sum($n1,$n2) {
        if (!isset($n2)) {

            echo "Num2 is missing!";
            return false;
        }
        return $n1 + $n2;
    }

     $num1 = 44;
     $num2 = 10;
     
     if ( isset($num1) AND isset($num2)  ) {
         $sum = @sum($num1, $num2);
         echo "ths sum is " . $sum

     }

?>