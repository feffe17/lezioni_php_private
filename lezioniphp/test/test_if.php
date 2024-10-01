
<?php
    /*
     scrivi una funzione che controlla se un numero è > di 10.
    se lo è, stampa il numero normale.
    se non lo è, stampa il numero incrementato di 100.

    se è >10, controllare se è maggiore di 100, se lo è sottrrai 50, se non lo è aggiungi 10

    se>100 controlla se >200 se lo è togliere 50 se non lo è non stampare nulla
    */

    function maggioredidieci($n){
        if($n>10){
            if($n>100){
                if($n>200){
                    return ($n - 50);
                }
            } else {
                return ($n + 10);
            }
        } else {
            if($n>5){
                return ($n + 100);
            } else {
                return ($n + 200);
            }
        }
    }
    echo maggioredidieci(199)

?>