
<?php
    /*
        creare una funzione per ogni calcolo aritmetico (somma, sottrazion, moltiplicazione e divisione)
     */
    function somma($val1 = 0, $val2 =  0, $val3 = 0){
        $sum = $val1 + $val2 + $val3;
        return $sum;
    }
    echo somma(4,7,6);

    function sottrazione($val2 = 0, $val1 = 0){
        $minus = $val2 - $val1;
        return  $minus;
    }
    echo sottrazione(846,231);

    function moltiplicazione($val1 = 1, $val2 = 1, $val3 = 1){
        $times = $val1 * $val2 * $val3;
        return $times;
    }
    echo moltiplicazione(6,9,8);

    function divisione($val2 = 1, $val1 = 1){
        if($val1!=0) {
            $divided = $val2 / $val1;
            return $divided;
        } else {
            return "impossibile";
        }
    }
    echo divisione(99,0);

    function resto($val2 = 1, $val1 = 1){
        $change= $val2 % $val1;
        return $change;
    }
    echo resto(70,4);
?>
