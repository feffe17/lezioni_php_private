<?php

    //LE DUE FUNZIONI PIU USATE MESSE A DISPOSIZIONE DI PHP SONO IF E FOR
    //IL FOR E' UNA FUNZIONE CHE SI USA PER FARE PIU VOLTE UNO STESSO INSIEME
    //DI OPERAZIONI


    function prova($var){
        for ($i = 0; $i < 3; $i++) {
            if($i==2){
                //echo $i;
            }
        }
    }



    $ciao = "ciao";
    prova($ciao);

    //ESERCIZIO DI PROVA FEFFE SIMPLIFIED

    $stringhe=array('ciao','pollo','giri','giorgio','ciao','pollo','giri','giorgio','ciao','pollo','giri','giorgio','ciao','pollo','giri','giorgio');
    es4($stringhe);

    function es4($check){

        for($i=0;$i<count($check);$i++) {
            if (strpos($check[$i], "a") !== false) {
                if (strpos($check[$i], "o") !== false) {
                    echo "stringa ".($i+1).": ".$check[$i].", contiene sia la A che la O <br> ";
                } else {
                    echo "stringa ".($i+1).": ".$check[$i].", contiene solo la lettera A<br>";
                }
            } else {
                if (strpos($check[$i], "o") !== false) {
                    echo "stringa ".($i+1).": ".$check[$i].", contiene solo la lettera O<br>";
                } else {
                    echo "stringa ".($i+1).": ".$check[$i].", non contiene ne la A ne la O<br>";
                }
            }
        }

    }
?>