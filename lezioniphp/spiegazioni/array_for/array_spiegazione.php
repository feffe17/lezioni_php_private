<?php

//VEDERE UN ARRAY
    $variabilenomeacaso = array("aa",10,20);
    var_dump($variabilenomeacaso);
    echo "<br>";


//USARE UN ARRAY PER VERIFICARNE UN CONTENUTO. FUNZIONE in_array($ricercato,$lista)
    $vocali = array("a","e","i","o","u");
    verifica_contenuto_array("b",$vocali);

    function verifica_contenuto_array($lettera,$vocali){
        if(in_array($lettera,$vocali)){
            echo "Vocale<br>";
        } else {
            echo "Consonante<br>";
        }
    }


//INSERIRE QUALCOSA ALLA FINE O ALL'INIZIO DI UN ARRAY

    $variabilenomeacaso = array("aa",10,20);
    array_push($variabilenomeacaso,"ciao"); //INSERISCE ALLA FINE
    array_unshift($variabilenomeacaso,"inizia"); //INSERISCE ALL'INIZIO
    var_dump($variabilenomeacaso);
    echo "<br>";


//PUNTARE QUALCOSA DENTRO UN ARRAY

    $variabilenomeacaso = array("aa",10,20);
    echo $variabilenomeacaso[2]."<br>";


//PUNTARE QUALCOSA DENTRO UN ARRAY CON UNA VARIABILE

    $numero = 1;
    $variabilenomeacaso = array("aa",10,20);
    echo $variabilenomeacaso[$numero]."<br>";


//IL MODO PER FARSI RESTITUIRE LA LUNGHEZZA DI UN ARRAY, E' TRAMITE UNA FUNZIONE PHP

    $variabilenomeacaso = array("aa",10,20);
    echo count($variabilenomeacaso);


?>