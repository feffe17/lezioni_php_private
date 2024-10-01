<?php
    //DICHIARA UN ARRAY DI 4 NUMERI
    //POI SOMMA QUESTI NUMERI E AGGIUNGI LA SOMMA COME ULTIMO VALORE DELL'ARRAY

    $newarray = array(23,17,9,12);
    es($newarray);
    function es($array){
        $sum = $array[0] + $array[1] + $array[2] + $array[3];
        array_push($array, $sum);
        var_dump($array);
    }

    /*
    echo"<br>";
    function somma($val1 = 0, $val2 =  0, $val3 = 0, $val4 = 0){
    $sum = $val1 + $val2 + $val3 + $val4;
    return $sum;
    }

    echo somma(34, 64,92);

    */
    ?>