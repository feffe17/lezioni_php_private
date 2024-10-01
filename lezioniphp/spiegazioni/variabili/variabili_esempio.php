<?php

    //Abbiamo un valore stringa, un valore int ed un valore boolean

    //Se il valore int è uguale a 10, controllare se il valore boolean è uguale a true.
    //  Se il valore boolean è true, stampare la stringa

    //Se il valore int è minore o maggiore di 10, controllare se il valore stringa è uguale a
    //'stamo_da_pazzi', se lo è, stampare il boolean.

        $stringa = "stamo_da_pazzi";
        $int = 11;
        $boolean = false;

        controllo_esempio($stringa,$int,$boolean);

        function controllo_esempio($par_stringa, $par_int, $par_boolean){
            if($par_int == 10){
                if($par_boolean){
                    echo $par_stringa;
                }
            } else {
                if(strcmp($par_stringa,"stamo_da_pazzi") == 0){
                    echo $par_boolean;
                }
            }
        }

?>