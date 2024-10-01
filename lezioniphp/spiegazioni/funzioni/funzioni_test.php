<?php
    function somma($val1 = 0, $val2 = 0){
    return $val1 + $val2;
    }
    echo somma(4,5),"<br>";


    function sottrazione($val1 = 0, $val2 = 0, $val3 = 0)
    {
        if ($val1 < ($val2 + $val3)) {
            echo "Inserire dei valori possibili<br>";
        }
        else{
            return($val1 - $val2 - $val3);
        }
    }
    echo sottrazione(12 , 5 , 7), "<br>";


    function per($val1 = 0, $val2 = 0){
        return $val1 * $val2;
    }
    echo per(87 , 2), "<br>";


   function divisione($val1 = 0 , $val2 = 0){
       return $val1 / $val2;
   }
   echo divisione(56 , 7), "<br>";

   function resto($val1 = 0 , $val2 = 0){
       return $val1 % $val2;
   }
   echo resto(9 , 3),"<br>";






















